<?php 

	require_once("geral.php");

	if (!session_id()) @session_start();
	$msg = new \Plasticbrain\FlashMessages\FlashMessages();

	$url = get_home_url();

	if (!isset($_SESSION['logado'])) {

	    header("HTTP/1.1 301 Moved Permanently");
		header("Status: 301 Moved Permanently");
		header("Location: {$url}");
		header("Connection: close");
	    exit;
	}

	if ($_POST['cadastrarCliente']) {

		$nome = $_POST['nome'];
		$usuario = $_POST['usuario'];
		$email = $_POST['email'];
		$senha = md5($_POST['senha']);
		$tipo_usuario = 'cliente';
		$status = 'Ativo';
		$deletado = 'Nao';

		try {

			$stmt = $conn->prepare("INSERT INTO wp_usuario (nome, usuario, email, senha, tipo_usuario, status, deletado, wp_processo_idprocesso) VALUES (:nome, :usuario, :email, :senha, :tipo_usuario, :status, :deletado, NULL)");
			$stmt->bindParam(':nome', $nome);
			$stmt->bindParam(':usuario', $usuario);
			$stmt->bindParam(':email', $email);
			$stmt->bindParam(':senha', $senha);
			$stmt->bindParam(':tipo_usuario', $tipo_usuario);
			$stmt->bindParam(':status', $status);
			$stmt->bindParam(':deletado', $deletado);
			$stmt->execute();
			$sucesso = "Cliente cadastrado com sucesso";
			
		} catch (Exception $e) {

			$erro = "Erro ao cadastrar, usuário ja existe";

		}		
	}

	if ($_POST['editarCliente']) {

		$idusuario = $_POST['idEditar'];
		$nome = $_POST['nome'];
		$usuario = $_POST['usuario'];
		$email = $_POST['email'];
		$senha = md5($_POST['senha']);

		try {

			$stmt = $conn->prepare("UPDATE wp_usuario SET nome = '{$nome}', usuario = '{$usuario}', email = '{$email}', senha = '{$senha}' WHERE idusuario = $idusuario");
			$stmt->execute();
			$sucesso = "Cliente editado com sucesso";
			
		} catch (Exception $e) {

			$erro = "Erro ao editar, usuário ja existe";

		}		
	}

	try {

		$idusuario = $dados->idusuario;
		$stmt = $conn->query("SELECT * FROM wp_processo 
						INNER JOIN wp_conteudo ON wp_processo.idprocesso = wp_conteudo.idconteudo 
						INNER JOIN wp_usuario ON wp_processo.idprocesso = wp_usuario.wp_processo_idprocesso 
						WHERE idusuario = {$idusuario}
						ORDER BY wp_conteudo.data DESC");
		$timeline = $stmt->fetchAll();
		$idprocesso = $timeline->idconteudo;
		
	} catch (Exception $e) {

		$erro = $e->getMessage();

	}

	if(isset($_GET['id']) && isset($_GET['status'])) {

	    $idusuario = $_GET['id'];
	    $status = $_GET['status'];

	    try {

			$stmt = $conn->prepare("UPDATE wp_usuario SET status = '{$status}' WHERE idusuario = $idusuario");
			$stmt->execute();
			
		} catch (Exception $e) {

			$erro = $e->getMessage();

		}

	} 

	if(isset($_GET['id']) && isset($_GET['deletado'])) {

	    $idusuario = $_GET['id'];
	    $deletado = $_GET['deletado'];

	    try {

			$stmt = $conn->prepare("UPDATE wp_usuario SET deletado = '{$deletado}' WHERE idusuario = $idusuario");
			$stmt->execute();
			
		} catch (Exception $e) {

			$erro = $e->getMessage();

		}

	} 

	try {

		$stmt = $conn->query("SELECT * FROM wp_usuario WHERE tipo_usuario = 'cliente' AND deletado != 'Sim'");
        $usuarios = $stmt->fetchAll();
		
	} catch (Exception $e) {

		$erro = $e->getMessage();

	}





?>
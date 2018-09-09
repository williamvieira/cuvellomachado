<?php 

	require_once("geral.php");

    if(isset($_POST['login'])) {

		$login = $_POST['usuario'];
		$senha = $_POST['senha'];
		$senha = md5($senha);

		$sql = "SELECT * FROM wp_usuario WHERE usuario = '{$login}' AND senha = '{$senha}' AND deletado != 'Sim'";

		$stmt = $conn->query($sql);

		$funcs = $stmt->fetch();
		$idusuario = $funcs->idusuario;
		$usuario = $funcs->usuario;
		$email = $funcs->email;
		$senha = $funcs->senha;
		$tipo_usuario = $funcs->tipo_usuario;
		$wp_processo_idprocesso = $funcs->wp_processo_idprocesso;

		if ($stmt->rowCount() > 0) {

			session_name('cuvellomachado');
			session_start();
			$_SESSION['logado'] = true;
			$_SESSION["dados"] = (object) array(
											'idusuario' => $idusuario, 
											'usuario' => $usuario, 
											'tipo_usuario' => $tipo_usuario
										);

		} else {

			echo "No";

		}

	} 

?>
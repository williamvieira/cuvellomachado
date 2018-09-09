<?php

    require_once("PHPMailer/class.phpmailer.php");
	require_once('PHPMailer/PHPMailerAutoload.php');

	require_once("geral.php");

	if (!session_id()) @session_start();
	$msg = new \Plasticbrain\FlashMessages\FlashMessages();

	if (!isset($_SESSION['logado'])) {

		$url = get_home_url();
	    header("HTTP/1.1 301 Moved Permanently");
		header("Status: 301 Moved Permanently");
		header("Location: {$url}");
		header("Connection: close");
	    exit;
	}

	$idusuario = $_GET['id'];
	$conteudo = $_POST['conteudo'];
	$data = date('Y-m-d H:i:s');

	$sqlJoin = "SELECT * FROM wp_processo 
					INNER JOIN wp_conteudo ON wp_processo.idprocesso = wp_conteudo.idconteudo 
					INNER JOIN wp_usuario ON wp_processo.idprocesso = wp_usuario.wp_processo_idprocesso 
					WHERE idusuario = {$idusuario}
					ORDER BY wp_conteudo.data DESC";

	$stmt = $conn->query($sqlJoin);
	$timeline = $stmt->fetch();
	$idprocesso = $timeline->idconteudo;

if ($_POST['processo']) {
	$sqlJoinEmail = "SELECT * FROM wp_usuario WHERE idusuario = {$idusuario}";
	$stmtEmail = $conn->query($sqlJoinEmail);
	$timelineEmail = $stmtEmail->fetch();
	$idEmailUsuario = $timelineEmail->email;
	// var_dump($idEmailUsuario);

	$mail = new PHPMailer(true);
	$mail->CharSet = 'UTF-8';

	$mail->IsSMTP();

	$data_envio = date('d/m/Y');
	$hora_envio = date('H:i:s');

	// Endereço do servidor SMTP
	$mail->Host = "cmadvo.com"; 
	// $mail->SMTPAuth   = true;
	// $mail->Port = 465;
	$mail->Username = 'no-reply@cmadvo.com';
	$mail->Password = 'Cuvello20#'; 

		try {
			//Remetente
		     $mail->SetFrom('no-reply@cmadvo.com');
		     $mail->AddReplyTo('no-reply@cmadvo.com');
		     $mail->Subject = 'Processo - Atualização';
		     
			//Destinatário
		     $mail->AddAddress($idEmailUsuario);

			// CORPO E-MAIL
			$arquivo = "
			<html>
			    <hr>
			    <div>
			    <h3>Seu processo foi atualizado.</h3>
			    <p>Prezado,</p>
			    <p>Houve andamento no processo.Para mais informações, acesse a área de cliente do site <a href='http://cmadvo.com'>http://cmadvo.com/.</a></p>
			    <img src='http://cmadvo.com/wp-content/themes/cuvello-machado/img/logo.png' alt=''>
			    </div>
			    <br><hr><br>
			    Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b> 
			</html>
			";

			$mail->MsgHTML($arquivo);
			
			$enviado = $mail->Send();
            
            if($enviado = true){
				echo "<script>
						alert('Mensagem enviada com Sucesso!');
						var ultimaPagina = document.referrer;
						window.location = ultimaPagina;
					  </script>";
			}else{
				echo "
				<script>
					alert('Mensagem não enviada, tente novamente.');
					var ultimaPagina = document.referrer;
					window.location = ultimaPagina;
				</script>";
			}
		}
		catch(PDOException $e)
		{
		    echo "Error: " . $e->getMessage();
		}		
}

	if($_POST['processo']) {

		$stmt = $conn->query("SELECT * FROM wp_usuario INNER JOIN wp_processo ON wp_usuario.wp_processo_idprocesso = wp_processo.idprocesso WHERE idusuario = {$idusuario}");
		$processo = $stmt->fetch();
		$trueProcesso = $stmt->rowCount();

		if ($trueProcesso == 0) {

			try {

				$stmt = $conn->prepare("INSERT INTO wp_processo () VALUES ()");
				$stmt->execute();
				$idProcessoConteudo = $conn->lastInsertId();

			} catch (Exception $e) {

				$erro = $e->getMessage();

			}

			try {

				$stmt = $conn->prepare("INSERT INTO wp_conteudo (idconteudo, conteudo, data) VALUES (:idconteudo, :conteudo, :data)");
				$stmt->bindParam(':idconteudo', $idProcessoConteudo);
			    $stmt->bindParam(':conteudo', $conteudo);
			    $stmt->bindParam(':data', $data);
				$stmt->execute();
				$sucesso = "Processo atualizado com sucesso";

			} catch (Exception $e) {

				$erro = $e->getMessage();

			}

			try {

			    $stmt = $conn->prepare("UPDATE wp_usuario SET wp_processo_idprocesso = {$idProcessoConteudo} WHERE idusuario = {$idusuario}");
				$stmt->execute();

			} catch (Exception $e) {

				$erro = $e->getMessage();

			}

		} else {

			try {

				$stmt = $conn->prepare("INSERT INTO wp_conteudo (idconteudo, conteudo, data) VALUES (:idconteudo, :conteudo, :data)");
				$stmt->bindParam(':idconteudo', $idprocesso);
			    $stmt->bindParam(':conteudo', $conteudo);
			    $stmt->bindParam(':data', $data);
				$stmt->execute();
				
			} catch (Exception $e) {

				$erro = $e->getMessage();
			}
		}
	}

	$sqlJoinConteudo = "SELECT * FROM wp_conteudo";
	$stmtConteudo = $conn->query($sqlJoinConteudo);
	$timelineConteudo = $stmtConteudo->fetch();
	$idConteudo = $timelineConteudo->id;
	$idunicoconteudo = $_POST['iddoconteudo'];

	if($_POST['excluirconteudo']) {

		$stmtConteudo = $conn->prepare("DELETE FROM wp_conteudo WHERE id = {$idunicoconteudo}");
		$stmtConteudo->execute();
	}

	$stmt = $conn->query($sqlJoin);
	$timeline = $stmt->fetchAll();
	$idprocesso = $timeline->idconteudo;


//--------------------- ENVIAR E-MAIL -----------------//


	$sqlJoinEmail = "SELECT * FROM wp_usuario";
	$stmtEmail = $conn->query($sqlJoinEmail);
	$timelineEmail = $stmtEmail->fetch();
	$idEmailUsuario = $timelineEmail->idusuario;

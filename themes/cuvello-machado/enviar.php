<?php

require_once("geral.php");

$consulta = "SELECT * FROM wp_usuario"
$con = $mysqli->query($consulta) or die($mysqli->error);

$conteudo = $_POST['nome'];
$conteudo = $_POST['email'];
$conteudo = $_POST['assunto'];
$conteudo = $_POST['conteudo'];

$headers = "From" - $conteudo;

$corpoemail = 'Fale Conosco 
        
        Nome: '.$conteudo.'
        Email: '.$conteudo.'
        Assunto: '.$conteudo.'
        Conteudo: '.$conteudo.' ';


if (mail("rodrigo@criaturo.com","Fale Conosco" $corpoemail,$headers)) {
    echo "<script> alert('Mensagem enviada com sucesso');</script>";
    header("Location:page-processo.php");
}else
    echo "<script> alert('Error');</script>";
?>
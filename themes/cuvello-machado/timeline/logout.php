<?php

	require_once 'geral.php';

	$_SESSION['logado'] = FALSE;
	unset($_SESSION['logado']);

	header("HTTP/1.1 301 Moved Permanently");
	header("Status: 301 Moved Permanently");
	header("Location: http://cmadvo.com");
	header("Connection: close");



 
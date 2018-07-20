<?php 

	// Подключение к базе данных

	$server = 'localhost';
	$user = 'mysql';
	$password = 'mysql';
	$database = 'new_red';
	 
	$dblink = mysql_connect($server, $user, $password);
	 
	if(!$dblink){
		die('Ошибка подключения к серверу баз данных.');
	}		
	 
	
	$selected = mysql_select_db($database, $dblink);
	if(!$selected){
		die(' База данных не найдена или отсутствует доступ.');
	}
		
 ?>
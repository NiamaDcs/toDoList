<?php 
$serv ="localhost"; 
$user="root";
$pass="";
$db="todo-list"; 
try {
	$bdd = new PDO("mysql:host=$serv;dbname=$db", $user, $pass);
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e) {
		die($e->getMessage());
	}

?>
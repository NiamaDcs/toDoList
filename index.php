<!DOCTYPE html>
<html>
<head>
	<title>ToDoList</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
	<script src="jquery.min.js"></script>
	<script src="index.js"></script>
</head>
<body>
	<header id="header">
		<h1>Ma Belle TODOLIST</h1>
	</header>
 	<div class="container">
 		<form method="GET" id="formulaire">
 			<span>
 				<label>Tache</label>
	 			<input type="text" name="name" placeholder="tache" class="maform" id="tache">
	 		</span>
	 		<span>
	 			<label>Date</label>
	 			<input type="date" name="madate" class="maform" id="madate">
	 		</span>
	 			<button type="submit" name="add" id="add"><img src="img/add.png"></button>
 		</form>
 		<table id="matable"></table>
 		</div>
</body>
</html>
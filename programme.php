<?php 
	include("includes/connexion.php");

	if(isset($_GET['action'])){
		$action = $_GET['action'];	
		if($action == "add"){
			$prep = $bdd->prepare('INSERT INTO task (tache, madate) VALUES(:name,:madate)'); 
			$prep->execute([":name" => $_GET['name'], 
				"madate" => $_GET['madate']
			]); 
			echo "succes";
			
		}
			
		else if($action == "remove"){
			
				$req = $bdd->prepare('DELETE FROM task where taskId= :taskId'); 
				$req->execute(array('taskId' => $_GET['taskId'])); 
				
		}
			
		else if($action=="update" ){
		
				$requete = $bdd->prepare('UPDATE task SET tache = tache, madate = madatef where taskId =:taskId'); 
				$requete->execute([
					'taskId' => $_GET['taskId'],
					'tache' => $_GET['tache'],
					'madatef' => $_GET['madatef']
					
			]);
				
		}
	}
	else{
			
		$req= $bdd->prepare("SELECT * From task ORDER BY taskId ASC"); 
		$resultat = $req->execute();

		if ($resultat > 0) {
			while ($row= $req->fetch()) {
				$res [] = $row;
			}

			print json_encode($res); 
		}
		else {
			echo "No data";
		}
	
	
 	} 


 ?>


	
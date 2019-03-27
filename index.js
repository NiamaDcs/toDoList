$(document).ready(function(){
			//creation d'une methode ma page
function mapage () {
	$("#matable").html("<thead><th>Numero</th><th>Date</th><th>Name</th><th>Action</th></thead>");
	$.get("http://localhost:8013/toDoList/programme.php", function(data, status) {
		var toDotask = JSON.parse(data);
		for (var i = 0; i < toDotask.length; i++) {
		var task = "<td>" +toDotask[i].taskId+"</td>"+
		"<td>" +toDotask[i].madate+"</td>"+
		"<td>"+toDotask[i].tache+"</td>"+
		"<td><a href='#' id='update' data-id="+toDotask[i].taskId+"><img src='img/edit.png'></a><a href='#' id='remove' data-id="+toDotask[i].taskId+"><img src='img/remove.png'></a></td>";
		//console.log(task); 
		task= "<tr>"+task+"</tr>"; 
		$("#matable").append(task);
		}	
	}); 
}
			
//j'appelle ma methode
mapage(); 


//traitement ajout 
$(document).on("click", "#add",function(){ 
	var tache = $("#tache").val() 
	var madate = $("#madate").val()
 	alert("voila "+tache+" "+madate)
	$.ajax({
		url: 'http://localhost:8013/toDoList/programme.php',
		method:'GET',
		data: {"action":"add", "name": $("#tache").val(), "madate": $("#madate").val()},
		success: function(statut){
			alert("success")
			mapage(); 
		}
	});
}); 
	

//le bouton mise à jour 
	$(document).on("click","#update",function(e){

		e.preventDefault();

		var tache = $(this).val() 
		var madate = $(this).val()
 		alert("voila "+tache+" "+madate)

		monButton = $(this).attr('data-id'); 
		$.ajax({
			url: 'http://localhost:8013/toDoList/programme.php',
			method:'GET',
			data: {"action":"update", "taskId": $(this).attr('data-id'), "tache": $("#tache").val(), "madatef": $("#madate").val()},
			success: function(statut){
				//mapage();
			}

		});
	});

//le traitement du bouton suppression 
	$(document).on("click","#remove",function(){
		monButton = $(this).attr('data-id');
		alert('Voulez-vous supprimer cette tâche? l\'id = '+monButton );

		$.ajax({
			url: 'http://localhost:8013/toDoList/programme.php',
			method:'GET',
			data:  {"action":"remove", "taskId": $(this).attr('data-id')},
			success: function(statut){
			mapage();
				}, 
			error: function (resultat, statut, erreur) {
				alert(' erreur de requete ');
				}
			});

		});
	});


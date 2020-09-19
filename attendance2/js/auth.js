 
// traitement de la page register.php

$(document).ready(function(){
	$("#register-form").on("submit", function(e){
		e.preventDefault();//on desactive le comportement par defaut du formulaire
		var form = $(this);// (this) fait reference a ["#register-form"]
		/*var nom = $("#fullname").val();
		var email = $("#fullname").val();
		var mdp = $("#fullname").val();*/
		var formdata = new FormData(form[0]);
		formdata.append("file", $('#profil')); 
		// "file", => le type du fichier (voir register.php ligne 64)
		// '#profil' => l'id du profil (voir register.php ligne 64)..........

		// appliquer lorsque le formulaire envoie un fichier(dans notre cas une image)

		$.ajax({
			method: "POST",
			enctype: 'multipart/form-data',// type d'encodage 
			url: "http://localhost/attendance2/trait_register.php",
			processData: false,
	      	contentType: false,
	      	cache: false,
			dataType: "JSON",
			// envoi des donné hmtl sous forme JSON au lieu de html afin de simplifier les choses,
			// 
			data: formdata,
			success: function(reponse)
			{
				if (reponse.msg=="ok") {
					$("#message").removeClass("alert-danger").addClass("alert alert-success").html('l\'enregistrement a été effectué avec succes');
					$("#register-form").trigger('reset');
             // si le message retourné par php est egale a "ok" (voir le fichier de traitement trait_register.php) ( qui est inscrit depuis le fichier trait_register)
             // alors le message qui est inscrit dans les parentheses de html va s'executer)

				}else{
					$("#message").addClass("alert alert-danger").html(reponse.msg);
					// (reponse.msg) ici le mot "reponse" vient du parametre de la fonction "function(),
					// et "msg" c'est le numero de la ligne ,  clé du tableau (voir le fichier de traitement php)
				}
			},
			error: function () {
				alert("Erreur d'envoi de donnée");
			}
		})
	});

     })



// ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
// ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;






	//traitement de la page  attendance.php

      $(document).ready(function(){
	$("#attendance").on("submit", function(e){
		// $("#attendance") => l'element sur lequel on souhaite travailler, on enumere (dans notre cas, donc on ecris l'id du formulaire)
		// "submit" => l'evenement qui doit se produire lorsque le champ est soumis
	
		e.preventDefault();//on desactive le comportement par defaut du formulaire
		var form = $("#attendance");

		$.ajax({

           method: "POST",
           url:"http://localhost/attendance2/trait_attendance.php",
           dataType:"JSON",
           data: form.serialize(),
           success: function(reponse)
           {
           	if (reponse.msg=='ok') {
             // ('#message').removeClass("alert alert danger").html('');
               //......on ne met plus ça vu qu'ici on veux pas afficher un message mais plutot
                // faire une redirection
             window.location='acceuil.php'
             $("#attendance").trigger('reset');
             // si le message retourné par php est egale a "ok" ( qui est inscrit depuis le fichier trait_attendance)
             // alors faire une redirection vers la page 'acceuil.php'

           	} else if(reponse.msg=='ok1') {
              window.location='rep2.php'
              // window.location='rep2.php'
					// redirection sur une autre page (la page rep2)

              $("#attendance").trigger('reset');
              // Vider les champs de saisi apres que les données aient été envoyé


           	} else{

                 $('#message').addClass("alert alert-danger").html(reponse.msg);

                 // dans le cas contraire afficher les reponses des autres conditons en fonction
                  // des instructions qu'on a donné dans le fichier de traitement trait_attendance.php
           	}
           },

           error: function () {
				alert("Erreur d'envoi de donnée");
			}
		})
	});
})


// ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
// ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;





      // traitement de la page de connexion au dashboard de l'administrateur teacher_login.php


      $(document).ready(function(){
	$("#teacher_login").on("submit", function(e){
		e.preventDefault();//on desactive le comportement par defaut du formulaire
		var form = $("#teacher_login");

		$.ajax({

           method: "POST",
           url:"http://localhost/attendance2/trait_teacher_login.php",
           dataType:"JSON",
           data: form.serialize(),
           success: function(reponse)
           {

           	if (reponse.msg=='ok') {
                // faire une redirection
             window.location='dashboard.php'
             $("#teacher_login").trigger('reset');
           	} else{

                 $('#message').addClass("alert alert-danger").html(reponse.msg);

                 // dans le cas contraire afficher les reponses des autres conditons en fonction
                  // des instructions qu'on a donné dans le fichier de traitement trait_attendance.php
           	}
           },

           error: function () {
				alert("Erreur d'envoi de donnée");
			}
		})
	});
})


// ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
// ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;



      // traitement de la page search.php

$(document).ready(function(){
	$("#form-search").on("submit", function(e){
		e.preventDefault();//on desactive le comportement par defaut du formulaire
		var form = $("#form-search");

		$.ajax({

           method: "POST",
           url:"http://localhost/attendance2/trait_search.php",
           dataType:"JSON",
           data: form.serialize(),
           success: function(reponse)
           {

           	if (reponse.msg=='ok') {
                // faire une redirection
                $('#message').removeClass("alert alert-danger").html('');
              $('#tableau').html(reponse.tbl);
             $("#form-search").trigger('reset');
           	} else if (reponse.msg=='ok1'){

                 $('#message').addClass("alert alert-danger").html('veuillez inserer une date svp');

           	}else {

           		 $('#message').addClass("alert alert-danger").html(reponse.msg);
               $('#tableau').html('');

           	}
           },

           error: function () {
				alert("Erreur d'envoi de donnée");
			}
		})
	});
})


// ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
// ;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;





// traitement de la page cheick.php

// Verification du mail

$(document).ready(function(){
	$("#email").on("keyup", function(e){
		// $("#email") => l'element sur lequel on souhaite travailler, on enumere(dans notre cas,c'est le mail; donc on ecris l'id du mail)
		// "keyup" => l'evenement qui doit se produire lors de la saisie

		var mail = $("#email").val();

		$.ajax({

           method: "POST",
           url:"http://localhost/attendance2/cheick.php",
           dataType:"JSON",
           data: {email:mail} ,
           // data {clé : valeur},
           // clé => le name de l'email inscrit dans le formulaire de php (register.php)
           // valeur : valeur prise par l'email dans ajax (ligne 195) -> [$("#email").val()] = ail
           success: function(reponse)
           {
           	if (reponse.msg=="ok") {
              $("#avert_mail").removeClass("alert-danger").html('');
              // enlever le champ d'alerte
           		return true;
                
           	} else{

                $('#avert_mail').addClass("alert alert-danger").html(reponse.msg);
                // ('#avert_mail')-> l'id du champ d'affichage du message(voir register.php)
                 

                   	}
           },

           error: function () {
				alert("Erreur d'envoi de donnée");
			}
		})
	});
})


// verification du telephone

$(document).ready(function(){
	$("#tel").on("keyup", function(e){
		// $("#tel") => l'element sur lequel on souhaite travailler, on enumere(dans notre cas,c'est le tel; donc on ecris l'id du telephone)
		// "keyup" => l'evenement qui doit se produire lors de la saisie
    e.preventDefault();
		var telph = $("#tel").val();

		$.ajax({

           method: "POST",
           url:"http://localhost/attendance2/cheick.php",
           dataType:"JSON",
           data: {tel:telph},
           // data {clé : valeur},
           // clé => le name du telephonne inscrit dans le formulaire de php (register.php)
           // valeur : valeur prise par le telephone dans ajax (ligne 239) -> [$("#tel").val()] ->(telph)
           success: function(reponse)
           {

           	if (reponse.msg=="ok") {
              $("#avert_tel").removeClass("alert-danger").html('');
              // enlever le champ d'alerte

           		return true;
                
           	} else{

                 $('#avert_tel').addClass("alert alert-danger").html(reponse.msg);

                   	}
           },

           error: function () {
				alert("Erreur d'envoi de donnée");
			}
		})
	});
})



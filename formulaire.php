

<!DOCTYPE html>
   <html>
      <head>
	     <title>formulaire php</title>
	     <meta charset="utf-8"/>
		 <meta http-equiv="X-UA compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.O">
		

		 <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> telecharger bootstap cdn.css sans integrity-->
		 <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> telecharger sur jquery cdn de googlev version 1-->  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>-->
		 		<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>telecharger bootstap cdn.js sans integrity-->


		 <!--bootstrap css--> <!--npm install jquery--> <!--npm install bootstrap-->
         <!--<link rel="stylesheet" href="assets/css/bootstrap.css"> --> 
          <link rel="stylesheet" type="text/css" href="style.css"> 
	  </head>
	  

          <!--menu de navigation avec flexbox-->
        
        <body>
                <div class="introduction">
                <h1>Interaction Humain-Robot (Pierre, Feuille, Ciseaux)</h1>
                <p>Bonjour et merci de participer à notre étude !</p>
                <p>Nous souhaitons en savoir plus sur la façon dont les humains interagissent avec les robots. Vos réponses à ce questionnaire nous aideront à améliorer ces interactions.</p>
                <p>N'hésitez pas à poser des questions si vous avez besoin d'éclaircissements.</p>
                </div>
            <!--<form method = "POST" action = "formulaire2.php">-->
            <form id="myForm" method = "POST" action = "Echelle_ROSAS.php">
            <form id="myForm" method = "POST" action = "formulaire-valid.php">
                <fieldset> 
                    <legend>Information generale</legend>

            
                    <div class="c100">
                        <label for = "age">votre age :</label>
                        <input type = "number" name = "age" id = "age" placeholder = "age"/>
                    
                </div>
                
                <div class="c100">
                    <p>votre genre: </p>
                    <input type = "radio" name = "sexe" value = "homme" id = "homme"/>
                    <label for = "homme">Homme</label>
                    
                    <input type = "radio" name = "sexe" value = "femme" id = "femme"/>
                    <label for = "femme">Femme</label>
                   
                </div>
 
               <div class="c100">
                <p>votre main dominant</p>

                    <input type="radio" id="maindominant1" name="Main_dominant" value="Droite"/>Droite<br/>
                    <input type="radio" id="maindominant2" name="Main_dominant" value="Gauche"/>Gauche<br/>
                 
                </div> 
                </fieldset>
                <div class="c100" id="submit">
                    <input type = "submit" value = "Submit" name="envoyer"/>
                </div>
                </fieldset>
            </form>
        
      <!--  <script src="assets/js/jquerymin.js"></script>       
		<script src="assets/js/bootstrap.js"></script> 
-->
        
 <script>
  
document.getElementById('myForm').addEventListener('submit', check);

function check(event) {
    var age = document.getElementById("age");
    var rdbHomme = document.getElementById("homme");
    var rdbFemme = document.getElementById("femme");
    var mainDominant1 = document.getElementById("maindominant1");
    var mainDominant2 = document.getElementById("maindominant2");

    // Validation de l'âge (notez que vous avez besoin d'un champ de type "number", non "checkbox")
    if (!age.value) {
        alert("Veuillez saisir votre âge");
        event.preventDefault(); // Empêche l'envoi du formulaire
        return false;
    } else if (!rdbHomme.checked && !rdbFemme.checked) {
        alert("Veuillez sélectionner votre genre");
        event.preventDefault(); // Empêche l'envoi du formulaire
        return false;
    } else if (!mainDominant1.checked && !mainDominant2.checked) {
        alert("Veuillez sélectionner votre main dominante");
        event.preventDefault(); // Empêche l'envoi du formulaire
        return false;
    
    } else {
        // Si toutes les validations sont passées, le formulaire peut être envoyé
        alert("Toutes les conditions sont remplies, le formulaire va être envoyé.");
    }
}
  
</script>

       <!-- <script src='assets/js/sitejs.js' async></script> -->     
	  </body>
   </html>

<?php 
    $serveurname = "localhost"; 
    $dbname = "formulaire_questionnaires" ;
    $username = "root" ;
    $password = "root" ;

    try{
        $conn=new PDO("mysql:host=$serveurname;dbname=$dbname",$username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
       // echo"la connexion a ete bien etablie";
    }catch(PDOException $e){
        echo "la connexion a echoué".$e->getMessage();
    }
    if(isset($_POST['envoyer']))
    {
        $age =$_POST["age"];
        $ch = $_POST["sexe"];
        $ch1 = $_POST["Main_dominant"];
        $question1 = $_POST["fiabilite"];
        $question2 =$_POST["competence"] ;
        $question3 = $_POST["connaissance"];
        $question4 = $_POST["interactif"] ;
        $question5 = $_POST["reactivite"];
        $question6 = $_POST["capacite"];
        $question7 = $_POST["organique"];
        $question8 = $_POST["sociabilite"] ;
        $question9 = $_POST["emotion"];
        $question10 =$_POST["compassion"] ;
        $question11 =$_POST["bonheur"];
        $question12 =$_POST["ressenti"];
        $question13 =$_POST["maladresse"] ;
        $question14 = $_POST["peur"];
        $question15 = $_POST["etrangete"];
        $question16 =$_POST["horreur"] ;
        $attitude_pepper = $_POST["danger"];
        $question18 = $_POST["agressivite"];
        $question18_oui = $_POST["unexpectedBehavior"];
        $question19 = $_POST["specifyBehavior"] ;
        $question20 = $_POST["commentaires_supplementaires"] ;
      $sql=("INSERT INTO reponses_questionnaire (age, sexe, main_dominante, fiabilite, competence, connaissance, interactif, reactivite, capacite, organique, sociabilite, emotion, compassion, bonheur, ressenti, maladresse, peur, etrangete,horreur, danger , agressivite, unexpectedBehavior, specifyBehavior,commentaires_supplementaires)
      VALUES (:age, :sexe, :main_dominante, :fiabilite, :competence, :connaissance, :interactif, :reactivite, :capacite, :organique, :sociabilite, :emotion, :compassion, :bonheur, :ressenti, :maladresse, :peur, :etrangete,:horreur, :danger , :agressivite, :unexpectedBehavior, :specifyBehavior,:commentaires_supplementaires)");
      $stmt=$conn->prepare($sql);
      $stmt-> bindParam(':age',  $age ); 
      $stmt->bindParam(':sexe',  $ch);  
      $stmt->bindParam(':main_dominante',  $ch1);  
      $stmt->bindParam(':fiabilite', $question1); 
      $stmt->bindParam(':competence', $question2);  
      $stmt->bindParam(':connaissance', $question3); 
      $stmt->bindParam(':interactif', $question4); 
      $stmt->bindParam(':reactivite', $question5); 
      $stmt->bindParam(':capacite', $question6); 
      $stmt->bindParam(':organique', $question7); 
      $stmt->bindParam(':sociabilite', $question8); 
      $stmt->bindParam(':emotion', $question9); 
      $stmt->bindParam(':compassion', $question10); 
      $stmt->bindParam(':bonheur', $question11); 
      $stmt->bindParam(':ressenti', $question12); 
      $stmt->bindParam(':maladresse', $question13); 
      $stmt->bindParam(':peur', $question14); 
      $stmt->bindParam(':etrangete', $question15);
      $stmt->bindParam(':horreur', $question16); 
      $stmt->bindParam(':danger', $attitude_pepper); 
      $stmt->bindParam(':agressivite', $question18);
      $stmt->bindParam(':unexpectedBehavior', $question18_oui);
      $stmt->bindParam(':specifyBehavior', $question19);
      $stmt->bindParam(':commentaires_supplementaires', $question20);
     $stmt->execute();
    }
   
    ?>
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
         <!--<link rel="stylesheet" href="assets/css/formulaire.css"> -->

	  </head>
      <body>
            <h1>Formulaire bien envoyé</h1>
            <p>Merci d'avoir pris le temps de remplir le formulaire !</p>
      </body>
   </html>
   
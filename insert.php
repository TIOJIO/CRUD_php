<?php
    include_once('config.php');
    
    if(isset($_POST['envoyer'])){
      $nom=$_POST['fname'];
      $prenom=$_POST['lname'];
      $dates=$_POST['date'];
      $email=$_POST['email'];
      $numero = $_POST['numero'];
      $mdp1 = $_POST['password1'];
      $mdp2 = $_POST['password2']; 


      if($mdp1==$mdp2){
          $req=$pdo->prepare("INSERT INTO etudiant(nom,prenom,date_naissance,email,numero,mdp) 
                VALUES(:nom,:prenom,:dates,:email,:numero,:mdp1)");   
          $result= $req->execute([
                'nom' => $nom,
                'prenom' => $prenom,
                'dates' => $dates,
                'email' => $email,
                'numero' => $numero,
                'mdp1' => $mdp1,
          ]);
        if($result){
            header("location:tableau.php");
        }else{
            echo"échec";
        }
          
      }
      
        
    }
?>


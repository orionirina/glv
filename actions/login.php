<?php
 include('../PDO/conexionbdd.php');

 if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    if($email !="" && $mdp !="")
        {
            
            $req = $bdd ->prepare("SELECT * FROM utilisateurs WHERE email= :email AND mdp= :mdp ");
            $req ->execute([ 'email' => $email, 'mdp' =>$mdp ]);
            $user = $req-> fetch();
            if($user){
                header("Location: ../pages/choix.php");
                exit();      
             }
            else{
                $error_msg = "Email ou mdp incorrect!";
            }
            header("Location: ../pages/choix.php");
        }  
        else{
            $error_msg = "Veuillez remplir tous les champs !";
        }    
  }

?>

<?php
//  include('../PDO/conexionbdd.php');
 include('../PDO/connexionbdd.php');

 if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    if($email !="" && $mdp !="")
        {
            
            $req = $bdd ->prepare("SELECT * FROM user WHERE email= :email AND password= :password ");
            $req ->execute([ 
                'email' => $email, 
                'password' =>$mdp 
            ]);
            
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

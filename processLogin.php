<?php
session_start();
/**
 * 1 -recuperer les identifiants 
 * tester si le login et le mdp correspondent 
 * si oui 
 * redirige vers la page d'acceuil
 * si non rediriger a la page login avec un msg d'alerte
 * 
 */


$email =$_POST['email'];
$password =$_POST['password'];

if (isset ($email)&& isset($password)) {

    if ($email ==  'ass@ass.ass' && $password =='0000') {
        $_SESSION['user']="ass";
         header('location:home.php');
    }
    else{
        header('location:login.php?errorMessage=veuillez vérifier vos credentials');
    }
}
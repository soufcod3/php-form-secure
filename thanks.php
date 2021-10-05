<?php

$errors = [];
$formOk = false;

if ("POST") {

        if (empty($_POST[user_lastname])){
        $errors[]= "Vous devez renseigner votre nom.";
        }
    
        if (empty($_POST[user_firstname])){
        $errors[] = "Vous devez renseigner votre prénom.";
        }

        if (empty($_POST[user_email])){
        $errors[] = "Vous devez renseigner votre courriel.";
        }

        if (!filter_var($_POST[user_email], FILTER_VALIDATE_EMAIL)){
            $errors[] = "Merci d'entrer une adresse mail valide.";
        }
    
        if (empty($_POST[user_phone])){
        $errors[] = "Vous devez renseigner votre numéro de téléphone.";
        }
    
        if (empty($_POST[user_subject])){
        $errors[] = "Vous devez renseigner un sujet au message.";
        }
    
        if (empty($_POST[user_message])){
        $errors[] = "Vous devez entrer votre message.";
        }
    
    $formOk = empty($errors);

  }
 
if ($formOk){
    echo "Merci {$_POST[user_firstname]} {$_POST[user_lastname]} 
    de nous avoir contacté à propos de “{$_POST[user_subject]}”.
    Un de nos conseillers vous contactera soit à l’adresse 
    {$_POST[user_email]} ou par téléphone au {$_POST[user_phone]} 
    dans les plus brefs délais pour traiter votre 
    demande : <br> {$_POST[user_message]}";
}  else {
    echo "<ul>";
    foreach ($errors as $error){
        echo "<li>" . $error . "</li>" . PHP_EOL;
    }
}

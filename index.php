<?php

include 'inc/DbConnection.php';
include 'inc/functions.php';

if(isset($_POST['submit']))
    {
        if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['contact']))
        {
            $destinataire = $_POST['email'];
            $subject = 'Message envoyé via le formulaire de contact';
            $message = $_POST['message'];
             
            mail($destinataire, $subject, $message);
             
            echo 'Message envoyé';
        }
        else
        {
            echo 'Veuillez remplir tous les champs';
        }
    }

?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

	<form action="#" method="POST">
		<input type="text" name="nom" placeholder="Nom">
		<input type="text" name="prenom" placeholder="Prénom">
		<input type="text" name="email" placeholder="E-mail">
		<textarea name="contact"></textarea>
		<input type="button" name="submit" value="Envoyer">
	</form>
	
</body>
</html>
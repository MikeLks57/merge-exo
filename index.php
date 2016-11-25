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

$posts = getPosts();

?>

<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style>
		table, tr, td {
			border-collapse: collapse;
		}
		.comment {
			background-color: #A0ABFC;
		}
		.date {
			background-color: #C2C2C2;
			font-weight: lighter;
		}
		.name {
			font-size: 1.2em;
			font-weight: bold;
		}
	</style>
</head>
<body>

	<form action="#" method="POST">
		<input type="text" name="nom" placeholder="Nom">
		<input type="text" name="prenom" placeholder="Prénom">
		<input type="text" name="email" placeholder="E-mail">
		<textarea name="contact"></textarea>
		<input type="button" name="submit" value="Envoyer">
	</form>

	<h1>Derniers posts</h1>
	
		<?php foreach($posts as $post) : ?>
			<table>
				<tr class="name">
					<td>
						<?= strip_tags($post['user_name']) ?>
					</td>
				</tr>
				<tr class="comment">	
					<td>
						<?= strip_tags($post['post']) ?>
					</td>
				</tr>
				<tr class="date">
					<td>
						<em>posté le <?= strip_tags(date('d/m/Y', strtotime($post['date_post']))) ?> à <?= strip_tags(date('h:i:s', strtotime($post['date_post']))) ?></em>
					</td>
				</tr>
			</table>
		<?php endforeach ; ?>
	
</body>
</html>

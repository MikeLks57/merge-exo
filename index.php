<?php 

	require_once 'inc/DbConnection.php';
	require_once 'inc/functions.php';

	$posts = getPosts();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Posts</title>
	<link rel="stylesheet" href="">
	<style>
		.nameUser {
			font-weight: bold;
		}
	</style>
</head>
<body>

	<h1>Derniers posts</h1>
	
	<?php foreach($posts as $post) : ?>
		<table>
			<tr>
				<td class="nameUser"><?= strip_tags($post['user_name'],'<b><i>') ?></td>
				<td><?= strip_tags($post['post']) ?></td>
				<td><?= strip_tags($post['date_post']) ?></td>
			</tr>
		</table>
	<?php endforeach ; ?>

</body>
</html>
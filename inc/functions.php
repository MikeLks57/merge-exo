<?php

	function getPosts() {
		global $pdo;

		$sql = 'SELECT user_name, post, date_post FROM comments ORDER BY date_post DESC LIMIT 3';
		$stmt = $pdo->query($sql);
		$stmt->execute();
		$result = $stmt->fetchAll();
		return $result;
	}
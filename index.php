<?php
	require_once 'app/init.php';
	$itemsQuery = $db->prepare("
	SELECT UID, ItemContent, done
	FROM todotable
	WHERE user = :user");
	$itemsQuery ->execute(['user' => $_SESSION['user_id']]);
	$items=$itemsQuery->rowCount()? $itemsQuery : [];
	foreach($items as $item){
		echo $item['name'], '<br/>';
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>ToDo: WAMP</title>
	<link rel='stylesheet' type='text/css' href='styles.css' />
</head>
<body>
	<form action='list.php' method='post'>
	<div class = 'wrapper'>
		<h1 id='ListHeader'>Task List</h1>
		<ul class='task-list'></ul>
		<!--Make this a php file
			Move it to the server
			Wrap the input and button in a form to post to the db
		-->
		<input type='text' autocomplete="off" placeholder="New Task" id="newTask" />
		<button id="addButton"><img src='img/add.png' alt='add button' /></button>
		<hr />
		<div class='done'>
			<p class='itemsCompleteCount'></p>
			<ul class='done-task-list'></ul>
		</div>
	</div>
	</form>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type = 'text/javascript' src='script.js'></script>
</body>
</html>

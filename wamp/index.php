<?php
$getList = "SELECT * FROM items";
$dbConnection = new mysqli('localhost', 'root', 'latimercaleb', 'todo');
$result = $dbConnection -> query($getList);
?>
<!DOCTYPE html>
<html>
<head>
	<title>ToDo: WAMP</title>
	<link rel='stylesheet' type='text/css' href='styles.css' />
</head>
<body>
	<div class = 'wrapper'>
		<h1 id='ListHeader'>Task List</h1>
		<ul class='task-list'>
			<?php foreach($result as $task): ?>
				<?php if(!$task["done"]): ?>
				<li>
					<span class="hidden-id"><?php echo $task["id"];?></span>
					<?php echo $task["name"]; ?>
				</li>
			<?php endif; ?>
			<?php endforeach; ?>
		</ul>
			<form action="list.php" method="post">
				<input type="text" autocomplete="off" placeholder="New Task" id="newTask" name="name" required/>
				<button type = "submit"><img src="img/add.png" alt="add button" /></button>
			</form>
		<hr />
		<div class='done'>
			<p class='itemsCompleteCount'></p>
			<ul class='done-task-list'>
				<?php foreach($result as $task): ?>
					<?php if($task["done"]): ?>
						<li>
							<span class="hidden-id"><?php echo $task["id"];?></span>
							<?php echo $task["name"]; ?>
						</li>
			 	    <?php endif; ?>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type = 'text/javascript' src='script.js'></script>
</body>
</html>

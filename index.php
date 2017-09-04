<?php
require_once('app/init.php');
$itemsQuery = $db ->prepare("
SELECT id,name,done
FROM items
WHERE user = :user
");

$itemsQuery ->execute(['user' => $_SESSION['user_id']]);
$items = $itemsQuery->rowCount() ? $itemsQuery : [];
foreach($items as $item){
	echo $item;
}

$sql = "SELECT * FROM items";
$conn = new mysqli('localhost', 'root', 'latimercaleb', 'todo');
$result = $conn -> query($sql);
// if($result->num_rows > 0){
// 	while($row = $result->fetch_assoc()){
// 		echo "name: ". $row["name"];
// 	}
// }
// echo 'Finished';
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
			<?php foreach($result as $item): ?>
				<?php if(!$item["done"]): ?>
				<li>
					<span class="hidden-id"><?php echo $item["id"];?></span>
					<?php echo $item["name"]; ?>
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
				<?php foreach($result as $item): ?>
					<?php if($item["done"]): ?>
					<li>
						<span class="hidden-id"><?php echo $item["id"];?></span>
						<?php echo $item["name"]; ?>
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

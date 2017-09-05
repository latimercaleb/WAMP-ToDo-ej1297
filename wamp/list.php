<?php
 $dbConnection = new mysqli('localhost', 'root', 'latimercaleb', 'todo');
 if(isset($_POST['name'])){
     $task = trim($_POST['name']);
     if(!empty($task)){
         $insertSql = "INSERT INTO items (name,user,done,created)
         VALUES ('$task', 1, 0, NOW())";
         if ($dbConnection->query($insertSql) === TRUE) {
             echo "Task added";
         } else {
             echo "Error: " . $insertSql . "<br>" . $dbConnection->error;
         }
     }
 }
 header('Location: index.php');
?>

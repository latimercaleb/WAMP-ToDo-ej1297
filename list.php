<?php

// echo "hello world";
//echo $_POST["name"];
// connect to the db
 // require_once('app/init.php');
 // echo "page loaded <br>";
 $conn = new mysqli('localhost', 'root', 'latimercaleb', 'todo');
 // echo "connection opened <br>";
 // echo $_POST["name"];
 if(isset($_POST['name'])){
     $name = trim($_POST['name']);
     //echo $name;
     //echo"<br>";
     if(!empty($name)){
         $sql = "INSERT INTO items (name,user,done,created)
         VALUES ('$name', 1, 0, NOW())";
         //echo $sql;
         //echo "<br>";
         // $addedQuery = $db ->prepare("
         // INSERT INTO items (name, user, done, created)
         // VALUES (:name, :user, 0, NOW())");
         //
         // $addedQuery->execute([
         //     'name' => $name,
         //     'user' => $_SESSION['user_id']
         // ]);
         //mysql_query($sql) or die(mysql_error());
         //$conn -> query($sql);
         if ($conn->query($sql) === TRUE) {
             echo "New record created successfully";
         } else {
             echo "Error: " . $sql . "<br>" . $conn->error;
         }
         //echo "query successful";
     }
 }


 //     foreach ($_POST as $key => $value) {
 //
 //           echo $key;
 //          echo " ";
 //           echo $value;
 //          echo "<br>";
 //       }
 //
 // echo "<br>";
 // echo "end reached";
 header('Location: index.php');
?>

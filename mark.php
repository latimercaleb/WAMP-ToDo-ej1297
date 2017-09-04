<?php
echo "page entered";
$conn = new mysqli('localhost', 'root', 'latimercaleb', 'todo');
if(isset($_GET['as'], $_GET['name'])){
    $as = $_GET['as'];
    $item = $_GET['name'];
    switch($as){
        case 'done':
            $sql = "UPDATE items
                    SET done = 0
                    WHERE id = :id"
                    // need to rewrite this query
            break;
        case 'delete':
            $sql =  "DELETE items
                     WHERE id = :id AND done = 1";
                     // need to rewrite this query
    }
}
header('Location: index.php');
 ?>

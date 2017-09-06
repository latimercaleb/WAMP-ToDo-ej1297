<?php
$dbConnection = new mysqli('localhost', 'root', 'latimercaleb', 'todo');
if(isset($_GET['action'], $_GET['id'])){
    $action = $_GET['action'];
    $id = $_GET['id'];
    switch($action){
        case 'done':
            $markDoneSql = "UPDATE items
                            SET done = 1
                            WHERE id = ?";
            $preppedQuery = $dbConnection -> prepare($markDoneSql);
            $preppedQuery ->bind_param('i',$id);
            $preppedQuery->execute();
            if ($preppedQuery->errno) {
                echo "Mark Done Query broke" . $preppedQuery->error;
            }
            else echo "Updated {$preppedQuery->affected_rows} rows";
            $preppedQuery->close();
            break;

         case 'delete':
            $deletesql =  "DELETE FROM items
                           WHERE id = ?";
            $delPreppedQuery = $dbConnection -> prepare($deletesql);
            $delPreppedQuery ->bind_param('i',$id);
            $delPreppedQuery->execute();
            if ($delPreppedQuery->errno) {
                echo "Delete Query broke" . $delPreppedQuery->error;
            }
            else echo "Deleted {$delPreppedQuery->affected_rows} rows";
            $delPreppedQuery->close();
            break;
    }
}
header('Location: index.php');
 ?>

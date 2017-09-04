<?php
echo "page entered" . "<br>";
$conn = new mysqli('localhost', 'root', 'latimercaleb', 'todo');
echo "connection successful" . "<br>";
if(isset($_GET['as'], $_GET['id'])){
    $as = $_GET['as'];
    $item = $_GET['id'];
    echo $as . "<br>" . $item . "<br>";
    switch($as){
        case 'done':
            echo "done entered" . "<br>";
            $sql = "UPDATE items
                    SET done = 1
                    WHERE id = ?";
            echo "done query made" . "<br>";
            $stmt = $conn -> prepare($sql);
            $stmt ->bind_param('i',$item);
            echo "paramaters bound" . "<br>";
            $stmt->execute();
            if ($stmt->errno) {
                echo "FAILURE!!! " . $stmt->error;
            }
            else echo "Updated {$stmt->affected_rows} rows";

            $stmt->close();
            // if ($conn->query($sql($item)) === TRUE) { // pass in item
            //     echo "New record created successfully";
            // } else {
            //     echo "Error: " . $sql . "<br>" . $conn->error;
            // }
            break;

         case 'delete':
            echo "delete entered" . "<br>";
            $deletesql =  "DELETE FROM items
                           WHERE id = ?";
            echo "delete made" . "<br>";
            $delstmt = $conn -> prepare($deletesql);
            $delstmt ->bind_param('i',$item);
            echo "paramaters bound" . "<br>";
            $delstmt->execute();
            if ($delstmt->errno) {
                echo "FAILURE!!! " . $delstmt->error;
            }
            else echo "Updated {$delstmt->affected_rows} rows";

            $delstmt->close();
            // if ($conn->query($sql($item)) === TRUE) { // pass in item
            //     echo "New record created successfully";
            // } else {
            //     echo "Error: " . $sql . "<br>" . $conn->error;
            // }
            break;
    }
}
//header('Location: index.php');
 ?>

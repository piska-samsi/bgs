<?php
$link=mysqli_connect("localhost","root","","bgs");
mysqli_set_charset($link, "utf8");
if($link->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    $inv = $link->real_escape_string($_POST["id"]);
    $sql = "DELETE FROM Books WHERE inv = '$inv'";
    if($link->query($sql)){
         
        header("Location: adminRM.php");
    }
    else{
        echo "Ошибка: " . $link->error;
    }
    $conn->close();  
?>
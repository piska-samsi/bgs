<?php
$link=mysqli_connect("localhost","root","","bgs");
mysqli_set_charset($link, "utf8");
if($link->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    $id = $link->real_escape_string($_POST["id"]);
    $sql = "DELETE FROM razd WHERE num = '$id'";
    if($link->query($sql)){
        echo("<meta http-equiv='refresh' content='1'>"); 
        header("Location: vist.php");
    }
    else{
        echo "Ошибка: " . $link->error;
    }
    $link->close();  
?>
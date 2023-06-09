<?php
$link=mysqli_connect("localhost","root","","bgs");
mysqli_set_charset($link, "utf8");
if($link->connect_error){
        die("Ошибка: " . $conn->connect_error);
    }
    $sql = "INSERT INTO users (login, pass, firstname, secondname, email, status) values('alex5435', '12345', 'Августин', 'Мирный', 'Aemail@gmail.com', '0')";
    if($link->query($sql)){
         
        header("Location: adminRM.php");
    }
    else{
        echo "Ошибка: " . $link->error;
    }
    $conn->close();  
?>
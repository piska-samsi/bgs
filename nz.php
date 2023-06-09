<?php

$link=mysqli_connect("localhost","root","","bgs");
mysqli_set_charset($link, "utf8");

    $err = [];

    
    if(strlen($_POST['nazv']) < 15)
    {
        $err[] = "Название должно быть не меньше 15-ти или больше 200 символов";
    }

    if(strlen($_POST['opis']) < 100 or strlen($_POST['opis']) < 500)
    {
        $err[] = "Описание должно быть не меньше 100 или больше 500 символов";
    }

    $query = mysqli_query($link, "SELECT num FROM razd WHERE nazv='".mysqli_real_escape_string($link, $_POST['nazv'])."'");
    if(mysqli_num_rows($query) > 0)
    {
        $err[] = "Раздел с таким названием уже существует";
    }

    
    if(count($err) == 0)
    {

        $nazv = $_POST['nazv'];
		$opis = $_POST['opis'];
		

        mysqli_query($link,"INSERT INTO razd SET nazv='".$nazv."', opis='".$opis."'");
        header("Location: admin.php"); exit();
    }
    else
    {
        print "<b>При создании раздела произошли следующие ошибки:</b><br>";
        foreach($err AS $error)
        {
            print $error."<br>";
        }
    }

?>


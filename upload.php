<?php

$link=mysqli_connect("localhost","root","","bgs");
mysqli_set_charset($link, "utf8");

    $err = [];

    
   

    if(strlen($_POST['about']) > 1500)
    {
        $err[] = "Описание должно быть не больше 1500 символов";
    }

    

    
    if(count($err) == 0)
    {
        $bo = $_POST['bo'];
        $title = $_POST['title'];
		$author = $_POST['author'];
        $year = $_POST['year'];
        $about = $_POST['about']; 
        $razd = $_POST['razd'];
        // Получение данных файла
        
        $file_name_pdf = $_FILES['pdf']['name'];
        $file_tmp_pdf = $_FILES['pdf']['tmp_name'];

        move_uploaded_file($file_tmp_pdf,"../upload/".$file_name_pdf);

        $file_name_img = $_FILES['img']['name'];
        $file_tmp_img = $_FILES['img']['tmp_name'];

        move_uploaded_file($file_tmp_img,"../upload/prev/".$file_name_img);
        
        
        
        $sql = "INSERT INTO books (title, author, year, about, file_name_pdf, file_name_img, razdel, bo) VALUES ('$title', '$author', '$year', '$about','$file_name_pdf', '$file_name_img', '$razd', '$bo')";   
mysqli_query($link, $sql);

    } 
    else
    {
        print "<b>При добавлении книги произошли следующие ошибки:</b><br>";
        foreach($err AS $error)
        {
            print $error."<br>";
        }
    }
   

header("Location: contact.php"); exit();
?>
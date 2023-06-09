<?php
$id = $_GET['id'];
$link = mysqli_connect("localhost", "root", "", "bgs");
mysqli_set_charset($link, "utf8");
$res = mysqli_query($link, "SELECT * FROM books WHERE inv = '$id'");
$row = mysqli_fetch_assoc($res);



$filename = $row['file_name_pdf'];
$path = '../upload/' . $filename;
echo $path;

 header('Content-type: application/pdf');
 header('Content-Disposition: inline; filename="' . $path . '"');
 header('Content-Transfer-Encoding: binary');
 header('Accept-Ranges: bytes');
 @readfile($path);

?>

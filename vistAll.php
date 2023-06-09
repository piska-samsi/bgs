<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Военная историческая библиотека Генерального штаба ВС РФ</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/icon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <style>
form {
  display: flex;
  flex-direction: column;
  align-items: right;
  margin-top: 20px;
  width: 30%;
}

h2 {
  font-size: 28px;
  text-align: left;
  margin-bottom: 1px;
}

label {
  font-size: 19px;
  margin-right: 1px;
}

select, input[type="text"] {
  font-size: 16px;
  padding: 5px;
  margin-bottom: 1px;
  border: 1px solid #ccc;
  border-radius: 5px;
  width: 250px;
  max-width: 90%;
}

select {
  width: 250px;
  margin-right: 5px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  font-size: 16px;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  width: 250px;
  transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}
input[type="submit"].red:hover{
    background-color: #ff5959;
}
a.blue:hover{
    background-color: #1ea1d4;
    border-color: #1ea1d4;
    cursor: pointer;
}
a.green:hover{
    background-color: #22ff64ce;
    border-color: #22ff64ce;
}


</style>
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="medica-load"></div>
        <img src="img/core-img/icon.png" alt="logo">
    </div>


    <!-- ***** Header Area Start ***** -->
    <?php
    require 'head.php';?>
    <!-- ***** Header Area End ***** -->

    <section class="breadcumb-area bg-img gradient-background-overlay"
        style="background-image: url(img/bg-img/28.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-md-7 col-lg-9">
                    <div class="breadcumb-content">
                        <!-- Title -->
                        
                        <h3 class='breadcumb-title'>ВСЕ КНИГИ</h3>";
                        <nav aria-label='breadcrumb'>
                            <ol class='breadcrumb'>
                                <li class='breadcrumb-item'><a href='index.php'>Главная</a></li>
                                <li class='breadcrumb-item'><a href='vist.php'>Выставки</a></li>
                                <li class='breadcrumb-item active' aria-current='page'>ВСЕ КНИГИ</li>
                            </ol>
                        </nav>
                       
                        
                    </div>
                </div>
                


                        
                    </div>
                </div> 
                
                
                
                
            </div>
        </div>
    </section>

    <!-- ***** Elements Area Start ***** -->
    <section class="elements-area section_padding_100_0">
        <div class="container">
            <div class="row">

                <!-- ========== Buttons ========== -->
                <div class="col-12">
                    <div class="elements-title">

                        <h2 style="margin-bottom: 0px">ПОИСК</h2>
                        <form method="post" class="floated">
                            <label class="floated" for="field">Поиск по полю:</label>
                            <select name="field" id="field" class="floated">
                                <option value="author">поиск по автору
                                <option value="title">поиск по названию
                                <option value="bo">поиск по БО
                                <option value="about">поиск по описанию
                            </select>
                            <br>
                            <label class="floated" for="query">Поисковый запрос:</label>
                            <input class="floated" type="text" name="query" id="query">
                            <br>
                            <input class="floated" type="submit" name="Поиск" value="Поиск">
                        </form>

                        <form method="post" class="floated">
                        <label>Поиск по разделу:</label>
                        <select for="select-data" name="razd">
                        <?php
                                    // Подключаемся к базе данных
                                    $link = mysqli_connect("localhost", "root", "", "bgs");
                                    mysqli_set_charset($link, "utf8");

                                    // Выполняем запрос на выборку данных
                                    $result = mysqli_query($link, "SELECT num, nazv FROM razd ORDER BY num");

                                    // Выводим данные в виде элементов списка
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<option value='" . $row['num'] . "'>" . $row['nazv'] . "</option>";
                                    }

                                    // Закрываем соединение с базой данных
                                    mysqli_close($link);
                                    ?>
                        </select><br>
                        <input class="floated" type="submit" name="Выбрать" value="Выбрать">
                        </form>
                        </div>
                        <?php
                        if (isset($_POST['Выбрать'])) {
                            $link = mysqli_connect("localhost", "root", "", "bgs");
                            mysqli_set_charset($link, "utf8");
                            $ra = $_POST['razd'];
                            if($ra === '1'){
                                $link = mysqli_connect("localhost", "root", "", "bgs");
                        mysqli_set_charset($link, "utf8");
                        $res4 = mysqli_query($link, "SELECT * FROM books,razd WHERE books.razdel=razd.num");
                        $count = mysqli_num_rows($res4);
                        if ($count === 0) {
                            echo "<h2><br><br>Книг на сайте нет</h2>";
                        } else {

                            echo "<h1 style='margin-bottom: 5px'><br><br><br><br><br><br><br>Книги:</h1>";
                            for ($i = 0; $i < $count; ++$i) {
                                $row = mysqli_fetch_array($res4);
                                echo "<center> <TABLE class='table1'> <tbody>
                                <TR class='tr1'> 
                                  <TD rowspan=7 class='td1' ><img src='../upload/prev/{$row['file_name_img']}' 
                                  width='1400' height='455' alt='обложка'></td> 
                                  <TD class='td1 tbltx'>Раздел - {$row['nazv']}</TD>
                                </TR>
                                  <TD class='td1 tbltx'>{$row['title']}</TD>
                                </TR>
                                  <TD class='td1 tbltx'>{$row['author']}</TD>
                                </TR>
                                  <TD class='td1 tbltx'>{$row['year']}</TD>
                                </TR>
                                <TD class='td1 tbltx'>{$row['bo']}</TD>
                                </TR>
                                  <TD class='td1 tbltx'>{$row['about']}</TD>     
                                </TR>
                                <TD class='td1 tbltx'>";
                                  echo "<a href='view.php?id=".$row['inv']."' target='_blank' style='border-radius: 5px; text-align: center; padding: 9px 10px;width: 38%; height: 40px;' class='medica-btnR btn-2 floated'>"; echo "Перейти к полной версии</a> <form method='post' style='margin-top: 0px;      '>
                                  <input type='hidden' name='id' value='" . $row["inv"] . "' />
                                  <input type='submit' value='Удалить книгу' name='удалить' style=' height: 40px;     width: 35%; padding: 0px 0px; font-size: 14px;' class='red floated medica-btnR btn-2'>
                              </form></TD>
                                
                                </tbody></TABLE></center>";
                            }

                        }
                        mysqli_close($link); 
                            } else {
    
                            // Формируем SQL-запрос с использованием полнотекстового поиска
                            $result = mysqli_query($link, "SELECT * FROM books,razd WHERE (razdel=$ra) AND (books.razdel=razd.num)");
                                    
                            
                            
                            if ($result->num_rows > 0) {
                                echo "<h1 style='margin-bottom: 5px'><br><br><br><br><br><br><br>Книги:</h1>";
                                while ($row = $result->fetch_assoc()) {
    
                                    echo "<center> <TABLE class='table1'> <tbody>
                                    <TR class='tr1'> 
                                      <TD rowspan=7 class='td1' ><img src='../upload/prev/{$row['file_name_img']}' 
                                      width='1400' height='455' alt='обложка'></td> 
                                      <TD class='td1 tbltx'>Раздел - {$row['nazv']}</TD>
                                    </TR>
                                    <TD class='td1 tbltx'>{$row['title']}</TD>
                                    </TR>
                                      <TD class='td1 tbltx'>{$row['author']}</TD>
                                    </TR>
                                      <TD class='td1 tbltx'>{$row['year']}</TD>
                                    </TR>
                                    <TD class='td1 tbltx'>{$row['bo']}</TD>
                                    </TR>
                                      <TD class='td1 tbltx'>{$row['about']}</TD>     
                                    </TR>
                                      
                                    <TD class='td1 tbltx'>";
                                    echo "<a href='view.php?id=".$row['inv']."' target='_blank' style='border-radius: 5px; text-align: center; padding: 9px 10px;width: 38%; height: 40px;' class='green medica-btnR btn-2 floated'>"; echo "Перейти к полной версии</a> 
                                    <form method='post' style='margin-top: 0px;   width: 21%' class='floated'>
                                    <input type='hidden' name='id' value='" . $row["inv"] . "' />
                                    <input type='submit' value='Удалить книгу' name='удалить' style=' height: 40px;     width: 35%; padding: 0px 0px; font-size: 14px;' class='red floated medica-btnR btn-2'>
                                </form>
                                <form method='POST' name='red' style=' all: unset;'>
                                <input type='hidden' name='id' value='" . $row['inv'] . "' />
                                  <a href='#OpenModal3'  style='border-radius: 5px; text-align: center; padding: 9px 10px;width: 38%; height: 40px;' class='blue medica-btnR btn-2 floated'  >"; echo "Редактировать Книгу</a>
                                </form>
                                </TD>
                                    </TR>
                                    </tbody></TABLE></center>";
                                }
                                
    
                            } else {
                                echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
                                echo "Нет книг, которые соответствуют условиям запроса.";
                                echo "<br>";
                            }
                        }}else{
                        


                        
                        if (isset($_POST['Поиск'])) {
                        $link = mysqli_connect("localhost", "root", "", "bgs");
                        mysqli_set_charset($link, "utf8");
                        $field = $_POST['field'];
                        $query = $_POST['query'];

                        // Формируем SQL-запрос с использованием полнотекстового поиска
                        $result = mysqli_query($link, "SELECT * FROM books,razd WHERE ($field LIKE '%$query%') AND (books.razdel=razd.num)");
                                
                        
                        
                        if ($result->num_rows > 0) {
                            echo "<h1 style='margin-bottom: 5px'><br><br><br><br><br><br><br>Книги:</h1>";
                            while ($row = $result->fetch_assoc()) {

                                echo "<center> <TABLE class='table1'> <tbody>
                                <TR class='tr1'> 
                                  <TD rowspan=7 class='td1' ><img src='../upload/prev/{$row['file_name_img']}' 
                                  width='1400' height='455' alt='обложка'></td> 
                                  <TD class='td1 tbltx'>Раздел - {$row['nazv']}</TD>
                                </TR>
                                <TD class='td1 tbltx'>{$row['title']}</TD>
                                </TR>
                                  <TD class='td1 tbltx'>{$row['author']}</TD>
                                </TR>
                                  <TD class='td1 tbltx'>{$row['year']}</TD>
                                </TR>
                                <TD class='td1 tbltx'>{$row['bo']}</TD>
                                </TR>
                                  <TD class='td1 tbltx'>{$row['about']}</TD>     
                                </TR>
                                  
                                <TD class='td1 tbltx'>";
                                echo "<a href='view.php?id=".$row['inv']."' target='_blank' style='border-radius: 5px; text-align: center; padding: 9px 10px;width: 38%; height: 40px;' class='green medica-btnR btn-2 floated'>"; echo "Перейти к полной версии</a> 
                                <form method='post' style='margin-top: 0px;   width: 21%' class='floated'>
                                <input type='hidden' name='id' value='" . $row["inv"] . "' />
                                <input type='submit' value='Удалить книгу' name='удалить' style=' height: 40px;     width: 35%; padding: 0px 0px; font-size: 14px;' class='red floated medica-btnR btn-2'>
                            </form>
                            <form method='POST' name='red' style=' all: unset;'>
                            <input type='hidden' name='id' value='" . $row['inv'] . "' />
                              <a href='#OpenModal3'  style='border-radius: 5px; text-align: center; padding: 9px 10px;width: 38%; height: 40px;' class='blue medica-btnR btn-2 floated'  >"; echo "Редактировать Книгу</a>
                            </form>
                            </TD>
                                </TR>
                                </tbody></TABLE></center>";
                            }
                            

                        } else {
                            echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
                            echo "Нет книг, которые соответствуют условиям запроса.";
                            echo "<br>";
                        }
                        
                    }else {
                     $link = mysqli_connect("localhost", "root", "", "bgs");
                        mysqli_set_charset($link, "utf8");
                        $res1 = mysqli_query($link, "SELECT * FROM books,razd WHERE books.razdel=razd.num");
                        $count = mysqli_num_rows($res1);
                        if ($count === 0) {
                            echo "<h2><br><br>Книг в разделе нет</h2>";
                        } else {

                            echo "<h1 style='margin-bottom: 5px'><br><br><br><br><br><br><br>Книги:</h1>";
                            for ($i = 0; $i < $count; ++$i) {
                                $row = mysqli_fetch_array($res1);
                                echo "<center> <TABLE class='table1'> <tbody>
                                <TR class='tr1'> 
                                  <TD rowspan=7 class='td1' ><img src='../upload/prev/{$row['file_name_img']}' 
                                  width='1400' height='455' alt='обложка'></td> 
                                  <TD class='td1 tbltx'>Раздел - {$row['nazv']}</TD>
                                </TR>
                                  <TD class='td1 tbltx'>{$row['title']}</TD>
                                </TR>
                                  <TD class='td1 tbltx'>{$row['author']}</TD>
                                </TR>
                                  <TD class='td1 tbltx'>{$row['year']}</TD>
                                </TR>
                                <TD class='td1 tbltx'>{$row['bo']}</TD>
                                </TR>
                                  <TD class='td1 tbltx'>{$row['about']}</TD>     
                                </TR>
                                <TD class='td1 tbltx'>";
                                  echo "<a href='view.php?id=".$row['inv']."' target='_blank' style='border-radius: 5px; text-align: center; padding: 9px 10px;width: 38%; height: 40px;' class='green medica-btnR btn-2 floated'>"; echo "Перейти к полной версии</a> 
                                  <form method='post' style='margin-top: 0px;   width: 21%' class='floated'>
                                  <input type='hidden' name='id' value='" . $row["inv"] . "' />
                                  <input type='submit' value='Удалить книгу' name='удалить' style=' height: 40px;     width: 35%; padding: 0px 0px; font-size: 14px;' class='red floated medica-btnR btn-2'>
                              </form>
                              <form method='POST' name='red' style=' all: unset;'>
                              <input type='hidden' name='id' value='" . $row['inv'] . "' />
                                <a href='#OpenModal3'  style='border-radius: 5px; text-align: center; padding: 9px 10px;width: 38%; height: 40px;' class='blue medica-btnR btn-2 floated'  >"; echo "Редактировать Книгу</a>
                              </form>
                              </TD>
                                </tbody></TABLE></center>";
                            }

                        }
                        mysqli_close($link);   
                    }}?>

<?php
if (isset($_POST['удалить'])) {
    $link=mysqli_connect("localhost","root","","bgs");
mysqli_set_charset($link, "utf8");
if($link->connect_error){
die("Ошибка: " . $link->connect_error);
}
$inv = $link->real_escape_string($_POST["id"]);
$sql = "DELETE FROM Books WHERE inv = '$inv'";
if($link->query($sql)){
    echo("<meta http-equiv='refresh' content='1'>");
}
else{
echo "Ошибка: " . $link->error;
}
$link->close();  }
?>
                        

                    
                    <!-- medica Button -->
                    <div class="medica-buttons-area mb-100">
                        <a href="adminRM.php" class="btn medica-btn btn-2 m-2">Управление пользователями</a>
                        <a href="#OpenModal" class="btn medica-btn btn-3 m-2">Добавить раздел</a>
                        <div id="OpenModal" class="modalDialog">
                            <div>
                                <a href="#close" title="Закрыть" class="close">X</a>
                                <h2>Добавление нового раздела</h2><br>
                                <form method="post" style="width: 100%">
                                    <div class="form-group">
                                        <input style="width: 100%; color: #000; max-width: 100%; " type="text" class="form-control" name="nazv" id="name"
                                            placeholder="Название" title="Название должно быть не меньше 15-ти и больше 200 символов">
                                    </div>
                                    <div class="form-group">
                                        <textarea style="color: #000;" type="text" class="form-control" name="opis" id="message" cols="30"
                                            rows="10" placeholder="Описание" title="Описание должно быть не меньше 100 и больше 500 символов"></textarea>
                                    </div>

                                    <button type="submit" name="nz" class="btn medica-btn ">Добавить</button>

                                </form>
                                <?php
if (isset($_POST['nz'])) {
$link=mysqli_connect("localhost","root","","bgs");
mysqli_set_charset($link, "utf8");

    $err = [];

    
    if(strlen($_POST['nazv']) < 15)
    {
        $err[] = "Название должно быть не меньше 15-ти или больше 200 символов";
    }

    if(strlen($_POST['opis']) < 100 or strlen($_POST['opis']) > 500)
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
}
?>
                            </div>
                        </div>
                        <a href="contact.php" class="btn medica-btn btn-4 m-2">Добавить книгу</a>
                        <a href="#" class="btn medica-btn btn-5 m-2">Редактировать книгу</a>
                    </div>
                </div>

                
    </section>




    <!-- ***** Elements Area End ***** -->

    <!-- ***** Footer Area Start ***** -->
    <?php
    require 'footer.php';?>
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>
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
                        <?php
                        $id = $_GET['id'];
                        $link = mysqli_connect("localhost", "root", "", "bgs");
                        mysqli_set_charset($link, "utf8");
                        $res = mysqli_query($link, "SELECT * FROM razd WHERE num = '$id'");
                        $row = mysqli_fetch_assoc($res);
                        echo "<h3 class='breadcumb-title'>{$row['nazv']}</h3>";
                        echo "<nav aria-label='breadcrumb'>
                            <ol class='breadcrumb'>
                                <li class='breadcrumb-item'><a href='index.php'>Главная</a></li>
                                <li class='breadcrumb-item'><a href='vist.php'>Выставки</a></li>
                                <li class='breadcrumb-item active' aria-current='page'>{$row['nazv']}</li>
                            </ol>
                        </nav>
                       
                        
                    </div>
                </div>
                <div class='col-12 col-md-5 col-lg-3'>
                    <div class='cta-btn'>
                    <form action='delR.php' method='post' style='all:unset;'>
                    <input type='hidden' name='id' value='" . $id . "' />
                    <button type='submit' value='' class='btn medica-btn '  >Удалить раздел</button>
                </form>


                        
                    </div>
                </div>"; 
                
                
                
                mysqli_close($link);?>
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
                        <form method="post">
                            <label for="field">Поиск по полю:</label>
                            <select name="field" id="field">
                                <option value="author">поиск по автору
                                <option value="title">поиск по названию
                                <option value="bo">поиск по БО
                                <option value="about">поиск по описанию
                            </select>
                            <br>
                            <label for="query">Поисковый запрос:</label>
                            <input type="text" name="query" id="query">
                            <br>
                            <input type="submit" name="Поиск" value="Поиск">
                        </form>
                        <?php
                        if (isset($_POST['Поиск'])) {
                        $link = mysqli_connect("localhost", "root", "", "bgs");
                        mysqli_set_charset($link, "utf8");
                        $field = $_POST['field'];
                        $query = $_POST['query'];

                        // Формируем SQL-запрос с использованием полнотекстового поиска
                       
                        $result = mysqli_query($link, "SELECT * FROM books WHERE ($field LIKE '%$query%') AND (razdel = '$id')");
                                
                        
                        
                        if ($result->num_rows > 0) {echo "<br>";echo "Найдено "; echo $result->num_rows; echo " книг";
                            echo "<h1 style='margin-bottom: 5px'><br>Книги:</h1>";
                            while ($row = $result->fetch_assoc()) {

                                echo "<center> <TABLE class='table1'> <tbody>
                                <TR class='tr1'> 
                                  <TD rowspan=6 class='td1' ><img src='../upload/prev/{$row['file_name_img']}' 
                                  width='1400' height='455' alt='обложка'></td> 
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
                                  
                                </TR>
                                <TD class='td1 tbltx' >";
                                echo "<a href='view.php?id=".$row['inv']."' target='_blank' style='border-radius: 5px; text-align: center; padding: 9px 10px;width: 38%; height: 40px;' class='green medica-btnR btn-2 floated'>"; echo "Перейти к полной версии</a> 
                                <form method='post' style='margin-top: 0px;  width: 21%' class='floated'>
                                <input type='hidden' name='id' value='" . $row["inv"] . "' />
                                <input type='submit' value='Удалить книгу' name='удалить' style=' height: 40px;     width: 35%; padding: 0px 0px; font-size: 14px;' class='red floated medica-btnR btn-2'></form>
                                <form method='POST' name='red' style=' all: unset;'>
                             <input type='hidden' name='id' value='" . $row['inv'] . "' />
                               <a href='#OpenModal3'  style='border-radius: 5px; text-align: center; padding: 9px 10px;width: 38%; height: 40px;' class='blue medica-btnR btn-2 floated'  >"; echo "Редактировать Книгу</a>
                             </form>
                                
                          </TD>
                                </TR>
                                </tbody></TABLE></center>";
                            }
                            

                        } else {
                            echo "<br>";
                            echo "Нет книг, которые соответствуют условиям запроса.";
                            echo "<br>";
                        }
                        
                    }else {
                     $link = mysqli_connect("localhost", "root", "", "bgs");
                        mysqli_set_charset($link, "utf8");
                        $res1 = mysqli_query($link, "SELECT * FROM books WHERE razdel = '$id'");
                        $count = mysqli_num_rows($res1);
                        if ($count === 0) {
                            echo "<h2><br><br>Книг в разделе нет</h2>";
                        } else {

                            echo "<h1 style='margin-bottom: 5px'><br>Книги:</h1>";
                            for ($i = 0; $i < $count; ++$i) {
                                $row = mysqli_fetch_array($res1);
                                echo "<center> <TABLE class='table1'> <tbody>
                                <TR class='tr1'> 
                                  <TD rowspan=6 class='td1' ><img src='../upload/prev/{$row['file_name_img']}' 
                                  width='1400' height='455' alt='обложка'></td> 
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
                                <TD class='td1 tbltx' >";
                                echo "<a href='view.php?id=".$row['inv']."' target='_blank' style='border-radius: 5px; text-align: center; padding: 9px 10px;width: 38%; height: 40px;' class='green medica-btnR btn-2 floated'>"; echo "Перейти к полной версии</a> 
                                <form method='post' style='margin-top: 0px;  width: 21%' class='floated'>
                                <input type='hidden' name='idd' value='" . $row['inv'] . "' />
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

                        }
                          
                    }?>
<script>var id = this.getAttribute("data-id");</script>
<script>
function openModal(id) {
  // Открывает модальное окно и передает ID записи
  var modal = document.getElementById('OpenModal3');
  modal.style.display = 'block';

  // Здесь можно добавить логику для загрузки данных записи в форму редактирования
  // например, с помощью AJAX запроса к серверу
}

function closeModal() {
  // Закрывает модальное окно
  var modal = document.getElementById('OpenModal3');
  modal.style.display = 'none';
}
</script>
<?php

if (isset($_POST['id'])) {
    
    require 'red.php';
}


if (isset($_POST['удалить'])) {
    $link=mysqli_connect("localhost","root","","bgs");
mysqli_set_charset($link, "utf8");
if($link->connect_error){
die("Ошибка: " . $link->connect_error);
}
$inv = $link->real_escape_string($_POST["idd"]);
$sql = "DELETE FROM Books WHERE inv = '$inv'";
if($link->query($sql)){
    echo("<meta http-equiv='refresh' content='1'>");
}
else{
echo "Ошибка: " . $link->error;
}
$link->close();  }


?>
                        

                    </div>
                    <!-- medica Button -->
                    <div class="medica-buttons-area mb-100">
  <a href="adminRM.php" class="btn medica-btn btn-2 m-2">Управление пользователями</a>
  <a href="#OpenModal" class="btn medica-btn btn-3 m-2">Добавить раздел</a>
  <div id="OpenModal" class="modalDialog">
    <div>
      <a href="#close" title="Закрыть" class="close">X</a>
      <h2>Добавление нового раздела</h2>
      <br>
      <form action="nz.php" method="post" style="width: 100%;">
        <div class="form-group">
          <input type="text" style="width: 100%; max-width: 100%;" class="form-control" name="nazv" id="name" placeholder="Название" title="Название должно быть не меньше 15-ти и больше 200 символов">
        </div>
        <div class="form-group">
          <textarea type="text" class="form-control" name="opis" id="message" cols="30" rows="10" placeholder="Описание" title="Описание должно быть не меньше 100 и больше 500 символов"></textarea>
        </div>

        <button class="btn medica-btn ">Добавить</button>

      </form>
    </div>
  </div>
  <a href="contact.php" class="btn medica-btn btn-4 m-2">Добавить книгу</a>
  <a href="#OpenModal1" class="btn medica-btn btn-5 m-2">Справка</a>
  <div id="OpenModal1" class="modalDialog1">
    <div class="wrapper1">
      <a href="#close" title="Закрыть" class="close">X</a>
      <div class="wrapper2">
        <center>
          <h2>Справка</h2></center>
        <br>
        <div class="info">
          <input id="info__body_1" class="info__switch" type="checkbox">
          <label for="info__body_1" class="info__headline">Управление пользователями</label>
          <div class="info__body">
            На странице "Управление пользователями" отображаются все зарегистрированные на сайте пользователи, включая их фамилии, имена, адреса электронной почты и статус. Возможно удаление любого пользователя, за исключением администратора.
            <img src="img/spr/up.jpg" alt="" height=622px>

          </div>
        </div>
        <div class="info">
          <input id="info__body_2" class="info__switch" type="checkbox">
          <label for="info__body_2" class="info__headline">Добавить раздел</label>
          <div class="info__body">
            Модальное окно "Добавить раздел" позволяет добавить новый раздел в электронную библиотеку. Для этого необходимо заполнить поля "Название" и "Описание". При этом название должно содержать не менее 15 и не более 200 символов, а описание - не менее 100 и не более 500 символов. После заполнения полей и нажатия кнопки "Добавить", новый раздел будет добавлен в список разделов электронной библиотеки. При некорректном заполнении полей будет выведено сообщение об ошибке.
            <br>
            <img src="img/spr/nz.jpg" alt="" height=512px>
          </div>
        </div>
        <div class="info">
          <input id="info__body_3" class="info__switch" type="checkbox">
          <label for="info__body_3" class="info__headline">Добавить книгу</label>
          <div class="info__body">
            Эта страница предназначена для добавления новых книг в уже существующий раздел электронной библиотеки. Чтобы добавить книгу, пользователь должен заполнить несколько обязательных полей, таких как название, автор, год издания, описание книги и библиографическое описание. Раздел, в который будет добавлена книга, выбирается из выпадающего списка, содержащего все доступные разделы. После этого, пользователь должен загрузить отсканированную книгу, нажав на кнопку "Выберите PDF". Описание книги не должно превышать 1000 символов. На этой же странице, находятся напоминания о том, как правильно составлять описание книги и библиографическое описание, а также ссылка на полный текст ГОСТ Р 7.0.100–2018 о составлении библиографического описания.
            <img src="img/spr/nb.jpg" alt="" height=876px>
          </div>
        </div>
      </div>
    </div>
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
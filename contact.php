<!DOCTYPE html>
<html>

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

select, textarea, input[type="text"] {
  font-size: 16px;
  padding: 5px;
  margin-bottom: 1px;
  border: 1px solid #ccc;
  border-radius: 5px;
  width: 100%;
  max-width: 100%;
}

select {
  width: auto;
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
        style="background-image: url(img/bg-img/hero6.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <!-- Title -->
                        <h3 class="breadcumb-title">Администрирование</h3>
                        <!-- Breadcumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="indexAdm.php">Главная</a></li>
                                <li class="breadcrumb-item"><a href="admin.php">Администрирование</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Добавление книги</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="medica-contact-area section_padding_100">
        <div class="container">
            <div class="row">
                <!-- Contact Form Area -->
                <div class="col-12 col-lg-8">
                    <div class="contact-form">
                        <h4 class="mb-50">Добавление новой книги</h4>

                        <form action="upload.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12 ">
                                    <input type="text" class="form-control" name="title" id="name"
                                        placeholder="Название">
                                </div><br><br>
                                <div class="col-12 col-md-6">
                                    <input type="text" class="form-control" name="author" id="phone"
                                        placeholder="Автор">
                                </div>
                                <div class="col-12 col-md-6">
                                    <input type="text" class="form-control" name="year" placeholder="Год">
                                </div><br><br>
                                <div class="col-12">
                                    <textarea name="bo" class="form-control" id="message" cols="30" rows="10"
                                        placeholder="Библиографическое описание"></textarea>
                                </div>
                                <div class="col-12">
                                    <textarea name="about" class="form-control" id="message" cols="30" rows="10"
                                        placeholder="Описание книги"></textarea>
                                </div>
                                <div class="col-12">
                                <h6 for="select-data">Выберите раздел:   </h6>
                                <select for="select-data" name="razd">
                                    <?php
                                    // Подключаемся к базе данных
                                    $link = mysqli_connect("localhost", "root", "", "bgs");
                                    mysqli_set_charset($link, "utf8");

                                    // Выполняем запрос на выборку данных
                                    $result = mysqli_query($link, "SELECT num, nazv FROM  razd WHERE num != 1");

                                    // Выводим данные в виде элементов списка
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<option value='" . $row['num'] . "'>" . $row['nazv'] . "</option>";
                                    }

                                    // Закрываем соединение с базой данных
                                    mysqli_close($link);
                                    ?>
                                </select>
                                </div>
                                <!-- Загружаем файл -->
                                <div class="col-12 ">
                                    <div id="drop-area">
                                    <label class="input-file">
	   	                                                <input type="file" name="pdf" id="file" class="floated btn medica-btn btn-3 mt-3" accept=".pdf">		
	   	                                                <span>Выберите pdf</span>
                             	                        </label>
                                        
                                    </div>
                                </div>
                                <div class="col-12 ">
                                    <div id="drop-area">
                                    <label class="input-file">
	   	                                                <input type="file" name="img" id="file" class="floated btn medica-btn btn-3 mt-3" accept="image/*">		
	   	                                                <span>Выберите обложку</span>
                             	                        </label>
                                        
                                    </div>
                                </div>



                                <div class="col-12 ">
                                    <button type="submit" class="floated btn medica-btn btn-3 mt-3">Добавить книгу</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="content-sidebar">
                        
                        <div class="medica-emergency-card mb-4">
                            <h5>НАПОМИНАНИЕ</h5>
                            <h4 style="color: #1E071E">Описание книги не должно превышать 1500 символов</h4>
                           <!--  <p class="mb-0">Описание должно быть не больше 1000 символов </p>-->
                        </div>
                        <!-- Medica Appointment Card -->
                        <div class="medica-contact-card">
                            <h5>НАПОМИНАНИЕ </h5>
                           <p style="color: #FEE84F; font-size: 11pt;"> <b>Библиографическое описание должно быть составлено в соответствии с <a href="http://it-mda.ru/standards/docs/GOST_R/GOST_R_7.0.100-2018.pdf" target="_blank" style="color: #ffffff">ГОСТ Р 7.0.100–2018</a> «Библиографическая запись. Библиографическое описание. Общие требования и правила составления»</b></p>
                            <p style="color: #FEE84F; font-size: 11pt;">Кроме того, при составлении библиографического описания необходимо проверить его на правильность и точность, чтобы избежать ошибок и неточностей.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



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
    <!-- Google Maps -->
    <script src="js/dad.js"></script>

    <script>$('.input-file input[type=file]').on('change', function(){
	let file = this.files[0];
	$(this).next().html(file.name);
});</script>

</body>

</html>
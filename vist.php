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
    
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="medica-load"></div>
        <img src="img/core-img/icon.png" alt="logo">
    </div>

    
    <!-- ***** Header Area Start ***** -->
    <?php
    require 'head.php';
    ?>
    <!-- ***** Header Area End ***** -->
    <section class="breadcumb-area bg-img gradient-background-overlay" style="background-image: url(img/bg-img/28.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <!-- Title -->
                        <h3 class="breadcumb-title">Выставки</h3>
                        <!-- Breadcumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Главная</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Выставки</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- ***** Contact Info Area End ***** -->
    <!-- ***** About Us Area Start ***** -->
    <section class="medica-about-us-area">
        <!-- Card Area --><br><br>
        <div class="medica-card-area">
            <div class="container">
                <div class="row no-gutters">
                <?php
$link=mysqli_connect("localhost","root","","bgs");$i=0;
mysqli_set_charset($link, "utf8");
$sql = mysqli_query($link, "SELECT * FROM razd Where num = 1");
$res = mysqli_fetch_array($sql);
    echo "<div class='col-12 col-md-6 col-lg-4'>";

                       echo "<div class='emergency-card wow fadeInUp bor' data-wow-delay='";echo $i; echo"s'>";
                        echo    "<h5>{$res['nazv']}</h5>";
                         echo   "<p class='shd'> {$res['opis']}</p>";
                         echo   "<a href='vistAll.php'>Перейти к литературе</a>";
                        echo "</div> </div>";
                        mysqli_close($link);?>
                <?php
$link=mysqli_connect("localhost","root","","bgs");$i=0.2;
mysqli_set_charset($link, "utf8");
$sql = mysqli_query($link, "SELECT * FROM razd WHERE num != 1 ORDER BY nazv");
while ($result = mysqli_fetch_array($sql)) {
    $i=$i+0.2;
    echo "<div class='col-12 col-md-6 col-lg-4'>";

                       echo "<div class='emergency-card wow fadeInUp bor' data-wow-delay='";echo $i; echo"s'>";
                        echo    "<h5>{$result['nazv']}</h5>";
                         echo   "<p class='shd'> {$result['opis']}</p>";
                         echo   "<a href='vistR.php?id=" . $result['num'] . "'>Перейти к литературе</a>";
                        echo "</div> </div>";}
                        mysqli_close($link);?>
                    
                    </div>
                </div>
            </div>
        </div>
       

    <!-- ***** Appointment Area Start ***** -->
    
   
<br><br><br>
    
<?php
    require 'footer.php';
    ?>

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
<script src="js/mod.js"></script>
</body>

</html>
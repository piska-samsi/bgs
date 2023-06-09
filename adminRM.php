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

    <section class="breadcumb-area bg-img gradient-background-overlay" style="background-image: url(img/bg-img/hero6.jpg);">
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
                                <li class="breadcrumb-item active" aria-current="page">Управление пользователями</li>
                            </ol>
                        </nav>
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
                        <h2>Управление пользователями</h2>
                    </div> 
                    <!-- ========== Buttons ========== -->
                    
                    <?php
                    echo "<form action='addB.php' method='post'>
                    <input type='hidden' name='id'>
                    <input type='submit' value='добавить библиотекаря'>
                </form>";
                echo "<form action='addA.php' method='post'>
                    <input type='hidden' name='id'>
                    <input type='submit' value='добавить админа'>
                </form>";
                echo "<form action='addP.php' method='post'>
                    <input type='hidden' name='id'>
                    <input type='submit' value='добавить пользователя'>
                </form>";?>


                    <?php
                    $link=mysqli_connect("localhost","root","","bgs");
                    mysqli_set_charset($link, "utf8");
  $sql = mysqli_query($link, "SELECT id, firstname, secondname, email, status FROM users ORDER BY status DESC");
  echo "<table class='table'><thead><tr><th>Фамилия</th><th>Имя</th><th>Email</th><th>Статус</th><th></th></tr></thead>";
  while ($result = mysqli_fetch_array($sql)) {
    
   echo "<tbody><tr>";
    if($result['status'] === "2") 
    {
        echo "<td>{$result['secondname']}</td> <td>{$result['firstname']}</td>  <td>{$result['email']}</td> <td> Администратор</td> ";
    }
    if($result['status'] === "1") 
    { echo "<td>{$result['secondname']}</td> <td>{$result['firstname']}</td>  <td>{$result['email']}</td> <td>Библиотекарь</td> <td><form action='delete.php' method='post'>
    <input type='hidden' name='id' value='" . $result["id"] . "' />
    <input type='submit' value='Удалить' class='medica-btnR btn-2'>
</form></td>";}
    if($result['status'] === "0") 
    { echo "<td>{$result['secondname']} </td> <td>{$result['firstname']} </td>  <td>{$result['email']} </td> <td> Пользователь </td> <td><form action='delete.php' method='post'>
    <input type='hidden' name='id' value='" . $result["id"] . "' />
    <input type='submit' value='Удалить' class='medica-btnR btn-2'>
</form></td>";}  
  }echo "</tbody></tr> </table>";
?>

                    
                    <!-- medica Button -->
                    <?php 
    require 'adbut.php';
    ?>
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
<header class="header-area" style="background-color: #f2f4f8bb;">
       
        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 h-100">
                        <div class="main-menu h-100">
                            <nav class="navbar h-100 navbar-expand-lg">
                                <!-- Logo Area  -->
                                <a class="navbar-brand" href="index.php"><img src="img/core-img/logo.png" alt="Logo"></a>

                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#medicaMenu" aria-controls="medicaMenu" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i> Menu</button>

                                <div class="collapse navbar-collapse" id="medicaMenu">
                                    <!-- Menu Area -->
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="index.php">Главная <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Меню</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="index.php">Главная</a>
                                                <a class="dropdown-item" href="spr.php">Справка</a>
                                                <a class="dropdown-item" href="vist.php">Выставки</a>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="spr.php">Справка</a>
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="vist.php">Выставки</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="admin.php">Администрирование</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../index.php">Выход</a>
                                        </li>
                                        
                                        
                                    </ul>
                                    <!-- Search Form 
                                    <div class="header-search-form ml-auto">
                                        <form action="#">
                                            <input type="search" class="form-control" placeholder="Поиск по сайту" id="search" name="search">
                                            <input class="d-none" type="submit" value="submit">
                                        </form>
                                    </div>-->
                                    <!-- Search btn 
                                    <div id="searchbtn">
                                        <i class="ti-search" aria-hidden="true"></i>
                                    </div>-->
                                </div>
                            </nav>
                            <div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
                                <div class="cd-user-modal-container"> <!-- this is the container wrapper -->
                                    <ul class="cd-switcher">
                                        <li><a href="#0">Войти</a></li>
                                        <li><a href="#0">Новый пользователь</a></li>
                                    </ul>
                        
                                    <div id="cd-login"> <!-- log in form -->
                                        <div class="col-12 col-lg-6">
                                            <div class="medica-appointment-card">
                                        <form action="login.php" method="post">
                                            <div class="form-group">
                                              <input type="text" class="form-control text-white" name="login" id="name" placeholder="Логин">
                                             </div>
                                            <div class="form-group">
                                             <input type="text" class="form-control" name="pass" id="number" placeholder="Пароль">
                                          </div>
                                          <div class="form-group checkbox">
                                          <input type="checkbox" id="chek" class="custom-checkbox" name="not_attach_ip"> <label for="chek"><b class="shadow"><font color="black">Не прикреплять к IP (небезопасно)</font></b></label>
                                         </div>
                                          <button  class="btn medica-btn mt-15">Вход</button>
                                        
                                        </form>
                                        </div></div>
                                        <a href="#0" class="cd-close-form">Close</a> 
                                    </div> <!-- cd-login -->
                        
                                    <div id="cd-signup"> <!-- sign up form -->
                                        <div class="col-12 col-lg-6">
                                            <div class="medica-appointment-card">
                                        <form action="reg.php" method="post">
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control text-white" name="login" id="appointmentName" placeholder="Логин">
                                                    </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control text-white" name="pass" id="appointmentName" placeholder="Пароль">
                                                        </div>
                                                        </div>
                                               <div class="col-12 col-md-6">
                                               <div class="form-group">
                                                   <input type="text" class="form-control text-white" name="firstname" id="appointmentName" placeholder="Имя">
                                               </div>
                                               </div>
                                               <div class="col-12 col-md-6">
                                               <div class="form-group">
                                               <input type="text" class="form-control text-white" name="secondname" id="appointmentName" placeholder="Фамилия">
                                               </div>
                                           </div>
                                           <div class="col-12 col-md-6">
                                               <div class="form-group">
                                                   <input type="email" class="form-control" name="email" id="appointmentEmail" placeholder="E-mail">
                                               </div>
                                           </div>
                                          
                                           <div class="col-12">
                                               <button class="btn medica-btn mt-15">Зарегистрироваться</button>
                                           </div>
                                            </div>
                                           </form>
                                           </div>
                                           </div>
                                         <a href="#0" class="cd-close-form">Close</a> 
                                    </div> <!-- cd-signup -->
                        
                                    <div id="cd-reset-password"> <!-- reset password form -->
                                        <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>
                        
                                        <form class="cd-form">
                                            <p class="fieldset">
                                                <label class="image-replace cd-email" for="reset-email">E-mail</label>
                                                <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
                                                <span class="cd-error-message">Error message here!</span>
                                            </p>
                        
                                            <p class="fieldset">
                                                <input class="full-width has-padding" type="submit" value="Reset password">
                                            </p>
                                        </form>
                        
                                        <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
                                    </div> <!-- cd-reset-password -->
                                    
                                </div> <!-- cd-user-modal-container -->
                            </div> <!-- cd-user-modal -->                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
<div class="medica-buttons-area mb-100">
  <a href="adminRM.php" class="btn medica-btn btn-2 m-2">Управление пользователями</a>
  <a href="#OpenModal" class="btn medica-btn btn-3 m-2">Добавить раздел</a>
  <div id="OpenModal" class="modalDialog">
    <div>
      <a href="#close" title="Закрыть" class="close">X</a>
      <h2>Добавление нового раздела</h2>
      <br>
      <form action="nz.php" method="post">
        <div class="form-group">
          <input type="text" class="form-control" name="nazv" id="name" placeholder="Название" title="Название должно быть не меньше 15-ти и больше 200 символов">
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
<?php require_once('head.php') ?>
<body>
<header class="header">
    <?php require_once('header.php') ?>
</header>
   <main class="main">
      <section class="for_who">
        <div class="for_who_block">
          <div class="for_who_title">
            <h2>Для кого?</h2>
          </div>
          <div class="container-fluid">
            <div class="for_who_card row row-cols-1 row-cols-md-6 g-4">

              <div class="card col-md-4 col-lg-2">
                <div class="card-body">
                  <p class="card-text">нормотипичные дети от 3-х лет</p>
                </div>  
                <div>
                  <img src="assets/pic/for_who/child1.png" class="rounded" class="card-img-bottom" alt="здесь изображен человек">
                </div>        
                
              </div>

              <div class="card col-md-4 col-lg-2">
                <div class="card-body">
                  <p class="card-text">дети от 5 лет с нарушением зрения</p>
                </div>
                <img src="assets/pic/for_who/eye.png" class="card-img-bottom" alt="здесь изображен глаз">
              </div>

              <div class="card col-md-4 col-lg-2">
                <div class="card-body">
                  <p class="card-text">дети от 5 лет с нарушением слуха</p>
                </div>
                <img src="assets/pic/for_who/ear.png" class="card-img-bottom" alt="здесь изображено ухо">
              </div>

              <div class="card col-md-4 col-lg-2">
                <div class="card-body">
                  <p class="card-text">дети 7 лет с ДЦП с сохранным интеллектом</p>
                </div>
                <img src="assets/pic/for_who/brain.png" class="card-img-bottom" alt="здесь изображен головной мозг">
              </div>

              <div class="card col-md-4 col-lg-2">
                <div class="card-body">
                  <p class="card-text">взрослые с когнитивными нарушениями, перенесшие инсульт,
                      с частичной потерей памяти</p>
                </div>
                <img src="assets/pic/for_who/person.png" class="card-img-bottom" alt="здесь изображена голова человека с мозгом">
              </div>

              <div class="card col-md-4 col-lg-2">
                <div class="card-body">
                  <p class="card-text">дети от 5 лет с РАС</p>
                </div>
                <img src="assets/pic/for_who/child2.png" class="card-img-bottom" alt="здесь изображен ребенок">
              </div>

            </div>
          </div>
        </div>

      </section>


      <section class="history">
        <div class="container">
          <div></div>
        </div>
      </section>
    
      <section class="mission">
      <div class="container"></div>
      </section>

      <section  class="form">
        <div class="forh2">
        <h2 class="tell_with_me">Свяжитесь с нами!</h2>
        <p class="formp">Остались вопросы или замечания? Просто напишите нам сообщение!</p>
        </div>

  <form action="index.html" method="post" class="form-two">
    <div class="form-two-inside">
      <div class="form-inside">
          <input type="name" placeholder="ФИО" name="name" id="name" class="short-form">
          <input type="city" placeholder="Ваш город" name="town" id="city" class="short-form">
          <input type="diagnos" placeholder="Нозология" name="nozologia" id="diagnos" class="short-form">
      </div>

      <div class="form-inside">
          <input type="email" placeholder="Email" name="email" id="email" class="short-form">
          <input type="phone" placeholder="Моб.телефон" name="tel" id="city" class="short-form">
          <input type="number" placeholder="Количество устройств" name="amound" id="number" class="short-form">
      </div>
    </div>

      <div class="place_for_text">
      <label class="lebel" for="comment">
    
    <textarea name="comment" class="place_for_text_inside" name="comment" placeholder="Введите Ваше сообщение:"></textarea>
      </label>
      </div>

      <div class="checkbox_button">
          <div class="chekcbox">
            <div class="radio">
              <input type="radio" name="field" id="mc1">
                <label for="mc1">Юр.лицо</label>
                </div>
                <div>
              <input type="radio" name="field" id="mc2">
                <label for="mc2">Физ.лицо</label>
                </div>
          </div>
          <div class="text_down">
            <p class="press_button">Нажимая на кнопку “Отправить заявку!” Вы автоматически соглашаетесь <a href="./polzovatelskoe-soglashenie.php">с политикой конфеденциальности</a> и <a href="./polzovatelskoe-soglashenie.php">договором публичной оферты.</a></p>
          </div>
          <div class="button_for_form">
            <button class="button" type="submit">Отправить заявку!</button>
          </div>
      </div>
  </form>

      </section>

</main>
<footer class="footer" id="footer">
<?php require_once('footer.php') ?>
</footer>
</body>
</html>
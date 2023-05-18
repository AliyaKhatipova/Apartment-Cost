<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ApartmentCost</title>
  <link rel="stylesheet" href="css/reg.css">
</head>
<body>
<nav class="nav">
  <div class="container">
    <div class="nav-row">
      <a href="index.php" class="logo">ApartmentCost</a>

      <button class="dark-mode-btn">
        <img src="img/icons/sun.svg" alt="Light mode" class="dark-mode-btn__icon">
        <img src="img/icons/moon.svg" alt="Dark mode" class="dark-mode-btn__icon">
      </button>

      <ul class="nav-list">
        <li class="nav-list__item"><a href="index.php" class="nav-list__link">Главная</a></li>
        <li class="nav-list__item"><a href="Seller.php" class="nav-list__link">Продажа недвижимости</a></li>
        <li class="nav-list__item"><a href="Buyer.php" class="nav-list__link">Покупка недвижимости</a></li>
        <li class="nav-list__item"><a href="login.html" class="nav-list__link nav-list__link--active">Войти</a></li>
      </ul>
    </div>
  </div>
</nav>



<main class="section">
  <div class="container">

    <!-- Контейнер-->
    <article class="containerreg">

      <!--      Внутренний блок-->
      <div class="block">

        <section class="block_item block-item">
          <h2 class="block-item_title">У вас уже есть аккаунт?</h2>
          <button class="block-item_btn signin-btn">Войти</button>
        </section>
        <section class="block_item block-item">
          <h2 class="block-item_title">У вас нет аккаунта?</h2>
          <button class="block-item_btn signup-btn">Зарегистрироваться</button>
        </section>

      </div>

      <!--Блок формы-->
      <div class="form-box">

        <!-- Форма входа-->
        <form action="#" class="form form_signin">
          <h3 class="form_title">Вход</h3>

          <p>
            <input type="text" class="form_input" placeholder="Логин">
          </p>
          <p>
            <input type="password" class="form_input" placeholder="Пароль">
          </p>
          <p>
            <button class="form_btn form_btn">Войти</button>
          </p>
          <p>
            <a href="#" class="form_forgot">Восстановить пароль</a>
          </p>
        </form>

        <!-- Форма регистрации-->
        <form action="check.php" method="post" class="form form_signup">
          <h3 class="form_title">Регистрация</h3>

          <p>
            <input type="text" class="form_input"
                   id="name" placeholder="Введите имя">
          </p>
          <p>
            <input type="text" class="form_input" name="login"
                   id="login" placeholder="Введите логин">
          </p>
          <p>
            <input type="password" class="form_input"
                   id="pass" placeholder="Введите пароль">
          </p>
          <p>
            <button class="form_btn form_btn_signup">Зарегистрироваться</button>
          </p>
        </form>

      </div>

    </article>

  </div>
</main>

<footer class="footer">
  <div class="container">
    <div class="footer__wrapper">
      <ul class="social">
        <li class="social__item"><a href="#!"><img src="img/icons/vk.svg" alt="Link"></a></li>
        <li class="social__item"><a href="#!"><img src="img/icons/instagram.svg" alt="Link"></a></li>
        <li class="social__item"><a href="#!"><img src="img/icons/twitter.svg" alt="Link"></a></li>
        <li class="social__item"><a href="#!"><img src="img/icons/gitHub.svg" alt="Link"></a></li>
        <li class="social__item"><a href="#!"><img src="img/icons/linkedIn.svg" alt="Link"></a></li>
      </ul>
      <div class="copyright">
        <p>© 2023 apartment-sell.com</p>
      </div>
    </div>
  </div>
</footer>

<script src="js/test.js"></script>

</body>
</html>

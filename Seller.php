<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ApartmentCost</title>
  <link rel="stylesheet" href="css/sell.css">
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
        <li class="nav-list__item"><a href="Seller.html" class="nav-list__link nav-list__link--active">Продажа недвижимости</a></li>
        <li class="nav-list__item"><a href="Buyer.php" class="nav-list__link">Покупка недвижимости</a></li>
        <li class="nav-list__item"><a href="login.php" class="nav-list__link">Войти</a></li>
      </ul>
    </div>
  </div>
</nav>

<main class="section">
  <div class="container">
    <header class="header">
      <div class="header__wrapper">
        <h1 class="header__title">
          <strong>  Квартира за хорошую цену!</strong>
        </h1>
        <div class="header__text">
          Введите параметры квартиры, сроки продажи
        </div>
          и получите оценку стоимости вашей квартиры!
      </div>
    </header>
    <h2 class="title-1">Выбери тип жилья</h2>
    <ul class="projects">
      <li class="project">
        <a href="ResaleSell.php">
          <img src="img/projects/1.jpg" alt="Project img" class="project__img">
          <h3 class="project__title">Вторички</h3>
        </a>
      </li>
      <li class="project">
        <a href="NewBuildSell.php">
          <img src="img/projects/2.jpg" alt="Project img" class="project__img">
          <h3 class="project__title">Новостройки</h3>
        </a>
      </li>

    </ul>
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

<script src="js/main.js"></script>

</body>
</html>
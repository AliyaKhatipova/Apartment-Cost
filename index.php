<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ApartmentCost</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <nav class="nav">
        <div class="container">
            <div class="nav-row">
                <a href="./index.php" class="logo">ApartmentCost</a>

                <button class="dark-mode-btn">
                    <img src="img/icons/sun.svg" alt="Light mode" class="dark-mode-btn__icon">
                    <img src="img/icons/moon.svg" alt="Dark mode" class="dark-mode-btn__icon">
                </button>

                <ul class="nav-list">
                    <li class="nav-list__item"><a href="./index.php" class="nav-list__link nav-list__link--active">Главная</a></li>
                    <li class="nav-list__item"><a href="Seller.php" class="nav-list__link">Продажа недвижимости</a></li>
                    <li class="nav-list__item"><a href="Buyer.php" class="nav-list__link">Покупка недвижимости</a></li>
                    <li class="nav-list__item"><a href="login.php" class="nav-list__link">Войти</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="header">
        <div class="header__wrapper">
            <h1 class="header__title">
                <strong>Узнать стоимость квартиры? <em>тогда к нам!</em></strong><br>
                Точно, быстро и эффективно
            </h1>
            <div class="header__text">
                <p>Здесь мы сможете проверить стоимость квартиры перед покупкой, либо узнать стоимость для эффективной продажи за необходимый срок</p>
            </div>
            <a href="#!" class="btn">Перейти к рассчету</a>
        </div>
    </header>

    <main class="section">
        <div class="container">
            <h2 class="title-1">Информация</h2>
            <ul class="projects">
                <li class="project">
                    <a href="project-page.php">
                        <img src="img/projects/1.jpg" alt="Project img" class="project__img">
                        <h3 class="project__title">Средняя стоимость новостроек на текущий момент</h3>
                    </a>
                </li>
                <li class="project">
                    <a href="project-page.php">
                        <img src="img/projects/2.jpg" alt="Project img" class="project__img">
                        <h3 class="project__title">Средняя стоимость новостроек за квадратный метр</h3>
                    </a>
                </li>
                <li class="project">
                    <a href="project-page.php">
                        <img src="img/projects/2.jpg" alt="Project img" class="project__img">
                        <h3 class="project__title">Средняя стоимость вторичек за квадратный метр</h3>
                    </a>
                </li>
                <li class="project">
                    <a href="project-page.php">
                        <img src="img/projects/2.jpg" alt="Project img" class="project__img">
                        <h3 class="project__title">Средняя стоимость вторичек</h3>
                    </a>
                </li>
                <li class="project">
                    <a href="project-page.php">
                        <img src="img/projects/1.jpg" alt="Project img" class="project__img">
                        <h3 class="project__title">График изменения стоимости квартир</h3>
                    </a>
                </li>

                <li class="project">
                    <img src="img/projects/2.jpg" alt="Project img" class="project__img">
                    <h3 class="project__title">График изменения цен за квадратный метр</h3>
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

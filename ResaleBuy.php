<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ApartmentCost</title>
  <link rel="stylesheet" href="css/calc.css">
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
        <li class="nav-list__item"><a href="Buyer.php" class="nav-list__link nav-list__link--active">Покупка недвижимости</a></li>
        <li class="nav-list__item"><a href="login.php" class="nav-list__link">Войти</a></li>
      </ul>
    </div>
  </div>
</nav>

<main class="calc-wrapper">
  <div class="container">
    <form id="form">
      <div class="heading">
        <h1 class="heading-title">Рассчет стоимости квартиры</h1>
        <p class="heading-desc">Выбери параметры своей квартиры</p>
      </div>

      <!-- Площадь -->
      <div class="calc-section">
        <label class="checkbox-wrapper title-bold section-title .section-title--vertical-center">
          <span class="title__inline">Площадь квартиры:</span>
          <input type="number" min="5" max="300" value="50" step="0.1" id="square-input" class="title__inline input-short" />
          <span class="title__inline">м²</span>
        </label>
        <input type="range" id="square-range" class="range-input" min="5" max="300" value="50" step="0.1" />
      </div>
      <!-- // Площадь -->

      <!-- Мобильная адаптивность -->
      <div class="calc-section">
        <h4 class="checkbox-wrapper title-bold section-title">Район</h4>
        <label class="radio-wrapper" data-name="mobile">
          <input type="radio" class="radio" name="district" value="1" checked/>
          <div class="title-lite">Кировский</div>
        </label>
        <label class="radio-wrapper" data-name="mobile">
          <input type="radio" class="radio" name="district" value="2"  />
          <div class="title-lite">
            Московский
          </div>
        </label>
        <label class="radio-wrapper" data-name="mobile">
          <input type="radio" class="radio" name="district" value="3" />
          <div class="title-lite">
            Авиастроительный
          </div>
        </label>
        <label class="radio-wrapper" data-name="mobile">
          <input type="radio" class="radio" name="district" value="4" />
          <div class="title-lite">
            Советский
          </div>
        </label>
        <label class="radio-wrapper" data-name="mobile">
          <input type="radio" class="radio" name="district" value="5" />
          <div class="title-lite">
            Приволжский
          </div>
        </label>
        <label class="radio-wrapper" data-name="mobile">
          <input type="radio" class="radio" name="district" value="6" />
          <div class="title-lite">
            Ново-Савиновский
          </div>
        </label>
        <label class="radio-wrapper" data-name="mobile">
          <input type="radio" class="radio" name="district" value="7" />
          <div class="title-lite">
            Вахитовский
          </div>
        </label>
      </div>
      <!-- // Мобильная адаптивность -->

      <!-- Мобильная адаптивность -->
      <div class="calc-section">
        <label class="checkbox-wrapper title-bold section-title"> Что видно из окон? </label>
        <label class="radio-wrapper">
          <input type="radio" class="radio" name="building" value="1" checked />
          <div class="title-lite">Улицу</div>
        </label>
        <label class="radio-wrapper">
          <input type="radio" class="radio" name="building" value="2" />
          <div class="title-lite">
            Двор
          </div>
        </label>
        <label class="radio-wrapper">
          <input type="radio" class="radio" name="building" value="3" />
          <div class="title-lite">
            И улицу и двор, квартира-распашонка
          </div>
        </label>
      </div>
      <!-- // Мобильная адаптивность -->

      <!-- Количество комнат -->
      <div class="calc-section">
        <label class="checkbox-wrapper title-bold section-title"> Количество комнат </label>
        <div class="rooms-wrapper">
          <label class="rooms-label">
            <input class="rooms-radio-real" type="radio" name="rooms" value="0" />
            <span class="rooms-radio-fake">C</span>
          </label>

          <label class="rooms-label">
            <input class="rooms-radio-real" type="radio" name="rooms" value="1" checked/>
            <span class="rooms-radio-fake">1</span>
          </label>

          <label class="rooms-label">
            <input class="rooms-radio-real" type="radio" name="rooms" value="2" />
            <span class="rooms-radio-fake">2</span>
          </label>

          <label class="rooms-label">
            <input class="rooms-radio-real" type="radio" name="rooms" value="3" />
            <span class="rooms-radio-fake">3</span>
          </label>

          <label class="rooms-label">
            <input class="rooms-radio-real" type="radio" name="rooms" value="4" />
            <span class="rooms-radio-fake">4</span>
          </label>

          <label class="rooms-label">
            <input class="rooms-radio-real" type="radio" name="rooms" value="5" />
            <span class="rooms-radio-fake">5</span>
          </label>
        </div>
      </div>
      <!-- // Количество комнат -->

      <!-- Мобильная адаптивность -->
      <div class="calc-section">
        <label class="checkbox-wrapper title-bold section-title"> Тип дома </label>
        <label class="radio-wrapper">
          <input type="radio" class="radio" name="material" value="1" checked/>
          <div class="title-lite">Блочный</div>
        </label>
        <label class="radio-wrapper">
          <input type="radio" class="radio" name="material" value="2"/>
          <div class="title-lite">
            Панельный
          </div>
        </label>
        <label class="radio-wrapper">
          <input type="radio" class="radio" name="material" value="3"/>
          <div class="title-lite">Монолитный</div>
        </label>
        <label class="radio-wrapper">
          <input type="radio" class="radio" name="material" value="4"/>
          <div class="title-lite">Монолитно-кирпичный</div>
        </label>
        <label class="radio-wrapper">
          <input type="radio" class="radio" name="material" value="5"/>
          <div class="title-lite">Кирпичный</div>
        </label>
      </div>
      <!-- // Мобильная адаптивность -->

      <!-- Этаж -->
      <div class="calc-section">
        <h4 class="checkbox-wrapper title-bold section-title">Этаж</h4>
        <label class="radio-wrapper" data-name="mobile">
          <input type="radio" class="radio" name="floors" value="1" checked/>
          <div class="title-lite">Первый</div>
        </label>
        <label class="radio-wrapper" data-name="mobile">
          <input type="radio" class="radio" name="floors" value="2"  />
          <div class="title-lite">
            Средний
          </div>
        </label>
        <label class="radio-wrapper" data-name="mobile">
          <input type="radio" class="radio" name="floors" value="3" />
          <div class="title-lite">
            Последний
          </div>
        </label>
      </div>
      <!-- // Этаж -->

      <!-- Мобильная адаптивность -->
      <div class="calc-section">
        <label class="checkbox-wrapper title-bold section-title"> Кол-во балконов (лоджий) </label>
        <label class="radio-wrapper">
          <input type="radio" class="radio" name="balcony" value="0" checked/>
          <div class="title-lite">Нет</div>
        </label>
        <label class="radio-wrapper">
          <input type="radio" class="radio" name="balcony" value="1"  />
          <div class="title-lite">
            Один
          </div>
        </label>
        <label class="radio-wrapper">
          <input type="radio" class="radio" name="balcony" value="2"  />
          <div class="title-lite">
            Два
          </div>
        </label>
        <label class="radio-wrapper">
          <input type="radio" class="radio" name="balcony" value="3"  />
          <div class="title-lite">
            Три
          </div>
        </label>
        <label class="radio-wrapper">
          <input type="radio" class="radio" name="balcony" value="4"  />
          <div class="title-lite">
            Четыре
          </div>
        </label>
      </div>
      <!-- // Мобильная адаптивность -->

      <!-- Панорамное остекление -->
      <div class="calc-section">
        <label class="checkbox-wrapper title-bold section-title"> Панорамное остекление </label>
        <label class="radio-wrapper">
          <input type="radio" class="radio" name="panoramic" value="0" checked/>
          <div class="title-lite">Нет</div>
        </label>
        <label class="radio-wrapper">
          <input type="radio" class="radio" name="panoramic" value="1"  />
          <div class="title-lite">
            Только на балконе (лоджии)
          </div>
        </label>
        <label class="radio-wrapper">
          <input type="radio" class="radio" name="panoramic" value="2"  />
          <div class="title-lite">
            Полностью панорамное остекление
          </div>
        </label>
      </div>
      <!-- // Мобильная адаптивность -->

      <!-- Ремонт -->
      <div class="calc-section">
        <h4 class="checkbox-wrapper title-bold section-title">Ремонт квартиры</h4>
        <label class="radio-wrapper" data-name="mobile">
          <input type="radio" class="radio" name="repair" value="1" checked/>
          <div class="title-lite">
            Без ремонта
            <span class="note"> В квартире необходимо сделать ремонт. </span>
          </div>
        </label>
        <label class="radio-wrapper" data-name="mobile">
          <input type="radio" class="radio" name="repair" value="2"  />
          <div class="title-lite">
            Выполнен косметический ремонт
            <span class="note"> Недорогой ремонт, призванный освежить обстановку. Как правило, в такой отделке используются недорогие и низкокачественные компоненты – дешевые обои и линолеум, беленый потолок, недорогая сантехника и окна (зачастую деревянные). Обычно за такой ремонт не требуют много денег, а низкое качество элементов позволяет в дальнейшем быстро и легко их заменить.</span>
          </div>
        </label>
        <label class="radio-wrapper" data-name="mobile">
          <input type="radio" class="radio" name="repair" value="3"  />
          <div class="title-lite">
            Выполнен евро-ремонт
            <span class="note">Такой ремонт подразумевает под собой замену сантехники, дверей, окон и инженерной «начинки» квартиры на более современные. Как правило, при евроремонте выравнивают пол, потолок и стены, а затем используют в отделке высококачественные материалы – дорогой ламинат, хорошие обои, натяжной потолок.</span>
          </div>
        </label>
        <label class="radio-wrapper" data-name="mobile">
          <input type="radio" class="radio" name="repair" value="4" />
          <div class="title-lite">
            Выполнен дизайнерский ремонт
            <span class="note">Наиболее дорогой вид отделки жилья с привлечением высококвалифицированного специалиста. Фактический, это евроремонт, выдержанный в определенном стиле, с использованием нестандартных элементов планировки (раздвижные перегородки, сауна вместо санузла, второй уровень в квартире с высокими потолками, натуральные материалы) или же элементов декора (мебель, предметы искусства, светильники, аксессуары). Зачастую при дизайнерском ремонте внедряют элементы системы «умный дом» - датчики, систему контроля входной двери и т.д.</span>
          </div>
        </label>
      </div>
      <!-- // Отделка -->

      <!-- Высота потолков -->
      <div class="calc-section">
        <label class="checkbox-wrapper title-bold section-title .section-title--vertical-center">
          <span class="title__inline">Высота потолка:</span>
          <input type="number" min="2.3" max="4" value="2.5" step="0.1" id="ceiling-input" class="title__inline input-short" />
          <span class="title__inline">м²</span>
        </label>
        <input type="range" id="ceiling-range" class="ceiling-input" min="2.3" max="4" value="2.5" step="0.1" />
      </div>
      <!-- // Высота потолков -->

      <!-- Метро -->
      <div class="calc-section">
        <h4 class="checkbox-wrapper title-bold section-title">Метро в пешей доступности</h4>
        <label class="radio-wrapper" data-name="mobile">
          <input type="radio" class="radio" name="underground" value="0" checked/>
          <div class="title-lite">Нет</div>
        </label>
        <label class="radio-wrapper" data-name="mobile">
          <input type="radio" class="radio" name="underground" value="1"  />
          <div class="title-lite">
            Есть
            <span class="note">До 15 минут пешком</span>
          </div>
        </label>
      </div>
      <!-- // Метро -->

      <!-- Мобильная адаптивность -->
      <div class="calc-section">
        <label class="checkbox-wrapper title-bold section-title"> Санузел </label>
        <label class="radio-wrapper">
          <input type="radio" class="radio" name="bath" value="1" checked/>
          <div class="title-lite">Один совмещенный</div>
        </label>
        <label class="radio-wrapper">
          <input type="radio" class="radio" name="bath" value="2"  />
          <div class="title-lite">
            Один раздельный
          </div>
        </label>
        <label class="radio-wrapper">
          <input type="radio" class="radio" name="bath" value="3"  />
          <div class="title-lite">
            Два совмещенных
          </div>
        </label>
        <label class="radio-wrapper">
          <input type="radio" class="radio" name="bath" value="4"  />
          <div class="title-lite">
            Один совмещенный и один раздельный
          </div>
        </label>
        <label class="radio-wrapper">
          <input type="radio" class="radio" name="bath" value="5"  />
          <div class="title-lite">
            Два раздельных
          </div>
        </label>
        <label class="radio-wrapper">
          <input type="radio" class="radio" name="bath" value="6"  />
          <div class="title-lite">
            Один совмещенный и два раздельных
          </div>
        </label>
        <label class="radio-wrapper">
          <input type="radio" class="radio" name="bath" value="7"  />
          <div class="title-lite">
            Три раздельных
          </div>
        </label>
      </div>
      <!-- // Мобильная адаптивность -->

      <!-- Метро -->
      <div class="calc-section">
        <h4 class="checkbox-wrapper title-bold section-title">Наличие парковки</h4>
        <label class="radio-wrapper" data-name="mobile">
          <input type="radio" class="radio" name="parking" value="0"  />
          <div class="title-lite">
            Нет парковки
            <span class="note">До 15 минут пешком</span>
          </div>
        </label>
        <label class="radio-wrapper" data-name="mobile">
          <input type="radio" class="radio" name="parking" value="1"  />
          <div class="title-lite">
            Есть гостевая, открытая парковка
            <span class="note">До 15 минут пешком</span>
          </div>
        </label>
        <label class="radio-wrapper" data-name="mobile">
          <input type="radio" class="radio" name="parking" value="2"  />
          <div class="title-lite">
            Есть многоуровневая парковка
            <span class="note">До 15 минут пешком</span>
          </div>
        </label>
        <label class="radio-wrapper" data-name="mobile">
          <input type="radio" class="radio" name="parking" value="3"  />
          <div class="title-lite">
            Есть подземная парковка
            <span class="note">До 15 минут пешком</span>
          </div>
        </label>
      </div>
      <!-- // Метро -->

      <!-- Дополнительные опции -->
      <div class="calc-section">
        <label class="checkbox-wrapper title-bold section-title"> Дополнительные характеристики </label>
        <label class="radio-wrapper">
          <input type="checkbox" class="radio" name="quality" value="1677599.876" />
          <div class="title-lite">
            Дом выполнен из качественных и дорогих материалов
            <span class="note">900 руб. за м.кв.</span>
          </div>
        </label>
        <label class="radio-wrapper">
          <input type="checkbox" class="radio" name="view" value="544832.233" />
          <div class="title-lite">
            Красивый вид из окна
            <span class="note">Вид на достопримечательность, Казанский Кремль, реку, озеро и т.д.</span>
          </div>
        </label>
        <label class="radio-wrapper">
          <input type="checkbox" class="radio" name="park" value="1645273.001" />
          <div class="title-lite">
            Наличие рядом общественного парка
            <span class="note">+10% к стоимости</span>
          </div>
        </label>
        <label class="radio-wrapper">
          <input type="checkbox" class="radio" name="security" value="3845513.811" />
          <div class="title-lite">
            Терраса
            <span class="note">+10% к стоимости</span>
          </div>
        </label>
        <label class="radio-wrapper">
          <input type="checkbox" class="radio" name="courtyard" value="556789.639" />
          <div class="title-lite">
            Огражденная территория, закрытый двор
            <span class="note">Реализация пропуксной системы только для жителей дома, двор без машин</span>
          </div>
        </label>
        <label class="radio-wrapper">
          <input type="checkbox" class="radio" name="concierge" value="4842755.617" />
          <div class="title-lite">
            Консьерж
            <span class="note">Наличие консьержа</span>
          </div>
        </label>
        <label class="radio-wrapper">
          <input type="checkbox" class="radio" name="transport" value="825319.684" />
          <div class="title-lite">
            Хорошая инфраструктура
            <span class="note">Наличие рядом метро, автобусных остановок</span>
          </div>
        </label>
      </div>
      <!-- // Дополнительные опции -->


      <!-- Стоимость квартиры -->
      <div class="calc-price">
        <div class="calc-price-title">Стоимость квартиры:</div>
        <div class="calc-price-value">
          <span id="total-price">0</span>
          рублей
        </div>
      </div>
      <!-- // Стоимость квартиры -->
    </form>
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

<script src="js/resale.js"></script>

</body>
</html>
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
        <label class="checkbox-wrapper title-bold section-title"> Новостройка сдана? (Построена?) </label>
        <label class="radio-wrapper">
          <input type="radio" class="radio" name="building" value="1" checked />
          <div class="title-lite">Сдана</div>
        </label>
        <label class="radio-wrapper">
          <input type="radio" class="radio" name="building" value="0" />
          <div class="title-lite">
            Не сдана
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
        <label class="checkbox-wrapper title-bold section-title"> Наличие балкона (лоджии) </label>
        <label class="radio-wrapper">
          <input type="radio" class="radio" name="balcony" value="0" checked/>
          <div class="title-lite">Нет</div>
        </label>
        <label class="radio-wrapper">
          <input type="radio" class="radio" name="balcony" value="1"  />
          <div class="title-lite">
            Есть балкон
          </div>
        </label>
        <label class="radio-wrapper">
          <input type="radio" class="radio" name="balcony" value="2"  />
          <div class="title-lite">
            Есть лоджия
          </div>
        </label>
        <label class="radio-wrapper">
          <input type="radio" class="radio" name="balcony" value="3"  />
          <div class="title-lite">
            Есть балкон и лоджия
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

      <!-- Класс ЖК -->
      <div class="calc-section">
        <h4 class="checkbox-wrapper title-bold section-title">Класс ЖК</h4>
        <label class="radio-wrapper" data-name="mobile">
          <input type="radio" class="radio" name="repair" value="1" checked/>
          <div class="title-lite">
            Эконом
            <span class="note">Жилые комплексы класса «эконом» — это типовые многоквартирные дома высотой 5-12 этажей. Это панельные, реже — кирпичные здания в составе жилых комплексов, не оборудованных подземной парковкой. На придомовой территории обычно имеется наземная стоянка для автомобилей. В доме эконом-класса может быть 100 и более квартир.Планировки в таких квартирах стандартные — изолированные комнаты, один совмещенный или раздельный санузел. Не всегда в таких квартирах можно сделать перепланировку. Высота потолков — 2,5 – 2,7 метра. Обычно в таких домах продаются 1-, 2-, 3-комнатные квартиры, реже — 4-комнатные. Их площадь составляет от 30 до 90 кв. метров.В таких ЖК практически не бывает видовых квартир. Благоустройство придомовой территории минимальное — в небольшом дворе размещают детскую площадку, проводят озеленение территории. Недалеко от дома обычно есть объекты социальной инфраструктуры.</span>
          </div>
        </label>
        <label class="radio-wrapper" data-name="mobile">
          <input type="radio" class="radio" name="repair" value="2"  />
          <div class="title-lite">
            Комфорт
            <span class="note">Жилье класса «комфорт» отличается от «эконома» по площади и еще ряду характеристик. В этом сегменте строят не только панельные и кирпичные, но и монолитно-каркасные дома. Парковка обязательна, причем  на три квартиры должно быть хотя бы одно машиноместо. В домах класса «комфорт» квартиры тоже типовые, но здесь можно сделать перепланировку. Высота потолков — от 2,7 метра. Площадь квартир — от 38 кв. метров до 150 кв. метров. Число комнат — от одной до четырех.</span>
          </div>
        </label>
        <label class="radio-wrapper" data-name="mobile">
          <input type="radio" class="radio" name="repair" value="3"  />
          <div class="title-lite">
            Бизнес
            <span class="note">ЖК бизнес-класса расположены обычно или ближе к центру, там, где хорошо развита инфраструктура, или в районах с хорошей экологией. Кирпичные или монолитно-каркасные дома строятся по индивидуальным проектам. В них обычно не более 120 квартир. Часто в ЖК бизнес-класса предлагают квартиры с хорошими видовыми характеристиками.Сделать перепланировку просто — внутренние перегородки отсутствуют, либо их легко можно демонтировать. В квартирах большие кухни, балконы, лоджии, несколько санузлов. Высота потолков —  от 2,8 метра. Площадь — от 44 до 240 «квадратов». В ЖК бизнес-класса имеется собственная инфраструктура. Территория благоустроена, огорожена и охраняется. На каждого жильца предусмотрено машиноместо.</span>
          </div>
        </label>
        <label class="radio-wrapper" data-name="mobile">
          <input type="radio" class="radio" name="repair" value="4" />
          <div class="title-lite">
            Премиум
            <span class="note">Элитные жилые комплексы имеют отличное расположение — рядом с центром, в исторических или экологичных районах. Это кирпичные дома, в которых не более 50 квартир. Большая придомовая территория благоустроена, огорожена и охраняется.Элитные ЖК возводятся по эксклюзивному проекту. При строительстве применяются самые современные технологии. Квартиры продаются с готовой дорогой отделкой. Число этажей не ограничено. Высота потолков — не ниже 3 метров. Жилье имеет отличные видовые характеристики. Применяется панорамное остекление.</span>
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
          <input type="radio" class="radio" name="parking" value="3.01841"  />
          <div class="title-lite">
            Нет парковки
            <span class="note">До 15 минут пешком</span>
          </div>
        </label>
        <label class="radio-wrapper" data-name="mobile">
          <input type="radio" class="radio" name="parking" value="2.96241"  />
          <div class="title-lite">
            Есть гостевая, открытая парковка
            <span class="note">До 15 минут пешком</span>
          </div>
        </label>
        <label class="radio-wrapper" data-name="mobile">
          <input type="radio" class="radio" name="parking" value="1.33939"  />
          <div class="title-lite">
            Есть многоуровневая парковка
            <span class="note">До 15 минут пешком</span>
          </div>
        </label>
        <label class="radio-wrapper" data-name="mobile">
          <input type="radio" class="radio" name="parking" value="1"  />
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
                          <input type="checkbox" class="radio" name="security" value="656230.133" />
                          <div class="title-lite">
                            Видеонаблюдение на территории
                            <span class="note">+10% к стоимости</span>
                          </div>
                        </label>
                        <label class="radio-wrapper">
                          <input type="checkbox" class="radio" name="courtyard" value="655777.033" />
                          <div class="title-lite">
                            Огражденная территория, закрытый двор
                            <span class="note">Реализация пропуксной системы только для жителей дома, двор без машин</span>
                          </div>
                        </label>
                        <label class="radio-wrapper">
                          <input type="checkbox" class="radio" name="concierge" value="726464.243" />
                          <div class="title-lite">
                            Консьерж
                            <span class="note">Наличие консьержа</span>
                          </div>
                        </label>
                        <label class="radio-wrapper">
                          <input type="checkbox" class="radio" name="transport" value="1873908.118" />
                          <div class="title-lite">
                            Транспортная доступность
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

<script src="js/main.js"></script>

</body>
</html>
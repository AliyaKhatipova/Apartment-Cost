const btnDarkMode = document.querySelector(".dark-mode-btn");

// 1. Проверка темной темы на уровне системных настроек
if (window.matchMedia && window.matchMedia("(prefers-color-scheme: dark)").matches ) {
    btnDarkMode.classList.add("dark-mode-btn--active");
    document.body.classList.add("dark");
}

// 2. Проверка темной темы в localStorage
if (localStorage.getItem('darkMode') === 'dark') {
    btnDarkMode.classList.add("dark-mode-btn--active");
    document.body.classList.add("dark");
} else if (localStorage.getItem("darkMode") === "light") {
    btnDarkMode.classList.remove("dark-mode-btn--active");
    document.body.classList.remove("dark");
}

// Если меняются системные настройки, меняем тему
window
    .matchMedia("(prefers-color-scheme: dark)")
    .addEventListener("change", (event) => {
        const newColorScheme = event.matches ? "dark" : "light";

        if (newColorScheme === "dark") {
            btnDarkMode.classList.add("dark-mode-btn--active");
            document.body.classList.add("dark");
            localStorage.setItem("darkMode", "dark");
        } else {
            btnDarkMode.classList.remove("dark-mode-btn--active");
            document.body.classList.remove("dark");
            localStorage.setItem("darkMode", "light");
        }
    });

// Включение ночного режима по кнопке
btnDarkMode.onclick = function () {
    btnDarkMode.classList.toggle("dark-mode-btn--active");
    const isDark = document.body.classList.toggle("dark");

    if (isDark) {
        localStorage.setItem("darkMode", "dark");
    } else {
        localStorage.setItem("darkMode", "light");
    }
};
// Элементы формы
const squareInput = document.querySelector('#square-input');    //окно для площади квартиры, м2.
const squareRange = document.querySelector('#square-range');    //ползунок
const ceilingInput = document.querySelector('#ceiling-input');    //окно для площади квартиры, м2.
const ceilingRange = document.querySelector('#ceiling-range');
const inputs = document.querySelectorAll('input');              //все инпуты на странице

// Радиокнопки
const radioDistrict = document.querySelectorAll('input[name="district"]');     //кнопки район
const radioBuilding = document.querySelectorAll('input[name="building"]');  //кнопки тип дома
const radioRooms = document.querySelectorAll('input[name="rooms"]');    //кнопки кол-во комнат
const radioMaterial = document.querySelectorAll('input[name="material"]');
const radioFloors = document.querySelectorAll('input[name="floors"]');
const radioBalcony = document.querySelectorAll('input[name="balcony"]');
const radioPanoramic = document.querySelectorAll('input[name="panoramic"]');
const radioRepair = document.querySelectorAll('input[name="repair"]');
const radioUnderground = document.querySelectorAll('input[name="underground"]');
const radioParking = document.querySelectorAll('input[name="parking"]');
const radioBath = document.querySelectorAll('input[name="bath"]');
const radioTime = document.querySelectorAll('input[name="time"]');

// Чекбоксы
const quality = document.querySelector('input[name="quality"]');
const view = document.querySelector('input[name="view"]');
const park = document.querySelector('input[name="park"]');
const security = document.querySelector('input[name="security"]');
const courtyard = document.querySelector('input[name="courtyard"]');
const concierge = document.querySelector('input[name="concierge"]');
const transport = document.querySelector('input[name="transport"]');

const basePrice = -5394000.008;        // первый коэффициент
const totalPriceElement = document.querySelector('#total-price'); //общая цена внизу

// Связка range c тектовым полем
// Слушаем событие input
squareRange.addEventListener('input', function () {
    squareInput.value = squareRange.value
});

// Связка текстового поля с range
squareInput.addEventListener('input', function () {
    squareRange.value = squareInput.value;
});

// Связка range c тектовым полем
// Слушаем событие input
ceilingRange.addEventListener('input', function () {
    ceilingInput.value = ceilingRange.value
});

// Связка текстового поля с range
ceilingInput.addEventListener('input', function () {
    ceilingRange.value = ceilingInput.value;
});

function calculate() {                        //totalprice- общая цена
    let totalPrice = basePrice + parseFloat(squareInput.value)*126669.747+parseFloat(ceilingInput.value)*171982.507; // площадь и высота потолка         6000*площадь квартиры. взяли за 50

    for (const radio of radioDistrict) {     //район, в зависимости от выбора варианта считает.
        if (radio.checked) {
            totalPrice = totalPrice + parseFloat(radio.value)*261498.091;
        }
    }

    for (const radio of radioBuilding) { //Вид из окна
        if (radio.checked) {
            totalPrice = totalPrice + parseFloat(radio.value)*487418.615;
        }
    }

    for (const radio of radioRooms) { //кол-во комнат
        if (radio.checked) {
            totalPrice = totalPrice + parseFloat(radio.value)*(-468004.617); // 390 000 * 0.8 = 350 000
        }
    }

    for (const radio of radioMaterial) { //тип дома
        if (radio.checked) {
            totalPrice = totalPrice + parseFloat(radio.value)*137139.639; // 360 000 * 1.1 = 390 000
        }
    }

    for (const radio of radioFloors) { //ЭтажОценка
        if (radio.checked) {
            totalPrice = totalPrice + parseFloat(radio.value)*333316.195; // 390 000 * 0.8 = 350 000
        }
    }

    for (const radio of radioBalcony) { //балкон
        if (radio.checked) {
            totalPrice = totalPrice + parseFloat(radio.value)*-316128.207;
        }
    }

    for (const radio of radioPanoramic) { //панорамное остекление
        if (radio.checked) {
            totalPrice = totalPrice + parseFloat(radio.value)*1665813.862; // 360 000 * 1.1 = 390 000
        }
    }

    for (const radio of radioRepair) { //Ремонт
        if (radio.checked) {
            totalPrice = totalPrice + parseFloat(radio.value)*1115739.281; // 390 000 * 0.8 = 350 000
        }
    }

    for (const radio of radioUnderground) { //метро
        if (radio.checked) {
            totalPrice = totalPrice + parseFloat(radio.value)*790402.259; // 390 000 * 0.8 = 350 000
        }
    }

    for (const radio of radioBath) { //санузел
        if (radio.checked) {
            totalPrice = totalPrice + parseFloat(radio.value)*522263.484; // 360 000 * 1.1 = 390 000
        }
    }

    for (const radio of radioParking) { //парковка
        if (radio.checked) {
            totalPrice = totalPrice + parseFloat(radio.value)*599076.729;
        }
    }
    for (const radio of radioTime) { //санузел
        if (radio.checked) {
            totalPrice = totalPrice + parseFloat(radio.value);
        }
    }


    if (quality.checked) {       //чекбоксы,опции
        totalPrice = totalPrice + parseFloat(quality.value); //качество
    }

    if (view.checked) { //вид
        totalPrice = totalPrice + parseFloat(view.value);
    }

    if (park.checked) { //парк
        totalPrice = totalPrice + parseFloat(park.value);
    }

    if (security.checked) {  //охрана
        totalPrice = totalPrice + parseFloat(security.value);
    }

    if (courtyard.checked) { //двор
        totalPrice = totalPrice + parseFloat(courtyard.value);
    }

    if (concierge.checked) { //консьерж
        totalPrice = totalPrice + parseFloat(concierge.value);
    }

    if (transport.checked) { //транспортная доступность
        totalPrice = totalPrice + parseFloat(transport.value);
    }

    const formatter = new Intl.NumberFormat('ru');
    totalPriceElement.innerText = formatter.format(totalPrice);      // подсчет общей цены внизу
}

calculate();

for (const input of inputs) {
    input.addEventListener('input', function () {
        calculate();
    });
}

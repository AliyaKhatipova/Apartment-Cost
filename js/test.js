const btnDarkMode = document.querySelector(".dark-mode-btn");

const signInBtn = document.querySelector('.signin-btn');
const signUpBtn = document.querySelector('.signup-btn');
const formBox = document.querySelector('.form-box');
const body = document.body;

signUpBtn.addEventListener('click', function (){
    formBox.classList.add('active');
    body.classList.add('active');
});

signInBtn.addEventListener('click', function (){
    formBox.classList.remove('active');
    body.classList.remove('active');
});
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
const radioRepair = document.querySelectorAll('input[name="repair"]');
const radioUnderground = document.querySelectorAll('input[name="underground"]');
const radioBath = document.querySelectorAll('input[name="bath"]');

// Чекбоксы
const ceilings = document.querySelector('input[name="ceiling"]');
const walls = document.querySelector('input[name="walls"]');
const floor = document.querySelector('input[name="floor"]');

const basePrice = -18493625.266;        // первый коэффициент
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
    let totalPrice = basePrice + parseFloat(squareInput.value)*240101.885+parseFloat(ceilingInput.value)*3074263.606; // 300 000          6000*площадь квартиры. взяли за 50

    for (const radio of radioDistrict) {     //в зависимости от выбора варианта считает.
        if (radio.checked) {
            totalPrice = totalPrice + parseFloat(radio.value)*474573.695; // 300 000 * 1.2
        }
    }

    for (const radio of radioBuilding) {
        if (radio.checked) {
            totalPrice = totalPrice + parseFloat(radio.value)*1805586.050; // 360 000 * 1.1 = 390 000
        }
    }

    for (const radio of radioRooms) {
        if (radio.checked) {
            totalPrice = totalPrice + parseFloat(radio.value)*(-2051693.531); // 390 000 * 0.8 = 350 000
        }
    }

    for (const radio of radioMaterial) {
        if (radio.checked) {
            totalPrice = totalPrice + parseFloat(radio.value)*144353.357; // 360 000 * 1.1 = 390 000
        }
    }

    for (const radio of radioFloors) {
        if (radio.checked) {
            totalPrice = totalPrice + parseFloat(radio.value)*166307.423; // 390 000 * 0.8 = 350 000
        }
    }

    for (const radio of radioBalcony) {
        if (radio.checked) {
            totalPrice = totalPrice + parseFloat(radio.value)*-910283.535; // 360 000 * 1.1 = 390 000
        }
    }

    for (const radio of radioRepair) {
        if (radio.checked) {
            totalPrice = totalPrice + parseFloat(radio.value)*843802.871; // 390 000 * 0.8 = 350 000
        }
    }

    for (const radio of radioUnderground) {
        if (radio.checked) {
            totalPrice = totalPrice + parseFloat(radio.value)*966422.531; // 390 000 * 0.8 = 350 000
        }
    }

    for (const radio of radioBath) {
        if (radio.checked) {
            totalPrice = totalPrice + parseFloat(radio.value)*236918.145; // 360 000 * 1.1 = 390 000
        }
    }

    //  if (ceilings.checked) {       //чекбоксы,опции
    //      totalPrice = totalPrice + parseFloat(ceilings.value) * parseInt(squareInput.value);
    //  }

    //  if (walls.checked) {
    //     totalPrice = totalPrice * parseFloat(walls.value); // ---
    // }

    // if (floor.checked) {
    //     totalPrice = totalPrice * parseFloat(floor.value); // ---
    // }

    const formatter = new Intl.NumberFormat('ru');
    totalPriceElement.innerText = formatter.format(totalPrice);      // подсчет общей цены внизу
}

calculate();

for (const input of inputs) {
    input.addEventListener('input', function () {
        calculate();
    });
}


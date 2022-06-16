//Ищем кнопку вперед, у нас это кнопка "Вправо"
let Right = document.querySelector(".Right");
//Берем слайды
let varslides = document.querySelectorAll("img");
//Объявляем базовую переменную для условия
let i = 1;
//Создаем функцию, которая считывает нажатие клавиши
Right.addEventListener("click", function () {
    //увеличиваем переменную, перещелкивая фотографии
    ++i;
    //если фотографий больше нет
    if (i <= 3) {
        //удаляем класс block у предыдущего слайда
        varslides[i-1].classList.remove("block");
        //даем "флажок" - передаем класс блок новому изображению
        varslides[i].classList.add("block");
    } else {
        i=1;
        varslides[3].classList.remove("block");
        varslides[i].classList.add("block");
    }
})
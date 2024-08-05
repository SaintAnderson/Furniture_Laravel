import Element from "./element.js";

class Color extends Element {
    #classActive = 'active';
    #classes = ['color'];


    onClick(e) {                            //При нажатии будут использоваться следующие методы
        this.toggle(e);
        this.onClicked(e);
    }

    toggle(e) { //Переключаем active
        e.classList.toggle(this.#classActive);
    }

    createElement(data) {                   //Создается кружок с цветом
        let colorButton = document.createElement('input');
        colorButton.setAttribute('type', 'button')
        colorButton.classList = this.#classes;
        colorButton.textContent = data.name;
        colorButton.style.backgroundColor = data.code;

        this.bind(colorButton);

        return colorButton;
    }

    isActive(e) {   //Проверка на наличие active в элементе
        return e.classList.contains(this.#classActive);
    }
}

export default Color;

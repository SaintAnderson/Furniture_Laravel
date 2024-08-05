import Color from "./color.js";

class Color2 extends Color {
    getId(id) {             // Получаем элмент по id
        let response = false;

        let data = this.getMainElement().children;

        for (let i = 0; i < data.length; i++) {
            if (data[i].dataset.id == id) {
                response = data[i];
                break;
            }
        }

        return response;
    }

    adding(element, data) {     //Вызываем метод до добавления элемента на страницу
        element.setAttribute('data-id', data.id);
        element.setAttribute('data-name', data.name);
        return true;
    }
}

export default Color2;

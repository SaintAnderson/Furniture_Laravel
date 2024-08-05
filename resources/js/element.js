class Element {
    #mainElement

    constructor(element) {
        this.#mainElement = element;
    }

    getMainElement() {
        return this.#mainElement;
    }

    bind(element) {  //Биндим элемент
        element.addEventListener('click', (e) => this.onClick(e.target));
    }

    add(data) {      //Добавляем элемент на страницу
        let mainElement = this.getMainElement();
        let element = this.createElement(data);

        let response = this.adding(element, data);
        if (response) {
            mainElement.append(element);
        }
    }

    adding(element, data) {
        return true;
    }

    onClick(el) {
        this.onClicked(el);
    }
    onClicked() {}
    createElement() {}
}

export default Element;

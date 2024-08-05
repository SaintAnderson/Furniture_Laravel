import Tag from './tag.js';

class Tag2 extends Tag {
    #idName;
    constructor (data, idName) {
        super(data);
        this.#idName = idName;
    }

    getIdName() {
        return this.#idName;
    }

    getId(id) { //Получаем элемент по id
        let response = false;

        let data = this.getMainElement().children;

        for (let i = 0; i < data.length; i++) {
            if (data[i].dataset[this.#idName] == id) {
                response = data[i];
                break;
            }
        }

        return response;
    }

    removeId(id) {
        let tag = this.getId(id);
        if (tag) {
            tag.remove();
        }
    }

    adding(element, data) {
        element.setAttribute('data-' + this.#idName, data.id);
        return true;
    }
}

export default Tag2;

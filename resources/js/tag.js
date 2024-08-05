import Element from "./element.js";

class Tag extends Element {
    createElement(data) { //Создается тэг цвета и брэнда
        let tag = document.createElement('div');
        tag.classList.add('tag');
        tag.textContent = data.name;

        this.bind(tag);

        return tag;
    }

    onClick(e) {
        e.remove();
        this.onClicked(e);
    }
}

export default Tag;

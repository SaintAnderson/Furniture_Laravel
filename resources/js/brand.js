import Element from "./element.js";
class Brand extends Element {
    getId(id) {
        let response = false;

        let data = this.getMainElement().querySelector('[data-id="' + id + '"]');

        return data;
    }

    createElement(data) {  //Создаем и возвращаем элмент (brand)
        let div = document.createElement('div');
        div.classList.add('brand');
        div.innerHTML = `
            <p>${data.letter}</p>
        `;
        data.forEach(input => { //Проходимся по массиву брэндов

            let checkbox = document.createElement('div');
            checkbox.classList.add('checkbox');

            let box = document.createElement('input');
            box.type = 'checkbox';
            box.setAttribute('data-id', input.id);
            box.setAttribute('data-name', input.name);

            this.bind(box); //При нажатии срабатывает onclick

            checkbox.append(box);

            let p = document.createElement('p');
            p.textContent = input.name;

            checkbox.append(p);

            div.append(checkbox);
        });
        return div;
    }

    toggle(el) {
        el.checked = !el.checked;
    }
}

export default Brand;

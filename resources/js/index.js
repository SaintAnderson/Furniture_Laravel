import Color from "./color2.js";//подгружаем файл в котором
import Tag from "./tag2.js";
import './bootstrap.js';
import Shop from "./shop.js";
import Brand from "./brand.js";

class Ids { //id брэнда и цвета отправляются на сервер
    #ids = [];
    toggle(id) {
        let index = this.#ids.indexOf(id);
        if (index == -1) {
            this.#ids.push(id);
        } else {
            this.#ids.splice(index, 1);
        };
        this.toggled(id, index);
        generateProduct();
    }

    toggled(id, index) {}

    get() {
        return this.#ids;
    }
}

let color = new Color(document.getElementById('colors')); //Получаем объект класса  Color
let tagColor = new Tag(document.getElementById('tags'), 'colorid');
let tagBrand = new Tag(document.getElementById('tags'), 'brandid');
let product = new Shop(document.getElementById('products'));
let brand = new Brand(document.getElementById('brands'));
let colorIds = new Ids();
let brandIds = new Ids();

async function getProducts() { //Получаем продукты по route  по get запросу
    let products = (await window.axios.get('/api/products', {
        params: {
            color: colorIds.get(),
            brand: brandIds.get(),
        }
    })).data;
    
    return products;
}

async function generateProduct() { //Генерируем продукты на страницу из функции getProducts
    product.removeAll();
    let products = await getProducts();
    let countProduct = document.getElementById('countProduct');
    countProduct.textContent = products.length;
    products.forEach(productData => {
        product.add(productData);
    });
}

generateProduct();

color.onClicked = e => { //Описание метода класса color
    if (color.isActive(e)) {
        tagColor.add({ id: e.dataset.id, name: e.dataset.name });
    } else {
        tagColor.removeId(e.dataset.id);
    }
    colorIds.toggle(e.dataset.id);
};

tagColor.onClicked = e => { //Описание метода класса при нажатии
    let colorElement = color.getId(e.dataset[tagColor.getIdName()]);
    color.toggle(colorElement);
    colorIds.toggle(e.dataset[tagColor.getIdName()]);
}

brand.onClicked = e => { //Описание метода класса при нажатии
    if (e.checked) {
        tagBrand.add({ id: e.dataset.id, name: e.dataset.name });
    } else {
        tagBrand.removeId(e.dataset.id);
    }
    brandIds.toggle(e.dataset.id);
}

tagBrand.onClicked = e => { //Описание метода класса при нажатии
    let brandElement = brand.getId(e.dataset[tagBrand.getIdName()]);
    brand.toggle(brandElement);
    brandIds.toggle(e.dataset[tagBrand.getIdName()]);
}

(async () => {
    let colors = (await window.axios.get('/api/colors')).data;

    colors.forEach(c => {
        color.add(c);
    });

    let brands = (await window.axios.get('/api/brands')).data;
    let brandLetters = Object.keys(brands);
    brandLetters.forEach(letter => {
        let brandLetter = brands[letter];
        brandLetter.letter = letter;
        brand.add(brandLetter);
    });
})()

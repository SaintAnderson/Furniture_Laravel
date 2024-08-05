import Element from "./element.js";

class Shop extends Element {
    createElement(data) { //Создается элменет карточки товара
        let product = document.createElement('a');
        product.href = '#';
        product.classList.add('product');
        let like = new URL('../images/like.svg', import.meta.url).href;
        
        product.innerHTML = `
        <div class="top">
                <div class="tag">скоро</div>
                <img src="${like}" alt="like">
            </div>
            <div class="image">
                <img src="${data.image_src}" alt="">
            </div>
            <div class="tags">
                <p class="name">${data.brand}</p>
                <p class="brand">${data.title}</p>
            </div>
            <div class="description">
                <p class="text">${data.category}</p>
                <p class="price">${data.price} ₽</p>
            </div>
            <div class="colors">
                <div class="color" style="background-color: ${data.color}"></div>
            </div>
        </div>`;

        return product;
    }
    removeAll() {
        let main = this.getMainElement();
        main.replaceChildren();
    }
}

export default Shop;



<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/index.css')
    <title>Document</title>
</head>
<body>
<header class="header section">
    <div class="columns">
        <a class="link text-top" href="#">Каталог</a>
        <a class="link text-top" href="#">Дизайнеры</a>
        <a class="link text-top" href="#">Бренды</a>
    </div>
    <div class="title">
        <h1>promebel</h1>
    </div>
    <div class="columns">
        <a class="link text-bottom" href="tel:+79990001122">+7 (999) 000 1122</a>
        <a class="link text-bottom" href="mailto:info@promebel.ru">info@promebel.ru</a>
        <a class="link text-bottom basket" href="#"></a>
    </div>
</header>
<section class="section">
    <div class="all-product">
        <h2 class="name">Все товары</h2>
        <div class="description">(<p class="yellow" id="countProduct">0</p> товаров)</div>
    </div>
    <div class="tags" id="tags"></div>
    <div class="catalog">
        <div class="filter">
            <div class="filterTop">
                <h3 class="name">Цвет</h3>
                <div class="colors" id="colors"></div>
            </div>
            <div class="filterTop">
                <h3 class="name">Бренд</h3>
                <div class="brands" id="brands"></div>
            </div>
        </div>

        <div class="products" id="products"></div>
    </div>
</section>
@vite('resources/js/index.js')
</body>

</html>

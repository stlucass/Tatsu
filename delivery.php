<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/style3.css" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
    <link rel="icon" href="assets/images/dragaoicone.png" type="image/x-icon">
    <title>Delivery Tatsu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .btnvoltar {
            margin: 20px;
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .block {
            position: relative;
            height: 300px;
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
        }

        .maincontent {
            padding: 20px;
        }

        .item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 8px;
            transition: transform 0.2s;
        }

        .item:hover {
            transform: scale(1.02);
        }

        .product-img {
            max-width: 100px;
            margin-right: 20px;
        }

        .details {
            flex-grow: 1;
        }

        .item__title {
            font-size: 1.5em;
            margin: 0;
        }

        .item__price {
            color: #28a745;
            font-weight: bold;
        }

        .btn {
            padding: 8px 12px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .buttons-container {
            margin-bottom: 20px;
        }

        .button {
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-right: 10px;
        }

        .menu {
            display: none;
        }

        .menu.active {
            display: block;
        }
    </style>
</head>

<body>
    <a href="index.php" class="btnvoltar">Voltar</a>

    <div class="block" style="background-image:url(assets/images/restaurante.jpeg);">
        <h1 class="display-2 text-white" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="0">TATSU SUSHI BAR</h1>
        <a href="#menu" class="btn-text">Veja o menu do dia!</a>
    </div>

    <div class="maincontent">
        <section id="menu">
            <div class="buttons-container">
                <a href="#comidaMenu" class="button" onclick="showMenu('comidaMenu')">Pratos</a>
                <a href="#bebidaMenu" class="button" onclick="showMenu('bebidaMenu')">Drinks</a>
                <a href="#docesMenu" class="button" onclick="showMenu('docesMenu')">Doces</a>
            </div>

            <!-- INICIO MENU COMIDA -->
            <div class="menu active" id="comidaMenu">
                <div class="item">
                    <img class="product-img" src="assets/images/sushi-1.png" alt="Sushi de Salmão">
                    <div class="details">
                        <h3 class="item__title">Sushi de Salmão</h3>
                        <span class="item__price">R$ 35</span>
                        <p>Fatias frescas de salmão sobre bolinhos de arroz temperado com vinagre.</p>
                        <button class="btn">Adicionar</button>
                    </div>
                </div>
                <div class="item">
                    <img class="product-img" src="assets/images/sushi-2.png" alt="Ramen de Porco">
                    <div class="details">
                        <h3 class="item__title">Ramen de Porco</h3>
                        <span class="item__price">R$ 45</span>
                        <p>Sopa de macarrão servida em caldo rico de porco, com vegetais frescos.</p>
                        <button class="btn">Adicionar</button>
                    </div>
                </div>
                <div class="item">
                    <img class="product-img" src="assets/images/sushi-3.png" alt="Tempurá de Camarão">
                    <div class="details">
                        <h3 class="item__title">Tempurá de Camarão</h3>
                        <span class="item__price">R$ 40</span>
                        <p>Camarões empanados em uma massa leve, servidos com molho tentsuyu.</p>
                        <button class="btn">Adicionar</button>
                    </div>
                </div>
                <div class="item">
                    <img class="product-img" src="assets/images/sushi-4.png" alt="Yakissoba de Frango">
                    <div class="details">
                        <h3 class="item__title">Yakissoba de Frango</h3>
                        <span class="item__price">R$ 30</span>
                        <p>Macarrão japonês salteado com frango e legumes frescos.</p>
                        <button class="btn">Adicionar</button>
                    </div>
                </div>
            </div>
            <!-- FIM MENU COMIDA -->

            <!-- INICIO MENU BEBIDA -->
            <div class="menu" id="bebidaMenu">
                <div class="item">
                    <img class="product-img" src="assets/images/drink-1.png" alt="Sakê Tradicional">
                    <div class="details">
                        <h3 class="item__title">Sakê Tradicional</h3>
                        <span class="item__price">R$ 25</span>
                        <p>Bebida alcoólica tradicional do Japão, feita a partir da fermentação do arroz.</p>
                        <button class="btn">Adicionar</button>
                    </div>
                </div>
                <div class="item">
                    <img class="product-img" src="assets/images/drink-2.png" alt="Chá Verde Gelado">
                    <div class="details">
                        <h3 class="item__title">Chá Verde Gelado</h3>
                        <span class="item__price">R$ 12</span>
                        <p>Refrescante chá verde japonês, servido gelado.</p>
                        <button class="btn">Adicionar</button>
                    </div>
                </div>
                <div class="item">
                    <img class="product-img" src="assets/images/drink-3.png" alt="Cerveja Japonesa">
                    <div class="details">
                        <h3 class="item__title">Cerveja Japonesa</h3>
                        <span class="item__price">R$ 20</span>
                        <p>Cerveja leve e refrescante, ideal para acompanhar pratos japoneses.</p>
                        <button class="btn">Adicionar</button>
                    </div>
                </div>
                <div class="item">
                    <img class="product-img" src="assets/images/drink-4.png" alt="Refrigerante">
                    <div class="details">
                        <h3 class="item__title">Refrigerante</h3>
                        <span class="item__price">R$ 8</span>
                        <p>Bebida carbonatada com sabor refrescante.</p>
                        <button class="btn">Adicionar</button>
                    </div>
                </div>
            </div>
            <!-- FIM MENU BEBIDA -->

            <!-- INICIO MENU DOCES -->
            <div class="menu" id="docesMenu">
                <div class="item">
                    <img class="product-img" src="assets/images/doce-1.png" alt="Mochi de Morango">
                    <div class="details">
                        <h3 class="item__title">Mochi de Morango</h3>
                        <span class="item__price">R$ 15</span>
                        <p>Mochi recheado com pasta de feijão doce e pedaços de morango fresco.</p>
                        <button class="btn">Adicionar</button>
                    </div>
                </div>
                <div class="item">
                    <img class="product-img" src="assets/images/doce-2.png" alt="Dorayaki">
                    <div class="details">
                        <h3 class="item__title">Dorayaki</h3>
                        <span class="item__price">R$ 18</span>
                        <p>Bolo recheado com pasta de feijão doce.</p>
                        <button class="btn">Adicionar</button>
                    </div>
                </div>
                <div class="item">
                    <img class="product-img" src="assets/images/doce-3.png" alt="Pudim de Matchá">
                    <div class="details">
                        <h3 class="item__title">Pudim de Matchá</h3>
                        <span class="item__price">R$ 22</span>
                        <p>Pudim cremoso de matchá, servido com calda de caramelo.</p>
                        <button class="btn">Adicionar</button>
                    </div>
                </div>
                <div class="item">
                    <img class="product-img" src="assets/images/doce-4.png" alt="Bolo de Chá Verde">
                    <div class="details">
                        <h3 class="item__title">Bolo de Chá Verde</h3>
                        <span class="item__price">R$ 20</span>
                        <p>Bolo fofo e úmido de chá verde, perfeito para acompanhar o chá.</p>
                        <button class="btn">Adicionar</button>
                    </div>
                </div>
            </div>
            <!-- FIM MENU DOCES -->
        </section>
    </div>

    <script>
        function showMenu(menuId) {
            const menus = document.querySelectorAll('.menu');
            menus.forEach(menu => {
                menu.classList.remove('active');
            });
            document.getElementById(menuId).classList.add('active');
        }
    </script>
</body>

</html>

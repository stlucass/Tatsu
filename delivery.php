<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style3.css" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
    <script src="./assets/js/jquery.min.js"></script>
    <link rel="icon" href="./img/icon.png" />
    <title>Delivery Tatsu</title>
    <link rel="icon" href="./assets/images/dragaoicone.png" type="image/x-icon">
</head>

<body>
    <!-- PHP -->
    <?php
    include('data/conexao.php');
    ?>
    <!-- FIM PHP -->

    <a href="index.php" class="btnvoltar" data-btn>Voltar</a>
    <br />
    <div class="block home1 my-auto" style="background-image:url(./assets/images/restaurante.jpeg);">
        <div class="container-fluid text-center">
            <h1 class="display-2 text-white" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="0">TATSU SUSHI
                BAR</h1>
            <br />
            <a href="#menu" class="btn-text lead d-inline-block text-white border-top border-bottom mt-4 pt-1 pb-1"
                data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1200">Veja o menu do dia!</a>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="maincontent">
        <div class="container">
            <section id="menu">
                <div class="block menu1">
                    <div class="buttons-container"> <a href="#" class="button button--is-active"
                            data-target="comidaMenu">Pratos</a>
                        <a href="#" class="button" data-target="bebidaMenu">Drinks</a> <a href="#" class="button"
                            data-target="docesMenu">Doces</a>
                    </div>
                    <!-- INICIO MENU COMIDA -->
                    <div class="menu menu--is-visible" id="comidaMenu" data-aos="fade-up">
                        <div class="item row align-items-center">
                            <div class="col-sm-3 pr-5">
                                <img class="product-img" src="./assets/images/sushi-1.png">
                            </div>
                            <div class="details col-sm-9">
                                <div class="item__header">
                                    <h3 class="item__title">Sushi de Salmão</h3>
                                    <span class="item__dots"></span>
                                    <span class="item__price">R$ 35</span>
                                </div>
                                <p class="item__description">Fatias frescas de salmão sobre bolinhos de arroz temperado
                                    com vinagre. Acompanha wasabi e molho shoyu.
                                </p>
                                <button class="btn btn-sm btn-outline-primary my-cart-btn" data-id="1"
                                    data-name="Sushi de Salmão" data-price="35" data-quantity="1"
                                    data-image="./assets/images/sushi-1.png">Adicionar</button>
                            </div>
                        </div>
                        <div class="item row align-items-center">
                            <div class="col-sm-3 pr-5">
                                <img class="product-img" src="./assets/images/sushi-2.png">
                            </div>
                            <div class="details col-sm-9">
                                <div class="item__header">
                                    <h3 class="item__title">Ramen de Porco</h3>
                                    <span class="item__dots"></span>
                                    <span class="item__price">R$ 45</span>
                                </div>
                                <p class="item__description">Sopa de macarrão servida em caldo rico de porco, com fatias
                                    de carne suína, ovo cozido, algas nori, e vegetais frescos.</p>
                                <button class="btn btn-sm btn-outline-primary my-cart-btn" data-id="2"
                                    data-name="Ramen de Porco" data-price="45" data-quantity="1"
                                    data-image="./assets/images/sushi-2.png">Adicionar</button>
                            </div>
                        </div>
                        <div class="item row align-items-center">
                            <div class="col-sm-3 pr-5">
                                <img class="product-img" src="./assets/images/sushi-3.png">
                            </div>
                            <div class="details col-sm-9">
                                <div class="item__header">
                                    <h3 class="item__title">Tempurá de Camarão</h3>
                                    <span class="item__dots"></span>
                                    <span class="item__price">R$ 40</span>
                                </div>
                                <p class="item__description">Camarões grandes empanados em uma massa leve e crocante,
                                    servidos com molho tentsuyu levemente agridoce.</p>
                                <button class="btn btn-sm btn-outline-primary my-cart-btn" data-id="3"
                                    data-name="Tempurá de Camarão" data-price="40" data-quantity="1"
                                    data-image="./assets/images/sushi-3.png">Adicionar</button>
                            </div>
                        </div>
                        <div class="item row align-items-center">
                            <div class="col-sm-3 pr-5">
                                <img class="product-img" src="./assets/images/sushi-4.png">
                            </div>
                            <div class="details col-sm-9">
                                <div class="item__header">
                                    <h3 class="item__title">Yakissoba de Frango</h3>
                                    <span class="item__dots"></span>
                                    <span class="item__price">R$ 30</span>
                                </div>
                                <p class="item__description">Macarrão japonês salteado com pedaços de frango, legumes
                                    frescos, e molho especial à base de shoyu.</p>
                                <button class="btn btn-sm btn-outline-primary my-cart-btn" data-id="4"
                                    data-name="Yakissoba de Frango" data-price="30" data-quantity="1"
                                    data-image="./assets/images/sushi-4.png">Adicionar</button>
                            </div>
                        </div>
                    </div>
                    <!-- FIM MENU COMIDA -->
                    <!-- INICIO MENU BEBIDA -->
                    <div class="menu menu--is-visible" id="bebidaMenu">

                        <div class="item row align-items-center">
                            <div class="col-sm-3 pr-5">
                                <img class="product-img" src="./assets/images/drink-1.png">
                            </div>
                            <div class="details col-sm-9">
                                <div class="item__header">
                                    <h3 class="item__title">Sakê Tradicional</h3>
                                    <span class="item__dots"></span>
                                    <span class="item__price">R$ 25</span>
                                </div>
                                <p class="item__description">Bebida alcoólica tradicional do Japão, feita a partir da
                                    fermentação do arroz, com sabor suave e levemente adocicado. Servido quente ou frio.
                                </p>
                                <button class="btn btn-sm btn-outline-primary my-cart-btn" data-id="5"
                                    data-name="Sakê Tradicional" data-price="25" data-quantity="1"
                                    data-image="./assets/images/drink-1.png">Adicionar</button>
                            </div>
                        </div>
                        <div class="item row align-items-center">
                            <div class="col-sm-3 pr-5">
                                <img class="product-img" src="./assets/images/drink-2.png">
                            </div>
                            <div class="details col-sm-9">
                                <div class="item__header">
                                    <h3 class="item__title">Chá Verde Gelado</h3>
                                    <span class="item__dots"></span>
                                    <span class="item__price">R$ 12</span>
                                </div>
                                <p class="item__description">Refrescante chá verde japonês, servido gelado, com notas
                                    suaves de ervas e um toque sutil de limão.
                                </p>
                                <button class="btn btn-sm btn-outline-primary my-cart-btn" data-id="6"
                                    data-name="Chá Verde Gelado" data-price="12" data-quantity="1"
                                    data-image="./assets/images/drink-2.png">Adicionar</button>
                            </div>
                        </div>
                        <div class="item row align-items-center">
                            <div class="col-sm-3 pr-5">
                                <img class="product-img" src="./assets/images/drink-3.png">
                            </div>
                            <div class="details col-sm-9">
                                <div class="item__header">
                                    <h3 class="item__title">Suco de Yuzu</h3>
                                    <span class="item__dots"></span>
                                    <span class="item__price">R$ 18</span>
                                </div>
                                <p class="item__description">Suco cítrico japonês, feito a partir da fruta yuzu,
                                    conhecido por seu sabor único, que é uma mistura de limão, tangerina e toranja.
                                    Perfeito para uma bebida leve e refrescante.
                                </p>
                                <button class="btn btn-sm btn-outline-primary my-cart-btn" data-id="7"
                                    data-name="Suco de Yuzu" data-price="18" data-quantity="1"
                                    data-image="./assets/images/drink-3.png">Adicionar</button>
                            </div>
                        </div>
                        <div class="item row align-items-center">
                            <div class="col-sm-3 pr-5">
                                <img class="product-img" src="./assets/images/drink-4.png">
                            </div>
                            <div class="details col-sm-9">
                                <div class="item__header">
                                    <h3 class="item__title">Cerveja Asahi</h3>
                                    <span class="item__dots"></span>
                                    <span class="item__price">R$ 20</span>
                                </div>
                                <p class="item__description">Cerveja lager japonesa de sabor leve e refrescante, com um
                                    final seco, perfeita para acompanhar pratos tradicionais japoneses.
                                </p>
                                <button class="btn btn-sm btn-outline-primary my-cart-btn" data-id="8"
                                    data-name="Cerveja Asahi" data-price="20" data-quantity="1"
                                    data-image="./assets/images/drink-4.png">Adicionar</button>
                            </div>
                        </div>

                    </div>
                    <!-- FIM MENU BEBIDA -->
                    <!-- INICIO MENU DOCES -->
                    <div class="menu" id="docesMenu">
                        <div class="item row align-items-center">
                            <div class="col-sm-3 pr-5">
                                <img class="product-img" src="./assets/images/doce-1.png">
                            </div>
                            <div class="details col-sm-9">
                                <div class="item__header">
                                    <h3 class="item__title">Mochi de Morango</h3>
                                    <span class="item__dots"></span>
                                    <span class="item__price">R$ 18</span>
                                </div>
                                <p class="item__description">Bolinho de arroz glutinoso recheado com pasta de feijão
                                    vermelho doce e um morango fresco no centro. Uma combinação única de texturas e
                                    sabores.
                                </p>
                                <button class="btn btn-sm btn-outline-primary my-cart-btn" data-id="9"
                                    data-name="Mochi de Morango" data-price="18" data-quantity="1"
                                    data-image="./assets/images/doce-1.png">Adicionar</button>
                            </div>
                        </div>
                        <div class="item row align-items-center">
                            <div class="col-sm-3 pr-5">
                                <img class="product-img" src="./assets/images/doce-2.png">
                            </div>
                            <div class="details col-sm-9">
                                <div class="item__header">
                                    <h3 class="item__title">Dorayaki</h3>
                                    <span class="item__dots"></span>
                                    <span class="item__price">R$ 15</span>
                                </div>
                                <p class="item__description">Panquecas japonesas macias recheadas com anko (pasta de
                                    feijão azuki doce). Um doce clássico e reconfortante.
                                </p>
                                <button class="btn btn-sm btn-outline-primary my-cart-btn" data-id="10"
                                    data-name="Dorayaki" data-price="15" data-quantity="1"
                                    data-image="./assets/images/doce-2.png">Adicionar</button>
                            </div>
                        </div>
                        <div class="item row align-items-center">
                            <div class="col-sm-3 pr-5">
                                <img class="product-img" src="./assets/images/doce-3.png">
                            </div>
                            <div class="details col-sm-9">
                                <div class="item__header">
                                    <h3 class="item__title">Cheesecake de Matcha</h3>
                                    <span class="item__dots"></span>
                                    <span class="item__price">R$ 22</span>
                                </div>
                                <p class="item__description">Cheesecake cremoso e delicado, feito com chá verde matcha,
                                    servido com uma base crocante de biscoito. Equilibra doçura e um toque amargo do
                                    matcha.
                                </p>
                                <button class="btn btn-sm btn-outline-primary my-cart-btn" data-id="11"
                                    data-name="Cheesecake de Matcha" data-price="22" data-quantity="1"
                                    data-image="./assets/images/doce-3.png">Adicionar</button>
                            </div>
                        </div>
                        <div class="item row align-items-center">
                            <div class="col-sm-3 pr-5">
                                <img class="product-img" src="./assets/images/doce-4.png">
                            </div>
                            <div class="details col-sm-9">
                                <div class="item__header">
                                    <h3 class="item__title">Taiyaki de Chocolate</h3>
                                    <span class="item__dots"></span>
                                    <span class="item__price">R$ 20</span>
                                </div>
                                <p class="item__description">Massa doce em formato de peixe, recheada com um cremoso
                                    chocolate derretido. Uma combinação de tradição e modernidade em um só doce.
                                </p>
                                <button class="btn btn-sm btn-outline-primary my-cart-btn" data-id="12"
                                    data-name="Taiyaki de Chocolate" data-price="20" data-quantity="1"
                                    data-image="./assets/images/doce-4.png">Adicionar</button>
                            </div>
                        </div>
                    </div>
                    <!-- FIM MENU DOCES -->
                </div>
                <!-- FIM BLOCK -->
                <script src="./assets/js/mycart.js"></script>
                <script src="./assets/js/mycart-custom.js"></script>
            </section>
        </div>
    </div>
    <div class="nav-item my-cart-icon">
        <img src="./assets/images/cart.svg" style="width:20px;"> <span class="badge badge-notify my-cart-badge"> </span>
    </div>
    <footer class="block footer1 footer text-center">
        <p>&copy; <a href="https://bootstrapstarter.com/bootstrap-templates/template-fooddelivery-bootstrap-html/">Tatsu
                Sushi Bar</a> </p>
    </footer>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
    <script>
    < script src = "./assets/js/custom-general.js" >
    </script>
</body>

</html>
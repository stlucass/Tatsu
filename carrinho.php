<?php
session_start();
include('data/conexao.php');

// Simulando um usuário logado
$usuario_id = 1; // Alterar para o ID real do usuário

// Inicializa o carrinho se não existir
if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

// Processa a adição de produtos ao carrinho
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id']) && isset($_POST['quantidade'])) {
    $product_id = intval($_POST['product_id']);
    $quantidade = intval($_POST['quantidade']);

    // Adiciona ou atualiza a quantidade do produto no carrinho
    if (isset($_SESSION['carrinho'][$product_id])) {
        $_SESSION['carrinho'][$product_id] += $quantidade; // Atualiza a quantidade
    } else {
        $_SESSION['carrinho'][$product_id] = $quantidade; // Adiciona novo produto
    }
}

// Processa a remoção de produtos do carrinho
if (isset($_POST['remove_id'])) {
    $remove_id = intval($_POST['remove_id']);
    unset($_SESSION['carrinho'][$remove_id]); // Remove o produto
}

// Processa a atualização da quantidade do produto no carrinho
if (isset($_POST['update_id']) && isset($_POST['update_quantidade'])) {
    $update_id = intval($_POST['update_id']);
    $update_quantidade = intval($_POST['update_quantidade']);
    if ($update_quantidade > 0) {
        $_SESSION['carrinho'][$update_id] = $update_quantidade; // Atualiza a quantidade
    } else {
        unset($_SESSION['carrinho'][$update_id]); // Remove se a quantidade for 0
    }
}

// Obtém os produtos para exibir
$products = [
    1 => ['nome' => 'Sushi de Salmão', 'preco' => 35.00, 'imagem' => 'assets/images/prato_1.jpg'],
    2 => ['nome' => 'Rámen', 'preco' => 45.00, 'imagem' => 'assets/images/prato_2.jpg'],
    3 => ['nome' => 'Tempurá', 'preco' => 40.00, 'imagem' => 'assets/images/prato_3.jpg'],
    4 => ['nome' => 'Cheesecake', 'preco' => 22.00, 'imagem' => 'assets/images/doce_4.jpg'],
    5 => ['nome' => 'Mochi', 'preco' => 18.00, 'imagem' => 'assets/images/doce_3.jpg'],
    6 => ['nome' => 'Dorayaki', 'preco' => 15.00, 'imagem' => 'assets/images/doce_2.jpg'],
    7 => ['nome' => 'Taiyaki', 'preco' => 20.00, 'imagem' => 'assets/images/doce_1.jpg'],
    8 => ['nome' => 'Yakisoba', 'preco' => 30.00, 'imagem' => 'assets/images/prato_4.jpg'],
    9 => ['nome' => 'Ceviche', 'preco' => 40.00, 'imagem' => 'assets/images/prato_5.jpg'],
];

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho Tatsu Sushi Bar</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
    <link rel="icon" href="./assets/images/dragaoicone.png" type="image/x-icon">
    <style>
        body {
            background-color: rgb(18, 18, 18);
            font-family: 'Arial', sans-serif;
            color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        h1 {
            position: relative;
            z-index: 1;
            font-family: Impact, Haettenschweiler, 'Arial Narrow', sans-serif;
            font-size: 4rem;
            text-align: center;
            text-transform: uppercase;
            color: #fff;
            padding: 5px;
            font-weight: 400;
            box-shadow: 5px 0 0 0 #590209, -5px 0 0 0 #590209;
            background: #590209;
            border-radius: 25px;
        }

        .header {
            margin-top: 3%;
            filter: brightness(85%);
            border-style: solid #000;
            border-radius: 20px 10px 50px;
            box-shadow: 0 2px 10px #000;
            background-image: url('assets/images/fundo_header.jpg');
            background-size: cover;
            background-position: center;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 88%;
        }

        .carrinho {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            display: flex;
            flex-direction: column;
        }

        .produto {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            margin: 10px;
            background-color: #222;
            border-radius: 10px;
            box-shadow: 0 2px 10px #000;
        }

        .produto img {
            max-width: 100px;
            border-radius: 8px;
        }

        .produto h2 {
            margin: 0;
        }

        .quantidade-input {
            padding: 5px;
            width: 50px;
            margin-right: 10px;
        }

        button {
            padding: 10px 15px;
            border: none;
            border-radius: 20px;
            background-color: #800000;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #600000;
        }

        .btnvoltar {
            z-index: 10;
            position: relative;
            background-image: linear-gradient(to right bottom, hsl(0, 100%, 50%), hsl(0, 100%, 13%), hsl(0, 100%, 58%));
            color: rgb(255, 255, 255);
            font-family: 'Montserrat', sans-serif;
            font-size: 1.8rem;
            font-weight: 300;
            width: 20vw;
            max-width: max-content;
            min-width: 100px;
            height: 50px;
            display: grid;
            place-items: center;
            padding-inline: 30px;
            clip-path: polygon(0% 0%, 90% 0, 100% 30%, 100% 100%, 0 100%);
            overflow: hidden;
            left: 6vw;
            top: 20px;
            text-decoration: none;
        }

        .btnvoltar::before {
            font-family: 'Montserrat', sans-serif;
            text-decoration: none;
            content: "";
            position: absolute;
            top: var(--top, 50%);
            left: var(--left, 50%);
            width: 100%;
            padding-block-end: 100%;
            background-color: rgb(255, 66, 66);
            transform: translate(-50%, -50%) scale(0);
            border-radius: 50%;
            z-index: -1;
            transition: transform 500ms ease;
        }

        .btnvoltar:is(:hover, :focus-visible)::before {
            transform: translate(-50%, -50%) scale(1);
        }
    </style>
</head>

<body>
    <?php
    echo "<a href='index.php' class='btnvoltar' data-btn>Voltar</a>";
    ?>
    <center>
        <div class="header">
            <h1>Menu Tatsu Sushi bar</h1>
        </div>
    </center>
    <div class="carrinho">
        <?php if (empty($_SESSION['carrinho'])): ?>
            <p>Seu carrinho está vazio.</p>
        <?php else: ?>
            <?php foreach ($_SESSION['carrinho'] as $id => $quantidade): ?>
                <div class="produto">
                    <img src="<?php echo $products[$id]['imagem']; ?>" alt="<?php echo $products[$id]['nome']; ?>">
                    <h2><?php echo $products[$id]['nome']; ?></h2>
                    <p>Preço: R$ <?php echo number_format($products[$id]['preco'], 2, ',', '.'); ?></p>
                    <p>Quantidade:
                    <form action="" method="post" style="display:inline;">
                        <input type="number" name="update_quantidade" class="quantidade-input"
                            value="<?php echo $quantidade; ?>" min="0" required>
                        <input type="hidden" name="update_id" value="<?php echo $id; ?>">
                        <button type="submit">Atualizar</button>
                    </form>
                    </p>
                    <form action="" method="post" style="display:inline;">
                        <input type="hidden" name="remove_id" value="<?php echo $id; ?>">
                        <button type="submit">Remover</button>
                    </form>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
        <?php if (empty($_SESSION['carrinho'])): ?>
            <form action="delivery.php" method="get">
                <button type="submit">Ver Menu</button>
            </form>
        <?php else: ?>
            <div style="display: flex; gap: 10px;"> <!-- Adiciona um espaço entre os botões -->
                <form action="endereco.php" method="post">
                    <button type="submit" id="btn-fazer-pedido">Fazer Pedido</button>
                </form>
                <form action="delivery.php" method="get">
                    <button type="submit">Ver Menu</button>
                </form>
            </div>
        <?php endif; ?>
    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/style3.css" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
    <link rel="icon" href="assets/images/dragaoicone.png" type="image/x-icon">
    <title>Delivery Tatsu</title>
    <?php
include("data/conexao.php");

$sql = "SELECT * FROM DELIVERY";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    while ($produto = $resultado->fetch_assoc()) {
        echo '
            <tr>
                <td class="py-3 px-6 border-b">
                    <img src="data:image/jpeg;base64,' . base64_encode($produto['imagem']) . '" alt="' . $produto['nome'] . '" class="w-16 h-16 object-cover rounded">
                </td>
                <td class="py-3 px-6 border-b">' . $produto['nome'] . '</td>
                <td class="py-3 px-6 border-b">R$' . number_format($produto['preco'], 2, ',', '.') . '</td>
                <td class="py-3 px-6 border-b">' . $produto['estoque'] . '</td>
                <td class="py-3 px-6 border-b">
                    <div class="flex space-x-2">
                        <a href="editar_produto.php?edit=' . $produto['codproduto'] . '" class="bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-600">Editar</a>
                        <a href="deletar_produto.php?delete=' . $produto['codproduto'] . '" class="bg-red-500 text-white px-2 py-1 rounded hover:bg-red-600" onclick="return confirm(\'Tem certeza que deseja excluir este produto?\')">Excluir</a>
                    </div>
                </td>
            </tr>
        ';
    }
} else {
    echo '
        <tr>
            <td colspan="5" class="py-3 px-6 text-center text-gray-600">Nenhum produto encontrado.</td>
        </tr>
    ';
}
?>

</body>

</html>

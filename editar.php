<?php
require 'conexao.php';


if (!isset($_GET['id'])) {
    die("ID do produto não informado.");
}

$id = $_GET['id'];


$sql = "SELECT * FROM produtos WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

$produto = $stmt->fetch(PDO::FETCH_ASSOC);


if (!$produto) {
    die("Produto não encontrado.");
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];

    $update = "UPDATE produtos 
               SET nome = :nome,
                   preco = :preco,
                   descricao = :descricao
               WHERE id = :id";

    $stmt = $pdo->prepare($update);

    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':preco', $preco);
    $stmt->bindParam(':descricao', $descricao);
    $stmt->bindParam(':id', $id);

    $stmt->execute();

    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Produto</title>
</head>
<body>

    <h1>Editar Produto</h1>

    <form method="POST">

        <label>Nome:</label><br>
        <input type="text" name="nome" 
               value="<?= $produto['nome']; ?>" required>
        <br><br>

        <label>Preço:</label><br>
        <input type="number" step="0.01" name="preco" 
               value="<?= $produto['preco']; ?>" required>
        <br><br>

        <label>Descrição:</label><br>
        <textarea name="descricao" required><?= $produto['descricao']; ?></textarea>
        <br><br>

        <button type="submit">Atualizar</button>

    </form>

</body>
</html>

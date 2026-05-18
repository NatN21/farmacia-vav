<?php

require_once './config/conexao.php';
require_once './includes/header.php';

if ($_POST) {

    $nome = $_POST['nome'];
    $fabricante = $_POST['fabricante'];
    $preco = $_POST['preco'];
    $estoque = $_POST['estoque'];

    $sql = "INSERT INTO produtos 
    (nome, fabricante, preco, estoque)
    VALUES
    (:nome, :fabricante, :preco, :estoque)";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ':nome' => $nome,
        ':fabricante' => $fabricante,
        ':preco' => $preco,
        ':estoque' => $estoque
    ]);

    echo "Produto cadastrado com sucesso!";
}
?>
<form method="POST">

    <h1>Cadastrar Produto</h1>


    <label>Nome:</label>
    <input type="text" name="nome" required>

    <br><br>

    <label>Fabricante:</label>
    <input type="text" name="fabricante" required>

    <br><br>

    <label>Preço:</label>
    <input type="number" step="0.01" name="preco" required>

    <br><br>

    <label>Estoque:</label>
    <input type="number" name="estoque" required>

    <br><br>

    <button type="submit">
        Cadastrar
    </button>

</form>

<?php

require_once './includes/footer.php';
?>
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

<form>
    <h1>Formulario de Cadastro</h1>
</form>

<?php

require_once './includes/footer.php';
?>
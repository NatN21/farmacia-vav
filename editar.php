<?php
require_once './config/conexao.php';


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
    $fabricante = $_POST['fabricante'];
    $estoque = $_POST['estoque'];

    $update = "UPDATE produtos 
               SET nome = :nome,
                   preco = :preco,
                   fabricante = :fabricante,
                   estoque = :estoque
               WHERE id = :id";

    $stmt = $pdo->prepare($update);

    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':preco', $preco);
    $stmt->bindParam(':fabricante', $fabricante);
    $stmt->bindParam(':estoque', $estoque);
    $stmt->bindParam(':id', $id);

    $stmt->execute();

    header("Location: index.php");
    exit;
}

require_once './includes/header.php';
?>

    <h1>Editar Produto</h1>

    <form method="POST" class="form-produto">

        <label>Nome:</label><br>
        <input type="text" name="nome" 
               value="<?= htmlspecialchars($produto['nome']); ?>" required>

        <label>Preço:</label><br>
        <input type="number" step="0.01" name="preco" 
               value="<?= htmlspecialchars($produto['preco']); ?>" required>

        <label>Fabricante:</label><br>
        <input type="text" name="fabricante"
               value="<?= htmlspecialchars($produto['fabricante']); ?>" required>

        <label>Estoque:</label><br>
        <input type="number" step="1" name="estoque" 
               value="<?= htmlspecialchars($produto['estoque']); ?>" required>
        
        <button type="submit">Atualizar</button>

    </form>
<?php
require_once './includes/footer.php'; 

?>

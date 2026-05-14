<?php
require 'conexao.php';


if (!isset($_GET['id'])) {
    die("ID do produto não informado.");
}

$id = $_GET['id'];


$sql = "DELETE FROM produtos WHERE id = :id";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);

$stmt->execute();


header("Location: index.php");
exit;
?>
<?php
require 'conexao.php';

$sql = "SELECT * FROM produtos ORDER BY nome ASC";

$stmt = $pdo->prepare($sql);
$stmt->execute();

$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);


include 'produtos.php';
?>


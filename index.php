<?php
require 'conexao.php';
require 'header.php';

// SELECT dos produtos
$sql = "SELECT * FROM produtos ORDER BY nome ASC";

$stmt = $pdo->prepare($sql);
$stmt->execute();

// fetchAll()
$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


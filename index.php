<?php
require 'conexao.php';
require 'header.php';

$sql = "SELECT * FROM produtos ORDER BY nome ASC";

$stmt = $pdo->prepare($sql);
$stmt->execute();

$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


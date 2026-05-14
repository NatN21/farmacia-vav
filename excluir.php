<?php
require 'conexao.php';


if (!isset($_GET['id'])) {
    die("ID do produto não informado.");
}

$id = $_GET['id'];


$sql = "DELETE FROM produtos WHERE id = :id";


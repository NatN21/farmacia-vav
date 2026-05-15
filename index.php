<?php
require_once './config/conexao.php';
require_once './includes/header.php';

$sql = "SELECT * FROM produtos ORDER BY nome ASC";

$stmt = $pdo->prepare($sql);
$stmt->execute();

$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="container">
    
        <div class="titulo">
            <h2>Lista de Produtos</h2>
        </div>

        <?php if(count($produtos) > 0): ?>
        <table>

            <tr>
                <th>Nome</th>
                <th>Fabricante</th>
                <th>Preço</th>
                <th>Estoque</th>
                <th>Ações</th>
            </tr>

            <?php foreach($produtos as $produto): ?>

            <tr>

                <td>
                    <?= htmlspecialchars($produto['nome']); ?>
                </td>

                <td>
                    <?= htmlspecialchars($produto['fabricante']); ?>
                </td>

                <td class="preco">
                    R$ <?= number_format($produto['preco'], 2, ',', '.'); ?>
                </td>

                <td class="estoque">
                    <?= htmlspecialchars($produto['estoque']); ?> unidades
                </td>

                <td class="acoes">

                    <a class="editar"
                    href="editar.php?id=<?= (int)$produto['id']; ?>">
                        Editar
                    </a>

                    <a class="excluir"
                    href="excluir.php?id=<?= (int)$produto['id']; ?>"
                    onclick="return confirm('Deseja excluir este produto?')">
                    Excluir
                    </a>

                </td>

            </tr>

            <?php endforeach; ?>

        </table>

        <?php else: ?>

        <p>Nenhum produto cadastrado.</p>

        <?php endif; ?>

    </div>

    
<?php
require_once './includes/footer.php';
?>
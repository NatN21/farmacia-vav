<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmácia Vida+</title>

    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            font-family: Arial, Helvetica, sans-serif;
            background: #f1f8f6;
        }

        header{
            background-color: #0f766e;
            color: white;
            padding: 25px;
            text-align: center;
        }

        .container{
            width: 90%;
            margin: 40px auto;
        }

        .titulo{
            text-align: center;
            margin-bottom: 30px;
            color: #134e4a;
        }

        table{
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            border-radius: 12px;
            overflow: hidden;
        }

        th{
            background-color: #14b8a6;
            color: white;
            padding: 15px;
        }

        td{
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        tr:hover{
            background-color: #f0fdfa;
        }

        .preco{
            color: #059669;
            font-weight: bold;
        }

        .estoque{
            color: #2563eb;
            font-weight: bold;
        }

        .acoes a{
            text-decoration: none;
            padding: 8px 14px;
            border-radius: 8px;
            color: white;
        }

        .editar{
            background-color: #2563eb;
        }

        .excluir{
            background-color: #dc2626;
        }

        footer{
            margin-top: 40px;
            text-align: center;
            padding: 20px;
            background-color: #0f766e;
            color: white;
        }

    </style>
</head>

<body>

    <header>
        <h1> Farmácia Aura.exe+</h1>
        <p>Sistema de Controle de Produtos</p>
    </header>

    <div class="container">

        <div class="titulo">
            <h2>Lista de Produtos</h2>
        </div>

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
                    <?= $produto['nome']; ?>
                </td>

                <td>
                    <?= $produto['fabricante']; ?>
                </td>

                <td class="preco">
                    R$ <?= number_format($produto['preco'], 2, ',', '.'); ?>
                </td>

                <td class="estoque">
                    <?= $produto['estoque']; ?> unidades
                </td>

                <td class="acoes">

                    <a class="editar"
                    href="editar.php?id=<?= $produto['id']; ?>">
                        Editar
                    </a>

                    <a class="excluir"
                    href="excluir.php?id=<?= $produto['id']; ?>">
                        Excluir
                    </a>

                </td>

            </tr>

            <?php endforeach; ?>

        </table>

    </div>

    <footer>
        <p>Farmácia Aura.exe © 2026</p>
    </footer>

</body>
</html>

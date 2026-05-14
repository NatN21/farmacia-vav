# Mariana — Edição e Exclusão

Responsável por:

```
editar.php
excluir.php
```

----------

# Parte 1 — editar.php

## Objetivo

Permitir alterar produtos.

----------

# Fluxo esperado

## 1

Recebe ID pela URL

```
$_GET['id']
```

----------

## 2

Busca produto no banco

```
SELECT * FROM produtos WHERE id = :id
```

----------

## 3

Preenche formulário automaticamente

----------

## 4

Quando enviar:

```
UPDATE produtosSET ...WHERE id = :id
```

----------

# IMPORTANTE

O formulário deve aparecer já preenchido.

----------

# Parte 2 — excluir.php

## Objetivo

Apagar produto.

----------

# Fluxo esperado

## 1

Recebe ID

----------

## 2

Executa:

```
DELETE FROM produtos WHERE id = :id
```

----------

## 3

Redireciona pra:

```
index.php
```

----------

# IMPORTANTE

Usar:

```
header("Location: index.php");exit;
```

----------

# NÃO mostrar HTML nessa página

Ela é só lógica.

----------

# Commits sugeridos

```
feat: criada edição de produtos
feat: implementado update com PDO
feat: criada exclusão de produtos
```

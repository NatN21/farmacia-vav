# Pietro — Cadastro de Produtos

Responsável por:

```
cadastro.php
```

----------

# O que essa pessoa deve fazer

## Objetivo

Criar a página que adiciona novos produtos ao banco.

----------

# O arquivo deve:

✅ mostrar formulário HTML  
✅ receber dados via POST  
✅ usar PDO com prepare/execute  
✅ inserir no banco  
✅ mostrar mensagem de sucesso

----------

# Campos do formulário
|Campo| Tipo |
|--|--|
| nome | text |
| fabricante | text |
| preço | number step="0.01" |
| estoque | number |


----------

# Estrutura esperada

```
require conexão
require headerif ($_POST) {
   INSERT 
}
formulário HTML
require footer
```

----------

# SQL esperado

```
INSERT INTO produtos (nome, fabricante, preco, estoque)
VALUES (:nome, :fabricante, :preco, :estoque)
```

----------

# IMPORTANTE

## usar:

```
$stmt->execute([
```

e NÃO concatenar strings.

----------

# Commits sugeridos

```
feat: criado formulário de cadastro
feat: implementado insert com PDO
style: ajustado layout do cadastro
```

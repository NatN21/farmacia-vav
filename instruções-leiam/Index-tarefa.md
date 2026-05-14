# Maria Eduarda — Listagem de Produtos

Responsável por:

```
index.php
```

----------

# Objetivo

Mostrar todos os produtos cadastrados.

----------

# O arquivo deve:

✅ buscar produtos do banco  
✅ usar SELECT  
✅ usar fetchAll()  
✅ mostrar produtos na tela  
✅ criar links de editar/excluir

----------

# SQL esperado

```
SELECT * FROM produtos ORDER BY nome ASC
```

----------

# Estrutura esperada

```
require conexão
require header

SELECT

foreach

mostrar produtos

require footer
```

----------

# IMPORTANTE

Cada produto precisa mostrar:

-   nome
-   fabricante
-   preço
-   estoque

----------

# E precisa ter:

```
Editar
Excluir
```

----------

# Exemplo dos links

```
editar.php?id=1
```

----------

```
excluir.php?id=1
```

----------

# MUITO IMPORTANTE

Não apagar produtos direto pelo link visualmente.

O excluir só envia o ID.

Quem apaga é o:

```
excluir.php
```

----------

# Commits sugeridos

```
feat: criada listagem de produtos
feat: implementado select com PDO
style: ajustado cards/tabela dos produtos
```

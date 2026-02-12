# Exercício de consulta simples

`form-consultar-preco.html`
- 1 campo para digitação da chave de pesquisa - que deve ser o nome do produto
- 1 botão de pesquisar
- envia dados usando método GET para `consultar.php`


`consultar.php`

- contém um array associativo `$produtos_valores` na forma:
    - chave: nome do produto
    - valor: o preço do produto
- recebe o nome do produto a ser pesquisado via $_GET
- pesquisa o array `$produtos_valores` usando o nome como chave e...
- ... usa o valor para exibir resultado para o usuário, na forma "O valor do produto é: "


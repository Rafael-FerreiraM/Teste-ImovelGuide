## Teste Processo Seletivo da Empresa Imovel Guide

Esse projeto foi feito como parte de um processo seletivo utilizando:

- Laravel 10
- PHP 8.1
- Bootstrap
- MySQL
- JavaScript

## Observações
O projeto criará 3 tabelas, 1 é a tabela "corretores" a pedido do teste, as 2 outras tabelas são criadas pelo propio Laravel que podem ser excluidas, pois não interferem no projeto.

A verificação de CPF feita com uma função pronta chamada "módulo 11" só permite CPF reais para cadastrar corretores.

## Como utilizar o projeto:

- Abra o terminal ou prompt de comando.
- Execute o comando git clone https://github.com/Rafael-FerreiraM/Teste-ImovelGuide.git para clonar o repositório em sua máquina.
- Navegue até o diretório do projeto no terminal.
- Execute composer install para instalar as dependências do Laravel.
- Configure o arquivo .env com as informações do seu ambiente, como banco de dados, URL, etc.
- Certifique-se de ter o PHP e o MySQL instalados em seu sistema.
- Inicie o servidor MySQL de acordo com a sua instalação (pode variar dependendo do sistema operacional).
- Inicie o servidor Laravel com o comando php artisan serve
- No terminal, execute php artisan migrate para criar as tabelas necessárias no banco de dados.
- Abra um navegador e acesse http://localhost/corretores/cadastro para visualizar o projeto em execução.
  
## Rotas do projeto:
- corretores/cadastro ---> index do projeto e cadastrar corretores
- corretores/editar/id  ----> editar dados dos corretores
- corretores/excluir/id ---> excluir diretamente pelo postman ou json
  

# Imagem do Projeto
![Captura de tela de 2024-06-23 00-03-30](https://github.com/Rafael-FerreiraM/Teste-ImovelGuide/assets/101290871/fdbe9427-c1af-4e00-90cb-61f02d349993)


# Agradecimentos
Gostaria de agradecer a empresa Imovel Guide, por ter me dado a chance de participar nesse processo seletivo e realizar esse desafio que agrega muito na minha experiência como profissional, muito obrigado mesmo !.

## Teste Processo Seletivo da Empresa Imóvel Guide
## Leia essa documentação caso ocorra algum problema técnico

![image](https://github.com/Rafael-FerreiraM/Teste-ImovelGuide/assets/101290871/3cf5d465-be51-4412-ba5a-73cb480ed71b)


Esse projeto foi feito como parte de um processo seletivo utilizando:

- Laravel 10
- PHP 8.1
- Bootstrap
- MySQL


## Observações
O projeto criará 3 tabelas, 1 é a tabela "corretores" a pedido do teste, as 2 outras tabelas são criadas pelo próprio Laravel que podem ser excluidas, pois não interferem no projeto.

A verificação de CPF feita com uma função pronta chamada "módulo 11" só permite CPF reais para cadastrar corretores.

A página index do projeto está localizada na rota corretores/cadastro, portanto você deve acessar essa rota primeiro.

## Como utilizar o projeto:

- Abra o terminal ou prompt de comando.
- Execute o comando git clone https://github.com/Rafael-FerreiraM/Teste-ImovelGuide.git para clonar o repositório em sua máquina.
- Navegue até o diretório do projeto no terminal.
- Execute composer install para instalar as dependências do Laravel.
- Execute esse comando para configurar o arquivo .env: cp .env.example .env
- Execute esse comando para gerar a key de acesso: php artisan key:generate
- No terminal, execute php artisan migrate para criar as tabelas necessárias no banco de dados.
- Inicie o servidor Laravel com o comando php artisan serve
- Abra um navegador e acesse localhost:8000/corretores/cadastro para visualizar o projeto em execução.
  
## Rotas do projeto:
- corretores/cadastro ---> Index do projeto e rota para cadastrar e visualizar corretores.
- corretores/editar/id  ---> Rota para editar dados dos corretores.
- corretores/excluir/id ---> Rota para excluir corretores do sistema.
  

# Imagem do Projeto
![Captura de tela de 2024-06-23 00-03-30](https://github.com/Rafael-FerreiraM/Teste-ImovelGuide/assets/101290871/fdbe9427-c1af-4e00-90cb-61f02d349993)


# Agradecimentos
Gostaria de agradecer a empresa Imovel Guide, por ter me dado a chance de participar nesse processo seletivo e realizar esse desafio que agrega muito na minha experiência como profissional, muito obrigado mesmo ! .


![image](https://github.com/Rafael-FerreiraM/Teste-ImovelGuide/assets/101290871/2833fcbf-c846-4dab-8f41-37e9c28430ab)



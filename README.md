Sistema de emprestimo de livros com CakePHP

comandos ultilizados

-Download do composer:

obs: baixar dentro do pasta no qual vai iniciar o projeto
  curl -s https://getcomposer.org/installer | php
  
-para iniciar projeto:

  php composer.phar create-project --prefer-dist cakephp/app:^3.8 nome_do_projeto
  
 -criar banco de dados e configurar usuario, senha e informar o nome do BD que será ultilizado
    
  -Criar os formularios de cadastro das entidades
    bin/cake bake all users
    bin/cake bake all books
    bin/cake bake all lend
    
   para iniciar o servidor
    bin/cake server
                             
                                                                Miguel gabriel B. Dos Santos
                                                                29/01/2020
                                                                Em memoria de Miguel Israel B. dos Santos

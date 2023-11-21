# projeto
 Migrations e adicionadno dados.

Passo a passo de como criar migrations no laravel

1.	Primeiro passo, criar projeto Laravel e alterar documento .env(colocando o nome do banco de dados):
   

3.	Segundo passo, no terminal, navegue até o diretório do seu projeto Laravel e execute o seguinte comando para criar as migration:
   php artisan make:migration create_fornecedores_table --create=fornecedores

4.	Após isso, abra cada migration gerada no diretório "database/migrations" e adicione os atributos correspondentes a cada entidade.
Repita esse processo em cada uma das tabelas.

5.	Execute o comando abaixo para executar as migrations e criar as tabelas no banco de dados:
   php artisan migrate
 
 

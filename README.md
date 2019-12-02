### Instruções

## Para executar a aplicação faça os seguintes passos:

* crie um arquivo env.ini e preencha-o como é mostrado no arquivo de exemplo env.sample.ini;

* na pasta raíz (onde se encontra o arquivo docker-compose.yml) execute o seguinte comando: docker-compose up;

* abra um outro terminal e execute o seguinte comando: docker exec -it php-apache /bin/bash;

* navegue até a pasta public dentro do container e execute o seguinte comando: composer install.

### Banco de Dados

* Há um arquivo .sql em /extras que contém já os comandos para criação das tabelas, inserção nas mesmas etc.

* Note-se que para fazer o login na aplicação é preciso que as credências estejam cadastradas no banco, senão não conseguirá logar. Há inserts prontos para o mesmo.
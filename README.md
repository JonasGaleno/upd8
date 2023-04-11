# CRUD de clientes

Esse projeto tem o objetivo de demonstrar habilidades no desenvolvimento de um sistema WEB e na criação de uma API Rest, sendo assim uma proposta de desenvolvimento com PHP a qual foi construído um sistema de cadastro de clientes juntamente com um serviço que manipule seus dados, ou seja, uma API.

## Organização

No diretório temos dois projetos, um é o sistema web e o outro é a API Rest. Dessa forma, todas as funcionalidades presentes no sistema de cadastro de clientes consomem a API criada.

# Tecnologias utilizadas
## Back end
- PHP
- Composer
- MySQL
- Laravel
## Front end
- Bootstrap
- HTML

Pré-requisitos: Apache, MySQL, PHP, Composer, Npm e Laravel.

```bash
# clonar repositório.
git clone https://github.com/JonasGaleno/upd8.git

# nos dois diretórios, upd8-crud e upd8-crud-api deve-se instalar as dependências necessárias do composer.

composer update

# no upd8-crud devemos instalar as dependências de front-end

npm install

# configurar as variáveis de ambiente para conexão com banco de dados e API Rest.

# upd8-crud
API_CLIENTE_URL=

# upd8-crud-api
DB_CONNECTION=
DB_HOST=
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

# para a criação da base de dados, deve-se rodar as migrations e seedings no projeto upd8-crud-api, subirão 5 registros.
php artisan migrate

php artisan db:seed

# enfim, subir os servidores dos projetos.
php artisan serve

# Obs: É recomendado subir o servidor da API (upd8-crud-api) e setar a variável de ambiente do projeto upd8-crud com a URL correta.

```

# Autor

Jonas Galeno da Silva

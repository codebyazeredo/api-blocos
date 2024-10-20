# API-BLOCOS

## Requisitos

Antes de começar, verifique se você tem os seguintes requisitos:

```
PHP (versão mínima: 8.0)
Composer
MySQL ou outro banco de dados compatível
Node.js e npm (opcional, se você estiver usando front-end)
Passo a Passo para Configuração
```
## Primeiro, clone o repositório do projeto:
```
git clone https://github.com/codebyazeredo/api-blocos.git
```
- Navegue até o Diretório do Projeto

- Acesse o diretório do projeto:
```
cd api-blocos
``` 
## Instale as Dependências do PHP

Execute o Composer para instalar as dependências do PHP:
```
composer install
```
- Crie o Arquivo .env

- Copie o arquivo .env.example para criar o arquivo .env:
```
cp .env.example .env
```
- Configure as Variáveis de Ambiente

- Abra o arquivo .env e configure as variáveis de ambiente, especialmente as configurações do banco de dados:
```
DB_CONNECTION=mysql (Caso esteja utilizando mySQL, o banco pode ser de sua preferência)
DB_HOST=127.0.0.1 
DB_PORT=3306 
DB_DATABASE=nome_do_banco 
DB_USERNAME=usuario DB_PASSWORD=senha
```
- Gere a Chave da Aplicação

- Gere a chave da aplicação Laravel:
```
php artisan key
```
- Execute as Migrações

- Se o projeto inclui migrações de banco de dados, execute o seguinte comando para criar as tabelas:
```
php artisan migrate
```

## Instale as Dependências do Front-end (Opcional)

- Se você estiver usando pacotes front-end, instale as dependências com npm:
```
npm install
```

- Compile os Assets (Opcional)

- Se necessário, compile os assets do front-end:
```
npm run dev
```

- Inicie o Servidor Local

- Você pode iniciar o servidor embutido do Laravel:

```
php artisan serve
```

O aplicativo estará disponível em http://localhost:8000.

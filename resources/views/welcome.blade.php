<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Documentação API')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f4;
            color: #333;
        }
        h1, h2, h3 {
            color: #2c3e50;
        }
        pre {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 10px;
            overflow-x: auto;
        }
        code {
            background-color: #e8e8e8;
            padding: 2px 4px;
            border-radius: 4px;
        }
        ul {
            list-style-type: none;
        }
    </style>
</head>
<body>
<h1>Documentação da API - Pedidos de Blocos 3D</h1>
<p>Desenvolvido para o estudo da utilização do Swagger para documentação de Api's</p>
<p>PHP 8.2.24</p>
<p>Laravel 11</p>

<h2>Funcionalidades</h2>
<ul>
    <li><strong>Criar um novo pedido:</strong> Permite que o cliente envie os detalhes de um novo bloco 3D.</li>
    <li><strong>Listar todos os pedidos:</strong> Retorna uma lista de todos os pedidos realizados.</li>
    <li><strong>Obter detalhes de um pedido:</strong> Permite consultar os detalhes de um pedido específico pelo ID.</li>
    <li><strong>Atualizar um pedido existente:</strong> Permite modificar as informações de um pedido já existente.</li>
    <li><strong>Excluir um pedido:</strong> Remove um pedido do sistema.</li>
</ul>

<h2>Rotas da API</h2>
<h3>1. Listar todos os pedidos</h3>
<pre><code>GET /pedidos</code></pre>
<p>Retorna uma lista de todos os pedidos em formato JSON.</p>

<h3>2. Criar um novo pedido</h3>
<pre><code>POST /pedidos</code></pre>
<p>Cria um novo pedido. O corpo da requisição deve ser um JSON com o seguinte formato:</p>
<pre><code>{
    "andares": 3,
    "cor1": "vermelho",
    "cor2": "azul",
    "cor3": "amarelo",
    "desenho1": "estrela",
    "desenho2": "circulo",
    "desenho3": "quadrado"
}</code></pre>

<h3>3. Obter um pedido pelo ID</h3>
<pre><code>GET /pedidos/{id}</code></pre>
<p>Retorna os detalhes de um pedido específico, onde <code>{id}</code> é o ID do pedido.</p>

<h3>4. Atualizar um pedido existente</h3>
<pre><code>PUT /pedidos/{id}</code></pre>
<p>Atualiza um pedido existente. O corpo da requisição deve ser um JSON com o mesmo formato utilizado na criação.</p>

<h3>5. Excluir um pedido</h3>
<pre><code>DELETE /pedidos/{id}</code></pre>
<p>Remove um pedido do sistema, onde <code>{id}</code> é o ID do pedido a ser excluído.</p>

<h2>Exemplo de Uso</h2>
<p>Para criar um novo pedido, você pode usar uma ferramenta como Postman ou um script em sua linguagem de programação preferida para enviar um pedido POST para <code>/pedidos</code> com o corpo JSON apropriado.</p>

<footer>
    <p>codebyazeredo</p>
</footer>
</body>
</html>

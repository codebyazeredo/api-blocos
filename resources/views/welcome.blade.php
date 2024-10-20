<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Documentação API')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<h1>Documentação da API - Pedidos de Blocos 3D</h1>
<p>Desenvolvido para o estudo da utilização do Swagger para documentação de Api's</p>
<p>PHP 8.2.24</p>
<p>Laravel 11</p>

<br>
<hr>

<h2>Funcionalidades</h2>
<ul>
    <li><strong>Criar um novo pedido:</strong> Permite que o cliente envie os detalhes de um novo bloco 3D.</li>
    <li><strong>Listar todos os pedidos:</strong> Retorna uma lista de todos os pedidos realizados.</li>
    <li><strong>Obter detalhes de um pedido:</strong> Permite consultar os detalhes de um pedido específico pelo ID.</li>
    <li><strong>Atualizar um pedido existente:</strong> Permite modificar as informações de um pedido já existente.</li>
    <li><strong>Excluir um pedido:</strong> Remove um pedido do sistema.</li>
    <li><strong>Ver Documentação:</strong>Permite visualizar a documentação da Api com as rotas e os endpoints disponíveis</li>
</ul>

<br>
<hr>

<h2>Exemplo de Uso:</h2>
<p>Para criar um novo pedido, você pode utilizar uma ferramenta como Postman ou Bruno para enviar uma requisição POST para <code>/pedidos</code> com o corpo JSON apropriado.</p>

<br>
<hr>

<h2>Rotas da API</h2>

<br>
<hr>

<h3>1. Listar todos os pedidos</h3>
<pre><code>GET /pedidos</code></pre>
<p>Retorna uma lista de todos os pedidos em formato JSON.</p>
<hr>
<br>
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

<h3>6. Documentação</h3>
<pre><code>DOCUMENTAÇÃO /docs</code></pre>
<p>Visualiza as requisições e os endpoints disponíveis em JSON</p>

<img src="/img/retorno.png" alt="Retorno Esperado" style="width: 1000px">
<p>Retorno Esperado para a rota <code>/docs</code></p>

<footer style="display:flex; justify-content: center">
    <li>Para mais informações leia o Read.me em
        <a href="https://github.com/codebyazeredo">github.com/codebyazeredo</a>
    </li>
</footer>
</body>
</html>

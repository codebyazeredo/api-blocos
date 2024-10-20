# API de Pedidos de Blocos 3D

Esta é uma API RESTful para gerenciamento de pedidos de blocos 3D personalizados. A API permite que os usuários criem, listem, atualizem e excluam pedidos, fornecendo um ponto de interação para aplicações front-end ou outras integrações.

## Funcionalidades

- **Criar um novo pedido**: Permite que os usuários enviem detalhes para um novo bloco 3D.
- **Listar todos os pedidos**: Retorna uma lista de todos os pedidos feitos.
- **Obter detalhes de um pedido**: Consulta detalhes de um pedido específico pelo ID.
- **Atualizar um pedido existente**: Modifica as informações de um pedido já existente.
- **Excluir um pedido**: Remove um pedido do sistema.

## Rotas da API

### 1. Listar todos os pedidos

- **Método**: `GET`
- **Endpoint**: `/pedidos`
- **Descrição**: Retorna uma lista de todos os pedidos em formato JSON.

### 2. Criar um novo pedido

- **Método**: `POST`
- **Endpoint**: `/pedidos`
- **Descrição**: Cria um novo pedido.
- **Corpo da Requisição**:
    ```json
    {
        "andares": 3,
        "cor1": "vermelho",
        "cor2": "azul",
        "cor3": "amarelo",
        "desenho1": "estrela",
        "desenho2": "circulo",
        "desenho3": "quadrado"
    }
    ```

### 3. Obter um pedido pelo ID

- **Método**: `GET`
- **Endpoint**: `/pedidos/{id}`
- **Descrição**: Retorna os detalhes de um pedido específico, onde `{id}` é o ID do pedido.

### 4. Atualizar um pedido existente

- **Método**: `PUT`
- **Endpoint**: `/pedidos/{id}`
- **Descrição**: Atualiza um pedido existente.
- **Corpo da Requisição**: O mesmo formato utilizado na criação.

### 5. Excluir um pedido

- **Método**: `DELETE`
- **Endpoint**: `/pedidos/{id}`
- **Descrição**: Remove um pedido do sistema, onde `{id}` é o ID do pedido a ser excluído.

## Tecnologias Utilizadas

- **Laravel**: Framework PHP para construção da API.
- **MySQL**: Sistema de gerenciamento de banco de dados relacional.
- **Swagger**: Para documentação da API.

## Instalação

1. Clone o repositório:
   ```bash
   git clone https://github.com/seuusuario/api-blocos.git
   cd api-blocos

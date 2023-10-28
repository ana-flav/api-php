

# Projeto PHP de Cadastro de Remédios

## Descrição
Este é um projeto PHP que permite cadastrar e listar informações sobre remédios. Ele inclui uma interface web para inserir dados e listar os remédios cadastrados, bem como uma API para manipulação dos dados.

## Funcionalidades
- Cadastro de remédios com nome e preço.
- Listagem de remédios cadastrados.
- API para cadastro e listagem de remédios via requisições HTTP.

## Requisitos
- Servidor web com suporte ao PHP (recomenda-se usar Apache ou Nginx).
- PHP instalado (versão recomendada: PHP 7+).
- [Composer](https://getcomposer.org/) para gerenciamento de dependências.

## Configuração do Ambiente
1. Certifique-se de ter o PHP instalado na sua máquina.
2. Clone este repositório em um diretório acessível na sua máquina:
   ```bash
   git clone https://github.com/ana-flav/api-php.git
   ```
3. Navegue até o diretório do projeto:
   ```bash
   cd api-php
   ```
4. Instale as dependências do projeto usando o Composer:
   ```bash
   composer install
   ```

## Executando o Projeto
Você pode executar o projeto em duas portas separadas, uma para a camada de apresentação (frontend) e outra para a API (backend). Aqui estão as etapas para fazê-lo:

### Camada de Apresentação (Frontend)
1. Execute o servidor de desenvolvimento embutido do PHP na porta 8000 para a camada de apresentação:
   ```bash
   php -S localhost:8000 
   ```
2. Acesse a interface web em `http://localhost:8000` para cadastrar e listar remédios.

### Camada da API (Backend)
1. Execute o servidor de desenvolvimento embutido do PHP na porta 8001 para a camada da API:
   ```bash
   php -S localhost:8001 
   ```
2. Use a API em `http://localhost:8001` para realizar requisições de cadastro e listagem de remédios.

## Exemplos de Requisições para a API
Você pode usar o Postman para testar a API. Aqui estão exemplos de requisições:
- Cadastrar um remédio (POST):
  ```http
  POST http://localhost:8001/remedios/cadastrar


  {
      "nome": "Paracetamol",
      "valor": 15.99
  }
  ```

- Listar todos os remédios (GET):
  ```http
  GET http://localhost:8001/remedios/listar
  ```
---

**Nota:** Certifique-se de que as portas usadas para a camada de apresentação e a camada da API (portas 8000 e 8001 neste exemplo) não estejam em uso por outros serviços em sua máquina.

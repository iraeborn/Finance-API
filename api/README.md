# API de Gerenciamento Financeiro

Esta é a documentação da API de Gerenciamento Financeiro, que oferece funcionalidades para gerenciar finanças pessoais, incluindo contas bancárias, transações, categorias de transações, métodos de pagamento, metas financeiras e orçamentos.

## Modelos

A API inclui os seguintes modelos:

1. **User**: Representa os usuários do sistema. Cada usuário possui informações pessoais, como nome, e-mail e senha.

2. **BankAccount**: Representa as contas bancárias dos usuários. Inclui detalhes como nome da conta, número da conta e saldo.

3. **Transaction**: Representa as transações financeiras. Cada transação possui um valor, descrição e data. É associada a um usuário, uma conta bancária e uma categoria de transação.

4. **TransactionCategory**: Representa as categorias de transações para classificar despesas ou receitas. Cada categoria possui um nome e uma descrição.

5. **PaymentMethod**: Representa os métodos de pagamento, como cartões de crédito, cartões de débito, etc. Cada método de pagamento possui um nome e uma descrição.

6. **TransactionHistory**: Registra o histórico de transações, incluindo datas e estados das transações. Cada registro de histórico está associado a uma transação.

7. **Goal**: Representa as metas financeiras que os usuários desejam alcançar. Cada meta possui um nome, um valor-alvo, um valor atual e uma data limite.

8. **Budget**: Representa os orçamentos definidos pelos usuários para categorias específicas. Cada orçamento possui um valor, uma data de início e uma data de término.

## Endpoints da API

A API oferece os seguintes endpoints:

- `/api/users`: Gerenciamento de usuários.
- `/api/bank-accounts`: Gerenciamento de contas bancárias.
- `/api/transactions`: Gerenciamento de transações financeiras.
- `/api/transaction-categories`: Gerenciamento de categorias de transações.
- `/api/payment-methods`: Gerenciamento de métodos de pagamento.
- `/api/transaction-history`: Histórico de transações.
- `/api/goals`: Gerenciamento de metas financeiras.
- `/api/budgets`: Gerenciamento de orçamentos.

Cada endpoint permite criar, ler, atualizar e excluir recursos relacionados aos modelos mencionados.

## Uso da API

Para usar a API, você deve autenticar-se como usuário. A autenticação pode ser implementada usando tokens JWT ou outro método de sua escolha.

Certifique-se de fornecer informações de autenticação válidas no cabeçalho de cada solicitação, quando necessário.

## Como Subir o Projeto

Para iniciar o projeto localmente, siga estas etapas:

### Pré-requisitos

- Certifique-se de ter o PHP e o Composer instalados em sua máquina. Se ainda não os tiver, você pode baixá-los em [PHP](https://www.php.net/downloads) e [Composer](https://getcomposer.org/download/).

- Você também precisará de um servidor de banco de dados MySQL. Você pode usar o MySQL ou o MariaDB, por exemplo. Certifique-se de ter as credenciais de acesso ao banco de dados disponíveis.

### Configuração

1. Clone este repositório:
```bash
git clone https://github.com/seuusuario/seuprojeto.git
```

2. Navegue até o diretório do projeto:
```bash
cd seuprojeto
```

3. Instale as dependências do Composer:
```bash
composer install
```

4. Copie o arquivo de configuração .env.example para .env:
```bash
cp .env.example .env
```
Edite o arquivo .env e configure as variáveis de ambiente, como as credenciais de banco de dados.

5. Gere uma chave de aplicativo:
```bash
php artisan key:generate
```

6. Execute as migrações do banco de dados para criar as tabelas:
```bash
php artisan migrate
```

7. Inicie o servidor local:
```bash
php artisan serve
```

### A API estará acessível em http://localhost:8000

Agora você pode começar a usar a API para gerenciar suas finanças pessoais. Se você tiver alguma dúvida

<h1 align="center" style="border-bottom: none;">
  <img align="left" height="60" width="65" src="https://github.com/devicons/devicon/blob/master/icons/laravel/laravel-original.svg">
  📋 Laravel Notes
  <img align="right" height="60" width="65" src="https://github.com/devicons/devicon/blob/master/icons/php/php-original.svg">
</h1>

<br>

## 📌 Sobre o Projeto
Laravel Notes é um sistema completo desenvolvido em Laravel que inclui recursos modernos, como filas, autenticação personalizada, validação de dados e logging avançado com [Laravel Telescope](https://laravel.com/docs/12.x/telescope).

---

## 🚀 Tecnologias Utilizadas
- **[Laravel](https://laravel.com/)** - Framework principal
- **[PHP](https://www.php.net/)** - Linguagem backend
- **[MySQL](https://www.mysql.com/)** - Banco de dados
- **[Docker](https://www.docker.com/)** - Ambiente de desenvolvimento isolado
- **[Laravel Telescope](https://laravel.com/docs/12.x/telescope)** - Monitoramento e Logging
- **Mailable** - Envio de e-mails
- **Queue (Fila de Jobs)** - Processamento assíncrono
- **Autenticação Personalizada** - Controle de usuários sem Laravel Breeze
- **Validação** - Segurança e integridade dos dados
- **CRUD Completo** - Gestão de notas

---

## 📦 Instalação
### 🔹 Clonar o repositório
```bash
git clone https://github.com/seu-usuario/laravel-notes.git
cd laravel-notes
```

### 🔹 Configurar o ambiente
```bash
cp .env.example .env
```
Ajuste o `.env` com as credenciais do banco de dados e configurações necessárias.

### 🔹 Subir o ambiente com Docker
```bash
docker-compose up -d --build
```
[Link para a documentação do Docker](https://www.docker.com/)

### 🔹 Instalar dependências
```bash
composer install
npm install && npm run dev
```

### 🔹 Gerar chave de aplicação
```bash
php artisan key:generate
```

### 🔹 Rodar as migrações
```bash
php artisan migrate --seed
```

---

## ⚙️ Funcionalidades
### ✅ CRUD de Notas
Gerenciamento de notas com criação, edição, visualização e exclusão.

### 🔒 Autenticação Personalizada
Sistema de login e registro sem o uso do Laravel Breeze.

### ✉️ Envio de E-mails (Mailable)
Envio assíncrono de e-mails com filas configuradas.

### 🔄 Queue e Jobs
Processamento de tarefas demoradas, como envio de e-mails, de forma assíncrona.

### 📊 Monitoramento e Logging
Utilização do **[Laravel Telescope](https://laravel.com/docs/12.x/telescope)** para visualizar requisições, logs, jobs, eventos e muito mais.

### 🐳 Docker
O projeto pode ser facilmente rodado em containers com Docker e Docker Compose. [Saiba mais](https://www.docker.com/)

---

## 🚀 Como Rodar o Projeto
Para rodar a aplicação e processar filas:
```bash
docker-compose up -d
php artisan queue:work
```
Acesse o sistema em [http://localhost](http://localhost)

Para acessar o Laravel Telescope:
```bash
php artisan telescope:install
php artisan migrate
```
Acesse: [http://localhost/telescope](http://localhost/telescope)

---

## 📄 Licença
Este projeto é open-source e está sob a licença MIT.

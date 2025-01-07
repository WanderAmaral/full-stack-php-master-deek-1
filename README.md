Código-fonte das lives sobre [Full Stack PHP Master Week]().<br>

## Requisitos

* PHP 8.2 ou superior - Conferir a versão: php -v
* Composer - Conferir a instalação: composer --version
* Node.js 20 ou superior - Conferir a versão: node -v
* GIT - Conferir a instalação: git -v

## Como rodar o projeto baixado

## Sequencia para criar o projeto
Criar o projeto com Laravel
```
composer create-project laravel/laravel .
```

Iniciar o projeto criado com Laravel
```
php artisan serve
```

Acessar o conteúdo padrão do Laravel.
```
http://127.0.0.1:8000
```

Instalar as dependências do Node.js.
```
npm install
```

Executar as blibliotecas Node.js.
```
npm run dev
```

Instalar o framework Bootstrap.
```
npm i --save bootstrap @popperjs/core
```

Instalar o sass.
```
npm i --save-dev sass
```

## Como usar o GitHub
Inicializar um novo repositorio GIT.
´´´
git init
´´´

Adicionar todos os arquivos modificados na área de preparação.
´´´
git add .
´´´

Commit registra as alterações feitas nos arquivos que foram adicionados na área de preparação.
´´´
git commit -m "Base do projeto"
´´´

Verificar em qual branch está.
´´´
git branch
´´´

Renomear a branch atual no GIT para main.
´´´
git branch -M main
´´´

Adicionar um repositório remoto ao repositório local.
´´´
git remote add origin https://github.com/celkecursos/full-stack-php-master-deek-1.git
´´´

Enviar os commits locais para um repositório remoto.
´´´
git push -u origin main
´´´

Remover o arquivo do cache do GIT.
´´´
git rm --cached db.sqlite3
´´´

Remover o diretório do cache do GIT.
´´´
git rm --cached -r admin/__pycache__/
´´´
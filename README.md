Código-fonte das lives sobre [Full Stack PHP Master Week]().<br>

## Requisitos

* PHP 8.2 ou superior - Conferir a versão: php -v
* Composer - Conferir a instalação: composer --version
* Node.js 20 ou superior - Conferir a versão: node -v
* GIT - Conferir a instalação: git -v

## Como rodar o projeto baixado

Baixar o projeto do GitHub.
```
git clone https://github.com/celkecursos/full-stack-php-master-deek-1.git .
```

Duplicar o arquivo ".env.example" e renomear para ".env".<br>
Alterar no arquivo ".env" as credenciais do banco de dados.<br>

Instalar as dependências do PHP.
```
composer install
```

Gerar a chave no arquivo ".env" - APP_KEY.
```
php artisan key:generate
```

Instalar as dependências do Node.js.
```
npm install
```

Executar as migration para criar a tabela no banco de dados.
```
php artisan migrate
```

Executar as seed para cadastrar registros de testes no BD.
```
php artisan db:seed
```

Iniciar o projeto criado com Laravel.
```
php artisan serve
```

Executar as blibliotecas Node.js.
```
npm run dev
```

Acessar o conteúdo criado com Laravel.
```
http://127.0.0.1:8000
```

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

Executar as migration para criar a tabela no banco de dados.
```
php artisan migrate
```

Criar a migration para criar a tabela no banco de dados.
```
php artisan make:migration create_name_table
```
```
php artisan make:migration create_homes_table
```

Criar Models.
```
php artisan make:model NomeDaModel
```
```
php artisan make:model Home
```

Criar Seed para cadastrar registros de testes.
```
php artisan make:seeder NomeSeeder
```
```
php artisan make:seeder HomeSeeder
```

Executar as seed para cadastrar registros de testes no BD.
```
php artisan db:seed
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

## Conectar o PC ao servidor com SSH

Criar chave SSH (chave pública e privada).
```
ssh-keygen -t rsa -b 4096 -C "seu-email@exemplo.com"
```
```
ssh-keygen -t rsa -b 4096 -C "cesar@celke.com.br"
```

Local que é criado a chave pública.
```
C:\Users\SeuUsuario\.ssh\
```
```
C:\Users\cesar/.ssh/
```

Exibir o conteúdo da chave pública.
```
cat ~/.ssh/id_rsa.pub
```

Acessar o servidor com SSH.
```
ssh root@93.127.210.72
```

Usar o terminal conectado ao servidor para listar os arquivo.
```
cd /home/user/htdocs/srv566492.hstgr.cloud
```

Listar os arquivo.
```
ls
```

Remover os arquivos do servidor.
```
rm -rf /home/user/htdocs/endereco-do-servidor/{*,.*}
```
```
rm -rf /home/user/htdocs/srv566492.hstgr.cloud/{*,.*}
```

## Conectar Servidor ao GitHub.

Gerar a chave SSH no servidor.
```
ssh-keygen -t rsa -b 4096 -C "cesar@celke.com.br"
```

Imprimir a chave pública gerada.
```
cat ~/.ssh/id_rsa.pub
```

No GitHub, vá para Settings (Configurações) do seu repositório ou da sua conta, em seguida, vá para SSH and GPG keys e clique em New SSH key.<br>
Cole a chave pública no campo fornecido e salve.<br>

Verificar a conexão com o GitHub.
```
ssh -T git@github.com
```

Se gerar o erro "The authenticity of host 'github.com (xx.xxx.xx.xxx)' can't be established.".<br>
Isso é uma medida de segurança para evitar ataques de "man-in-the-middle".<br>
Necessário adicionar a chave do host do GitHub ao arquivo de known_hosts do seu servidor.<br>

Digite yes quando for solicitado.
```
Are you sure you want to continue connecting (yes/no/[fingerprint])? yes
```

Verificar a conexão novamente.
```
ssh -T git@github.com
```

Mensagem de conexão realizada com sucesso.<br>
Hi nome-usuario! You've successfully authenticated, but GitHub does not provide shell access.<br>

Usar o terminal conectado ao servidor. Primeiro acessar o diretório do projeto no servidor.
```
cd /home/user/htdocs/srv566492.hstgr.cloud
```

Baixar os arquivos do Git.
```
git clone <repository_url> .
```

Duplicar o arquivo ".env.example" e renomear para ".env".
```
cp .env.example .env
```

Abrir o arquivo ".env" e alterar as variaveis de ambiente.
```
nano .env
```

Ctrl + O e enter para salvar.<br>
Ctrl + X para sair.<br>

Alterar o valor das variaveis de ambiente.
```
APP_NAME=Celke
APP_ENV=production
APP_KEY=
APP_DEBUG=false
APP_TIMEZONE=America/Sao_Paulo
APP_URL=https://srv566492.hstgr.cloud 
```

Criar a base de dados MySQL.<br>

Alterar as variaveis de conexão com banco de dados.
```
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=celke
# DB_USERNAME=root
# DB_PASSWORD=
```

Instalar as dependências do PHP.
```
composer install
```

Instalar as dependências do Node.js. Necessário ter o Node.js instalado no servidor.
```
npm run build
```

Quando gerar o erro "sh: 1: vite: not found", necessário instalar o Vite. Executar e Etapa 1, Etapa 2 e Etapa 3.
```
npm install
```

Etapa 1 - Verificar se o Vite está instalado.
```
npx vite --version
```

Etapa 2 - Gerar a build. Compilar o código-fonte do projeto.
```
npm run build
```

Etapa 3 - Remover o diretório "node_modules".

Alterar a propriedade do diretório.
```
sudo chown -R user:user /home/user/htdocs/srv566492.hstgr.cloud
```

Reiniciar Nginx.
```
sudo systemctl restart nginx
```

Limpar cache.
```
php artisan config:clear
```

Gerar a chave.
```
php artisan key:generate
```

Executar as migration para criar a base de dados e as tabela.
```
php artisan migrate
```

Cadastrar registro de teste.
```
php artisan db:seed
```

## Instalar o Node.js no servidor.

Atualizar a lista de pacotes disponíveis.
```
sudo apt update
```

Adicionar no repositório o Node.js 20.x.
```
curl -fsSL https://deb.nodesource.com/setup_20.x | sudo -E bash -
```

Instalar o Node.js. -y automatizar a instalação de pacotes sem solicitar a confirmação manual do usuário.
```
sudo apt install -y nodejs
```

Reiniciar Nginx.
```
sudo systemctl restart nginx
```

Usar o terminal conectado ao servidor. Acessar o diretório do projeto no servidor.
```
cd /home/user/htdocs/srv566492.hstgr.cloud
```

Limpar cache.
```
php artisan config:clear
```

Remover o Node.js.
```
sudo apt remove nodejs
```

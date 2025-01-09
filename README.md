# Teste-Pr-tico---sistemas-de-cadastro
Sistema de cadastro de usuarios (PHP, HTML, CSS, JavaScript e MySQL) - Abimael de Menezes Pedro



Sistema CRUD de Usuários

Este é um sistema simples de CRUD (Criar, Ler, Atualizar, Deletar) para gerenciar usuários, construído com PHP e MySQL.

 Pré-requisitos

- [XAMPP](https://www.apachefriends.org/pt_br/index.html) (inclui Apache, MySQL e PHP)  
- Um navegador web  

Instruções de Instalação  

1. Instale o XAMPP  
2. Inicie o Apache e MySQL no painel de controle do XAMPP  
3. Crie o banco de dados:  
   - Acesse `http://localhost/phpmyadmin`  
   - Crie um novo banco de dados chamado `cadastro_usuarios`  
   - Importe o arquivo `banco.sql` fornecido no projeto  
4. Configure o Projeto:  
   - Baixe o projeto [clicando aqui](https://example.com/download/projeto.zip)  
   - Extraia os arquivos para a pasta `htdocs` do XAMPP (geralmente `C:\xampp\htdocs` no Windows)  
5. Execute o Projeto:  
   - Abra seu navegador e acesse `http://localhost/nome_da_pasta_do_projeto`  

 Uso  

- Para adicionar um usuário: preencha o formulário e clique em "Cadastrar"  
- Para editar: clique em "Editar", faça as alterações e clique em "Salvar Alterações"  
- Para excluir: clique em "Excluir" ao lado das informações do usuário  

 Solução de Problemas  

- Se encontrar erro de conexão com o banco de dados, verifique se o MySQL está rodando e se os detalhes de conexão em `database.php` estão corretos  
- Se a página não carregar, verifique se o Apache está rodando no XAMPP  

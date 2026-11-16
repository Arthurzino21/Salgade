Salgadê:
Sistema web de e-commerce para venda de salgados, bebidas e lanches.

Informações Acadêmicas:
Alunos: Arthur Ferreira e Moisés
Turma: EI31
Matéria: Programação Web II

Tecnologias
PHP, MySQL, HTML5, CSS3, JavaScript, XAMPP, phpMyAdmin

Funcionalidades:
Cadastro e login de clientes
Catálogo de produtos
Carrinho de compras
Finalização de compra (Pix, Cartão, Dinheiro)
Registro de vendas no banco de dados

Como Rodar:
Suba a pasta para htdocs do XAMPP e inicie Apache + MySQL.
No phpMyAdmin, execute o script banco/banco_salgade.sql para criar o banco e as tabelas.
Confira as credenciais em arq/cons.php.
Acesse index.php no navegador.


Envio de e-mail (Opção B - PHPMailer):
Ao finalizar a compra, o cliente recebe o comprovante por e-mail (cadastro agora pede o e-mail).
1. Instale o Composer (getcomposer.org/download) apontando para C:\xampp\php\php.exe e confirme a extensão openssl no php.ini.
2. No PowerShell, dentro da pasta do projeto (onde fica o index.php): composer require phpmailer/phpmailer
3. Gere uma senha de app no Gmail (verificação em duas etapas ativa): myaccount.google.com/apppasswords
4. Copie xampp-config/smtp.php para C:\xampp\config\smtp.php e preencha e-mail e senha de app.
5. Banco já existente: execute o ALTER TABLE comentado no final de banco/banco_salgade.sql.
Se o cliente não tiver e-mail cadastrado ou o envio falhar, a compra é concluída normalmente (o erro vai para o log do PHP).

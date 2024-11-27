# formulario-backend

para fazer meu backend eu utilizei XAMPP e PHP
depois de baixar o XAMPP precisa ligar o Apache e o MySQL
criei meu banco de dados em localhost/phpmyadmin, coloquei o nome como feedback_db
dentro do meu banco de dados fiz uma estrutura de tabela com id, firstname, lastname, email, telefone, data_nascimento, gender, feedback, avaliacao e data_envio
antes de tudo eu coloquei meu trabalho em htdocs na pasta do XAMPP
criei meu php com base no html
e por fim eu tive que modificar o html para captar o php como:
<form action="enviar.php" method="POST">

no browser para entrar no arquivo basta colocar localhost/e o nome do arquivo que é formulario
então preencha o formulario e envie

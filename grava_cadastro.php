<?php
// trazendo as informações digitadas pelo usuário no formulário através da variável superglobal $_POST
$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$datavoto = new Datetime();

//conexão com o banco de dados
include_once 'conexao.php';

//nome do banco: votacao
/*estrutura da tabela: cadastro
codigo smallint auto-increment, 
nome varchar(80) not null,
email varchar(80) not null primary key,
senha varchar(60) not null,      criptografar
datavoto datetime;
*/

//criar uma string sql  $sql


//executar o comando


//voltar para o login


?>
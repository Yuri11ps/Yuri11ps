<?php 
//Criar as constantes com as credencias de acesso ao banco de dados
define('localhost', 'mysql');
define('USUARIO', 'root');
define('SENHA', 'ifbaiano2023');
define('DBNAME', 'sistema');

//Criar a conexão com banco de dados usando o PDO e a porta do banco de dados
//Utilizar o Try/Catch para verificar a conexão.
try {

    $conexao = new pdo('mysql:localhost=' . localhost . ';dbname=' .
                                     DBNAME, USUARIO, SENHA);
} catch (PDOException $e) {
    echo "Erro: Conexão com banco de dados não foi realizada com sucesso.
     Erro gerado " . $e->getMessage();
}


?>
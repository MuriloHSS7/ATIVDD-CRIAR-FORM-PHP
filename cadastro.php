<?php
    /*
    EXEMPLO:
    CONEXÃO COM O POST NA HORA DE ENVIAR PARA O BANCO DE DADOS

    <?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'meubdnew';

try {
    
    $pdo = new PDO("mysql:host=$host", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->exec("CREATE DATABASE IF NOT EXISTS $dbname");
    echo "criado com sucesso! Banco de dados -| $dbname |-<br>";

    $pdo->exec("USE $dbname");

    $sql = "CREATE TABLE IF NOT EXISTS MINHATABELA (
        id INT(9) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(50) NOT NULL,
        sobrenome VARCHAR(50) NOT NULL,
        cpf VARCHAR(14) NOT NULL UNIQUE,
        endereco VARCHAR(100),
        cidade VARCHAR(50)
    )";
    $pdo->exec($sql);
    echo "criada com sucesso! Tabela -| MINHATABELA |-<br>";

    $sql = "INSERT INTO MINHATABELA (id, nome, sobrenome, cpf, endereco, cidade) 
            VALUES
            ('123455789', 'João', 'Joãozinho', '123.456.779-10', 'Rua X, Casa 001', 'Brasília'),
            ('765432100', 'Maria', 'Mariazinha', '109.876.543-21', 'Rua Y, Casa 123', 'Brasília'),
            ('102035555', 'Fulano', 'Fulaninho', '555.444.333-22', 'Rua Z, Casa 321', 'Brasília')";
    $pdo->exec($sql);
    echo "Dados inseridos na tabela com sucesso!<br>";

} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}

$pdo = null;
?>

*/


?>
<?php

    $pdo = new PDO('mysql:host=localhost;dbname=users','root','');

        if(isset($_POST['register'])) {
            $nome = $_POST['nome'];
            $contact = $_POST['contact'];
            $query = "INSERT INTO agenda VALUES (null,?,?)";
            $sql = $pdo->prepare($query);
            $sql->execute(array($nome,$contact));
            header("Location: index.php");
}


if(isset($_GET['excluir'])){
    $id = (int) $_GET['excluir'];
    $pdo->exec("DELETE FROM agenda WHERE id = $id");
}

$pdo = new PDO('mysql:host=localhost;dbname=users','root','');
$sql = $pdo->prepare("SELECT * FROM agenda");
$sql->execute();
$infor = $sql->fetchAll();
<?php
include_once "Templates/header.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $current;

    foreach($infor as $value){
        if($value['id'] == $id){
            $current = $value;
        }
    }
}
?>

<div class="container">
    <h1>Usuário Cadastrado</h1>
    <br>
    <h3>Name: <?=$current['nome']?></h3>
    <h3>Contact: <?=$current['contact']?></h3>
</div><!--container-->


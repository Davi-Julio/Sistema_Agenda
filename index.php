<?php

include_once "Templates/header.php";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agenda</title>
</head>

<body>

  <table id="table" class="table table-striped">
    <tr>
      <th>ID</th>
      <th>NAME</th>
      <th>CONTACT</th>
      <th>FUNCTIONS</th>
    </tr>

    <?php
    foreach($infor as $value){
        ?>
    <tr>
      <td><?=$value['id']?></td>
      <td><?=$value['nome']?></td>
      <td><?=$value['contact']?></td>
      <td class="functions">
        <a href="exibir.php?id=<?=$value['id']?>"><img src="<?php $BASE_URL ?>Imgs/exibir.png" alt=""></a>
        <a href="editar.php?id=<?=$value['id']?>"><img src="<?php $BASE_URL ?>Imgs/editar.png" alt=""></a>
        <a href="?excluir=<?=$value['id']?>"><img src="<?php $BASE_URL ?>Imgs/excluir.png" alt=""></a>
      </td>
    </tr>

    <?php
    }

    ?>
  </table>

</body>

</html>
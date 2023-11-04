<?php 

include_once "Templates/header.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Contato</title>
</head>
<body>

<form class="form" action="" method="post">
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Name:</label>
  <input required type="text" name="nome" class="form-control" id="formGroupExampleInput" placeholder="Name">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Contact:</label>
  <input required type="number" name="contact" class="form-control" id="formGroupExampleInput2" placeholder="Contact">
</div>
<button type="submit" id="btn" name="register" class="btn btn-dark">Register</button>
</form><!--form-->
    
</body>
</html>
<?php

include_once "Templates/header.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = $pdo->prepare("SELECT * FROM agenda WHERE id = :id ");
    $sql->bindParam(":id", $id);
    $sql->execute();
    $user = $sql->fetch(PDO::FETCH_ASSOC);

    if ($user) {
?>
        <form class="form" action="" method="post">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Name:</label>
                <input type="hidden" name="id" value="<?php echo $user['id']?>">
                <input required type="text" name="nome" value="<?php echo $user['nome']?>" class="form-control" id="formGroupExampleInput" placeholder="Name">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Contact:</label>
                <input required type="number" name="contact" value="<?php echo $user['contact']?>" class="form-control" id="formGroupExampleInput2" placeholder="Contact">
            </div>
            <button type="submit" class="btn btn-dark">Update</button>
        </form><!--form-->


<?php
    }else{
        echo 'user Not found';
    }
}else{
    echo 'user not select';
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $contact = $_POST['contact'];

    $sql = $pdo->prepare("UPDATE agenda SET nome = :nome, contact = :contact WHERE id = :id");
    $sql->bindParam(":nome", $nome);
    $sql->bindParam(":contact", $contact);
    $sql->bindParam(":id", $id);

    try {
        $sql->execute();
        header("Location: index.php");
    } catch (PDOException $e) {
        echo "Erro ao atulizar o usuário";
    }
}
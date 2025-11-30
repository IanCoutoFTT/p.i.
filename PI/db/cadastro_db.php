<?php

include '/back/conecta.php'; 
$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$reclame = $_POST['reclame'];

    $sql= "INSERT INTO usuario(nome, email, assunto, reclame)
    VALUES ('$nome', '$email', '$email', '$assunto')";

    if ($conn->query($sql)===True) {
        echo "Dados inseridos com sucesso!"; 
    }
    else{ 
        echo "Houve alguns problemas para salvar" .$slq. $conn->error;
    }
$conn->close();
?>
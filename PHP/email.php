<?php 

    $emailTo = "leo.leonardo@example.br";
    $subject = "Trabalho da Faculdade";
    $body = "Esse trabalho esta muito dificil";
    $headers = "From: leo3@teste.com";
    
    if (mail($emailTo, $subject, $body, $headers)) {
        echo "Email enviado com sucesso";
    } else {
        echo "Email nao enviado";
    }

?>
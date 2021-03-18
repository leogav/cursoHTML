<?php 
//saber se o nome do usuario esta na array

     if ($_POST) {
        $nomes = array("Leonardo", "Marcos", "Pedro", "Paulo", "Gustavo");
        $vdd = false;
        foreach ($nomes as $value) {
            if ($value == $_POST['name']) {
                $vdd = true;
            }
        }
        if ($vdd) {
            echo "Seja bem vindx ".$_POST['name'];
        } else {
            echo "Ainda não te conheço";
        }
    } 

?>

<head><title>Teste</title></head>
<p>Qual o seu nome?</p>

<form method="post">
    <input name="name" type="text">
    <input type="submit" value="Submeter">
</form>
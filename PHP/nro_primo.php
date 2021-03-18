<?php 

    //echo "Oi more ".$_GET["name"]."!";
    //print($_GET);
    if(is_numeric($_GET["number"]) && $_GET["number"] > 0 && $_GET["number"] == round($_GET["number"], 0)) {
        $i = 2;
        $ehPrimo = true;
        
        while ($i < $_GET["number"]) {
            if ($_GET["number"] % $i ==0) {
                //Numero nao eh primo
                $ehPrimo = false;
            }
            $i++;
        }
        if ($ehPrimo) {
            echo "<p>".$_GET["number"]." é um numero primo</p>";
        } else {
            echo "<p>".$_GET["number"]." não é um numero primo</p>";
        }
    } else {
        echo "O número digitado nao é um inteiro";
    }

?>
<head><title>Teste</title></head>
<p>Insira um numero inteiro</p>

<form>
    <input name="number" type="text">
    <input type="submit" value="Ir!">
</form>
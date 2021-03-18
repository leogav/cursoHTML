<?php
 //formulario para recebimento de email
 
	$error = "";
    $successMessage = "";
    if ($_POST) {
        if(!$_POST['email']) {
            $error .= "É necessário digitar um email.<br>";
        }
        if(!$_POST['subject']) {
            $error .= "É necessário digitar um assunto.<br>";
        }
        if(!$_POST['content']) {
            $error .= "É necessário digitar um texto.<br>";
        }
        if($_POST['email'] && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
            $error .= "Endereço de email inválido.";
        }
        if ($error != "") {
            $error = '<div class="alert alert-danger" role="alert"><strong>Não foi possivel enviar: </strong><br>'.$error.'</div>';
        } else {
            $emailTo = "leo@teste.com";
            $subject = $_POST['subject'];
            $content = $_POST['content'];
            $headers = "From: ".$_POST['email'];
            
            if (mail($emailTo, $subject, $content, $headers)) {
                $successMessage = '<div class="alert alert-success" role="alert">Mensagem envida, em breve entraremos em contato!</div>';
            } else {
                $error = '<div class="alert alert-danger" role="alert">Desculpe, sua mensagem não pode ser enviada, tente novamente!<br></div>';
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Contato</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container">
        <h1>Entre em contato!</h1>
        <div id="error"><? echo $error.$successMessage; ?></div>
            
        <form method="post">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Digite seu email">
            <small id="emailHelp" class="form-text text-muted">Nunca compartilharemos seu e-mail com mais ninguém.</small>
          </div>
          <div class="form-group">
            <label for="subject">Assunto</label>
            <input type="text" class="form-control" id="subject" name="subject">
          </div>
    
          <div class="form-group">
            <label for="content">O que gostaria de saber?</label>
            <textarea class="form-control" id="content" name="content" rows="3"></textarea>
          </div>
          
          <button type="submit" id="submit" class="btn btn-primary">Enviar</button>
        </form>
        
    </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  
    <script type="text/javascript"> 
    
        $("form").submit(function (e) {

            var error = "";
            if ($("#email").val() == "") {
                error += "Digite um email valido<br>";
            }
            if ($("#subject").val() == "") {
                error += "Digite um assunto valido<br>";
            }
            if ($("#content").val() == "") {
                error += "Digite um texto valido";
            }
            if (error != "") {
                $("#error").html('<div class="alert alert-danger" role="alert"><strong>Não foi possivel enviar: </strong><br>'+error+'</div>');
                return false;
            } else {
                return true;
            }
        });
    
    </script>
  
  </body>
</html>
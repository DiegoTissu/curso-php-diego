<html>
<bory>

<?php
/* VALIDAÇÕES
    Funções (filter_input - Filter_var)
    FILTER_VALIDATE_INT
    FILTER_VALIDATE_EMAIL
    FILTER_VALIDATE_FLOAT
    FILTER_VALIDATE_IP
    FILTER_VALIDATE_URL */

if(isset($_POST['enviar-formulario'])):
  //array de erros
$erros = array();

//validaçoes
if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
    $erros[] = "idade precisa ser um inteiro";
endif;
if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
    $erros[] = "Email inválido";
endif;
if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
    $erros[] = "Peso precisa ser um float";
endif;
if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
    $erros[] = "IP inválido";
endif;
if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):
    $erros[] = "URL inválido";
endif;

//Imprimindo mensagens
if(!empty($erros)):
    foreach($erros as $erro):
      echo "<li> $erro <li>";
    endforeach;
else:
    echo "Parabéns, seus dados estão corretos!";
endif;

endif; 
?>

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <form action="<?php echo $_server['PHP_SELF']; ?>" method="POST">
        <div class="form-group">
          <div class='col-lg-3 col-xs-12'>
            <div class="form-group">
            <input type="text" class="form-control" placeholder="Idade" name="idade">
          </div>

            <div class="form-group">
            <input type="text" class="form-control" placeholder="Email" name="email">
        </div>

          <div class="form-group">
          <input type="text" class="form-control" placeholder="Peso" name="peso">
      </div>

        <div class="form-group">
        <input type="text" class="form-control" placeholder="IP" name="ip">
    </div>
  
      <div class="form-group">
      <input type="text" class="form-control" placeholder="URL" name="url">
  </div>
  <div class="form-group">
            <button type="submit" class="btn btn-primary" name="enviar-formulario">Enviar</button>
          </div>
        </div>
      </form>

</bory>
</html>


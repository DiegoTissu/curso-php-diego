<html>
<body>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!-- Optional JavaScript -->
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<!-- Código PHP -->
<?php
if(isset($_post['enviar-formulario'])):
    $formatosPermitidos = array("jpg", "jpeg", "png", "gif");
    $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

    if(in_array(extensao, $formatosPermitidos)):
        $pasta = "arquivos/";
        $temporario = $_FILES['arquivo']['tmp_name'];
        $novoName = iniqid().".$extensao";

    if(move_uploaded_file($temporario, $pasta.$novoNome)):
        $mensagem = "Upload feito com sucesso!";
    else:
        $mensagem = "Erro, não foi possivel fazer o upload!";
    endif;
else:
    $mensagem = "Formato inválido";
endif;

echo $mensagem;

endif;
?>

<!-- Código HTML -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"
    enctype="multipart/form-data">

    <input type="file" name="arquivo"><br>
    <input type="submit" name="enviar-formulario">
</form>

</body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Exercício 3</title>
  </head>
  <body class="container">
    <h1>Verificação</h1>

    <?php 
        $valor = $_POST['valor'];
        $valor_double = doubleval($valor);
        if ($valor_double > 10){
            echo "O valor é maior que 10!!!";
        }
        else if($valor1_double < 10){
            echo "O valor é menor que 10!!!";
        }
        else{
            echo "O valor é igual a 10!!!";
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>
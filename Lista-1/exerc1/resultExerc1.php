<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Resultado</title>
  </head>
  <body class="container">
    <h1>Troco</h1>

    <?php
        $valorPago =$_POST['valorPago'];
        $valorProduto =$_POST['valorProduto'];
        if ($valorPago >= $valorProduto){
            echo "troco: ".($valorPago - $valorProduto);
            echo "<br/>";
        }
        else{
            echo "O valor não é suficiente";
        }
        
    ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
</body>
</html>

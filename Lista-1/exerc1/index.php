<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Exercício 1</title>
  </head>
  <body>
    <h1>Cálculo Troco</h1>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <form method="post" action="resultExerc1.php" class="container"> 
        <div class="row">     
            <div class="col">
                <label for="valorPago" class="label-control">Valor pago: </label>
                <input type="number" name="valorPago" id="valorPago" class="form-control"/>
            </div>
            <div class="col">
                <label for="valorProduto" class="label-control">Valor do produto: </label>
                <input type="number" name="valorProduto" id="valorProduto" class="form-control"/>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-danger">Calcular</button>
            </div>
        </div>

    </form>

  </body>
</html>
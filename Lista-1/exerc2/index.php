<!doctype html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Exercício 2</title>
</head>
<body>

    <h1>Cálculo Kg</h1>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <form method="post" action="resultExerc2.php">
        <div class="row">
            <div class="col">
                <label for="valorKg" class="label-control">Valor do Kg: </label>
                <input type="float" name="valorKg" id="valorKg" class="form-control" />
            </div>
            <div class="col">
                <label for="qtKg" class="label-control">Quantidade de Kg consumida: </label>
                <input type="float" name="qtKg" id="qtKg" class="form-control" />
            </div>
            <div class="row mt-5">
                <div class="col">
                    <button type="submit" class="btn btn-danger">Calcular</button>
                </div>
            </div>
        </div>

    </form>

</body>
</html>
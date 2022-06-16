<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/css/view-Produto.css">
    <link href="../../../public/css/global.css" rel="stylesheet">

    !-- NAVBAR E FOOTER -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../public/css/style_navbar.css" type="text/css">
    <link rel="stylesheet" href="../../../public/css/style_footer.css" type="text/css">

    <title>Banhato's Pizza - Nome do Produto</title>
</head>

<body>

<?php include 'app/views/includes/navbar.php';?>

    <?php foreach ($produto as $prod):?>
        <div class="container card-container">
            <div class="row">
                <div class="col-md-12">
                    <center>
                        <div class="card text-center">
                            <img src="../../../public/img/<?=$prod->imagem?>.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?=$prod->nome?></h5>
                                <p class="card-text">R$<?=$prod->preco?>,00</p>
                                <p class="card-text"><?=$prod->descricao?></p>
                                <a href="#" class="btn btn-card">Pedir</a>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <div class="container info">
            <div class="row">
                <div class="col-md-12">
                    <h3>
                        Informações Úteis
                    </h3>
                    <hr>
                    <p><?=$prod->informacoesUteis?></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    
    <?php include 'app/views/includes/footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
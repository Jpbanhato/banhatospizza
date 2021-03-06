<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/css/produtos.css">
    <link href="../../../public/css/global.css" rel="stylesheet">

    <!-- NAVBAR E FOOTER -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../public/css/style_navbar.css" type="text/css">

    <link rel="stylesheet" href="../../../public/css/style_footer.css" type="text/css">

    <title>Banhato's Pizza - Conheça sabores inesquecíveis</title>
</head>

<body>

    <?php include 'app/views/includes/navbar.php';?>

    <div class="main">
        <div class="indicacao">
            <h1>Produtos</h1>
            <nav class="navbar nav">
                <div class="container-fluid cont">
                    <form class="d-flex justify-content-end bar-search" action="/produtos/search" method="get">
                        <input class="form-control me-2" type="search" placeholder="Nome do produto..."
                            aria-label="Search" name="search">
                        <button class="btn btn-primary bottom-search btpesquisa" type="submit">Pesquisar</button>
                    </form>
                </div>
            </nav>
        </div>
        </nav>
    </div>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <?php foreach ($produtos as $produto): ?>
            <div class="col">
                <a href="/produto?id=<?=$produto->id?>">
                    <div class="card prod">
                        <img src="../../../public\img\<?=$produto->imagem?>.jpg" class="card-img-top" alt="...">
                        <div class="card-body prod-body">
                            <div class="botao <?=$produto->nomeCategoria?>">
                                <a href="#"><?=$produto->nomeCategoria?></a>
                            </div>
                            <h1 class="card-title"><?=$produto->nome?></h1>
                            <p class="card-text">R$<?=$produto->preco?>,00</p>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
        <?php require 'app/views/includes/pagination.php' ?>
    </div>
    <?php include 'app/views/includes/footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
<html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7759e3de33.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../public/css/dahboard-adm-style.css">

    <!-- SIDEBAR -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../public/css/sidebar.css" type="text/css">

</head>

<body>

    <?php include 'app/views/includes/sidebar-adm.php';?>

    <div class="jumbotron text-center">
        <h1>Bem-vindo,<br> Bernardo Ortiz</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card text-center">
                    <i class="fa-solid fa-circle-user"></i>
                    <div class="card-body">
                        <h5 class="card-title">Gerenciar Usuários</h5>
                        <a href="/admin/usuarios" class="btn btn-card">Abrir</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-center">
                    <i class="fa-solid fa-clipboard-list"></i>
                    <div class="card-body">
                        <h5 class="card-title">Gerenciar Categorias</h5>
                        <a href="/admin/categorias" class="btn btn-card">Abrir</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <i class="fa-solid fa-boxes-stacked"></i>
                    <div class="card-body">
                        <h5 class="card-title">Gerenciar Produtos</h5>
                        <a href="/admin/produtos" class="btn btn-card">Abrir</a>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <div class="card-body">
                            <form action="/logout" method="post">
                                <h5 class="card-title">Encerrar sessão</h5>
                                <button type="submit" class="btn btn-card logout">Sair</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>

</body>

</html>
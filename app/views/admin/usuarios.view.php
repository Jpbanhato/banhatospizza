<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/css/global.css">
    <link rel="stylesheet" href="../../../public/css/adm-usuarios.css">


    <!-- SIDEBAR -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="../../../public/css/sidebar.css" type="text/css">

    <title>Banhato's Pizza - Usuários</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <?php require "app/views/includes/sidebar-adm.php"; ?>

            <div class="container">

                <div class="user-header">
                    <h1>Usuários</h1>
                </div>

                <nav class="navbar navbar-light bg-light nav-search">
                    <div class="container-fluid bottom-add d-flex">
                        <form class="d-flex justify-content-end bar-search" action="/admin/usuarios/search"
                            method="get">
                            <input class="form-control me-2" type="search" placeholder="Pesquisar..."
                                aria-label="Search" name="search">
                            <button class="btn btn-primary bottom-search" type="submit">Pesquisar</button>
                        </form>

                        <button type="button" class="btn btn-success btn-add" data-bs-toggle="modal"
                            data-bs-target="#AddUser">Adicionar</button>
                    </div>
                </nav>

                <div class="user-table">
                    <table class="table table-hover justify-content-center align-items-center">

                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col"><b>Nome do Usuário</b></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($usuarios as $usuario):?>
                            <tr>
                                <td scope="row justify-content-center align-items-center"><?=$usuario->id?></td>
                                <td class="justify-content-start name-itens-table"><?=$usuario->nome?></td>
                                <td class="d-flex justify-content-end colum-bottons-table">
                                    <div class="d-grid gap-2 d-md-block">
                                        <!-- Button modal editar usuario -->
                                        <button type="button" class="btn btn-primary bottom-options"
                                            data-bs-toggle="modal" data-bs-target="#EditUser-<?=$usuario->id?>">
                                            &#128393;
                                        </button>

                                        <!-- Button modal visualizar usuario -->
                                        <button type="button" class="btn btn-secondary bottom-options"
                                            data-bs-toggle="modal" data-bs-target="#ViewUser-<?=$usuario->id?>">
                                            &#8981;
                                        </button>

                                        <!-- Button modal exclui usuario-->
                                        <button type="button" class="btn btn-danger bottom-options"
                                            data-bs-toggle="modal" data-bs-target="#DeleteUser-<?=$usuario->id?>">
                                            &#9852;
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
                </div>

                <!-- Modal Adicionar Usuario -->
                <div class="modal fade" id="AddUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Adicionar Usuário</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <form action="/admin/usuarios/create" method="post" class="row g-3">
                                    <div class="col-md-8">
                                        <label for="inputNameAddUser" class="form-label">Nome</label>
                                        <input type="text" name="nome" class="form-control" id="inputNameAddUser"
                                            placeholder="Insira o nome do usuário">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputEmailAddUser" class="form-label">E-mail</label>
                                        <input type="text" name="email" class="form-control" id="inputEmailAddUser"
                                            placeholder="nome@dominio">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputPasswordAddUser" class="form-label">Senha</label>
                                        <input class="form-control" name="senha" id="inputPasswordAddUser"
                                            placeholder="Senha...">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger "
                                            data-bs-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-principal btn-add"
                                            style="color: #301506; background-color: #ecd393;">Adicionar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Editar Usuario -->
                <?php foreach ($usuarios as $usuario):?>
                <div class="modal fade" id="EditUser-<?=$usuario->id?>" data-bs-backdrop="static"
                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Editar Usuário</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <form action="/admin/usuarios/update" method="post" class="row g-3">
                                    <div class="col-md-8">
                                        <input type="hidden" name="id" value="<?=$usuario->id?>">
                                        <label for="inputNameEditUser" class="form-label">Nome</label>
                                        <input type="text" class="form-control" name="nome" id="inputNameEditUser"
                                            value="<?=$usuario->nome?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputEmailEditUser" class="form-label">E-mail</label>
                                        <input type="text" class="form-control" name="email" id="inputEmailEditUser"
                                            value="<?=$usuario->email?>">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputPasswordEditUser" class="form-label">Senha</label>
                                        <input class="form-control" name="senha" id="inputPasswordEditUser"
                                            value="<?=$usuario->senha?>">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-principal">Editar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>

                <!-- Modal Visualizar Usuario-->
                <?php foreach ($usuarios as $usuario):?>
                <div class="modal fade" id="ViewUser-<?=$usuario->id?>" data-bs-backdrop="static"
                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Visualizar Usuário</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <fieldset disabled>
                                    <form class="row g-3">
                                        <div class="col-md-8">
                                            <label for="ViewNameUser" class="form-label">Nome</label>
                                            <input type="text" class="form-control" id="ViewNameUser"
                                                placeholder="<?=$usuario->nome?>" readonly>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="ViewEmailUser" class="form-label">E-mail</label>
                                            <input type="text" class="form-control" id="ViewEmailUser"
                                                placeholder="<?=$usuario->email?>" readonly>
                                        </div>
                                        <div class="col-12">
                                            <label for="ViewPasswordUser" class="form-label">Senha</label>
                                            <input class="form-control" id="ViewPasswordUser"
                                                placeholder="<?=$usuario->senha?>" readonly>
                                        </div>
                                    </form>
                                </fieldset>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-principal" data-bs-dismiss="modal">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>


                <!-- Modal excluir Usuario-->
                <?php foreach ($usuarios as $usuario):?>
                <div class="modal fade" id="DeleteUser-<?=$usuario->id?>" data-bs-backdrop="static"
                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Excluir Usuario</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p class="text-center">Deseja mesmo excluir esse usuário?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-principal bottom-add"
                                    data-bs-dismiss="modal">Cancelar</button>
                                <form action="/admin/usuarios/delete" method="post">
                                    <input type="hidden" value="<?=$usuario->id?>" name="id">
                                    <button type="submit" class="btn btn-danger">Excluir</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            </div>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
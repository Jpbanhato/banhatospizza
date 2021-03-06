<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/css/global-category.css">
    <link rel="stylesheet" href="../../../public/css/adm-categorias.css">

    <!-- SIDEBAR -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="../../../public/css/sidebar.css" type="text/css">

    <title>Banhato's Pizza - Categorias</title>
  </head>

  <body>

    <div class="container-fluid">
      <div class="row flex-nowrap">
        <?php include 'app/views/includes/sidebar-adm.php';?>


        <div class="container">
          <div class="category-header">
            <h1>Categorias</h1>
          </div>

          <nav class="navbar navbar-light bg-light nav-search">
            <div class="container-fluid bottom-add d-flex">
              <form class="d-flex justify-content-end bar-search" method="get" action="/admin/categorias/result">
                <input class="form-control me-2" type="search" placeholder="Pesquisar..." aria-label="Search" name="pesquisa">
                <button class="btn btn-primary bottom-search" type="submit">Pesquisar</button>
              </form>

              <button type="button" class="btn btn-success btn-add" data-bs-toggle="modal" data-bs-target="#AddCategory">Adicionar</button>
            </div>
          </nav>

          <div class="category-table">
            <table class="table table-hover justify-content-center align-items-center">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col"><b>Nome da categoria</b></th>
                  <th></th>
                </tr>
              </thead>

              <tbody>
                <?php foreach ($categorias as $categoria) : ?>
                <tr>
                  <td scope="row justify-content-center align-items-center"><?= $categoria->id ?></td>
                  <td class="justify-content-start name-itens-table"><?= $categoria->nome ?></td>
                  <td class="d-flex justify-content-end colum-bottons-table">
                    <div class="d-grid gap-2 d-md-block">

                      <!-- Button modal editar Category -->
                      <button type="button" class="btn btn-primary bottom-options" data-bs-toggle="modal" data-bs-target="#EditCategory-<?= $categoria->id ?>">
                        &#128393;
                      </button>

                      <!-- Button modal visualizar Category -->
                      <button type="button" class="btn btn-secondary bottom-options" data-bs-toggle="modal" data-bs-target="#ViewCategory-<?= $categoria->id ?>">
                        &#8981;
                      </button>

                      <!-- Button modal exclui Category-->
                      <button type="button" class="btn btn-danger bottom-options" data-bs-toggle="modal" data-bs-target="#DeleteCategory-<?= $categoria->id ?>">
                        &#9852;
                      </button>
                    </div>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>

          <!-- Modal Adicionar Category -->
          <div class="modal fade" id="AddCategory" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Adicionar categoria</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form action="/admin/categorias/create" method="post" class="row g-3">
                    <div class="col-md-8">
                      <label for="inputNameAddCategory" class="form-label">Nome</label>
                      <input type="text" name="nome" class="form-control" id="inputNameAddCategory" placeholder="Insira o nome da categoria">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Cancelar</button>
                      <button type="submit" class="btn btn-principal">Adicionar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>


          <!-- Modal Editar Category -->
          <?php foreach ($categorias as $categoria) : ?>
          <div class="modal fade" id="EditCategory-<?= $categoria->id ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Editar categoria</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                  <form action="/admin/categorias/update" method="post" class="row g-3">
                    <div class="col-md-8">
                      <input type="hidden" name="id" value="<?= $categoria->id ?>">
                      <label for="inputNameEditCategory" class="form-label">Nome</label>
                      <input type="text" class="form-control" name="nome" id="inputNameEditCategory" value="<?= $categoria->nome ?>">
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                      <button type="submit" class="btn btn-principal">Editar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>


          <!-- Modal Visualizar Category-->
          <?php foreach ($categorias as $categoria) : ?>
          <div class="modal fade" id="ViewCategory-<?= $categoria->id ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Visualizar Categoria</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                  <fieldset disabled>
                    <form class="row g-3">
                      <div class="col-md-8">
                        <label for="ViewNameCategory" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="ViewNameCategory" placeholder="<?= $categoria->nome ?>" readonly>
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
          <?php endforeach; ?>



          <!-- Modal excluir Category-->
          <?php foreach ($categorias as $categoria) : ?>
          <div class="modal fade" id="DeleteCategory-<?= $categoria->id ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Excluir Categoria</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <p class="text-center">Deseja mesmo excluir essa categoria ?</p>
                  <p><?= $categoria->nome ?></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-principal bottom-add" data-bs-dismiss="modal">Cancelar</button>
                  <form action="/admin/categorias/delete" method="post">
                    <input type="hidden" value="<?= $categoria->id ?>" name="id">
                    <button type="submit" class="btn btn-danger">Excluir</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>

        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
  </body>

</html>
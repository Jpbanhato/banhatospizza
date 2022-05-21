<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Sidebar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="../../../public/css/sidebar.css">

  <!-- ICONS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

</head>


<body>

  <div class="botao-primario1">
    <a class="btn btn-primary botao-primario2" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
      aria-controls="offcanvasExample"> <i class="bi bi-list"></i> </a>
  </div>
  <!-- 
  COLOCAR UM FLEXBOX PARA CONSEGUIR COLOCAR TODOS OS ELEMENTOS NO LUGAR CERTO.
  -->

  <div class="container flexbox_cont">

    <div class="offcanvas offcanvas-start inicio-sidebar" tabindex="-1" id="offcanvasExample"
      aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header titulo-topo">
        <img src="/public/assets/Icone Redondo sem Fundo.png">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Banhatos Pizza</h5>
        <button type="button" class="btn-close text-reset botao-fechar" data-bs-dismiss="offcanvas" aria-label="Close"></button>

      </div>

      <div class="offcanvas-body corpo-sidebar">

        <ul class="listas">

          <li> <i class="bi bi-people"></i> <a class="usuarios-1" href="usuarios.html"> Usuários </a></li>
          <li> <i class="bi bi-list-nested"></i> <a class="categorias-1" href="categorias.html"> Categorias </a></li>
          <li> <i class="bi bi-boxes"></i> <a class="produtos-1" href="produtos.html"> Produtos </a></li>


        </ul>
<!--

<div class="botao-logout1">
          <button type="button" class="btn btn-primary botao-logout2" data-bs-toggle="modal"
            data-bs-target="#exampleModal">
            Logout <i class="bi bi-box-arrow-right"></i>
          </button>

-->
        <div class="botao-logout1">
          <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary botao-logout2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Logout <i class="bi bi-box-arrow-right"></i>
              </button>

              <!-- Modal -->
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Sim Deseja mesmo sair ?</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Após clicar no botão "Sim", você será direcionado para a área de login. Deseja prosseguir com essa decisão ?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                      <button type="button" class="btn btn-primary">Sim</button>
                    </div>
                  </div>
                </div>
              </div>
          
        </div>

    </div>
    </div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  
</body>

 
</html>

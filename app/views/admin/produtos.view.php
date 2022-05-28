<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/css/global.css">
    <link rel="stylesheet" href="../../../public/css/adm-produtos.css">
    <title>Banhato's Pizza - Produtos</title>
</head>
<body>
    <div class="container">
        <div class="product-header">
            <h1>Produtos</h1>
        </div>

        <nav class="navbar navbar-light bg-light nav-search">
            <div class="container-fluid bottom-add d-flex">
              <form class="d-flex justify-content-end bar-search">
                <input class="form-control me-2" type="search" placeholder="Pesquisar..." aria-label="Search" name="search">
                <button class="btn btn-primary bottom-search" type="submit">Pesquisar</button>
              </form>
                
              <button type="button" class="btn btn-success btn-add" data-bs-toggle="modal" data-bs-target="#AddProdut">Adicionar</button>
            </div>
        </nav>
      
        <div class="products-table">
            <table class="table table-hover justify-content-center align-items-center">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col"><b>Nome do Produto</b></th>
                    <th></th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td scope="row justify-content-center align-items-center">id</td>
                        <td class="justify-content-start name-itens-table">[NOME DO PRODUTO]</td>
                        <td class="d-flex justify-content-end colum-bottons-table">
                            <div class="d-grid gap-2 d-md-block">
                                <!-- Button modal editar produto -->
                                <button type="button" class="btn btn-primary bottom-options" data-bs-toggle="modal" data-bs-target="#EditarProd-id">
                                    &#128393;
                                </button>
            
                                <!-- Button modal visualizar produto -->
                                <button type="button" class="btn btn-secondary bottom-options" data-bs-toggle="modal" data-bs-target="#VisualizarProd-id">
                                    &#8981;
                                </button>
            
                                <!-- Button modal exclui produto-->
                                <button type="button" class="btn btn-danger bottom-options" data-bs-toggle="modal" data-bs-target="#ExcluiProd-id">
                                    &#9852;
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Modal Adicionar Produto -->
        <div class="modal fade" id="AddProdut" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Adicionar Produto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
    
                <form action="produtos/create" method="post" class="row g-3">
                    <div class="col-md-8">
                        <label for="inputNameAddProdut" class="form-label">Nome</label>
                        <input type="text" name="nome" class="form-control" id="inputNameAddProdut" placeholder="Insira o nome do produto">
                    </div>
                    <div class="col-md-4">
                        <label for="inputPriceAddProdut" class="form-label">Preço</label>
                        <input type="text" name="preco" class="form-control" id="inputPriceAddProdut" placeholder="R$99,99">
                    </div>
                    <div class="col-12">
                        <label for="inputDescriptionAddProdut" class="form-label">Descrição do Produto</label>
                        <textarea class="form-control" name="descricao" id="inputDescriptionAddProdut" rows="3" placeholder="Ingredientes e porções"></textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="inputCategoryAddProdut" class="form-label">Categoria</label>
                        <select id="inputCategoryAddProdut" class="form-select" name="categoria">
                            <option selected>Insira a categoria do produto...</option>
                            <option value="Pizza Salgada">Pizza Salgada</option>
                            <option value="Pizza Doce">Pizza Doce</option>
                            <option value="Esfirra">Esfirra</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="inputImageAddProdut" class="form-label">Imagem </label>
                        <input type="text" name="imagem" class="form-control" id="inputImageAddProdut" placeholder="Insira o nome da imagem do produto">
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-principal">Adicionar</button>
                </div>
                </form>
            </div>
            </div>
        </div>
  
  
        <!-- Modal Editar Produto -->
        <div class="modal fade" id="EditarProd-id" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Editar Produto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
    
                    <form action="produtos/update" method="post" class="row g-3">
                    <div class="col-md-8">
                        <input type="hidden" name="id" value="id">
                        <label for="inputNameEditProdut" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="nome" id="inputNameEditProdut" value="[NOME]">
                    </div>
                    <div class="col-md-4">
                        <label for="inputPriceEditProdut" class="form-label">Preço</label>
                        <input type="text" class="form-control" name="preco" id="inputPriceEditProdut" value="[PRECO]">
                    </div>
                    <div class="col-12">
                        <div class="col-12">
                            <label for="inputDescriptionEditProdut" class="form-label">Descrição do Produto</label>
                            <textarea class="form-control" name="descricao" id="inputDescriptionEditProdut" rows="3" placeholder="Ingredientes e porções">[DESCRICAO]</textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="inputCategoryEditProdut" class="form-label">Categoria</label>
                        <select id="inputCategoryEditProdut" class="form-select" name="categoria">
                            <option selected>Insira a categoria do produto...</option>
                            <option value="Pizza Salgada">Pizza Salgada</option>
                            <option value="Pizza Doce">Pizza Doce</option>
                            <option value="Esfirra">Esfirra</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label for="inputImageEditProdut" class="form-label">Imagem </label>
                        <input type="text" class="form-control" name="imagem" id="inputImageEditProdut" value=[IMAGEM]>
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
  
  
        <!-- Modal Visualizar Produto-->
        <div class="modal fade" id="VisualizarProd-id" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Visualizar Produto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <fieldset disabled>
                <form class="row g-3">
                    <div class="col-md-8">
                    <label for="ViewNameProduct" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="ViewNameProduct" placeholder="[NOME]" readonly>
                    </div>
                    <div class="col-md-4">
                    <label for="ViewPriceProduct" class="form-label">Preço</label>
                    <input type="text" class="form-control" id="ViewPriceProduct" placeholder="[PRECO]" readonly>
                    </div>
                    <div class="col-12">
                    <label for="ViewDescriptionProduct" class="form-label">Descrição do Produto</label>
                    <textarea class="form-control" id="ViewDescriptionProduct" rows="3" placeholder="[DESCRICAO]" readonly></textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="ViewCategoryProduct" class="form-label">Categoria</label>
                        <select id="ViewCategoryProduct" class="form-select">
                            <option selected>[CATEGORIA]</option>
                        </select>
                    </div>
                    <div class="col-12">
                    <label for="ViewImageProduct" class="form-label">Imagem</label>
                    <input type="text" class="form-control" id="ViewImageProduct" placeholder="[IMAGEM]" readonly>
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
  
  
        <!-- Modal excluir produto-->
        <div class="modal fade" id="ExcluiProd-id" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Excluir Produto</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p class="text-center">Deseja mesmo excluir esse produto?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-principal bottom-add" data-bs-dismiss="modal">Cancelar</button>
                <form action="produtos/delete" method="post">
                  <input type="hidden" value="id" name="id">
                  <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
              </div>
            </div>
          </div>
        </div>  
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
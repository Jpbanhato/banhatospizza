<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/css/produtos.css">
    <title>Banhato's Pizza - Conheça sabores inesquecíveis</title>
</head>
<body>
  <div class="main">
    <div class="indicacao">
      <h1>Produtos</h1>
      <nav class="navbar nav">
        <div class="container-fluid cont">
           <form class="d-flex filter">
            <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
            <button class="btn btn-outline-success bot" type="submit">Buscar</button>
          </form>
        </div>
      </nav>
    </div>
    <div class="container">
      <div class="row row-cols-3 row-cols-md-4 g-4">
        <div class="col card">
          <div class="card h-100 produto">
            <img src="../../../public\img\batata-frita.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="botao" style="background-color: rgb(158, 148, 62);">
                <a href="#">Porções</a>
              </div>
              <h1 class="card-title">Batata Frita</h1>
              <p class="card-text">Preco</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav aria-label="Page navigation example">
      <ul class="pagination pagina">
        <li class="page-item item-pag">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
         </a>
        </li>
        <li class="page-item item-pag"><a class="page-link" href="#">1</a></li>
       <li class="page-item item-pag"><a class="page-link" href="#">2</a></li>
        <li class="page-item item-pag"><a class="page-link" href="#">3</a></li>
        <li class="page-item item-pag">
          <a class="page-link item-pag" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
  </div>    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>   
</body>
</html>

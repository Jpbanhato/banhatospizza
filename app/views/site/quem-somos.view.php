<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/css/quem-somos.css">
    <script type="text/javascript" src="../../../public/js/script.js"></script>

      <!-- NAVBAR E FOOTER -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../../public/css/style_navbar.css" type="text/css">

      <link rel="stylesheet" href="../../../public/css/style_footer.css" type="text/css">

    <title>Banhato's Pizza - Quem somos</title>
</head>
<body>

<?php include 'app/views/includes/navbar.php';?>

    <div class="main">
        <div class="barra-titulo">
            <h1>Quem Somos</h1>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb ">
                <li class="breadcrumb-item"><a href="home.html">Banhato's Pizzaria</a></li>
                <li class="breadcrumb-item active crumb" aria-current="page">Quem somos</li>
                </ol>
            </nav>
        </div>
        <div style="background-image: url(../../public/img/PizzaForno2.jpg);" class="imagem-fundo">
          <div class="blackbox">
            <div class="texto-institucional">
              <p>A Banhato's Pizza vem produzindo as melhores pizzas desde 2001, sempre trazendo excelente qualidade, inesquecíveis sabores e um ótimo atendimento. Foi assim que conquistamos os nossos fiéis clientes e nos tornamos uma das pizzarias de referência em Juiz de Fora.
                Conseguimos mesclar a tradição que adquirimos ao longo dos mais de 20 anos de experiencia com a modernidade do mundo, acompanhando e nos adaptando a evolução dele. Um exemplo disso é a nossa utilização de dois fornos, um à lenha e um forno ecológico, que é mais prático e menos poluente ao meio ambiente.
                Com a intenção de sempre entregar o melhor aos nossos clientes, reformulamos a identidade visual de nossa empresa, assim deixando-a mais sofisticada e moderna.
                E pensando na praticidade de entrega, possuímos a entrega delivery e estamos no IFOOD! Agora você pode pedir a sua deliciosa pizza da Banhatos's Pizza e recebê-la em sua casa sem nenhum esforço.
              </p>
            </div>
          </div>  
        </div>
        <div class="caixas">
          <div class="preceitos">
              <h1> &#10004; Valores</h1>
              <p>Competência, Tradição, Criatividade, Higiene, Qualidade, Adaptação e Zelo.</p>
          </div>
          <div class="preceitos">
              <h1> &#10025; Visão</h1>
              <p>Superar sempre as expectativas de nossos clientes no segmento de pizzaria.</p>
          </div>
          <div class="preceitos">
              <h1> &#10140; Missão</h1>
              <p>Oferecer alimentos saborosos e produtos de qualidade, visando  total satisfação.</p>
          </div>
        </div>  
        <div id="carouselExampleIndicators" class="carousel slide carrossel" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../../../public/img/carrossel1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../../../public/img/carrossel2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="../../../public/img/carrossel3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>

      <?php include 'app/views/includes/footer.php';?>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>   
</body>
</html>


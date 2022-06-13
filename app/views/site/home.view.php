<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" />

    <link href="../../../public/css/global.css" rel="stylesheet">
    <link href="../../../public/css/home.css" rel="stylesheet">

      <!-- NAVBAR E FOOTER -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../public/css/style_navbar.css" type="text/css">

     <link rel="stylesheet" href="../../../public/css/style_footer.css" type="text/css">
    
    <title>Banhato's Pizza - Os sabores que todos buscam </title>
  </head>

  <body>
    <?php include 'app/views/includes/navbar.php';?>
    <!-- Navbar -->
    <main>
        
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner interior-carrossel">
          <div class="carousel-item ">
            <img src="../../../public/assets/em-casa.jpg" class="d-block" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Peça pelo iFood</h5>
            </div>
          </div>
          <div class="carousel-item active">
            <img src="../../../public/assets/ingredientes-2.jpg" class="d-block" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Ingredientes Selecionados</h5>
            </div>
          </div>
          <div class="carousel-item ">
            <img src="../../../public/assets/pizza-forno.jpg" class="d-block" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Pizzas artesanais</h5>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
        

      <div class="latest-products">
        <h1 class="lp-title">Escolha. Peça. Saboreie!</h1>
        <div class="lp-cards">
        <?php foreach($ultimos as $ultimo): ?>
          <div class="card col-sm-3 cart">
            <img src="../../../public/img/<?=$ultimo->imagem?>.jpg" />
            <h3><?=$ultimo->nome?></h3>
          </div>
        <?php endforeach;?> 
        </div>
      </div> 
      
      <div class="call-to-action">
        <section class="cta-container quem-somos">
          <div class="image-cta imagem-home">
              <img src="../../../public/img/Pizza Maker-bro.png" alt="Quem somos">
          </div>
          <div class="text-cta">
              <h1>Quem somos?</h1>
              <p>Fundada no ano de 2001 por alunos de gastronomia da UFJF, a pizzaria Banhato's Pizza 
                surgiu com a ideia de revolucionar a forma com que o seu cliente consome, pede e interage 
                com a pizzaria. Fornecendo uma experiência melhor para seus funcionários e clientes. 
                Inspirada em grandes pizzarias como Pizza Planet e Domino's, viemos trazer qualidade e um 
                ótimo ambiente para você e sua fámilia.</p>
              <a href="/quem-somos"><button class="btn btn-cta">Conheça-nos</button></a>
          </div>
      </section>
  
      <section class="cta-container contato">
          <div class="text-cta">
              <h1>Como entrar em contato ?</h1>
              <p> Para entrar em contato e realizar o seu pedido recomendamos que envie uma mensagem para o nosso
                WhatsApp (32) 9999-9999 ou ligue para o nosso telefone 4002-8922.
                
                Para fins comercias e feedbacks envie um e-mail para nós. Você encontrará todas as informações na página de contato. 


              </p>
              <a href="/contato"><button class="btn btn-cta">Entre em contato</button></a>
          </div>
          <div class="image-cta image-quem-somos imagem-home">
              <img src="../../../public/img/Pizza sharing-amico.png" alt="contato">
          </div>
      </section>
      </div>
    </main>
    <!-- Footer -->
    <?php include 'app/views/includes/footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
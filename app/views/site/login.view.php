<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100italic,300,300italic,regular,italic,700,700italic,900,900italic" rel="stylesheet" />
    <link rel="stylesheet" href="../../../public/css/global.css">
    <link rel="stylesheet" href="../../../public/css/login.css">

     <!-- NAVBAR E FOOTER -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../../public/css/style_navbar.css" type="text/css">

      <link rel="stylesheet" href="../../../public/css/style_footer.css" type="text/css">

    <title>Banhato's Pizza - Login</title>
</head>


<body>


  <div class="login-container">

    <div class="left-container">
      <div class="logo">
        <img src="../../../public/assets/Icone Marrom Circular sem Fundo.png" alt="logo banhato's pizza">
      </div>

      <h1 class="login-title">Todo dia é dia de pizza 🍕</h1>
      <p class="login-subtitle">Faça seu login:</p>

      <form action="/loginBack" method="POST">
        <div class="email-login labeled-input">
          <label for="email">E-mail:</label>
          <input id="email" type="text" name="email" placeholder="exemplo@email.com" require>
        </div>
        <div class="password-login labeled-input">
          <label for="password">Senha:</label>
          <input id="password" type="password" name="senha" placeholder="Senha" require>
        </div>
        <?php
        if (isset($_SESSION['nao_autenticado'])) :
        ?>
        <div class='alert alert-danger' role='alert'>
          Email ou senha Incorretos
        </div>
        <?php
            unset($_SESSION['nao_autenticado']);
        endif;
        ?>
        <button type="submit" id="login-btn" >entrar</button>
      </form>
     
            
    </div>

    <div class="right-container">
      <img src="../../../public/assets/Icone Redondo sem Fundo.png" alt="logo banhato's pizza">
    </div>
  </div>


</body>
</html>
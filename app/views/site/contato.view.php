<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/css/contato1.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- NAVBAR E FOOTER -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../public/css/style_navbar.css" type="text/css">

    <link rel="stylesheet" href="../../../public/css/style_footer.css" type="text/css">

    <title>Banhato's Pizza - Contate-nos </title>
</head>


<body>

    <?php include 'app/views/includes/navbar.php';?>

    <div class="main">
        <div class="titulo">

            <h1> Contato </h1>

        </div>

        <div class="flex-container flx_cont">

            <div class="card cart_1" class="" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">E-mail</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Envie um E-mail para nós</h6>
                    <p class="card-text cart_txt">Entre em contato para futuras parcerias ou para falar diretamente com
                        o setor administrativo. <br><b><span>(Não realizamos pedidos pelo E-mail)</span></b></p>
                    <a href="https://www.google.com/intl/pt-BR/gmail/about/" target="_blank"
                        class="fa fa-google cart_link1"></a>
                </div>
            </div>

            <div class="card cart_1" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Redes sociais</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Conheça nosso trabalho nas redes sociais</h6>
                    <p class="card-text">Em nossas redes sociais você irá encontrar nossos trabalhos mais recentes e
                        nossas promoções.</p>
                    <a href="https://www.instagram.com/" target="_blank" class="fa fa-instagram cart_link1"></a>
                    <a href="https://pt-br.facebook.com/" target="_blank" class="fa fa-facebook cart_link1"></a>
                </div>
            </div>

            <div class="card cart_1" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Telefone</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Ligue e faça o seu pedido</h6>
                    <p class="card-text"> Realizamos pedidos pelo WhatsApp (clique no link abaixo) e também por telefone
                        .<br> <u> Tel: (32) 4002-8922</u> </p>
                    <a href="https://web.whatsapp.com/" target="_blank" class="card-link cart_link1"><i
                            class="bi bi-whatsapp"></i></a>
                </div>
            </div>

        </div>


        <div class="titulo_form">
            <h1><b>Formulário de Mensagem</b></h1>
        </div>

        <form action="/contato/sendEmail" method="post">
            <div class="mb-3 form_1">
                <label for="exampleFormControlInput1" class="form-label form_2">Digite o seu nome</label>
                <input type="text" class="form-control" name="nome" id="exampleFormControlInput1"
                    placeholder="EX: Brenner Costa">
            </div>


            <div class="mb-3 form_1">
                <label for="exampleFormControlInput1" class="form-label form_2">Digite o seu E-mail</label>
                <input type="email" class="form-control" name="email" id="exampleFormControlInput1"
                    placeholder="name@example.com">
            </div>


            <div class="mb-3 form_1">
                <label for="exampleFormControlTextarea1" class="form-label form_2">Assunto</label>
                <textarea class="form-control" name="assunto" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>


            <div class="mb-3 form_1">
                <label for="exampleFormControlTextarea1" class="form-label form_2">Digite sua mensagem</label>
                <textarea class="form-control" name="msg" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <div class="d-grid gap-2 col-6 mx-auto botao_2">
                <button class="btn btn-primary botao_1" type="submit">Enviar</button>
            </div>
        </form>


        <div class="maps">

            <h1> Veja a nossa localização</h1>

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d118602.28761902434!2d-43.38252099999999!3d-21.7290588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1649796212119!5m2!1spt-BR!2sbr"
                width="" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>

        <?php include 'app/views/includes/footer.php';?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </div>

</body>



</html>
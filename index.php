<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page Title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css">
        <link rel="stylesheet" type="text/css" media="screen" href="header.css">
        <link rel="stylesheet" type="text/css" media="screen" href="footer.css">
        <link rel="stylesheet" type="text/css" media="screen" href="carrossel.css.css">
    </head>

    <body>
        <?php include("header.php");?>
    <section id="conteudo">
        <section class="home-content">
            <div class="image-banner">
                <h1>PLANEJE E GERENCIE UM <br> MONITORAMENTO EM REDES SOCIAIS</h1>
                <button>Download ebook</button>
                <?php include("carrossel.php");?>

            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card" style="width: 100%;">
                        <img src="imgs/imagens_cortadas/menu1.png" class="card-img-top" alt="conteudo_produto_1">
                        <div class="card-body">
                            <h5 class="card-title">Ranking de posts</h5>
                            <p class="card-text">Compare os posts de suas
                                marcas de interesse com
                                seus pares.
                                Veja os posts que
                                mais engajam e mais.
                            </p>
                            <a href="#" class="btn btn-primary">SAIBA MAIS</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3">
                    <div class="card" style="width: 100%;">
                        <img src="imgs/imagens_cortadas/menu2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Desempenho de Perfis</h5>
                            <p class="card-text">Compare perfis
                                de suas marcas de
                                com seus
                                concorrentes e pares.
                                São 11 plataformas diferentes.
                            </p>
                            <a href="#" class="btn btn-primary">SAIBA MAIS</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="card" style="width: 100%;">
                        <img src="imgs/imagens_cortadas/menu3.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Rastrear Links</h5>
                            <p class="card-text">Acompanhe os compartilhamentos de
                                cada notícia em rede e a
                                vida útil de cada link.
                            </p>
                            <a href="#" class="btn btn-primary">SAIBA MAIS</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card" style="width: 100%;">
                        <img src="imgs/imagens_cortadas/menu4.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Trends</h5>
                            <p class="card-text">Acompanhe o movimento
                                em toda a rede.
                                O que mais falam, o que
                                mais buscam e o que
                                mais leem.</p>
                            <a href="#" class="btn btn-primary">SAIBA MAIS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include("footer.php");?>
        </section>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
        <script type="text/javascirpt" src="carrosel.js"></script>
    </body>

</html>
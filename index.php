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

        <section>   <!-- Seção para o ebook -->
            <div id="ebook">

              <span class="pfrase">PLANEJE E GERENCIE UM</span> <br>
              <span>MONITORAMENTO EM REDES SOCIAIS</span>
               <div><button type="button" class="btn">Download Ebook</button></div>
            </div>    <!-- Fim da seção do ebook -->
           

             <!--   <?php //include("carrossel.php");?> --> 
                 <!-- Tirei o carrossel acima -->

        </section>  <!-- Fim da sessão para o ebook -->

         <section id="area-carrossel">
             
          <!-- Carrosel aqui ? -->

         </section>


  <section id="alta">    <!-- Seção do "Em alta" -->
    <h5>EM ALTA</h5>
  <div class="row">

    <div class="col-md-3">
    <img class="card-img-top" src="imgs/imagens_cortadas/menu1.png">
      <div class="card-body">
        <h4 class="card-title">Ranking de posts</h4>
        <p>Compare os posts de suas marcas de interesse com seus concorrentes e pares. Veja os posts que mais engajam e mais.</p>
        <a href="" class="btn btn-primary">Saiba mais</a>
      </div>
     </div>
    

    <div class="col-md-3">
    <img class="card-img-top" src="imgs/imagens_cortadas/menu2.png">
      <div class="card-body">
        <h4 class="card-title">Desempenho de Perfis</h4>
        <p>Compare perfis de suas marcas de com seus concorrentes e pares
        São 11 plataformas diferentes.</p>
        <a href="" class="btn btn-primary">Saiba mais</a>
      </div>
     </div>

    <div class="col-md-3">
    <img class="card-img-top" src="imgs/imagens_cortadas/menu2.png">
      <div class="card-body">
        <h4 class="card-title">Rastrear Links</h4>
        <p>Acompanhe os compartilhamentos de cada notícia em rede e a
         vida útil de cada link.</p>
        <a href="" class="btn btn-primary">Saiba mais</a>
      </div>
     </div>

    <div class="col-md-3">
    <img class="card-img-top" src="imgs/imagens_cortadas/menu2.png">
      <div class="card-body">
        <h4 class="card-title">Trends</h4>
        <p>Acompanhe o movimento em toda a rede. O que mais falam, o que
           mais buscam e o que mais leem.</p>
        <a href="" class="btn btn-primary">Saiba mais</a>
      </div>
     </div>
    </div>
    <hr>
    <?php include("footer.php");?>
    </section>
   </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascirpt" src="carrosel.js"></script>
    </body>
</html>
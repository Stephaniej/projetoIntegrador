
    <section id="demo"  >
    <div class="row">
      <div class="large-12 columns">
        <div class="owl-carousel owl-theme">
          <div class="item">
            <div class="card text-center" class="rounded-top" style="18rem;">
                <a href="pagamento.blade.php"> <img class="imagem" src="<?php echo e(asset('imgs/imagens_cortadas/foto1.png')); ?>" class="card-img-top" alt="..."> </a>
              <div class="card-body">
                
                <p class="card-text"> R$79/mês</p>
                <p class="mensal" > ou 12x R$67/mês</p>   
                <a href="pagamento.blade.php" class="btn btn-primary">Comprar</a>
              </div>
            </div>
          </div>
          <div class="item" >
              <div class="card text-center" class="rounded-top" style="18rem;">
                  <a href="pagamento.blade.php"> <img class="imagem" src="<?php echo e(asset('imgs/imagens_cortadas/foto2.png')); ?>" class="card-img-top" alt="..."> </a>
                  <div class="card-body">
                    
                    <p class="card-text"> R$79/mês</p>
                    <p class="mensal" > ou 12x R$67/mês</p>   
                    <a href="pagamento.blade.php" class="btn btn-primary">Comprar</a>
                  </div>
                </div>
          </div>
          <div class="item" >
              <div class="card text-center" class="rounded-top" style="18rem;">
                  <a href="pagamento.blade.php">   <img class="imagem" src="<?php echo e(asset('imgs/imagens_cortadas/foto3.png')); ?>" class="card-img-top" alt="..."> </a>
                  <div class="card-body">
                    
                    <p class="card-text"> R$79/mês</p>
                    <p class="mensal" > ou 12x R$67/mês</p>   
                    <a href="pagamento.blade.php" class="btn btn-primary">Comprar</a>
                  </div>
                </div>
          </div>
          <div class="item" >
              <div class="card text-center" class="rounded-top" style="18rem;">
                  <a href="pagamento.blade.php">  <img class="imagem" src="<?php echo e(asset('imgs/imagens_cortadas/foto4.png')); ?>" class="card-img-top" alt="..."> </a>
                  <div class="card-body">
                    
                    <p class="card-text"> R$79/mês</p>
                    <p class="mensal" > ou 12x R$67/mês</p>   
                    <a href="pagamento.blade.php" class="btn btn-primary">Comprar</a>
                  </div>
                </div>
          </div>
          <div class="item" >
              <div class="card text-center" class="rounded-top" style="18rem;">
                  <a href="pagamento.blade.php">   <img class="imagem" src="<?php echo e(asset('imgs/imagens_cortadas/foto1.png')); ?>" class="card-img-top" alt="..."> </a>
                  <div class="card-body">
                    
                    <p class="card-text"> R$79/mês</p>
                    <p class="mensal" > ou 12x R$67/mês</p>   
                    <a href="pagamento.blade.php" class="btn btn-primary">Comprar</a>
                  </div>
                </div>
          </div>
          <div class="item" >
              <div class="card text-center" class="rounded-top" style="18rem;;">
                  <a href="pagamento.blade.php"> <img class="imagem" src="<?php echo e(asset('imgs/imagens_cortadas/foto2.png')); ?>" class="card-img-top" alt="..."> </a>
                  <div class="card-body">
                    
                    <p class="card-text"> R$79/mês</p>
                    <p class="mensal" > ou 12x R$67/mês</p>   
                    <a href="pagamento.blade.php" class="btn btn-primary">Comprar</a>
                  </div>
                </div>
          </div>
          <div class="item" >
              <div class="card text-center" class="rounded-top" style="18rem;;">
                  <a href="pagamento.blade.php"> <img class="imagem" src="<?php echo e(asset('imgs/imagens_cortadas/foto3.png')); ?>" class="card-img-top" alt="..."> </a>
                  <div class="card-body">
                    
                    <p class="card-text"> R$79/mês</p>
                    <p class="mensal" > ou 12x R$67/mês</p>   
                    <a href="pagamento.blade.php" class="btn btn-primary">Comprar</a>
                  </div>
                </div>
          </div>
          <div class="item" >
              <div class="card text-center" class="rounded-top" style="18rem;;">
                  <a href="pagamento.blade.php"> <img class="imagem" src="<?php echo e(asset('imgs/imagens_cortadas/foto4.png')); ?>" class="card-img-top" alt="..."> </a>
                  <div class="card-body">
                    
                    <p class="card-text"> R$79/mês</p>
                    <p class="mensal" > ou 12x R$67/mês</p>   
                    <a href="pagamento.blade.php" class="btn btn-primary">Comprar</a>
                  </div>
                </div>
          </div>
          
        </div>

          </div>
         
          <script>
            $(document).ready(function() {
              $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                  0: {
                    items: 1,
                    nav: true
                  },
                  600: {
                    items: 3,
                    nav: false
                  },
                  1000: {
                    items: 4,
                    nav: true,
                    loop: false,
                    margin: 20
                  }
                }
              })
            })
          </script>
        </div>
      </div>
    </section>
<?php /**PATH /Applications/MAMP/htdocs/projetoIntegrador/torabitecommerce/resources/views/carrossel.blade.php ENDPATH**/ ?>
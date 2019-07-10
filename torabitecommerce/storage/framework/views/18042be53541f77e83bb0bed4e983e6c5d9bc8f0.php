<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cadastro</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo e(asset('css/cadastro.css')); ?>">
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo e(asset('css/header.css')); ?>">
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo e(asset('css/footer.css')); ?>">
        <link rel="icon" href="http://www.torabit.com.br/wp-content/uploads/2017/04/cropped-favicon3-2-32x32.png" sizes="32x32">
    </head>

    <body>
      <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <div id="corpo">
        <div id="area-cadastro">
            
            <h2>Cadastro Torabit Shop</h2>
            <br>
           
           <div id="login">
            <a href=""><h6>Login</h6></a>
           </div>
           <br>

           <form action="cadastro" method="post">
           <?php echo csrf_field(); ?>

            <label>Nome completo</label>
            <input class="form-control form-control-md campo" type="text" name="nomeCompleto">
            <br>

            <label>Email</label>
            <input class="form-control form-control-md email" type="email" name="Email">
            <br>

            <label>Senha</label>
            <input class="form-control form-control-md senha" type="password" name="Senha">

            <p class="agree">Ao continuar, você concorda com as condições de Uso <br> 
            e com a Política de Privacidade do Torabit.</p>

            <button type="submit" class="btn btn-primary">CRIAR MINHA CONTA</button>
           </form> 
            <hr> 
            <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         </div> 
      
    <?php if(isset($resultado)): ?>
        <?php if($resultado): ?>
         echo  "<script>alert('Cadastro efetuado com Sucesso !')</script>";
        <?php else: ?>
         echo  "<script>alert('Erro ao cadastrar !')</script>";
        <?php endif; ?>
    <?php endif; ?>
        

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
<?php /**PATH /Applications/MAMP/htdocs/projetoIntegrador/torabitecommerce/resources/views/cadastro.blade.php ENDPATH**/ ?>


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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Name')); ?></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>

                                <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">

                                <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required autocomplete="new-password">

                                <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirm Password')); ?></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>











                        <div class="form-group row">
                            <label for="cpf" class="col-md-4 col-form-label text-md-right"><?php echo e(__('CPF')); ?></label>

                            <div class="col-md-6">
                                <input id="cpf" type="number" class="form-control <?php if ($errors->has('cpf')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('cpf'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="cpf" value="<?php echo e(old('cpf')); ?>" required autocomplete="cpf" autofocus>

                                <?php if ($errors->has('cpf')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('cpf'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="contato" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Contato')); ?></label>

                            <div class="col-md-6">
                                <input id="contato" type="number" class="form-control <?php if ($errors->has('contato')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('contato'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="contato" value="<?php echo e(old('contato')); ?>" required autocomplete="contato" autofocus>

                                <?php if ($errors->has('contato')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('contato'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="cep" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Cep')); ?></label>

                            <div class="col-md-6">
                                <input id="cep" type="number" class="form-control <?php if ($errors->has('cep')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('cep'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="cep" value="<?php echo e(old('cep')); ?>" required autocomplete="cep" autofocus>

                                <?php if ($errors->has('cep')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('cep'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>




                        <div class="form-group row">
                            <label for="endereco" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Endereço')); ?></label>

                            <div class="col-md-6">
                                <input id="endereco" type="text" class="form-control <?php if ($errors->has('endereco')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('endereco'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="endereco" value="<?php echo e(old('endereco')); ?>" required autocomplete="endereco" autofocus>

                                <?php if ($errors->has('endereco')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('endereco'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="numero" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Numero')); ?></label>

                            <div class="col-md-6">
                                <input id="numero" type="number" class="form-control <?php if ($errors->has('numero')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('numero'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="numero" value="<?php echo e(old('numero')); ?>" required autocomplete="numero" autofocus>

                                <?php if ($errors->has('numero')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('numero'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="complemento" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Complemento')); ?></label>

                            <div class="col-md-6">
                                <input id="complemento" type="text" class="form-control <?php if ($errors->has('complemento')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('complemento'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="complemento" value="<?php echo e(old('complemento')); ?>" required autocomplete="complemento" autofocus>

                                <?php if ($errors->has('complemento')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('complemento'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cidade" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Cidade')); ?></label>

                            <div class="col-md-6">
                                <input id="cidade" type="text" class="form-control <?php if ($errors->has('cidade')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('cidade'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="cidade" value="<?php echo e(old('cidade')); ?>" required autocomplete="cidade" autofocus>

                                <?php if ($errors->has('cidade')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('cidade'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="estado" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Estado')); ?></label>

                            <div class="col-md-6">
                                <input id="estado" type="text" class="form-control <?php if ($errors->has('estado')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('estado'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="estado" value="<?php echo e(old('estado')); ?>" required autocomplete="estado" autofocus>

                                <?php if ($errors->has('estado')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('estado'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                            
                        </div>




                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right"><?php echo e(__('')); ?></label>

                            <div class="col-md-6">
                            <p class="agree">Ao continuar, você concorda com as condições de Uso <br> 
            e com a Política de Privacidade do Torabit.</p>
                            </div>
                            
                        </div>



                     






































































                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('CRIAR MINHA CONTA')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /Applications/MAMP/htdocs/projetoIntegrador/torabitecommerce/resources/views/auth/register.blade.php ENDPATH**/ ?>
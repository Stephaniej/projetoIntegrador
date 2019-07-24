<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carrinho</title>
</head>

<body>


    <style>

    </style>

    <form action="/pagamento" method="POST">
        @csrf
        <section class="imgProduto">
            <img src="{{asset('imgs\imagens_cortadas\torabit_ecommerce_logo.png')}}" alt="">

        </section>

        <section class="infoDesc">

            <div class="divNome">
                <input name="nomeCliente" type="text" placeholder="Digite o seu nome aqui">
            </div>

            <div class="divNomeProduto">
                <input name="nomeProduto" type="text" placeholder="Digite o produto nome aqui">
            </div>


            <div class="divValidadeProduto">
                <input name="validadeProduto" type="number" placeholder="123">
            </div>

            <div class="btnComprar">
                <button>Comprar</button>
            </div>


        </section>

    </form>

</body>

</html>
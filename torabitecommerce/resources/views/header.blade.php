
<header>
    <nav class="navbar navbar-expand-sm">

      <!-- Logo -->            
      <a href="index.blade.php" class="navbar-brand">
        <img src="{{asset('imgs/imagens_cortadas/torabit_shop.png')}}"" width="200">
      </a>

      <!-- Menu Hamburguer -->
      <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-target2">
        <div class="btnH topob"></div>
        <div class="btnH"></div>
        <div class="btnH"></div>
         <!-- <span class="navbar-toggler-icon"></span> -->
      </button>

      <!-- navegação -->
      <div class="collapse navbar-collapse" id="nav-target2">

       <div class="input-group"> 
        <input class="form-control" type="text" placeholder="Pesquisar">
          <div class="input-group-append">
            <button type="button" class="btn search"><p>busca</p></button>
        </div>
       </div>

       <ul class="navbar-nav">
       @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown"  color="black"class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
          
          <li class="nav-item">
            <a href="" class="nav-link">
             <img src="{{asset('imgs/imagens_cortadas/carrinho.png')}}" width="30">    
            </a>
          </li>
        </ul>

       </div>
      </nav>
</header>

<nav id="nav2">
  <div class="container">
    <div class="navb">
     
     <span><a href="/sobre">Sobre o Torabit</a></span>
     <span><a href="https://datatorapolitica.torabit.com.br/radar-login.py"target="_blank">DATATORA</a></span>
     <span><a href="http://www.torabit.com.br/"target="_blank">Full Service</a></span>
     <span><a href="configuracoes.blade.php">Área do Cliente</a></span>
     <span><a href="contato.blade.php">Contato</a></span>
      
    </div>  
  </div>
</nav>


<!-- 
<header>        
      <nav class="navbar navbar-expand-md navbar-light navbar-branco">

       <div class="container">
        <a href="index.html" class="navbar-brand">
          <img src="imgs/imagens_cortadas/torabit_shop.png" width="160">
        </a>
       </div>

      <div class="input-group"> 
        <input class="form-control" type="text" placeholder="Pesquisar">
          <div class="input-group-append">
            <button type="button" class="btn search"><p>busca</p></button>
        </div>
      </div>

       <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
         <i class="fas fa-bars text-blue"></i>
       </button>

       <div class="collapse navbar-collapse" id="nav-principal">
         <ul class="navbar-nav">
           <li class="nav-item">
             <a href="" class="nav-link">Cadastre-se |</a>
            </li>

            <li class="nav-item">
             <a href="" class="nav-link">Login |</a>
            </li>

            <li class="nav-item">
             <a href="" class="nav-link"><img src="imgs/imagens_cortadas/carrinho.png" width="32"></a>
            </li>
         </ul>
       </div>
      </nav>
    </header>   -->


<!--
<header class="navbar navbar-expand-sm navbar-light">

                     
    <img src="imgs/imagens_cortadas/torabit_shop.png" width="18%" height="18%">

            Menu Hamburguer 
    <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-target">
        <span class="navbar-toggler-icon"></span>
    </button>

        navegação (botão responsivo)
    <div class="collapse navbar-collapse" id="nav-target">
            
       <div class="input-group">  Barra de pesquisa 
        <input class="form-control" type="text" placeholder="Pesquisar">
          <div class="input-group-append">
            <button type="button" class="btn search"><p>busca</p></button>
        </div>
    </div>
       
      <ul class="navbar-nav">   Itens 
        <li class="nav-item"><a href="" class="nav-link"><p class="letra">Cadastre-se |</p></a></li>
        <li class="nav-item"><a href="" class="nav-link"><p class="letra">Login |</p></a></li>
        <li class="nav-item"><a href="" class="nav-link" id="compras"><p>compras</p></a></li> 
       </ul>
    </div>
</header>

<nav id="nav2">
      
        <span><a href="">SOBRE O TORABIT</a></span>
        <span><a href="">CATEGORIAS</a></span>
        <span><a href="">FULL SERVICE</a></span>
        <span><a href="">ÁREA DO CLIENTE</a></span>
        <span><a href="">CONTATO</a></span>

</nav> -->
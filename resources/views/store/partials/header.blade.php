<nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand main-title" href="{{route('store')}}">Dansan Games</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <p class="navbar-text">Store</p>      
        <ul class="nav navbar-nav navbar-right">
        <li><a href="{{route('carrito-show')}}"><i class="fa fa-shopping-cart"></i></a></li>        
        <li><a href="{{route('contacto')}}">Contacto</a></li>
        @include('store.partials.user')        
        </ul>        
      
    </div>
  </div>
</nav>
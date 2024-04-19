<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite(['resources/sass/app.scss','resources/js/app.js',])    

</head>
<body>

<!-- <a class="navbar-brand" href="/"> <img src="{{Storage::url('logo.jpeg')}}" style="height: 30px;" alt="logo"> </a> -->

<nav class="navbar navbar-expand-lg bg-body-tertiary">

  
  <a class="navbar-brand" href="/"> <img src="{{Storage::url('img/logo.png')}}" style="height: 50px;"  alt="Logo CENAG "></a>
  <div class="container-fluid ">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <h4><a class="nav-link"  href="/">Inicio</a></h4>
        </li>
        <li class="nav-item">
          <h4><a class="nav-link" href="eventos">Eventos</a></h4>
        </li>
        <li class="nav-item">
          <h4><a class="nav-link" href="sobre">Sobre</a></h4>
        </li>
      </ul>     
    </div>
  </div>
</nav>
  @yield('body')
  <br>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

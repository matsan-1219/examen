<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>@yield('titulo')</title>
  </head>
  <body background="img/g.jpg">

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                            <img src="{{asset('img/02.jpg')}}"alt="" width="49" height="40">
                          </a>
                      <a class="navbar-brand" href="/">Refaccionaria "GARO"</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                           
                          <a class="nav-link"  href="/aceite">Aceite</a>
                          <a class="nav-link" href="/llanta">Llantas</a>
                          <a class="nav-link" href="/refaccion">Refaccion</a>
                          <a class="nav-link" href="/casco">Casco</a>
                       
                          
                        </div>
                      </div>
                    </div>
                  </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-ms-12">
               <h1>@yield('titulodePagina')</h1>
               <p>
                   @yield('contenido')
               </p>
            </div>
        </div>
        

    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <div class="container-fluid">
    <footer>@yield('pie')
        <div class="container">
          <div class="row">
              <div class="col-xs-12 col-md-6 text-left">
             
                    <h6 class="text-muted">
                    Somos tu mejor aliado para confiar, 
                    Manejamos amplia variedad de marcas y nuestro crecimiento en el mercado nos respalda. 
                    ¡Contáctanos! Tu distribuidor de refacciones para motos</h6>
                        
                  <h6 class="text-muted lead">CONTACTO:</h6>
                  <h6 class="text-muted lead">Visitanos en la sucursal mas cercana:</h6>
                  <h6 class="text-muted">
                   Tláhuac<br>
                  San Gregorio Atlapulco.<br>
                  Xochimilco.<br>
                  Chalco.<br>
                  Teléfonos: 5535014609.<br>
                  </h6>
              </div>
      
              <div class="col-xs-12 col-md-6 text-right">
                  <h6 class="text-muted lead">ENCUENTRANOS EN FACEBOK</h6>
                  <div class="redes-footer">
                    <a href="https://www.facebook.com/Refaccionarias-De-Motos-GR-1027613146846/"><img src="{{asset('img/07.jpg')}}"alt="" width="50" height="40"></a>
                    <img src="{{asset('img/02.jpg')}}"alt="" width="50" height="40"></a>
                  </div>
              </div>
          </div>
          <div class="row"> 
      
              <div class="col-md-12 text-right">
                  <p class="text-muted small">refa-garo@gmail.com.mx
              </div>
              
          </div>
      
          </div>
        </div>  
      </div>
      </footer>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>
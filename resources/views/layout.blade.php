<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" ng-app="moviesApp">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Prueba técnica grupodot">
    <meta name="author" content="Edwin Gómez">
    <link rel="icon" href="favicon.ico">
    <title>grupodot</title>
    <!-- CSS libs -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    
    @yield('resources')

    <link href="" rel="stylesheet">

    <!-- Custom styles -->
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">
  </head>
  <body>
    <header>
      <div class="bg-dark collapse" id="navbarHeader" style="">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">Acerca de esta página</h4>
              <p class="text-muted">Prueba técnica desarrollador PHP, esta prueba permite registrar y visualizar películas registradas, adicional a esto expone una api con las siguientes opciones.</p>
              
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
                <img src="https://www.grupodot.com/img/logo-gd.png" alt="logo grupo dot">
            </div>
            
            <table class="text-white text-sm table table-sm table-dark">
                <tr>
                  <td>Método&nbsp;</td>
                  <td>Uri</td>
                  <td>Descripción</td>
                </tr>
                <tr>
                  <td>GET</td>
                  <td><code>/api/movies</code></td>
                  <td>Consulta todas las peliculas.</td>
                </tr>
                <tr>
                  <td>GET</td>
                  <td><code>/api/movies/{id}</code></td>
                  <td>Consulta una película por su id.</td>
                </tr>
                <tr>
                  <td>POST</td>
                  <td><code>/api/movies</code></td>
                  <td>Permite guardar una nueva película.</td>
                </tr>
                <tr>
                  <td>GET</td>
                  <td><code>/api/movies/find/{text}</code></td>
                  <td>Permite buscar un listado de películas por una palabra clave, buscará por código, nombre y descripción.</td>
                </tr>
                
              </table>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
          <a href="/" class="navbar-brand d-flex align-items-center">
            <span class="fa fa-video icon"></span>
            <strong>Movies</strong>
          </a>
          
          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <main role="main">
      <div class="container">
        @yield('content')
      </div>
    </main>

    <footer class="text-muted">
      <div class="container">
        
        <p>Por Edwin Gómez para <a href="https://www.grupodot.com/" target="_blank">grupodot</a></p>
        
      </div>
    </footer>

   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="./js/holder.min.js"></script>

    <svg xmlns="http://www.w3.org/2000/svg" width="348" height="225" viewBox="0 0 348 225" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="17" style="font-weight:bold;font-size:17pt;font-family:Arial, Helvetica, Open Sans, sans-serif">Thumbnail</text></svg>
  </body>
</html>
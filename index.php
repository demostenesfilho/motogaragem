  <!DOCTYPE html>
  <html>
    <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <nav class="orange darken-4">
            <div class="nav-wrapper container">
            <a href="#" data-target="slide-out" class="sidenav-trigger show-on-large"><i class="material-icons">menu</i></a>
            <a href="#" class="brand-logo center">MotoGaragem</a>
            </div>
          </nav>
        
          <ul id="slide-out" class="sidenav">
            <li><div class="user-view">
              <div class="background">
                <img src="images/bg.jpg">
              </div>
              <a href="#user"><img class="circle" src="images/perfil.jpg"></a>
              <a href="#name"><span class="white-text name">Demóstenes Pedrosa</span></a>
              <a href="#email"><span class="white-text email">motogaragem.caruaru@gmail.com</span></a>
            </div></li>
            <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
            <li><a href="#!">Second Link</a></li>
            <li><div class="divider"></div></li>
            <li><a class="subheader">Subheader</a></li>
            <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
          </ul>
                










        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems);
                });
        </script>
    </body>
  </html>
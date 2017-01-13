<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
    <body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" 
      aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('acceuil.create')  }}">Ajouter article</a>
      <a class="navbar-brand" href="{{ url('acceuil.index')  }}">Meubles en lignes</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('/logout') }}"> <i class="fa fa-user-o" aria-hidden="true"></i>
          Se déconnecter </a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <div class="container">

    @foreach($allCommande as $commande)

    <div class="row">

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail" height="50px">
                    <div class="caption">
                        <p class="col-sm-6 col-md-4">Le commandeur: {{$commande->commandeur}}</p>
                        <p class="col-sm-6 col-md-4">Le nombre d'articles : {{$commande->nombre}}</p>
                        <p class="col-sm-6 col-md-4">Ses coordonnées: {{$commande->contact}}</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    @endforeach
</div>
    </body>
</html>
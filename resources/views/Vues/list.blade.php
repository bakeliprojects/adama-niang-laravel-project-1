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
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ url('/logout') }}"> <i class="fa fa-user-o" aria-hidden="true"></i>
          Se déconnecter </a></li>


        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
          aria-haspopup="true" aria-expanded="false">
          <!--<i class="fa fa-user" aria-hidden="true"></i>
          Utilisateur <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">S'inscrire </a></li>
            <li><a href="#">Se connecter </a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"> Se deconnecter </a></li>
          </ul>-->
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <!--<div class="btn btn-block"><a href="{{ route('acceuil.create')  }}"><h2>Ajouter un nouveau article  </h2> </a></div> -->
    <div class="container">

    @foreach($allVendeur as $vendeur)

    <div class="row">

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail" height="50px">
                    <img src="{{ asset('img/'.$vendeur->contact) }}" class="img-responsive" alt="..." >
                    <div class="caption">
<!--                        <h3> {{$vendeur->imagepath}} </h3> -->
                        <p class="col-sm-6 col-md-4"> {{$vendeur->nom}}</p>
                        <p>
                            <div class="clearfix">
                                <div class="pull-left prix">Le prix est de : {{$vendeur->prix}}FCFA</div><br>
                                <div class="pull-left genre">Provenance : {{$vendeur->genre}}</div>
                                <a href="{{ url('acceuil/show') }}" class="btn btn-success pull-right" role="button">Details </a>
                            </div>
                    </p>
                </div>
            </div>

        </div>
        @endforeach

    </div>
</div>

<footer>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-footer">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" 
      aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</footer>
    </body>
</html>
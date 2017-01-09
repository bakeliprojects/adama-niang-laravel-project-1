<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
    <body>
    <div class="container">
        {{--Header finished--}}
        <div class="row col-xs-8 col-xs-offset-2 img-rounded text-center" style="background-color: #eee;">
            <div><h3>Le produit proposé est : </h3></div>
            <div ><h4>{{ $acceuil->nom }}</h4></div>
            <div><h3>Son descriptif : </h3></div>
            <div >{{ $acceuil->genre }}</div>
            <div class="blockquote-reverse">Le prix est de : -{{ $acceuil->prix }}</div>
            {!! link_to_route('acceuil.create', 'Page de creation', ['class' => 'btn btn-warning btn-block']) !!}
        </div>
        {{--Footer Started--}}
    </div>
    </body>
</html>
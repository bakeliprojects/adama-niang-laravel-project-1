<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
    <body>
    <div class="container">
        {{--Header Started--}}

        <div class="btn btn-block"><a href="{{ route('acceuil.create')  }}"><h2>Ajouter nouvelle  </h2> </a></div>

        @foreach( $allVendeur as $vendeur )
            <hr>
               
            <div>{!! $vendeur->nom!!}</div>
            <div>{!! $vendeur->prix!!}</div>
            <div>{!! $vendeur->genre!!}</div>
            <div>{!! $vendeur->contact!!}</div>
            <div>
                {!! link_to_route('acceuil.edit', 'Modifier', array($vendeur->id), ['class' => 'btn btn-warning btn-block']) !!}
                {!! link_to_route('acceuil.show', 'Plus de détails !!', array($vendeur->id), ['class' => 'btn btn-warning btn-block']) !!}

                {!! Form::open(['method' => 'delete', 'route' => ['acceuil.destroy', $vendeur->id]]) !!}
                {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Etes vous sûre ?\')']) !!}
                {!! Form::close() !!}
            </div>

        @endforeach

        {{--Footer Finished--}}
    </div>

    </body>
</html>
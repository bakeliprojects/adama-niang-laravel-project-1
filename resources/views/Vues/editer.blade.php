<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap
.min.css">
</head>
<body>
        <div class="container">
        {{--Header Finished--}}
        <div><h3>Vous voulez modifier cette vente : {{ $acceuil->nom }}</h3></div>
        {!! Form::model($acceuil, ['route' => ['acceuil.update', $acceuil->id ], 'method'=>'PUT']) !!}
            <div class="form-group">
                {!! Form::label('nom', 'Le nom :') !!}
                {!! Form::text('nom', null, ['class'=>'form-control', 'placeholder'=>'Entrer le nouveau nom ']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('genre', 'Description :') !!}
                {!! Form::text('genre', null,  ['class'=>'form-control', 'placeholder'=>'Descriptif du prod']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('prix', 'Le prix  :') !!}
                {!! Form::text('prix', null,  ['class'=>'form-control', 'placeholder'=>'Le montant est de :']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('contact', 'Contact  :') !!}
                {!! Form::text('contact', null,  ['class'=>'form-control', 'placeholder'=>'vos coordonnees :']) !!}
            </div>
            <br>
            <div class="form-group">
                {!! Form::submit( 'Sauvegarder la modification', ['class'=>'btn btn-toolbar']) !!} 
            </div>
            {!! Form::close() !!}
            @if($errors->any())
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            {{--Footer Started--}}
     </div>
</body>
</html>

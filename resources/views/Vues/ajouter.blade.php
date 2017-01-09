<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        {{--Header Finished--}}

        <div><h3>Ajouter votre produit a vendre</h3></div>
        {!! Form::open(['action' => 'ControllerVendeur@store']) !!}

            <div class="form-group">
                {!! Form::label('nom', 'Le nom du produit:') !!}
                {!! Form::text('nom', null, ['class'=>'form-control', 'placeholder'=>'Nom']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('genre', 'Description :') !!}
                {!! Form::text('genre', null,  ['class'=>'form-control', 'placeholder'=>'Descriptif : neuf ou usé']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('prix', 'Le prix :') !!}
                {!! Form::text('prix', null,  ['class'=>'form-control', 'placeholder'=>'Le prix a débourser' ]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('contact', 'Contact :') !!}
                {!! Form::text('contact', null,  ['class'=>'form-control', 'placeholder'=>'Vos coordonnees : tel et adresse']) !!}
            </div>
            <br>
            <div class="form-group">
                {!! Form::submit( 'Enregistrer', ['class'=>'btn btn-toolbar']) !!} 
                <!-- <button class="btn btn-toolbar pull-right">
                    <a href="/acceuil">Back to Home</a>
                </button> -->
            </div>
        {!! Form::close() !!}
        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {{--Footer started--}}
    </div>
</body>
</html>
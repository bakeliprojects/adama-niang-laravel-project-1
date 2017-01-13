@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Bienvenue sur votre Market Place réservé au meubles de maison.</div>

                <div class="panel-body">
                    Veuillez vous connecter avec votre compte ou s'inscrire pour jouir pleinement de nos fonctions.
                </div>

                <div class="thumbnail" height="50px">
                    <img src="{{ asset('img/timthumb.jpg') }}" class="img-responsive" alt="..." >
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.user-d')
@section('content')
<style>
body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
}

    footer {
        bottom: 0;
        position: absolute;
        left: 0 ;
        right: 0;
    }
    </style>


    <div class="container">
    <div class="panel panel-twuiseo">
      <div class="panel-heading">
        <h3 class="panel-title">Messagem de Marden Cavalcante</h3>
      </div>
      <div class="panel-body">
            @foreach($c as $replies) 
                {{ $replies->mgOld}}
            @endforeach
      </div>
      <div class="panel-footer">
        <a class="btn btn-tw-delete" href="http://127.0.0.1:8000/admin/contact/delete/8"><i class="fa fa-trash-o" aria-hidden="true"></i> Apagar</a>

        <a class="btn btn-tw-back" href="http://127.0.0.1:8000/admin/dashboard"><i class="ion-ios-arrow-back" aria-hidden="true"></i> Voltar</a>

                  <a class="btn btn-tw-reply" onclick="showPanel()"><i class="fa fa-reply" aria-hidden="true"></i> Responder</a>
        
      </div>

    </div>

@endsection
@extends('layouts.admin.home')
@section('statusC', 'active')
@section('content')

  <div class="container">
    <div class="panel panel-twuiseo">
      <div class="panel-heading">
        <h3 class="panel-title">Messagem de {{ $message->name }}</h3>
      </div>
      <div class="panel-body">
        <div class="information-contact">
          @if($message->type == 0)
            <span class="fora"> Fora do site</span>
          @else
            <span class="dentro"> Dentro do site</span>
          @endif
          <p>
            @php
              $date = new Date($message->created_at);
              echo $date->format('d/m/Y');
              echo " • " . $date->ago();
              @endphp
           </p>
        </div>
        <br>
        {{ $message->message }}

        <div class="information-contact-user">
          <span class="name"><b>Nome:</b> {{ $message->name}}</span>
          <span class="email"><b>Email:</b> {{ $message->email}}</span>
        </div>
      </div>
      <div class="panel-footer">
        <a class="btn btn-tw-delete" href="{{ url('admin/contact/delete/' . $message->id) }}"><i class="fa fa-trash-o" aria-hidden="true"></i> Apagar</a>

        <a class="btn btn-tw-back" href="{{ route('admin.dash') }}"><i class="ion-ios-arrow-back" aria-hidden="true"></i> Voltar</a>

        @if($message->type != 0)
          <a class="btn btn-tw-reply" onclick="showPanel()"><i class="fa fa-reply" aria-hidden="true"></i> Responder</a>
        @endif

      </div>
    </div>

    <div class="panel panel-success panel-response" id="response">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-reply" aria-hidden="true"></i> Responder {{ $message->name }}</h3>
      </div>
      <form action="{{ route('admin.contactReply') }}" method="POST">
        {{ csrf_field() }}
      <div class="panel-body">
        <p>Digite a resposta:</p>
        <textarea name="response" cols="30" rows="10" class="form-control" required></textarea>
        <textarea name="oldMessage" class="hidden" required>{{$message->message}}</textarea>
        <input type="text" name="email" value="{{ $message->email }}" class="hidden">
        <input type="text" name="idMsg" value="{{ $message->id }}" class="hidden">
      </div>
      <div class="panel-footer">
        <a class="btn btn-tw-delete" onclick="hiddePanel()"><i class="fa fa-times"></i> Fechar</a>
        <button type="submit" class="btn btn-tw-reply"><i class="fa fa-reply" aria-hidden="true"></i> Responder</button>
      </div>
      </form>
    </div>
  </div>

  @section('scripts')
    <script>
      function showPanel () {
        $('.panel-response').removeClass("panel-response");
      }
      function hiddePanel () {
        $('#response').addClass("panel-response");
      }
    </script>
  @endsection

@endsection

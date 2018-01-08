@extends('layouts.admin.home')
@section('statusH', 'active')
@section('content')
  <section class="widgets">

    @if(Session::has('msg'))
      <div class="alert-tw">
        <i class="ion-ios-checkmark-circle-outline"></i> &nbsp; {{ Session::get('msg') }}
      </div>
    @endif

    <div class="container">
      <div class="row">
        <div class="col col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <div class="box-widgets">
            <b>MENSAGENS</b>
            <br>
            <ul>
              <li>
                <div id="sparklinedash"></div>
              </li>
              <li class="contador">
                <b class="counter">{{ $cCount }}</b>
              </li>
            </ul>
          </div>
        </div>
        <div class="col col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <div class="box-widgets">
            <b>PROJETOS</b>
            <br>
            <ul>
              <li>
                <div id="sparklinedash2"></div>
              </li>
              <li class="contador">
                <b class="counter">100</b>
              </li>
            </ul>
          </div>
        </div>
        <div class="col col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <div class="box-widgets">
            <b>VENDAS</b>
            <br>
            <ul>
              <li>
                <div id="sparklinedash3"></div>
              </li>
              <li class="contador">
                <b class="counter">100</b>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="row white-box">
        <p><b>ÚLTIMAS MENSAGENS</b></p>
        @if($cCount == 0)
          <div class="center">
            <h3><i class="fa fa-info-circle" aria-hidden="true"></i> Nenhum contato ainda</h3>
          </div>
        @else
          <div class="table-responsive">
            <table class="table table-hover">
              <tr>
                <th>
                  #
                </th>
                <th>
                  <i class="ion-ios-text-outline"></i> DESCRIÇÃO
                </th>
                <th>
                  <i class="ion-ios-quote"></i> Tipo
                </th>
                <th>
                  <i class="ion ion-ios-calendar-outline"></i> Recebido em:
                </th>
                <th>
                  <i class="ion-ios-checkmark-circle-outline"></i> Visualizado
                </th>
                <th>
                  <i class="ion-ios-stats-outline"></i> DETALHES
                </th>
              </tr>
              </thead>
              <tbody>
              @foreach($contacts as $contato)
                <tr>
                  <td>{{ $contato->id }}</td>
                  <td>{{ $contato->message }}</td>
                  <td>
                    @if($contato->type == 0)
                      <span class="fora">Fora do Site</span>
                    @elseif($contato->type == 1)
                      <span class="dentro"> Dentro do site</span>
                    @endif
                  </td>
                  <td>
                    @php
                        $date = new Date($contato->created_at);
                        echo $date->format('d/m/Y') . " • " . $date->ago();
                        @endphp
                  </td>
                  <td>
                    @if($contato->read == 0)
                      <span class="fora">Não</span>
                    @elseif($contato->read == 1)
                      <span class="dentro"> Sim</span>
                    @endif
                  </td>
                  <td>
                    <a class="btn btn-xs btn-twuiseo2" href="{{ route('admin.contactShow', $contato->id) }}">
                      Ver
                    </a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
          {{ $contacts->links() }}
        @endif
      </div>

      <br>
      <div class="row white-box">
        <p><b>PROJETOS AGUARDANDO ANÁLISE</b></p>
        @if($nPCount == 0)
        <h4 style="text-align: center">Nenhum projeto ainda</h4>
        @else
        <div class="table-responsive">
          <table class="table table-hover">
            <tr>
              <th>
                #
              </th>
              <th>
                <i class="ion-ios-text-outline"></i> DESCRIÇÃO
              </th>
              <th>
                <i class="ion ion-ios-calendar-outline"></i> Resposta
              </th>
              <th>
                <i class="ion-ios-checkmark-circle-outline"></i> Tema
              </th>
              <th>
                <i class="ion-ios-checkmark-circle-outline"></i> Número/Email
              </th>
              <th>Nome</th>
              <th>Email</th>
              <th>
                <i class="ion-ios-stats-outline"></i> DETALHES
              </th>
            </tr>
            </thead>
            <tbody>

            @foreach($nprojects as $projeto)
            
            <tr>
              <td>{{ $projeto->id }}</td>
              <td>{{ $projeto->message }}</td>
              <td>
                {{ $projeto->type_response }}
              </td>
              <td>
                {{ $projeto->theme }}
              </td>
              <td>{{ $projeto->number }}</td>
              <td>{{ $projeto->name }}</td>
              <td>{{ $projeto->email }}</td>
              <td>
                <button class="btn btn-xs btn-twuiseo2">
                  <i class="fa fa-plus"></i>
                </button>
              </td>
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        @endif
        {{ $nprojects->links() }}
      </div>

      <br>
      <div class="row white-box">
        <p><b>PROJETOS CONCLUÍDOS</b></p>
        <div class="table-responsive">
          <table class="table table-hover">
            <tr>
              <th>
                #
              </th>
              <th>
                <i class="ion-ios-text-outline"></i> DESCRIÇÃO
              </th>
              <th>
                <i class="ion ion-ios-calendar-outline"></i> Iniciado em:
              </th>
              <th>
                <i class="ion-ios-checkmark-circle-outline"></i> Término
              </th>
              <th>
                <i class="ion-ios-stats-outline"></i> DETALHES
              </th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>1</td>
              <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
              <td>
                30/11/2017
              </td>
              <td>
                30/12/2017
              </td>
              <td>
                <button class="btn btn-xs btn-twuiseo2">
                  Ver
                </button>
              </td>
            </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

@endsection
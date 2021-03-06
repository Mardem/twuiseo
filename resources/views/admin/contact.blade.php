@extends('layouts.admin.home')
@section('statusC', 'active')
@section('content')

  <div class="container">
    <br>
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
  </div>

@endsection
@extends('layouts.admin.home')
@section('statusP', 'active')
@section('content')

    <div class="container">
        <br>
        <div class="row white-box">
            @if($countP == 0)
                <h4 style="text-align: center">Nenhum projeto aqui</h4>
            @else
                <i class="fa fa-filter"></i> <a href="?status=0">Aguardando análise</a> | <a href="{{ route('admin.project') }}">Todos</a>
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

                        @foreach($projects as $projeto)

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
                                    <a class="btn btn-xs btn-twuiseo2" href="{{ route('admin.viewProject', $projeto->id) }}">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
@endsection
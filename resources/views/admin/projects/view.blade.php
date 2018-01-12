@extends('layouts.admin.home')
@section('statusP', 'active')
@section('content')

    <div class="container">
        <br>
        <div class="row white-box">
            <div class="panel panel-default">
                <div class="panel-body">
                    <b>Nome: </b>{{ $project->name }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <span style="float: right;">
                        <b>Recebido em:</b>
                        @php
                            $date = new \Jenssegers\Date\Date($project->created_at);
                            echo $date->format('d/m/Y') . ' • ' . $date->ago();
                        @endphp
                    </span>
                    <br>
                    <b>Forma de resposta:</b> {{ $project->type_response }}
                    <span style="float: right;">
                        <b>Tema:</b>
                        {{ $project->theme }}
                    </span>
                    <br>
                    <b>Telefone:</b> {{ $project->number }}
                    <span style="float: right;">
                        <b>Email:</b>
                        <a href="malito:{{ $project->email }}">{{ $project->email }}</a>
                    </span>
                    <br>

                    @if($project->status == 0)
                        <b class="waiting">Em análise</b>
                    @elseif ($project->status == 1)
                        <b class="started">Iniciando</b>
                    @elseif ($project->status == 2)
                        <b class="working">Em andamento</b>
                    @elseif ($project->status == 3)
                        <b class="finished">Finalizado</b>
                    @endif

                    @if($project->finish != null)
                        <span style="float: right;">
                        <b>Término:</b>
                            <b class="finished">
                            @php
                                $date = new Date($project->finish);
                                echo $date->format('d/m/Y');
                            @endphp
                            </b>
                    </span>
                    @endif
                </div>
                <div class="panel-footer">
                    <a href="{{ url('admin/project/status/0', $project->id) }}" class="btn btn-twuiseo2">Em análise</a>
                    <a href="{{ url('admin/project/status/1', $project->id) }}" class="btn btn-twuiseo2">Iniciado</a>
                    <a href="{{ url('admin/project/status/2', $project->id) }}" class="btn btn-twuiseo2">Em
                        andamento</a>
                    <a href="{{ url('admin/project/status/3', $project->id) }}" class="btn btn-twuiseo2">Finalizado</a>
                </div>
            </div>
            <p><b>{{ $project->name }} enviou:</b></p>
            <div class="panel panel-default">
                <div class="panel-body">
                    {{ $project->message }}

                    @if($project->finish != null)
                        @else
                        <hr>
                        <form action="{{ route('admin.setFinish') }}" method="post">
                            {{ csrf_field() }}
                            Término:
                            <input type="date" class="form-control" name="finish">
                            <input type="text" class="hidden" value="{{ $project->id }}" name="id">
                            <br>
                            <button type="submit" class="btn btn-tw-reply">
                                Enviar
                            </button>
                        </form>
                    @endif
                </div>
                <div class="panel-footer">
                    <a href="{{ route('admin.project') }}" class="btn"><i
                                class="fa fa-arrow-circle-o-left"></i> Voltar</a>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    @if(Session::has('msg'))
        <script>
            alert('{{ Session::get('msg') }}');
        </script>
    @endif
@endsection
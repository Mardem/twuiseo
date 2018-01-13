@extends('layouts.admin.home')
@section('statusRest', 'active')
@section('content')

    <div class="container white-box">
        <h5>Atualizar tempo restante de projetos</h5>

        @if($cRt == 0)
            <h4 align="center"> Nenhum dado aqui :(</h4>
            @else
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th><i class="fa fa-archive"></i> Nome</th>
                        <th><i class="fa fa-user"></i> Cliente</th>
                        <th><i class="fa fa-minus-circle"></i> Restante</th>
                        <th><i class="fa fa-plus-circle"></i> Contratado</th>
                        <th><i class="fa fa-caret-down"></i> Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rT as $restTime)
                        <tr>
                            <td>{{ $restTime->id }}</td>
                            <td>{{ $restTime->nameProject }}</td>
                            <td>{{ $restTime->client }}</td>
                            <td>{{ $restTime->restTime }}</td>
                            <td>{{ $restTime->contrated }}</td>
                            <td>
                                <a href="{{ url('admin/update-time/' . 0 . '/' . $restTime->id) }}"><i class="fa fa-minus"></i></a> /
                                <a href="{{ url('admin/update-time/' . 1 . '/' . $restTime->id) }}"><i class="fa fa-plus"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        @endif
    </div>

@endsection

@section('scripts')
    @if(Session::has('msgError'))
        <script>
            $.sweetModal({
                content: '{{ Session::get('msgError') }}',
                icon: $.sweetModal.ICON_ERROR
            });
        </script>

    @endif
@endsection
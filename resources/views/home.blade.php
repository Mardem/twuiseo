@extends('layouts.user-d')

@section('content')
  <section class="user-info">
    <div class="row">
      <ul class="user-info-att">
        <li><img class="user-pic" src="{{ asset('../resources/images/others/user-pic.svg') }}" alt=""></li>
        <li class="user-name">
          Bem vindo, {{ $fName }}!
          @if(Auth::user()->category == 1)
            &nbsp;|&nbsp; <a href="{{ url('admin/dashboard') }}" class="admin-link">Administração</a>
          @endif
        </li>
        <li class="date">{{ date('d/m/Y') }}</li>
      </ul>
    </div>
    <br>
    <div class="row hidden" style="padding: 10px" id="panel-widgets">

      <div class="row" style="padding: 10px">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <div class="widgets">
            <header></header>
            <main>
              <h4 style="font-family: Montserrat, serif;">Projetos</h4>
              <ul>
                <li><span id="sparklinedash"></span></li>
                <li class="counter">{{ $npCount }}</li>
              </ul>
            </main>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <div class="widgets">
            <header></header>
            <main>
              <h4 style="font-family: Montserrat, serif;">Ganhos</h4>
              <ul>
                <li><span id="ganhos"></span></li>
                <li class="ri-counter">R$ <b class="counter">50</b>/ <sub>mês</sub></li>
              </ul>
            </main>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <div class="widgets">
            <header></header>
            <main>
              <h4 style="font-family: Montserrat, serif;">Mensagens</h4>
              <ul>
                <li><span id="sparklinedash2"></span></li>
                <li class="counter">15</li>
              </ul>
            </main>
          </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <div class="widgets">
            <header></header>
            <main>
              <h4 style="font-family: Montserrat, serif;">Tempo Restante</h4>
              <ul>
                <li><span id="sparklinedash3"></span></li>
                <li class="counter">9</li>
              </ul>
            </main>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <div class="calendar"></div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <div class="last-news">
          <div class="box">
            <div class="row">
              <div class="title"><i class="ion-ios-analytics" style="font-size: 25px"></i> Últimas do blog</div>
            </div>
            <main>
              <ul>
                <li class="title">Novas do blog</li>
                <li>Lorem ipsum dolor sit amet 1</li>
                <li>Lorem ipsum dolor sit amet 3</li>
                <li>Lorem ipsum dolor sit amet 2</li>
                <li>Lorem ipsum dolor sit amet 2</li>
                <li>Lorem ipsum dolor sit amet 2</li>
                <li>Lorem ipsum dolor sit amet 2</li>
                <li>Lorem ipsum dolor sit amet 2</li>
                <li>Lorem ipsum dolor sit amet 2</li>
                <li>Lorem ipsum dolor sit amet 2</li>
              </ul>
            </main>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="container">
      <br>
        <div class="panel panel-twuiseo">
          <div class="panel-heading">
          <h3 class="panel-title">Iniciar novo projeto</h3>
          </div>

          <div class="panel-body">
            <p>Olá, para criar um novo projeto por favor, preencha abaixo os dados sobre o seu novo projeto.</p>
            <form action="{{ route('newProject') }}" class="form" method="post">
            {{ csrf_field() }}
              <div class="form-group">
                <label for="theme">Tema</label>
                <input type="text" name="theme" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="number">Telefone para contato</label>
                <input type="text" name="number" class="form-control" required>
              </div>
              <div class="form-group">
                <p for="email"><b>Tipo de contato</b></p>
                <label>
                  <input type="radio" name="email">
                  Email
                </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label>
                  <input type="radio" name="cellphone">
                  Telefone
                </label>
              </div>
              <div class="form-group">
                <label for="message">Descrição do projeto</label>
                <textarea type="text" name="message" class="form-control" rows="7" required></textarea>
              </div>
          </div>
          <div class="panel-footer">
            <button type="submit" value="Enviar para orçamento" class="btn btn-tw-reply"><i class="fa fa-check"></i> Enviar para o orçamento</button>
          </div>          
          </form>
          
        </div>
      </div>
    </div>

    <div class="row navigation">

      <div class="tabs">
        <!-- TAB NAVIGATION -->
        <ul class="nav nav-tabs" role="tablist">
          <li class="active"><a href="#sites" role="tab" data-toggle="tab"><i class="ion-ios-home-outline"></i>
              <b>Sites</b></a></li>
          <li><a href="#project" role="tab" data-toggle="tab"><i class="fa fa-stack-exchange"></i> <b>Projetos</b></a>
          </li>
          <li><a href="#support" role="tab" data-toggle="tab"><i class="fa fa-flag"></i> <b>Suporte</b></a></li>
          <li><a href="#configuration" role="tab" data-toggle="tab"><i class="fa fa-cogs"></i> <b>Configurações</b></a>
          </li>
          <li><a href="#vendas" role="tab" data-toggle="tab"><i class="fa fa-usd"></i> <b>Suas Vendas</b></a></li>
        </ul>
        <!-- TAB CONTENT -->
        <div class="tab-content">
          <div class="active tab-pane fade in" id="sites">

            <div class="row">

              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="panel panel-twuiseo">
                  <div class="panel-heading">
                    <h3 class="panel-title">Site 1</h3>
                  </div>
                  <div class="panel-body">
                    <img src="../resources/images/others/site.png" class="img-responsive site-illustration"
                         alt="Site illustration">
                  </div>
                  <div class="panel-footer">
                    <a href="#" class="btn btn-twuiseo-site">Visitar</a>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="panel panel-twuiseo">
                  <div class="panel-heading">
                    <h3 class="panel-title">Site 2</h3>
                  </div>
                  <div class="panel-body">
                    <img src="../resources/images/others/site.png" class="img-responsive site-illustration"
                         alt="Site illustration">
                  </div>
                  <div class="panel-footer">
                    <a href="#" class="btn btn-twuiseo-site">Visitar</a>
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <div class="panel panel-twuiseo">
                  <div class="panel-heading">
                    <h3 class="panel-title">Site 3</h3>
                  </div>
                  <div class="panel-body">
                    <img src="../resources/images/others/site.png" class="img-responsive site-illustration"
                         alt="Site illustration">
                  </div>
                  <div class="panel-footer">
                    <a href="#" class="btn btn-twuiseo-site">Visitar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="vendas">
            <table class="table table-hover">
              <thead>
              <tr>
                <th>#</th>
                <th><i class="fa fa-user"></i> Cliente</th>
                <th><i class="fa fa-calendar-check-o" aria-hidden="true"></i> Iniciado em:</th>
                <th><i class="fa fa-times"></i> Término</th>
                <th><i class="fa fa-money"></i> Ganhos</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>1</td>
                <td>Cliente 1</td>
                <td>30/11/2017</td>
                <td>30/12/2017</td>
                <td>
                  <ul class="status-project">
                    <li class="waiting">Em espera</li>
                    <!--<li class="started">Iniciado</li>-->
                    <!--<li class="working">Em andamento</li>-->
                    <!--<li class="finished">Finalizado</li>-->
                  </ul>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Cliente 2</td>
                <td>30/11/2017</td>
                <td>30/12/2017</td>
                <td>
                  <ul class="status-project">
                    <!--<li class="waiting">Em espera</li>-->
                    <li class="started">Iniciado</li>
                    <!--<li class="working">Em andamento</li>-->
                    <!--<li class="finished">Finalizado</li>-->
                  </ul>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Cliente 3</td>
                <td>30/11/2017</td>
                <td>30/12/2017</td>
                <td>
                  <ul class="status-project">
                    <!--<li class="waiting">Em espera</li>-->
                    <!--<li class="started">Iniciado</li>-->
                    <li class="working">Em andamento</li>
                    <!--<li class="finished">Finalizado</li>-->
                  </ul>
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>Cliente 4</td>
                <td>30/11/2017</td>
                <td>30/12/2017</td>
                <td>
                  <ul class="status-project">
                    <!--<li class="waiting">Em espera</li>-->
                    <!--<li class="started">Iniciado</li>-->
                    <!--<li class="working">Em andamento</li>-->
                    <li class="finished">Finalizado</li>
                  </ul>
                </td>
              </tr>
              </tbody>
            </table>
          </div>
          <div class="tab-pane fade" id="project">
            <div class="table-responsive" style="font-family: Montserrat, serif">
              <b>SEUS PROJETOS</b>
              <table class="table">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Descrição</th>
                  <th>Iniciado em:</th>
                  <th>Término</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                
                @foreach($nP as $projeto)
                <tr>
                  <td>{{ $projeto->id }}</td>
                  <td>Projeto #{{ Auth::user()->id }}{{ $projeto->id }}</td>
                  @if($projeto->status == 0)
                    <td>Indefinido</td>
                    <td>Indefinido</td>
                    @else
                    <td>
                      @php 
                      $date = new Date($projeto->created_at);
                        echo $date->format('d/m/Y') . " • " . $date->ago();
                      @endphp
                    </td>
                    <td>@php 
                      $update = new Date($projeto->updated_at);
                        echo $update->format('d/m/Y') . " • " . $update->ago();
                      @endphp
                      </td>
                  @endif
                  <td>
                    <ul class="status-project">
                      @if($projeto->status == 0)
                        <li class="waiting">Em espera</li>
                      <!--<li class="started">Iniciado</li>-->
                      <!--<li class="working">Em andamento</li>-->
                      <!--<li class="finished">Finalizado</li>-->
                      @endif
                      
                    </ul>
                  </td>
                </tr>
                @endforeach

                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="support">
            <div class="row support-message">
              @if($cCount != 0)
                <div class="table-responsive">
                  <table>
                    <tbody>

                    @foreach($c as $msg)
                      <tr
                        @if($msg->responsered != 1)
                          class="read-message"
                        @else
                        class="unread-message"
                          @endif
                      >
                        <td class="icon-support">
                          <img src="{{ asset('resources/images/others/support-icon.svg') }}" alt="">
                        </td>
                        <td class="message-support">
                          <p class="title-message-support">Chamado #{{ $msg->id }}</p>
                          <a href="{{ route('viewContact', $msg->id) }}">{{ $msg->message }}</a>
                        </td>
                        <td class="date-support">
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          Criado por: <i class="fa fa-user"></i> {{ $msg->name }} &nbsp;
                            <i class="fa fa-clock-o"></i>
                          @php
                              $date = new Date($msg->created_at);
                          echo $date->format('d/m/Y') ." • " .$date->ago();
                              @endphp
                        </td>
                        <td>
                          @if($msg->responsered == 1)
                            <b class="text-success">Respondido</b>
                            @else
                            <b class="text-danger">Aguardando Resposta</b>
                          @endif
                        </td>
                      </tr>
                    @endforeach

                    </tbody>
                  </table>
                </div>
                @else
                  <h4 align="center" style="margin-bottom: 0;margin-top: 15px"><i class="ion-ios-close-circle"></i> Nenhuma mensagem aqui</h4>
              @endif

              <br>
              <a class="btn btn-primary" data-toggle="modal" href="#calls">Novo Chamado</a>
              <div class="modal fade" id="calls">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title"><i class="fa fa-bullhorn" aria-hidden="true"></i> Novo Chamado</h4>
                    </div>
                    <form action="{{ url('contact/back') }}" method="post">
                    <div class="modal-body">
                      <label for="message">
                        O que você precisa?
                      </label>
                      <textarea name="message" cols="30" rows="10" class="form-control" style="resize: none;"></textarea>
                      {{ csrf_field() }}
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                      <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                    </form>
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->
            </div>
          </div>

          <div class="tab-pane fade" id="configuration">
            <div class="container">
              <div class="center">
                <h4><i class="fa fa-user"></i> Dados Cadastrais</h4>
              </div>
              <div class="form-group">
                <label for="name-user">Nome:</label>
                <p>Marden Cavalcante</p>
              </div>
              <div class="form-group">
                <label for="email-user">Email:</label>
                <p>mardenmc22@gmail.com </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  @if(Session::has('msg'))
    <script>

      alert('{{ Session::get('msg') }}');
    </script>
  @endif
@endsection

@section('styles')
  textarea {
    resize:none;
  }

  .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
    text-align:center;
  }
@endsection

@section('scripts')

  <script>
  </script>

@endsection
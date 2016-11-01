<?php 
$propostas = getPropostasAtivas();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META SECTION -->
        <title>Gerador de Propostas</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->
		<link rel="stylesheet" type="text/css" id="theme" href="{{ asset('css/theme-default.css') }}"/>
        <link rel="stylesheet" type="text/css" id="theme" href="{{ asset('css/animate/animate.min.css')}}"/>
		<link rel="stylesheet" type="text/css" id="theme" href="{{ asset('css/app.css') }}"/>
        <link rel="stylesheet" type="text/css" id="theme" href="{{ asset('css/proposta.css') }}"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/sweetalert2/5.3.5/sweetalert2.min.css">
        <!-- EOF CSS INCLUDE -->


    </head>
    <body>


        <!-- START PAGE CONTAINER -->
        <div class="page-container">

            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar" >
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="/">Gerador de Propostas</a>
                        <a href="/" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-title">Gerar Propostas</li>
                    @foreach($propostas as $proposta)
                        <li>
                            <a href="/gerar-proposta/{{$proposta->id}}"><span class="fa fa-file-o"></span> <span class="xn-text"> {{$proposta->nome}} </span></a>
                        </li>
                    @endforeach
                   <!--  <li>
                        <a href="/gerar-proposta-servico"><span class="fa fa-file-o"></span> <span class="xn-text">Proposta de Serviço</span></a>
                    </li>

                    <li>
                        <a href="/gerar-proposta-venda"><span class="fa fa-file-o"></span> <span class="xn-text">Proposta de Venda</span></a>
                    </li> -->

                    <li class="xn-title">Consultar Propostas</li>
                    <li>
                        <a href="/propostas-servico"><span class="fa fa-file-text-o"></span> <span class="xn-text">Proposta de Serviço</span></a>
                    </li>

                    <li>
                        <a href="/propostas-venda"><span class="fa fa-file-text-o"></span> <span class="xn-text">Proposta de Venda</span></a>
                    </li>

                    <li class="xn-title">Templates</li>

                    <li>
                        <a href="/templates-texto"><span class="fa fa-file"></span>
                        <span class="xn-text">Textos</span></a>
                    </li>

                    <li>
                        <a href="/templates-tabela"><span class="fa fa-table"></span>
                        <span class="xn-text">Tabela</span></a>
                    </li>

                    <li class="xn-title">Calendário</li>

                    <li>
                        <a href="/calendario"><span class="fa fa-calendar"></span>
                        <span class="xn-text">Serviços</span></a>
                    </li>

                    <li class="xn-title">Dados da Empresa</li>

                    <li>
                        <a href="/configuracoes-gerais"><span class="fa fa-gear"></span>
                        <span class="xn-text">Configurações Gerais</span></a>
                    </li>

                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->

            <!-- PAGE CONTENT -->
            <div class="page-content">

                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>

                    <!-- POWER OFF -->
                    <li class="xn-icon-button pull-right last">
                        <a href="#"><span class="fa fa-power-off"></span></a>
                        <ul class="xn-drop-left animated zoomIn">
                            <li><a href="pages-lock-screen.html"><span class="fa fa-lock"></span> Lock Screen</a></li>
                            <li><a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span> Sign Out</a></li>
                        </ul>                        
                    </li> 
                    <!-- END POWER OFF --> 

                    <!-- TASKS -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="fa fa-bell"></span></a>
                        <div class="informer informer-warning">3</div>
                        <div class="panel panel-primary animated zoomIn xn-drop-left xn-panel-dragging">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="fa fa-bell"></span> Serviços Próximos</h3>                                
                                <div class="pull-right">
                                    <span class="label label-warning">3 ativos</span>
                                </div>
                            </div>
                            <div class="panel-body list-group scroll" style="height: 200px;">                                
                                <a class="list-group-item" href="#">
                                    <small class="text-muted">18/08/2016</small><br>
                                    <strong>Manutenção</strong><br>
                                    <small>Av Rio Branco 350 - 502 - Rio de Janeiro</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <small class="text-muted">18/08/2016</small><br>
                                    <strong>Manutenção</strong><br>
                                    <small>Av Rio Branco 350 - 502 - Rio de Janeiro</small>
                                </a>
                                <a class="list-group-item" href="#">
                                    <small class="text-muted">18/08/2016</small><br>
                                    <strong>Manutenção</strong><br>
                                    <small>Av Rio Branco 350 - 502 - Rio de Janeiro</small>
                                </a>
                               <a class="list-group-item" href="#">
                                    <small class="text-muted">18/08/2016</small><br>
                                    <strong>Manutenção</strong><br>
                                    <small>Av Rio Branco 350 - 502 - Rio de Janeiro</small>
                                </a>                               
                            </div>     
                            <div class="panel-footer text-center">
                                <a href="pages-tasks.html">Show all tasks</a>
                            </div>                            
                        </div>                        
                    </li>
                    <!-- END TASKS -->
                    <!-- END TOGGLE NAVIGATION -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->

                

                <div class="message-box message-box-info animated fadeIn open" id="carregando" style="display:none">
                    <div class="mb-container">
                        <div class="mb-middle">
                            <div class="mb-title"><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>Carregando</div>
                            <div class="mb-content">
                                <p></p>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="">

                        @yield('content')
                </div>

            </div>
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->

    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="{{ asset('js/plugins/jquery/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/plugins/jquery/jquery-ui.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/plugins/bootstrap/bootstrap.min.js') }}"></script>
        <script type='text/javascript' src="{{ asset('js/plugins/icheck/icheck.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/plugins/bootstrap/bootstrap-datepicker.js') }}"></script>
        <!-- END PLUGINS -->
        <script type="text/javascript" src="{{ asset('js/plugins/summernote/summernote.js') }}"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/sweetalert2/5.3.5/sweetalert2.min.js"></script>
        <!-- ANGULAR -->
<!--    <script type="text/javascript" src="js/plugins/angular/angular.min.js"></script>
        <script type="text/javascript" src="js/plugins/angular/angular-route.min.js"></script>
        <script type="text/javascript" src="js/app/app.js"></script> -->
        <!-- END ANGULAR -->

        <!-- THIS PAGE PLUGINS -->



        <!-- END PAGE PLUGINS -->

        <!-- START TEMPLATE -->

        <script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/actions.js') }}"></script>

        <script type="text/javascript">

            //chama o alerta passando parametros
            function customAlert(type, message, buttonName) {
                var customAlert =
                '<div class="message-box message-box-'+type+' animated fadeIn open" id="custom-alert">' +
                        '<div class="mb-container">' +
                            '<div class="mb-middle">' +
                                '<div class="mb-title"><i class="fa fa-exclamation-circle fa-3x fa-fw"></i>' + message +'</div>' +
                                '<div class="mb-content">' +
                                    '<p></p>' +
                                '</div>' +
                                '<div class="mb-footer">'+
                                '<button class="btn btn-default btn-lg pull-right mb-control-close">'+
                                buttonName+'</button>'+
                                '</div>'+
                            '</div>' +
                        '</div>' +
                    '</div>'; 

                    $('body').append(customAlert);
                    return customAlert;
            }

            $('body').on('click', '.mb-control-close',function(){
                var alert = $(this).closest('#custom-alert');
                $(alert).removeClass('open');
                console.log(alert);
            }); 
            

        </script>
        <!-- END TEMPLATE -->
        @yield('scripts')

    <!-- END SCRIPTS -->
    </body>
</html>

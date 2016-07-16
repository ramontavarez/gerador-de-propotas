<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>TITLE</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
      
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
                        <a href="/">ATLANT</a>
                        <a href="/" class="x-navigation-control"></a>
                    </li>                                                                      
                    <li class="xn-title">Gerar Propostas</li>
                    <li>
                        <a href="/gerar-proposta-servico"><span class="fa fa-file-o"></span> <span class="xn-text">Proposta de Serviço</span></a>
                    </li> 

                    <li>
                        <a href="/gerar-proposta-venda"><span class="fa fa-file-o"></span> <span class="xn-text">Proposta de Venda</span></a>
                    </li>

                    <li class="xn-title">Consultar Propostas</li>
                    <li>
                        <a href="/"><span class="fa fa-file-text-o"></span> <span class="xn-text">Proposta de Serviço</span></a>
                    </li> 

                    <li>
                        <a href="/"><span class="fa fa-file-text-o"></span> <span class="xn-text">Proposta de Venda</span></a>
                    </li>

                    <li class="xn-title">Calendário</li>

                    <li>
                        <a href="/calendario"><span class="fa fa-calendar"></span> 
                        <span class="xn-text">Serviços</span></a>
                    </li>

                    <li class="xn-title">Dados da Empresa</li>

                    <li>
                        <a href="/"><span class="fa fa-gear"></span> 
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
                    <!-- END TOGGLE NAVIGATION -->                    
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     
                
                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="/">Propostas</a></li>                    
                    <li class="active">Proposta de Serviço</li>
                </ul>
                <!-- END BREADCRUMB -->
                
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
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->
        <script type="text/javascript" src="js/plugins/summernote/summernote.js"></script>
        <!-- ANGULAR -->
<!--    <script type="text/javascript" src="js/plugins/angular/angular.min.js"></script>
        <script type="text/javascript" src="js/plugins/angular/angular-route.min.js"></script>
        <script type="text/javascript" src="js/app/app.js"></script> -->
        <!-- END ANGULAR -->

        <!-- THIS PAGE PLUGINS -->  

        

        <!-- END PAGE PLUGINS -->         

        <!-- START TEMPLATE -->

        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>        
        <!-- END TEMPLATE -->
        @yield('scripts')

    <!-- END SCRIPTS -->         
    </body>
</html>







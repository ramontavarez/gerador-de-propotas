@extends('base')
    @section('content')
                <ul class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li class="active">Configurações Gerais</li>
                </ul>
               <div class="page-title">
                    <h2><span class="fa fa-file"></span> Configurações Gerais</h2>
                </div>

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">

                    <div class="row">
                        <div class="col-md-12">

                    <!-- START HORIZONTAL FORM SAMPLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading" style="background:#fff">
                                    <h3 class="panel-title"><strong>Configurações Gerais</strong></h3>
                                </div>
                                <div class="panel-body">

                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Empresa</label>
                                            <div class="col-md-10">
                                                <input type="text" name="contratado" class="form-control"></input>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Logo</label>
                                            <div class="col-md-10">
                                                <input type="file" class="fileinput" name="filename1" id="filename1"/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Assinatura</label>
                                            <div class="col-md-10">
                                                <input type="file" class="fileinput" name="filename1" id="filename1"/>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Razão Social</label>
                                            <div class="col-md-10">
                                                <input type="text" name="contato" class="form-control" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Endereço</label>
                                            <div class="col-md-10">
                                                <input type="text" name="contato" class="form-control" >
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Telefone</label>
                                            <div class="col-md-10">
                                                <input type="text" name="contato" class="form-control" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Celular</label>
                                            <div class="col-md-10">
                                                <input type="text" name="contato" class="form-control" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Email</label>
                                            <div class="col-md-10">
                                                <input type="mail" name="contato" class="form-control" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">CNPJ</label>
                                            <div class="col-md-10">
                                                <input type="text" name="contato" class="form-control" >
                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="panel-footer">
                                    <a href="/proposta" class="btn btn-primary pull-right">Finalizar</a>
                                </div>
                            </div>

                
                                
                            

                        </div>
                    </div>

                </div>
                <!-- END PAGE CONTENT WRAPPER -->
        <!-- <script type="text/javascript" src="public/js/plugins.js"></script>          -->
        <!-- <script type="text/javascript" src="public/js/actions.js"></script>  -->

        @section('scripts')
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
        @endsection

        @endsection

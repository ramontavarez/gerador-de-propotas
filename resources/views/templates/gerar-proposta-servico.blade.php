@extends('blank')
    @section('content')
               <div class="page-title">                    
                    <h2><span class="fa fa-file"></span> Proposta de Serviço</h2>
                </div>                   
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                
                    <div class="row">
                        <div class="col-md-12">

                    <!-- START HORIZONTAL FORM SAMPLE -->
                            <div class="panel panel-default">
                             <div class="panel-heading" style="background:#fff">
                                <h3 class="panel-title"><strong>Cabeçalho</strong></h3>  
                             </div>
                                <div class="panel-body">
                                                                  
                                    <form class="form-horizontal" role="form">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Contratado</label>
                                            <div class="col-md-10">
                                                <input type="text" name="contratado" class="form-control"></input>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Contratante</label>
                                            <div class="col-md-10">
                                                <input type="text" name="contratante" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Contato</label>
                                            <div class="col-md-10">
                                                <input type="text" name="contato" class="form-control" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Data</label>
                                            <div class="col-md-10">
                                                <input type="date" name="data" class="form-control" >
                                            </div>
                                        </div>
                                  
                                    </form>                                                                                         
                                </div>
                            </div>

                             <div class="panel panel-default">
                             <div class="panel-heading" style="background:#fff">
                                <h3 class="panel-title"><strong>Proposta</strong></h3>  
                             </div>
                                <div class="panel-body">
                                                                 
                                    <form class="form-horizontal" role="form">

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Objetivo da Proposta</label>
                                            <div class="col-md-10">
                                                <textarea class="summernote "></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Definição do Serviço</label>
                                            <div class="col-md-10">
                                                <textarea class="summernote "></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Formas de Pagamento</label>
                                            <div class="col-md-10">
                                                <textarea class="summernote "></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Reajuste</label>
                                            <div class="col-md-10">
                                                <textarea class="summernote "></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Local e Início dos Serviços</label>
                                            <div class="col-md-10">
                                                <textarea class="summernote "></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Carga Horária</label>
                                            <div class="col-md-10">
                                                <textarea class="summernote "></textarea>
                                            </div>
                                        </div>
                                        
                                  
                                    </form>                                                                                         
                                </div>
                            </div>


                            <div class="panel panel-default">
                                <div class="panel-heading" style="background:#fff">
                                    <h3 class="panel-title"><strong>Serviços</strong></h3>
                                    <ul class="panel-controls">
                                        

                                        <li><a id="add-service" style="cursor:pointer;" data-toggle="tooltip" data-placement="left" title="Adicionar campo"><span class="fa fa-plus"></span></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                        <table class="table table-bordered table-striped service-table">

                                            <thead>
                                            <tr>
                                            <th width='250'>Serviço</th><th width="50">Valor</th>
                                            </tr>
                                            </thead>

                                            <tr class="service-line">
                                            <td><input type="" name="" class="form-control"></td>
                                            <td><input type="" name="" class="form-control"></td>
                                            </tr>

                                        </table>   
                                </div>      
                                <div class="panel-footer">
                                    <button class="btn btn-primary pull-right">Finalizar</button>
                                </div>                            
                            </div>

                        </div>
                    </div>
               
                </div>
                <!-- END PAGE CONTENT WRAPPER -->  
<!--         <script type="text/javascript" src="js/plugins.js"></script>         
        <script type="text/javascript" src="js/actions.js"></script>  -->
        @section('scripts')
        <script>
            $("#add-service").click(function(){
                $(".service-line").first().clone().appendTo('.service-table');
            });
        </script>
        @endsection

        @endsection
@extends('base')
    @section('content')
                <ul class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li class="active">Gerar proposta de serviço</li>
                </ul>
               <div class="page-title">
                    <h2><span class="fa fa-file"></span> {{$proposta->nome}} </h2>
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
                                        <!-- <div class="form-group">
                                            <label class="col-sm-2 control-label">Contratado</label>
                                            <div class="col-md-10">
                                                <input type="text" name="contratado" class="form-control"></input>
                                            </div>
                                        </div> -->
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Contratante</label>
                                            <div class="col-md-10">
                                                <input type="text" name="contratante" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Endereço</label>
                                            <div class="col-md-10">
                                                <input type="text" name="endereco" class="form-control" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Telefone</label>
                                            <div class="col-md-10">
                                                <input type="text" name="telefone" class="form-control" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Email</label>
                                            <div class="col-md-10">
                                                <input type="text" name="email" class="form-control" >
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">Data</label>
                                            <div class="col-md-10">
                                                <input type="date" name="data" class="form-control datepicker" >
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>

                             <div class="panel panel-default nav-tabs-vertical"">
                             <div class="panel-heading" style="background:#fff">
                                <h3 class="panel-title"><strong>Textos</strong></h3>
                             </div>
                              

                                <!-- START VERTICAL TABS WITH HEADING -->
                                           
                                <div class="tabs">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tab19" data-toggle="tab">Objetivo da Proposta</a></li>
                                        <li><a href="#tab20" data-toggle="tab">Definição do Serviço</a></li>
                                        <li><a href="#tab21" data-toggle="tab">Formas de Pagamento</a></li>
                                    </ul>                    
                                    <div class="panel-body tab-content">
                                        <div class="tab-pane active" id="tab19">
                                                 <textarea class="summernote1"></textarea>
                                        </div>
                                        <div class="tab-pane" id="tab20">
                                            <textarea class="summernote1"></textarea>
                                        </div>
                                        <div class="tab-pane" id="tab21">
                                           <textarea class="summernote1"></textarea>
                                        </div>                        
                                    </div>
                                </div>
                                             

                                        <!-- <form class="form-horizontal" role="form">

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


                                        </form> -->
                               
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
                                            <td><input type="" name="" class="form-control money-value"></td>
                                            </tr>

                                            <tr class="linha-final">
                                            <td align="center" > <!-- <button class="btn btn-default calcular-total">Calcular</button> -->
                                            <strong>Total:</strong>
                                            </td>
                                            <td align="center" >
                                                <input type="" name="" class="form-control total-result">
                                            </td>
                                            </tr>

                                        </table>
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
        <script src="{{ asset('js/jquery.maskMoney.js') }}"></script>
        <script src="{{ asset('js/tabelas-proposta.js') }}"></script>
        <script>
            /* Extended summernote editor */
            if($(".summernote1").length > 0){
                $(".summernote1").summernote({height: 150,
                    width:800,
                                             codemirror: {
                                                mode: 'text/html',
                                                htmlMode: true,
                                                lineNumbers: true,
                                                theme: 'default'
                                              },
                                                      toolbar: [
                                                          ["style", ["bold", "italic", "underline", "clear"]],
                                                          ["insert",[]]                                                          
                                                      ]
                });
            }
        </script>
       
        @endsection

        @endsection

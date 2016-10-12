@extends('base')
    @section('content')
    <ul class="breadcrumb">
        <!-- <li><a href="/">Propostas</a></li>                     -->
        <li class="active">Templates - Tabela</li>
    </ul>
<?php
use App\TemplateTabela;

$tabelas = TemplateTabela::get();
?>

<!-- MODAL NO HEAD -->
    <div class="modal animated fadeIn" id="modal_no_head" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true" >
        <div class="modal-dialog">
            <div class="modal-content">    
                <form role="form" class="form-material" method="POST" action="{{ route('salvar-template-tabela') }}">                
                <div class="modal-body">
                    <h3>Adicionar novo template</h3>
                    <p>Preencha os campos</p>
                            {!! csrf_field() !!} 
                            <div class="form-group">
                                <input type="text" class="form-control" name="titulo" id="" required>                                            
                                <span class="form-bar"></span>
                                <label for="exampleInputEmail1">Título</label>
                            </div>
                            
                                                  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" >Salvar</button>
                </div>
                </form>  
            </div>
        </div>
    </div> 

    <div class="modal animated fadeIn" id="modal_add_campo" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true" >
        <div class="modal-dialog">
            <div class="modal-content">                    
                <div class="modal-body">
                    <h3>Adicionar novo campo</h3>
                        <form role="form" class="form-material">

                            <div class="form-group">
                                <input type="email" class="form-control" id="" required>             
                                <span class="form-bar"></span>
                                <label for="exampleInputEmail1">Título</label>
                            </div>

                            <div class="form-group">
                                <select class="form-control" id="exampleInputSelect1">
                                    <option value="">Escolha um tipo</option>
                                    <option value="1">Texto</option>
                                    <option value="2">Select</option>
                                    <option value="3">Moeda</option>
                                </select>
                                <span class="form-bar"></span>
                                <label for="exampleInputSelect1">Tipo</label>
                            </div>

                        </form>                             
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Salvar</button>
                </div>
            </div>
        </div>
    </div> 


<!-- START CONTENT FRAME -->
        <div class="content-frame">

        <div class="message-box message-box-success animated fadeIn 
            @if(session()->has('success'))
            open
            @endif" id="message-box-success">
            
                <div class="mb-container">
                    <div class="mb-middle">
                        <div class="mb-title"><span class="fa fa-check"></span> Success</div>
                        <div class="mb-content">
                            <p>{{ session()->get('success') }}</p>
                        </div>
                        <div class="mb-footer">
                            <button class="btn btn-default btn-lg pull-right mb-control-close">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- START CONTENT FRAME TOP -->
            <div class="content-frame-top">                        
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Templates - tabela</h2>
                </div>                                      
                <div class="pull-right">
                    <button class="btn btn-default content-frame-left-toggle"><span class="fa fa-bars"></span></button>
                </div>                        
            </div>
            <!-- END CONTENT FRAME TOP -->
            
            <!-- START CONTENT FRAME LEFT -->
        <div class="content-frame-left">
            <div class="panel panel-default">
                <div class="panel-heading" style="background:#fff;">
                    <h3 class="panel-title"><span class="fa fa-file" style="margin-right:5px"></span>Tabelas</h3>
                    <ul class="panel-controls">                                                                        
                        <li><a href="" data-toggle="modal" data-target="#modal_no_head"><span class="fa fa-plus"></span></a></li>
                    </ul>                                   
                </div>

                <div class="panel-body list-group list-group-contacts"">
                    
                    @foreach($tabelas as $tabela)
                    <a href="#" class="list-group-item">                                   
                        <span class="contacts-title" >{{$tabela->titulo}}</span>
                        <p>Vazio</p>                                    
                    </a>
                    @endforeach

                   <!--  <a href="#" class="list-group-item">
                        <span class="contacts-title" >Produtos</span>
                        <p>Proposta de Venda</p>                                   
                    </a>    -->
    
                    </div>
                </div>
            </div>
            <!-- END CONTENT FRAME LEFT -->
            
            <!-- START CONTENT FRAME BODY -->
            <div class="content-frame-body">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3>Título do template</h3>
                        <form class="form-horizontal" role="form">

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Status:</label>
                                <div class="col-md-10">
                                    <label class="switch switch-small">
                                        <input type="checkbox" checked="" value="0">
                                        <span></span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Título:</label>
                                <div class="col-md-10">
                                    <input type="text" name="" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Pertence à:</label>
                                <div class="col-md-10">
                                    <select multiple class="form-control select">
                                        <option>Proposta de Venda</option>
                                        <option>Proposta de Serviço</option>
                                    </select>  
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" style="background:#fff">
                        <h3 class="panel-title">Campos</h3>
                        <ul class="panel-controls">
                            <li><a href="" data-toggle="modal" data-target="#modal_add_campo"><span class="fa fa-plus"></span></a></li>
                        </ul>
                    </div>
                  
                        <div class="panel-body list-group list-group-contacts">                                
                            <a href="#" class="list-group-item">                                    
                                <span class="contacts-title">Serviço</span>
                                <p><strong>Tipo:</strong> Select</p>                                    
                                <div class="list-group-controls">
                                    <button class="btn btn-primary btn-rounded"><span class="fa fa-pencil"></span></button>
                                     <button class="btn btn-danger btn-rounded"><span class="fa fa-trash"></span></button>
                                </div>                                    
                            </a>                                                                
                            <a href="#" class="list-group-item">                                    
                                
                                <span class="contacts-title">Valor</span>
                                <p><strong>Tipo:</strong> Valor($)</p> 
                                <div class="list-group-controls">
                                    <button class="btn btn-primary btn-rounded"><span class="fa fa-pencil"></span></button>
                                    <button class="btn btn-danger btn-rounded"><span class="fa fa-trash"></span></button>
                                </div>                                    
                            </a>
                              
                        </div>
                 
                </div>
            </div>
            <!-- END CONTENT FRAME BODY -->
        </div>
        <!-- END CONTENT FRAME -->

@section('scripts')
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
<script>

</script>
@endsection

@endsection
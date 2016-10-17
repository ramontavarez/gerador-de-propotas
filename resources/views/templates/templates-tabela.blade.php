@extends('base')
    @section('content')
    <ul class="breadcrumb">
        <!-- <li><a href="/">Propostas</a></li>                     -->
        <li class="active">Templates - Tabela</li>
    </ul>
<?php
use App\TemplateTabela;
use App\TemplateTabelaTh;
use App\Proposta;

$tabelas = TemplateTabela::get();
$propostas = Proposta::where('status', 1)->get();
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

                            <div class="form-group">
                                <select class="form-control" name="status">
                                    <option value="1">Ativado</option>
                                    <option value="0">Desativado</option>
                                </select>
                                <span class="form-bar"></span>
                                <label for="">Status</label>
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
                <form role="form" class="form-material" method="POST" action="{{ route('salvar-th') }}">{!! csrf_field() !!}                 
                <div class="modal-body">
                    <h3>Adicionar novo campo</h3>
                        
                            <input type="hidden" id="tabela-id" name="id">
                            <div class="form-group">
                                <input type="text" class="form-control" id="" name="nome" required>             
                                <span class="form-bar"></span>
                                <label for="exampleInputEmail1">Título</label>
                            </div>

                            <div class="form-group">
                                <select class="form-control" name="tipo" id="exampleInputSelect1" required>
                                    <option value="">Escolha um tipo</option>
                                    <option value="1">Texto</option>
                                    <option value="2">Select</option>
                                    <option value="3">Moeda</option>
                                </select>
                                <span class="form-bar"></span>
                                <label for="exampleInputSelect1">Tipo</label>
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
                    <button class="list-group-item" onclick="selecionarTabela({{$tabela->id}})">                                   
                        <span class="contacts-title" >{{$tabela->titulo}}</span>
                        <p>Vazio</p>                                    
                    </button>
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
                        <h3 id="template-titulo-display">Título do template</h3>
                        <form class="form-horizontal" role="form">

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Status:</label>
                                <div class="col-md-10 template-status-check">
                                    <label class="switch switch-small">
                                        <input type="checkbox"  id="template-status" >
                                        <span></span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Título:</label>
                                <div class="col-md-10">
                                    <input type="text" id="template-titulo" name="" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Pertence à:</label>
                                <div class="col-md-10">
                                    <select multiple class="form-control select" id="template-mid">
                                        @foreach($propostas as $proposta)
                                        <option value="{{$proposta->id}}">{{$proposta->nome}}</option>
                                        @endforeach
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
                  
                        <div class="panel-body list-group list-group-contacts" id="lista-de-campos"> 
                            
                            <!-- <a href="#" class="list-group-item">                                    
                                <span class="contacts-title">Valor</span>
                                <p><strong>Tipo:</strong> Valor($)</p> 
                                <div class="list-group-controls">
                                    <button class="btn btn-primary btn-rounded"><span class="fa fa-pencil"></span></button>
                                    <button class="btn btn-danger btn-rounded"><span class="fa fa-trash"></span></button>
                                </div>                                    
                            </a> -->
                              
                        </div>
                 
                </div>
                <button class="btn btn-primary pull-right" id="btn-salvar-tabela">Salvar</button>
            </div>
            <!-- END CONTENT FRAME BODY -->
        </div>
        <!-- END CONTENT FRAME -->

@section('scripts')

<script type="template/ajax" id="template-campo">
    <a href="#" class="list-group-item">                                    
        <span class="contacts-title" titulo=""> </span>
        <p tipo=""><strong>Tipo:</strong> </p>                                    
        <div class="list-group-controls">
            <button class="btn btn-primary btn-rounded"><span class="fa fa-pencil"></span></button>
             <button class="btn btn-danger btn-rounded"><span class="fa fa-trash"></span></button>
        </div>                                    
    </a>    
</script>   

<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
<script>
    //template teste
    // var campo = $("#template-campo").html();
    // $("#lista-de-campos").append(campo);
    //*****************************************

    function selecionarTabela(id) {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            beforeSend: function(){
                $("#carregando").show(); 
             },
            method: "POST",
            url: "/get-tabela",
            data: {
                _token: CSRF_TOKEN,
                id: id
            },
            dataType: 'JSON'
        })
        .done(function(data){

            $("#carregando").hide(); 
            var values = [];
            $(data[1]).each(function(){
                values.push(this.id);
            });


            var campo = $("#template-campo").html();
            $("#lista-de-campos").empty();

            if(data[2] != ""){
                $(data[2]).each(function(){
                    $("#lista-de-campos").append(buildCampo(this));
                });

            }

            $('#template-titulo-display').text(data[0].titulo);
            $('#template-titulo').val(data[0].titulo);
            $('#tabela-id').val(data[0].id);


            if(data[0].status == 1) {
                $('#template-status').prop('checked', true);
            } else {
                $('#template-status').prop('checked', false);
            }

            $('#template-status').val(data[0].status);
            $("#template-mid").selectpicker('val', values);

        });
    }

    function buildCampo(data) {
        var template = 
        '<a href="#" class="list-group-item">' +                                   
            '<span class="contacts-title">'+ data.nome +'</span>' +
            '<p tipo=""><strong>Tipo:</strong>'+data.tipo+'</p>' +                               
            '<div class="list-group-controls">' +
            '<button class="btn btn-primary btn-rounded"><span class="fa fa-pencil"></span></button>' +
            '<button class="btn btn-danger btn-rounded"><span class="fa fa-trash"></span></button>' +
            '</div>' +                                    
        '</a>';   
        return template;

    }

    $("#btn-salvar-tabela").click(function(){
        var checked = $('.template-status-check .switch input:checked').length;
        var status;
        checked ? status = 1 : status = 0;
        var titulo = $("#template-titulo").val();
        var mid = $('#template-mid').val();
        var id = $('#tabela-id').val();

        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            beforeSend: function(){
                $("#carregando").show(); 
             },
            method: "POST",
            url: "/atualizar-template-tabela",
            data: {
                _token: CSRF_TOKEN,
                id: id,
                titulo: titulo,
                status: status,
                mid: mid
            },
            dataType: 'JSON',
            success: function(data){
                $("#carregando").hide(); 
                $('#template-titulo').val(data.titulo);
            }
        });
    });


</script>
@endsection

@endsection
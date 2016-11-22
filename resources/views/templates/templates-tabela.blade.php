<?php
$propostas = getPropostasAtivas();
$tabelas = getTabelas();
?>

@extends('base')
    @section('content')
    <ul class="breadcrumb">
        <!-- <li><a href="/">Propostas</a></li>                     -->
        <li class="active">Templates - Tabela</li>
    </ul>

<!-- MODALS-->
    @include('components.tabela.modal-add-tabela')
    @include('components.tabela.modal-add-campo')
    @include('components.tabela.modal-edit-campo')
<!-- END MODALS -->

@include('components.alert.success')

<!-- START CONTENT FRAME -->
        <div class="content-frame">
    
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
                    <a style="cursor:pointer" class="list-group-item" onclick="selecionarTabela({{$tabela->id}})">                                   
                        <span class="contacts-title" >{{$tabela->titulo}}</span>
                        <p>
                        @foreach($tabela->propostas as $key => $propostaTabela)
                            @if($key != count($tabela->propostas) - 1)
                            {{$propostaTabela->nome .", "}}
                            @else
                            {{$propostaTabela->nome}}
                            @endif
                        @endforeach
                        </p>
                            <div class="list-group-controls">
                                 <button class="btn btn-danger btn-rounded btn-trash-tabela" tabela-id="{{$tabela->id}}"><span class="fa fa-trash"></span></button>
                            </div>                                       
                    </a>


                    @endforeach

                
    
                    </div>
                </div>
            </div>
            <!-- END CONTENT FRAME LEFT -->
            
            <!-- START CONTENT FRAME BODY -->
            <div class="content-frame-body" style="display:none">
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
                            <!-- Lista de campos -->
                              
                        </div>
                 
                </div>
                <button class="btn btn-primary pull-right" id="btn-salvar-tabela">Salvar</button>
            </div>
            <!-- END CONTENT FRAME BODY -->
        </div>
        <!-- END CONTENT FRAME -->

@section('scripts')

<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
<script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>

<script>

    
    //Lidando com o tipo select no momento de criar o campo
    $("#campo-opcoes").hide();

    $("#campo-select").change(function(){
        if($(this).val() == 2) {
            $("#campo-opcoes").show();
        } else {
            $("#campo-opcoes").hide();
        }
    });
    //*****************************************************
    var clickTrash = 0;
    $('.btn-trash-tabela').click(function(event) {
        return false;
    });

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
            $('.content-frame-body').hide();
            $('.content-frame-body').fadeIn(200);
            $("#carregando").hide(); 
            var values = [];
            $(data[1]).each(function(){
                values.push(this.id);
            });


            // var campo = $("#template-campo").html();
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
        '<a href="#" id='+data.id+' class="list-group-item">' +                                   
            '<span class="contacts-title">'+ data.nome +'</span>' +
            '<p tipo=""><strong>Tipo:</strong> '+ translateTipoCampo(data.tipo)+'</p>' +                               
            '<div class="list-group-controls">' +
            '<button class="btn btn-primary btn-rounded" style="margin-right:5px"><span class="fa fa-pencil"></span></button>' +
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

    $("#btn-salvar-campo").click(function(){
        var form = $("#add-campo-form");
        var id = $(form).find('[name="id"]').val();
        var nome = $(form).find('[name="nome"]').val();
        var tipo = $(form).find('[name="tipo"]').val();
        var ordem = $(form).find('[name="order"]').val();
        var opcoes = $(form).find('[name="opcoes"]').val();

        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            beforeSend: function(){
                $("#carregando").show(); 
             },
            method: "POST",
            url: "/salvar-th",
            data: {
                _token: CSRF_TOKEN,
                id: id,
                nome: nome,
                tipo: tipo,
                order: ordem,
                opcoes: opcoes
            },
            dataType: 'JSON',
            success: function(data){
                $("#carregando").hide(); 
                $('#template-titulo').val(data.titulo);

                if(data != ""){
                    $(data).each(function(){
                        $("#lista-de-campos").append(buildCampo(this));
                    });
                }
            }
        });
    });

    function translateTipoCampo(valor) {
        switch(valor) {
            case 1:
                return 'Texto';
                break;
            case 2:
                return 'Select';
                break;
            case 3:
                return 'Moeda';
                break;
            default:
                return 'Indefinido';
                break;
            }
    }

    $("#lista-de-campos").on('click', '.list-group-item', function(){
        var campoID = $(this).attr('id');
        $.ajax({
            url: '/get-th',
            method: "GET",
            data: {id: campoID},
            success: function(response) {
                $('#modal_edit_campo').modal();
                $('#edit-campo-form').find('[name="nome"]').val(response.nome);
                $('#edit-campo-form').find('[name="tipo"]').val(response.tipo);
                $('#edit-campo-form').find('[name="order"]').val(response.order);
            }
        });
        
    });

</script>
@endsection

@endsection
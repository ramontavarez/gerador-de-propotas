@extends('base')
    @section('content')
    <ul class="breadcrumb">
        <!-- <li><a href="/">Propostas</a></li>                     -->
        <li class="active">Templates - Proposta</li>
    </ul>
<?php
use App\TemplateTexto;
use App\Proposta;

$propostas = Proposta::where('status', 1)->get();
$templates = TemplateTexto::get();

?>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<!-- MODAL NO HEAD -->
    <div class="modal animated fadeIn" id="modal_no_head" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true" >
        <div class="modal-dialog">
            <div class="modal-content">   
                <form role="form" class="form-material" method="POST" action="{{ route('salvar-template-texto') }}">    
                {!! csrf_field() !!}             
                <div class="modal-body">
                    <h3>Adicionar novo template</h3>
                    <p>Preencha os campos</p>
                            <div class="form-group">
                                <input type="text" class="form-control" name="titulo" required>                                            
                                <span class="form-bar"></span>
                                <label for="">Título</label>
                            </div>
                            <div class="form-group">  
                                <input type="text" class="form-control" name="descricao" placeholder="">                                            
                                <span class="form-bar"></span>
                                <label for="">Descrição</label>        
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="status">
                                    <option value="1">Ativado</option>
                                    <option value="0">Desativado</option>
                                </select>
                                <span class="form-bar"></span>
                                <label for="">Status</label>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" name="texto" style="resize:none"></textarea>                                            
                                <span class="form-bar"></span>
                                <label for="">Textarea</label>
                            </div>
                                                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" value="Salvar" class="btn btn-primary" >
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
            
            
            <div class="message-box message-box-success animated fadeIn " id="alert-success">
                <div class="mb-container">
                    <div class="mb-middle">
                        <div class="mb-title"><span class="fa fa-check"></span> Texto Atualizado!</div>
                        <div class="mb-content">
                            <p></p>
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
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Frame Title</h2>
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
                    <h3 class="panel-title"><span class="fa fa-file" style="margin-right:5px"></span>Templates</h3>
                    <ul class="panel-controls">                                                                        
                        <li><a href="" data-toggle="modal" data-target="#modal_no_head"><span class="fa fa-plus"></span></a></li>
                    </ul>                                   
                </div>

                    <div class="panel-body list-group list-group-contacts"">
                        @foreach($templates as $template)
                        <button 
                        onclick="selecionarTemplate({{$template}})" 
                        class="list-group-item">                  
                            <span class="contacts-title">{{$template->titulo}}</span>
                            <p>
                            @if($template->descricao == '')
                            nenhuma descrição.
                            @else
                            {{$template->descricao}}
                            @endif
                            </p>                                    
                        </button>     
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- END CONTENT FRAME LEFT -->
            
            <!-- START CONTENT FRAME BODY -->
            <div class="content-frame-body">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 id="template-titulo-display">Título do template</h3>
                        <form class="form-horizontal" id="update-texto-form" role="form" >
                        {!! csrf_field() !!}
                            <input type="text" value="" id="template-texto-id" name="" hidden>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Status:</label>
                                <div class="col-md-10">
                                    <label class="switch switch-small">
                                        <input type="checkbox" name="status" id="template-status" value="0">
                                        <span></span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Título:</label>
                                <div class="col-md-10">
                                    <input type="text" name="titulo" id="template-titulo" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Descrição:</label>
                                <div class="col-md-10">
                                    <input type="text" name="descricao" id="template-descricao" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Pertence à:</label>
                                <div class="col-md-10">
                                    <select multiple class="form-control " id="template-mid" name="mid">
                                    @foreach($propostas as $proposta)
                                        <option value="{{$proposta->id}}">{{$proposta->nome}}</option>
                                    @endforeach
                                       <!--  <option value="1">Proposta de Venda</option>
                                        <option value="2">Proposta de Serviço</option> -->
                                    </select>  
                                </div>
                            </div>

                       
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3>Responsive Body</h3>
                        <textarea class="summernote template-text-edit" id="template-texto" name="texto">
                        <!-- <span class="text-danger">Nenhum template selecionado!</span><br> Selecione um dos templates criados na esquerda para vê-lo e editá-lo aqui. -->
                        </textarea>
                    </div>
                </div>
                
                <button class="btn btn-primary pull-right m-bottom-15" id="botao-atualizar-texto">Salvar</button>  
                </form>    
            </div>
            <!-- END CONTENT FRAME BODY -->
        </div>
        <!-- END CONTENT FRAME -->

@section('scripts')
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
<script>
        $('.content-frame-body').hide();
        $("#template-mid").selectpicker();

        $("#template-mid").on("change", function(){
            if($(this).val() == "" || null === $(this).val()){
                if(!$(this).attr("multiple"))
                    $(this).val("").find("option").removeAttr("selected").prop("selected",false);
            }else{
                $(this).find("option[value="+$(this).val()+"]").attr("selected",true);
            }
        });


        $(".note-toolbar").css('background', "#fff");
        $(".note-editor").css('border', 0);
        $(".note-statusbar").hide();

    function selecionarTemplate(template) {
        $('.content-frame-body').fadeIn();
        getPropostas(template.id);

        // $('#template-titulo-display').text(template.titulo);
        // $('#template-titulo').val(template.titulo);
        // $('#template-descricao').val(template.descricao);
        // $('.note-editable').text(template.texto);
        // $('.note-codable').attr('name', 'texto');
        // $('.note-codable').text(template.texto);
        // $('#template-texto-id').val(template.id);

        // if(template.status == 1) {
        //     $('#template-status').prop('checked', true);
        // } else {
        //     $('#template-status').prop('checked', false);
        // }

        // $('#template-status').val(template.status);

    }

    function getPropostas(id) {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            beforeSend: function(){
                $("#carregando").show(); 
             },
            method: "POST",
            url: "/get-propostas-from-texto",
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
            $('#template-titulo-display').text(data[0].titulo);
            $('#template-titulo').val(data[0].titulo);
            $('#template-descricao').val(data[0].descricao);
            $('.note-editable').text(data[0].texto);
            $('.note-codable').attr('name', 'texto');
            $('.note-codable').text(data[0].texto);
            $('#template-texto-id').val(data[0].id);

            if(data[0].status == 1) {
                $('#template-status').prop('checked', true);
            } else {
                $('#template-status').prop('checked', false);
            }

            $('#template-status').val(data[0].status);
            $("#template-mid").selectpicker('val', values);

        });
    }

    //tratando checkbox de status
    $('#template-status').change(function(){
        if ($(this).prop('checked')) {
            $(this).val(1);
        } else {
            $(this).val(0);
        }
    });
    //----------------------------

    $("#update-texto-form").on('submit', function(e){
        e.preventDefault();

        var titulo = $('#template-titulo').val();
        var descricao = $('#template-descricao').val();
        var status = $('#template-status').val();
        var mid = $('#template-mid').val();
        var texto = $('.note-editable').html();
        // var texto = $('#template-texto').val();
        var id = $('#template-texto-id').val();
        console.log(texto);
        atualizarTexto(titulo, descricao, status, mid, texto, id);
        // console.log(titulo, descricao, status, mid, texto);

    });

    function atualizarTexto(titulo, descricao, status, mid, texto, id) {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
             beforeSend: function(){
                $("#carregando").show(); 
             },
            method: "POST",
            url: "/atualizar-template-texto",
            data: {
                _token: CSRF_TOKEN,
                titulo: titulo,
                descricao: descricao,
                status: status,
                mid: mid,
                texto: texto,
                id: id
            },
            dataType: 'JSON'
        })
        .done(function(data){
            $("#carregando").hide(); 
            $("#alert-success").addClass('open');
        });
    }


</script>
@endsection

@endsection
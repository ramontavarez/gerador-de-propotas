@extends('base')
    @section('content')
    <ul class="breadcrumb">
        <!-- <li><a href="/">Propostas</a></li>                     -->
        <li class="active">Templates - Proposta</li>
    </ul>


<!-- MODAL NO HEAD -->
    <div class="modal animated fadeIn" id="modal_no_head" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true" >
        <div class="modal-dialog">
            <div class="modal-content">                    
                <div class="modal-body">
                    <h3>Adicionar novo template</h3>
                    <p>Preencha os campos</p>
                        <form role="form" class="form-material">
                            <div class="form-group">
                                <input type="email" class="form-control" id="" required>                                            
                                <span class="form-bar"></span>
                                <label for="exampleInputEmail1">Título</label>
                            </div>
                            <div class="form-group">  
                                <input type="text" class="form-control" id="" placeholder="">                                            
                                <span class="form-bar"></span>
                                <label for="exampleInputPassword1">Subtítulo</label>        
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="exampleInputSelect1">
                                    <option value="">Escolha um status</option>
                                    <option value="1">Ativado</option>
                                    <option value="2">Desativado</option>
                                </select>
                                <span class="form-bar"></span>
                                <label for="exampleInputSelect1">Status</label>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="5" id="exampleTextArea1" style="resize:none"></textarea>                                            
                                <span class="form-bar"></span>
                                <label for="exampleTextArea1">Textarea</label>
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

                    <a href="#" class="list-group-item">                  
                                    
                        
                        <span class="contacts-title">Definição do Serviço</span>
                        <p>Definir serviços à serem prestados</p>                                    
                    </a>     

                    <a href="#" class="list-group-item">                  
                                   
                        
                        <span class="contacts-title">Definição do Serviço</span>
                        <p>Definir serviços à serem prestados</p>                                    
                    </a>   

                    <a href="#" class="list-group-item">                  
                                     
                      
                        <span class="contacts-title">Formas de Pagamento</span>
                        <p>Definir todas as formas de pagamento </p>                                    
                    </a> 

                    <a href="#" class="list-group-item">                  
                                     
                        
                        <span class="contacts-title">Local e Início dos Serviços</span>
                        <p>Definir localidades</p>                                    
                    </a>   

    
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
                                <label class="col-sm-2 control-label">Descrição:</label>
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
                    <div class="panel-body">
                        <h3>Responsive Body</h3>
                        <textarea class="summernote template-text-edit"><span class="text-danger">Nenhum template selecionado!</span><br> Selecione um dos templates criados na esquerda para vê-lo e editá-lo aqui.
                        </textarea>
                    </div>
                </div>
            </div>
            <!-- END CONTENT FRAME BODY -->
        </div>
        <!-- END CONTENT FRAME -->

@section('scripts')
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
<script>
        $(".summernote").summernote({
            height: 150,
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

        $(".note-toolbar").css('background', "#fff");
        $(".note-editor").css('border', 0);
        $(".note-statusbar").hide();


</script>
@endsection

@endsection
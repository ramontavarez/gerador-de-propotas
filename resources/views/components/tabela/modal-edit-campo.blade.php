<div class="modal animated fadeIn" id="modal_edit_campo" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true" >
        <div class="modal-dialog">
            <div class="modal-content">   
                <!-- <form role="form" class="form-material" method="POST" action="{{ route('salvar-th') }}">{!! csrf_field() !!}                  -->
                <form role="form" class="form-horizontal" id="edit-campo-form">
                {!! csrf_field() !!}                 

                <div class="modal-body">
                    <h3>Adicionar novo campo</h3>
                        
                            <input type="hidden" id="tabela-id" name="id">

                            <div class="form-group">
                                <label class="control-label">Título:</label>
                                <input type="text" class="form-control" id="campo-nome" name="nome" required> 
                            </div>

                            <div class="form-group">
                                <label class="control-label">Tipo</label>
                                <select class="form-control" name="tipo" id="campo-select" required>
                                    <option value="">Escolha um tipo</option>
                                    <option value="1">Texto</option>
                                    <option value="2">Select</option>
                                    <option value="3">Moeda</option>
                                </select>
                            </div>

                            <div class="form-group" id="campo-opcoes" style="display:none">
                                <label class="control-label">Opções</label>
                                <input type="text" class="tagsinput" name="opcoes" value=""/>
                            </div> 

                            <div class="form-group">
                                <label class="control-label">Ordem</label>
                                <input type="number" class="form-control" id="" name="order" required>
                            </div>

                                                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" 
                    data-dismiss="modal" id="btn-atualizar-campo">Salvar</button>
                </div>
                </form> 
            </div>
        </div>
    </div> 
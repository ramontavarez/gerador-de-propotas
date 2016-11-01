<div class="modal animated fadeIn" id="modal_no_head" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true" >
        <div class="modal-dialog">
            <div class="modal-content">    
                <form role="form" class="form-horizontal" method="POST" action="{{ route('salvar-template-tabela') }}">                
                <div class="modal-body">
                    <h3>Adicionar novo template</h3>
                    <p>Preencha os campos</p>
                            {!! csrf_field() !!} 

                            <div class="form-group">
                                <label for="exampleInputEmail1">Título</label>
                                <input type="text" class="form-control" name="titulo" id="" required>                                            
                            </div>

                            <div class="form-group">
                                <label for="">Status</label>
                                <select class="form-control" name="status">
                                    <option value="1">Ativado</option>
                                    <option value="0">Desativado</option>
                                </select>
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
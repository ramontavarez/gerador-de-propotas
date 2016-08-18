@extends('base')
@section('content')
	<div class="error-container">
            <div class="error-code">404</div>
            <div class="error-text">Página não encontrada</div>
            <div class="error-subtext">Infelizmente nós estamos tendo problemas para carregar a página que você está procurando. Por favor, aguarde um momento e tente novamente ou use uma das ações abaixo.</div>
            <div class="error-actions">                                
                <div class="row">
                    <div class="col-md-6">
                        <button class="btn btn-info btn-block btn-lg" onClick="document.location.href = '/';">Home</button>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-primary btn-block btn-lg" onClick="history.back();">Página Anterior</button>
                    </div>
                </div>                                
            </div>
           <!--  <div class="error-subtext">Or you can use search to find anything you need.</div>
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group">
                        <input type="text" placeholder="Search..." class="form-control"/>
                        <div class="input-group-btn">
                            <button class="btn btn-primary"><span class="fa fa-search"></span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div> --> 
@endsection
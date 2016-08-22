@extends('base')
    @section('content')  
    <ul class="breadcrumb">
        <li class="active">Proposta</li>
    </ul>
    <div class="row">
            <div class="col-md-12">
                
                <div class="panel panel-default">
                    <div class="panel-body">                            
                        <!-- <h2>PROPOSTA <strong>#Y14-152</strong></h2> -->
                        <!-- <div class="push-down-10 pull-right">
                            <button class="btn btn-default"><span class="fa fa-print"></span> Print</button>                                        
                        </div> -->
                        <!-- INVOICE -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="header-proposta">
                                    <div class="invoice-logo ">
                                        <img src="img/logo1.png" height="90px">
                                    </div>

                                    <div class="cabecalho-proposta">
                                            <h3>FS Refrigeração</h3>
                                            <p>45 StreetName St. City, Country, 00000</p>
                                            <p>Phone: +98(765) 432-10-98</p>
                                            <p>contato@fsrefrigeracao.com.br</p>
                                            <p>CNPJ: 37.713.422/0001-14</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice">

                            <div class="row sub-header">
                                
                                <div class="col-md-8">

                                    <blockquote class="contratante">
                                        <h5>Contratante:</h5>
                                        <h6>Empresa/Cliente</h6>
                                        <p>15 Nameofstreet St. City, Country, 00000</p>
                                        <p>Phone: +01(234) 567-89-01</p>
                                        <p>CNPJ: 37.713.422/0001-14</p>
                                    </blockquote>                                        

                                </div>
                                <div class="col-md-4">

                                    <div class="proposta-infos">
                                        <h3>Proposta#ID-1</h3>
                                        <p><strong>Data:</strong> {{date('d/m/Y')}}</p>
                                        <p><strong>Data de Vencimento:</strong> {{date('d/m/Y')}}</p>
                                      <!--   <table class="table table-striped">
                                            <tr>
                                                <td width="200">Número da Proposta:</td><td class="text-right">#Y14-152</td>
                                            </tr>
                                            <tr>
                                                <td>Data:</td><td class="text-right">{{date('d/m/Y')}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Total:</strong></td><td class="text-right"><strong>$2,600.00</strong></td>
                                            </tr>
                                        </table> -->

                                    </div>                                        

                                </div>
                            </div>
                            
                            <div class="table-invoice">
                                <table class="table">
                                    <tr>
                                        <th>Descrição dos Itens</th>
                                        <th class="text-center">Unidade</th>
                                        <th class="text-center">Quantidade</th>
                                        <th class="text-center">Total</th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Serviço 1</strong>
                                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sagittis sed mi sit amet porta.</p> -->
                                        </td>
                                        <td class="text-center">$100.00</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">$100.00</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Serviço 2</strong>
                                            <!-- <p>Aliquam id eleifend turpis. Sed tincidunt purus laoreet luctus sollicitudin.</p> -->
                                        </td>
                                        <td class="text-center">$2,000.00</td>
                                        <td class="text-center">1</td>
                                        <td class="text-center">$2,000.00</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Serviço 3</strong>
                                            <!-- <p>http://domain.com/ dolor sed aliquam porttitor, felis nisl fermentum est, sed dapibus quam sapien nec felis</p> -->
                                        </td>
                                        <td class="text-center">$50.00</td>
                                        <td class="text-center">10</td>
                                        <td class="text-center">$500.00</td>
                                    </tr>
                                </table>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Objetivo da Proposta</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sagittis sed mi sit amet porta.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sagittis sed mi sit amet porta.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sagittis sed mi sit amet porta.</p>
                                </div>

                                <div class="col-md-12">
                                    <h4>Definição do Serviço</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sagittis sed mi sit amet porta.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sagittis sed mi sit amet porta.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sagittis sed mi sit amet porta.</p>
                                </div>

                                <div class="col-md-12">
                                    <h4>Reajuste</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sagittis sed mi sit amet porta.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sagittis sed mi sit amet porta.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sagittis sed mi sit amet porta.</p>
                                </div>
                            </div>

                        </div>
                        <!-- END INVOICE -->

                        <div class="row">
                            
                            <div class="col-md-12">
                                <hr>
                            </div>
                                    <div class="col-md-8">
                                        <p>De acordo em:</p>
                                        <p>____/____/_________</p>
                                        <p class="assinatura-contratante">_____________________________________________________________________</p>
                                        <span>Ass./Carimbo</span>
                                    </div>   

                                    <div class="col-md-4">
                                        <p class="assinatura-contratado">
                                        FS Refrigeração<br>
                                        Razão social da empresa proponente
                                        </p>
                                    </div> 
                           
                        </div>

                    </div>
                </div>
        
            </div>
        </div>
@endsection
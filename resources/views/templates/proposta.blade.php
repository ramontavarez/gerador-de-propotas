@extends('base')
    @section('content')  
    <ul class="breadcrumb">
        <li class="active">Proposta</li>
    </ul>
    <div class="row">
            <div class="col-md-12">
                
                <div class="panel panel-default">
                    <div class="panel-body">                            
                        <h2>PROPOSTA <strong>#Y14-152</strong></h2>
                        <div class="push-down-10 pull-right">
                            <button class="btn btn-default"><span class="fa fa-print"></span> Print</button>                                        
                        </div>
                        <!-- INVOICE -->
                        <div class="invoice">

                            <div class="row">
                                <div class="col-md-4">

                                    <div class="invoice-address">
                                        <h5>Contratado:</h5>
                                        <h6>FS Refrigeração</h6>
                                        <p>Vinicius</p>
                                        <p>45 StreetName St.</p>
                                        <p>City, Country, 00000</p>
                                        <p>Phone: +98(765) 432-10-98</p>
                                        <p>CNPJ: 37.713.422/0001-14</p>
                                    </div>

                                </div>
                                <div class="col-md-4">

                                    <div class="invoice-address">
                                        <h5>Contratante:</h5>
                                        <h6>Empresa do Cliente</h6>
                                        <p>Nome do Cliente</p>
                                        <p>15 Nameofstreet St.</p>
                                        <p>City, Country, 00000</p>
                                        <p>Phone: +01(234) 567-89-01</p>
                                        <p>CNPJ: 37.713.422/0001-14</p>
                                    </div>                                        

                                </div>
                                <div class="col-md-4">

                                    <div class="invoice-address">
                                        <h5>Proposta</h5>
                                        <table class="table table-striped">
                                            <tr>
                                                <td width="200">Número da Proposta:</td><td class="text-right">#Y14-152</td>
                                            </tr>
                                            <tr>
                                                <td>Data:</td><td class="text-right">{{date('d/m/Y')}}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Total:</strong></td><td class="text-right"><strong>$2,600.00</strong></td>
                                            </tr>
                                        </table>

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

                    </div>
                </div>
        
            </div>
        </div>
@endsection
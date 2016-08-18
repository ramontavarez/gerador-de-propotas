@extends('blank')
	@section('content')
                <ul class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li class="active">Propostas</li>
                </ul>
        <!-- START RESPONSIVE TABLES -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">

                                <div class="panel-heading">
                                    <h3 class="panel-title">Propostas de Serviços</h3>
                                </div>

                                <div class="panel-body panel-body-table">

                                    <div class="table-responsive">
                                        <table class="table table-striped table-actions">
                                            <thead>
                                                <tr>
                                                    <th width="50">id</th>
                                                    <th>Contratado</th>
                                                    <th width="80">status</th>
                                                    <th width="100">total</th>
                                                    <th width="100">data</th>
                                                    <th width="160">ações</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr id="trow_1">
                                                    <td class="text-center">1</td>
                                                    <td><strong>John Doe</strong></td>
                                                    <td><span class="label label-success">Aprovada</span></td>
                                                    <td>$430.20</td>
                                                    <td>24/09/2015</td>
                                                    <td>
                                                        <button class="btn btn-default btn-rounded btn-condensed btn-sm"><span class="fa fa-pencil"></span></button>
                                                        <a href="/proposta" class="btn btn-default btn-rounded btn-condensed btn-sm"><span class="fa fa-print"></span></a>
                                                        <button class="btn btn-danger btn-rounded btn-condensed btn-sm" onClick="delete_row('trow_1');"><span class="fa fa-trash"></span></button>

                                                    </td>
                                                </tr>
                                                <tr id="trow_2">
                                                    <td class="text-center">2</td>
                                                    <td><strong>Dmitry Ivaniuk</strong></td>
                                                    <td><span class="label label-warning">Pendente</span></td>
                                                    <td>$1,351.00</td>
                                                    <td>23/09/2015</td>
                                                    <td>
                                                        <button class="btn btn-default btn-rounded btn-condensed btn-sm"><span class="fa fa-pencil"></span></button>
                                                        <a href="/proposta" class="btn btn-default btn-rounded btn-condensed btn-sm"><span class="fa fa-print"></span></a>
                                                        <button class="btn btn-danger btn-rounded btn-condensed btn-sm" onClick="delete_row('trow_1');"><span class="fa fa-trash"></span></button>
                                                    </td>
                                                </tr>
                                                <tr id="trow_3">
                                                    <td class="text-center">3</td>
                                                    <td><strong>Nadia Ali</strong></td>
                                                    <td><span class="label label-danger">Negada</span></td>
                                                    <td>$2,621.00</td>
                                                    <td>22/09/2015</td>
                                                    <td>
                                                        <button class="btn btn-default btn-rounded btn-condensed btn-sm"><span class="fa fa-pencil"></span></button>
                                                        <a href="/proposta" class="btn btn-default btn-rounded btn-condensed btn-sm"><span class="fa fa-print"></span></a>
                                                        <button class="btn btn-danger btn-rounded btn-condensed btn-sm" onClick="delete_row('trow_1');"><span class="fa fa-trash"></span></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- END RESPONSIVE TABLES -->

	@endsection

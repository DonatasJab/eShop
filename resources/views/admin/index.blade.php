@extends('admin.template')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                    <li class="active"><a href="{{ route('admin.home') }}">Apžvalga</a></li>
                </ul>
                <ul class="nav nav-sidebar">
                    <li><a href="{{ route('admin.products') }}">Prekės</a></li>
                    <li><a href="{{ route('admin.categories') }}">Kategorijos</a></li>
                </ul>
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">Apžvalga</h1>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading"><span class="glyphicon glyphicon-user"></span> Vartotojai <span class="badge badge-success pull-right">{{ count($users) }}</span></div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Slapyvardis</th>
                                        <th>Vardas</th>
                                        <th>Pavardė</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ $user->username }}</td>
                                            <td>{{ $user->first_name }}</td>
                                            <td>{{ $user->last_name }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading"><span class="glyphicon glyphicon-check"></span> Užsakymai <span class="badge badge-success pull-right">{{ count($orders) }}</span></div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Užsisakė</th>
                                        <th>Užsakymo data</th>
                                        <th>Kiekis</th>
                                        <th>Suma</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders as $order)
                                        <tr>
                                            <td>{{ $order->username }}</td>
                                            <td>{{ $order->created_at }}</td>
                                            <td>{{ $order->quantity }}</td>
                                            <td>{{ $order->total }} €</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
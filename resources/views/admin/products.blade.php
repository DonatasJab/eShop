@extends('admin.template')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                    <li><a href="{{ route('admin.home') }}">Apžvalga</a></li>
                </ul>
                <ul class="nav nav-sidebar">
                    <li class="active"><a href="{{ route('admin.products') }}">Prekės</a></li>
                    <li><a href="{{ route('admin.categories') }}">Kategorijos</a></li>
                </ul>
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">Produktai</h1>

                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Produktai <a href="{{ route('admin.new.product') }}" class="btn-xs btn-success pull-right">Naujas produktas</a>
                        </div>
                        <div class="panel-body">
                            @if(count($products))
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tbody>
                                            @foreach($products as $product)
                                                <tr>
                                                    @if($product->image)
                                                        <td><img src="{{ $product->image }}" width="50px" height="50px"></td>
                                                    @else
                                                        <td><img src="http://theccat.com/wp-content/themes/gonzo/images/no-image-featured-image.png" width="50px" height="50px"></td>
                                                    @endif
                                                    <td style="vertical-align: middle;">{{ $product->title }}</td>
                                                    <td style="vertical-align: middle;">{{ $product->price }} €</td>
                                                    <td width="5%;" style="vertical-align: middle;">
                                                        <a href="{{ route('admin.edit.product', ['id' => $product->id]) }}"><span style="color: grey;" class="glyphicon glyphicon-pencil"></span></a>
                                                        <a href="{{ route('admin.delete.product', ['id' => $product->id]) }}"><span style="color: red;" class="glyphicon glyphicon-trash"></span></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                Nėra pridėta jokių prekių!
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
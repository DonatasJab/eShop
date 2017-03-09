@extends('admin.template')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                    <li><a href="{{ route('admin.home') }}">Apžvalga</a></li>
                </ul>
                <ul class="nav nav-sidebar">
                    <li><a href="{{ route('admin.products') }}">Prekės</a></li>
                    <li class="active"><a href="{{ route('admin.categories') }}">Kategorijos</a></li>
                </ul>
            </div>
            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">Kategorijos</h1>

                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Kategorijos <a href="{{ route('admin.new.category') }}" class="btn-xs btn-success pull-right">Nauja kategorija</a>
                        </div>
                        <div class="panel-body">
                            @if(count($categories))
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tbody>
                                            @foreach($categories as $category)
                                                <tr>
                                                    <td>{{ $category->title }}</td>
                                                    <td width="5%;">
                                                        <a href="{{ route('admin.edit.category', ['id' => $category->id]) }}"><span style="color: grey;" class="glyphicon glyphicon-pencil"></span></a>
                                                        <a href="{{ route('admin.delete.category', ['id' => $category->id]) }}"><span style="color: red;" class="glyphicon glyphicon-trash"></span></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                Nėra sukurtų kategorijų!
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
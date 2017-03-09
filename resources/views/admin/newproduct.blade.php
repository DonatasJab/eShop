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
                <h1 class="page-header">Naujas produktas</h1>

                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Naujas produktas
                        </div>
                        <div class="panel-body">
                            <form action="{{ route('admin.new.product') }}" method="POST">
                                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                    <label for="title" class="control-label">Pavadinimas</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Prekės pavadinimas" value="{{ old('title') }}">
                                    @if($errors->has('title'))
                                        <span class="help-block">{{ $errors->first('title') }}</span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                                    <label for="category_id" class="control-label">Kategorija</label>
                                    <select class="form-control" id="category_id" name="category_id">
                                        <option disabled>-- Pasirinkit kategoriją --</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('category_id'))
                                        <span class="help-block">{{ $errors->first('category_id') }}</span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                                    <label for="image" class="control-label">Nuotraukos adresas (URL)</label>
                                    <input type="text" class="form-control" id="image" name="image" placeholder="http://www.img.com/54aaqfh9" value="{{ old('image') }}">
                                    @if($errors->has('image'))
                                        <span class="help-block">{{ $errors->first('image') }}</span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                    <label for="price" class="control-label">Kaina</label>
                                    <input type="text" class="form-control" id="price" name="price" placeholder="49.99" value="{{ old('price') }}">
                                    @if($errors->has('price'))
                                        <span class="help-block">{{ $errors->first('price') }}</span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                    <label for="description" class="control-label">Aprašymas</label>
                                    <textarea rows="3" cels="9" class="form-control" id="description" name="description" placeholder="Trumpas aprašymas apie prekę">{{ old('description') }}</textarea>
                                    @if($errors->has('description'))
                                        <span class="help-block">{{ $errors->first('description') }}</span>
                                    @endif
                                </div>
                                <div class="form-group pull-right">
                                    <button type="submit" class="btn btn-success">Pridėti</button>
                                </div>
                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
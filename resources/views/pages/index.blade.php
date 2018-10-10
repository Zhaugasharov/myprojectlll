@extends('template')
@section('title') Main page @endsection
@section('keywords')
@endsection
@section('description')
@endsection
@section('css')
@endsection

@section('content')
    <div class="container">
        <div class="row bar">
            <div class="col-md-2">
                <div class="btn-group">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Looking for
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Looking for</a>
                        <a class="dropdown-item" href="#">Found</a>
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                <div class="btn-group">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        People
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">People</a>
                        <a class="dropdown-item" href="#">Car</a>
                        <a class="dropdown-item" href="#">Animal</a>
                        <a class="dropdown-item" href="#">Thing</a>
                        <a class="dropdown-item" href="#">Information</a>
                    </div>
                </div>
                <button class="btn float-right btn-success btn-sm"><i class="fa fa-search"></i> Search</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-9">

            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
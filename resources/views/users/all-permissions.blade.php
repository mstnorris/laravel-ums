@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

                <h1><i class="fa fa-fw fa-unlock"></i> All Permissions</h1>

                <p class="lead">Welcome {{ auth()->user()->name }}</p>

            </div>
        </div>
    </div>
@endsection
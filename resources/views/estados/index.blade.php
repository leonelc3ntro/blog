@extends('layouts.default')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Estados</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('estados.create') }}"> Create New Estado</a>
            </div>
        </div>
    </div>

    @include('estados.table')

    {!! $estados->render() !!}

@endsection
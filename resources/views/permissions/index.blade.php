@extends('layouts.default')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Permissions</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('users.create') }}"> Create New Permission</a>
            </div>
        </div>
    </div>

    @include('permissions.table')

    {!! $permissions->render() !!}

@endsection
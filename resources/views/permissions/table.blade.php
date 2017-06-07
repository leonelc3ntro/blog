@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Display Name</th>
            <th>Description</th>            
            <th width="280px">Action</th>
        </tr>
    @foreach ($permissions as $key => $permission)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $permission->name }}</td>
        <td>{{ $permission->display_name }}</td>
        <td>{{ $permission->description }}</td>
        <td>{!! $idRole !!}
            <a class="btn btn-info" href="{{ route('permissions.show',$permission->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('permissions.edit',[$permission->id, 'idRole' => $idRole]) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['permissions.destroy', $permission->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </td>
    </tr>
    @endforeach
    </table>
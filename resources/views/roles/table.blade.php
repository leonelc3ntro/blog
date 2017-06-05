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
    @foreach ($roles as $key => $role)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $role->name }}</td>
        <td>{{ $role->display_name }}</td>
        <td>{{ $role->description }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
            <a class="btn btn-primary" href="{{ route('permissions.index',['idRole' => $role->id]) }}">Permissions</a>
        </td>
    </tr>
    @endforeach
    </table>
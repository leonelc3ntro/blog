    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nombre</th>
            <th>Nombre Corto</th>            
            <th width="280px">Action</th>
        </tr>
    @foreach ($estados as $key => $estado)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $estado->nombre }}</td>
        <td>{{ $estado->nombreCorto }}</td>        
        <td>
            <a class="btn btn-info" href="{{ route('estados.show',$estado->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('estados.edit',$estado->id) }}">Edit</a>
            {!! Form::open(['method' => 'DELETE','route' => ['estados.destroy', $estado->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}            
        </td>
    </tr>
    @endforeach
    </table>
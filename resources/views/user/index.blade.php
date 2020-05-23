@extends('layouts.app')

@section('content')
    <div class="card container"> 
        <div class="card-body">
            <table class="table">
                <thead>
                    <th> id </th>
                    <th> Nombre</th>
                    <th> Apellido</th>
                    <th> Nombre de usuario</th>
                    <th> Rol</th>
                    <th> Ver</th>
                    <th> Editar</th>
                    <th> Eliminar</th>
                    
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->first_name }}</td>
                            <td>{{ $item->last_name }}</td>
                            <td>{{ $item->username }}</td>
                            <td>{{ $item->rol }}</td>

                            <td>
                                <a href="{{ route('user.show', $item->id)}}" class="btn btn-info">Ver</a>
                            </td>
                            <td>
                                <a href="{{ route('user.edit', $item->id)}}" class="btn btn-secondary">Editar</a>
                            </td>
                            <td>
                                <a href="{{ route('user.destroy', $item->id)}}" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection
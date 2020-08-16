@extends('layouts.app')

@section('content')
    <div class="card container"> 
        <div class ="card-header">
            
            <section>
                <div class="form-group container">
                    <form action="{{ route('user.index') }}" method="GET">
                        <div class="row">
                            <input type="text" name="search" id="search" class="form-control">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </section>
            <a href="{{ route('user.create')}}" class="btn btn-primary btn-info float-right">Nuevo Usuario</a>
        </div>
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
                            <td> @include('user.role')</td>

                            <td>
                                <a href="{{ route('user.show', $item->id)}}" class="btn btn-info">Ver</a>
                            </td>
                            <td>
                                <a href="{{ route('user.edit', $item->id)}}" class="btn btn-secondary">Editar</a>
                            </td>
                            @if(auth()->user()->rol==='a' )
                            <td>
                                <a href="{{ route('user.delete', $item->id)}}" class="btn btn-danger" onclick="return confirm('esta seguro de eliminar al usuario')">Eliminar</a>
                            </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection
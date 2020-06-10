@extends('layouts.app')

@section('content')
   <div class="card container"> 
        <div class ="card-header">

            {{-- Buscar usuario  --}}
            <section>
                <div class="form-group container">
                    <form action="{{ route('user.index') }}" method="POST">
                        <div class="row">
                            <input type="text" name="search" id="search" class="form-control">
                        </div>
                    </form>
                </div>
            </section>
            {{-- boton agregar musica --}}
            <a href="{{ route('music.createsong') }}" class="btn btn-primary btn-info float-right">Agregar musica</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <th> codigo </th>
                    <th> Nombre</th>
                    <th> Avatar</th>
                    <th> tema musical</th>
                    <th> PLAY</th>
                    <th> PAUSE</th>
                    <th> NEXT</th>
                    <th> PREV</th>
                    
                </thead>
                <tbody>
                   {{--  @foreach ($items as $item)
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
                            <td>
                                <a href="{{ route('user.delete', $item->id)}}" class="btn btn-danger" onclick="return confirm('esta seguro de eliminar al usuario')">Eliminar</a>
                            </td>
                        </tr>
                    @endforeach --}}
                </tbody>

            </table>
        </div>
    </div>
@endsection

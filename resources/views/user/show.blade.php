@extends('layouts.app')

@section('content')
        <div class="card container text-center" style="max-width: 60rem;">
            <h3> Detalle de Usuario </h3>
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td> ID </td>
                        <td>{{ $item->id }}</td>
                    </tr>
                    <tr>
                        <td> Nombre </td>
                        <td>{{ $item->first_name }}</td>
                    </tr>
                    <tr>
                        <td> Apellido </td>
                        <td>{{ $item->last_name }}</td>
                    </tr>
                    <tr>
                        <td> Nombre de usuario </td>
                        <td>{{ $item->username }}</td>
                    </tr>
                    <tr>
                        <td> Rol de usuario </td>
                        <td> @include('user.role')</td>
                    </tr>
                </tbody>
            </table>
            <div>
                <a href="{{ route('user.index')}}" class="btn btn-primary btn-lg float-right">Atras</a>
                <a href="{{ route('user.destroy', $item->id)}}" class="btn btn-primary btn-danger float-center">Eliminar</a>
                <a href="{{ route('user.edit', $item->id)}}" class="btn btn-primary btn-info float-center">Editar</a>
            </div>
        </div>
@endsection
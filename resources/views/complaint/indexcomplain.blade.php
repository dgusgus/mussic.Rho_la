@extends('layouts.app')

@section('content')
    <div class="card container"> 
        <div class ="card-header">
            <a href="{{ route('complaint.createcomplain')}}" class="btn btn-primary btn-info float-right">denunciar</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <th> id </th>
                    <th> Nombre</th>
                    <th> Denuncia</th>
                    <th> fecha</th>
                    <th> Ver</th>
                    <th> Eliminar</th>
                    
                </thead>
               
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->complain_text }}</td>
                            <td>{{ $item->updated_at}}</td>
                            <td>
                                <a href="{{ route('user.show', $item->id)}}" class="btn btn-info">Ver</a>
                            </td>
                            <td>
                                <a href="{{ route('user.delete', $item->id)}}" class="btn btn-danger" onclick="return confirm('esta seguro de eliminar al usuario')">Eliminar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
@endsection
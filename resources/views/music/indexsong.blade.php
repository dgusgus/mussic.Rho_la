@extends('layouts.app')

@section('content')
   <div class="card container"> 
        <div class ="card-header">

            {{-- Buscar usuario  --}}
            <section>
                <div class="form-group container">
                    <form action="{{ route('music.indexsong') }}" method="GET">
                        <div class="row">
                            <input type="text" name="search" id="search" class="form-control">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </section>
            @if(auth()->user()->rol==='a' )
            {{-- boton agregar musica --}}
            <a href="{{ route('music.createsong') }}" class="btn btn-primary btn-info float-right">Agregar musica</a>
            @endif
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <th> Numero </th>
                    <th> Nombre</th>
                    <th> Avatar</th>
                    <th> Musica</th>
                    <th> options</th>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->muscic_name }}</td>
                            <td>
                                <img src="{{asset('/images/avatarSongs/'.$item->avatar) }}" alt="Girl in a jacket" width="50" height="60">
                            </td>
                            <td>
                                <audio controls="controls" autoplay="autoplay" loop="loop">
                                <source src="{{asset('/images/Songs/'.$item->song) }}" type="audio/ogg"/>
                                <source src="{{asset('/images/Songs/'.$item->song) }}" type="audio/mpeg"/>
                                <source src="{{asset('/images/Songs/'.$item->song) }}" type="audio/waw"/>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button 
                                        type="button" class="btn btn-Secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    </button>
                                    
                                    <div class="dropdown-menu">
                                    
                                        <a class="dropdown-item" href="{{ route('music.Download')}}">Download</a>

                                        @if(auth()->user()->rol==='a' )
                                            <a class="dropdown-item" href="#">Editar</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{ route('music.delete', $item->id)}}" class="btn btn-danger" onclick="return confirm('Desea eliminarlo??')">ELIMINAR</a>
                                        @endif
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>

            </table>
        </div>
    </div>
@endsection


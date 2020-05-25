@extends('layouts.app')
por aqui añadiremos musicas

@section('content')
    <div class="card-body">
        <form action="{{ route('music.storemusic') }}" enctype= "multipart/form-data" method="GET">
            <div class="container">
                <div class="form-group col-10">
                     @include('music.fieldssong')
                </div>
            </div>
            
        </form>
    </div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="card-body">
        <form action="{{ route('music.store') }}" enctype="multipart/form-data" method="POST" >
            <div class="container">
                <div class="form-group col-10">
                     @include('music.fieldssong')
                </div>
            </div>
        </form>
    </div>
@endsection
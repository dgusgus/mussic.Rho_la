@extends('layouts.app')

@section('content')
    <div class="card-body">
        <form action="{{ route('user.update', $item) }}" method="GET">
            <div class="container">
                <div class="form-group col-10">
                     @include('user.fields')
                </div>
            </div>
            
        </form>
    </div>
@endsection
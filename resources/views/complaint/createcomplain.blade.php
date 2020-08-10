@extends('layouts.app')

@section('content')
    <div class="card-body">
        <form action="{{ route('complain.store') }}" method="POST" >
            <div class="container">
                <div class="form-group col-10">
                     @include('complaint.fieldscomplain')
                </div>
            </div>
        </form>
    </div>
@endsection
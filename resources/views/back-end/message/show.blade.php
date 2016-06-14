@extends('masterb')

@section('title', 'Bericht')

@section('content')

<div class="row">
    <div class="col s12">
            <h3 class="main-text lighten-1">Bericht van {{ $message->name }}</h3>
    </div>
</div>



@endsection
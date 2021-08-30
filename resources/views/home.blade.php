@extends('layouts/templatehome')

@section('title', 'Home')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('contentCard')
    @parent
    <div class="card" style="width: 18rem;">
        <img src="{{ asset('images/default_avatar.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
@endsection


@section('banner')
    @include('components.banner')
@endsection

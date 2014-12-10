@extends('layouts.front')

@section('content')
<div class="container content">
    @foreach($collection->collectionsType as $type)
    <div class="row">
        <div class="col-md-1">
            <div class="category-title">
                <p>{{ $type->title }}</p>
            </div>
        </div>
        <div class="col-md-11">
            <div class="row">
                @foreach($type->productos as $prod)
                <div class="col-md-3 text-center">
                    <a class="ring" href="#">
                        <img src="{{ asset('uploads/productos') }}/{{ $prod->img }}" alt="{{ $prod->title }}" height="80">
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <img class="hr" src="{{ asset('img/hr.png') }}" alt="">
    @endforeach
</div>
@endsection
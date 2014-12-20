@extends('layouts.front')

@section('content')
<div class="wide_img">
    @if($banners['sp'])
    <div class="container relative">
        @if($banners['sp']->collections_id)
        <div class="msg text-center">
            <h3 class="wide_img_title">{{ $banners['sp']->collections->title }}</h3>
            <hr>
            <h3 class="wide_image_subtitle"><em>Descubre la colección</em></h3>
        </div>
        @endif
    </div>
    <a @if($banners['sp']->collections_id) href="<?= url('/coleccion/' . $banners['sp']->collections->id . '/' . $banners['sp']->collections->slugify() . '/') ?>" @endif class="wide_img_img">
        <img src="{{ asset('uploads/banners_home') }}/{{ $banners['sp']->banner }}" alt="">
    </a>
    @endif
</div>
@if($banners['ci'] || $banners['cd'])
<div class="fila">
    @if($banners['ci'])
    <div class="half_img">
        <div class="msg text-center">
            <h3 class="half_img_title">NOSOTROS</h3>
            <hr>
            <h3 class="half_img_subtitle"><em>Azulejo Jewels</em></h3>
        </div>
        <a href="<?= url('/nosotros'); ?>" class="half_img_img">
            <img src="{{ asset('uploads/banners_home') }}/{{ $banners['ci']->banner }}" alt="">
        </a>
    </div>
    @endif
    @if($banners['cd'])
    <div class="half_img">
        <div class="msg text-center">
            <h3 class="half_img_title">FASHION FILM</h3>
            <hr>
            <h3 class="half_img_subtitle"><em>Ver video</em></h3>
        </div>
        <a href="{{ $banners['cd']->url }}" class="half_img_img">
            <img src="{{ asset('uploads/banners_home') }}/{{ $banners['cd']->banner }}" alt="">
        </a>
    </div>
    @endif
</div>
@endif
@if($banners['in'])
<div class="fila-2">
    <div class="big_half_img">
        <div class="msg text-center">
            <h3 class="big_half_img_title">NUESTRO COMPROMISO</h3>
            <hr>
            <h3 class="big_half_img_subtitle"><em>Ver detalles</em></h3>
        </div>
        <a href="<?= url('/nuestro-compromiso'); ?>" class="big_half_img_img">
            <img src="{{ asset('uploads/banners_home') }}/{{ $banners['in']->banner }}" alt="">
        </a>
    </div>
    <div class="small_half_img text-center">
        <div class="ubicacion">
            <a href="<?= url('contactanos'); ?>"><img src="img/location-icon.png" alt=""></a>
            <h3><a href="<?= url('contactanos'); ?>">NUESTRA<br>UBICACIÓN</a></h3>
        </div>
    </div>
</div>
@endif
@stop
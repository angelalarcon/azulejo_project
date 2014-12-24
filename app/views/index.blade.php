@extends('layouts.front')

@section('css')
<style type="text/css">

    .modal-body {
        min-width: 855px;
        background: rgba(175, 217, 218, .9);
        padding: 12px;
    }
    .modal-dialog {
        min-width: 855px!important;
    }
    .modal .close {
        position: absolute;
        left: 10px;
        top: 0;
        color: #363636;
        font-size: 32px;
    }
    .modal-content {
        border-radius: 0;
        box-shadow: none;
        border: none;
        background: none;
    }
</style>
@stop

@section('content')
<div class="wide_img">
    @if($banners['sp'])
    <div class="container relative">
        @if($banners['sp']->collections_id)
        <div class="msg text-center">
            <a @if($banners['sp']->collections_id) href="<?= url('/coleccion/' . $banners['sp']->collections->id . '/' . $banners['sp']->collections->slugify() . '/') ?>" @endif class="wide_img_img">
                <h3 class="wide_img_title">{{ $banners['sp']->collections->title }}</h3>
                <hr>
                <h3 class="wide_image_subtitle"><em>Descubre la colección</em></h3>
            </a>
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
            <a href="<?= url('/nosotros'); ?>" class="half_img_img">
                <h3 class="half_img_title">NOSOTROS</h3>
                <hr>
                <h3 class="half_img_subtitle"><em>Azulejo Jewels</em></h3>
            </a>
        </div>
        <a href="<?= url('/nosotros'); ?>" class="half_img_img">
            <img src="{{ asset('uploads/banners_home') }}/{{ $banners['ci']->banner }}" alt="">
        </a>
    </div>
    @endif
    @if($banners['cd'])
    <div class="half_img">
        <a class='link_video half_img_img' href="{{ $banners['cd']->url }}">
            <div class="msg text-center">
                <h3 class="half_img_title">FASHION FILM</h3>
                <hr>
                <h3 class="half_img_subtitle"><em>Ver video</em></h3>
            </div>
            <video preload="auto" loop="">
                <source src="{{ asset('img/azul.m4v') }}" type="video/mp4">
            </video>
            <img src="{{ asset('uploads/banners_home') }}/{{ $banners['cd']->banner }}" alt="" class="video_img">
        </a>

        <!-- Modal -->
        @if($banners['cd']->url)
        <div class="modal fade" id="youtubeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                        <br>
                        <iframe width="920" height="650" src="{{ $banners['cd']->url }}" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        @endif


    </div>
    @endif
</div>
@endif
@if($banners['in'])
<div class="fila-2">
    <div class="big_half_img">
        <div class="msg text-center">
            <a href="<?= url('/nuestro-compromiso'); ?>" class="big_half_img_img">
                <h3 class="big_half_img_title">NUESTRO COMPROMISO</h3>
                <hr>
                <h3 class="big_half_img_subtitle"><em>Ver detalles</em></h3>
            </a>
        </div>
        <a href="<?= url('/nuestro-compromiso'); ?>" class="big_half_img_img">
            <img src="{{ asset('uploads/banners_home') }}/{{ $banners['in']->banner }}" alt="">
        </a>
    </div>
    <div class="small_half_img text-center">
        <div class="ubicacion">
            <a href="<?= url('contactanos'); ?>"><img src="{{ asset('img/location-icon.png') }}" alt=""></a>
            <h3><a href="<?= url('contactanos'); ?>">NUESTRA<br>UBICACIÓN</a></h3>
        </div>
    </div>
</div>
@endif
@stop

@section('js')
<script type="text/javascript" src="{{ asset('js/fluidvids.js') }}"></script>
<script type="text/javascript">
    var $modal = $('.modal');
    var $link_video = $('.link_video');
    var $cover = $('.video_img');

    $link_video.hover(function() {
                var video = $(this).find("video");

                if (video.length != 0) {
                    video[0].currentTime = 0;
                    video[0].volume = 0;
                    video[0].play();
                    $cover.fadeOut(1000);
                }
            }, function() {
                var video = $(this).find("video");

                if (video.length != 0) {
                    video[0].currentTime = 0;
                    video[0].volume = 0;
                    video[0].pause();
                    $cover.fadeIn(1000);
                }
            }
    );

    $link_video.click(function(e) {
        e.preventDefault();
        $("#youtubeModal").modal('show');
    });
    fluidvids.init({
        selector: ['iframe', 'object'], // runs querySelectorAll()
        players: ['www.youtube.com', 'player.vimeo.com'] // players to support
    });
</script>
@endsection
@extends('layouts.front')

@section('content')
<div class="container content">
    <h4 class="tab-title text-center">NOSOTROS</h4>
    <p class="text-center">
        Azulejo Jewels es basado en un tributo a la vida, la elegancia y la feminidad. Creado por un equipo de talentos Venezolanos y tradicionales joyeros quienes lograron capturar el deseo de experimentar con luz, forma y color.
    </p>
    <p class="text-center">
        El oro y piedras preciosas son los protagonistas que construyen la trama de esta colección, basándonos en la simplicidad para obtener piezas clásicas que perduren en el tiempo.
    </p>
    <p class="text-center">
        Adicional a la ambición de crear piezas de lujo quisimos entrar en la búsqueda de aportar a nuestro país Venezuela, es por esto que se ha realizado un hermoso convenio con la fundación Maniapure, encargados de prestar servicios de atención médica, desarrollar programas de educación y promover la reafirmación de valores culturales de la región Maniapure. “No solo creamos Joyas, creamos sueños”
    </p>
    <p class="text-center">
        La Inspiración, creatividad y deseo de ayudar a la comunidad es lo que hace Azulejo Jewels una marca incomparable en el mercado Venezolano.
    </p>
</div>
@if(count($images) > 0)
<div class="container content">
    <div class="row">
        @foreach($images as $image)
        <div class="col-md-4 text-center">
            <div class="nosotros_img">
                <img src="{{ asset('uploads/images_nosotros') }}/{{ $image->image }}" alt="">
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif
@endsection
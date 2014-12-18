@extends('layouts.front')

@section('css')
    <link rel="stylesheet" href="{{asset('css/smoothDivScroll.css')}}">
    <style>
        #makeMeScrollable
        {
            width:100%;
            height: 230px;
            position: relative;
        }

        /* Replace the last selector for the type of element you have in
           your scroller. If you have div's use #makeMeScrollable div.scrollableArea div,
           if you have links use #makeMeScrollable div.scrollableArea a and so on. */
        #makeMeScrollable div.scrollableArea img
        {
            position: relative;
            float: left;
            margin: 0;
            padding: 0;
            /* If you don't want the images in the scroller to be selectable, try the following
               block of code. It's just a nice feature that prevent the images from
               accidentally becoming selected/inverted when the user interacts with the scroller. */
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -o-user-select: none;
            user-select: none;
        }
    </style>
@endsection

@section('content')
<div class="container content">
    <h4 class="tab-title text-center">NOSOTROS</h4>
    <p class="text-center">
        Azulejo Jewels es basado en un tributo a la vida, la elegancia y la feminidad.<br> Creado por un equipo de talentos Venezolanos y tradicionales joyeros quienes lograron capturar el deseo de experimentar con luz, forma y color.
    </p>
    <p class="text-center">
        El oro y piedras preciosas son los protagonistas que construyen la trama de esta colección, <br>basándonos en la simplicidad para obtener piezas clásicas que perduren en el tiempo.
    </p>
    <p class="text-center">
        Adicional a la ambición de crear piezas de lujo quisimos entrar en la búsqueda de aportar a nuestro país Venezuela, es por esto que se ha realizado un hermoso convenio con la fundación Maniapure, encargados de prestar servicios de atención médica, desarrollar programas de educación y promover la reafirmación de valores culturales<br> de la región Maniapure. “No solo creamos Joyas, creamos sueños”
    </p>
    <p class="text-center">
        La Inspiración, creatividad y deseo de ayudar a la comunidad es lo que hace Azulejo Jewels una marca incomparable en el mercado Venezolano.
    </p>
</div>


<div class="container content">
    <div class="row">
        <div class="col-md-12 text-center">

            <div id="makeMeScrollable">
                @foreach($nosotros_images as $key => $n)
                    <img src="{{ asset('uploads/nosotros') }}/{{ $n->photo }}" />
                @endforeach
            </div>
        </div>
    </div>
</div>

<br>
@endsection
@section('js')
    <script type="text/javascript" src="{{asset('js/jquery-ui-1.10.3.custom.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.mousewheel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.kinetic.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.smoothdivscroll-1.3-min.js')}}"></script>
    <script type="text/javascript">
        $(function() {
            $("div#makeMeScrollable").smoothDivScroll({
                autoScrollingMode: "onStart",
                hotSpotScrollingStep: 5
            });
        });

    </script>
@endsection
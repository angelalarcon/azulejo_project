@extends('layouts.front')

@section('content')
<div class="container content">
    @foreach($collection->collectionsType as $type)
        @if(count($type->productos) > 0)
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
                            <img src="{{ asset('uploads/productos') }}/{{ $prod->img }}" alt="{{ $prod->title }}" height="180">
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <img class="hr" src="{{ asset('img/hr.png') }}" alt="">
        @endif
    @endforeach
    <style type="text/css">
        .modal-dialog {
            width: 100%;
            margin-top: 284px;
        }
        .modal-content {
            border-radius: 0;
            box-shadow: none;
            border: none;
            background: none;
        }
        .modal-backdrop {
            background: #fff;
        }
        .modal-body {
            height: 640px;
            background: rgba(175, 217, 218, .9);
            padding: 0;
        }
        .modal .pull-right {
            width: 855px;
            overflow: hidden;
        }
        .modal .pull-left {
            width: 485px;
            margin-top: 190px;
        }
        .modal h3 {
            border-bottom: 1px solid #8d8d8d;
            max-width: 80%;
            margin: 0 auto;
            padding-bottom: 13px;
            margin-bottom: 20px;
        }
        .modal p {
            margin-top: 30px;
        }
    </style>
    <div class="modal fade collection">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="pull-left text-center">
                        <h3>Oro Blanco Safiro Rosa</h3>
                        <img src="{{ asset('uploads/productos/GNBWjsTMlMe7TDQgJOBaXg2cko94e1mj.png') }}" height="85">
                        <p>Anillo de oro blanco 18K<br>Rubí y brillante de 1 punto.<br>Peso total: 20gr</p>
                    </div>
                    <div class="pull-right">
                        <img src="{{ asset('img/prueba_producto.png') }}" height="640">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script type="text/javascript">
        $('.modal').modal('show');
    </script>
@endsection
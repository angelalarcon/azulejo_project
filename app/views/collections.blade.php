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
                        <a class="ring" href="<?= url('/coleccion/producto/' . $prod->id . '/' . $prod->slugify() . '/') ?>" data-title="{{$prod->title}}" data-description="{{$prod->description}}"
                                data-img="{{ asset('uploads/productos') }}/{{ $prod->img }}"
                                data-description_img="{{ asset('uploads/description_productos') }}/{{ $prod->description_img }}">
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
            border-bottom: 2px solid #8d8d8d;
            max-width: 90%;
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
                        <h3></h3>
                        <img src="" height="100">
                        <p></p>
                    </div>
                    <div class="pull-right">
                        <img src="" height="640">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script type="text/javascript">
        var $modal = $('.modal');

        $('.ring').click(function(e) {
            e.preventDefault();
            var $this = $(this);
            $modal.find('h3').html($this.data('title'));
            $modal.find('.pull-left img').attr('src', $this.data('img'));
            $modal.find('p').html($this.data('description'));
            $modal.find('.pull-right img').attr('src', $this.data('description_img'));

            $modal.modal('show');
        });
    </script>
@endsection
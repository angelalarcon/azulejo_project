@extends('layouts.front')

@section('content')
<div class="container content">
    <h4 class="tab-title text-center">CONTÁCTANOS</h4>
    <div class="row">
        <div class="col-md-6">
            Para más información sobre piezas personalizadas contáctenos a través de este formulario o vía teléfonica.
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6">
        <form id="contact_form" action="<?= url('/api/contacto'); ?>" method="post">
            <div class="row row-form">
                <div class="col-md-4">Nombre *</div>
                <div class="col-md-4">
                    <input class="form-control" type="text" name="nombre" id="nombre" required="required">
                </div>
            </div>
            <div class="row row-form">
                <div class="col-md-4">Teléfono *</div>
                <div class="col-md-4">
                    <input class="form-control" type="text" name="telefono" id="telefono" required="required">
                </div>
            </div>
            <div class="row row-form">
                <div class="col-md-4">Correo electrónico *</div>
                <div class="col-md-4">
                    <input class="form-control" type="email" name="correo" id="correo" required="required">
                </div>
            </div>
            <div class="row row-form">
                <div class="col-md-4">Requerimiento *</div>
                <div class="col-md-6">
                    <p><textarea class="form-control" cols="30" rows="10" name="comentario" id="comentario" required="required"></textarea></p>
                    <button href="#" class="btn btn-gray btn-block">Envíar</button>
                </div>
            </div>
            <div class="row row-form">
                <div class="col-md-6">
                    <strong>Horarios de atención</strong>
                </div>
                <div class="col-md-6">
                    <strong>Ubicación</strong>
                </div>
            </div>
            <div class="row row-form">
                <div class="col-md-6">Lunes a Sabados</div>
                <div class="col-md-6" style="text-align: justify;">Caracas: Av. José María Vargas, CC Santa Fé, Nivel C3, Local 06, Urb. Santa Fé Norte<br>Barquisimeto: Carrera 5 entre calles 5 y 6, Urb. Nueva Segovia, Hotel Jirajara</div>
            </div>
            <div class="row row-form">
                <div class="col-md-6">10am a 7:00pm</div>
                <div class="col-md-6"><strong>Tlf:</strong> 02129771954</div>
            </div>
        </form>
        </div>
        <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1961.7197921085256!2d-66.87144315028283!3d10.46597080500197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sve!4v1419384019485" width="600" height="450" frameborder="0" style="border:0"></iframe>
        </div>
    </div>
</div>
<div class="modal fade" id="email_modal" role="dialog" aria-labelledby="emailModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            </div>
            <div class="modal-body text-center" style="font-size: 18px; color: #888888;"></div>
        </div>
    </div>
</div>
@stop

@section('js')
<script type="text/javascript">
    $('#contact_form').submit(function (e) {
        e.preventDefault();
        $("form")[0].checkValidity();

        var data = {};
        var $body = $('body');

        if ($body.data('ajax') == '1')
            return false;

        $body.data('ajax', '1');

        $('input, textarea', '#contact_form').each(function (i, v) {
            var $obj = $(v);
            data[$obj.attr('id')] = $obj.val();
        });

        $.post(
            $('#contact_form').attr('action'),
            data,
            function (data) {
                if (data.success) {
                    $('.modal-body', '#email_modal').html('Su mensaje de contacto fue enviado satisfactoriamente');
                    $('input, textarea', '#contact_form').each(function (i, v) {
                        $(v).val('');
                    });
                } else {
                    if (data.msj == 2)
                        $('.modal-body', '#email_modal').html('Debe llenar los campos obligatorios');
                    else if (data.msj == 3)
                        $('.modal-body', '#email_modal').html('Error enviando mensaje');
                    else
                        $('.modal-body', '#email_modal').html('Error inesperado, intente de nuevo');
                }
                $('#email_modal').modal();
            }
        ).error(function(e) {
            $('.modal-body', '#email_modal').html('Error inesperado, intente de nuevo');
            $('#email_modal').modal();
        }).complete(function(e) {
            $body.data('ajax', '0');
        })
    });
</script>
@endsection
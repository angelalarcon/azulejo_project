@extends('layouts.front')

@section('content')
<div class="tab-pane active" id="contact">
    <div class="white-box contact">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3">
                    <h4 class="blue-text text-center">
                        <strong>
                            ¿QUIERES CONVERTIRTE EN DISTRIBUIDOR NUESTRO?
                        </strong>
                    </h4>
                    <form id="contact_form" action="<?= url('api/contacto') ?>">
                        <div class="row">
                            <div class="col-xs-5 text-right">
                                <strong class="gray-text"><label for="nombre">NOMBRE</label></strong>
                            </div>
                            <div class="col-xs-7">
                                <input class="form-control" type="text" id="nombre" required="required">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-5 text-right">
                                <strong class="gray-text"><label for="apellido">APELLIDO</label></strong>
                            </div>
                            <div class="col-xs-7">
                                <input class="form-control" type="text" id="apellido" required="required">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-5 text-right">
                                <strong class="gray-text"><label for="empresa">EMPRESA DE CONTÁCTO</label></strong>
                            </div>
                            <div class="col-xs-7">
                                <input class="form-control" type="text" id="empresa" required="required">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-5 text-right">
                                <strong class="gray-text"><label for="correo">CORREO ELECTRÓNICO</label></strong>
                            </div>
                            <div class="col-xs-7">
                                <input class="form-control" type="email" id="correo" required="required">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-5 text-right">
                                <strong class="gray-text"><label for="telefono">TELÉFONO <small>(OPCIONAL)</small></label></strong>
                            </div>
                            <div class="col-xs-7">
                                <input class="form-control" type="text" id="telefono">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-5 text-right">
                                <strong class="gray-text"><label for="comentario">COMENTARIO:</label></strong>
                            </div>
                            <div class="col-xs-7">
                                <textarea class="form-control" id="comentario" cols="30" rows="10" required="required"></textarea>
                                <button type="submit" class="btn-blue btn-bottom">ENVIAR</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
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
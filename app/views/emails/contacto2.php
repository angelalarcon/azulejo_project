<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
</head>
<body>
<table style='width: 100%'>
    <tr>
        <td style='text-align: left'>
            <img src="<?php echo url('/'); ?>/images/logo.png" alt='Dispufil' width='200'>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <p style='font-family: sans-serif; font-size: 1.1em; margin-bottom: 100px; margin-top: 50px; text-align: center'>Hola <?php echo $message->nombre; ?>, &#161;Gracias por escribirnos!, en la brevedad posible te responderemos.</p>
        </td>
    </tr>
    <tr>
        <td style='background: #065a9e' colspan="2">
            <table style='width: 100%;'>
                <tr>
                    <td style='width: 85.5%; padding: 5px'>
                        <a href='<?php echo url('/'); ?>' style='color: #ffffff; text-decoration: none; font-family: sans-serif; font-size: 0.9em; font-weight: bold'>http://dispufilvenezuela.com</a>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
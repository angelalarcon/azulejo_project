<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<div>
    <table>
        <tr>
            <th>Nombre</th>
            <td><?php echo $message->nombre; ?></td>
        </tr>
        <tr>
            <th>Tel&eacute;fono</th>
            <td><?php echo $message->telefono; ?></td>
        </tr>
        <tr>
            <th>Correo</th>
            <td><?php echo $message->correo; ?></td>
        <tr>
            <th>Comentario</th>
            <td><?php echo $message->comentario; ?></td>
        </tr>
    </table>
</div>
</body>
</html>
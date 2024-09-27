<!DOCTYPE html>
<html>
<head>
    <title>Restablecer Contraseña</title>
</head>
<body>
    <h1>Restablecer Contraseña</h1>
    <p>Hola,</p>
    <p>Hemos recibido una solicitud para restablecer la contraseña de tu cuenta.</p>
    <p>Si fuiste tú, haz clic en el siguiente enlace:</p>
    <a href="{{ url('reset-password/'.$token) }}">Restablecer Contraseña</a>
    <p>Si no solicitaste este cambio, puedes ignorar este mensaje.</p>
</body>
</html>

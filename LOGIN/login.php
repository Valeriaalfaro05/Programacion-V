<?php
session_start();

$usuario = $_POST['usuario'] ?? '';
$password = $_POST['password'] ?? '';

if ($usuario === 'ADMIN' && $password === 'admin') {
    // Guardar la información en la sesión
    $_SESSION['usuario'] = $usuario;

    echo '<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>INGRESO EXITOSO</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background:url("https://static.vecteezy.com/system/resources/previews/009/812/415/non_2x/sticker-of-a-cartoon-padlock-and-key-vector.jpg") no-repeat center center fixed;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            h1 {
                color:rgb(21, 22, 21);
                font-size: 48px;
            }
        </style>
    </head>
    <body>
        <h1>INGRESO EXITOSO</h1>
    </body>
    </html>';
} else {
    echo '<script>alert("Usuario o contraseña incorrectos."); window.location.href = "login.html";</script>';
}
?>
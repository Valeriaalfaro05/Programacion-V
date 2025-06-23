<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Posicionar elementos en CSS</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 20px;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        /* Contenedor principal */
        #contenedor {
            width: 600px;
            margin: 0 auto;
            position: relative;
        }

        /* Estilo base para cajas azules */
        .azul {
            width: 100px;
            height: 100px;
            background-color: #3498db;
            display: inline-block;
            margin: 5px;
            position: static; /* Posicionamiento normal (por defecto) */
        }

        /* Caja verde posicionada */
        #verde {
            width: 100px;
            height: 100px;
            background-color: #2ecc71;
            position: absolute; /* Cambia a fixed o relative para probar */
            top: 50px;
            left: 200px;
            border: 3px solid #27ae60;
            z-index: 10;
        }
    </style>
</head>

<body>
    <h1>Posicionamiento de elementos</h1>
    
    <div id="contenedor">
        <!-- Atajo rápido: div[class=azul]*12 -->
        <div class="azul"></div>
        <div id="verde"></div>
        <div class="azul"></div>
        <div class="azul"></div>
        <div class="azul"></div>
        <div class="azul"></div>
        <div class="azul"></div>
        <div class="azul"></div>
        <div class="azul"></div>
        <div class="azul"></div>
        <div class="azul"></div>
        <div class="azul"></div>
        <div class="azul"></div>
    </div>
</body>
</html>
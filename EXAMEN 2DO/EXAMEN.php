<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Evaluación del Alumno</title>
    <style>
        /* Estilos para el cuerpo */
        body {
            font-family: Arial, sans-serif;
            background-image: url('https://static.vecteezy.com/system/resources/previews/008/734/924/non_2x/cartoon-group-of-elementary-school-kids-in-the-school-yard-vector.jpg'); /* URL de la imagen */
            padding: 20px;
        }

        /* Estilos para formulario */
       form {
    background-color: rgba(255, 255, 255, 0.75); /* Fondo transparente */
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* aclara la sombra */
    max-width: 500px;
    margin: 30px; /* Separamos bordes */
    float: right; /* Mueve mi formulario a la derecha  */
}

        /* Estilos para etiquetas y sus campos */
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        /* Estilo para el botón */
        input[type="submit"] {
            background-color:rgb(243, 6, 2);
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 8px;
        }

        /* Estilo del cuadro de resultado */
        .resultado {
            background-color: rgba(119, 204, 244, 0.75); /* Color azul con transparencia */
            border: 1px solid rgba(197, 241, 143, 0.75);  /* semi transparente */
            padding: 20px;
            margin-top: 20px;
            border-radius: 10px;
            max-width: 500px;
            float: left; /* mover a la izquierda */
            margin-left: 30px; /* Espacios */
        }
   
    </style>
</head>
<body>

<!-- Formulario HTML -->
<form method="POST">
    <h2>Evaluación del Alumno</h2>

    <!-- Nombre del alumno -->
    <label for="nombre">Nombre del alumno:</label>
    <input type="text" id="nombre" name="nombre" required>

    <!-- Para el género -->
    <label for="genero">Género:</label>
    <select id="genero" name="genero" required>
        <option value="">Seleccione</option>
        <option value="Femenino">Femenino</option>
        <option value="Masculino">Masculino</option>
    </select>

    <!-- Para la materia -->
  <label>Materia:</label>
        <select name="materia" required>
            <option value="Programacion">Programacion</option>
            <option value="calculo">Calculo Integral</option>
            <option value="Electronica digital">Electronica digital</option>
            <option value="Neumatica e Hidraulica">Neumatica e Hidraulica</option>
            <option value="Ingles">Ingles</option>
            <option value="Seguridad industrial">Seguridad industrial</option>
            <option value="Ciencias">Ciencias</option>
        </select><br><br>

    <!-- Para la calificación 1 -->
    <label for="cal1">Calificación 1:</label>
    <input type="number" id="cal1" name="cal1" min="0" max="100">

    <!-- Para la calificación 2 -->
    <label for="cal2">Calificación 2:</label>
    <input type="number" id="cal2" name="cal2" min="0" max="100">

    <!-- Para la calificación 3 -->
    <label for="cal3">Calificación 3:</label>
    <input type="number" id="cal3" name="cal3" min="0" max="100">

    <!-- Botón para enviar -->
    <input type="submit" value="Evaluar">
</form>

<?php
// Verificamos si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // GUARDAMOS LOS DATOS 
    $nombre = $_POST["nombre"];
    $genero = $_POST["genero"];
    $materia = $_POST["materia"];

    // MIRAMOS SI HAY CALIFICACIONES QUE SE MANDAN
    $cal1 = isset($_POST["cal1"]) && $_POST["cal1"] !== "" ? $_POST["cal1"] : 0;
    $cal2 = isset($_POST["cal2"]) && $_POST["cal2"] !== "" ? $_POST["cal2"] : 0;
    $cal3 = isset($_POST["cal3"]) && $_POST["cal3"] !== "" ? $_POST["cal3"] : 0;

    // CALCULAMOS SU PROMEDIO
    $suma = $cal1 + $cal2 + $cal3;
    $promedio = $suma / 3;

    // ESTATUS DEL ALUMNO
    if ($promedio >= 70) {
        $estatus = "Aprobado";
    } else {
        $estatus = "Reprobado";
    }

    // MOSTRAMOS RESULTADOS 
    echo "<div class='resultado'>";
    echo "<h3>Resultado de la Evaluación</h3>";
    echo "<p><strong>Nombre del alumno:</strong> $nombre</p>";
    echo "<p><strong>Género:</strong> $genero</p>";
    echo "<p><strong>Materia:</strong> $materia</p>";
    echo "<p><strong>Calificación 1:</strong> $cal1</p>";
    echo "<p><strong>Calificación 2:</strong> $cal2</p>";
    echo "<p><strong>Calificación 3:</strong> $cal3</p>";
    echo "<p><strong>Promedio final:</strong> " . number_format($promedio, 2) . "</p>";
    echo "<p><strong>Estatus:</strong> $estatus</p>";
    echo "</div>";
}
?>

</body>
</html>
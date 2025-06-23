<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Ejemplo RadioButton</title>
</head>
<body>

  <h2>¿Cuál es tu color favorito?</h2>

  <form id="colorForm">
    <input type="radio" id="rojo" name="color" value="Rojo">
    <label for="rojo">Rojo</label><br>

    <input type="radio" id="verde" name="color" value="Verde">
    <label for="verde">Verde</label><br>

    <input type="radio" id="azul" name="color" value="Azul">
    <label for="Azul">Azul</label><br><br>

    <button type="button" onclick="mostrarSeleccion()">Mostrar selección</button>
  </form>

  <p id="resultado"></p>

  <script>
    function mostrarSeleccion() {
      // Obtiene todos los inputs tipo radio del formulario
      const radios = document.querySelectorAll('input[name="color"]');
      let colorSeleccionado = "";

      radios.forEach((radio) => {
        if (radio.checked) {
          colorSeleccionado = radio.value;
        }
      });

      const resultado = document.getElementById("resultado");
      if (colorSeleccionado) {
        resultado.textContent = "Has seleccionado: " + colorSeleccionado;
      } else {
        resultado.textContent = "Por favor, selecciona un color.";
      }
    }
  </script>

</body>
</html>

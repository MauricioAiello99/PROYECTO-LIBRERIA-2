
<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Cuotas</title>
    <head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libreria Colores</title>
    <link rel="stylesheet" href="calculadora.css">
   
</head>

<body>
<div class="inicio">
        <button class="binicio">
            <a href="index.php">Inicio</a>
        </button>
    </div>
    <div id="calculator">
        <h1>Calculadora de Cuotas</h1>
        <label for="total">Total de Compra:</label>
        <input type="number" id="total">
        <button class= "b3c" onclick="calcularCuotas(3, 0.3)">3 Cuotas (30% de interés)</button>
        <button class= "b6c" onclick="calcularCuotas(6, 0.5)">6 Cuotas (50% de interés)</button>
        <button class= "b6c"onclick="calcularCuotas(12, 1.2)">12 Cuotas (120% de interés)</button>
        <p>Total con Interés: $<span id="totalConInteres">0.00</span></p>
        <p id="cuotaMensual"></p>
    </div>

    <script>
        function calcularCuotas(cuotas, interes) {
            const totalCompra = parseFloat(document.getElementById("total").value);
            if (isNaN(totalCompra)) {
                alert("Ingresa un valor válido para el total de compra.");
                return;
            }

            const totalConInteres = totalCompra * (1 + interes);
            const cuotaMensual = totalConInteres / cuotas;
            document.getElementById("totalConInteres").innerText = totalConInteres.toFixed(2);
            document.getElementById("cuotaMensual").innerText = `Monto de cada cuota (${cuotas} cuotas): $${cuotaMensual.toFixed(2)}`;
        }
    </script>
</body>
</html>

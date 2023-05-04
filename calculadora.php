

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de Dos Números</title>
    <script>
        function sumar() {
            var num1 = parseInt(document.getElementById("num1").value);
            var num2 = parseInt(document.getElementById("num2").value);
            var resultado = num1 + num2;
            document.getElementById("resultado").innerHTML = resultado;
        }
        function restar() {
            var num1 = parseInt(document.getElementById("num1").value);
            var num2 = parseInt(document.getElementById("num2").value);
            var resultadoresta = num1 - num2;
            document.getElementById("resultadoresta").innerHTML = resultadoresta;
        }
        function multiplicar () {
            var num1 =parseInt( document.getElementById("num1").value);
            var num2 = parseInt(document.getElementById("num2").value);
            var resultadomultiplicar = num1 * num2;
            document.getElementById("resultadomultiplicar").innerHTML = resultadomultiplicar;
        }
        function dividir    (){
            var num1 =parseInt( document.getElementById("num1").value);
            var num2 = parseInt(document.getElementById("num2").value);
            var resultadodividir = num1 / num2;
            document.getElementById("resultadodividir").innerHTML = resultadodividir;
        }
            </script>
</head>
<body>
    <section>
    <h1>Suma y Resta de dos números</h1>
<div>
    <label for="num1">Digite  por favor el Número 1:</label>
    <input type="number" id="num1"><br>
    <label for="num2">Digite  por favor el Número 2:</label>
    <input type="number" id="num2"><br>
    <button onclick="sumar()">Sumar</button>
    <button onclick="restar()">Restar</button>
    <button onclick="multiplicar()">Multiplicar</button>
    <button onclick="dividir()">Dividir</button>
</div>
<div>
    <p>El resultado de la suma es: <span id="resultado"></span></p>
    <p>El resultado de la resta es: <span id="resultadoresta"></span></p>
    <p>El resultado de la muliplicación es: <span id= "resultadomultiplicar"></span></p>
    <p>El resultado de la división es: <span id="resultadodividir"></span></p>
</div>
</section>
</body>
</html>vsbfx fd
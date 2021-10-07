<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>

<body>
    <form action="resultado.php" method="get">
        <table border="3">
            <tr>
                <th colspan="5">CALCULADORA</th>
            </tr>
            <tr>
                <td colspan="3"><label for="numero1">Operando 1:</label> <input type="number" name="OPERANDO1" id="numero1"></td>
                <td colspan="2"><label for="numero2">Operando 2:</label> <input type="number" name="OPERANDO2" id="numero2"></td>
            </tr>
            <tr>
                <td><input type="radio" name="OPERACION" value="SUMA" id="1">suma</td>
                <td><input type="radio" name="OPERACION" value="RESTA" id="2">resta</td>
                <td><input type="radio" name="OPERACION" value="DIVISION" id="3">division</td>
                <td><input type="radio" name="OPERACION" value="PRODUCTO" id="4">producto</td>
                <td><input type="radio" name="OPERACION" value="CONCATENACION" id="5">concatenacion</td>
            </tr>
            <tr>
                <td colspan="5"><input type="checkbox" name="ROJOS" value="SI" id="neg">
                    <font class="checkBoxCalc">Mostrar valores negativos en rojo</font>
                </td>
            </tr>
            <tr>
                <td colspan="5"><input type="submit" value="Calcular"></td>
            </tr>
        </table>
    </form>
</body>

</html>
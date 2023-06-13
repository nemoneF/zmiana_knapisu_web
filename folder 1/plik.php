<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="css.css" type="text/css">
    <title>Lekcja 1</title>
    <script type="text/javascript" src="skrypt.js">
        </script>
</head>
<body>
    <table border='2' width='60%' align='center'>
        <tr>
            <th>Nagłówek 1</th><th>Nagłówek 2</th>
        </tr>
        <tr>
            <td><p id="p1">tekst 1</p></td><td><input type="button" value="Przycisk" onclick="document.querySelector('#p1').style='color: red'"></td>
        </tr>
        <tr>
            <td><p id="p2">tekst 2</p></td><td><input type="button" value="przycisk 2" onclick="zmiana()"></td>
        </tr>
        
    </table>
</body>
</html>
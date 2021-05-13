<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />
    <title>Document</title>
</head>
<body>
    <h1>Lista de paises</h1>
    <table class="table table-dark">
        <tr>
            <th class="text-light bg-dark">Nombre</th>
            <th class="p-3 mb-2 bg-primary text-white">Capital</th>
            <th class="text-light bg-dark">Moneda</th>
            <th class="p-3 mb-2 bg-primary text-white">Poblacion</th>
        </tr>
        @foreach($naciones as $nombre => $nacion):
            <tr>
                <td>{{$nombre}}</td>
                <td>{{$nacion["Capital"]}}</td>
                <td>{{$nacion["Moneda"]}}</td>
                <td>{{$nacion["Poblacion"]}}</td>
            <tr>
        @endforeach
    </table>
</body>
</html>

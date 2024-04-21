<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>KALKULATOR SEDERHANA</h1></center>

    <form action="{{ route ('hitung.store') }}" method="post">
        @csrf
        Angka Pertama : <input type="number" name="angka1" id="">
        Angka Kedua : <input type="number" name="angka2" id="">


        <input type="submit" name="op" value="+">
        <input type="submit" name="op" value="-">
        <input type="submit" name="op" value="x">
        <input type="submit" name="op" value="/">
        <input type="submit" name="op" value="Reset">
    </form>
</body>
</html>
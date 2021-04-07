<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung DDA dan Bressenham</title>
</head>
<body>

<form action="hasil.php"> 
    <label for="pilihan">Pilih Algoritma</label>
    <select name="tipe" id="pilihan">
        <option value="DDA">DDA</option>
        <option value="Bressenham">Bressenham</optison>
    </select>
    <label for="x1">X1</label>
    <input type="number" name="x1" id="x1">
    <label for="y1">Y1</label>
    <input type="number" name="y1" id="y1">
    <label for="x2">X2</label>
    <input type="number" name="x2" id="x2">
    <label for="y2">Y2</label>
    <input type="number" name="y2" id="y2">
    <button type="submit">Submit</button>
</form>
    
</body>
</html>

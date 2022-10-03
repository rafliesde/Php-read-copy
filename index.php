<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Read & Copy File</title>
</head>
<body>

<h5>Isi Tugas</h5>


<?php
($file = fopen('konten.txt', 'r')) or die('file not found!');

while (!feof($file)) {
    echo fgetc($file);
}
echo copy('konten.txt', 'konten_cpy.txt');
fclose($file);
?>
    
</body>
</html>
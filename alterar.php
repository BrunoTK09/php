<!DOCTYPE html>
<html lang="pt-br">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="formulario">

<center><form method="POST" action="" enctype="multipart/form-data" target="_self">
<fieldset>
<input type="submit" name="procurar" value="Produtos Vencidos"><br><br>
   <label for="valor">Alterar Valor: </label><br>
   <input type="text" name="valor" placeholder="código"><br><br>
   <label for="qtdat">Alterar Quantidade:</label><br>
   <input type="text" name="qtdat" placeholder="Quantidade"><br><br>
   <input type="submit" name="alterar" value="Alterar"><br><br>
   <button ><a type="button" href="formulario.php" target="_self">Formulario</a></button><br><br>
</body>
<link rel="stylesheet" href="style.css">
</html>

<?php
if(isset($_POST['procurar']))
$conn = mysqli_Connect("localhost", "root", "", "3tid");    
?>
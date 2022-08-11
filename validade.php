<!DOCTYPE html>
<html lang="pt-br">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Quantidade</title>    

</head>
<body>
<center><form name='testealteraqtd' action="" method="post">
        <fieldset>
<h1> Produtos vencidos </h1>
<button ><a type="button" href="formulario.php" target="_self">Cadastrar</a></button><br>
        <button ><a type="button" href="preco.php" target="_self">Preço</a></button><br>
        <button ><a type="button" href="quantidade.php" target="_self">Quantidade</a></button><br>
        <button ><a type="button" href="excluir.php" target="_self">Excluir</a></button><br>
</fieldset>
</form></center>
</body>
<link rel="stylesheet" href="style.css">
</html>
<?php
     
$conexao=mysqli_Connect("localhost","root","","3tid");

date_default_timezone_set('America/Sao_Paulo');

$datasys = date('y/m/d');  


$sql="SELECT * FROM tabela1 WHERE dtval <= '$datasys'";
   
$result=mysqli_query($conexao,$sql);
   
$codum=mysqli_num_rows($result);      
   
   
if($codum > 0 ){
   
while($linha = mysqli_fetch_array($result)){
     
echo"Datas:".$linha["dtval"]."<br>";    
   
}
   
}else{
   
echo"<script>alert('Nenhum produto vencido') </script>";    

}
   

   
?> 

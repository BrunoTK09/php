<!DOCTYPE html>
<html lang="pt-br">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Preço</title>
</head>
<body>
<center><form method="POST" action="" enctype="multipart/form-data" target="_self">
<fieldset>
<label for="idcode">Id do Produto:</label><br>
   <input type="text" name="idcode" placeholder="#####"><br>
   <label for="valor">Novo Valor:</label><br>
   <input type="text" name="valor" placeholder="$0,00"><br><br>
   <input type="submit" name="Consultar" value="Cadastrar"><br><br>
        <button ><a type="button" href="formulario.php" target="_self">Cadastrar</a></button><br>
        <button ><a type="button" href="quantidade.php" target="_self">Quantidade</a></button><br>
        <button ><a type="button" href="validade.php" target="_self">Validade</a></button><br>
        <button ><a type="button" href="excluir.php" target="_self">Excluir</a></button><br>
</fieldset>
</form>
</body>
<link rel="stylesheet" href="style.css">
</html>
<?php
if (isset($_POST["Consultar"])) {
    $conexao = mysqli_Connect("localhost","root", "", "3tid");


    $idcode=$_POST["idcode"];
    $valor=$_POST["valor"];
    $novovalor=$_POST["valor"];
   

    $sqli="SELECT * FROM tabela1 WHERE idcode ='$idcode'";

    $resultado = mysqli_query($conexao, $sqli);

    $linha = mysqli_num_rows($resultado);

    if($idcode>0){

        while ($linha= mysqli_fetch_array($resultado)){
                echo $linha['idcode'].'<br>';
                echo $linha['descricao'].'<br>'; 
                
                // $novovalor=$linha['valor']$novovalor;
       
                echo $novovalor.'<br><hr>';
                $alt="UPDATE tabela1 SET valor='$novovalor' WHERE idcode= '$idcode'";
               
                $resultado1=mysqli_query($conexao,$alt);
            }
            }else echo"<script> alert ('codigo não localizado');</script>";
}
?>
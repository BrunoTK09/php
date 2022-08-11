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
    <form name='testealteraqtd' action="" method="post">
        <fieldset>
        <h1>
            <center>Alteração de Quantidade</center>
        </h1>

        <center><br> <br> <br> <br>
            Id do Produto <input type="text" name="idcode"> <br>
        </center>

        <center> <br> <br>
            Digite nova quantidade <input type="text" name="qtdat">
            <input type="submit" name="Consultar" value="Consultar">
        </center> <br>
        <button ><a type="button" href="formulario.php" target="_self">Cadastrar</a></button><br>
        <button ><a type="button" href="preco.php" target="_self">Preço</a></button><br>
        <button ><a type="button" href="validade.php" target="_self">Validade</a></button><br>
        <button ><a type="button" href="excluir.php" target="_self">Excluir</a></button><br>
    </form>
    <fieldset>

</body>
<link rel="stylesheet" href="style.css">
</html>
<?php
if (isset($_POST["Consultar"])) {
    $conexao = mysqli_Connect("localhost","root", "", "3tid");


    $idcode=$_POST["idcode"];
    $qtdat=$_POST["qtdat"];
    $novaqtdat=$_POST["qtdat"];
   

    $sqli="SELECT * FROM tabela1 WHERE idcode ='$idcode'";

    $resultado = mysqli_query($conexao, $sqli);

    $linha = mysqli_num_rows($resultado);
   
    if($idcode>0){

        while ($linha= mysqli_fetch_array($resultado)){
            echo $linha['idcode'].'<br>';
            echo $linha['descricao'].'<br>';
   
        $novaqtdat=$linha['qtdat']+$novaqtdat;
       
        echo $novaqtdat.'<br><hr>';
        $alt="UPDATE tabela1 SET qtdat='$novaqtdat' WHERE idcode= '$idcode'";
       
        $resultado1=mysqli_query($conexao,$alt);
    }
    }else echo"<script> alert ('codigo não localizado');</script>";
   
}

?>
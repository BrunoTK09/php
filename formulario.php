<!DOCTYPE html>
<html lang="pt-br">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
  <div class="formulario">

<center><form method="POST" action="" enctype="multipart/form-data" target="_self">
<fieldset>
   <label for="idcode">Id: </label><br>
   <input type="text" name="idcode" placeholder="código"><br>
   <label for="descricao">Descrição:</label><br>
   <input type="text" name="descricao" placeholder="Tipo Produto"><br>
   <label for="dtval">Validade:</label><br>
   <input type="text" name="dtval" placeholder="## / ## / ####"><br>
   <label for="qtdat">Quantidade:</label><br>
   <input type="text" name="qtdat" placeholder="#####"><br>
   <label for="valor">Valor:</label><br>
   <input type="text" name="valor" placeholder="$0,00"><br><br>
   <input type="submit" name="cadastrar" value="Cadastrar"><br><br>
        <button ><a type="button" href="quantidade.php" target="_self">Alterar</a></button><br>
        <button ><a type="button" href="preco.php" target="_self">Preço</a></button><br>
        <button ><a type="button" href="validade.php" target="_self">Validade</a></button><br>
        <button ><a type="button" href="excluir.php" target="_self">Excluir</a></button><br>

</fieldset>
</form></center>
    </div>
</body>
<link rel="stylesheet" href="style.css">
</html>

<?php 
date_default_timezone_set('America/Sao_Paulo');

$datasys = date('d/m/y');  

echo "$datasys";

$conn = mysqli_Connect("localhost", "root", "", "3tid");

// if (!$conn) {
//   die('Erro ao conectar ao banco: ' . mysql_error());
// }

if(isset($_POST["cadastrar"])){
  $idcode     = $_POST["idcode"];
  $descricao  = $_POST["descricao"];
  $dtval      = $_POST["dtval"];
  $qtdat      = $_POST["qtdat"];
  $valor      = $_POST["valor"];

  $sql = "SELECT * FROM tabela1 WHERE $idcode = idcode";
  $sql2 = "INSERT INTO tabela1 (idcode, descricao, dtval, qtdat, valor)
  VALUES ('$idcode', '$descricao', '$dtval', '$qtdat', '$valor')";

  $query = $conn->query($sql);

  if($query->num_rows > 0){
    echo("Já possui esse ID");
  }else{
    if($conn->query($sql2) === true){
      echo("Cadastrado com sucesso!");
    }else{
      echo("Erro ao cadastrar");
    }
    
  }

}

?>
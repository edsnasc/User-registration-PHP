<?php
include('conexao.php');

$nome  = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$opina = $_POST["opina"];

echo "<h3>nome:   $nome</h3>";
echo "<h3>email:  $email</h3>";
echo "<h3>senha:  $senha</h3>";
echo "<h3>Opina:  $opina</h3></br></br></br>";


$cad_usuario = "INSERT INTO usuario (nome, email, senha, opina) VALUES ('$nome', '$email', '$senha', '$opina')";

if (mysqli_query($conn, $cad_usuario)) {
      echo "<h1>Novo cadastro realizado </h1></br>";
} else {
      echo "Erro: " . $cad_usuario . "</br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>



<?php
require './../config/config.php';


$nomePizza = filter_input(INPUT_POST, 'nomePizza', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$tamanhoPizza = filter_input(INPUT_POST, 'tamanhoPizza', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$valorPizza = filter_input(INPUT_POST, 'valorPizza', FILTER_VALIDATE_FLOAT);
$descricaoPizza = filter_input(INPUT_POST, 'descricaoPizza', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

var_dump($nomePizza);
var_dump($tamanhoPizza);
var_dump($valorPizza);
var_dump($descricaoPizza);

if ($nomePizza && $valorPizza && $tamanhoPizza) {
   
   $sql = $pdo->prepare("INSERT INTO pizza (idUsuario,nomePizza,pathFoto,valorPizza,tamanhoPizza,descricaoPizza) 
                         VALUES (:idUsuario,:nomePizza,:pathFoto,:valorPizza,:tamanhoPizza,:descricaoPizza)");

   
   $sql->bindValue(":idUsuario", 1);  
   $sql->bindValue(":nomePizza", $nomePizza);
   $sql->bindValue(":pathFoto", "images/foto1.png");  
   $sql->bindValue(":valorPizza", $valorPizza);
   $sql->bindValue(":tamanhoPizza", $tamanhoPizza);
   $sql->bindValue(":descricaoPizza", $descricaoPizza);
$sql -> execute();
  
   header("Location: ./../index.php");
   exit;

} else {
   
   header("Location: ./cadastrar.php");
   exit;
}

?>







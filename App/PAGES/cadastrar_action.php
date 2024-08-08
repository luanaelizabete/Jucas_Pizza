<?php

$nomePizza = filter_input(INPUT_POST, 'nomePizza', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$tamanhoPizza = filter_input(INPUT_POST, 'tamanhoPizza', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$valorPizza = filter_input(INPUT_POST, 'valorPizza', FILTER_VALIDATE_FLOAT);
$descPizza = filter_input(INPUT_POST, 'descricaoPizza', FILTER_SANITIZE_FULL_SPECIAL_CHARS);


$nomePizza = $_POST['nomePizza'] ;
$valorPizza = $_POST['valorPizza'] ;
$tamanhoPizza = $_POST['tamanhoPizza'] ;
$descPizza = $_POST['descricaoPizza'] ;
 
echo "Dados enviados de cadastrar.php:
Nome da Pizza: {$nomePizza}, Valor da Pizza
{$valorPizza},
Tamanho da Pizza {$tamanhoPizza} e Descrição da Pizza: {$descPizza}";
var_dump($_POST);
var_dump($_GET);

?>
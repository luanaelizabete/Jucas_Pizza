<?php 
require "./config/config.php";
require "./pages/partials/header.php";

$sql = $pdo->query("SELECT * FROM pizza");
$sql->execute();
if ($sql->rowCount() > 0) {
    // trazer todas as pizzas
    $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

<!--pizza card-->
<section class="card-area">

<!--for-->

<?php foreach ($dados as $key => $value): ?>

 <div class="card-area__card">
    <img class="card-area__img" src="./img/item1.png" alt="Imagem da Pizza Muçarela">
    <button class="card-area__button-add">
        <i class="fa-solid fa-circle-plus"></i>
    </button>
    <span class="card-area__price"><?php echo $value['valor']?></span>
    <span class="card-area__title"><?php echo $value['nomePizza']?></span>
    <p class="card-area__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet porro
        libero quo veritatis, laboriosam quam similique deserunt praesentium velit minus natus</p>
</div>
<?php endforeach; ?>
</section>

<?php 
}
require "./pages/partials/carrinho.php";
require "./pages/partials/footer.php";
require "./pages/partials/modal.php";
?>

<?php

$dsn = 'mysql:dbname=cinebox_bd;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$select = "SELECT * FROM tb_filmes";

$result = $banco->query($select)->fetchAll();

?>


<?php foreach($result as $filmes) {?>
        
    <div class="row desc-filme">

        <div class="col-12 col-lg-2 col-sm-12 col-md-12 text-center">
            <img src="./assets/img/poster/<?=$filmes['poster'] ?>" alt="" class="desc-foto">
        </div>

        <div class="col-12 col-lg-8 col-sm-12 col-md-12 mt-3">
            <h3 class="title"> <?=$filmes['nome']?></h3>
            <p class="desc-descricao">
            <?= $filmes['descricao'] ?>
        </p>
        </div>

        <div class="col-12 col-lg-2 col-sm-12 col-md-12 desc-btn p-3">
            <a href="#" class="btn btn-primary">
                <i class="bi bi-pencil-square"></i>
                Editar
            </a>
            <a href="#" class="btn btn-danger">
                <i class="bi bi-trash-fill"></i>
                Excluir
            </a>
        </div>

    </div>



        <?php } ?>
   
<?php
$id  = $_GET[''];


$dsn = 'mysql:dbname=cinebox_bd;host=127.0.0.1';
$user = 'root';
$password = '';

$banco = new PDO($dsn, $user, $password);

$dados = $banco->query($select)->fetch();

?>
<?php foreach ($resultado as $lista) { ?>
    <div class="row desc-filme">

        <div class="col-12 col-lg-2 col-sm-12 col-md-12 text-center">
            <img src="" alt="" class="desc-foto">
        </div>

        <div class="col-12 col-lg-8 col-sm-12 col-md-12 mt-3">
            <h3 class="title">Jojo Rabbit</h3>
            <p class="desc-descricao">
                Mussum Ipsum, cacilds vidis litro abertis. Casamentiss faiz malandris se pirulitá. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.
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
 
            


       


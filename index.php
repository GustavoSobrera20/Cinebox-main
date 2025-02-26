<?php

$titulo = 'Cinebox - inicio';

include './includes/header.php'; 
include './includes/banner.php';
include './includes/filme_list.php';
include './includes/footer.php';


$dns = 'mysql:dbname=cinebox_bd;host=127.0.0.1';
$user = 'root';
$password = '';

$select = 'SELECT * FROM  tb_filmes';


$resultado = $banco->query(
    $select
)->fetchAll();
?>
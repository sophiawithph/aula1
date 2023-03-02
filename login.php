<?php 
require('twig_carregar.php');

$erro = $_GET['erro'] ?? false;

echo $twig ->render('login.html', [
    'errou_f_kkkk' => $erro,
]);

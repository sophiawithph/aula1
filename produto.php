<?php
   #produtos.php 
   require ('vendor/autoload.php');

$loader = new \Twig\Loader\FilesystemLoader('./templates');

$twig = new \Twig\Environment ($loader);

$templates = $twig -> load('produtos.html');


$produtos = [
    [
        'nome' => 'chinelo',
        'preco' => 30
    ],
    [
        'nome' => 'camiseta',
        'preco' => 50
    ],[
        'nome' => 'boné',
        'preco' => 39.9
    ],
    [
        'nome' => 'calça',
        'preco' => 150.00
    ],
];


echo $templates -> render([
    
    'titulo' => 'produtos', 
    'produtos'=> $produtos,
]);
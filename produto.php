<?php
   #produtos.php 
   require ('vendor/autoload.php');

$loader = new \Twig\Loader\FilesystemLoader('./templates');


$twig = new \Twig\Environment ($loader);

$templates =$twig -> load ('produtos.html');
echo $templates -> render([
    
    'titulo' => 'produtos'
]);
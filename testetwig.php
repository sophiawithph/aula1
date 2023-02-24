<?php
require ('vendor/autoload.php');

$loader = new \Twig\Loader\FilesystemLoader('./templates');


$twig = new \Twig\Environment ($loader);


$templates =$twig -> load ('teste.html');



echo $templates -> render([
    'nome'=> 'Sophia' ,
    'idade'=> 17,
    'titulo' => 'twig'
]);
<?php
require __DIR__ . '/vendor/autoload.php';

$mod = $_GET['mod'];

$objeto = new receitas();
$objeto->index($mod);

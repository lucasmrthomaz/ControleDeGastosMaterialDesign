<?php
require __DIR__ . '/vendor/autoload.php';

$mod = $_GET['mod'];

$objeto = new despesas();
$objeto->index($mod);

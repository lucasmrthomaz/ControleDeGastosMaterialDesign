<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 *
 * @author matheus
 */

require __DIR__ . '/vendor/autoload.php';

$action = $_GET['logar'];

if ($action == 'try') {
    $data = $_POST;
    
    $objeto = new login();  
    $objeto->valida($data);
    
} else {
    header('Location: index.php');
}


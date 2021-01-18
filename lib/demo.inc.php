<?php
require __DIR__ . '/../vendor/autoload.php';
session_start();

if(!isset($_SESSION['api-demo'])) {
    $_SESSION['api-demo'] = new Demo\ApiDemo();
}

$apiDemo = $_SESSION['api-demo'];



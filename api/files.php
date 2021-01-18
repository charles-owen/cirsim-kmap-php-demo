<?php
require '../lib/demo.inc.php';

$json = new Demo\JsonAPI();
$json->addData('files', 0, $apiDemo->dir($_GET['appTag']));
echo $json->encode();

<?php
require '../lib/demo.inc.php';

$data = $apiDemo->load($_GET['appTag'], $_GET['name']);
$json = new Demo\JsonAPI();
$json->addData('file-data', 0, ['data'=>$data['data']]);
echo $json->encode();
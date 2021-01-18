<?php
require '../lib/demo.inc.php';

$apiDemo->save($_POST['appTag'], $_POST['name'], $_POST['data'], $_POST['type']);
$json = new Demo\JsonAPI();
echo $json->encode();

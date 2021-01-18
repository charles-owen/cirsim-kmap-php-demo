<?php
require '../lib/demo.inc.php';

$apiDemo->test($_POST['appTag'], $_POST['name'], $_POST['result'], $_POST['data'], $_POST['type']);
$json = new Demo\JsonAPI();
echo $json->encode();

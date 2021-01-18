<?php
require 'lib/demo.inc.php';
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1" name="viewport">
    <?php require 'lib/cirsim.inc.php'; ?>
    <title>Cirsim and Kmap Demonstrations</title>
</head>
<body>

<h1>Cirsim Demonstration</h1>

<ul>
    <li><a href="save-load.php">Save/Load demo</a></li>
    <li><a href="testing.php">Testing demo</a></li>
    <li><a href="import.php">Cirsim Tab Import</a></li>
    <li><a href="kmap.php">Karnaugh Map Editor</a></li>
    <li><a href="kmap-test.php">Karnaugh Map Test</a></li>
</ul>
<ul>
    <li><a href="tests.php">Test results</a></li>
</ul>

<h2>Cirsim Inline</h2>
<?php
$cirsim = new CL\CirsimPHP\Cirsim();
$json = '{"grid":8,"snap":true,"circuits":[{"name":"main","width":350,"height":80,"components":[{"id":"c1001","x":48,"y":24,"name":"A","type":"InPin","value":false},{"id":"c1002","x":48,"y":56,"name":"B","type":"InPin","value":false},{"id":"c1003","x":296,"y":40,"name":"L1","type":"LED","color":"blue"},{"id":"c1004","x":176,"y":40,"name":null,"type":"Or"}],"connections":[{"from":"c1001","out":0,"to":"c1004","in":0,"bends":[]},{"from":"c1002","out":0,"to":"c1004","in":1,"bends":[]},{"from":"c1004","out":0,"to":"c1003","in":0,"bends":[]}]}]}';
echo $cirsim->present_demo($json);
?>

<h2>Cirsim Inline using adapter class</h2>
<?php
$cirsim = new Demo\CirsimDemo();
$json = '{"grid":8,"snap":true,"circuits":[{"name":"main","width":350,"height":80,"components":[{"id":"c1001","x":48,"y":24,"name":"A","type":"InPin","value":false},{"id":"c1002","x":48,"y":56,"name":"B","type":"InPin","value":false},{"id":"c1003","x":176,"y":40,"name":null,"type":"And"},{"id":"c1004","x":296,"y":40,"name":"L1","type":"LED","color":"blue"}],"connections":[{"from":"c1001","out":0,"to":"c1003","in":0,"bends":[]},{"from":"c1002","out":0,"to":"c1003","in":1,"bends":[]},{"from":"c1003","out":0,"to":"c1004","in":0,"bends":[]}]}]}';
echo $cirsim->present_demo($json);
?>

</body>
</html>
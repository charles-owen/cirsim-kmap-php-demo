<?php
require 'lib/demo.inc.php';
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1" name="viewport">
    <?php require 'lib/cirsim.inc.php'; ?>
    <title>Cirsim Tab Import Demonstration</title>
    <style>
        div.cirsim-window {
            border-left: 1px solid black;
            border-right: 1px solid black;
        }
    </style>
</head>
<body>

<h1>Cirsim Demonstration</h1>

<?php
$instructor = isset($_GET['instructor']) && $_GET['instructor'] === 'on';
$checked = $instructor ? ' checked' : '';
echo <<<HTML
<form><p><input type="checkbox" name="instructor"$checked> Instructor Mode <input type="submit"> <a href="./">Back to index</a>
</p></form>


HTML;
?>

<h2>Source project - 4-bit Adder</h2>
<p>This is an example of a Cirsim Quiz problem to create a 4-bit adder. It's also an example of fixed tabs,
and custom components selection. In instructor mode, do File>Load Solution to load the solution.</p>
<?php
$cirsim = new Demo\CirsimDemo($instructor, $apiDemo);
$cirsim->single('circuit4', 'adder');
$cirsim->tabs = array("adder");
$cirsim->components = ['combinatorial'];
$cirsim->answer = '{"grid":8,"circuits":[{"name":"main","width":1920,"height":1080,"components":[{"id":"c1001","x":248,"y":328,"name":"A0","type":"InPin","value":false},{"id":"c1002","x":248,"y":224,"name":"A1","type":"InPin","value":false},{"id":"c1003","x":248,"y":120,"name":"A2","type":"InPin","value":false},{"id":"c1004","x":248,"y":16,"name":"A3","type":"InPin","value":false},{"id":"c1005","x":248,"y":40,"name":"B3","type":"InPin","value":false},{"id":"c1006","x":248,"y":144,"name":"B2","type":"InPin","value":false},{"id":"c1007","x":248,"y":248,"name":"B1","type":"InPin","value":false},{"id":"c1008","x":248,"y":352,"name":"B0","type":"InPin","value":false},{"id":"c1009","x":112,"y":408,"name":"E","type":"InPin","value":false},{"id":"c1010","x":384,"y":360,"name":null,"type":"CircuitRef","circuitName":"adder"},{"id":"c1011","x":384,"y":256,"name":null,"type":"CircuitRef","circuitName":"adder"},{"id":"c1012","x":384,"y":152,"name":null,"type":"CircuitRef","circuitName":"adder"},{"id":"c1013","x":384,"y":48,"name":null,"type":"CircuitRef","circuitName":"adder"},{"id":"c1014","x":312,"y":384,"name":null,"type":"Zero"},{"id":"c1015","x":688,"y":240,"name":"O1","type":"OutPin"},{"id":"c1016","x":680,"y":136,"name":"O2","type":"OutPin"},{"id":"c1017","x":680,"y":32,"name":"O3","type":"OutPin"},{"id":"c1018","x":696,"y":344,"name":"O0","type":"OutPin"},{"id":"c1019","x":552,"y":32,"name":null,"type":"And"},{"id":"c1020","x":560,"y":136,"name":null,"type":"And"},{"id":"c1021","x":560,"y":240,"name":null,"type":"And"},{"id":"c1022","x":560,"y":344,"name":null,"type":"And"},{"id":"c1024","x":648,"y":80,"name":null,"type":"Xor"},{"id":"c1025","x":800,"y":96,"name":null,"type":"And"},{"id":"c1023","x":920,"y":96,"name":"V","type":"OutPin"}],"connections":[{"from":"c1001","out":0,"to":"c1010","in":0,"bends":[]},{"from":"c1002","out":0,"to":"c1011","in":0,"bends":[]},{"from":"c1003","out":0,"to":"c1012","in":0,"bends":[]},{"from":"c1004","out":0,"to":"c1013","in":0,"bends":[]},{"from":"c1005","out":0,"to":"c1013","in":1,"bends":[{"x":296,"y":32}]},{"from":"c1006","out":0,"to":"c1012","in":1,"bends":[{"x":296,"y":136}]},{"from":"c1007","out":0,"to":"c1011","in":1,"bends":[{"x":296,"y":240}]},{"from":"c1008","out":0,"to":"c1010","in":1,"bends":[{"x":296,"y":344}]},{"from":"c1009","out":0,"to":"c1022","in":1,"bends":[{"x":488,"y":408},{"x":488,"y":360}]},{"from":"c1009","out":0,"to":"c1021","in":1,"bends":[{"x":488,"y":408},{"x":488,"y":256}]},{"from":"c1009","out":0,"to":"c1020","in":1,"bends":[{"x":488,"y":408},{"x":488,"y":152}]},{"from":"c1009","out":0,"to":"c1019","in":1,"bends":[{"x":488,"y":408},{"x":488,"y":48}]},{"from":"c1009","out":0,"to":"c1025","in":1,"bends":[{"x":752,"y":408}]},{"from":"c1010","out":0,"to":"c1022","in":0,"bends":[]},{"from":"c1010","out":1,"to":"c1011","in":2,"bends":[{"x":472,"y":344},{"x":472,"y":304},{"x":328,"y":304}]},{"from":"c1011","out":0,"to":"c1021","in":0,"bends":[]},{"from":"c1011","out":1,"to":"c1012","in":2,"bends":[{"x":472,"y":240},{"x":472,"y":200},{"x":328,"y":200}]},{"from":"c1012","out":0,"to":"c1020","in":0,"bends":[]},{"from":"c1012","out":1,"to":"c1013","in":2,"bends":[{"x":472,"y":136},{"x":472,"y":96},{"x":328,"y":96}]},{"from":"c1012","out":1,"to":"c1024","in":1,"bends":[{"x":472,"y":136},{"x":472,"y":96}]},{"from":"c1013","out":0,"to":"c1019","in":0,"bends":[]},{"from":"c1013","out":1,"to":"c1024","in":0,"bends":[{"x":440,"y":64}]},{"from":"c1014","out":0,"to":"c1010","in":2,"bends":[]},{"from":"c1019","out":0,"to":"c1017","in":0,"bends":[]},{"from":"c1020","out":0,"to":"c1016","in":0,"bends":[]},{"from":"c1021","out":0,"to":"c1015","in":0,"bends":[]},{"from":"c1022","out":0,"to":"c1018","in":0,"bends":[]},{"from":"c1024","out":0,"to":"c1025","in":0,"bends":[]},{"from":"c1025","out":0,"to":"c1023","in":0,"bends":[]}]},{"name":"adder","width":1920,"height":1080,"components":[{"id":"c1001","x":64,"y":64,"name":"A","type":"InPin","value":false},{"id":"c1002","x":64,"y":96,"name":"B","type":"InPin","value":false},{"id":"c1003","x":64,"y":192,"name":"Cin","type":"InPin","value":false},{"id":"c1004","x":664,"y":96,"name":"S","type":"OutPin"},{"id":"c1005","x":664,"y":176,"name":"Cout","type":"OutPin"},{"id":"c1006","x":288,"y":160,"name":null,"type":"And"},{"id":"c1007","x":456,"y":232,"name":null,"type":"And"},{"id":"c1008","x":552,"y":176,"name":null,"type":"Or"},{"id":"c1009","x":288,"y":80,"name":null,"type":"Xor"},{"id":"c1010","x":448,"y":96,"name":null,"type":"Xor"}],"connections":[{"from":"c1001","out":0,"to":"c1006","in":0,"bends":[{"x":208,"y":64},{"x":208,"y":144}]},{"from":"c1001","out":0,"to":"c1009","in":0,"bends":[]},{"from":"c1002","out":0,"to":"c1006","in":1,"bends":[{"x":192,"y":96},{"x":192,"y":176}]},{"from":"c1002","out":0,"to":"c1009","in":1,"bends":[]},{"from":"c1003","out":0,"to":"c1007","in":1,"bends":[{"x":328,"y":192},{"x":328,"y":248}]},{"from":"c1003","out":0,"to":"c1010","in":1,"bends":[{"x":400,"y":192}]},{"from":"c1006","out":0,"to":"c1008","in":0,"bends":[]},{"from":"c1007","out":0,"to":"c1008","in":1,"bends":[]},{"from":"c1008","out":0,"to":"c1005","in":0,"bends":[]},{"from":"c1009","out":0,"to":"c1010","in":0,"bends":[]},{"from":"c1009","out":0,"to":"c1007","in":0,"bends":[{"x":360,"y":80},{"x":360,"y":216}]},{"from":"c1010","out":0,"to":"c1004","in":0,"bends":[]}]}],"snap":true}';
$cirsim->option('tabsMenu', false);

$test = function($a3, $a2, $a1, $a0, $b3, $b2, $b1, $b0, $e)
{
    $a = ($a3 ? -8 : 0) + ($a2 ? 4 : 0) + ($a1 ? 2 : 0) + ($a0 ? 1 : 0);
    $b = ($b3 ? -8 : 0) + ($b2 ? 4 : 0) + ($b1 ? 2 : 0) + ($b0 ? 1 : 0);
    $o = $a + $b;
    $o3 = ($o & 8) != 0 && $e;
    $o2 = ($o & 4) != 0 && $e;
    $o1 = ($o & 2) != 0 && $e;
    $o0 = ($o & 1) != 0 && $e;
    $v = ($o > 7 || $o < -8) && $e;
    return array($o3, $o2, $o1, $o0, $v);
};

$cirsim->add_test("Test", ["A3", "A2", "A1", "A0",
    "B3", "B2", "B1", "B0", "E"], ["O3", "O2", "O1", "O0", "V"], $test);

echo $cirsim->present();
?>

<h2>Tab Import Project - 4-bit Subtractor</h2>
<p>This is an example of a quiz where one of the tabs is imported from another
quiz result, in this case the adder above. Select the adder table (for a full
adder) and choose File>Import Import Tab.</p>
<?php
$cirsim = new Demo\CirsimDemo($instructor, $apiDemo);
$cirsim->single('circuit4', 'sub');
$cirsim->tabs = ["adder"];
$cirsim->option('tabsMenu', false);
$cirsim->components = ['combinatorial'];
$cirsim->answer = '{"grid":8,"circuits":[{"name":"main","width":1920,"height":1080,"components":[{"id":"c1010","x":384,"y":360,"name":null,"type":"CircuitRef","circuitName":"adder"},{"id":"c1011","x":384,"y":256,"name":null,"type":"CircuitRef","circuitName":"adder"},{"id":"c1012","x":384,"y":152,"name":null,"type":"CircuitRef","circuitName":"adder"},{"id":"c1013","x":384,"y":48,"name":null,"type":"CircuitRef","circuitName":"adder"},{"id":"c1015","x":688,"y":240,"name":"O1","type":"OutPin"},{"id":"c1016","x":680,"y":136,"name":"O2","type":"OutPin"},{"id":"c1017","x":680,"y":32,"name":"O3","type":"OutPin"},{"id":"c1018","x":696,"y":344,"name":"O0","type":"OutPin"},{"id":"c1019","x":552,"y":32,"name":null,"type":"And"},{"id":"c1020","x":560,"y":136,"name":null,"type":"And"},{"id":"c1021","x":560,"y":240,"name":null,"type":"And"},{"id":"c1022","x":560,"y":344,"name":null,"type":"And"},{"id":"c1024","x":648,"y":80,"name":null,"type":"Xor"},{"id":"c1025","x":800,"y":96,"name":null,"type":"And"},{"id":"c1023","x":920,"y":96,"name":"V","type":"OutPin"},{"id":"c1009","x":112,"y":432,"name":"E","type":"InPin","value":false},{"id":"c1028","x":264,"y":64,"name":null,"type":"Inverter"},{"id":"c1026","x":264,"y":168,"name":null,"type":"Inverter"},{"id":"c1027","x":264,"y":272,"name":null,"type":"Inverter"},{"id":"c1029","x":264,"y":376,"name":null,"type":"Inverter"},{"id":"c1007","x":168,"y":272,"name":"B1","type":"InPin","value":false},{"id":"c1008","x":168,"y":376,"name":"B0","type":"InPin","value":false},{"id":"c1006","x":168,"y":168,"name":"B2","type":"InPin","value":false},{"id":"c1005","x":168,"y":64,"name":"B3","type":"InPin","value":false},{"id":"c1004","x":168,"y":16,"name":"A3","type":"InPin","value":false},{"id":"c1003","x":168,"y":120,"name":"A2","type":"InPin","value":false},{"id":"c1001","x":168,"y":328,"name":"A0","type":"InPin","value":false},{"id":"c1030","x":312,"y":408,"name":null,"type":"One"},{"id":"c1002","x":168,"y":224,"name":"A1","type":"InPin","value":false}],"connections":[{"from":"c1010","out":0,"to":"c1022","in":0,"bends":[]},{"from":"c1010","out":1,"to":"c1011","in":2,"bends":[{"x":472,"y":344},{"x":472,"y":304},{"x":328,"y":304}]},{"from":"c1011","out":0,"to":"c1021","in":0,"bends":[]},{"from":"c1011","out":1,"to":"c1012","in":2,"bends":[{"x":472,"y":240},{"x":472,"y":200},{"x":328,"y":200}]},{"from":"c1012","out":0,"to":"c1020","in":0,"bends":[]},{"from":"c1012","out":1,"to":"c1013","in":2,"bends":[{"x":472,"y":136},{"x":472,"y":96},{"x":328,"y":96}]},{"from":"c1012","out":1,"to":"c1024","in":1,"bends":[{"x":472,"y":136},{"x":472,"y":96}]},{"from":"c1013","out":0,"to":"c1019","in":0,"bends":[]},{"from":"c1013","out":1,"to":"c1024","in":0,"bends":[{"x":440,"y":64}]},{"from":"c1019","out":0,"to":"c1017","in":0,"bends":[]},{"from":"c1020","out":0,"to":"c1016","in":0,"bends":[]},{"from":"c1021","out":0,"to":"c1015","in":0,"bends":[]},{"from":"c1022","out":0,"to":"c1018","in":0,"bends":[]},{"from":"c1024","out":0,"to":"c1025","in":0,"bends":[]},{"from":"c1025","out":0,"to":"c1023","in":0,"bends":[]},{"from":"c1009","out":0,"to":"c1022","in":1,"bends":[{"x":488,"y":432},{"x":488,"y":360}]},{"from":"c1009","out":0,"to":"c1021","in":1,"bends":[{"x":488,"y":432},{"x":488,"y":256}]},{"from":"c1009","out":0,"to":"c1020","in":1,"bends":[{"x":488,"y":432},{"x":488,"y":152}]},{"from":"c1009","out":0,"to":"c1019","in":1,"bends":[{"x":488,"y":432},{"x":488,"y":48}]},{"from":"c1009","out":0,"to":"c1025","in":1,"bends":[{"x":752,"y":432}]},{"from":"c1028","out":0,"to":"c1013","in":1,"bends":[{"x":296,"y":32}]},{"from":"c1026","out":0,"to":"c1012","in":1,"bends":[{"x":296,"y":136}]},{"from":"c1027","out":0,"to":"c1011","in":1,"bends":[{"x":296,"y":240}]},{"from":"c1029","out":0,"to":"c1010","in":1,"bends":[{"x":296,"y":344}]},{"from":"c1007","out":0,"to":"c1027","in":0,"bends":[]},{"from":"c1008","out":0,"to":"c1029","in":0,"bends":[]},{"from":"c1006","out":0,"to":"c1026","in":0,"bends":[]},{"from":"c1005","out":0,"to":"c1028","in":0,"bends":[]},{"from":"c1004","out":0,"to":"c1013","in":0,"bends":[]},{"from":"c1003","out":0,"to":"c1012","in":0,"bends":[]},{"from":"c1001","out":0,"to":"c1010","in":0,"bends":[]},{"from":"c1030","out":0,"to":"c1010","in":2,"bends":[]},{"from":"c1002","out":0,"to":"c1011","in":0,"bends":[]}]},{"name":"adder","width":1920,"height":1080,"components":[{"id":"c1001","x":64,"y":64,"name":"A","type":"InPin","value":false},{"id":"c1002","x":64,"y":96,"name":"B","type":"InPin","value":false},{"id":"c1003","x":64,"y":192,"name":"Cin","type":"InPin","value":false},{"id":"c1004","x":664,"y":96,"name":"S","type":"OutPin"},{"id":"c1005","x":664,"y":176,"name":"Cout","type":"OutPin"},{"id":"c1006","x":288,"y":160,"name":null,"type":"And"},{"id":"c1007","x":456,"y":232,"name":null,"type":"And"},{"id":"c1008","x":552,"y":176,"name":null,"type":"Or"},{"id":"c1009","x":288,"y":80,"name":null,"type":"Xor"},{"id":"c1010","x":448,"y":96,"name":null,"type":"Xor"}],"connections":[{"from":"c1001","out":0,"to":"c1006","in":0,"bends":[{"x":208,"y":64},{"x":208,"y":144}]},{"from":"c1001","out":0,"to":"c1009","in":0,"bends":[]},{"from":"c1002","out":0,"to":"c1006","in":1,"bends":[{"x":192,"y":96},{"x":192,"y":176}]},{"from":"c1002","out":0,"to":"c1009","in":1,"bends":[]},{"from":"c1003","out":0,"to":"c1007","in":1,"bends":[{"x":328,"y":192},{"x":328,"y":248}]},{"from":"c1003","out":0,"to":"c1010","in":1,"bends":[{"x":400,"y":192}]},{"from":"c1006","out":0,"to":"c1008","in":0,"bends":[]},{"from":"c1007","out":0,"to":"c1008","in":1,"bends":[]},{"from":"c1008","out":0,"to":"c1005","in":0,"bends":[]},{"from":"c1009","out":0,"to":"c1010","in":0,"bends":[]},{"from":"c1009","out":0,"to":"c1007","in":0,"bends":[{"x":360,"y":80},{"x":360,"y":216}]},{"from":"c1010","out":0,"to":"c1004","in":0,"bends":[]}]}],"snap":true}';
$cirsim->tab_import("adder", 			// Tab to import into
    "circuit4", 		// Assignment to import from
    "adder",	// Name (quiz question filename)
    "adder"				// Tab to import from
);

/*$test = array(array(0, 0, 0, 0, 0, 0, 0),
			 array(0, 0, 1, 0, 0, 0, 1),
			 array(0, 1, 0, 0, 0, 0, 0),
			 array(0, 1, 1, 0, 0, 1, 0),
			 array(1, 0, 0, 0, 0, 0, 0),
			 array(1, 0, 1, 0, 1, 0, 0),
			 array(1, 1, 0, 0, 0, 0, 0),
			 array(1, 1, 1, 1, 0, 0, 0)
			 );*/

$test = function($a3, $a2, $a1, $a0, $b3, $b2, $b1, $b0, $e)
{
    $a = ($a3 ? -8 : 0) + ($a2 ? 4 : 0) + ($a1 ? 2 : 0) + ($a0 ? 1 : 0);
    $b = ($b3 ? -8 : 0) + ($b2 ? 4 : 0) + ($b1 ? 2 : 0) + ($b0 ? 1 : 0);
    $o = $a - $b;
    $o3 = ($o & 8) != 0 && $e;
    $o2 = ($o & 4) != 0 && $e;
    $o1 = ($o & 2) != 0 && $e;
    $o0 = ($o & 1) != 0 && $e;
    $v = ($o > 7 || $o < -8) && $e;
    return array($o3, $o2, $o1, $o0, $v);
};

$cirsim->add_test("Test", ["A3", "A2", "A1", "A0",
    "B3", "B2", "B1", "B0", "E"], ["O3", "O2", "O1", "O0", "V"], $test);

echo $cirsim->present();
?>

</body>
</html>
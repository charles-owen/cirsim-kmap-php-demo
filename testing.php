<?php
require 'lib/demo.inc.php';
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1" name="viewport">
    <?php require 'lib/cirsim.inc.php'; ?>
    <title>Cirsim Demonstration</title>
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

<h2>Testing Example</h2>
<p>This is an example of a Cirsim quiz where the student is to create the circuit: O=A+BC. In instructor mode,
File>Load Solution will load the solution to the quiz.</p>

<?php
$compute = function($a, $b, $c) {return $a || $b && $c;};

$cirsim = new Demo\CirsimDemo($instructor, $apiDemo);
$cirsim->single('circuit2', 'quiz4');
$cirsim->components = ['And', 'Or', 'Inverter'];
$cirsim->add_test("Test", ["A", "B", "C"], ["O"], $compute);
$cirsim->option('tabsMenu', false);
$cirsim->answer = '{"grid":8,"circuits":[{"name":"main","width":1920,"height":1080,"components":[{"id":"c1010","x":496,"y":120,"name":"O","type":"OutPin"},{"id":"c1007","x":128,"y":64,"name":"A","type":"InPin","value":false},{"id":"c1008","x":128,"y":120,"name":"B","type":"InPin","value":false},{"id":"c1011","x":128,"y":152,"name":"C","type":"InPin","value":false},{"id":"c1009","x":248,"y":136,"name":null,"type":"And"},{"id":"c1012","x":360,"y":120,"name":null,"type":"Or"}],"connections":[{"from":"c1007","out":0,"to":"c1012","in":0,"bends":[{"x":312,"y":64}]},{"from":"c1008","out":0,"to":"c1009","in":0,"bends":[]},{"from":"c1011","out":0,"to":"c1009","in":1,"bends":[]},{"from":"c1009","out":0,"to":"c1012","in":1,"bends":[]},{"from":"c1012","out":0,"to":"c1010","in":0,"bends":[]}]}],"snap":true}';
echo $cirsim->present();
?>

</body>
</html>
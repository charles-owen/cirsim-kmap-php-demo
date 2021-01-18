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

<h2>Save/Load file capability</h2>

<?php
$cirsim = new Demo\CirsimDemo($instructor, $apiDemo);
echo $cirsim->present();
?>

<h2>Single save capability</h2>
<?php
$cirsim = new Demo\CirsimDemo($instructor, $apiDemo);
$cirsim->single('circuit2', 'quiz3');
$cirsim->answer = '{"grid":8,"circuits":[{"name":"main","width":1920,"height":1080,"components":[{"id":"c1007","x":104,"y":80,"name":"A","type":"InPin","value":false},{"id":"c1009","x":248,"y":96,"name":null,"type":"And"},{"id":"c1010","x":392,"y":96,"name":"O","type":"OutPin"},{"id":"c1008","x":104,"y":112,"name":"B","type":"InPin","value":false}],"connections":[{"from":"c1007","out":0,"to":"c1009","in":0,"bends":[]},{"from":"c1009","out":0,"to":"c1010","in":0,"bends":[]},{"from":"c1008","out":0,"to":"c1009","in":1,"bends":[]}]}],"snap":true}';
echo $cirsim->present();
?>

</body>
</html>
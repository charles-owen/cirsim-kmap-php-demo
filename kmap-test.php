<?php
require 'lib/demo.inc.php';
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1" name="viewport">
    <?php require 'lib/cirsim.inc.php'; ?>
    <title>Kmap Test Demonstration</title>
</head>
<body>

<h1>Kmap Test Demonstration</h1>

<?php
$instructor = isset($_GET['instructor']) && $_GET['instructor'] === 'on';
$checked = $instructor ? ' checked' : '';
echo <<<HTML
<form><p><input type="checkbox" name="instructor"$checked> Instructor Mode <input type="submit"> <a href="./">Back to index</a>
</p></form>
HTML;
?>

<h2>Presentation using PHP class</h2>
<p>This editor has been preconfigurated to the answer: X'. Enter that and click Check to send the test results
to the server.</p>
<?php
$kmap = new Demo\KmapDemo($instructor, $apiDemo);
$kmap->size = 2;
$kmap->test = true;
$kmap->minterms = [0, 1];
$kmap->appTag = 'circuit1';
$kmap->name = 'quiz1';
$kmap->labels = ['X', 'Y'];
echo $kmap->present();
?>
</body>
</html>
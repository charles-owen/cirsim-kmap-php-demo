<?php
require 'lib/demo.inc.php';
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1" name="viewport">
    <?php require 'lib/cirsim.inc.php'; ?>
    <title>Kmap Demonstration</title>
</head>
<body>

<h1>Kmap Demonstration</h1>

<?php
$instructor = isset($_GET['instructor']) && $_GET['instructor'] === 'on';
$checked = $instructor ? ' checked' : '';
echo <<<HTML
<form><p><input type="checkbox" name="instructor"$checked> Instructor Mode <input type="submit"> <a href="./">Back to index</a>
</p></form>
HTML;
?>

<h2>Direct div presentation</h2>
<div class="kmap-cl-install">{"size": 3}</div>

<h2>Presentation using PHP class</h2>
<?php
$kmap = new Demo\KmapDemo($instructor, $apiDemo);
$kmap->size = 4;
echo $kmap->present();
?>
</body>
</html>
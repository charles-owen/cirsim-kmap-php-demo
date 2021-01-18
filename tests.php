<?php
require 'lib/demo.inc.php';
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1" name="viewport">
    <?php require 'lib/cirsim.inc.php'; ?>
    <title>Test Results</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            border: thin solid black;
            padding-left: 1em;
            padding-right: 1em;
        }
    </style>
</head>
<body>

<h1>Tests Results</h1>
<p><a href="./">Back to index</a></p>

<table>
    <tr>
        <td>AppTag</td>
        <td>Name</td>
        <td>Result</td>
    </tr>
<?php
foreach($apiDemo->getTests() as $test) {
    $appTag = $test['appTag'];
    $filename = $test['filename'];
    $result = $test['result'];
    echo <<<HTML
<tr><td>$appTag</td><td>$filename</td><td>$result</td></tr>
HTML;
}
?>
</table>

</body>
</html>
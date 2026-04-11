<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Create</title>
</head>
<body>
    <form method="GET">
        <h2>File Create and Write</h2>
        <input type="text" name="name" placeholder="File Name">
        <input type="text" name="text" placeholder="Insert Text">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
<?php
$filename = $_GET['name'];
$txt = $_GET['text'];
$output = shell_exec("echo $txt >> $filename; cat $filename");

echo "<pre>Se ha creado el archivo $filename con el texto $output en su interior</pre>";
?>

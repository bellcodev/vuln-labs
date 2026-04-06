<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ping Web</title>
</head>
<body>
    <form method="GET">
        <input type="text" name="host" placeholder="8.8.8.8">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
<?php
$host = $_GET['host'];
$output = shell_exec("ping -c 1 $host"); 
echo "<pre>$output</pre>";        # └── Vulnerable!!!!
?>
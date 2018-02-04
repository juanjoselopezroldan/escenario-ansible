# escenario-ansible
Este directorio de Github almacena una practica basada en ANSIBLE, con el cual realizamos la orquestacion de un escenario sencillo que esta compuesto por dos maquinas que ofrecen diferentes servicios.

El nodo 1 ofrece un servidor DNS y un servidor MySQL.

El nodo 2 ofrece un servidor web nginx con php7.0-fpm, el cual ofrece un wordpress que tiene almacenado sus datos en el nodo 1 (en mysql).


Para poder utilizar este escenario orquestado por Asible tienes que tener la configuracion de red 192.168.100.X/24, puedes utilizar el siguiente:

```
ip a add 192.168.100.250/24 dev wlp2s0
```

Acto seguido tendremos que indicar en el fichero /etc/resolv.conf el servidor DNS que tenemos configurado que en nuestro caso es la ip 192.168.100.251.

```
nano /etc/resolv.conf

nameserver 192.168.100.251

```

Y para poder acceder a dicha pagina tendremos que indicar la siguiente direccion en el navegador.

```
www.nodos.com
```


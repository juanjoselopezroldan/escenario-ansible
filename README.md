# escenario-ansible
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


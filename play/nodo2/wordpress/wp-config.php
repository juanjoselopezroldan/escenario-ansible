<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'usuario');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'usuario');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'a0z4#!^SC;R>q5-H>nb{Ui^KAVmj^H)w(Q3>~xqrod%XyP+YBjCPI9,g;;NmF9@^');
define('SECURE_AUTH_KEY', '2^L7*S>O9F,B )G[i|=4e~ m`>Q`.Sf[i$GZTDWUP0rA&/XE8MkbgmXpvvgcX}yq');
define('LOGGED_IN_KEY', 'my01{#GW+gIO{REZu5Z^]B $GgPS~mQt,rb%/*I[DAStq*2:1RF(K{_HNeLhb4<o');
define('NONCE_KEY', '5F|`{%p`TWIT=N)b&&:fWa)pm_[c|$sd8SiV@6Hhk>AL7y5|w0TVr5]=_#%!nvJ(');
define('AUTH_SALT', 'rR0/Sfy(Tlgj9RFH#$=3=1LYHWH#i(-DdjQBnNtzhe8aZI*9y^G1M4-hTZVD>!_.');
define('SECURE_AUTH_SALT', 'md!d$_n~zMN4ca$,K@bSU=$5qKW6$.8|1_tfKkXGBh,F>cbsa_3a`T6GVX&=nzSi');
define('LOGGED_IN_SALT', 'U)^[2@&BPtx-7zuJJ`^ (zPzn#(D%5a[*k:HW;&V.qe#5~3]/TAH/#V-zLU3=X>6');
define('NONCE_SALT', '/[z4{mplx:cZ]FLF:7h3$cvWpo|X> 1:Z/Up1Jm|9.OH1fq,c$,%d#9)_oJCl0ro');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');



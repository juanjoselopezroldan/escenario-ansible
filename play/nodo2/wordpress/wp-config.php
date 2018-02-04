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
define('DB_HOST', '192.168.100.251');

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
define('AUTH_KEY', 'AaGdxSaH4,JQIZX54_ndZdGo&Ahl3gywgjFbClm+%8LO:-6$CL:q[Bbj8ax?7=Tg');
define('SECURE_AUTH_KEY', '/dPIm ;EWk@Si+^P4jAkjVHEB85q1}JI!}RmXx~@8xv>#b{~Y!&`<bBT/ypqMT&U');
define('LOGGED_IN_KEY', '<>;md+nR2tg&-MDEZK2}hT<!`#uw#GCau6b6GNwGJ2s;c%;tqvKn`bO -oi~_bfd');
define('NONCE_KEY', '4,H%H3>;invf36c#YzJn%SRXgAIX2/1){$cK_Kn9wvZWIPD+EoT]R$<SN[mBVRM&');
define('AUTH_SALT', ')!20A.fv5|i:aj$WrVNj>NJ2o V =x`&Hep>^Pga9||8aKNQQjwRJ-dOhbBU$%M6');
define('SECURE_AUTH_SALT', 'c/pm$DQ F/l64X%%OSz91fI9Pm8PtZ*-!.QfS[?5>kTTYH0PwV|Xa&J^Zv.kZF.2');
define('LOGGED_IN_SALT', ',P+(`L2vm6{:/W}E*xH RiG-4EOdqO~PcWJHVqDS;)*PXJDYobMOv)O5]c^v&noB');
define('NONCE_SALT', 'S%>e:gqle/& PU3z;bVP.p^[J<^8+;AHKt3B4P:7}/QmlNuE^s^vXygDY3x$B]lN');

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



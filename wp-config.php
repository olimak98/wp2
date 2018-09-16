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
define('DB_NAME', 'wp2');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'wp_user');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY', '56;ot4J0[]rGAWTug;{W]J(Ff&r!IT`uOQlKWTjlckp!@paf:eW.|1Q1AJ(nGxv|');
define('SECURE_AUTH_KEY', 'hHsEg[$&qkg|)qg_vk[8F.udM?vjU&9HpJ!5<5ud}0p%bDK+8F:3|*p[eXJ/:__/');
define('LOGGED_IN_KEY', 'zM;_._:Tcc,?D(q*`Z7*JrNXP^q/-oo:7F,*-@Qr|CGBSnJIYpa!+qNUsu>uB!rW');
define('NONCE_KEY', '^B=3sM]U+=Y,[0!,em}|`z/w]o:rP7 N#_jMqS`#]Sicb4`EMtbnPIjLmGe/k:Z|');
define('AUTH_SALT', 'CN!B9TM(uyc1o,4|0=<|Fm{xq=F>`e,H,r,(9k,?+&;igHITS)X}S|w;,Ahm }fu');
define('SECURE_AUTH_SALT', 'DzeD<iG>IK3FTT}&-K+{x]^6a]l8v+(pV1~Agg(R{S5=((=*`P+Kv9+A3b0M3UQh');
define('LOGGED_IN_SALT', 'JK%)(>(;C);gCyELBKf|iWM:jyVzu1A>IZ`eLfY::s(2KW<K0](Ms,Yu|pC|5=1?');
define('NONCE_SALT', 'Snhb2$QF%KNCr ^|%P1gG/O%nP;;#$FERH.:<2kY4ZL^mYj$_8orFL/#M=([q `#');

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


<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '$Z}_EX35%Gg8Cvb%EL|psT9=v!]BPeI ?XsnCT0B4OloTI,YX!^mPo}OU,=~[6Nd' );
define( 'SECURE_AUTH_KEY',  '|Z;%coIKi<Xm2#tXVt-9_rV6zFQ`rc_PsVRv!e$&!Cd&(89jW9zT:*lg9dj_nzf.' );
define( 'LOGGED_IN_KEY',    'zrv7@6A7EFV(o*sm~9<3=;{U7oppyn&m4idj%mvcXa.W#YD~;Q!X:]:^YL!_:*k`' );
define( 'NONCE_KEY',        'B/J>&FP==-`6-jd`>6.0D/> u;jQf-R^YajCehS}p-Jtm[)BPh 0<^6>]d}%{(8%' );
define( 'AUTH_SALT',        '0N<ILCd2w?5zdBbBXGSFe{0IT;[s?^P|#QjBh+Xz57aY@i<Etn+emUDDGNagL:2@' );
define( 'SECURE_AUTH_SALT', '^)Bw*hUMV8N,*Ig(lBQ9HCytwmR]tV._D4-}#u:?!*;&H}ogvA8`Kkg&n#[bM9bf' );
define( 'LOGGED_IN_SALT',   'nAN,DqarqT~IH,Vy-DtE5RxMduI-P:.>A3 Pjo+TO;LOiI2G&(c=P+0^(t2991{T' );
define( 'NONCE_SALT',       'bu6BigKs=YgoZzm}(5Y24H>iexOa|>{+a$WS>(DX>Sd(4f_>>(409R~ZkC)N8ls[' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

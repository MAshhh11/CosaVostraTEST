<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'cosavostra' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'fp)}/5zVIT&**Vw7Qd-/Eae-]NlCLy&=KFEJo[D4AfGyAn9Yl75HIh<8b iKkjqK' );
define( 'SECURE_AUTH_KEY',  ' ]XW%FZAie2>XRcv=o,*wUn9] +Evst2QZF/*Cb#T#j8y^|nzz4Z?Q[0kf9B|<[I' );
define( 'LOGGED_IN_KEY',    'js5O-IgSqMvDbQ@]fr~IM0sB)6=CM5kSo[u>yH_ip&tEG%;tl|jZ%1i1T!h+_H.M' );
define( 'NONCE_KEY',        '=]>Io=R +g:j@Lpe[Iob-V_Anc3F@h<A/@3k`CQh?Ek@C]S1:Ped2ykLfeQ#RP:~' );
define( 'AUTH_SALT',        'eo*1K8*5.3XtlO!5kbph%NXnsv..VALWAI$uZ#@*IjgXVGl=yh[:%nd(!A]qmUK4' );
define( 'SECURE_AUTH_SALT', 'P[C<XYi9i8[yUw~vH,Ft6_~2^Y]r${UuOrY[1w`%G5~BN[h)GA_ax}V_.S M} &b' );
define( 'LOGGED_IN_SALT',   'qro6ATinTtZDvXO?UkP)X|_zW~RwCyvMbC+U>859YTO|<Sz<a.z@+07WY;j)o#ry' );
define( 'NONCE_SALT',       'B%V;_|b1+57Z+Z@rl$yG4ks0@uV8Of1V0n|8lg$jb.|*J5*aMb$]=E1bP97ar_hP' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'cv_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );

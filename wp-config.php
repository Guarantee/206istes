<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', '206istes');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'fS,`?-bUYF)r<-{) Bdc+??0;)uyUB(+c)X|eUWSR`x@O;9+mPYDG{%L0g$|@(r5');
define('SECURE_AUTH_KEY',  't?-/Bk?Z&}k?eIq 4Na+(L5]P,IdiYEA4.,!bBXSg:RPUn9|@S+P#+7N7a73:lZM');
define('LOGGED_IN_KEY',    'iCP)K!- s|EUAb7D+M|$OI1)mErwP^#|nG9^iYS|m%d-CgYAyE(l`263I50jpm,A');
define('NONCE_KEY',        '3F)+^q!U+>8|+@K{I*d|A|%|Fy7<!Q[L/+6&= f I`|8gv~#QX;n<&Va|GF;b_@]');
define('AUTH_SALT',        'U@HVlHl$ARnK9eO6w+SPE7Q<1tLk)]Xia&XCE:;`BK<xsweM/:eMZ5)U+G W*r.=');
define('SECURE_AUTH_SALT', '~C:^Oh)R%M9?HvT9~>U!d36cJoQJs~:P0-em8;GoD|xpBg%3:oJ2b}{EDrg4Og;U');
define('LOGGED_IN_SALT',   'r>eI+)wH#B!xYlrLP;?91K^ YBUz9oS{ThkUzmk$[EF35vT>CgmM#2Re;%eO]+FZ');
define('NONCE_SALT',       'Bwrc2TrLc_7lZ 4+8;]_/fM+D/ol=Fk.st|K{rDOxtU;pRc!xrb4`Y!BfDQR6e;8');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'gmd_wp_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
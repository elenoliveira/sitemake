<?php
/**
 * A configuração de base do WordPress
 *
 * Este ficheiro define os seguintes parâmetros: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, e ABSPATH. Pode obter mais informação
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} no Codex. As definições de MySQL são-lhe fornecidas pelo seu serviço de alojamento.
 *
 * Este ficheiro contém as seguintes configurações:
 *
 * * Configurações de  MySQL
 * * Chaves secretas
 * * Prefixo das tabelas da base de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define( 'DB_NAME', 'wp_elen' );

/** O nome do utilizador de MySQL */
define( 'DB_USER', 'elen' );

/** A password do utilizador de MySQL  */
define( 'DB_PASSWORD', '123456789*' );

/** O nome do serviddor de  MySQL  */
define( 'DB_HOST', 'localhost' );

/** O "Database Charset" a usar na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O "Database Collate type". Se tem dúvidas não mude. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'laV!rXPpLy}yB&q&ns1;R@_w(UfG](=aag,3[q9T~+Y5*ou(3g,5$<P>9&|>o;qx' );
define( 'SECURE_AUTH_KEY', 'az|<3!_{O-SKz;p,bD|3y<G-Z$>P0DK`Ole%^3Y[tF2pdNUk,^6r3;an)`;O6JBG' );
define( 'LOGGED_IN_KEY', 'gL.^1w=MZvww9E9+Gg (:+&;!AhV(0%+)WBsNJ_DIe%Dzy_OxbCVV{~f2OpbU.1(' );
define( 'NONCE_KEY', '$t:mG8wc+9FTZXO>4vfi*o{z=GrPOi9{1,Gxdc>4>[L @z%/EWcRMSdv)r2f*rAm' );
define( 'AUTH_SALT', '.GUdPW>6%Vp`4l^I@B(jHa[TPf9S9N-|x=TQy)}mt*pLO~dE|)fcge$i/8cj3XT.' );
define( 'SECURE_AUTH_SALT', 'awAImFikYIYm^}pFpWech-Bi}+WK#XHJsk*lP:KH_:XnZbYnk~Y946k6P^^AxCKD' );
define( 'LOGGED_IN_SALT', 'HeKIbS*_bJN:0EwE1S]1(8ZN[h7Gj@Jf@!I2|Ni1p[1@.Z|`|e*H<YP@gT-Tk<um' );
define( 'NONCE_SALT', '6`M7^xBP IdspO`Ox#J >0%).^(e.IphY)}.On4>-V3%M9r45 OlG|ZjfQY:i,Fp' );

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix = 'wp_';

/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 *
 * Para mais informações sobre outras constantes que pode usar para debugging,
 * visite o Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once( ABSPATH . 'wp-settings.php' );

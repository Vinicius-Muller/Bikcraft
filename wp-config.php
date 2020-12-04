<?php

/**

 * As configurações básicas do WordPress

 *

 * O script de criação wp-config.php usa esse arquivo durante a instalação.

 * Você não precisa usar o site, você pode copiar este arquivo

 * para "wp-config.php" e preencher os valores.

 *

 * Este arquivo contém as seguintes configurações:

 *

 * * Configurações do MySQL

 * * Chaves secretas

 * * Prefixo do banco de dados

 * * ABSPATH

 *

 * @link https://wordpress.org/support/article/editing-wp-config-php/

 *

 * @package WordPress

 */

define( 'WP_HOME', 'http://viniciusmuller.com.br/bikcraft' );

define( 'WP_SITEURL', 'http://viniciusmuller.com.br/bikcraft' );

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //

/** O nome do banco de dados do WordPress */

define( 'DB_NAME', 'bdbick' );





/** Usuário do banco de dados MySQL */

define( 'DB_USER', 'bdbick' );





/** Senha do banco de dados MySQL */

define( 'DB_PASSWORD', 'guitarra123' );





/** Nome do host do MySQL */

define( 'DB_HOST', 'mysql669.umbler.com' );





/** Charset do banco de dados a ser usado na criação das tabelas. */

define( 'DB_CHARSET', 'utf8mb4' );





/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */

define( 'DB_COLLATE', '' );

//define('WP_TEMP_DIR', '/home/maxviado.com/public/tmp'); // absolute path



/**#@+

 * Chaves únicas de autenticação e salts.

 *

 * Altere cada chave para um frase única!

 * Você pode gerá-las

 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org

 * secret-key service}

 * Você pode alterá-las a qualquer momento para invalidar quaisquer

 * cookies existentes. Isto irá forçar todos os

 * usuários a fazerem login novamente.

 *

 * @since 2.6.0

 */

define( 'AUTH_KEY',         'mO8(m5j?N1wb8mKp3+2N93CIbgf/%&;,N:>I$[LJOnoLsWu#]wY`{1XHWW+_iAZU' );



define( 'SECURE_AUTH_KEY',  '5bhhYG3x39e6_@ c,~3b&-js=<9rcBr8 3q.4#ol[*WS{V%.kO<4{zR.]F}6PY}p' );



define( 'LOGGED_IN_KEY',    ']QPKC~t}}e?VsNH(T%~tCS PR?J%GR>R[<Y$,iwfX<[*KSF#)Bpnxjc#LxCJ3$!~' );



define( 'NONCE_KEY',        '>Kcbm+A=-ue0GIp?(>A=$i?swcO>;}S.oO_#F*)oBXcb&RL]G)Q6|P %3rKavO=9' );



define( 'AUTH_SALT',        '^fM{fYjf/.Z>RRdLwxW;PQ2{_(;XfHWa)7[Jg`jcOh7DZRh4AqfJQbjN3r.>^dVi' );



define( 'SECURE_AUTH_SALT', 'N6])+8h_H[~R-0LOR/&Jz~?Ye8<awgKOX<%amwV md^z4HAU>K<XWRRFRW$m_Lm+' );



define( 'LOGGED_IN_SALT',   'e)^=}wHw&_1+/)34#[VOMq^-IVx:ww^`j.Gqcf0kven8-U8=T_;TD0@5nOF!bUbT' );



define( 'NONCE_SALT',       '5xxvS,lm@+g<z0-@+P47f4ve(c+jz8oFh2B2/T~){~[})V-p{+GWFmy0jHH{V*(j' );





/**#@-*/



/**

 * Prefixo da tabela do banco de dados do WordPress.

 *

 * Você pode ter várias instalações em um único banco de dados se você der

 * um prefixo único para cada um. Somente números, letras e sublinhados!

 */

$table_prefix = 'wp_';





/**

 * Para desenvolvedores: Modo de debug do WordPress.

 *

 * Altere isto para true para ativar a exibição de avisos

 * durante o desenvolvimento. É altamente recomendável que os

 * desenvolvedores de plugins e temas usem o WP_DEBUG

 * em seus ambientes de desenvolvimento.

 *

 * Para informações sobre outras constantes que podem ser utilizadas

 * para depuração, visite o Codex.

 *

 * @link https://wordpress.org/support/article/debugging-in-wordpress/

 */

define( 'WP_DEBUG', false );



/* Isto é tudo, pode parar de editar! :) */

define('WP_TEMP_DIR', dirname(_FILE_). '/wp-content/temp/');

define( 'WP_TEMP_DIR' , ABSPATH . 'wp-content/' );



/** Caminho absoluto para o diretório WordPress. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}



/** Configura as variáveis e arquivos do WordPress. */

require_once ABSPATH . 'wp-settings.php';








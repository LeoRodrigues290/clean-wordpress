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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'clean_wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'I3.1?kO3,h&H4G<%DkRkPhOK;[Foa/p@@_9g*~3O(u9Vzu^-$s7#-$rvwmKCfKTd' );
define( 'SECURE_AUTH_KEY',  'QWE4-A0s:=tK-V?Sq%04j(4whxi{XM$4@fRI?:(--5RBvuj~UtM;5_z]FFqIxDAi' );
define( 'LOGGED_IN_KEY',    'lVU0.Ydp<EJdpECg$~525Y8sbQ<;n%Z&x~DtPzytT=1F0$XzjEgW$pWYdGrTD$=C' );
define( 'NONCE_KEY',        'xr)bD<c{HT G,xNuf|r5h8]ojuO4hFgrP805NDo+?0~o#@B3#d;Ba!xSTgqq!Q}o' );
define( 'AUTH_SALT',        'u}D}wiZ@vtj?oHcKFLnjQDFU_6Yh1r}_@;q4Uf]8d*U?jz;x:;Ly$>c{#j2JZ3Jl' );
define( 'SECURE_AUTH_SALT', '}dQXQ8#YCKu0{d3:2}^|[%w6Nh/(sJecxLrlXh?QZz7BWCbOb!(|ws4O-xCIn([z' );
define( 'LOGGED_IN_SALT',   'u8}/4+*JU9c-Ys}3t4f<v-GFp}l%5omE_TVKX`DP8u`;8h*@#6Y<l[L,|1<AbJp_' );
define( 'NONCE_SALT',       '{GL%@47^Z*vjC>Rh d YfX4Wt ],O)2b7TRx].# .egfchFq!pa]Yf{H)!u!sTCI' );

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';

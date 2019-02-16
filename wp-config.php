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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wpbs4');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'vrO]D#!ho/HCq<2G(w;MO.p5Tt6{+5Xfm}FTi?|N?`N4@xyb{?7+ZS6K_}]i1>=<');
define('SECURE_AUTH_KEY',  '3p6[|%$t}Xg2lGtUL_K_[RcR!7&Uv4J~Jf%rb$346$H=?aft&gZq5 y|yIr?u{H1');
define('LOGGED_IN_KEY',    '^14}7tzSvVU41W`O[.Eb2xWGUE=+dELJ*1*jbpMFx:s3u?lD_@xro.ox8A}W2S$F');
define('NONCE_KEY',        '%XYqcNAy9(K ,57fhHWLaF`l6O(/Q/Ehr`z9Q|V 1SItaLV2sY%)GN]A}mETHJX8');
define('AUTH_SALT',        'ceOXrxYRlis8}ysn}Rf51^6!`LBCq[vo!;kvxFa><xbGMtg{*xP{%DW4HR5(y8q+');
define('SECURE_AUTH_SALT', '%u>0X:WP;_y~mE}h`g<;`RCfi$Vky: lSYw:hD.ngpE}]m[jupMY#&:%Q1N A`{0');
define('LOGGED_IN_SALT',   'yu~_oEMM1I^L>75wht9l&}@hS*WE-tMC`Ld;fqc&P?Uwt9*W!>;wHi~],iMA0F-s');
define('NONCE_SALT',       'G$QF|X@q2oYU{Iat~{D?|b=`AKd/]^^i$<h6HePiR.zGYaD,A.v0oqe@LwW);FOZ');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');

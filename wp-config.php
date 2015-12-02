<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'tra');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'trainning');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'TrainningEAD5000');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0iET6.|->H&h[;e6+<L{t]32)f<_.Y`ZdV<]!;Wd(Ke@9xv<I*`%.b#I/m[vDG&x');
define('SECURE_AUTH_KEY',  '/L#r}cn$>4S4*GBR@vD=EE{QL4g5U-{40q=c&ApH]0z+FA}cPU3N1*_{q|+`l|k ');
define('LOGGED_IN_KEY',    'lZY/=9PXVgrvFwUJiFv.h.i?j]K*[r3x&IA*%RSw]t@gtb6*_:inYePFRgci2V+<');
define('NONCE_KEY',        'n:GSf:#WV98<?{yi-~|t/k^;)LZV$,G!^pfa|HaEm@mZO)Jk)qb|{$A*BBo$Y]jY');
define('AUTH_SALT',        'M<<5Btj]A!>wXBdm-Z_{VZO&|=L+I`_v+IqgY9v[;h-.>b?q4} ?_sl8XNxkkyIG');
define('SECURE_AUTH_SALT', 'BhUx}?}dqv|G@O=S7C?`YJWV xyRo1.4+B|1+L2|CR4*rN!@aF]O=6;LV+zSgb79');
define('LOGGED_IN_SALT',   '-ctlL6I-)ST+y}UOe=:2k#UckofDN;8w42{IdPhQ@Az2be=+X zTqp^~MjxlM7y:');
define('NONCE_SALT',       'NnV5k]5po*@_+_V;d{&vV{0<}kyT]C1YBlAo@J+<De.x|(R`3xRa~#@$j$_ZL+O@');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');

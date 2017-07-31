<?php
# Database Configuration
define( 'WPCACHEHOME', 'E:\work\Limp\Limp_ioptima\backup\20170302\site-archive-ioptima-live\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define( 'DB_NAME', 'wp_ioptima' );
//define( 'DB_USER', 'ioptima' );
define( 'DB_USER', 'root' );
//define( 'DB_PASSWORD', 'ljqyKHy4EX0GOg25' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', 'utf8_unicode_ci' );
$table_prefix = 'volzz_';



# Security Salts, Keys, Etc
define( 'AUTH_KEY', ';2w6Rx-~jVN2nXq&+I37C`aO%h>M{~J@>^#n<5lnnT,9_=]|n)0dq]YPY1Zr[kq;' );
define( 'SECURE_AUTH_KEY', 'T7x:Cv C~Nn=]`GRxhPF:Wms0Ob8uX~g{^Ub5Er{-sHrd9H,B?EHR)bd+:E=Rz/3' );
define( 'LOGGED_IN_KEY', '>`g=A|WaMk%)&J 4Ts^lR1ZAnh57o1U+-@-PPgldcu!&E>,v%RbZwx]~V2dn6=+w' );
define( 'NONCE_KEY', '~yJNH@`cmE-/ao_<-#<E!H+=?B}!M+^)4TV}@?=j5^;r/n*||+hrseWAni1x+F&T' );
define( 'AUTH_SALT', '?R7IT5e*8!jz:Of0)VwNct<_!8psLrdS>X/TzW3m6d~D4nqu."44R1FGVE<_zN6*' );
define( 'SECURE_AUTH_SALT', 'ACbQ{w`UzL`-S`qewgB3ieti)yT=wjA3*k7u*%%V0O?==7C,7(%^?)|XeChlBw:n' );
define( 'LOGGED_IN_SALT', '~}T],T`No2PB$AE}~9+6o,OWMcASY6-+X-Om5S[h_/g`=o!sNwcX3.IG9I<Us;>j' );
define( 'NONCE_SALT', 'Ej8}eun1.uko$GK}C*^N*XaJ%Jso?S_1}E2q ;/FnRUQA[bmNzT5D}OkB;[G~,2w' );



# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'ioptima' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '1bf50ed57fc685f39128b6f5162183a4e38b5640' );

define( 'WPE_FOOTER_HTML', "" );

define( 'WPE_CLUSTER_ID', '10741' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 22 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', false );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'ioptima.co.il', 1 => 'ioptima.wpengine.com', 2 => 'www.ioptima.co.il', );

$wpe_varnish_servers=array ( 0 => 'pod-10741', );

$wpe_special_ips=array ( 0 => '134.213.137.34', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'localhost:11211', ), );
define( 'WPLANG', '' );



# WP Engine Settings
define( 'PWP_DOMAIN_CONFIG', 'www.ioptima.co.il' );





define( 'WPE_CACHE_TYPE', 'standard' );



























/*SSLSTART*/
if ( isset( $_SERVER['HTTP_X_WPE_SSL'] ) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on';
/*SSLEND*/



# Custom Settings












$_wpe_preamble_path = null;



# That's It. Pencils down
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}
require_once( ABSPATH . 'wp-settings.php' );

$_wpe_preamble_path = null; if(false){}

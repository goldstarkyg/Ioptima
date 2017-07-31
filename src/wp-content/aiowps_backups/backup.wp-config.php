<?php
# Database Configuration
define( 'DB_NAME', 'wp_ioptima' );
define( 'DB_USER', 'ioptima' );
define( 'DB_PASSWORD', 'jpB8XvFzdc4H2GTk' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', 'utf8_unicode_ci' );
$table_prefix = 'wp_';



# Security Salts, Keys, Etc
define( 'AUTH_KEY', ';2w6Rx-~jVN2nXq&+I37C`aO%h>M{~J@>^#n<5lnnT,9_=]|n)0dq]YPY1Zr[kq;' );
define( 'SECURE_AUTH_KEY', 'T7x:Cv C~Nn=]`GRxhPF:Wms0Ob8uX~g{^Ub5Er{-sHrd9H,B?EHR)bd+:E=Rz/3' );
define( 'LOGGED_IN_KEY', '>`g=A|WaMk%)&J 4Ts^lR1ZAnh57o1U+-@-PPgldcu!&E>,v%RbZwx]~V2dn6=+w' );
define( 'NONCE_KEY', '~yJNH@`cmE-/ao_<-#<E!H+=?B}!M+^)4TV}@?=j5^;r/n*||+hrseWAni1x+F&T' );
define( 'AUTH_SALT', 'L0%1.!T|VqbIQ.6B(aS:_oPtFc_jz&h.b5-y%2U#O9YID6d;)u#VAkZ`2cqzsX%O' );
define( 'SECURE_AUTH_SALT', '.)wp,!mKYWDPA$bG>/O9Sp{c%+kS&^xy2Eh$W=XphJ:r>vc|MSP+0sQaIggrz7i/' );
define( 'LOGGED_IN_SALT', 'n=+2/s cGoO!LXXk(/+eU!TdH<P-[3Y%wu4()* uI-t5-jhR7[PU!>#b5ll@umJC' );
define( 'NONCE_SALT', 'kv,GnEGvpn5|CB>2s!aD$Lx[YRWtfjdU5i9}x<-|Htt|@L{>y-;a=lyV_;+h-O3Q' );



# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'ioptima' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'PWP_ROOT_DIR', '/nas/wp' );

define( 'WPE_APIKEY', '9f9a52940390a9cefa8306de74a0439892bd8d13' );

define( 'WPE_FOOTER_HTML', "" );

define( 'WPE_CLUSTER_ID', '10191' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 22 );

define( 'WPE_LBMASTER_IP', '162.13.208.28' );

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

$wpe_all_domains=array ( 0 => 'ioptima.wpengine.com', 1 => 'ioptima.co.il', 2 => 'www.ioptima.co.il', );

$wpe_varnish_servers=array ( 0 => 'pod-10191', );

$wpe_special_ips=array ( 0 => '134.213.54.8', );

$wpe_ec_servers=array ( );

$wpe_largefs=array ( );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );
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

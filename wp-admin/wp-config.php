<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mariabl2_bluehost');

/** MySQL database username */
define('DB_USER', 'mariabl2_blue');

/** MySQL database password */
define('DB_PASSWORD', 'i5h1ANwDGr4A');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'cB!>AO*w@LqTck-cy;JfeHUcOmbnr__hZdFL&rpcZV(qj]<%oJlGcv%vNJp}iaZPI?rSbDq-bbjNk_EzsA]NoC@lmSrr{b<!Y_Ov(eVt*$VIV>iU&NK$)|[J{Dj{P!ao');
define('SECURE_AUTH_KEY', '(;rhjZS_LJr!GeXN+-DSRPY}[%@rHEItbBztywCB{NhJLYI]IIhG{Rq-iU!cge]tZA)C@sVP*qRAyC^Tfh_FntKX?)KaW}rctXzV]<|pg(bnF?[GNBW+B+OYj-o}--mh');
define('LOGGED_IN_KEY', 'lkv(U_y{EfwP+ed%gg?=>_+&>guvzExyRP{@U/^wDja}DsY&tJ[HESUd*gS!WFTGH|JP?F(gi$CGavZ-ZJT&Vs-VJklrArY/a)^{ZHuItiFEh>_(GBL]-nZsM&ZlSwH=');
define('NONCE_KEY', 'wldepqf>a|C$UG@_Hopxz}A?$=MgO_W)D_yJ?Fy|xmV-NC$nNY{P$trkrOxRaDRHNJH(ivF|blt+-KrXQ;GaijdAoE*DCbmSQgnhcGS-rIO]JWtJ*{%^+hwWqz_/[Ib=');
define('AUTH_SALT', 'DZd}^T$osnYvLHz;x!]Sy%rVc%Tp]jr++z((PaZmzr[LAqFn/kEd({;eALzW%*_m!gk=V{A&)vVI$<EG^XVOzF@Tu<EO-=^PScYhr/]aqF^E+|Tvq?u{KdTponZ[DO-%');
define('SECURE_AUTH_SALT', '&pcx_s_c@c|-H;q^x&s_+nfo;rV;Y{x@Rk>Zkm_}oK^e&k/fluwZttC@*wU-cX}TO]+aVbE;z!x*?X[E[Qscc)-KPF}!XTJlw!s[wglU[]CA{juVJ>H^SUVCycQkoDXc');
define('LOGGED_IN_SALT', 'TnN|&-+yRMP/?$RK}CNID(zXx[BQS[>nCFn*ud|@JYb_Dua-Wh&PTlxVMP![/T(;O?EGEFp[Pep^q!TPY!Ki|n&lsi<)V)+j(Hqo?&ziFbonm@crxD+V})t|^yG}vgnj');
define('NONCE_SALT', 'd!aRVIK^!*sEhG/w;EBrMP$tq-O{pknfMMYbx|Qtif%<LM$Rr_byclMpB@IeLZnk_Ic@/budD}p;|={q{{MVAI_DX{+YS|tKYx*fD<&WSy=sDUiDLiDQOcIGdn{FnVvD');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_szwg_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

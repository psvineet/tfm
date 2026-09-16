<?php
//Default Configuration
$CONFIG = '{"lang":"en","error_reporting":false,"show_hidden":true,"hide_Cols":false,"upload_password_hash":"","public_upload_enabled":true,"smtp_enabled":false,"smtp_host":"","smtp_port":587,"smtp_secure":"tls","smtp_user":"","smtp_from":"","smtp_to":"","notify_on_failed_login":true,"smtp_pass":""}';
/**
 * H3K ~ Tiny File Manager
 * @author CCP Programmers
 * @github https://github.com/prasathmani/tinyfilemanager
 * @link https://tinyfilemanager.github.io
 */
//TFM version
define('VERSION', '2.6');
//Application Title
define('APP_TITLE', 'Tiny File Manager');
// --- EDIT BELOW CONFIGURATION CAREFULLY ---
// Auth with login/password
// set true/false to enable/disable it
// Is independent from IP white- and blacklisting
$use_auth = true;
// Login user name and password
// Users: array('Username' => 'Password', 'Username2' => 'Password2', ...)
// Generate secure password hash - https://tinyfilemanager.github.io/docs/pwd.html
$auth_users = array(
    'admin' => '$2y$10$/K.hjNr84lLNDt8fTXjoI.DBp6PpeyoJ.mGwrrLuCZfAwfSAGqhOW', //admin@123
);
// Readonly users
// e.g. array('users', 'guest', ...)
$readonly_users = array(
);
// Per-user download restriction for readonly users.
// List usernames here to block their download & direct-link access.
// Users in $readonly_users but NOT listed here can still download.
// e.g. array('guest', 'users')
$readonly_nodownload_users = array(
);
// Global readonly, including when auth is not being used
$global_readonly = false;
// user specific directories
// array('Username' => 'Directory path', 'Username2' => 'Directory path', ...)
$directories_users = array();
// Enable highlight.js (https://highlightjs.org/) on view's page
$use_highlightjs = true;
// highlight.js style
$highlightjs_style = 'vs';
// Enable ace.js (https://ace.c9.io/) on view's page
$edit_files = true;
// Default timezone for date() and time()
// Doc - http://php.net/manual/en/timezones.php
$default_timezone = 'Asia/Kolkata'; // IST (UTC+5:30)
// Root path for file manager
// use absolute path of directory i.e: '/var/www/folder' or $_SERVER['DOCUMENT_ROOT'].'/folder'
//make sure update $root_url in next section
$root_path = $_SERVER['DOCUMENT_ROOT'];
// Root url for links in file manager.Relative to $http_host. Variants: '', 'path/to/subfolder'
// Will not working if $root_path will be outside of server document root
$root_url = '';
// Server hostname. Can set manually if wrong
// $_SERVER['HTTP_HOST'].'/folder'
$http_host = $_SERVER['HTTP_HOST'];
// input encoding for iconv
$iconv_input_encoding = 'UTF-8';
// date() format for file modification date
// Doc - https://www.php.net/manual/en/function.date.php
$datetime_format = 'm/d/Y g:i A';
// Path display mode when viewing file information
// 'full' => show full path
// 'relative' => show path relative to root_path
// 'host' => show path on the host
$path_display_mode = 'relative';
// Allowed file extensions for create and rename files
// e.g. 'txt,html,css,js'
$allowed_file_extensions = '';
// Allowed file extensions for upload files
// e.g. 'gif,png,jpg,html,txt'
$allowed_upload_extensions = '';
// Favicon path. This can be either a full url to an .PNG image, or a path based on the document root.
// full path, e.g http://example.com/favicon.png
// local path, e.g images/icons/favicon.png
$favicon_path = 'https://i.ibb.co/4wNHfFR4/logo.jpg';
// Files and folders to excluded from listing
// e.g. array('myfile.html', 'personal-folder', '*.php', '/path/to/folder', ...)
$exclude_items = array('.htaccess','error.php','favicon.ico','.well-known');
// Online office Docs Viewer
// Available rules are 'google' or false
// Google => View documents using Google Docs Viewer
// false => disable online doc viewer
// Note: for doc/docx/xls/xlsx/ppt/pptx/odt/ods/odp files, Microsoft's
// viewer is tried first server-side and falls back to Google automatically
// if Microsoft can't reach the file (common on free hosts) — no config needed.
$online_viewer = 'Google';
// Sticky Nav bar
// true => enable sticky header
// false => disable sticky header
$sticky_navbar = true;
// Maximum file upload size
// Increase the following values in php.ini to work properly
// memory_limit, upload_max_filesize, post_max_size
$max_upload_size_bytes = 5000000000; // size 5,000,000,000 bytes (~5GB)
// chunk size used for upload
// eg. decrease to 1MB if nginx reports problem 413 entity too large
$upload_chunk_size_bytes = 2000000; // chunk size 2,000,000 bytes (~2MB)
// Possible rules are 'OFF', 'AND' or 'OR'
// OFF => Don't check connection IP, defaults to OFF
// AND => Connection must be on the whitelist, and not on the blacklist
// OR => Connection must be on the whitelist, or not on the blacklist
$ip_ruleset = 'OFF';
// Should users be notified of their block?
$ip_silent = true;
// IP-addresses, both ipv4 and ipv6
$ip_whitelist = array(
    '127.0.0.1', // local ipv4
    '::1' // local ipv6
);
// IP-addresses, both ipv4 and ipv6
$ip_blacklist = array(
    '0.0.0.0', // non-routable meta ipv4
    '::' // non-routable meta ipv6
);
// if User has the external config file, try to use it to override the default config above [config.php]
// sample config - https://tinyfilemanager.github.io/config-sample.txt
$config_file = __DIR__ . '/config.php';
if (is_readable($config_file)) {
    @include($config_file);
}
// External CDN resources that can be used in the HTML (replace for GDPR compliance)
$external = array(
    'css-bootstrap' => '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">',
    'css-dropzone' => '<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.css" rel="stylesheet">',
    'css-font-awesome' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">',
    'css-highlightjs' => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/' . $highlightjs_style . '.min.css">',
    'js-ace' => '<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.32.2/ace.js"></script>',
    'js-bootstrap' => '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>',
    'js-dropzone' => '<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>',
    'js-jquery' => '<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>',
    'js-jquery-datatables' => '<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" crossorigin="anonymous" defer></script>',
    'js-highlightjs' => '<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>',
    'pre-jsdelivr' => '<link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin/><link rel="dns-prefetch" href="https://cdn.jsdelivr.net"/>',
    'pre-cloudflare' => '<link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin/><link rel="dns-prefetch" href="https://cdnjs.cloudflare.com"/>'
);
// --- EDIT BELOW CAREFULLY OR DO NOT EDIT AT ALL ---
// max upload file size
define('MAX_UPLOAD_SIZE', $max_upload_size_bytes);
// upload chunk size
define('UPLOAD_CHUNK_SIZE', $upload_chunk_size_bytes);
// private key and session name to store to the session
if (!defined('FM_SESSION_ID')) {
    define('FM_SESSION_ID', 'filemanager');
}
// Configuration
$cfg = new FM_Config();
// Default language
$lang = isset($cfg->data['lang']) ? $cfg->data['lang'] : 'en';
// Show or hide files and folders that starts with a dot
$show_hidden_files = isset($cfg->data['show_hidden']) ? $cfg->data['show_hidden'] : true;
// PHP error reporting - false = Turns off Errors, true = Turns on Errors
$report_errors = isset($cfg->data['error_reporting']) ? $cfg->data['error_reporting'] : true;
// Hide Permissions and Owner cols in file-listing
$hide_Cols = isset($cfg->data['hide_Cols']) ? $cfg->data['hide_Cols'] : true;
// Theme
$theme = isset($cfg->data['theme']) ? $cfg->data['theme'] : 'light';
define('FM_THEME', $theme);
//available languages
$lang_list = array(
    'en' => 'English'
);
if ($report_errors == true) {
    @ini_set('error_reporting', E_ALL);
    @ini_set('display_errors', 1);
} else {
    @ini_set('error_reporting', E_ALL);
    @ini_set('display_errors', 0);
}
if (defined('FM_EMBED')) {
    $use_auth = false;
    $sticky_navbar = false;
} else {
    @set_time_limit(600);
    date_default_timezone_set($default_timezone);
    ini_set('default_charset', 'UTF-8');
    if (version_compare(PHP_VERSION, '5.6.0', '<') && function_exists('mb_internal_encoding')) {
        mb_internal_encoding('UTF-8');
    }
    if (function_exists('mb_regex_encoding')) {
        mb_regex_encoding('UTF-8');
    }
    session_cache_limiter('nocache'); 
    session_name(FM_SESSION_ID);
    // Harden session cookie: HttpOnly always, Secure when on HTTPS, SameSite to limit CSRF surface
    $__fm_https = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== '' && $_SERVER['HTTPS'] !== 'off')
        || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https');
    // Idle timeout: session stays alive up to this many seconds of inactivity.
    if (!defined('FM_SESSION_IDLE_TIMEOUT')) { 
    define('FM_SESSION_IDLE_TIMEOUT', 10 * 60); // 10 minutes
    }
    // Match PHP's own garbage collector so the session file isn't reaped
    // by the server before our 6h idle window is up.
    @ini_set('session.gc_maxlifetime', FM_SESSION_IDLE_TIMEOUT);
    $__fm_cookie_params = array(
        'lifetime' => FM_SESSION_IDLE_TIMEOUT,
        'path'     => '/',
        'domain'   => '',
        'secure'   => $__fm_https,
        'httponly' => true,
        'samesite' => 'Lax',
    );
    if (PHP_VERSION_ID >= 70300) {
        session_set_cookie_params($__fm_cookie_params);
    } else {
        session_set_cookie_params(FM_SESSION_IDLE_TIMEOUT, '/; samesite=Lax', '', $__fm_https, true);
    }
    function session_error_handling_function($code, $msg, $file, $line) {
        // Permission denied for default session, try to create a new one
        if ($code == 2) {
            session_abort();
            session_id(session_create_id());
            @session_start();
        }
    }
    set_error_handler('session_error_handling_function');
    session_start();
    restore_error_handler();
}
if (empty($_SESSION['token'])) {
    if (function_exists('random_bytes')) {
        $_SESSION['token'] = bin2hex(random_bytes(32));
    } else {
        $_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(32));
    }
}
// --- Security headers (sent on every request) ---
if (!headers_sent()) {
    header('X-Content-Type-Options: nosniff');
    header('X-Frame-Options: SAMEORIGIN');
    header('Referrer-Policy: strict-origin-when-cross-origin');
    header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
    // CSP removed per request — was causing more problems than it solved.
    // header("Content-Security-Policy: ...");
    if (isset($is_https) ? $is_https : (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on')) {
        header('Strict-Transport-Security: max-age=31536000; includeSubDomains');
    }
}
if (empty($auth_users)) {
    $use_auth = false;
}
$is_https = isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) || isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https';
if (isset($_SESSION[FM_SESSION_ID]['logged']) && !empty($directories_users[$_SESSION[FM_SESSION_ID]['logged']])) {
    $wd = fm_clean_path(dirname($_SERVER['PHP_SELF']));
    $root_url = $root_url . $wd . DIRECTORY_SEPARATOR . $directories_users[$_SESSION[FM_SESSION_ID]['logged']];
}
$root_url = fm_clean_path($root_url);
defined('FM_ROOT_URL') || define('FM_ROOT_URL', ($is_https ? 'https' : 'http') . '://' . $http_host . (!empty($root_url) ? '/' . $root_url : ''));
defined('FM_SELF_URL') || define('FM_SELF_URL', ($is_https ? 'https' : 'http') . '://' . $http_host . $_SERVER['PHP_SELF']);
if (isset($_GET['logout'])) {
    if (function_exists('fm_session_kill')) { fm_session_kill(session_id()); }
    // Fully tear down the PHP session (not just the 'logged' flag) so no
    // stale session file or registry entry survives an explicit logout.
    session_unset();
    session_destroy();
    @session_start();
    $_SESSION['token'] = function_exists('random_bytes') ? bin2hex(random_bytes(32)) : bin2hex(openssl_random_pseudo_bytes(32));
    fm_redirect(FM_SELF_URL);
}

if ($ip_ruleset != 'OFF') {
    function getClientIP() {
        // X-Forwarded-For / X-Client-IP are plain request headers — on a
        // direct connection (the common case on shared hosting, with no
        // verifying reverse proxy in front) an attacker can set them to
        // any value and spoof their way past IP allow/deny rules. Only
        // trust the Cloudflare header when it's paired with Cloudflare's
        // own CF-Ray marker, which a request that didn't actually route
        // through Cloudflare won't have. Everything else falls back to
        // REMOTE_ADDR, the actual TCP peer address, which can't be spoofed.
        if (array_key_exists('HTTP_CF_CONNECTING_IP', $_SERVER) && array_key_exists('HTTP_CF_RAY', $_SERVER)) {
            return $_SERVER["HTTP_CF_CONNECTING_IP"];
        } else if (array_key_exists('REMOTE_ADDR', $_SERVER)) {
            return $_SERVER['REMOTE_ADDR'];
        }
        return '';
    }
    $clientIp = getClientIP();
    $proceed = false;
    $whitelisted = in_array($clientIp, $ip_whitelist);
    $blacklisted = in_array($clientIp, $ip_blacklist);
    if ($ip_ruleset == 'AND') {
        if ($whitelisted == true && $blacklisted == false) {
            $proceed = true;
        }
    } else
        if ($ip_ruleset == 'OR') {
        if ($whitelisted == true || $blacklisted == false) {
            $proceed = true;
        }
    }
    if ($proceed == false) {
        trigger_error('User connection denied from: ' . $clientIp, E_USER_WARNING);
        if ($ip_silent == false) {
            fm_set_msg(lng('Access denied. IP restriction applicable'), 'error');
            fm_show_header_login();
            fm_show_message();
        }
        exit();
    }
}
function fm_name_from_passwd($uid)
{
    static $cache = null;
    if ($cache === null) {
        $cache = array();
        if (@is_readable('/etc/passwd')) {
            $lines = @file('/etc/passwd', FILE_IGNORE_NEW_LINES);
            if ($lines) {
                foreach ($lines as $line) {
                    $parts = explode(':', $line);
                    if (count($parts) >= 3) { $cache[(int)$parts[2]] = $parts[0]; }
                }
            }
        }
    }
    return isset($cache[(int)$uid]) ? $cache[(int)$uid] : null;
}
function fm_name_from_group($gid)
{
    static $cache = null;
    if ($cache === null) {
        $cache = array();
        if (@is_readable('/etc/group')) {
            $lines = @file('/etc/group', FILE_IGNORE_NEW_LINES);
            if ($lines) {
                foreach ($lines as $line) {
                    $parts = explode(':', $line);
                    if (count($parts) >= 3) { $cache[(int)$parts[2]] = $parts[0]; }
                }
            }
        }
    }
    return isset($cache[(int)$gid]) ? $cache[(int)$gid] : null;
}
function fm_resolve_owner_group($filepath)
{
    $uid = @fileowner($filepath);
    $gid = @filegroup($filepath);
    $ownerName = null;
    $groupName = null;
    if ($uid !== false) {
        if (function_exists('posix_getpwuid')) {
            $info = @posix_getpwuid($uid);
            if ($info && !empty($info['name'])) { $ownerName = $info['name']; }
        }
        if ($ownerName === null) { $ownerName = fm_name_from_passwd($uid); }
        if ($ownerName === null && function_exists('shell_exec')) {
            $out = @shell_exec('getent passwd ' . (int)$uid . ' 2>/dev/null | cut -d: -f1');
            if ($out !== null && trim($out) !== '') { $ownerName = trim($out); }
        }
        if ($ownerName === null) { $ownerName = (string)$uid; }
    } else {
        $ownerName = '?';
    }
    if ($gid !== false) {
        if (function_exists('posix_getgrgid')) {
            $info = @posix_getgrgid($gid);
            if ($info && !empty($info['name'])) { $groupName = $info['name']; }
        }
        if ($groupName === null) { $groupName = fm_name_from_group($gid); }
        if ($groupName === null && function_exists('shell_exec')) {
            $out = @shell_exec('getent group ' . (int)$gid . ' 2>/dev/null | cut -d: -f1');
            if ($out !== null && trim($out) !== '') { $groupName = trim($out); }
        }
        if ($groupName === null) { $groupName = (string)$gid; }
    } else {
        $groupName = '?';
    }
    return array('owner' => $ownerName, 'group' => $groupName);
}
function fm_http_get_json($url, $timeout = 4)
{
    $err = null;
    if (function_exists('curl_init')) {
        $ch = curl_init($url);
        curl_setopt_array($ch, array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT        => $timeout,
            CURLOPT_CONNECTTIMEOUT => 3,
            CURLOPT_SSL_VERIFYPEER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_USERAGENT      => 'Mozilla/5.0 (compatible; FM-GeoLookup)',
        ));
        $resp = curl_exec($ch);
        if ($resp === false) { $err = 'curl: ' . curl_error($ch); }
        curl_close($ch);
        if ($resp) {
            $data = json_decode($resp, true);
            if ($data !== null) { return array($data, null); }
            $err = 'curl: invalid JSON response';
        }
    } else {
        $err = 'curl extension not available';
    }
    if (function_exists('ini_get') && ini_get('allow_url_fopen')) {
        $ctx  = stream_context_create(array('http' => array(
            'timeout' => $timeout,
            'header'  => "User-Agent: Mozilla/5.0 (compatible; FM-GeoLookup)\r\n",
        )));
        $resp = @file_get_contents($url, false, $ctx);
        if ($resp) {
            $data = json_decode($resp, true);
            if ($data !== null) { return array($data, null); }
            $err = 'file_get_contents: invalid JSON response';
        } elseif ($err === null) {
            $err = 'file_get_contents: request failed (' . (isset($http_response_header[0]) ? $http_response_header[0] : 'no response') . ')';
        }
    } elseif ($err === null) {
        $err = 'allow_url_fopen disabled and curl unavailable';
    }
    return array(null, $err);
}
function fm_ensure_runtime_dir($logDir)
{
    if (!is_dir($logDir)) {
        @mkdir($logDir, 0750, true);
    }
    @chmod($logDir, 0750);
    $htaccess = $logDir . '/.htaccess';
    if (!is_file($htaccess)) {
        $rules = "# Auto-generated — deny all direct web access to this folder\n"
               . "<IfModule mod_authz_core.c>\n"
               . "    Require all denied\n"
               . "</IfModule>\n"
               . "<IfModule !mod_authz_core.c>\n"
               . "    Order allow,deny\n"
               . "    Deny from all\n"
               . "</IfModule>\n";
        @file_put_contents($htaccess, $rules);
    }
    $indexFile = $logDir . '/index.html';
    if (!is_file($indexFile)) {
        @file_put_contents($indexFile, '');
    }
    return $logDir;
}
/**
 * Defense-in-depth for the public upload folder: even though every upload
 * path already checks the extension denylist, this writes an .htaccess
 * that stops the webserver from ever *executing* anything dropped in this
 * folder — so a bypass of the extension check, a misconfigured MIME
 * handler, or a future regression still can't turn into code execution.
 * mod_rewrite/mod_authz rules are standard on Apache, which is what
 * shared hosts like InfinityFree run, so this works without any php.ini
 * access.
 */
function fm_secure_upload_dir($dir)
{
    if (!is_dir($dir)) return;
    $htaccess = $dir . '/.htaccess';
    if (is_file($htaccess)) return;
    $rules = "# Auto-generated — this folder holds user-uploaded files.\n"
           . "# Never execute anything here, whatever the extension.\n"
           . "<IfModule mod_php7.c>\n    php_flag engine off\n</IfModule>\n"
           . "<IfModule mod_php8.c>\n    php_flag engine off\n</IfModule>\n"
           . "<FilesMatch \"\\.(php|php3|php4|php5|php7|phtml|phar|pl|py|cgi|sh|asp|aspx|jsp)$\">\n"
           . "    <IfModule mod_authz_core.c>\n        Require all denied\n    </IfModule>\n"
           . "    <IfModule !mod_authz_core.c>\n        Order allow,deny\n        Deny from all\n    </IfModule>\n"
           . "</FilesMatch>\n"
           . "AddType text/plain .php .php3 .php4 .php5 .php7 .phtml .phar .pl .py .cgi .sh .asp .aspx .jsp\n";
    @file_put_contents($htaccess, $rules);
}
function fm_lookup_geo($ip)
{
    $fallback = array('country' => 'Unknown', 'regionName' => 'Unknown', 'city' => 'Unknown', 'isp' => 'Unknown');
    if (empty($ip)) return $fallback;
    if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)) {
        return array('country' => 'Local/Private', 'regionName' => '-', 'city' => '-', 'isp' => 'Local Network');
    }
    $errors = array();
    list($d, $e) = fm_http_get_json("https://ipwho.is/{$ip}");
    if ($e) { $errors[] = 'ipwho.is: ' . $e; }
    if ($d && !empty($d['success'])) {
        return array(
            'country'    => isset($d['country']) ? $d['country'] : 'Unknown',
            'regionName' => isset($d['region']) ? $d['region'] : 'Unknown',
            'city'       => isset($d['city']) ? $d['city'] : 'Unknown',
            'isp'        => isset($d['connection']['isp']) ? $d['connection']['isp'] : (isset($d['connection']['org']) ? $d['connection']['org'] : 'Unknown'),
        );
    }
    list($d, $e) = fm_http_get_json("https://ipapi.co/{$ip}/json/");
    if ($e) { $errors[] = 'ipapi.co: ' . $e; }
    if ($d && empty($d['error'])) {
        return array(
            'country'    => isset($d['country_name']) ? $d['country_name'] : 'Unknown',
            'regionName' => isset($d['region']) ? $d['region'] : 'Unknown',
            'city'       => isset($d['city']) ? $d['city'] : 'Unknown',
            'isp'        => isset($d['org']) ? $d['org'] : 'Unknown',
        );
    }
    list($d, $e) = fm_http_get_json("http://ip-api.com/json/{$ip}?fields=status,country,regionName,city,isp");
    if ($e) { $errors[] = 'ip-api.com: ' . $e; }
    if ($d && (!isset($d['status']) || $d['status'] !== 'fail')) {
        return $d + $fallback;
    }
    if ($errors) {
        $logDir = __DIR__ . '/.runtime';
        fm_ensure_runtime_dir($logDir);
        @file_put_contents($logDir . '/geo_lookup_errors.log', date('Y-m-d H:i:s') . ' [' . $ip . '] ' . implode(' | ', $errors) . "\n", FILE_APPEND | LOCK_EX);
    }
    return $fallback;
}
// ─── Active session registry — track who's logged in, from where, and allow ────
// terminating any session (self-service for your own, admin for everyone's).
function fm_sessions_path() {
    $dir = __DIR__ . '/.runtime';
    fm_ensure_runtime_dir($dir);
    return $dir . '/sessions.json';
}
function fm_sessions_load() {
    $file = fm_sessions_path();
    if (!is_file($file)) return array();
    $data = @json_decode(@file_get_contents($file), true);
    return is_array($data) ? $data : array();
}
function fm_sessions_save($data) {
    @file_put_contents(fm_sessions_path(), json_encode($data), LOCK_EX);
}
// Sids that were explicitly terminated (self, another device, or an admin) get
// recorded here so a follow-up request from that browser is forced to log out,
// instead of being silently re-registered as if it were a brand-new session.
function fm_killed_sessions_path() {
    $dir = __DIR__ . '/.runtime';
    fm_ensure_runtime_dir($dir);
    return $dir . '/sessions_killed.json';
}
function fm_session_mark_killed($sid) {
    $file = fm_killed_sessions_path();
    $data = is_file($file) ? (@json_decode(@file_get_contents($file), true) ?: array()) : array();
    $data[$sid] = time();
    // Prune anything older than 24h so this file doesn't grow forever.
    $cutoff = time() - 86400;
    foreach ($data as $k => $t) { if ($t < $cutoff) unset($data[$k]); }
    @file_put_contents($file, json_encode($data), LOCK_EX);
}
function fm_session_was_killed($sid) {
    $file = fm_killed_sessions_path();
    if (!is_file($file)) return false;
    $data = @json_decode(@file_get_contents($file), true);
    return is_array($data) && isset($data[$sid]);
}
// Called right after a successful login (after session_regenerate_id).
function fm_session_register($username) {
    $sessions = fm_sessions_load();
    $sid = session_id();
    $sessions[$sid] = array(
        'username'   => $username,
        'ip'         => isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '',
        'user_agent' => isset($_SERVER['HTTP_USER_AGENT']) ? substr($_SERVER['HTTP_USER_AGENT'], 0, 200) : '',
        'login_time' => time(),
        'last_seen'  => time(),
    );
    fm_sessions_save($sessions);
}
// Called on every authenticated request: refresh last_seen, and detect
// whether this session was killed elsewhere (by self or by admin).
function fm_session_touch_and_check($username) {
    $sessions = fm_sessions_load();
    $sid = session_id();
    if (!isset($sessions[$sid])) {
        // Explicitly terminated sessions must stay logged out — never re-register them.
        if (fm_session_was_killed($sid)) {
            return false;
        }
        // Otherwise this just predates the session-registry feature — re-register
        // rather than force a surprise logout on upgrade.
        fm_session_register($username);
        return true;
    }
    if ($sessions[$sid]['username'] !== $username) {
        // Session hijacked/reused for a different user than it was issued to — kill it.
        unset($sessions[$sid]);
        fm_sessions_save($sessions);
        fm_session_mark_killed($sid);
        return false;
    }
    // Idle too long -> drop from the active-sessions list and force logout.
    $idleFor = time() - $sessions[$sid]['last_seen'];
    if ($idleFor > FM_SESSION_IDLE_TIMEOUT) {
        unset($sessions[$sid]);
        fm_sessions_save($sessions);
        fm_session_mark_killed($sid);
        return false;
    }
    $sessions[$sid]['last_seen'] = time();
    fm_sessions_save($sessions);
    return true;
}
// Remove a session from the registry. Does NOT destroy the PHP session file itself —
// the next request from that browser will find itself unregistered and get logged out
// by fm_session_touch_and_check() above, which is checked on every authenticated request.
function fm_session_kill($sid) {
    $sessions = fm_sessions_load();
    if (isset($sessions[$sid])) {
        unset($sessions[$sid]);
        fm_sessions_save($sessions);
        fm_session_mark_killed($sid);
        return true;
    }
    return false;
}
// The raw PHP session id is the same value that unlocks that session's
// cookie — exposing it to client-side JS (even just in a JSON response)
// would let any script on the page, or anyone who captures that response,
// hijack the session directly, defeating the cookie's HttpOnly flag. The
// session-management UI needs *some* stable per-session handle to target
// a "kill" action at, so we hand out a one-way hash instead and resolve
// it back to the real sid only on the server side.
function fm_session_public_handle($sid) {
    return substr(hash('sha256', $sid . '|fm-session-handle'), 0, 32);
}
function fm_session_resolve_handle($handle, $sessions) {
    foreach ($sessions as $sid => $s) {
        if (hash_equals(fm_session_public_handle($sid), (string) $handle)) {
            return $sid;
        }
    }
    return null;
}
// Drop any registry entries idle past the timeout, marking them killed so a
// stray request from that browser is forced to log out rather than revived.
function fm_sessions_prune_expired() {
    $sessions = fm_sessions_load();
    $now = time();
    $changed = false;
    foreach ($sessions as $sid => $s) {
        if ($now - $s['last_seen'] > FM_SESSION_IDLE_TIMEOUT) {
            unset($sessions[$sid]);
            fm_session_mark_killed($sid);
            $changed = true;
        }
    }
    if ($changed) fm_sessions_save($sessions);
    return $sessions;
}
function fm_session_list_for($username) {
    $sessions = fm_sessions_prune_expired();
    $out = array();
    foreach ($sessions as $sid => $s) {
        if ($s['username'] === $username) { $s['sid'] = $sid; $out[] = $s; }
    }
    usort($out, function($a, $b) { return $b['last_seen'] - $a['last_seen']; });
    return $out;
}
function fm_session_list_all() {
    $sessions = fm_sessions_prune_expired();
    $out = array();
    foreach ($sessions as $sid => $s) { $s['sid'] = $sid; $out[] = $s; }
    usort($out, function($a, $b) { return $b['last_seen'] - $a['last_seen']; });
    return $out;
}
// ─── TOTP (RFC 6238) — pure PHP, no external lib ────────────────────────────
function fm_totp_generate_secret($len = 16) {
    $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ234567';
    $secret = '';
    for ($i = 0; $i < $len; $i++) {
        $secret .= $chars[random_int(0, 31)];
    }
    return $secret;
}
function fm_totp_base32_decode($secret) {
    $base32 = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ234567';
    $secret = strtoupper(str_replace(' ', '', $secret));
    $bin = ''; $buffer = 0; $bitsLeft = 0;
    for ($i = 0; $i < strlen($secret); $i++) {
        $val = strpos($base32, $secret[$i]);
        if ($val === false) continue;
        $buffer = ($buffer << 5) | $val;
        $bitsLeft += 5;
        if ($bitsLeft >= 8) { $bitsLeft -= 8; $bin .= chr(($buffer >> $bitsLeft) & 0xFF); }
    }
    return $bin;
}
function fm_totp_code($secret, $offset = 0) {
    $key   = fm_totp_base32_decode($secret);
    $time  = floor(time() / 30) + $offset;
    $msg   = pack('N*', 0) . pack('N*', $time);
    $hash  = hash_hmac('sha1', $msg, $key, true);
    $offset2 = ord($hash[19]) & 0x0F;
    $code  = ((ord($hash[$offset2]) & 0x7F) << 24)
           | ((ord($hash[$offset2+1]) & 0xFF) << 16)
           | ((ord($hash[$offset2+2]) & 0xFF) << 8)
           |  (ord($hash[$offset2+3]) & 0xFF);
    return str_pad($code % 1000000, 6, '0', STR_PAD_LEFT);
}
function fm_totp_verify($secret, $code) {
    $code = preg_replace('/\s+/', '', $code);
    // Allow ±1 window (30s drift)
    foreach ([-1, 0, 1] as $offset) {
        if (hash_equals(fm_totp_code($secret, $offset), $code)) return true;
    }
    return false;
}
function fm_totp_get_secret($username) {
    $file = __DIR__ . '/.runtime/totp.json';
    if (!is_file($file)) return null;
    $data = @json_decode(@file_get_contents($file), true);
    return isset($data[$username]['secret']) ? $data[$username]['secret'] : null;
}
function fm_totp_is_enabled($username) {
    $file = __DIR__ . '/.runtime/totp.json';
    if (!is_file($file)) return false;
    $data = @json_decode(@file_get_contents($file), true);
    return isset($data[$username]['enabled']) && $data[$username]['enabled'] === true;
}
function fm_totp_save($username, $secret, $enabled = false) {
    $logDir = __DIR__ . '/.runtime';
    fm_ensure_runtime_dir($logDir);
    $file = $logDir . '/totp.json';
    $data = is_file($file) ? (@json_decode(@file_get_contents($file), true) ?: []) : [];
    $data[$username] = ['secret' => $secret, 'enabled' => $enabled];
    @file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT), LOCK_EX);
}
function fm_totp_disable($username) {
    $file = __DIR__ . '/.runtime/totp.json';
    if (!is_file($file)) return;
    $data = @json_decode(@file_get_contents($file), true) ?: [];
    unset($data[$username]);
    @file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT), LOCK_EX);
}
function fm_totp_otpauth($secret, $username, $issuer = 'MyFiles') {
    return 'otpauth://totp/' . rawurlencode($issuer . ':' . $username)
         . '?secret=' . $secret . '&issuer=' . rawurlencode($issuer) . '&algorithm=SHA1&digits=6&period=30';
}
// QR via Google Charts API (no server-side lib needed)
function fm_totp_qr_url($otpauth) {
    return 'https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=' . rawurlencode($otpauth);
}
// Renders the TOTP setup/manage card as a standalone HTML fragment, themed with
// the main app's (--ios-*) variables. Used both by the settings-page modal (AJAX
// GET) and re-returned after the enable/disable actions (AJAX POST) so the modal
// always reflects the true current state.
function fm_totp_setup_html($username) {
    $enabled = fm_totp_is_enabled($username);
    $existingSecret = fm_totp_get_secret($username);
    $secret = $existingSecret ?: fm_totp_generate_secret();
    if (!$existingSecret) fm_totp_save($username, $secret, false);
    $otpauth = fm_totp_otpauth($secret, $username, APP_TITLE);
    $qr = fm_totp_qr_url($otpauth);
    ob_start();
    ?>
    <div style="margin-bottom:16px;">
        <span style="font-size:11px;padding:3px 9px;border-radius:9px;font-weight:700;background:<?php echo $enabled ? 'rgba(34,197,94,0.14)' : 'rgba(239,68,68,0.12)'; ?>;color:<?php echo $enabled ? '#16a34a' : '#dc2626'; ?>;">
            <?php echo $enabled ? 'ENABLED' : 'DISABLED'; ?>
        </span>
    </div>
    <?php if (!$enabled): ?>
    <p style="font-size:13px;color:var(--ios-secondary);margin:0 0 16px;line-height:1.6;">
        Scan this QR code with <strong>Google Authenticator</strong>, <strong>Authy</strong>, or any TOTP app, then enter the 6-digit code to activate.
    </p>
    <div style="text-align:center;margin-bottom:16px;">
        <img src="<?php echo fm_enc($qr); ?>" alt="QR Code" width="180" height="180"
             style="border-radius:12px;border:2px solid var(--ios-sep);padding:8px;background:#fff;">
    </div>
    <div style="background:var(--ios-fill);border-radius:10px;padding:10px 14px;margin-bottom:18px;word-break:break-all;">
        <div style="font-size:11px;color:var(--ios-secondary);font-weight:600;margin-bottom:4px;">Manual entry secret:</div>
        <code style="font-size:13px;font-weight:700;color:var(--ios-label);letter-spacing:2px;"><?php echo chunk_split(fm_enc($secret), 4, ' '); ?></code>
    </div>
    <form id="totpEnableForm" autocomplete="off">
        <input type="hidden" name="token" value="<?php echo htmlentities($_SESSION['token']); ?>">
        <input type="hidden" name="fm_totp_setup_verify" value="1">
        <input type="hidden" name="ajax" value="1">
        <div style="margin-bottom:14px;">
            <label style="display:block;font-size:12.5px;font-weight:700;color:var(--ios-label);margin-bottom:8px;">Enter code to activate</label>
            <input type="text" name="fm_otp_setup" inputmode="numeric" pattern="[0-9 ]*" maxlength="7" required
                   autofocus autocomplete="one-time-code" placeholder="000 000"
                   style="width:100%;padding:12px 16px;border-radius:12px;border:1.5px solid var(--ios-sep);background:var(--ios-bg2);color:var(--ios-label);font-size:20px;font-weight:700;letter-spacing:5px;text-align:center;box-sizing:border-box;">
        </div>
        <button type="submit" class="fm-btn fm-btn-primary" style="width:100%;height:42px;justify-content:center;">
            <i class="fa fa-lock"></i> Activate 2FA
        </button>
    </form>
    <?php else: ?>
    <p style="font-size:13px;color:var(--ios-secondary);margin:0 0 20px;line-height:1.6;">
        Two-factor authentication is active on your account. Every login requires your authenticator app.
    </p>
    <form id="totpDisableForm" autocomplete="off" onsubmit="return confirm('Disable 2FA? Your account will be less secure.');">
        <input type="hidden" name="token" value="<?php echo htmlentities($_SESSION['token']); ?>">
        <input type="hidden" name="fm_totp_disable" value="1">
        <input type="hidden" name="ajax" value="1">
        <button type="submit" class="fm-btn" style="width:100%;height:42px;justify-content:center;background:#dc2626;color:#fff;border:none;">
            <i class="fa fa-unlock"></i> Disable 2FA
        </button>
    </form>
    <?php endif;
    return ob_get_clean();
}
// Finish a successful login: rotate the session, register it, log the event,
// and redirect home. Shared by the direct (no-2FA) path, an OTP entered inline
// alongside the password on the main form, and the separate OTP step-2 page —
// so all three register and log a completed login identically.
function fm_complete_login($username, $ip) {
    fm_bf_clear($ip);
    // Prevent session fixation
    session_regenerate_id(true);
    if (function_exists('random_bytes')) {
        $_SESSION['token'] = bin2hex(random_bytes(32));
    } else {
        $_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(32));
    }
    unset($_SESSION['fm_totp_pending']);
    $_SESSION[FM_SESSION_ID]['logged'] = $username;
    fm_session_register($username);
    $logDir  = __DIR__ . '/.runtime';
    fm_ensure_runtime_dir($logDir);
    $details = fm_lookup_geo($ip);
    $country = $details['country'];
    $region  = $details['regionName'];
    $city    = $details['city'];
    $isp     = $details['isp'];
    $device  = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
    $time    = date("Y-m-d H:i:s");
    $seq     = date("YmdHis") . '_' . substr(md5(uniqid('', true)), 0, 6);
    $actLog  = $logDir . '/activity.log';
    $actEntry  = "========================================================\n";
    $actEntry .= "  EVENT     : LOGIN_SUCCESS\n";
    $actEntry .= "  SEQ       : {$seq}\n";
    $actEntry .= "  TIMESTAMP : {$time}\n";
    $actEntry .= "  USER      : {$username}\n";
    $actEntry .= "  IP        : {$ip}\n";
    $actEntry .= "  GEO       : {$city}, {$region}, {$country}\n";
    $actEntry .= "  ISP       : {$isp}\n";
    $actEntry .= "  USER-AGENT: {$device}\n";
    $actEntry .= "  2FA       : " . (fm_totp_is_enabled($username) ? 'TOTP_VERIFIED' : 'DISABLED') . "\n";
    @file_put_contents($actLog, $actEntry, FILE_APPEND | LOCK_EX);
    fm_send_login_notification($username, $ip, $city, $region, $country, $isp, $device, $time);
    fm_set_msg(lng('You are logged in'));
    fm_redirect(FM_SELF_URL);
}

// ─── Brute-force lockout ─────────────────────────────────────────────────────
function fm_bf_key($ip) { return __DIR__ . '/.runtime/bf_' . md5($ip) . '.json'; }
function fm_bf_check($ip) {
    $file = fm_bf_key($ip);
    if (!is_file($file)) return true;  // allowed
    $d = @json_decode(@file_get_contents($file), true);
    if (!$d) return true;
    if (isset($d['locked_until']) && time() < $d['locked_until']) return false; // locked
    return true;
}
function fm_bf_fail($ip) {
    $logDir = __DIR__ . '/.runtime'; fm_ensure_runtime_dir($logDir);
    $file = fm_bf_key($ip);
    $d = is_file($file) ? (@json_decode(@file_get_contents($file), true) ?: []) : [];
    $d['fails'] = (isset($d['fails']) ? $d['fails'] : 0) + 1;
    $d['last_fail'] = time();
    if ($d['fails'] >= 5) { $d['locked_until'] = time() + 900; } // 15 min lockout after 5 fails
    @file_put_contents($file, json_encode($d), LOCK_EX);
}
function fm_bf_clear($ip) { $f = fm_bf_key($ip); if (is_file($f)) @unlink($f); }
function fm_bf_remaining($ip) {
    $file = fm_bf_key($ip);
    if (!is_file($file)) return 0;
    $d = @json_decode(@file_get_contents($file), true);
    if (!$d || !isset($d['locked_until'])) return 0;
    return max(0, $d['locked_until'] - time());
}

// ─── Portal brute-force lockout (separate namespace from login lockout so a
// bad upload-password guess never locks a legitimate admin out of login,
// and vice versa) ────────────────────────────────────────────────────────
function fm_portal_bf_key($ip) { return __DIR__ . '/.runtime/portal_bf_' . md5($ip) . '.json'; }
function fm_portal_bf_check($ip) {
    $file = fm_portal_bf_key($ip);
    if (!is_file($file)) return true;
    $d = @json_decode(@file_get_contents($file), true);
    if (!$d) return true;
    if (isset($d['locked_until']) && time() < $d['locked_until']) return false;
    return true;
}
function fm_portal_bf_fail($ip) {
    $logDir = __DIR__ . '/.runtime'; fm_ensure_runtime_dir($logDir);
    $file = fm_portal_bf_key($ip);
    $d = is_file($file) ? (@json_decode(@file_get_contents($file), true) ?: []) : [];
    $d['fails'] = (isset($d['fails']) ? $d['fails'] : 0) + 1;
    $d['last_fail'] = time();
    if ($d['fails'] >= 5) { $d['locked_until'] = time() + 900; } // 15 min lockout after 5 fails
    @file_put_contents($file, json_encode($d), LOCK_EX);
}
function fm_portal_bf_clear($ip) { $f = fm_portal_bf_key($ip); if (is_file($f)) @unlink($f); }
function fm_portal_bf_remaining($ip) {
    $file = fm_portal_bf_key($ip);
    if (!is_file($file)) return 0;
    $d = @json_decode(@file_get_contents($file), true);
    if (!$d || !isset($d['locked_until'])) return 0;
    return max(0, $d['locked_until'] - time());
}

// Public upload portal must be reachable even when the visitor isn't logged
// in — handle it here, before the auth block below would otherwise redirect
// straight to the login page and swallow this request.
if (isset($_GET['upload_portal'])) {
    $__portal_root = rtrim($root_path, '\\/');
    $__portal_root = str_replace('\\', '/', $__portal_root);
    defined('FM_ROOT_PATH') || define('FM_ROOT_PATH', $__portal_root);
    if (!is_dir(FM_ROOT_PATH . '/upload')) {
        @mkdir(FM_ROOT_PATH . '/upload', 0755, true);
    }
    fm_secure_upload_dir(FM_ROOT_PATH . '/upload');
    fm_public_upload_portal();
    exit;
}

if ($use_auth) {
    if (isset($_SESSION[FM_SESSION_ID]['logged'], $auth_users[$_SESSION[FM_SESSION_ID]['logged']])) {
        // Check this session hasn't been remotely terminated (by self, another device, or an admin)
        if (!fm_session_touch_and_check($_SESSION[FM_SESSION_ID]['logged'])) {
            session_unset();
            session_destroy();
            @session_start();
            $_SESSION['token'] = function_exists('random_bytes') ? bin2hex(random_bytes(32)) : bin2hex(openssl_random_pseudo_bytes(32));
            fm_set_msg('This session was terminated remotely. Please sign in again.', 'error');
            fm_redirect(FM_SELF_URL);
        }
        // session_set_cookie_params() only shapes the cookie at the moment the
        // session id is created — PHP never re-sends the cookie on later
        // requests, so without this the browser cookie carries a *fixed*
        // expiry of login-time + FM_SESSION_IDLE_TIMEOUT and the user gets
        // logged out at that fixed mark regardless of how active they were.
        // Re-issue it here, on every authenticated request, so the timeout is
        // truly idle-based (resets on activity) instead of an absolute timer.
        if (!headers_sent()) {
            setcookie(
                session_name(),
                session_id(),
                array(
                    'expires'  => time() + FM_SESSION_IDLE_TIMEOUT,
                    'path'     => '/',
                    'domain'   => '',
                    'secure'   => $__fm_https,
                    'httponly' => true,
                    'samesite' => 'Lax',
                )
            );
        }
        // TOTP self-service management (setup/activate/disable) — these all require an
        // active session, so they must be handled here rather than as siblings of the
        // "not yet logged in" branches below, or they'd be unreachable once logged in.
        if (isset($_POST['fm_totp_setup_verify'], $_POST['token'], $_POST['fm_otp_setup'])) {
            // Verify and activate TOTP during setup
            $__ajax = isset($_POST['ajax']);
            $__u = $_SESSION[FM_SESSION_ID]['logged'];
            if (verifyToken($_POST['token'])) {
                // Always verify against the secret actually persisted on the server for
                // this user — never trust the client-submitted fm_totp_secret hidden field.
                // A stale/cached form resubmit (browser back button, saved form data, etc.)
                // could otherwise carry an old secret that no longer matches the QR the
                // user is looking at, making a genuinely correct code fail verification.
                $__secret = fm_totp_get_secret($__u);
                if ($__secret && fm_totp_verify($__secret, $_POST['fm_otp_setup'])) {
                    fm_totp_save($__u, $__secret, true);
                    fm_log_activity('totp_enabled', "user={$__u}");
                    $__ttOk = true;
                    $__ttMsg = 'Two-factor authentication enabled successfully!';
                } else {
                    $__ttOk = false;
                    $__ttMsg = 'Invalid code. Make sure your device clock is correct, then try the latest code shown in your app.';
                }
            } else {
                $__ttOk = false;
                $__ttMsg = 'Your session expired while this page was open. Please try again.';
            }
            if ($__ajax) {
                header('Content-Type: application/json');
                echo json_encode(array('ok' => $__ttOk, 'msg' => $__ttMsg, 'enabled' => fm_totp_is_enabled($__u), 'html' => fm_totp_setup_html($__u)));
                exit;
            }
            fm_set_msg($__ttMsg, $__ttOk ? 'ok' : 'error');
            fm_redirect(FM_SELF_URL . '?totp_setup=1');
        } elseif (isset($_POST['fm_totp_disable'], $_POST['token'])) {
            $__ajax = isset($_POST['ajax']);
            $__u = $_SESSION[FM_SESSION_ID]['logged'];
            if (verifyToken($_POST['token'])) {
                fm_totp_disable($__u);
                fm_log_activity('totp_disabled', "user={$__u}");
                $__ttOk = true;
                $__ttMsg = 'Two-factor authentication disabled.';
            } else {
                $__ttOk = false;
                $__ttMsg = 'Your session expired. Please try again.';
            }
            if ($__ajax) {
                header('Content-Type: application/json');
                echo json_encode(array('ok' => $__ttOk, 'msg' => $__ttMsg, 'enabled' => fm_totp_is_enabled($__u), 'html' => fm_totp_setup_html($__u)));
                exit;
            }
            fm_set_msg($__ttMsg, $__ttOk ? 'ok' : 'error');
            fm_redirect(FM_SELF_URL . '?totp_setup=1');
        } elseif (isset($_GET['totp_setup_ajax'])) {
            // Fragment used by the Settings-page modal — same content as the full
            // page below, but themed with the main app's variables and with no
            // surrounding header/footer, for injection into a Bootstrap modal.
            header('Content-Type: text/html; charset=utf-8');
            echo fm_totp_setup_html($_SESSION[FM_SESSION_ID]['logged']);
            exit;
        } elseif (isset($_GET['totp_setup'])) {
            // TOTP setup/management page
            $__u = $_SESSION[FM_SESSION_ID]['logged'];
            $__enabled = fm_totp_is_enabled($__u);
            $__existingSecret = fm_totp_get_secret($__u);
            $__secret = $__existingSecret ?: fm_totp_generate_secret();
            if (!$__existingSecret) fm_totp_save($__u, $__secret, false);
            $__otpauth = fm_totp_otpauth($__secret, $__u, APP_TITLE);
            $__qr = fm_totp_qr_url($__otpauth);
            fm_show_header_login();
            ?>
            <section class="fm-login-section">
            <div style="min-height:100vh;display:flex;align-items:center;justify-content:center;padding:20px;">
            <div style="width:100%;max-width:440px;background:var(--form-bg,#fff);border-radius:20px;padding:32px;box-shadow:0 8px 40px rgba(22,36,64,0.14);border:1px solid var(--input-border,rgba(22,36,64,0.1));">
                <div style="display:flex;align-items:center;gap:10px;margin-bottom:22px;">
                    <a href="<?php echo FM_SELF_URL; ?>" style="color:var(--secondary);text-decoration:none;font-size:13px;"><i class="fa fa-chevron-left"></i> Back</a>
                    <h2 style="font-size:18px;font-weight:700;color:var(--label,#162440);margin:0;flex:1;">Two-Factor Authentication</h2>
                    <span style="font-size:11px;padding:3px 9px;border-radius:9px;font-weight:700;background:<?php echo $__enabled ? 'rgba(34,197,94,0.14)' : 'rgba(239,68,68,0.12)'; ?>;color:<?php echo $__enabled ? '#16a34a' : '#dc2626'; ?>;">
                        <?php echo $__enabled ? 'ENABLED' : 'DISABLED'; ?>
                    </span>
                </div>
                <div class="msg-wrap"><?php fm_show_message(); ?></div>
                <?php if (!$__enabled): ?>
                <p style="font-size:13px;color:var(--secondary,#3A4D6A);margin:0 0 18px;line-height:1.6;">
                    Scan this QR code with <strong>Google Authenticator</strong>, <strong>Authy</strong>, or any TOTP app, then enter the 6-digit code to activate.
                </p>
                <div style="text-align:center;margin-bottom:16px;">
                    <img src="<?php echo fm_enc($__qr); ?>" alt="QR Code" width="180" height="180"
                         style="border-radius:12px;border:2px solid var(--input-border,rgba(22,36,64,0.12));padding:8px;background:#fff;">
                </div>
                <div style="background:var(--tile-fill,rgba(22,36,64,0.04));border-radius:10px;padding:10px 14px;margin-bottom:18px;word-break:break-all;">
                    <div style="font-size:11px;color:var(--secondary,#3A4D6A);font-weight:600;margin-bottom:4px;">Manual entry secret:</div>
                    <code style="font-size:13px;font-weight:700;color:var(--label,#162440);letter-spacing:2px;"><?php echo chunk_split(fm_enc($__secret), 4, ' '); ?></code>
                </div>
                <form method="post" action="<?php echo FM_SELF_URL; ?>?totp_setup=1" autocomplete="off">
                    <input type="hidden" name="token" value="<?php echo htmlentities($_SESSION['token']); ?>">
                    <input type="hidden" name="fm_totp_secret" value="<?php echo fm_enc($__secret); ?>">
                    <input type="hidden" name="fm_totp_setup_verify" value="1">
                    <div style="margin-bottom:14px;">
                        <label style="display:block;font-size:12.5px;font-weight:700;color:var(--label,#162440);margin-bottom:8px;">Enter code to activate</label>
                        <input type="text" name="fm_otp_setup" inputmode="numeric" pattern="[0-9 ]*" maxlength="7" required
                               autofocus autocomplete="one-time-code" placeholder="000 000"
                               style="width:100%;padding:12px 16px;border-radius:12px;border:1.5px solid var(--input-border,rgba(22,36,64,0.18));background:var(--input-bg,#fff);color:var(--label,#162440);font-size:20px;font-weight:700;letter-spacing:5px;text-align:center;box-sizing:border-box;">
                    </div>
                    <button type="submit" style="width:100%;padding:12px;border-radius:12px;border:none;background:#162440;color:#fff;font-size:14px;font-weight:700;cursor:pointer;">
                        <i class="fa fa-lock"></i> Activate 2FA
                    </button>
                </form>
                <?php else: ?>
                <p style="font-size:13px;color:var(--secondary,#3A4D6A);margin:0 0 20px;line-height:1.6;">
                    Two-factor authentication is active on your account. Every login requires your authenticator app.
                </p>
                <form method="post" action="<?php echo FM_SELF_URL; ?>?totp_setup=1" autocomplete="off"
                      onsubmit="return confirm('Disable 2FA? Your account will be less secure.');">
                    <input type="hidden" name="token" value="<?php echo htmlentities($_SESSION['token']); ?>">
                    <input type="hidden" name="fm_totp_disable" value="1">
                    <button type="submit" style="width:100%;padding:12px;border-radius:12px;border:none;background:#dc2626;color:#fff;font-size:14px;font-weight:700;cursor:pointer;">
                        <i class="fa fa-unlock"></i> Disable 2FA
                    </button>
                </form>
                <?php endif; ?>
            </div></div></section>
            <?php
            fm_show_footer_login();
            exit;
        }
    } elseif (isset($_POST['fm_usr'], $_POST['fm_pwd'], $_POST['token'])) {
        sleep(1);
        $__ip = $_SERVER['REMOTE_ADDR'];
        // Brute-force check
        if (!fm_bf_check($__ip)) {
            $__rem = fm_bf_remaining($__ip);
            fm_set_msg('Too many failed attempts. Try again in ' . ceil($__rem/60) . ' min.', 'error');
            fm_redirect(FM_SELF_URL);
        }
        // Step-2 of TOTP login: password was already verified on step 1, and the
        // form re-posts fm_pwd as a placeholder rather than the real password —
        // so this must be detected before the captcha check and the normal
        // password_verify() path below. This submission never carries a real
        // captcha answer (the OTP screen shows no captcha challenge) — the
        // math-captcha was already checked on step 1 and its session value is
        // cleared right after, so re-checking it here would always fail and
        // reject every correct OTP with "Security check failed".
        $__isTotpStep2 = isset($_POST['fm_pwd']) && $_POST['fm_pwd'] === '__totp_step2__'
            && isset($_SESSION['fm_totp_pending']) && isset($_POST['fm_usr'])
            && $_POST['fm_usr'] === $_SESSION['fm_totp_pending'];
        if (!$__isTotpStep2) {
            $__captcha_fresh = isset($_SESSION['captcha_issued']) && (time() - $_SESSION['captcha_issued']) <= 600;
            $captcha_ok = $__captcha_fresh && isset($_POST['fm_captcha']) && isset($_SESSION['captcha_answer']) && intval($_POST['fm_captcha']) === intval($_SESSION['captcha_answer']);
            unset($_SESSION['captcha_answer'], $_SESSION['captcha_a'], $_SESSION['captcha_b'], $_SESSION['captcha_op'], $_SESSION['captcha_issued']);
            if (!$captcha_ok) {
                fm_bf_fail($__ip);
                fm_set_msg('Security check failed. Please try again.', 'error');
                fm_redirect(FM_SELF_URL);
            }
        }
        if ($__isTotpStep2) {
            if (!verifyToken($_POST['token'])) {
                fm_set_msg('Invalid or expired form. Please sign in again.', 'error');
                unset($_SESSION['fm_totp_pending']);
                fm_redirect(FM_SELF_URL);
            }
            $__username = $_POST['fm_usr'];
            $__otp = isset($_POST['fm_otp']) ? trim($_POST['fm_otp']) : '';
            $__secret = fm_totp_get_secret($__username);
            if ($__otp === '' || !$__secret || !fm_totp_verify($__secret, $__otp)) {
                fm_bf_fail($__ip);
                fm_set_msg('Invalid authenticator code. Please try again.', 'error');
                fm_redirect(FM_SELF_URL . '?totp=1');
            }
            fm_complete_login($__username, $__ip);
        } elseif (function_exists('password_verify')) {
            if (isset($auth_users[$_POST['fm_usr']]) && isset($_POST['fm_pwd']) && password_verify($_POST['fm_pwd'], $auth_users[$_POST['fm_usr']]) && verifyToken($_POST['token'])) {
                $__username = $_POST['fm_usr'];
                // TOTP check: if enabled, require OTP before granting session
                if (fm_totp_is_enabled($__username)) {
                    $__otp_inline = isset($_POST['fm_otp']) ? trim($_POST['fm_otp']) : '';
                    if ($__otp_inline !== '') {
                        // Covers the (now unused by the main form) case of an
                        // otp submitted directly — verify right here.
                        $__secret = fm_totp_get_secret($__username);
                        if ($__secret && fm_totp_verify($__secret, $__otp_inline)) {
                            fm_complete_login($__username, $__ip);
                        }
                        fm_bf_fail($__ip);
                        $_SESSION['fm_totp_pending'] = $__username;
                        fm_set_msg('Invalid authenticator code. Please try again.', 'error');
                        fm_redirect(FM_SELF_URL . '?totp=1');
                    }
                    // Password correct, account needs 2FA, no code submitted yet
                    // — redirect to the dedicated step-2 page to collect it.
                    $_SESSION['fm_totp_pending'] = $__username;
                    fm_redirect(FM_SELF_URL . '?totp=1');
                }
                fm_complete_login($__username, $__ip);
            } else {
                unset($_SESSION[FM_SESSION_ID]['logged']);
                fm_bf_fail($_SERVER['REMOTE_ADDR']);
                $logDir  = __DIR__ . '/.runtime';
                fm_ensure_runtime_dir($logDir);
                $ip      = $_SERVER['REMOTE_ADDR'];
                $details = fm_lookup_geo($ip);
                $country = $details['country'];
                $region  = $details['regionName'];
                $city    = $details['city'];
                $isp     = $details['isp'];
                $device  = $_SERVER['HTTP_USER_AGENT'];
                $time    = date("Y-m-d H:i:s");
                $seq     = date("YmdHis") . '_' . substr(md5(uniqid('', true)), 0, 6);
                $actLog2  = $logDir . '/activity.log';
                $actEntry2  = "========================================================\n";
                $actEntry2 .= "  EVENT     : LOGIN_FAILED\n";
                $actEntry2 .= "  SEQ       : {$seq}\n";
                $actEntry2 .= "  TIMESTAMP : {$time}\n";
                $actEntry2 .= "  ATTEMPTED : {$_POST['fm_usr']}\n";
                $actEntry2 .= "  IP        : {$ip}\n";
                $actEntry2 .= "  GEO       : {$city}, {$region}, {$country}\n";
                $actEntry2 .= "  ISP       : {$isp}\n";
                $actEntry2 .= "  USER-AGENT: {$device}\n";
                @file_put_contents($actLog2, $actEntry2, FILE_APPEND | LOCK_EX);
                fm_send_failed_login_notification(isset($_POST['fm_usr']) ? $_POST['fm_usr'] : '', $ip, $city, $region, $country, $isp, $device, $time);
                $__fails_left = max(0, 5 - (@json_decode(@file_get_contents(fm_bf_key($ip)), true)['fails'] ?? 0));
                fm_set_msg(lng('Login failed. Invalid username or password') . ($__fails_left > 0 ? " ({$__fails_left} attempt(s) remaining)" : ''), 'error');
                fm_redirect(FM_SELF_URL);
            }
        } else {
            fm_set_msg(lng('password_hash not supported, Upgrade PHP version'), 'error');
        }
    } elseif (isset($_GET['totp']) && isset($_SESSION['fm_totp_pending'])) {
        // TOTP step-2 page: password already verified, just need OTP
        $__pendingUser = $_SESSION['fm_totp_pending'];
        fm_show_header_login();
        ?>
        <section class="fm-login-section fm-login-section-nostep">
            <div class="login-wrap">
                <div class="login-card">
                    <!-- Left decorative panel (desktop only) — same as step 1 -->
                    <div class="login-deco">
                        <div class="deco-grid"></div>
                        <div class="deco-content">
                            <div class="deco-brand-row">
                                <div class="deco-icon-ring">
                                    <i class="fa fa-shield"></i>
                                </div>
                                <div class="deco-title"><?php echo fm_enc(APP_TITLE) ?></div>
                            </div>
                            <div class="deco-desc">Secure file management at your fingertips. Access, organize and control your files from anywhere.</div>
                            <div class="deco-features">
                                <div class="deco-feat"><i class="fa fa-shield"></i> Secure &amp; Encrypted</div>
                                <div class="deco-feat"><i class="fa fa-bolt"></i> Fast Access</div>
                                <div class="deco-feat"><i class="fa fa-eye"></i> Session Logged</div>
                            </div>
                        </div>
                    </div>
                    <!-- Right form panel — step 2: OTP -->
                    <div class="login-form-panel">
                        <div class="login-mobile-header">
                            <div class="login-mobile-brand-row">
                                <div class="login-mobile-icon">
                                    <i class="fa fa-shield"></i>
                                </div>
                                <div class="login-mobile-title"><?php echo fm_enc(APP_TITLE) ?></div>
                                <button type="button" class="login-mobile-theme-toggle" title="Toggle dark mode" onclick="fmToggleTheme(event)">
                                    <i class="fa fa-moon-o fm-theme-icon"></i>
                                </button>
                            </div>
                        </div>
                        <h2 class="form-heading">Two-Factor Auth</h2>
                        <p class="form-subheading">Enter the 6-digit code from your authenticator app</p>
                        <div class="msg-wrap"><?php fm_show_message(); ?></div>
                        <form action="<?php echo FM_SELF_URL; ?>?totp=1" method="post" autocomplete="off">
                            <input type="hidden" name="token" value="<?php echo htmlentities($_SESSION['token']); ?>">
                            <input type="hidden" name="fm_usr" value="<?php echo fm_enc($__pendingUser); ?>">
                            <input type="hidden" name="fm_pwd" value="__totp_step2__">
                            <div class="fm-field">
                                <label class="fm-label" for="fm_otp">Authenticator Code</label>
                                <div class="fm-input-group">
                                    <i class="fa fa-key fm-input-icon"></i>
                                    <input type="text" name="fm_otp" id="fm_otp" inputmode="numeric" pattern="[0-9 ]*"
                                           maxlength="7" autofocus required autocomplete="one-time-code"
                                           placeholder="000 000" class="fm-input fm-otp-input">
                                </div>
                            </div>
                            <button type="submit" class="btn-signin">
                                <span class="btn-signin-text"><i class="fa fa-check-circle"></i>&nbsp; Verify</span>
                            </button>
                        </form>
                        <div class="login-footer-bar">
                            <a href="<?php echo FM_SELF_URL; ?>" style="color:var(--secondary);text-decoration:none;">← Back to login</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        fm_show_footer_login();
        exit;
    } else {
        unset($_SESSION[FM_SESSION_ID]['logged']);
        // Regenerate on every unauthenticated view (not just when empty) so a
        // captcha can never be reused across multiple submit attempts, and
        // vary the operator/range so the challenge isn't a trivially fixed
        // pattern for automated solvers.
        $__ops = array('+', '-', 'X');
        $__op = $__ops[array_rand($__ops)];
        $a = rand(10, 49);
        $b = rand(1, 9);
        if ($__op === '-') { $b = rand(1, $a - 1); $ans = $a - $b; }
        elseif ($__op === 'X') { $a = rand(2, 9); $b = rand(2, 9); $ans = $a * $b; }
        else { $ans = $a + $b; }
        $_SESSION['captcha_a'] = $a;
        $_SESSION['captcha_b'] = $b;
        $_SESSION['captcha_op'] = $__op;
        $_SESSION['captcha_answer'] = $ans;
        $_SESSION['captcha_issued'] = time();
        fm_show_header_login();
        ?>
        <section class="fm-login-section">
            <!-- Animated background particles -->
            <canvas id="fm-particles" style="position:fixed;inset:0;pointer-events:none;z-index:0;"></canvas>
            <div class="login-wrap">
                <div class="login-card">
                    <!-- Left decorative panel (desktop only) -->
                    <div class="login-deco">
                        <div class="deco-grid"></div>
                        <div class="deco-content">
                            <!-- Logo + Title in ONE row -->
                            <div class="deco-brand-row">
                                <div class="deco-icon-ring">
                                    <i class="fa fa-folder-open"></i>
                                </div>
                                <div class="deco-title"><?php echo fm_enc(APP_TITLE) ?></div>
                            </div>
                            <div class="deco-desc">Secure file management at your fingertips. Access, organize and control your files from anywhere.</div>
                            <div class="deco-features">
                                <div class="deco-feat"><i class="fa fa-shield"></i> Secure &amp; Encrypted</div>
                                <div class="deco-feat"><i class="fa fa-bolt"></i> Fast Access</div>
                                <div class="deco-feat"><i class="fa fa-eye"></i> Session Logged</div>
                            </div>
                        </div>
                    </div>
                    <!-- Right form panel -->
                    <div class="login-form-panel">
                        <!-- Mobile brand row (logo + title in one row, hidden on desktop) -->
                        <div class="login-mobile-header">
                            <div class="login-mobile-brand-row">
                                <div class="login-mobile-icon">
                                    <i class="fa fa-folder-open"></i>
                                </div>
                                <div class="login-mobile-title"><?php echo fm_enc(APP_TITLE) ?></div>
                                <button type="button" class="login-mobile-theme-toggle" title="Toggle dark mode" onclick="fmToggleTheme(event)">
                                    <i class="fa fa-moon-o fm-theme-icon"></i>
                                </button>
                            </div>
                        </div>
                        <h2 class="form-heading">Welcome back</h2>
                        <p class="form-subheading">Sign in to your account to continue</p>
                        <div class="msg-wrap">
                            <?php fm_show_message(); ?>
                        </div>
                        <form action="" method="post" autocomplete="off" id="loginForm" novalidate>
                            <input type="hidden" name="token" value="<?php echo htmlentities($_SESSION['token']); ?>" />
                            <div class="fm-field">
                                <label class="fm-label" for="fm_usr">Username</label>
                                <div class="fm-input-group">
                                    <i class="fa fa-user fm-input-icon"></i>
                                    <input type="text" name="fm_usr" id="fm_usr" placeholder="Enter your username"
                                           autocomplete="username" autocorrect="off" autocapitalize="off"
                                           spellcheck="false" required class="fm-input">
                                </div>
                            </div>
                            <div class="fm-field">
                                <label class="fm-label" for="fm_pwd_input">Password</label>
                                <div class="fm-input-group">
                                    <i class="fa fa-lock fm-input-icon"></i>
                                    <input type="password" name="fm_pwd" id="fm_pwd_input"
                                           placeholder="Enter your password"
                                           autocomplete="current-password" required class="fm-input">
                                    <button type="button" class="fm-eye-btn" id="pwdToggle" tabindex="-1">
                                        <i class="fa fa-eye" id="pwdToggleIcon"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Math Captcha -->
                            <div class="fm-field">
                                <label class="fm-label">Security Check</label>
                                <div class="fm-captcha-wrap">
                                    <div class="fm-captcha-sum">
                                        <span class="captcha-num"><?php echo (int) $_SESSION['captcha_a']; ?></span>
                                        <span class="captcha-op"><?php echo fm_enc($_SESSION['captcha_op']); ?></span>
                                        <span class="captcha-num"><?php echo (int) $_SESSION['captcha_b']; ?></span>
                                        <span class="captcha-op">=</span>
                                        <span class="captcha-q">?</span>
                                    </div>
                                    <div class="fm-input-group" style="flex:1;">
                                        <i class="fa fa-calculator fm-input-icon"></i>
                                        <input type="number" name="fm_captcha" id="fm_captcha"
                                               placeholder="Answer" required class="fm-input"
                                               min="-99" max="999" autocomplete="off">
                                    </div>
                                </div>
                                <div id="captcha-hint" class="fm-captcha-hint" style="display:none;">
                                    <i class="fa fa-times-circle"></i> Incorrect answer. Please try again.
                                </div>
                            </div>
                            <button type="submit" class="btn-signin" id="signinBtn">
                                <span class="btn-signin-text"><i class="fa fa-sign-in"></i>&nbsp; Sign In</span>
                                <span class="btn-signin-loading" style="display:none;"><i class="fa fa-spinner fa-spin"></i>&nbsp; Signing in…</span>
                            </button>
                        </form>
                        <?php if (!empty($cfg->data['public_upload_enabled']) && !empty($cfg->data['upload_password_hash'])): ?>
                        <div style="text-align:center;margin-top:14px;">
                            <a href="?upload_portal=1" style="font-size:12.5px;color:var(--ios-secondary,#6b7280);text-decoration:none;">
                                <i class="fa fa-cloud-upload" style="margin-right:4px;"></i>Just here to upload a file?
                            </a>
                        </div>
                        <?php endif; ?>
                        <div class="login-footer-bar">
                            <span class="fm-footer-credit-login"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
        (function() {
            // Focus username
            var usrInput = document.getElementById('fm_usr');
            if (usrInput) setTimeout(function() { usrInput.focus(); }, 120);
            // Dynamically reveal the authenticator-code field once the typed
            // username is recognized as having 2FA enabled. Purely a UX nicety —
            // the server still enforces 2FA itself either way (falling back to
            // the separate step-2 page if this field never gets shown/filled).
            // 2FA (if enabled for the account) is handled entirely server-side:
            // after a correct password, the server redirects to the ?totp=1
            // step-2 page to collect the code. Nothing to do here.
            // Auto-fade login page messages after 3 seconds
            var loginMsgs = document.querySelectorAll('.message');
            loginMsgs.forEach(function(el) {
                setTimeout(function() {
                    el.style.transition = 'opacity 0.5s ease, max-height 0.4s ease, margin 0.4s ease, padding 0.4s ease';
                    el.style.opacity = '0'; el.style.maxHeight = '0';
                    el.style.margin = '0'; el.style.padding = '0'; el.style.overflow = 'hidden';
                    setTimeout(function() { if (el.parentNode) el.parentNode.removeChild(el); }, 500);
                }, 1500);
            });
            // Password toggle
            var pwdInput = document.getElementById('fm_pwd_input');
            var pwdToggle = document.getElementById('pwdToggle');
            var pwdIcon = document.getElementById('pwdToggleIcon');
            if (pwdToggle && pwdInput) {
                pwdToggle.addEventListener('click', function() {
                    var isText = pwdInput.type === 'text';
                    pwdInput.type = isText ? 'password' : 'text';
                    pwdIcon.className = isText ? 'fa fa-eye' : 'fa fa-eye-slash';
                });
            }
            // Form submit: show loading + client-side captcha hint
            var form = document.getElementById('loginForm');
            if (form) {
                form.addEventListener('submit', function(e) {
                    var captchaInput = document.getElementById('fm_captcha');
                    var captchaHint = document.getElementById('captcha-hint');
                    // Basic empty check (server validates the actual answer)
                    if (!captchaInput || captchaInput.value.trim() === '') {
                        e.preventDefault();
                        if (captchaHint) captchaHint.style.display = 'flex';
                        captchaInput.focus();
                        return;
                    }
                    if (captchaHint) captchaHint.style.display = 'none';
                    var btn = document.getElementById('signinBtn');
                    if (btn) {
                        btn.disabled = true;
                        btn.querySelector('.btn-signin-text').style.display = 'none';
                        btn.querySelector('.btn-signin-loading').style.display = 'inline-flex';
                    }
                });
            }
            // Particle canvas
            var canvas = document.getElementById('fm-particles');
            if (canvas) {
                var ctx = canvas.getContext('2d');
                var W, H, pts = [];
                function resize() {
                    W = canvas.width = window.innerWidth;
                    H = canvas.height = window.innerHeight;
                }
                resize();
                window.addEventListener('resize', resize);
                for (var i = 0; i < 55; i++) {
                    pts.push({
                        x: Math.random() * 1000,
                        y: Math.random() * 1000,
                        vx: (Math.random() - 0.5) * 0.35,
                        vy: (Math.random() - 0.5) * 0.35,
                        r: Math.random() * 1.8 + 0.4
                    });
                }
                function draw() {
                    ctx.clearRect(0, 0, W, H);
                    for (var i = 0; i < pts.length; i++) {
                        var p = pts[i];
                        p.x = ((p.x + p.vx + W) % W);
                        p.y = ((p.y + p.vy + H) % H);
                        ctx.beginPath();
                        ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
                        ctx.fillStyle = 'rgba(201,168,76,0.22)';
                        ctx.fill();
                        for (var j = i + 1; j < pts.length; j++) {
                            var q = pts[j];
                            var dx = p.x - q.x, dy = p.y - q.y;
                            var dist = Math.sqrt(dx*dx + dy*dy);
                            if (dist < 130) {
                                ctx.beginPath();
                                ctx.moveTo(p.x, p.y);
                                ctx.lineTo(q.x, q.y);
                                ctx.strokeStyle = 'rgba(201,168,76,' + (0.22 * (1 - dist/130)) + ')';
                                ctx.lineWidth = 0.7;
                                ctx.stroke();
                            }
                        }
                    }
                    requestAnimationFrame(draw);
                }
                draw();
            }
        })();
        </script>
    <?php
    fm_show_footer_login();
    exit;
}
}
if ($use_auth && isset($_SESSION[FM_SESSION_ID]['logged'])) {
    $root_path = isset($directories_users[$_SESSION[FM_SESSION_ID]['logged']]) ? $directories_users[$_SESSION[FM_SESSION_ID]['logged']] : $root_path;
}
$root_path = rtrim($root_path, '\\/');
$root_path = str_replace('\\', '/', $root_path);
if (!@is_dir($root_path)) {
    echo "<h1>" . lng('Root path') . " \"{$root_path}\" " . lng('not found!') . " </h1>";
    exit;
}
defined('FM_SHOW_HIDDEN') || define('FM_SHOW_HIDDEN', $show_hidden_files);
defined('FM_ROOT_PATH') || define('FM_ROOT_PATH', $root_path);
// Ensure the default "upload" folder exists so uploads always have somewhere to land.
if (!is_dir(FM_ROOT_PATH . '/upload')) {
    @mkdir(FM_ROOT_PATH . '/upload', 0755, true);
}
fm_secure_upload_dir(FM_ROOT_PATH . '/upload');
// --- Public, password-only upload portal (no login/session required) ---
if (isset($_GET['upload_portal'])) {
    fm_public_upload_portal();
    exit;
}
defined('FM_LANG') || define('FM_LANG', $lang);
defined('FM_FILE_EXTENSION') || define('FM_FILE_EXTENSION', $allowed_file_extensions);
defined('FM_UPLOAD_EXTENSION') || define('FM_UPLOAD_EXTENSION', $allowed_upload_extensions);
defined('FM_EXCLUDE_ITEMS') || define('FM_EXCLUDE_ITEMS', (version_compare(PHP_VERSION, '7.0.0', '<') ? serialize($exclude_items) : $exclude_items));
defined('FM_DOC_VIEWER') || define('FM_DOC_VIEWER', $online_viewer);
define('FM_READONLY', $global_readonly || ($use_auth && !empty($readonly_users) && isset($_SESSION[FM_SESSION_ID]['logged']) && in_array($_SESSION[FM_SESSION_ID]['logged'], $readonly_users)));
define('FM_READONLY_NODOWNLOAD', FM_READONLY && $use_auth && isset($_SESSION[FM_SESSION_ID]['logged']) && !empty($readonly_nodownload_users) && in_array($_SESSION[FM_SESSION_ID]['logged'], $readonly_nodownload_users));
define('FM_IS_ADMIN', !$use_auth || (isset($_SESSION[FM_SESSION_ID]['logged']) && !FM_READONLY && !FM_READONLY_NODOWNLOAD));
define('FM_IS_WIN', DIRECTORY_SEPARATOR == '\\');
if (!isset($_GET['dir']) && empty($_FILES) && !isset($_POST['ajax'])) {
    fm_redirect(FM_SELF_URL . '?dir=');
}
$p = isset($_GET['dir']) ? $_GET['dir'] : (isset($_POST['dir']) ? $_POST['dir'] : '');
$p = fm_clean_path($p);
$input = file_get_contents('php://input');
$_POST = (strpos($input, 'ajax') != FALSE && strpos($input, 'save') != FALSE) ? json_decode($input, true) : $_POST;
define('FM_PATH', $p);
define('FM_USE_AUTH', $use_auth);
define('FM_EDIT_FILE', $edit_files);
defined('FM_ICONV_INPUT_ENC') || define('FM_ICONV_INPUT_ENC', $iconv_input_encoding);
defined('FM_USE_HIGHLIGHTJS') || define('FM_USE_HIGHLIGHTJS', $use_highlightjs);
defined('FM_HIGHLIGHTJS_STYLE') || define('FM_HIGHLIGHTJS_STYLE', $highlightjs_style);
defined('FM_DATETIME_FORMAT') || define('FM_DATETIME_FORMAT', $datetime_format);
unset($p, $use_auth, $iconv_input_encoding, $use_highlightjs, $highlightjs_style);
if (FM_IS_ADMIN && isset($_POST['type']) && in_array($_POST['type'], ['listusers','adduser','deleteuser','appsettings'])) {
    header('Content-Type: application/json');
    if ($_POST['type'] === 'listusers') {
        global $auth_users, $readonly_users, $readonly_nodownload_users;
        $list = [];
        foreach ($auth_users as $u => $h) {
            $role = 'admin';
            if (in_array($u, $readonly_nodownload_users)) $role = 'readonly_nodownload';
            elseif (in_array($u, $readonly_users))        $role = 'readonly';
            $list[] = ['username' => $u, 'role' => $role];
        }
        echo json_encode($list);
        exit();
    }
    if ($_POST['type'] === 'adduser') {
        $newU = trim($_POST['new-username'] ?? '');
        $newP = $_POST['new-password'] ?? '';
        $role = $_POST['new-role'] ?? 'admin';
        if (!$newU || !$newP) { echo json_encode(['ok'=>false,'msg'=>'Username and password required']); exit(); }
        if (strlen($newP) < 6) { echo json_encode(['ok'=>false,'msg'=>'Password must be at least 6 characters']); exit(); }
        global $auth_users;
        if (isset($auth_users[$newU])) { echo json_encode(['ok'=>false,'msg'=>'User already exists']); exit(); }
        $file = __FILE__;
        $fsrc = file_get_contents($file);
        if ($fsrc === false) { echo json_encode(['ok'=>false,'msg'=>'Cannot read file']); exit(); }
        $hash = fm_hash_password($newP);
        $needle = '$auth_users = array(';
        $pos = strpos($fsrc, $needle);
        if ($pos !== false) {
            $end   = strpos($fsrc, ');', $pos);
            $inner = rtrim(substr($fsrc, $pos + strlen($needle), $end - $pos - strlen($needle)));
            if ($inner !== '' && substr($inner, -1) !== ',') $inner .= ',';
            $inner .= "\n    '$newU' => '$hash'\n";
            $fsrc = substr($fsrc, 0, $pos + strlen($needle)) . $inner . substr($fsrc, $end);
        }
        if ($role === 'readonly' || $role === 'readonly_nodownload') {
            $n2 = '$readonly_users = array(';
            $p2 = strpos($fsrc, $n2);
            if ($p2 !== false) {
                $e2 = strpos($fsrc, ');', $p2);
                $i2 = rtrim(substr($fsrc, $p2 + strlen($n2), $e2 - $p2 - strlen($n2)));
                if ($i2 !== '' && substr($i2, -1) !== ',') $i2 .= ',';
                $i2 .= "\n    '$newU'\n";
                $fsrc = substr($fsrc, 0, $p2 + strlen($n2)) . $i2 . substr($fsrc, $e2);
            }
        }
        if ($role === 'readonly_nodownload') {
            $n3 = '$readonly_nodownload_users = array(';
            $p3 = strpos($fsrc, $n3);
            if ($p3 !== false) {
                $e3 = strpos($fsrc, ');', $p3);
                $i3 = rtrim(substr($fsrc, $p3 + strlen($n3), $e3 - $p3 - strlen($n3)));
                if ($i3 !== '' && substr($i3, -1) !== ',') $i3 .= ',';
                $i3 .= "\n    '$newU'\n";
                $fsrc = substr($fsrc, 0, $p3 + strlen($n3)) . $i3 . substr($fsrc, $e3);
            }
        }
        if (file_put_contents($file, $fsrc) !== false) {
            fm_log_activity('user_add', "username={$newU}, role={$role}");
            echo json_encode(['ok'=>true, 'msg'=>"User '$newU' added successfully"]);
        } else {
            echo json_encode(['ok'=>false,'msg'=>'Failed to write file — check permissions']);
        }
        exit();
    }
    if ($_POST['type'] === 'deleteuser') {
        $delU     = trim($_POST['del-username'] ?? '');
        global $auth_users;
        $primary  = array_key_first($auth_users);
        if (!$delU)            { echo json_encode(['ok'=>false,'msg'=>'No username provided']); exit(); }
        if ($delU === $primary){ echo json_encode(['ok'=>false,'msg'=>'Cannot delete the primary admin']); exit(); }
        $file = __FILE__;
        $fsrc = file_get_contents($file);
        if ($fsrc === false)   { echo json_encode(['ok'=>false,'msg'=>'Cannot read file']); exit(); }
        $qu   = preg_quote($delU, '/');
        $fsrc = preg_replace("/\n\s*'$qu'\s*=>\s*'[^']+',?/", '', $fsrc);
        $fsrc = preg_replace("/\n\s*'$qu',?/",                  '', $fsrc);
        if (file_put_contents($file, $fsrc) !== false) {
            fm_log_activity('user_delete', "username={$delU}");
            echo json_encode(['ok'=>true, 'msg'=>"User '$delU' deleted"]);
        } else {
            echo json_encode(['ok'=>false,'msg'=>'Failed to write file — check permissions']);
        }
        exit();
    }
    if ($_POST['type'] === 'appsettings') {
        $file = __FILE__;
        $fsrc = file_get_contents($file);
        if ($fsrc === false) { echo json_encode(['ok'=>false,'msg'=>'Cannot read file']); exit(); }
        $changeLog = [];
        if (!empty($_POST['app-title'])) {
            $newTitle = addslashes(trim(strip_tags($_POST['app-title'])));
            if ($newTitle !== APP_TITLE) { $changeLog[] = "app_title -> '{$newTitle}'"; }
            $fsrc = preg_replace("/define\('APP_TITLE',\s*'[^']*'\);/", "define('APP_TITLE', 'Tiny File Manager');", $fsrc);
        }
        $newUser = trim($_POST['app-username'] ?? '');
        $oldUser = trim($_POST['app-username-old'] ?? '');
        $credsChanged = false;
        if ($newUser && $oldUser && $newUser !== $oldUser) {
            $needle = '$auth_users = array(';
            $pos = strpos($fsrc, $needle);
            if ($pos !== false) {
                $end   = strpos($fsrc, ');', $pos);
                $chunk = str_replace("'$oldUser'", "'$newUser'", substr($fsrc, $pos, $end - $pos + 2));
                $fsrc  = substr($fsrc, 0, $pos) . $chunk . substr($fsrc, $end + 2);
            }
            $changeLog[] = "username '{$oldUser}' -> '{$newUser}'";
            $credsChanged = true;
        }
        $newPass     = $_POST['app-password'] ?? '';
        $confirmPass = $_POST['app-password-confirm'] ?? '';
        $targetUser  = $newUser ?: $oldUser;
        if ($newPass && $newPass !== $confirmPass)   { echo json_encode(['ok'=>false,'msg'=>'Passwords do not match']); exit(); }
        if ($newPass && strlen($newPass) < 6)         { echo json_encode(['ok'=>false,'msg'=>'Password must be at least 6 characters']); exit(); }
        if ($newPass && $newPass === $confirmPass) {
            $hash = fm_hash_password($newPass);
            $qu   = preg_quote($targetUser, '/');
            // contains literal '$' + digits (e.g. '$2y$10$...'), which
            $fsrc = preg_replace_callback(
                "/'$qu'\s*=>\s*'[^']+'/",
                function ($m) use ($targetUser, $hash) { return "'$targetUser' => '$hash'"; },
                $fsrc
            );
            $changeLog[] = "password reset for '{$targetUser}'";
            $credsChanged = true;
        }
        if (file_put_contents($file, $fsrc) !== false) {
            if (!empty($changeLog)) {
                fm_log_activity('app_settings_change', implode('; ', $changeLog));
            }
            if ($credsChanged) {
                unset($_SESSION[FM_SESSION_ID]['logged']);
                echo json_encode(['ok'=>true, 'msg'=>'Settings saved. Logging out to apply changes...', 'reauth'=>true]);
            } else {
                echo json_encode(['ok'=>true, 'msg'=>'Settings saved.']);
            }
        } else {
            echo json_encode(['ok'=>false,'msg'=>'Failed to write file — check permissions']);
        }
        exit();
    }
}
// Session management — list/kill sessions. Any logged-in user manages their own;
// an admin (role check inline, since FM_IS_ADMIN==non-readonly-logged-in here) can
// also see and kill everyone's.
if (isset($_SESSION[FM_SESSION_ID]['logged'], $auth_users[$_SESSION[FM_SESSION_ID]['logged']]) && isset($_POST['type'], $_POST['token']) && in_array($_POST['type'], ['list_sessions', 'kill_session', 'kill_all_others'])) {
    header('Content-Type: application/json');
    if (!verifyToken($_POST['token'])) { echo json_encode(['ok' => false, 'msg' => 'Invalid token']); exit(); }
    $__me = $_SESSION[FM_SESSION_ID]['logged'];
    $__mySid = session_id();
    if ($_POST['type'] === 'list_sessions') {
        $scope = (FM_IS_ADMIN && isset($_POST['scope']) && $_POST['scope'] === 'all') ? 'all' : 'own';
        $rows = $scope === 'all' ? fm_session_list_all() : fm_session_list_for($__me);
        $out = array();
        foreach ($rows as $s) {
            $out[] = array(
                'sid'        => substr($s['sid'], 0, 8) . '…', // short display form only
                'handle'     => fm_session_public_handle($s['sid']), // opaque — never the real session id
                'username'   => $s['username'],
                'ip'         => $s['ip'],
                'user_agent' => $s['user_agent'],
                'login_time' => date('Y-m-d H:i:s', $s['login_time']),
                'last_seen'  => date('Y-m-d H:i:s', $s['last_seen']),
                'is_current' => $s['sid'] === $__mySid,
            );
        }
        echo json_encode(['ok' => true, 'sessions' => $out]);
        exit();
    }
    if ($_POST['type'] === 'kill_session') {
        $targetHandle = isset($_POST['sid']) ? (string)$_POST['sid'] : '';
        if ($targetHandle === '') { echo json_encode(['ok' => false, 'msg' => 'No session specified']); exit(); }
        // Ownership check: non-admins may only kill their OWN sessions.
        $searchSessions = FM_IS_ADMIN ? fm_session_list_all() : fm_session_list_for($__me);
        $searchMap = array();
        foreach ($searchSessions as $s) { $searchMap[$s['sid']] = $s; }
        $targetSid = fm_session_resolve_handle($targetHandle, $searchMap);
        if ($targetSid === null) {
            echo json_encode(['ok' => false, 'msg' => 'Not allowed']);
            exit();
        }
        if (fm_session_kill($targetSid)) {
            fm_log_activity('session_kill', "target_sid=" . substr($targetSid, 0, 8) . '… by=' . $__me);
            $wasSelf = $targetSid === $__mySid;
            echo json_encode(['ok' => true, 'msg' => $wasSelf ? 'You have been signed out.' : 'Session terminated.', 'was_self' => $wasSelf]);
        } else {
            echo json_encode(['ok' => false, 'msg' => 'Session not found — it may have already been terminated or expired.']);
        }
        exit();
    }
    if ($_POST['type'] === 'kill_all_others') {
        // Bulk sign-out: terminate every OTHER session belonging to the caller
        // (or, for an admin explicitly requesting scope=all, every other session
        // system-wide). The caller's own current session is always spared.
        $scopeAll = FM_IS_ADMIN && isset($_POST['scope']) && $_POST['scope'] === 'all';
        $targets = $scopeAll ? fm_session_list_all() : fm_session_list_for($__me);
        $killed = 0;
        foreach ($targets as $s) {
            if ($s['sid'] === $__mySid) continue; // never kill the session making this request
            if (fm_session_kill($s['sid'])) $killed++;
        }
        fm_log_activity('session_kill_all_others', ($scopeAll ? 'scope=all' : 'scope=own') . " count={$killed} by={$__me}");
        echo json_encode([
            'ok'  => true,
            'msg' => $killed > 0
                ? ($killed === 1 ? 'Signed out 1 other session.' : "Signed out {$killed} other sessions.")
                : 'No other sessions to sign out.',
            'count' => $killed,
        ]);
        exit();
    }
}
if ((isset($_SESSION[FM_SESSION_ID]['logged'], $auth_users[$_SESSION[FM_SESSION_ID]['logged']]) || !FM_USE_AUTH) && isset($_POST['ajax'], $_POST['token']) && !FM_READONLY) {
    if (!verifyToken($_POST['token'])) {
        header('HTTP/1.0 401 Unauthorized');
        die("Invalid Token.");
    }
    if (isset($_POST['type']) && $_POST['type'] == "notify_settings" && FM_IS_ADMIN) {
        header('Content-Type: application/json');
        global $cfg;
        $act = isset($_POST['notify_action']) ? $_POST['notify_action'] : '';
        if ($act === 'save') {
            $__smtpHost = isset($_POST['smtp_host']) ? trim($_POST['smtp_host']) : '';
            // Catch the single most common misconfiguration: pasting a full
            // email address (or a URL) into the host field instead of the
            // mail server's hostname, e.g. smtp.gmail.com. Left uncaught,
            // this only surfaces later as a cryptic DNS error when sending.
            if ($__smtpHost !== '' && (strpos($__smtpHost, '@') !== false || preg_match('#^[a-z]+://#i', $__smtpHost))) {
                echo json_encode(array('success' => false, 'error' => 'SMTP host looks like an email address or URL, not a server hostname. Use the mail server\'s address, e.g. smtp.gmail.com — not your email or a link.'));
                exit();
            }
            $cfg->data['smtp_enabled']      = isset($_POST['smtp_enabled']) && $_POST['smtp_enabled'] === 'true';
            $cfg->data['smtp_host']         = $__smtpHost;
            $cfg->data['smtp_port']         = isset($_POST['smtp_port']) ? (int) $_POST['smtp_port'] : 587;
            $cfg->data['smtp_secure']       = in_array(isset($_POST['smtp_secure']) ? $_POST['smtp_secure'] : '', array('tls', 'ssl', '')) ? $_POST['smtp_secure'] : 'tls';
            $cfg->data['smtp_user']         = isset($_POST['smtp_user']) ? trim($_POST['smtp_user']) : '';
            if (isset($_POST['smtp_pass']) && $_POST['smtp_pass'] !== '') $cfg->data['smtp_pass'] = $_POST['smtp_pass'];
            $cfg->data['smtp_from']         = isset($_POST['smtp_from']) ? trim($_POST['smtp_from']) : '';
            $cfg->data['smtp_to']           = isset($_POST['smtp_to']) ? trim($_POST['smtp_to']) : '';
            $cfg->data['notify_on_failed_login'] = isset($_POST['notify_on_failed_login']) && $_POST['notify_on_failed_login'] === 'true';
            $cfg->save();
            fm_activity_log('NOTIFY_SETTINGS_UPDATED', 'SMTP: ' . ($cfg->data['smtp_enabled'] ? 'on' : 'off'));
            echo json_encode(array('success' => true));
            exit();
        }
        if ($act === 'test') {
            $channel = isset($_POST['channel']) ? $_POST['channel'] : '';
            if ($channel === 'smtp') {
                $__testHtml = fm_build_themed_email(
                    'Test notification',
                    'Test',
                    'gold',
                    '&#128231;',
                    array(
                        'Website' => defined('FM_ROOT_URL') ? FM_ROOT_URL : '',
                        'Time'    => date('m/d/Y g:i A'),
                    ),
                    'This is a test email from ' . APP_TITLE . '. If you got this, SMTP is working correctly.'
                );
                $r = fm_smtp_send(
                    isset($cfg->data['smtp_host']) ? $cfg->data['smtp_host'] : '',
                    isset($cfg->data['smtp_port']) ? $cfg->data['smtp_port'] : 587,
                    isset($cfg->data['smtp_secure']) ? $cfg->data['smtp_secure'] : 'tls',
                    isset($cfg->data['smtp_user']) ? $cfg->data['smtp_user'] : '',
                    isset($cfg->data['smtp_pass']) ? $cfg->data['smtp_pass'] : '',
                    isset($cfg->data['smtp_from']) && $cfg->data['smtp_from'] !== '' ? $cfg->data['smtp_from'] : (isset($cfg->data['smtp_to']) ? $cfg->data['smtp_to'] : ''),
                    isset($cfg->data['smtp_to']) ? $cfg->data['smtp_to'] : '',
                    'Test notification',
                    $__testHtml,
                    true
                );
            } else {
                $r = array('success' => false, 'error' => 'Unknown channel');
            }
            echo json_encode(array('success' => $r['success'], 'error' => $r['error']));
            exit();
        }
        echo json_encode(array('success' => false, 'error' => 'Unknown action'));
        exit();
    }
    if (isset($_POST['type']) && $_POST['type'] == "upload_password_settings" && FM_IS_ADMIN) {
        header('Content-Type: application/json');
        global $cfg;
        $act = isset($_POST['upload_password_action']) ? $_POST['upload_password_action'] : '';
        if ($act === 'set_password') {
            $pw = isset($_POST['password']) ? $_POST['password'] : '';
            if ($pw === '') {
                $cfg->data['upload_password_hash'] = '';
            } else {
                $cfg->data['upload_password_hash'] = password_hash($pw, PASSWORD_DEFAULT);
            }
            $cfg->save();
            fm_activity_log('UPLOAD_PASSWORD_UPDATED', $pw === '' ? 'Password removed' : 'Password set');
            echo json_encode(array('success' => true, 'has_password' => $pw !== ''));
            exit();
        }
        if ($act === 'toggle_public') {
            $enable = isset($_POST['enabled']) && $_POST['enabled'] === 'true';
            if ($enable && empty($cfg->data['upload_password_hash'])) {
                echo json_encode(array('success' => false, 'error' => 'Set an upload password first.'));
                exit();
            }
            $cfg->data['public_upload_enabled'] = $enable;
            $cfg->save();
            fm_activity_log('PUBLIC_UPLOAD_TOGGLED', $enable ? 'Enabled' : 'Disabled');
            echo json_encode(array('success' => true, 'enabled' => $enable));
            exit();
        }
        echo json_encode(['success' => false, 'error' => 'Unknown action']);
        exit();
    }
    if (isset($_POST['type']) && $_POST['type'] == "listdirs") {
        header('Content-Type: application/json');
        $reqPath = isset($_POST['path']) ? fm_clean_path($_POST['path']) : '';
        $scanPath = FM_ROOT_PATH . ($reqPath !== '' ? '/' . $reqPath : '');
        $dirs = [];
        $error = null;
        if (!is_dir($scanPath)) {
            // Path resolved to something that no longer exists (deleted, renamed,
            // or a stale client-side path) — say so instead of reporting empty.
            $error = 'not_found';
        } elseif (!is_readable($scanPath)) {
            $error = 'no_access';
        } else {
            $items = scandir($scanPath);
            if ($items === false) {
                // scandir failed even though is_dir/is_readable passed (race
                // condition, deleted between checks, filesystem hiccup, etc.)
                $error = 'read_failed';
            } else {
                foreach ($items as $item) {
                    if ($item === '.' || $item === '..') continue;
                    $full = $scanPath . '/' . $item;
                    if (!is_dir($full)) continue;
                    // use the same exclusion logic as the main directory listing,
                    // instead of a separate ad-hoc reimplementation, so a folder
                    // hidden here is never one that's actually visible elsewhere
                    if (!fm_is_exclude_items($item, $full)) continue;
                    if (!FM_SHOW_HIDDEN && $item[0] === '.') continue;
                    $rel = ($reqPath !== '' ? $reqPath . '/' : '') . $item;
                    $dirs[] = ['name' => $item, 'path' => $rel];
                }
                usort($dirs, function ($a, $b) { return strnatcasecmp($a['name'], $b['name']); });
            }
        }
        echo json_encode(['dirs' => $dirs, 'current' => $reqPath, 'error' => $error]);
        exit();
    }
    if (isset($_POST['type']) && $_POST['type'] == "search") {
        $dir = $_POST['path'] == "." ? '' : $_POST['path'];
        $response = scan(fm_clean_path($dir), $_POST['content']);
        echo json_encode($response);
        exit();
    }
    if (isset($_POST['type']) && $_POST['type'] == "save") {
        $path = FM_ROOT_PATH;
        if (FM_PATH != '') {
            $path .= '/' . FM_PATH;
        }
        if (!is_dir($path)) {
            fm_redirect(FM_SELF_URL . '?dir=');
        }
        $file = $_GET['edit'];
        $file = fm_clean_path($file);
        $file = str_replace('/', '', $file);
        if ($file == '' || !is_file($path . '/' . $file)) {
            fm_set_msg(lng('File not found'), 'error');
            $FM_PATH = FM_PATH;
            fm_redirect(FM_SELF_URL . '?dir=' . urlencode($FM_PATH));
        }
        header('X-XSS-Protection:0');
        $file_path = $path . '/' . $file;
        $writedata = $_POST['content'];
        $fd = fopen($file_path, "w");
        $write_results = @fwrite($fd, $writedata);
        fclose($fd);
        if ($write_results === false) {
            header("HTTP/1.1 500 Internal Server Error");
            die("Could Not Write File! - Check Permissions / Ownership");
        }
        fm_activity_log('MODIFIED', 'File: ' . FM_PATH . '/' . $file . ' | Size: ' . strlen($writedata) . ' bytes');
        die(true);
    }
    if (isset($_POST['type']) && $_POST['type'] == "backup" && !empty($_POST['file'])) {
        $fileName = fm_clean_path($_POST['file']);
        $fullPath = FM_ROOT_PATH . '/';
        if (!empty($_POST['path'])) {
            $relativeDirPath = fm_clean_path($_POST['path']);
            $fullPath .= "{$relativeDirPath}/";
        }
        $date = date("dMy-His");
        $newFileName = "{$fileName}-{$date}.bak";
        $fullyQualifiedFileName = $fullPath . $fileName;
        try {
            if (!file_exists($fullyQualifiedFileName)) {
                throw new Exception("File {$fileName} not found");
            }
            if (copy($fullyQualifiedFileName, $fullPath . $newFileName)) {
                echo "Backup {$newFileName} created";
            } else {
                throw new Exception("Could not copy file {$fileName}");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    if (isset($_POST['type']) && $_POST['type'] == "settings") {
        global $cfg, $lang, $report_errors, $show_hidden_files, $lang_list, $hide_Cols, $theme;
        $newLng = $_POST['js-language'];
        fm_get_translations([]);
        if (!array_key_exists($newLng, $lang_list)) {
            $newLng = 'en';
        }
        $erp = isset($_POST['js-error-report']) && $_POST['js-error-report'] == "true" ? true : false;
        $shf = isset($_POST['js-show-hidden']) && $_POST['js-show-hidden'] == "true" ? true : false;
        $hco = isset($_POST['js-hide-cols']) && $_POST['js-hide-cols'] == "true" ? true : false;
        $te3 = $_POST['js-theme-3'];
        $settingsChangeLog = [];
        if ($cfg->data['lang'] != $newLng) {
            $settingsChangeLog[] = "lang '{$cfg->data['lang']}' -> '{$newLng}'";
            $cfg->data['lang'] = $newLng;
            $lang = $newLng;
        }
        if ($cfg->data['error_reporting'] != $erp) {
            $settingsChangeLog[] = "error_reporting -> " . ($erp ? 'on' : 'off');
            $cfg->data['error_reporting'] = $erp;
            $report_errors = $erp;
        }
        if ($cfg->data['show_hidden'] != $shf) {
            $settingsChangeLog[] = "show_hidden -> " . ($shf ? 'on' : 'off');
            $cfg->data['show_hidden'] = $shf;
            $show_hidden_files = $shf;
        }
        if ($cfg->data['hide_Cols'] != $hco) {
            $settingsChangeLog[] = "hide_Cols -> " . ($hco ? 'on' : 'off');
            $cfg->data['hide_Cols'] = $hco;
            $hide_Cols = $hco;
        }
        if ($cfg->data['theme'] != $te3) {
            $settingsChangeLog[] = "theme '{$cfg->data['theme']}' -> '{$te3}'";
            $cfg->data['theme'] = $te3;
            $theme = $te3;
        }
        $cfg->save();
        if (!empty($settingsChangeLog)) {
            fm_log_activity('general_settings_change', implode('; ', $settingsChangeLog));
        }
        echo true;
    }
    if (isset($_POST['type']) && $_POST['type'] == "pwdhash") {
        $res = isset($_POST['inputPassword2']) && !empty($_POST['inputPassword2']) ? fm_hash_password($_POST['inputPassword2']) : '';
        echo $res;
    }
    if (isset($_POST['type']) && $_POST['type'] == "hashes" && !empty($_POST['file'])) {
        $hfile = fm_clean_path($_POST['file']);
        $hfile = str_replace('/', '', $hfile);
        $hpath = FM_ROOT_PATH;
        if (FM_PATH != '') { $hpath .= '/' . FM_PATH; }
        $hpath .= '/' . $hfile;
        if (!is_file($hpath)) { echo json_encode(['error' => 'File not found']); exit(); }
        echo json_encode([
            'md5'    => md5_file($hpath),
            'sha1'   => sha1_file($hpath),
            'sha256' => hash_file('sha256', $hpath),
            'sha512' => hash_file('sha512', $hpath),
        ]);
        exit();
    }
    if (isset($_POST['type']) && $_POST['type'] == "metadata" && !empty($_POST['file'])) {
        $mfile = fm_clean_path($_POST['file']);
        $mfile = str_replace('/', '', $mfile);
        $mpath = FM_ROOT_PATH;
        if (FM_PATH != '') { $mpath .= '/' . FM_PATH; }
        $mpath .= '/' . $mfile;
        if (!is_file($mpath)) { echo json_encode(['error' => 'File not found']); exit(); }
        $stat = stat($mpath);
        $mime = fm_get_mime_type($mpath);
        $ext  = strtolower(pathinfo($mpath, PATHINFO_EXTENSION));
        $perms_octal = substr(sprintf('%o', fileperms($mpath)), -4);
        $perms_sym   = '';
        $p = fileperms($mpath);
        $perms_sym .= (($p & 0x0100) ? 'r' : '-');
        $perms_sym .= (($p & 0x0080) ? 'w' : '-');
        $perms_sym .= (($p & 0x0040) ? (($p & 0x0800) ? 's' : 'x') : (($p & 0x0800) ? 'S' : '-'));
        $perms_sym .= (($p & 0x0020) ? 'r' : '-');
        $perms_sym .= (($p & 0x0010) ? 'w' : '-');
        $perms_sym .= (($p & 0x0008) ? (($p & 0x0400) ? 's' : 'x') : (($p & 0x0400) ? 'S' : '-'));
        $perms_sym .= (($p & 0x0004) ? 'r' : '-');
        $perms_sym .= (($p & 0x0002) ? 'w' : '-');
        $perms_sym .= (($p & 0x0001) ? (($p & 0x0200) ? 't' : 'x') : (($p & 0x0200) ? 'T' : '-'));
        $special_flags = [];
        if ($p & 0x0800) $special_flags[] = 'SUID';
        if ($p & 0x0400) $special_flags[] = 'SGID';
        if ($p & 0x0200) $special_flags[] = 'Sticky';
        $world_writable = ($p & 0x0002) ? 'Yes ⚠' : 'No';
        $world_readable = ($p & 0x0004) ? 'Yes' : 'No';
        $world_exec     = ($p & 0x0001) ? 'Yes ⚠' : 'No';
        $entropy = '—';
        $fp = @fopen($mpath, 'rb');
        if ($fp) {
            $sample = fread($fp, 8192);
            fclose($fp);
            if (strlen($sample) > 0) {
                $freq = array_count_values(str_split($sample));
                $len  = strlen($sample);
                $ent  = 0.0;
                foreach ($freq as $c) { $p2 = $c / $len; $ent -= $p2 * log($p2, 2); }
                $entropy = round($ent, 3) . ' bits/byte';
                if ($ent > 7.5) $entropy .= '  ⚠ (likely encrypted/compressed)';
            }
        }
        $magic = '—';
        $fh = @fopen($mpath, 'rb');
        if ($fh) {
            $bytes = @fread($fh, 8);
            fclose($fh);
            if ($bytes !== false && strlen($bytes) > 0) {
                $hex = strtoupper(bin2hex($bytes));
                $magic = implode(' ', str_split($hex, 2));
                $sigs = [
                    '504B0304' => 'ZIP / Office / APK',
                    '504B0506' => 'ZIP (empty)',
                    '25504446' => 'PDF',
                    'FFD8FF'   => 'JPEG',
                    '89504E47' => 'PNG',
                    '47494638' => 'GIF',
                    '377ABCAF' => '7-Zip',
                    '1F8B'     => 'GZIP',
                    '425A68'   => 'BZip2',
                    '7F454C46' => 'ELF Executable',
                    '4D5A'     => 'PE/Windows Executable',
                    'CAFEBABE' => 'Java Class / Mach-O',
                    '3C3F706870' => 'PHP Script',
                    '23212F'   => 'Shell Script',
                    'EFBBBF'   => 'UTF-8 BOM',
                    'FFFE'     => 'UTF-16 LE BOM',
                    'FEFF'     => 'UTF-16 BE BOM',
                ];
                foreach ($sigs as $sig => $label) {
                    if (str_starts_with(str_replace(' ', '', $magic), $sig)) {
                        $magic .= '  → ' . $label;
                        break;
                    }
                }
            }
        }
        $crc32 = strtoupper(hash_file('crc32b', $mpath));
        $__og  = fm_resolve_owner_group($mpath);
        $meta = [
            'filename'      => basename($mpath),
            'extension'     => strtoupper($ext) ?: '—',
            'mime_type'     => $mime,
            'magic_bytes'   => $magic,
            'size_human'    => fm_get_filesize($stat['size']),
            'size_bytes'    => number_format($stat['size']) . ' B',
            'perms_octal'   => $perms_octal,
            'perms_symbolic'=> $perms_sym,
            'special_flags' => $special_flags ? implode(', ', $special_flags) . ' ⚠' : 'None',
            'world_readable'=> $world_readable,
            'world_writable'=> $world_writable,
            'world_exec'    => $world_exec,
            'is_symlink'    => is_link($mpath) ? 'Yes' : 'No',
            'owner_name'    => $__og['owner'],
            'owner_uid'     => $stat['uid'],
            'group_name'    => $__og['group'],
            'group_gid'     => $stat['gid'],
            'crc32'         => $crc32,
            'entropy'       => $entropy,
            'modified'      => date('D, d M Y  H:i:s T', $stat['mtime']) . '  (Unix: ' . $stat['mtime'] . ')',
            'meta_changed'  => date('D, d M Y  H:i:s T', $stat['ctime']) . '  (Unix: ' . $stat['ctime'] . ')',
            'inode'         => $stat['ino'],
            'hard_links'    => $stat['nlink'],
            'device'        => $stat['dev'],
        ];
        if (in_array($ext, ['jpg','jpeg','png','gif','bmp','webp','avif','svg'])) {
            $dims = @getimagesize($mpath);
            if ($dims) {
                $meta['image_width']  = $dims[0] . 'px';
                $meta['image_height'] = $dims[1] . 'px';
                $meta['image_type']   = image_type_to_mime_type($dims[2]);
            }
            if (in_array($ext, ['jpg','jpeg']) && function_exists('exif_read_data')) {
                $exif = @exif_read_data($mpath, null, false);
                if ($exif) {
                    $keep = ['Make','Model','DateTime','ExposureTime','FNumber','ISOSpeedRatings','FocalLength','Flash','GPSLatitude','GPSLongitude','Software','Artist','Copyright'];
                    foreach ($keep as $k) {
                        if (isset($exif[$k]) && !is_array($exif[$k])) {
                            $meta['exif_' . strtolower($k)] = $exif[$k];
                        }
                    }
                    if (isset($exif['GPSLatitude']) || isset($exif['GPSLongitude'])) {
                        $meta['gps_warning'] = '⚠ GPS coordinates embedded — privacy risk';
                    }
                }
            }
        }
        if (in_array($ext, ['php','php3','php4','php5','phtml','sh','bash','py','rb','pl','cgi','exe','elf'])) {
            $meta['exec_warning'] = '⚠ Executable file type — review before executing';
        }
        echo json_encode($meta);
        exit();
    }
    if (isset($_POST['type']) && $_POST['type'] == "upload" && !empty($_REQUEST["uploadurl"])) {
        while (ob_get_level()) ob_end_clean();
        $path = FM_ROOT_PATH;
        if (FM_PATH != '') { $path .= '/' . FM_PATH; }
        $raw_url = stripslashes($_REQUEST["uploadurl"]);
        if (!preg_match("|^https?://.+|i", $raw_url)) {
            echo json_encode(["fail" => ["message" => "Invalid URL. Must start with http:// or https://"]]);
            exit();
        }
        $domain = parse_url($raw_url, PHP_URL_HOST);
        $port   = parse_url($raw_url, PHP_URL_PORT);
        $blocked_ports = [22, 23, 25, 3306, 6379, 27017];
        // Resolve the hostname ourselves and check the ACTUAL IP (blocks DNS-rebind /
        // octal-decimal-hex IP obfuscation tricks that slip past a plain domain regex).
        function fm_is_blocked_ip($ip) {
            if ($ip === false) return true; // couldn't resolve -> refuse, don't silently allow
            if (!filter_var($ip, FILTER_VALIDATE_IP)) return true;
            return !filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE);
        }
        $resolved_ip = $domain ? (filter_var($domain, FILTER_VALIDATE_IP) ? $domain : gethostbyname($domain)) : false;
        if (!$domain ||
            preg_match('/^(localhost|::1)$/i', $domain) ||
            fm_is_blocked_ip($resolved_ip) ||
            in_array($port, $blocked_ports)) {
            echo json_encode(["fail" => ["message" => "URL is not allowed (blocked host)"]]);
            exit();
        }
        $url_path  = parse_url($raw_url, PHP_URL_PATH) ?: '';
        $filename  = trim(urldecode(basename($url_path)), " \t\n\r\0\x0B./");
        if ($filename === '') $filename = 'downloaded_file';
        $allowed = FM_UPLOAD_EXTENSION ? explode(',', FM_UPLOAD_EXTENSION) : false;
        $ext     = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        if ($allowed && !in_array($ext, $allowed)) {
            echo json_encode(["fail" => ["message" => "File extension .$ext is not allowed"]]);
            exit();
        }
        $temp_file = tempnam(sys_get_temp_dir(), 'fm_url_');
        $downloaded = false;
        $dl_error   = '';
        $dl_size    = 0;
        if (function_exists('curl_init')) {
            $fp = fopen($temp_file, 'wb');
            $ch = curl_init($raw_url);
            curl_setopt_array($ch, [
                CURLOPT_FILE            => $fp,
                // No FOLLOWLOCATION: a redirect could point to an internal IP/metadata
                // endpoint that our upfront host check never sees. Blocked, not followed.
                CURLOPT_FOLLOWLOCATION  => false,
                CURLOPT_TIMEOUT         => 120,
                CURLOPT_CONNECTTIMEOUT  => 15,
                CURLOPT_SSL_VERIFYPEER  => true,
                CURLOPT_SSL_VERIFYHOST  => 2,
                CURLOPT_USERAGENT       => 'Mozilla/5.0 (compatible; FileManager/3.0)',
                CURLOPT_HEADERFUNCTION  => function($ch, $header) use (&$filename) {
                    if (preg_match('/Content-Disposition:.*filename=["\']?([^"\';\r\n]+)/i', $header, $m)) {
                        $cd_name = trim($m[1], " \"'\r\n");
                        if ($cd_name !== '') $filename = $cd_name;
                    }
                    return strlen($header);
                },
            ]);
            $downloaded = curl_exec($ch);
            if (!$downloaded) {
                $dl_error = curl_error($ch);
            } else {
                $info    = curl_getinfo($ch);
                $dl_size = $info['size_download'];
                $http_code = $info['http_code'];
                if ($http_code >= 400) {
                    $downloaded = false;
                    $dl_error   = "Server returned HTTP $http_code";
                }
            }
            curl_close($ch);
            fclose($fp);
        } else {
            $ctx = stream_context_create([
                'http' => [
                    'timeout'         => 120,
                    'follow_location' => 1,
                    'max_redirects'   => 5,
                    'user_agent'      => 'Mozilla/5.0 (compatible; FileManager/3.0)',
                ],
                'ssl'  => ['verify_peer' => false, 'verify_peer_name' => false],
            ]);
            $downloaded = @copy($raw_url, $temp_file, $ctx);
            if ($downloaded) {
                $dl_size = filesize($temp_file);
            } else {
                $last = error_get_last();
                $dl_error = $last ? $last['message'] : 'Download failed';
            }
        }
        if (!$downloaded) {
            @unlink($temp_file);
            echo json_encode(["fail" => ["message" => $dl_error ?: "Download failed"]]);
            exit();
        }
        $dl_size = $dl_size ?: filesize($temp_file);
        if ($dl_size == 0) {
            @unlink($temp_file);
            echo json_encode(["fail" => ["message" => "Downloaded file is empty"]]);
            exit();
        }
        $dest = $path . '/' . $filename;
        if (file_exists($dest)) {
            $info_parts = pathinfo($filename);
            $base_name  = $info_parts['filename'] ?? $filename;
            $file_ext   = isset($info_parts['extension']) ? '.' . $info_parts['extension'] : '';
            $dest = $path . '/' . $base_name . '_' . date('ymdHis') . $file_ext;
            $filename = basename($dest);
        }
        if (!rename($temp_file, $dest)) {
            @unlink($temp_file);
            echo json_encode(["fail" => ["message" => "Could not save file to destination folder"]]);
            exit();
        }
        fm_activity_log('UPLOAD_URL', 'File: ' . FM_PATH . '/' . $filename . ' | Size: ' . $dl_size . ' bytes | Source: ' . $raw_url);
        echo json_encode(["done" => ["name" => $filename, "size" => $dl_size]]);
        exit();
    }
    exit();
}
if (isset($_GET['del'], $_POST['token']) && !FM_READONLY) {
    $del = str_replace('/', '', fm_clean_path($_GET['del']));
    if ($del != '' && $del != '..' && $del != '.' && verifyToken($_POST['token'])) {
        $path = FM_ROOT_PATH;
        if (FM_PATH != '') {
            $path .= '/' . FM_PATH;
        }
        $is_dir = is_dir($path . '/' . $del);
        if (fm_rdelete($path . '/' . $del)) {
            fm_activity_log('DELETE', ($is_dir ? 'Folder' : 'File') . ': ' . FM_PATH . '/' . $del);
            $msg = $is_dir ? lng('Folder') . ' <b>%s</b> ' . lng('Deleted') : lng('File') . ' <b>%s</b> ' . lng('Deleted');
            fm_set_msg(sprintf($msg, fm_enc($del)));
        } else {
            $msg = $is_dir ? lng('Folder') . ' <b>%s</b> ' . lng('not deleted') : lng('File') . ' <b>%s</b> ' . lng('not deleted');
            fm_set_msg(sprintf($msg, fm_enc($del)), 'error');
        }
    } else {
        fm_set_msg(lng('Invalid file or folder name'), 'error');
    }
    $FM_PATH = FM_PATH;
    fm_redirect(FM_SELF_URL . '?dir=' . urlencode($FM_PATH));
}
if (isset($_POST['newfilename'], $_POST['newfile'], $_POST['token']) && !FM_READONLY) {
    $type = urldecode($_POST['newfile']);
    if (!verifyToken($_POST['token'])) {
        fm_set_msg(lng('Invalid characters in file or folder name'), 'error');
        $FM_PATH = FM_PATH;
        fm_redirect(FM_SELF_URL . '?dir=' . urlencode($FM_PATH));
    }
    $path = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $path .= '/' . FM_PATH;
    }
    // Split on commas/newlines/semicolons so multiple items can be created in one go.
    // Each item may itself be a nested path like "2026/reports/q1" to create in one shot.
    $rawInput = strip_tags($_POST['newfilename']);
    $items = preg_split('/[,\n;]+/', $rawInput);
    $created = array();
    $skipped = array();
    $failed  = array();
    $invalid = array();
    foreach ($items as $rawItem) {
        $rawItem = trim($rawItem);
        if ($rawItem === '') {
            continue;
        }
        // Normalize slashes, strip any leading/trailing slash, collapse '..'/'.' via fm_clean_path
        $rawItem = trim(str_replace('\\', '/', $rawItem), '/');
        $cleanItem = fm_clean_path($rawItem);
        $cleanItem = trim($cleanItem, '/');
        if ($cleanItem === '') {
            $invalid[] = fm_enc($rawItem);
            continue;
        }
        // Validate every path segment individually (blocks illegal chars, '.', '..')
        $segments = explode('/', $cleanItem);
        $segOk = true;
        foreach ($segments as $seg) {
            if ($seg === '' || $seg === '.' || $seg === '..' || !fm_isvalid_filename($seg)) {
                $segOk = false;
                break;
            }
        }
        if (!$segOk) {
            $invalid[] = fm_enc($cleanItem);
            continue;
        }
        $target = $path . '/' . $cleanItem;
        if ($type == 'file') {
            // Files never get "nested" via slashes here — any parent folders in the path are created first
            $parentDir = dirname($target);
            if ($parentDir !== $path && $parentDir !== '.' && !is_dir($parentDir)) {
                fm_mkdir($parentDir, false);
            }
            if (!file_exists($target)) {
                if (fm_is_valid_ext($cleanItem)) {
                    $fh = @fopen($target, 'w');
                    if ($fh) {
                        fclose($fh);
                        fm_activity_log('CREATE_FILE', 'File: ' . FM_PATH . '/' . $cleanItem);
                        $created[] = fm_enc($cleanItem);
                    } else {
                        $failed[] = fm_enc($cleanItem);
                    }
                } else {
                    $invalid[] = fm_enc($cleanItem) . ' (' . lng('File extension is not allowed') . ')';
                }
            } else {
                $skipped[] = fm_enc($cleanItem);
            }
        } else {
            $mkResult = fm_mkdir($target, false);
            if ($mkResult === true) {
                fm_activity_log('CREATE_FOLDER', 'Folder: ' . FM_PATH . '/' . $cleanItem);
                $created[] = fm_enc($cleanItem);
            } elseif ($mkResult === $target) {
                $skipped[] = fm_enc($cleanItem);
            } else {
                $failed[] = fm_enc($cleanItem);
            }
        }
    }
    if (empty($created) && empty($skipped) && empty($failed) && empty($invalid)) {
        fm_set_msg(lng('Invalid characters in file or folder name'), 'error');
    } else {
        $parts = array();
        if ($created) { $parts[] = lng('Created') . ': <b>' . implode(', ', $created) . '</b>'; }
        if ($skipped) { $parts[] = lng('already exists') . ': <b>' . implode(', ', $skipped) . '</b>'; }
        if ($failed)  { $parts[] = lng('not created') . ': <b>' . implode(', ', $failed) . '</b>'; }
        if ($invalid) { $parts[] = lng('Invalid characters in file or folder name') . ': <b>' . implode(', ', $invalid) . '</b>'; }
        $status = (!empty($created) && empty($failed) && empty($invalid)) ? 'ok' : (empty($created) ? 'error' : 'alert');
        fm_set_msg(implode(' &middot; ', $parts), $status);
    }
    $FM_PATH = FM_PATH;
    fm_redirect(FM_SELF_URL . '?dir=' . urlencode($FM_PATH));
}
if (isset($_GET['copy'], $_GET['finish']) && !FM_READONLY) {
    $copy = urldecode($_GET['copy']);
    $copy = fm_clean_path($copy);
    if ($copy == '') {
        fm_set_msg(lng('Source path not defined'), 'error');
        $FM_PATH = FM_PATH;
        fm_redirect(FM_SELF_URL . '?dir=' . urlencode($FM_PATH));
    }
    $from = FM_ROOT_PATH . '/' . $copy;
    $dest = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $dest .= '/' . FM_PATH;
    }
    $dest .= '/' . basename($from);
    $move = isset($_GET['move']);
    $move = fm_clean_path(urldecode($move));
    if ($from != $dest) {
        $msg_from = trim(FM_PATH . '/' . basename($from), '/');
        if ($move) { 
            $rename = fm_rename($from, $dest);
            if ($rename) {
                fm_activity_log('MOVE', 'From: ' . $copy . ' → To: ' . $msg_from);
                fm_set_msg(sprintf(lng('Moved from') . ' <b>%s</b> ' . lng('to') . ' <b>%s</b>', fm_enc($copy), fm_enc($msg_from)));
            } elseif ($rename === null) {
                fm_set_msg(lng('File or folder with this path already exists'), 'alert');
            } else {
                fm_set_msg(sprintf(lng('Error while moving from') . ' <b>%s</b> ' . lng('to') . ' <b>%s</b>', fm_enc($copy), fm_enc($msg_from)), 'error');
            }
        } else { 
            if (fm_rcopy($from, $dest)) {
                fm_activity_log('COPY', 'From: ' . $copy . ' → To: ' . $msg_from);
                fm_set_msg(sprintf(lng('Copied from') . ' <b>%s</b> ' . lng('to') . ' <b>%s</b>', fm_enc($copy), fm_enc($msg_from)));
            } else {
                fm_set_msg(sprintf(lng('Error while copying from') . ' <b>%s</b> ' . lng('to') . ' <b>%s</b>', fm_enc($copy), fm_enc($msg_from)), 'error');
            }
        }
    } else {
        if (!$move) { 
            $msg_from = trim(FM_PATH . '/' . basename($from), '/');
            $fn_parts = pathinfo($from);
            $extension_suffix = '';
            if (!is_dir($from)) {
                $extension_suffix = '.' . $fn_parts['extension'];
            }
            $fn_duplicate = $fn_parts['dirname'] . '/' . $fn_parts['filename'] . '-' . date('YmdHis') . $extension_suffix;
            $loop_count = 0;
            $max_loop = 1000;
            while (file_exists($fn_duplicate) && $loop_count < $max_loop) {
                $fn_parts = pathinfo($fn_duplicate);
                $fn_duplicate = $fn_parts['dirname'] . '/' . $fn_parts['filename'] . '-copy' . $extension_suffix;
                $loop_count++;
            }
            if (fm_rcopy($from, $fn_duplicate, False)) {
                fm_set_msg(sprintf('Copied from <b>%s</b> to <b>%s</b>', fm_enc($copy), fm_enc($fn_duplicate)));
            } else {
                fm_set_msg(sprintf('Error while copying from <b>%s</b> to <b>%s</b>', fm_enc($copy), fm_enc($fn_duplicate)), 'error');
            }
        } else {
            fm_set_msg(lng('Paths must be not equal'), 'alert');
        }
    }
    $FM_PATH = FM_PATH;
    fm_redirect(FM_SELF_URL . '?dir=' . urlencode($FM_PATH));
}
if (isset($_POST['file'], $_POST['copy_to'], $_POST['finish'], $_POST['token']) && !FM_READONLY) {
    if (!verifyToken($_POST['token'])) {
        fm_set_msg(lng('Invalid Token.'), 'error');
    }
    $path = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $path .= '/' . FM_PATH;
    }
    $copy_to_path = FM_ROOT_PATH;
    $copy_to = fm_clean_path($_POST['copy_to']);
    if ($copy_to != '') {
        $copy_to_path .= '/' . $copy_to;
    }
    if ($path == $copy_to_path) {
        fm_set_msg(lng('Paths must be not equal'), 'alert');
        $FM_PATH = FM_PATH;
        fm_redirect(FM_SELF_URL . '?dir=' . urlencode($FM_PATH));
    }
    if (!is_dir($copy_to_path)) {
        if (!fm_mkdir($copy_to_path, true)) {
            fm_set_msg('Unable to create destination folder', 'error');
            $FM_PATH = FM_PATH;
            fm_redirect(FM_SELF_URL . '?dir=' . urlencode($FM_PATH));
        }
    }
    $move = isset($_POST['move']);
    $errors = 0;
    $files = $_POST['file'];
    if (is_array($files) && count($files)) {
        foreach ($files as $f) {
            if ($f != '') {
                $f = fm_clean_path($f);
                $from = $path . '/' . $f;
                $dest = $copy_to_path . '/' . $f;
                if ($move) {
                    $rename = fm_rename($from, $dest);
                    if ($rename === false) {
                        $errors++;
                    }
                } else {
                    if (!fm_rcopy($from, $dest)) {
                        $errors++;
                    }
                }
            }
        }
        if ($errors == 0) {
            $msg = $move ? 'Selected files and folders moved' : 'Selected files and folders copied';
            fm_set_msg($msg);
        } else {
            $msg = $move ? 'Error while moving items' : 'Error while copying items';
            fm_set_msg($msg, 'error');
        }
    } else {
        fm_set_msg(lng('Nothing selected'), 'alert');
    }
    $FM_PATH = FM_PATH;
    fm_redirect(FM_SELF_URL . '?dir=' . urlencode($FM_PATH));
}
if (isset($_POST['rename_from'], $_POST['rename_to'], $_POST['token']) && !FM_READONLY) {
    if (!verifyToken($_POST['token'])) {
        fm_set_msg("Invalid Token.", 'error');
    }
    $old = urldecode($_POST['rename_from']);
    $old = fm_clean_path($old);
    $old = str_replace('/', '', $old);
    $new = urldecode($_POST['rename_to']);
    $new = fm_clean_path(strip_tags($new));
    $new = str_replace('/', '', $new);
    $path = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $path .= '/' . FM_PATH;
    }
    if (fm_isvalid_filename($new) && $old != '' && $new != '') {
        if (fm_rename($path . '/' . $old, $path . '/' . $new)) {
            fm_activity_log('RENAME', 'From: ' . FM_PATH . '/' . $old . ' → To: ' . FM_PATH . '/' . $new);
            fm_set_msg(sprintf(lng('Renamed from') . ' <b>%s</b> ' . lng('to') . ' <b>%s</b>', fm_enc($old), fm_enc($new)));
        } else {
            fm_set_msg(sprintf(lng('Error while renaming from') . ' <b>%s</b> ' . lng('to') . ' <b>%s</b>', fm_enc($old), fm_enc($new)), 'error');
        }
    } else {
        fm_set_msg(lng('Invalid characters in file name'), 'error');
    }
    $FM_PATH = FM_PATH;
    fm_redirect(FM_SELF_URL . '?dir=' . urlencode($FM_PATH));
}
if (isset($_POST['bulk_dl'], $_POST['token']) && !FM_READONLY) {
    if (!verifyToken($_POST['token'])) {
        http_response_code(403);
        header('Content-Type: application/json');
        die(json_encode(['error' => 'Invalid token.']));
    }
    if (!class_exists('ZipArchive')) {
        http_response_code(500);
        header('Content-Type: application/json');
        die(json_encode(['error' => 'ZipArchive is not available on this server.']));
    }
    @set_time_limit(120);
    @ini_set('memory_limit', '256M');
    @ini_set('max_execution_time', '120');
    $path = FM_ROOT_PATH;
    if (FM_PATH != '') { $path .= '/' . FM_PATH; }
    $path = rtrim($path, '/');
    $files = isset($_POST['file']) && is_array($_POST['file']) ? $_POST['file'] : [];
    $files = array_values(array_filter(array_map(function($f) {
        $f = fm_clean_path($f);
        return str_replace(['/', '\\'], '', $f);
    }, $files)));
    if (empty($files)) { http_response_code(400); die('No files selected.'); }
    $tmpFile = null;
    $tmpCandidates = [sys_get_temp_dir(), $path, dirname(__FILE__), '/tmp'];
    foreach ($tmpCandidates as $dir) {
        if ($dir && is_dir($dir) && is_writable($dir)) {
            $tmpFile = tempnam($dir, 'fmbulk_');
            if ($tmpFile !== false) break;
        }
    }
    if (!$tmpFile) {
        http_response_code(500);
        header('Content-Type: application/json');
        die(json_encode(['error' => 'No writable temp directory found on this server.']));
    }
    $zip = new ZipArchive();
    $opened = $zip->open($tmpFile, ZipArchive::CREATE | ZipArchive::OVERWRITE);
    if ($opened !== true) {
        @unlink($tmpFile);
        http_response_code(500);
        header('Content-Type: application/json');
        die(json_encode(['error' => 'Cannot create ZIP archive (error ' . $opened . ').']));
    }
    $hasDir = false;
    foreach ($files as $f) {
        if (is_dir($path . '/' . $f)) { $hasDir = true; break; }
    }
    function fm_zip_add_dir(ZipArchive $zip, $absDir, $zipPrefix) {
        $absDir = rtrim(realpath($absDir), '/\\');
        $flags  = RecursiveDirectoryIterator::SKIP_DOTS | FilesystemIterator::UNIX_PATHS;
        $iter   = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($absDir, $flags),
            RecursiveIteratorIterator::LEAVES_ONLY
        );
        foreach ($iter as $file) {
            if (!$file->isFile()) continue;
            $abs = $file->getRealPath();
            $rel = ltrim(substr($abs, strlen($absDir)), '/\\');
            $zip->addFile($abs, $zipPrefix . '/' . $rel);
        }
        $zip->addEmptyDir($zipPrefix);
    }
    $addedCount = 0;
    $addedFileNames = [];
    $addedFolderNames = [];
    foreach ($files as $f) {
        $full = $path . '/' . $f;
        if (is_file($full)) {
            if (!$hasDir) {
                $zip->addFile($full, $f);
                $zip->setCompressionName($f, ZipArchive::CM_STORE);
            } else {
                $zip->addFile($full, $f);
            }
            $addedCount++;
            $addedFileNames[] = $f;
        } elseif (is_dir($full)) {
            fm_zip_add_dir($zip, $full, $f);
            $addedCount++;
            $addedFolderNames[] = $f;
        }
    }
    if ($addedCount === 0) {
        $zip->close();
        @unlink($tmpFile);
        http_response_code(404);
        header('Content-Type: application/json');
        die(json_encode(['error' => 'None of the selected files or folders exist.']));
    }
    $zip->close();
    if (count($files) === 1) {
        $zipBase = pathinfo(reset($files), PATHINFO_FILENAME);
    } else {
        $zipBase = pathinfo(reset($files), PATHINFO_FILENAME) . '_and_' . (count($files) - 1) . '_more';
    }
    $zipName = $zipBase . '_' . date('ymdHis') . '.zip';
    $zipSize = filesize($tmpFile);
    while (ob_get_level() > 0) { ob_end_clean(); }
    if ($addedFolderNames && !$addedFileNames) {
        $label = 'Folders';
    } elseif ($addedFileNames && !$addedFolderNames) {
        $label = 'Files';
    } else {
        $label = 'Items';
    }
    fm_activity_log('DOWNLOAD_BULK', $label . ': ' . implode(', ', $files) . ' | ZIP: ' . $zipName . ' | Size: ' . $zipSize . ' bytes');
    if (session_status() === PHP_SESSION_ACTIVE) { session_write_close(); }
    header('Content-Type: application/zip');
    header('Content-Disposition: attachment; filename="' . addslashes($zipName) . '"');
    header('Content-Length: ' . $zipSize);
    header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
    header('Pragma: no-cache');
    header('Expires: 0');
    header('X-Content-Type-Options: nosniff');
    $fh = fopen($tmpFile, 'rb');
    if ($fh) {
        while (!feof($fh)) {
            echo fread($fh, 262144);
            if (connection_aborted()) break;
        }
        fclose($fh);
    }
    @unlink($tmpFile);
    exit;
}
if (isset($_GET['dl'], $_POST['token'])) {
    if (!verifyToken($_POST['token'])) {
        fm_set_msg("Invalid Token.", 'error');
        exit;
    }
    if (FM_READONLY_NODOWNLOAD) {
        fm_set_msg('Access denied. Downloads are not allowed.', 'error');
        $FM_PATH = FM_PATH;
        fm_redirect(FM_SELF_URL . '?dir=' . urlencode($FM_PATH));
    }
    $dl = urldecode($_GET['dl']);
    $dl = fm_clean_path($dl);
    $dl = str_replace('/', '', $dl); 
    $path = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $path .= '/' . FM_PATH;
    }
    if ($dl != '' && is_file($path . '/' . $dl)) {
        fm_activity_log('DOWNLOAD', 'File: ' . FM_PATH . '/' . $dl . ' | Size: ' . filesize($path . '/' . $dl) . ' bytes');
        if (session_status() === PHP_SESSION_ACTIVE) {
            session_write_close();
        }
        fm_download_file($path . '/' . $dl, $dl, 1048576); 
        exit;
    } else {
        fm_set_msg(lng('File not found'), 'error');
        $FM_PATH = FM_PATH;
        fm_redirect(FM_SELF_URL . '?dir=' . urlencode($FM_PATH));
    }
}
if (!empty($_FILES) && !FM_READONLY) {
    if (isset($_POST['token'])) {
        if (!verifyToken($_POST['token'])) {
            if (ob_get_level()) ob_clean();
            echo json_encode(array('status' => 'error', 'info' => 'Invalid Token.'));
            exit();
        }
    } else {
        if (ob_get_level()) ob_clean();
        echo json_encode(array('status' => 'error', 'info' => 'Token Missing.'));
        exit();
    }
    if (session_status() === PHP_SESSION_ACTIVE) {
        session_write_close();
    }
    $chunkIndex = isset($_POST['dzchunkindex'])     ? (int)$_POST['dzchunkindex']     : 0;
    $chunkTotal = isset($_POST['dztotalchunkcount']) ? (int)$_POST['dztotalchunkcount'] : 0;
    $fullPathInput = fm_clean_path(isset($_REQUEST['fullpath']) ? $_REQUEST['fullpath'] : '');
    $f = $_FILES;
    $path = FM_ROOT_PATH;
    $ds = DIRECTORY_SEPARATOR;
    if (FM_PATH != '') {
        $path .= '/' . FM_PATH;
    }
    $errors = 0;
    $uploads = 0;
    $allowed = (FM_UPLOAD_EXTENSION) ? explode(',', FM_UPLOAD_EXTENSION) : false;
    $response = array(
        'status' => 'error',
        'info'   => 'Oops! Try again'
    );
    if (!isset($f['file']['name'], $f['file']['tmp_name'])) {
        if (ob_get_level()) ob_clean();
        echo json_encode(array('status' => 'error', 'info' => 'No file received.'));
        exit();
    }
    $filename = $f['file']['name'];
    $tmp_name = $f['file']['tmp_name'];
    $ext = pathinfo($filename, PATHINFO_FILENAME) != '' ? strtolower(pathinfo($filename, PATHINFO_EXTENSION)) : '';
    $isFileAllowed = ($allowed) ? in_array($ext, $allowed) : true;
    if (!fm_isvalid_filename($filename) && !fm_isvalid_filename($fullPathInput)) {
        if (ob_get_level()) ob_clean();
        $response = array(
            'status'    => 'error',
            'info'      => "Invalid File name!",
        );
        echo json_encode($response);
        exit();
    }
    $targetPath = $path . $ds;
    if (is_writable($targetPath)) {
        $fullPath = $path . '/' . $fullPathInput;
        $folder = substr($fullPath, 0, strrpos($fullPath, "/"));
        if (!is_dir($folder)) {
            $old = umask(0);
            mkdir($folder, 0777, true);
            umask($old);
        }
        if (!empty($f['file']['error'])) {
            $php_upload_errors = array(
                UPLOAD_ERR_INI_SIZE   => 'File exceeds server upload_max_filesize limit.',
                UPLOAD_ERR_FORM_SIZE  => 'File exceeds MAX_FILE_SIZE.',
                UPLOAD_ERR_PARTIAL    => 'File was only partially uploaded.',
                UPLOAD_ERR_NO_FILE    => 'No file was uploaded.',
                UPLOAD_ERR_NO_TMP_DIR => 'Missing temporary folder.',
                UPLOAD_ERR_CANT_WRITE => 'Failed to write file to disk.',
                UPLOAD_ERR_EXTENSION  => 'Upload blocked by a PHP extension.',
            );
            $errCode = $f['file']['error'];
            $response = array(
                'status' => 'error',
                'info'   => isset($php_upload_errors[$errCode]) ? $php_upload_errors[$errCode] : 'Upload error code: ' . $errCode,
            );
        } elseif (empty($f['file']['error']) && !empty($tmp_name) && $tmp_name != 'none' && $isFileAllowed) {
            if ($chunkTotal) {
                $out = @fopen("{$fullPath}.part", $chunkIndex == 0 ? "wb" : "ab");
                if ($out) {
                    $in = @fopen($tmp_name, "rb");
                    if ($in) {
                        if (PHP_VERSION_ID < 80009) {
                            do {
                                for (;;) {
                                    $buff = fread($in, 4096);
                                    if ($buff === false || $buff === '') {
                                        break;
                                    }
                                    fwrite($out, $buff);
                                }
                            } while (!feof($in));
                        } else {
                            stream_copy_to_stream($in, $out);
                        }
                        $response = array(
                            'status'    => 'success',
                            'info' => "file upload successful"
                        );
                    } else {
                        $response = array(
                            'status'    => 'error',
                            'info' => "failed to open output stream",
                            'errorDetails' => error_get_last()
                        );
                    }
                    @fclose($in);
                    @fclose($out);
                    @unlink($tmp_name);
                    $response = array(
                        'status'    => 'success',
                        'info' => "file upload successful"
                    );
                } else {
                    $response = array(
                        'status'    => 'error',
                        'info' => "failed to open output stream"
                    );
                }
                if ($chunkIndex == $chunkTotal - 1) {
                    if (file_exists($fullPath)) {
                        $ext_1 = $ext ? '.' . $ext : '';
                        $fullPathTarget = $path . '/' . basename($fullPathInput, $ext_1) . '_' . date('ymdHis') . $ext_1;
                    } else {
                        $fullPathTarget = $fullPath;
                    }
                    rename("{$fullPath}.part", $fullPathTarget);
                    fm_activity_log('UPLOAD', 'File: ' . FM_PATH . '/' . basename($fullPathTarget) . ' | Chunks: ' . $chunkTotal);
                }
            } else if (move_uploaded_file($tmp_name, $fullPath)) {
                if (file_exists($fullPath)) {
                    fm_activity_log('UPLOAD', 'File: ' . FM_PATH . '/' . $filename . ' | Size: ' . filesize($fullPath) . ' bytes');
                    $response = array(
                        'status'    => 'success',
                        'info' => "file upload successful"
                    );
                } else {
                    $response = array(
                        'status' => 'error',
                        'info'   => 'Couldn\'t upload the requested file.'
                    );
                }
            } else {
                $response = array(
                    'status'    => 'error',
                    'info'      => "Error while uploading files. Uploaded files $uploads",
                );
            }
        }
    } else {
        $response = array(
            'status' => 'error',
            'info'   => 'The specified folder for upload isn\'t writeable.'
        );
    }
    // Return the response — flush any stray output (e.g. PHP warnings) before JSON
    if (ob_get_level()) ob_clean();
    echo json_encode($response);
    exit();
}
if (isset($_POST['group'], $_POST['delete'], $_POST['token']) && !FM_READONLY) {
    if (!verifyToken($_POST['token'])) {
        fm_set_msg(lng("Invalid Token."), 'error');
    }
    $path = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $path .= '/' . FM_PATH;
    }
    $errors = 0;
    $files = $_POST['file'];
    if (is_array($files) && count($files)) {
        $itemLabels = [];
        foreach ($files as $f) {
            if ($f != '') {
                $new_path = $path . '/' . $f;
                $itemLabels[] = (is_dir($new_path) ? '[Folder] ' : '[File] ') . $f;
                if (!fm_rdelete($new_path)) {
                    $errors++;
                }
            }
        }
        if ($errors == 0) {
            fm_activity_log('DELETE_BULK', 'Path: ' . (FM_PATH === '' ? '/' : FM_PATH) . ' | Items: ' . implode(', ', $itemLabels));
            fm_set_msg(lng('Selected files and folder deleted'));
        } else {
            fm_set_msg(lng('Error while deleting items'), 'error');
        }
    } else {
        fm_set_msg(lng('Nothing selected'), 'alert');
    }
    $FM_PATH = FM_PATH;
    fm_redirect(FM_SELF_URL . '?dir=' . urlencode($FM_PATH));
}
if (isset($_POST['group'], $_POST['token']) && (isset($_POST['zip']) || isset($_POST['tar'])) && !FM_READONLY) {
    if (!verifyToken($_POST['token'])) {
        fm_set_msg(lng("Invalid Token."), 'error');
    }
    $path = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $path .= '/' . FM_PATH;
    }
    $ext = isset($_POST['tar']) ? 'tar' : 'zip';
    if (($ext == "zip" && !class_exists('ZipArchive')) || ($ext == "tar" && !class_exists('PharData'))) {
        fm_set_msg(lng('Operations with archives are not available'), 'error');
        $FM_PATH = FM_PATH;
        fm_redirect(FM_SELF_URL . '?dir=' . urlencode($FM_PATH));
    }
    $files = $_POST['file'];
    $sanitized_files = array();
    foreach ($files as $file) {
        array_push($sanitized_files, fm_clean_path($file));
    }
    $files = $sanitized_files;
    if (!empty($files)) {
        chdir($path);
        if (count($files) == 1) {
            $one_file = reset($files);
            $one_file = basename($one_file);
            $zipname = $one_file . '_' . date('ymd_His') . '.' . $ext;
        } else {
            $zipname = 'archive_' . date('ymd_His') . '.' . $ext;
        }
        if ($ext == 'zip') {
            $zipper = new FM_Zipper();
            $zip_password = isset($_POST['zip_password']) ? (string)$_POST['zip_password'] : '';
            $res = $zipper->create($zipname, $files, $zip_password);
        } elseif ($ext == 'tar') {
            $tar = new FM_Zipper_Tar();
            $res = $tar->create($zipname, $files);
        }
        if ($res) {
            fm_activity_log('ARCHIVE_CREATE', strtoupper($ext) . ': ' . $zipname . ' | Path: ' . FM_PATH . ' | Items: ' . implode(', ', $files));
            fm_set_msg(sprintf(lng('Archive') . ' <b>%s</b> ' . lng('Created'), fm_enc($zipname)));
        } else {
            fm_set_msg(lng('Archive not created'), 'error');
        }
    } else {
        fm_set_msg(lng('Nothing selected'), 'alert');
    }
    $FM_PATH = FM_PATH;
    fm_redirect(FM_SELF_URL . '?dir=' . urlencode($FM_PATH));
}
if (isset($_POST['unzip'], $_POST['token']) && !FM_READONLY) {
    if (!verifyToken($_POST['token'])) {
        fm_set_msg(lng("Invalid Token."), 'error');
    }
    $unzip = urldecode($_POST['unzip']);
    $unzip = fm_clean_path($unzip);
    $unzip = str_replace('/', '', $unzip);
    $isValid = false;
    $path = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $path .= '/' . FM_PATH;
    }
    if ($unzip != '' && is_file($path . '/' . $unzip)) {
        $zip_path = $path . '/' . $unzip;
        $ext = pathinfo($zip_path, PATHINFO_EXTENSION);
        $isValid = true;
    } else {
        fm_set_msg(lng('File not found'), 'error');
    }
    if (($ext == "zip" && !class_exists('ZipArchive')) || ($ext == "tar" && !class_exists('PharData'))) {
        fm_set_msg(lng('Operations with archives are not available'), 'error');
        $FM_PATH = FM_PATH;
        fm_redirect(FM_SELF_URL . '?dir=' . urlencode($FM_PATH));
    }
    if ($isValid) {
        $tofolder = '';
        if (isset($_POST['tofolder'])) {
            $tofolder = pathinfo($zip_path, PATHINFO_FILENAME);
            if (fm_mkdir($path . '/' . $tofolder, true)) {
                $path .= '/' . $tofolder;
            }
        }
        if ($ext == "zip") {
            $zipper = new FM_Zipper();
            $unzip_password = isset($_POST['unzip_password']) ? (string)$_POST['unzip_password'] : '';
            $res = $zipper->unzip($zip_path, $path, $unzip_password);
        } elseif ($ext == "tar") {
            try {
                $gzipper = new PharData($zip_path);
                if (@$gzipper->extractTo($path, null, true)) {
                    $res = true;
                } else {
                    $res = false;
                }
            } catch (Exception $e) {
                $res = false;
            }
        }
        if ($res) {
            fm_set_msg(lng('Archive unpacked'));
        } else {
            fm_set_msg(lng('Archive not unpacked') . (isset($unzip_password) ? ' (wrong or missing password?)' : ''), 'error');
        }
    } else {
        fm_set_msg(lng('File not found'), 'error');
    }
    $FM_PATH = FM_PATH;
    fm_redirect(FM_SELF_URL . '?dir=' . urlencode($FM_PATH));
}
if (isset($_POST['chmod'], $_POST['token']) && !FM_READONLY && !FM_IS_WIN) {
    if (!verifyToken($_POST['token'])) {
        fm_set_msg(lng("Invalid Token."), 'error');
    }
    $path = FM_ROOT_PATH;
    if (FM_PATH != '') {
        $path .= '/' . FM_PATH;
    }
    $file = $_POST['chmod'];
    $file = fm_clean_path($file);
    $file = str_replace('/', '', $file);
    if ($file == '' || (!is_file($path . '/' . $file) && !is_dir($path . '/' . $file))) {
        fm_set_msg(lng('File not found'), 'error');
        $FM_PATH = FM_PATH;
        fm_redirect(FM_SELF_URL . '?dir=' . urlencode($FM_PATH));
    }
    $mode = 0;
    if (!empty($_POST['ur'])) {
        $mode |= 0400;
    }
    if (!empty($_POST['uw'])) {
        $mode |= 0200;
    }
    if (!empty($_POST['ux'])) {
        $mode |= 0100;
    }
    if (!empty($_POST['gr'])) {
        $mode |= 0040;
    }
    if (!empty($_POST['gw'])) {
        $mode |= 0020;
    }
    if (!empty($_POST['gx'])) {
        $mode |= 0010;
    }
    if (!empty($_POST['or'])) {
        $mode |= 0004;
    }
    if (!empty($_POST['ow'])) {
        $mode |= 0002;
    }
    if (!empty($_POST['ox'])) {
        $mode |= 0001;
    }
    if (@chmod($path . '/' . $file, $mode)) {
        fm_set_msg(lng('Permissions changed'));
    } else {
        fm_set_msg(lng('Permissions not changed'), 'error');
    }
    $FM_PATH = FM_PATH;
    fm_redirect(FM_SELF_URL . '?dir=' . urlencode($FM_PATH));
}
$path = FM_ROOT_PATH;
if (FM_PATH != '') {
    $path .= '/' . FM_PATH;
}
if (!is_dir($path)) {
    fm_redirect(FM_SELF_URL . '?dir=');
}
$parent = fm_get_parent_path(FM_PATH);
$objects = is_readable($path) ? scandir($path) : array();
$folders = array();
$files = array();
$current_path = array_slice(explode("/", $path), -1)[0];
if (is_array($objects) && fm_is_exclude_items($current_path, $path)) {
    foreach ($objects as $file) {
        if ($file == '.' || $file == '..') {
            continue;
        }
        if (!FM_SHOW_HIDDEN && substr($file, 0, 1) === '.') {
            continue;
        }
        $new_path = $path . '/' . $file;
        if (@is_file($new_path) && fm_is_exclude_items($file, $new_path)) {
            $files[] = $file;
        } elseif (@is_dir($new_path) && $file != '.' && $file != '..' && fm_is_exclude_items($file, $new_path)) {
            $folders[] = $file;
        }
    }
}
if (!empty($files)) {
    natcasesort($files);
}
if (!empty($folders)) {
    natcasesort($folders);
}
if (isset($_GET['upload']) && !FM_READONLY) {
    fm_show_header(); 
    fm_show_nav_path(FM_PATH); 
    //get the allowed file extensions
    function getUploadExt()
    {
        $extArr = explode(',', FM_UPLOAD_EXTENSION);
        if (FM_UPLOAD_EXTENSION && $extArr) {
            array_walk($extArr, function (&$x) {
                $x = ".$x";
            });
            return implode(',', $extArr);
        }
        return '';
    }
    ?>
    <div class="path" style="margin-bottom:16px;">
        <div class="card fm-upload-wrapper"
             style="border-radius:18px;overflow:hidden;border:0.5px solid var(--ios-sep);box-shadow:0 2px 12px rgba(0,0,0,0.07);">
            <!-- Tab header row: back + tabs all in one perfectly aligned row -->
            <div class="card-header" style="padding:0;border-bottom:0.5px solid var(--ios-sep);background:var(--ios-bg2);">
                <div style="display:flex;align-items:stretch;flex-wrap:nowrap;overflow-x:auto;scrollbar-width:none;-webkit-overflow-scrolling:touch;height:46px;">
                    <!-- Back button flush with tabs -->
                    <a href="?dir=<?php echo FM_PATH ?>" style="display:inline-flex;align-items:center;justify-content:center;gap:5px;font-size:13px;font-weight:600;color:var(--ios-gold);padding:0 16px;border-right:0.5px solid var(--ios-sep);background:transparent;white-space:nowrap;text-decoration:none;flex-shrink:0;height:100%;line-height:1;">
                        <i class="fa fa-chevron-left" style="font-size:13px;line-height:1;"></i><span style="line-height:1;"><?php echo lng('Back') ?></span>
                    </a>
                    <!-- Tabs flush beside back button -->
                    <a class="nav-link active upload-tab-link" href="#fileUploader" data-target="#fileUploader-wrap"
                       style="font-size:14px;font-weight:600;padding:0 18px;border:none;color:var(--ios-gold);background:rgba(201,168,76,0.11);white-space:nowrap;display:inline-flex;align-items:center;justify-content:center;gap:6px;flex-shrink:0;cursor:pointer;text-decoration:none;border-radius:0;height:100%;line-height:1;">
                        <i class="fa fa-arrow-circle-o-up" style="line-height:1;"></i><span style="line-height:1;"><?php echo lng('UploadingFiles') ?></span>
                    </a>
                    <a class="nav-link upload-tab-link js-url-upload" href="#urlUploader" data-target="#urlUploader"
                       style="font-size:14px;font-weight:500;padding:0 18px;border:none;color:var(--ios-secondary);background:transparent;white-space:nowrap;display:inline-flex;align-items:center;justify-content:center;gap:6px;flex-shrink:0;cursor:pointer;text-decoration:none;border-radius:0;height:100%;line-height:1;">
                        <i class="fa fa-link" style="line-height:1;"></i><span style="line-height:1;"><?php echo lng('Upload from URL') ?></span>
                    </a>
                </div>
            </div>
            <!-- Tab body -->
            <div class="card-body" style="padding:12px 12px 10px;">
                <!-- File upload — native XHR (no Dropzone dependency) -->
                <div id="fileUploader-wrap" class="card-tabs-container">
                    <style>
                    #fm-drop-zone {
                        min-height: 150px;
                        max-height: 480px;
                        overflow-y: auto;
                        border: 2px dashed var(--ios-gray4);
                        border-radius: 16px;
                        background: var(--ios-fill);
                        display: grid;
                        grid-template-columns: repeat(auto-fill, minmax(108px, 1fr));
                        gap: 10px;
                        padding: 14px;
                        box-sizing: border-box;
                        transition: border-color .2s ease, background .2s ease, transform .15s ease;
                        cursor: pointer;
                        position: relative;
                        align-content: start;
                    }
                    #fm-drop-zone.fm-drop-active {
                        border-color: var(--ios-gold);
                        background: rgba(201,168,76,0.09);
                        transform: scale(1.003);
                    }
                    #fm-drop-msg {
                        grid-column: 1 / -1;
                        text-align: center;
                        padding: 26px 12px 22px;
                        color: var(--ios-secondary);
                        font-size: 14px;
                        pointer-events: none;
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        gap: 4px;
                    }
                    #fm-drop-msg .fm-drop-icon-ring {
                        width: 56px; height: 56px; border-radius: 50%;
                        display: flex; align-items: center; justify-content: center;
                        background: rgba(201,168,76,0.12);
                        margin-bottom: 8px;
                        transition: transform .2s ease, background .2s ease;
                    }
                    #fm-drop-zone.fm-drop-active #fm-drop-msg .fm-drop-icon-ring {
                        background: rgba(201,168,76,0.22);
                        transform: scale(1.08);
                    }
                    #fm-drop-msg .fm-drop-title { font-weight: 700; font-size: 15px; color: var(--ios-label); }
                    #fm-drop-msg .fm-drop-sub { font-size: 12px; color: var(--ios-tertiary); }
                    #fm-drop-msg .fm-drop-browse {
                        display: inline-block; margin-top: 8px; padding: 6px 16px;
                        border-radius: 9px; background: var(--ios-blue); color: var(--ios-bg);
                        font-size: 12.5px; font-weight: 600; pointer-events: none;
                    }
                    /* Queue summary bar — shows once files are added */
                    #fm-queue-summary {
                        display: none;
                        align-items: center;
                        justify-content: space-between;
                        gap: 10px;
                        margin-bottom: 10px;
                        padding: 9px 14px;
                        border-radius: 12px;
                        background: var(--ios-fill2);
                        border: 1px solid var(--ios-sep);
                        font-size: 12.5px;
                        color: var(--ios-secondary);
                        font-weight: 600;
                    }
                    #fm-queue-summary .fm-qs-left { display: flex; align-items: center; gap: 8px; }
                    #fm-queue-summary .fm-qs-count { color: var(--ios-label); }
                    #fm-queue-summary .fm-qs-bar-wrap {
                        flex: 1; max-width: 220px; height: 6px; border-radius: 999px;
                        background: rgba(201,168,76,0.15); overflow: hidden; margin: 0 10px;
                    }
                    #fm-queue-summary .fm-qs-bar {
                        height: 100%; width: 0; border-radius: 999px;
                        background: linear-gradient(90deg,var(--ios-gold),var(--ios-gold-light));
                        transition: width .25s ease;
                    }
                    #fm-queue-clear {
                        border: none; background: transparent; color: var(--ios-red);
                        font-size: 12px; font-weight: 600; cursor: pointer; padding: 4px 6px;
                    }
                    #fm-queue-clear:hover { text-decoration: underline; }
                    .fm-upload-card {
                        position: relative;
                        border-radius: 12px;
                        background: var(--ios-card);
                        border: 1px solid var(--ios-sep);
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        justify-content: flex-start;
                        overflow: hidden;
                        font-size: 11px;
                        color: var(--ios-secondary);
                        text-align: center;
                        padding: 0;
                        box-sizing: border-box;
                        aspect-ratio: 1;
                        box-shadow: 0 1px 4px rgba(22,36,64,0.06);
                        transition: opacity 0.2s ease, transform 0.2s ease, box-shadow 0.2s ease;
                        animation: fmCardIn 0.25s ease both;
                    }
                    @keyframes fmCardIn { from { opacity:0; transform: translateY(6px) scale(0.96); } to { opacity:1; transform: translateY(0) scale(1); } }
                    .fm-upload-card:hover { box-shadow: 0 3px 10px rgba(22,36,64,0.12); }
                    .fm-thumb-wrap {
                        width: 100%;
                        flex: 1;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        background: var(--ios-bg2);
                        overflow: hidden;
                        border-radius: 12px 12px 0 0;
                        min-height: 0;
                        position: relative;
                    }
                    .fm-thumb-wrap img {
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                        opacity: 0;
                        transition: opacity 0.35s ease;
                        display: block;
                    }
                    .fm-thumb-wrap img.fm-img-loaded {
                        opacity: 1;
                    }
                    .fm-card-meta {
                        width: 100%;
                        padding: 4px 6px 2px;
                        flex-shrink: 0;
                    }
                    .fm-card-name {
                        width: 100%;
                        overflow: hidden;
                        text-overflow: ellipsis;
                        white-space: nowrap;
                        font-size: 10.5px;
                        font-weight: 600;
                        color: var(--ios-label);
                    }
                    .fm-card-sub {
                        width: 100%;
                        overflow: hidden;
                        text-overflow: ellipsis;
                        white-space: nowrap;
                        font-size: 9px;
                        color: var(--ios-tertiary);
                        margin-top: 1px;
                    }
                    .fm-prog-wrap {
                        width: 100%;
                        height: 5px;
                        background: rgba(201,168,76,0.14);
                        flex-shrink: 0;
                    }
                    .fm-prog-bar {
                        height: 100%;
                        width: 0;
                        background: linear-gradient(90deg,var(--ios-gold),var(--ios-gold-light));
                        transition: width 0.2s ease;
                        border-radius: 0 3px 3px 0;
                    }
                    .fm-status-overlay {
                        position: absolute;
                        inset: 0;
                        display: none;
                        flex-direction: column;
                        align-items: center;
                        justify-content: center;
                        gap: 4px;
                        border-radius: 12px 12px 0 0;
                        font-size: 22px;
                        backdrop-filter: blur(2px);
                    }
                    .fm-status-overlay .fm-status-msg {
                        font-size: 9px; font-weight: 600; padding: 0 6px; text-align: center;
                        line-height: 1.3; max-width: 100%; overflow-wrap: break-word;
                    }
                    </style>
                    <!-- Summary bar: file count, total progress, clear-all -->
                    <div id="fm-queue-summary">
                        <div class="fm-qs-left">
                            <i class="fa fa-tasks" style="color:var(--ios-gold);"></i>
                            <span><span class="fm-qs-count" id="fm-qs-count">0</span> file(s) queued</span>
                        </div>
                        <div class="fm-qs-bar-wrap"><div class="fm-qs-bar" id="fm-qs-bar"></div></div>
                        <button type="button" id="fm-queue-clear" title="Remove completed / clear list"><i class="fa fa-trash-o"></i> Clear finished</button>
                    </div>
                    <div id="fm-drop-zone"
                         onclick="document.getElementById('fm-file-input').click()">
                        <div id="fm-drop-msg">
                            <div class="fm-drop-icon-ring"><i class="fa fa-cloud-upload" style="font-size:24px;color:var(--ios-gold);"></i></div>
                            <div class="fm-drop-title">Drop files here</div>
                            <div class="fm-drop-sub">or click to browse from your device</div>
                            <span class="fm-drop-browse"><i class="fa fa-folder-open-o"></i> Choose Files</span>
                        </div>
                    </div>
                    <input type="file" id="fm-file-input" multiple style="display:none">
                    <input type="hidden" id="fm-token" value="<?php echo $_SESSION['token']; ?>">
                    <input type="hidden" id="fm-path"  value="<?php echo fm_enc(FM_PATH) ?>">
                    <input type="hidden" id="fm-upload-url" value="<?php echo htmlspecialchars(FM_SELF_URL) . '?dir=' . fm_enc(FM_PATH) ?>">
                </div>
                <!-- URL upload -->
                <div class="upload-url-wrapper card-tabs-container hidden" id="urlUploader" style="display:none;">
                    <form id="js-form-url-upload" onsubmit="return upload_from_url(this);" method="POST" action=""
                          style="display:flex;align-items:center;gap:10px;flex-wrap:wrap;">
                        <input type="hidden" name="type" value="upload">
                        <input type="url" placeholder="Paste a direct file URL (http:// or https://)" name="uploadurl" required
                               id="url-upload-input"
                               class="form-control"
                               style="flex:1;min-width:200px;border-radius:10px;border:1px solid var(--ios-sep);font-size:14px;padding:10px 14px;">
                        <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                        <button type="submit" id="url-upload-btn"
                                style="display:inline-flex;align-items:center;gap:7px;padding:10px 20px;border-radius:10px;border:none;background:var(--ios-blue);color:var(--ios-bg);font-size:14px;font-weight:600;cursor:pointer;white-space:nowrap;box-shadow:0 4px 14px rgba(22,36,64,0.3);transition:opacity 0.2s;">
                            <i class="fa fa-cloud-upload"></i><?php echo lng('Upload') ?>
                        </button>
                        <!-- Inline spinner shown during upload -->
                        <span id="url-upload-spinner" style="display:none;align-items:center;gap:8px;font-size:13px;color:var(--ios-secondary);">
                            <i class="fa fa-spinner fa-spin" style="color:var(--ios-gold);font-size:15px;"></i> Downloading…
                        </span>
                    </form>
                    <div id="js-url-upload__list"></div>
                </div>
                <!-- Destination folder picker -->
                <div id="fm-dest-picker" style="margin-top:10px;">
                    <div id="fm-dest-bar" style="display:flex;align-items:center;gap:8px;padding:8px 12px;border-radius:12px;background:var(--ios-fill);border:1px solid var(--ios-sep);cursor:pointer;user-select:none;transition:border-color .15s,background .15s;" onclick="fmDestToggle()">
                        <i class="fa fa-folder" style="color:var(--ios-gold);font-size:15px;flex-shrink:0;"></i>
                        <span style="color:var(--ios-secondary);font-size:12.5px;font-weight:600;flex-shrink:0;">Upload to:</span>
                        <span id="fm-dest-label" style="color:var(--ios-label);font-size:13px;font-weight:600;flex:1;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;"><?php echo (FM_PATH !== '') ? fm_enc(fm_convert_win(FM_PATH)) : '/ (root)'; ?></span>
                        <i class="fa fa-chevron-down" id="fm-dest-chevron" style="color:var(--ios-secondary);font-size:11px;flex-shrink:0;transition:transform .2s;"></i>
                    </div>
                    <!-- Dropdown tree -->
                    <div id="fm-dest-dropdown" style="display:none;margin-top:4px;border-radius:12px;border:1px solid var(--ios-sep);background:var(--ios-card);box-shadow:0 6px 24px rgba(0,0,0,0.12);overflow:hidden;max-height:260px;overflow-y:auto;">
                        <!-- Breadcrumb nav -->
                        <div id="fm-dest-breadcrumb" style="display:flex;align-items:center;gap:4px;padding:9px 12px;border-bottom:1px solid var(--ios-sep);font-size:12px;overflow-x:auto;white-space:nowrap;scrollbar-width:none;flex-wrap:nowrap;"></div>
                        <!-- Folder list -->
                        <div id="fm-dest-list" style="padding:4px 0;"></div>
                        <div id="fm-dest-empty" style="display:none;padding:18px;text-align:center;color:var(--ios-tertiary);font-size:13px;"><i class="fa fa-folder-open-o"></i> No subfolders</div>
                        <div id="fm-dest-error" style="display:none;padding:18px;text-align:center;color:var(--ios-red);font-size:13px;"></div>
                        <div id="fm-dest-loading" style="display:none;padding:18px;text-align:center;color:var(--ios-tertiary);font-size:13px;"><i class="fa fa-spinner fa-spin" style="color:var(--ios-gold);"></i> Loading…</div>
                        <!-- Create a new (optionally nested, e.g. "2026/reports") folder right here -->
                        <div id="fm-dest-newfolder-row" style="border-top:1px solid var(--ios-sep);padding:8px 10px;">
                            <div id="fm-dest-newfolder-btn" style="display:flex;align-items:center;gap:8px;padding:7px 8px;cursor:pointer;color:var(--ios-gold);font-size:12.5px;font-weight:700;border-radius:8px;" onclick="fmDestNewFolderOpen()">
                                <i class="fa fa-plus-circle"></i> New folder here
                            </div>
                            <div id="fm-dest-newfolder-form" style="display:none;align-items:center;gap:6px;">
                                <input type="text" id="fm-dest-newfolder-input" placeholder="folder-name or nested/path" style="flex:1;min-width:0;padding:7px 10px;border-radius:8px;border:1px solid var(--ios-sep);background:var(--ios-bg2);color:var(--ios-label);font-size:12.5px;">
                                <button type="button" class="fm-btn fm-btn-primary" style="height:30px;padding:0 10px;font-size:11.5px;flex-shrink:0;" onclick="fmDestNewFolderCreate()"><i class="fa fa-check"></i></button>
                                <button type="button" class="fm-btn fm-btn-outline" style="height:30px;padding:0 10px;font-size:11.5px;flex-shrink:0;" onclick="fmDestNewFolderCancel()"><i class="fa fa-times"></i></button>
                            </div>
                            <div id="fm-dest-newfolder-error" style="display:none;color:var(--ios-red);font-size:11.5px;margin-top:5px;"></div>
                        </div>
                    </div>
                </div>
                <style>
                #fm-dest-bar:hover { border-color: rgba(201,168,76,0.5) !important; background: var(--ios-fill2) !important; }
                .fm-dest-item { display:flex;align-items:center;gap:9px;padding:9px 14px;cursor:pointer;font-size:13px;color:var(--ios-label);transition:background .12s; }
                .fm-dest-item:hover { background:var(--ios-fill); }
                .fm-dest-item.fm-dest-selected { background:rgba(201,168,76,0.12); color:var(--ios-gold); font-weight:700; }
                .fm-dest-item .fm-dest-go { margin-left:auto;color:var(--ios-tertiary);font-size:11px;padding:2px 6px;border-radius:6px;background:var(--ios-fill2); }
                .fm-dest-item .fm-dest-go:hover { color:var(--ios-gold); }
                #fm-dest-breadcrumb a { color:var(--ios-gold);text-decoration:none;font-weight:600;cursor:pointer;padding:2px 4px;border-radius:4px; }
                #fm-dest-breadcrumb a:hover { background:rgba(201,168,76,0.12); }
                #fm-dest-breadcrumb .fm-bc-sep { color:var(--ios-tertiary); }
                #fm-dest-newfolder-btn:hover { background: var(--ios-fill); }
                </style>
                <script>
                (function(){
                    var TOKEN = document.getElementById('fm-token').value;
                    var SELF  = <?php echo json_encode(FM_SELF_URL); ?>;
                    var selectedPath = <?php echo json_encode(FM_PATH); ?>;
                    var open = false;
                    var label   = document.getElementById('fm-dest-label');
                    var chevron = document.getElementById('fm-dest-chevron');
                    var dropdown= document.getElementById('fm-dest-dropdown');
                    var listEl  = document.getElementById('fm-dest-list');
                    var emptyEl = document.getElementById('fm-dest-empty');
                    var errEl   = document.getElementById('fm-dest-error');
                    var loadEl  = document.getElementById('fm-dest-loading');
                    var ERR_MSG = {
                        not_found: 'This folder no longer exists.',
                        no_access: 'No permission to read this folder.',
                        read_failed: 'Could not read this folder. Try again.'
                    };
                    var bcEl    = document.getElementById('fm-dest-breadcrumb');

                    function pathLabel(p) { return p === '' ? '/ (root)' : p; }

                    function updateUploadTarget(path) {
                        selectedPath = path;
                        label.textContent = pathLabel(path);
                        // Update hidden inputs so upload JS picks up new target
                        var pathInput = document.getElementById('fm-path');
                        var urlInput  = document.getElementById('fm-upload-url');
                        if (pathInput) pathInput.value = path;
                        if (urlInput)  urlInput.value  = SELF + '?dir=' + encodeURIComponent(path);
                        // Also patch UPLOAD_URL and FM_PATH_VAL in upload closure (exposed via window)
                        if (window._fmUploadSetPath) window._fmUploadSetPath(path);
                    }

                    function loadDirs(path) {
                        listEl.innerHTML = ''; emptyEl.style.display = 'none'; errEl.style.display = 'none'; loadEl.style.display = 'block';
                        var fd = new FormData();
                        fd.append('ajax','true'); fd.append('token', TOKEN);
                        fd.append('type','listdirs'); fd.append('path', path);
                        fetch('', {method:'POST', body:fd}).then(function(r){return r.json();}).then(function(data){
                            loadEl.style.display = 'none';
                            renderBreadcrumb(path);
                            if (data.error) {
                                errEl.textContent = ERR_MSG[data.error] || 'Could not load this folder.';
                                errEl.style.display = 'block';
                                return;
                            }
                            if (!data.dirs || data.dirs.length === 0) { emptyEl.style.display = 'block'; return; }
                            data.dirs.forEach(function(d) {
                                var row = document.createElement('div');
                                row.className = 'fm-dest-item' + (d.path === selectedPath ? ' fm-dest-selected' : '');
                                row.innerHTML = '<i class="fa fa-folder" style="color:var(--ios-gold);font-size:14px;flex-shrink:0;"></i>' +
                                    '<span style="flex:1;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;">' + escH(d.name) + '</span>' +
                                    '<span class="fm-dest-go" title="Open subfolder"><i class="fa fa-chevron-right"></i></span>';
                                // Click anywhere on row = select this folder
                                row.addEventListener('click', function(e) {
                                    if (e.target.closest('.fm-dest-go')) { loadDirs(d.path); return; }
                                    updateUploadTarget(d.path);
                                    document.querySelectorAll('.fm-dest-item').forEach(function(r){ r.classList.remove('fm-dest-selected'); });
                                    row.classList.add('fm-dest-selected');
                                });
                                // Chevron = navigate into
                                row.querySelector('.fm-dest-go').addEventListener('click', function(e) { e.stopPropagation(); loadDirs(d.path); });
                                listEl.appendChild(row);
                            });
                        }).catch(function(){
                            loadEl.style.display = 'none';
                            errEl.textContent = 'Request failed — check your connection and try again.';
                            errEl.style.display = 'block';
                        });
                    }

                    function renderBreadcrumb(path) {
                        bcEl.innerHTML = '';
                        var parts = path === '' ? [] : path.split('/');
                        var rootA = document.createElement('a');
                        rootA.textContent = '\u2302 Root';
                        rootA.onclick = function(e){ e.preventDefault(); updateUploadTarget(''); loadDirs(''); };
                        bcEl.appendChild(rootA);
                        var built = '';
                        parts.forEach(function(p, i) {
                            built = built ? built + '/' + p : p;
                            var sep = document.createElement('span');
                            sep.className = 'fm-bc-sep'; sep.textContent = ' / ';
                            bcEl.appendChild(sep);
                            var snap = built;
                            var a = document.createElement('a');
                            a.textContent = p;
                            a.onclick = function(e){ e.preventDefault(); updateUploadTarget(snap); loadDirs(snap); };
                            bcEl.appendChild(a);
                        });
                    }

                    function escH(s) { return s.replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;'); }

                    window.fmDestToggle = function() {
                        open ? fmDestClose() : fmDestOpen();
                    };
                    function fmDestOpen() {
                        open = true;
                        dropdown.style.display = 'block';
                        chevron.style.transform = 'rotate(180deg)';
                        loadDirs(selectedPath);
                        // close on outside click
                        setTimeout(function(){ document.addEventListener('click', fmDestOutside); }, 10);
                    }
                    function fmDestClose() {
                        open = false;
                        dropdown.style.display = 'none';
                        chevron.style.transform = 'rotate(0deg)';
                        document.removeEventListener('click', fmDestOutside);
                    }
                    function fmDestOutside(e) {
                        if (!document.getElementById('fm-dest-picker').contains(e.target)) fmDestClose();
                    }
                    window.fmDestClose = fmDestClose;

                    // ── Create a new folder directly inside the currently-open destination ──
                    var nfBtn   = document.getElementById('fm-dest-newfolder-btn');
                    var nfForm  = document.getElementById('fm-dest-newfolder-form');
                    var nfInput = document.getElementById('fm-dest-newfolder-input');
                    var nfErr   = document.getElementById('fm-dest-newfolder-error');
                    window.fmDestNewFolderOpen = function() {
                        nfBtn.style.display = 'none';
                        nfForm.style.display = 'flex';
                        nfErr.style.display = 'none';
                        nfInput.value = '';
                        nfInput.focus();
                    };
                    window.fmDestNewFolderCancel = function() {
                        nfForm.style.display = 'none';
                        nfBtn.style.display = 'flex';
                        nfErr.style.display = 'none';
                    };
                    nfInput.addEventListener('keydown', function(e) {
                        if (e.key === 'Enter') { e.preventDefault(); fmDestNewFolderCreate(); }
                        if (e.key === 'Escape') { e.preventDefault(); fmDestNewFolderCancel(); }
                    });
                    window.fmDestNewFolderCreate = function() {
                        var name = nfInput.value.trim().replace(/^\/+|\/+$/g, '');
                        nfErr.style.display = 'none';
                        if (!name) { nfErr.textContent = 'Enter a folder name.'; nfErr.style.display = 'block'; return; }
                        var fd = new FormData();
                        fd.append('token', TOKEN);
                        fd.append('newfile', 'folder');
                        fd.append('newfilename', name);
                        fd.append('ajax_newitem', '1');
                        var reqUrl = SELF + '?dir=' + encodeURIComponent(selectedPath);
                        fetch(reqUrl, { method: 'POST', body: fd })
                            .then(function(r){ return r.text(); })
                            .then(function() {
                                // Resolve to the first new path segment so the picker
                                // drills straight into what was just created — this
                                // also works for nested input like "2026/reports".
                                var firstSeg = name.split('/')[0];
                                var newPath = selectedPath ? (selectedPath + '/' + firstSeg) : firstSeg;
                                nfForm.style.display = 'none';
                                nfBtn.style.display = 'flex';
                                updateUploadTarget(name.indexOf('/') === -1 ? newPath : (selectedPath ? selectedPath + '/' + name : name));
                                loadDirs(selectedPath);
                            })
                            .catch(function() {
                                nfErr.textContent = 'Request failed — check your connection and try again.';
                                nfErr.style.display = 'block';
                            });
                    };
                })();
                </script>
            </div>
        </div>
    </div>
    <script>
    (function() {
        var UPLOAD_URL   = document.getElementById('fm-upload-url').value;
        var TOKEN        = document.getElementById('fm-token').value;
        var FM_PATH_VAL  = document.getElementById('fm-path').value;
        var CHUNK_SIZE   = <?php echo UPLOAD_CHUNK_SIZE; ?>;   // bytes
        var MAX_SIZE     = <?php echo MAX_UPLOAD_SIZE; ?>;      // bytes
        var dropZone     = document.getElementById('fm-drop-zone');
        var fileInput    = document.getElementById('fm-file-input');
        var dropMsg      = document.getElementById('fm-drop-msg');
        // Expose path setter so folder picker can update active upload target live
        window._fmUploadSetPath = function(newPath) {
            FM_PATH_VAL = newPath;
            UPLOAD_URL  = document.getElementById('fm-upload-url').value;
        };
        var qSummary     = document.getElementById('fm-queue-summary');
        var qCount       = document.getElementById('fm-qs-count');
        var qBar         = document.getElementById('fm-qs-bar');
        var qClearBtn    = document.getElementById('fm-queue-clear');
        // ── Queue state ──────────────────────────────────────────────────
        var queue = [];      // [{file, id}]
        var active = false;
        var totalFiles = 0, doneFiles = 0;
        function fmt_bytes(n) {
            if (n < 1024) return n + ' B';
            var u = ['KB','MB','GB','TB'], i = -1;
            do { n /= 1024; i++; } while (n >= 1024 && i < u.length - 1);
            return n.toFixed(n < 10 ? 1 : 0) + ' ' + u[i];
        }
        function refreshSummaryFromDOM() {
            var all  = dropZone.querySelectorAll('.fm-upload-card').length;
            var done = dropZone.querySelectorAll('.fm-upload-card[data-done="1"]').length;
            var err  = dropZone.querySelectorAll('.fm-upload-card[data-done="1"] .fm-status-overlay[style*="rgba(239"]').length;
            var ok   = done - err;
            if (all > 0) {
                qSummary.style.display = 'flex';
                qCount.textContent = done + ' / ' + all;
                qBar.style.width = Math.round((done / all) * 100) + '%';
            } else {
                qSummary.style.display = 'none';
                qBar.style.width = '0%';
                dropMsg.style.display = '';
            }
            totalFiles = all; doneFiles = done;
        }
        function refreshSummary() { refreshSummaryFromDOM(); }
        qClearBtn.addEventListener('click', function () {
            dropZone.querySelectorAll('.fm-upload-card[data-done="1"]').forEach(function (c) {
                c.style.transition = 'opacity 0.15s'; c.style.opacity = '0';
                setTimeout(function() { if (c.parentNode) c.parentNode.removeChild(c); refreshSummaryFromDOM(); }, 150);
            });
        });
        // ── Drag-and-drop events ─────────────────────────────────────────
        ['dragenter','dragover'].forEach(function(ev) {
            dropZone.addEventListener(ev, function(e) {
                e.preventDefault(); e.stopPropagation();
                dropZone.classList.add('fm-drop-active');
            });
        });
        ['dragleave','drop'].forEach(function(ev) {
            dropZone.addEventListener(ev, function(e) {
                e.preventDefault(); e.stopPropagation();
                dropZone.classList.remove('fm-drop-active');
            });
        });
        dropZone.addEventListener('drop', function(e) {
            enqueue(e.dataTransfer.files);
        });
        fileInput.addEventListener('change', function() {
            enqueue(this.files);
            this.value = '';   // reset so same file can be re-selected
        });
        // ── Enqueue files ────────────────────────────────────────────────
        function enqueue(fileList) {
            for (var i = 0; i < fileList.length; i++) {
                var f = fileList[i];
                if (f.size > MAX_SIZE) {
                    toast('Skipped "' + f.name + '": exceeds max size limit.');
                    continue;
                }
                var id  = 'fm-file-' + Date.now() + '-' + i;
                queue.push({ file: f, id: id });
                addCard(f, id);
                totalFiles++;
            }
            if (queue.length) dropMsg.style.display = 'none';
            refreshSummary();
            if (!active) processNext();
        }
        // ── Process queue one file at a time ─────────────────────────────
        function processNext() {
            if (!queue.length) { active = false; return; }
            active = true;
            var item = queue.shift();
            uploadFile(item.file, item.id, function() { doneFiles++; refreshSummary(); processNext(); });
        }
        // ── Upload a single file (chunked if > CHUNK_SIZE) ───────────────
        function uploadFile(file, id, done) {
            var name       = (file.relativePath || file.webkitRelativePath || file.name);
            var totalChunks = Math.ceil(file.size / CHUNK_SIZE) || 1;
            var chunkIdx   = 0;
            var startedAt  = Date.now();
            setStatus(id, 'uploading');
            function sendChunk() {
                var start = chunkIdx * CHUNK_SIZE;
                var end   = Math.min(start + CHUNK_SIZE, file.size);
                // Use slice without MIME type to avoid Safari/Android quirks
                var blob  = file.size > 0 ? file.slice(start, end) : file;
                var fd = new FormData();
                fd.append('token',              TOKEN);
                fd.append('fullpath',           name);
                fd.append('dir',                FM_PATH_VAL);
                fd.append('dzchunkindex',       String(chunkIdx));
                fd.append('dztotalchunkcount',  String(totalChunks));
                fd.append('dzchunksize',        String(CHUNK_SIZE));
                fd.append('dztotalfilesize',    String(file.size));
                fd.append('dzuuid',             id);
                fd.append('file', blob, file.name);  // always use original name
                var xhr = new XMLHttpRequest();
                xhr.open('POST', UPLOAD_URL, true);
                // Do NOT set Content-Type — let the browser set multipart boundary
                xhr.timeout = 120000;
                xhr.upload.onprogress = function(e) {
                    if (!e.lengthComputable) return;
                    var chunkProg = e.loaded / e.total;
                    var overallBytes = start + e.loaded;
                    var overall   = ((chunkIdx + chunkProg) / totalChunks) * 100;
                    var elapsed = (Date.now() - startedAt) / 1000;
                    var speed = elapsed > 0.3 ? overallBytes / elapsed : 0;
                    setProgress(id, Math.round(overall), overallBytes, file.size, speed);
                };
                xhr.ontimeout = function() {
                    setStatus(id, 'error', 'Timed out');
                    toast('"' + file.name + '" timed out. Try again.');
                    done();
                };
                xhr.onerror = function() {
                    setStatus(id, 'error', 'Network error');
                    toast('"' + file.name + '" — network error. Check connection.');
                    done();
                };
                xhr.onload = function() {
                    if (xhr.status === 413) {
                        setStatus(id, 'error', 'File too large');
                        toast('"' + file.name + '" rejected: server body size limit exceeded. Increase nginx client_max_body_size / PHP post_max_size.');
                        done(); return;
                    }
                    if (xhr.status === 403) {
                        setStatus(id, 'error', '403 Forbidden');
                        toast('"' + file.name + '" — access denied. Check folder permissions.');
                        done(); return;
                    }
                    if (xhr.status < 200 || xhr.status >= 300) {
                        setStatus(id, 'error', 'HTTP ' + xhr.status);
                        toast('"' + file.name + '" failed (HTTP ' + xhr.status + ').');
                        done(); return;
                    }
                    // Parse JSON response
                    var resp;
                    try { resp = JSON.parse(xhr.responseText); }
                    catch(e) {
                        setStatus(id, 'error', 'Bad response');
                        toast('"' + file.name + '" — unexpected server response: ' + xhr.responseText.substring(0, 120));
                        done(); return;
                    }
                    if (resp.status === 'error') {
                        setStatus(id, 'error', resp.info || 'Server error');
                        toast('"' + file.name + '" — ' + (resp.info || 'Server error'));
                        done(); return;
                    }
                    // Chunk succeeded
                    chunkIdx++;
                    if (chunkIdx < totalChunks) {
                        sendChunk();  // send next chunk
                    } else {
                        setStatus(id, 'success');
                        setProgress(id, 100, file.size, file.size, 0);
                        done();
                    }
                };
                xhr.send(fd);
            }
            sendChunk();
        }
        // ── UI helpers ───────────────────────────────────────────────────
        function addCard(file, id) {
            var card = document.createElement('div');
            card.id  = id;
            card.className = 'fm-upload-card';
            card.title = file.name;
            var isImage = /\.(jpg|jpeg|png|gif|webp|bmp|svg|avif|ico)$/i.test(file.name);
            var thumb = document.createElement('div');
            thumb.className = 'fm-thumb-wrap';
            if (isImage) {
                var img = document.createElement('img');
                img.alt = file.name;
                // Smooth load: only show after fully loaded
                img.onload = function() { img.classList.add('fm-img-loaded'); };
                var reader = new FileReader();
                reader.onload = function(e) { img.src = e.target.result; };
                reader.readAsDataURL(file);
                thumb.appendChild(img);
            } else {
                var icon = document.createElement('i');
                var ext  = (file.name.split('.').pop() || '').toLowerCase();
                var iconClass = 'fa-file-o';
                if (/zip|tar|gz|rar|7z/.test(ext))   iconClass = 'fa-file-archive-o';
                else if (/pdf/.test(ext))              iconClass = 'fa-file-pdf-o';
                else if (/doc|docx/.test(ext))         iconClass = 'fa-file-word-o';
                else if (/xls|xlsx/.test(ext))         iconClass = 'fa-file-excel-o';
                else if (/mp4|mov|avi|mkv/.test(ext))  iconClass = 'fa-file-video-o';
                else if (/mp3|wav|flac/.test(ext))     iconClass = 'fa-file-audio-o';
                else if (/js|php|py|sh|css|html/.test(ext)) iconClass = 'fa-file-code-o';
                else if (/txt|md/.test(ext))           iconClass = 'fa-file-text-o';
                icon.className = 'fa ' + iconClass;
                icon.style.cssText = 'font-size:26px;color:var(--ios-gold);';
                thumb.appendChild(icon);
            }
            var meta = document.createElement('div');
            meta.className = 'fm-card-meta';
            var nameEl = document.createElement('div');
            nameEl.className = 'fm-card-name';
            nameEl.textContent = file.name;
            var subEl = document.createElement('div');
            subEl.className = 'fm-card-sub';
            subEl.textContent = fmt_bytes(file.size);
            meta.appendChild(nameEl);
            meta.appendChild(subEl);
            var prog = document.createElement('div');
            prog.className = 'fm-prog-wrap';
            var bar = document.createElement('div');
            bar.className = 'fm-prog-bar';
            prog.appendChild(bar);
            var overlay = document.createElement('div');
            overlay.className = 'fm-status-overlay';
            card.appendChild(thumb);
            card.appendChild(meta);
            card.appendChild(prog);
            card.appendChild(overlay);
            dropZone.insertBefore(card, dropMsg);
        }
        function setProgress(id, pct, loadedBytes, totalBytes, speed) {
            var card = document.getElementById(id);
            if (!card) return;
            var bar = card.querySelector('.fm-prog-bar');
            if (bar) bar.style.width = pct + '%';
            var subEl = card.querySelector('.fm-card-sub');
            if (subEl && totalBytes) {
                var txt = fmt_bytes(loadedBytes || 0) + ' / ' + fmt_bytes(totalBytes) + ' (' + pct + '%)';
                if (speed > 1024) txt += ' · ' + fmt_bytes(speed) + '/s';
                subEl.textContent = txt;
            }
        }
        function setStatus(id, status, msg) {
            var card = document.getElementById(id);
            if (!card) return;
            var overlay = card.querySelector('.fm-status-overlay');
            if (!overlay) return;
            if (status === 'uploading') {
                overlay.style.display = 'none';
                card.style.opacity = '1';
            } else if (status === 'success') {
                overlay.innerHTML = '<i class="fa fa-check-circle" style="color:#22C55E;font-size:18px;"></i>';
                overlay.style.background = 'rgba(34,197,94,0.16)';
                overlay.style.display = 'flex';
                card.dataset.done = '1';
                var subEl = card.querySelector('.fm-card-sub');
                if (subEl) subEl.textContent = 'Uploaded \u2713';
                var removeBtn = document.createElement('button');
                removeBtn.type = 'button';
                removeBtn.title = 'Dismiss';
                removeBtn.style.cssText = 'position:absolute;top:4px;right:4px;z-index:2;background:rgba(0,0,0,0.22);border:none;border-radius:50%;width:20px;height:20px;cursor:pointer;display:flex;align-items:center;justify-content:center;padding:0;color:#fff;font-size:10px;line-height:1;';
                removeBtn.innerHTML = '<i class="fa fa-times"></i>';
                removeBtn.addEventListener('click', function() {
                    card.style.transition = 'opacity 0.2s,transform 0.2s';
                    card.style.opacity = '0'; card.style.transform = 'scale(0.9)';
                    setTimeout(function() { if (card.parentNode) card.parentNode.removeChild(card); refreshSummaryFromDOM(); }, 200);
                });
                card.style.position = 'relative';
                card.appendChild(removeBtn);
            } else if (status === 'error') {
                overlay.innerHTML = '<i class="fa fa-times-circle" style="color:#EF4444;"></i>' + (msg ? '<span class="fm-status-msg">' + msg + '</span>' : '');
                overlay.style.background = 'rgba(239,68,68,0.16)';
                overlay.style.display = 'flex';
                card.dataset.done = '1';
                var subEl2 = card.querySelector('.fm-card-sub');
                if (subEl2) subEl2.textContent = 'Failed';
            }
        }
    })();
    </script>
<?php
    fm_show_footer();
    exit;
}
if (isset($_POST['copy']) && !FM_READONLY) {
    $copy_files = isset($_POST['file']) ? $_POST['file'] : null;
    if (!is_array($copy_files) || empty($copy_files)) {
        fm_set_msg(lng('Nothing selected'), 'alert');
        $FM_PATH = FM_PATH;
        fm_redirect(FM_SELF_URL . '?dir=' . urlencode($FM_PATH));
    }
    fm_show_header(); 
    fm_show_nav_path(FM_PATH); 
?>
    <div class="path" style="margin-bottom:14px;">
        <div class="card">
            <div class="card-header">
                <h6><?php echo lng('Copying') ?></h6>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <input type="hidden" name="dir" value="<?php echo fm_enc(FM_PATH) ?>">
                    <input type="hidden" name="finish" value="1">
                    <?php
                    foreach ($copy_files as $cf) {
                        echo '<input type="hidden" name="file[]" value="' . fm_enc($cf) . '">' . PHP_EOL;
                    }
                    ?>
                    <p class="break-word"><strong><?php echo lng('Files') ?></strong>: <b><?php echo implode('</b>, <b>', $copy_files) ?></b></p>
                    <p class="break-word"><strong><?php echo lng('SourceFolder') ?></strong>: <?php echo fm_enc(fm_convert_win(FM_ROOT_PATH . '/' . FM_PATH)) ?><br>
                        <label for="inp_copy_to"><strong><?php echo lng('DestinationFolder') ?></strong>:</label>
                        <?php echo FM_ROOT_PATH ?>/<input type="text" name="copy_to" id="inp_copy_to" value="<?php echo fm_enc(FM_PATH) ?>">
                    </p>
                    <p class="custom-checkbox custom-control"><input type="checkbox" name="move" value="1" id="js-move-files" class="custom-control-input">
                        <label for="js-move-files" class="custom-control-label ms-2"><?php echo lng('Move') ?></label>
                    </p>
                    <p>
                        <b><a href="?dir=<?php echo urlencode(FM_PATH) ?>" class="btn btn-act-purple-outline"><i class="fa fa-times-circle"></i> <?php echo lng('Cancel') ?></a></b>&nbsp;
                        <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                        <button type="submit" class="btn btn-success" style="border-radius:10px;font-weight:500;"><i class="fa fa-check-circle"></i> <?php echo lng('Copy') ?></button>
                    </p>
                </form>
            </div>
        </div>
    </div>
<?php
    fm_show_footer();
    exit;
}
if (isset($_GET['copy']) && !isset($_GET['finish']) && !FM_READONLY) {
    $copy = $_GET['copy'];
    $copy = fm_clean_path($copy);
    if ($copy == '' || !file_exists(FM_ROOT_PATH . '/' . $copy)) {
        fm_set_msg(lng('File not found'), 'error');
        $FM_PATH = FM_PATH;
        fm_redirect(FM_SELF_URL . '?dir=' . urlencode($FM_PATH));
    }
    fm_show_header(); 
    fm_show_nav_path(FM_PATH); 
?>
    <div class="path" style="margin-bottom:14px;">
        <p><b>Copying</b></p>
        <p class="break-word">
            <strong>Source path:</strong> <?php echo fm_enc(fm_convert_win(FM_ROOT_PATH . '/' . $copy)) ?><br>
            <strong>Destination folder:</strong> <?php echo fm_enc(fm_convert_win(FM_ROOT_PATH . '/' . FM_PATH)) ?>
        </p>
        <p>
            <b><a href="?dir=<?php echo urlencode(FM_PATH) ?>&amp;copy=<?php echo urlencode($copy) ?>&amp;finish=1" style="display:inline-flex;align-items:center;gap:5px;background:#162440;color:#fff;padding:7px 14px;border-radius:8px;font-weight:600;font-size:13px;text-decoration:none;"><i class="fa fa-check-circle"></i> Copy</a></b> &nbsp;
            <b><a href="?dir=<?php echo urlencode(FM_PATH) ?>&amp;copy=<?php echo urlencode($copy) ?>&amp;finish=1&amp;move=1" style="display:inline-flex;align-items:center;gap:5px;background:#162440;color:#fff;padding:7px 14px;border-radius:8px;font-weight:600;font-size:13px;text-decoration:none;"><i class="fa fa-check-circle"></i> Move</a></b> &nbsp;
            <b><a href="?dir=<?php echo urlencode(FM_PATH) ?>" style="display:inline-flex;align-items:center;gap:5px;background:rgba(239,68,68,0.08);color:#DC2626;border:1px solid rgba(239,68,68,0.22);padding:7px 14px;border-radius:8px;font-weight:600;font-size:13px;text-decoration:none;"><i class="fa fa-times-circle"></i> Cancel</a></b>
        </p>
        <p><i><?php echo lng('Select folder') ?></i></p>
        <ul class="folders break-word">
            <?php
            if ($parent !== false) {
            ?>
                <li><a href="?dir=<?php echo urlencode($parent) ?>&amp;copy=<?php echo urlencode($copy) ?>" style="color:#C9A84C!important;font-weight:600;"><i class="fa fa-chevron-circle-left" style="color:#C9A84C;"></i> ..</a></li>
            <?php
            }
            foreach ($folders as $f) {
            ?>
                <li>
                    <a href="?dir=<?php echo urlencode(trim(FM_PATH . '/' . $f, '/')) ?>&amp;copy=<?php echo urlencode($copy) ?>" style="color:#C9A84C!important;font-weight:500;"><i class="fa fa-folder-o" style="color:#C9A84C;"></i> <?php echo fm_convert_win(fm_enc($f)) ?></a>
                </li>
            <?php
            }
            ?>
        </ul>
    </div>
<?php
    fm_show_footer();
    exit;
}
if (isset($_GET['settings']) && !FM_READONLY) {
    $settingsTab = isset($_GET['settings']) && is_string($_GET['settings']) && $_GET['settings'] !== '' && $_GET['settings'] !== '1'
        ? $_GET['settings']
        : 'general';
    $validTabs = ['general', 'app', 'users', 'security', 'notifications'];
    if (!in_array($settingsTab, $validTabs)) $settingsTab = 'general';
    fm_show_header(); 
    fm_show_nav_path(FM_PATH); 
    global $cfg, $lang, $lang_list, $auth_users;
    $tabUrl = function($tab) { return '?settings=' . $tab . '&dir=' . urlencode(FM_PATH); };
?>
    <!-- Settings Sub-nav -->
    <div class="fm-settings-shell" style="max-width:560px;margin:0 auto;padding:18px 16px 8px;">
        <div class="fm-settings-nav" style="display:flex;align-items:center;justify-content:space-between;margin-bottom:18px;flex-wrap:nowrap;gap:10px;">
            <div class="settings-tabs-scroll" style="display:flex;gap:6px;background:var(--ios-fill);padding:5px;border-radius:12px;overflow-x:auto;-webkit-overflow-scrolling:touch;scrollbar-width:none;-ms-overflow-style:none;flex:1;min-width:0;">
                <?php
                $tabs = [
                    'general'       => ['fa-cog',           'General'],
                    'security'      => ['fa-lock',          'Security'],
                    'app'           => ['fa-sliders',       'App Config'],
                    'users'         => ['fa-users',         'Users'],
                    'notifications' => ['fa-bell',          'Notifications'],
                ];
                foreach ($tabs as $key => [$icon, $label]):
                    $active = ($settingsTab === $key);
                ?>
                <a href="<?php echo $tabUrl($key); ?>" class="settings-tab-link settings-tab-<?php echo $key; ?><?php echo $active ? ' active' : ''; ?>"
                   style="display:flex;align-items:center;gap:6px;padding:7px 16px;border-radius:9px;font-size:13px;font-weight:600;text-decoration:none;transition:all 0.18s;white-space:nowrap;flex-shrink:0;">
                    <i class="fa <?php echo $icon; ?>" style="font-size:12px;"></i> <?php echo $label; ?>
                </a>
                <?php endforeach; ?>
            </div>
            <style>
                .settings-tabs-scroll::-webkit-scrollbar { display: none; }
                .settings-tabs-scroll { cursor: grab; }
                .settings-tabs-scroll.fm-dragging { cursor: grabbing; user-select: none; }
                .settings-tab-link { color: var(--ios-secondary); }
                .settings-tab-link.active.settings-tab-general { background: rgba(22,36,64,0.10); color: #162440; box-shadow: 0 1px 4px rgba(22,36,64,0.10); }
                .settings-tab-link.active.settings-tab-security { background: rgba(239,68,68,0.12); color: #B91C1C; box-shadow: 0 1px 4px rgba(22,36,64,0.10); }
                .settings-tab-link.active.settings-tab-app     { background: rgba(201,168,76,0.16); color: #8A6D00; box-shadow: 0 1px 4px rgba(22,36,64,0.10); }
                .settings-tab-link.active.settings-tab-users   { background: rgba(62,92,134,0.14); color: #3E5C86; box-shadow: 0 1px 4px rgba(22,36,64,0.10); }
                html[data-theme="dark"] .settings-tab-link.active.settings-tab-general { background: rgba(90,140,220,0.22); color: #9db8e8; box-shadow: none; }
                html[data-theme="dark"] .settings-tab-link.active.settings-tab-security { background: rgba(239,68,68,0.22); color: #f3a9a9; box-shadow: none; }
                html[data-theme="dark"] .settings-tab-link.active.settings-tab-app     { background: rgba(201,168,76,0.22); color: #e8cd7a; box-shadow: none; }
                html[data-theme="dark"] .settings-tab-link.active.settings-tab-users   { background: rgba(120,150,210,0.22); color: #aec2ea; box-shadow: none; }
                .settings-tab-link.active.settings-tab-api           { background: rgba(16,146,105,0.14); color: #0f7a58; box-shadow: 0 1px 4px rgba(22,36,64,0.10); }
                .settings-tab-link.active.settings-tab-notifications { background: rgba(124,92,214,0.14); color: #5b3fb8; box-shadow: 0 1px 4px rgba(22,36,64,0.10); }
                html[data-theme="dark"] .settings-tab-link.active.settings-tab-api           { background: rgba(46,196,150,0.22); color: #7fe0bf; box-shadow: none; }
                html[data-theme="dark"] .settings-tab-link.active.settings-tab-notifications { background: rgba(160,130,240,0.22); color: #c9b8f5; box-shadow: none; }
                .fm-role-badge.fm-role-admin { background: rgba(22,36,64,0.10); color: #162440; }
                html[data-theme="dark"] .fm-role-badge.fm-role-admin { background: rgba(238,241,246,0.12); color: var(--ios-label); }
                /* ── Desktop-only vertical sidebar layout (no change on
                   mobile/tablet, which keep the horizontal scroll-tabs) ── */
                @media (min-width: 1025px) {
                    .fm-settings-shell {
                        max-width: 900px !important;
                        display: flex !important;
                        align-items: flex-start !important;
                        gap: 32px !important;
                    }
                    .fm-settings-nav {
                        flex-direction: column !important;
                        align-items: stretch !important;
                        justify-content: flex-start !important;
                        width: 220px !important;
                        flex-shrink: 0 !important;
                        position: sticky;
                        top: 84px;
                        gap: 4px !important;
                    }
                    .fm-settings-nav .settings-tabs-scroll {
                        flex-direction: column !important;
                        overflow-x: visible !important;
                        overflow-y: visible !important;
                        flex: none !important;
                        width: 100% !important;
                        cursor: default !important;
                    }
                    .fm-settings-nav .settings-tab-link {
                        width: 100% !important;
                        justify-content: flex-start !important;
                        padding: 10px 14px !important;
                    }
                    .fm-settings-nav .fm-settings-close {
                        margin-top: 8px;
                        padding: 8px 14px;
                    }
                    .fm-settings-content {
                        flex: 1 !important;
                        min-width: 0 !important;
                        max-width: 560px;
                    }
                }
            </style>
            <a href="?dir=<?php echo FM_PATH ?>" class="fm-settings-close" style="color:var(--ios-red);font-size:13px;font-weight:500;text-decoration:none;white-space:nowrap;flex-shrink:0;">
                <i class="fa fa-times-circle-o"></i> Close
            </a>
        </div>
        <script>
        (function() {
            var el = document.querySelector('.settings-tabs-scroll');
            if (!el) return;
            // Desktop mice have no touch-drag and often no horizontal wheel —
            // map plain vertical wheel to horizontal scroll here so the tab
            // bar is reachable without a trackpad.
            el.addEventListener('wheel', function(e) {
                if (Math.abs(e.deltaY) > Math.abs(e.deltaX)) {
                    el.scrollLeft += e.deltaY;
                    e.preventDefault();
                }
            }, { passive: false });
            // Click-and-drag scrolling for mouse users.
            var isDown = false, startX = 0, startScroll = 0;
            el.addEventListener('mousedown', function(e) {
                isDown = true;
                el.classList.add('fm-dragging');
                startX = e.pageX;
                startScroll = el.scrollLeft;
            });
            window.addEventListener('mouseup', function() {
                isDown = false;
                el.classList.remove('fm-dragging');
            });
            window.addEventListener('mousemove', function(e) {
                if (!isDown) return;
                e.preventDefault();
                el.scrollLeft = startScroll - (e.pageX - startX);
            });
        })();
        </script>
        <div class="fm-settings-content">
    <?php if ($settingsTab === 'general'): ?>
    <!-- ═══════════════════════ APPEARANCE ═══════════════════════ -->
        <div class="card" style="border-radius:16px;overflow:hidden;margin-bottom:18px;">
            <h6 class="card-header" style="padding:14px 18px;font-weight:700;">
                <i class="fa fa-paint-brush" style="color:#C9A84C;margin-right:7px;"></i>Appearance
            </h6>
            <div class="card-body">
                <div class="row align-items-center">
                    <label for="js-dark-theme" class="col-sm-7 col-form-label" style="font-size:13px;font-weight:600;color:var(--ios-label);">
                        Dark Mode
                        <div style="font-size:11.5px;font-weight:400;color:var(--ios-secondary);margin-top:2px;">Switch between light and dark theme. Applies instantly on this device.</div>
                    </label>
                    <div class="col-sm-5" style="display:flex;justify-content:flex-start;">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="js-dark-theme" onchange="window._fmThemeOriginEl=this;fmSetTheme(this.checked ? 'dark' : 'light',this)" style="width:42px;height:22px;cursor:pointer;" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
        document.addEventListener('DOMContentLoaded', function () {
            var sw = document.getElementById('js-dark-theme');
            if (sw) { sw.checked = (fmGetTheme() === 'dark'); }
        });
        </script>
    <!-- ═══════════════════════ GENERAL SETTINGS ═══════════════════════ -->
        <div class="card" style="border-radius:16px;overflow:hidden;margin-bottom:24px;">
            <h6 class="card-header" style="padding:14px 18px;font-weight:700;">
                <i class="fa fa-cog" style="color:#C9A84C;margin-right:7px;"></i>General Settings
            </h6>
            <div class="card-body">
                <form id="js-settings-form" action="" method="post" data-type="ajax" onsubmit="return save_settings(this)">
                    <input type="hidden" name="type" value="settings" aria-label="hidden" aria-hidden="true">
                    <div class="mt-2 mb-3 row align-items-center">
                        <label for="js-error-report" class="col-sm-7 col-form-label" style="font-size:13px;font-weight:600;color:var(--ios-label);"><?php echo lng('ErrorReporting') ?></label>
                        <div class="col-sm-5">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="js-error-report" name="js-error-report" value="true" <?php echo $report_errors ? 'checked' : ''; ?> />
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row align-items-center">
                        <label for="js-show-hidden" class="col-sm-7 col-form-label" style="font-size:13px;font-weight:600;color:var(--ios-label);"><?php echo lng('ShowHiddenFiles') ?></label>
                        <div class="col-sm-5">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="js-show-hidden" name="js-show-hidden" value="true" <?php echo $show_hidden_files ? 'checked' : ''; ?> />
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 row align-items-center">
                        <label for="js-hide-cols" class="col-sm-7 col-form-label" style="font-size:13px;font-weight:600;color:var(--ios-label);"><?php echo lng('HideColumns') ?></label>
                        <div class="col-sm-5">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="js-hide-cols" name="js-hide-cols" value="true" <?php echo $hide_Cols ? 'checked' : ''; ?> />
                            </div>
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-success" style="border-radius:10px;padding:10px 28px;font-weight:600;font-size:14px;">
                                <i class="fa fa-check-circle"></i> <?php echo lng('Save'); ?>
                            </button>
                            <div class="text-body-secondary" style="font-size:11.5px;margin-top:8px;">* <?php echo lng('Sometimes the save action may not work on the first try, so please attempt it again') ?>.</div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <?php elseif ($settingsTab === 'security'): ?>
    <!-- ═══════════════════════ TWO-FACTOR AUTH (TOTP) ═══════════════════════ -->
        <div class="card" style="border-radius:16px;overflow:hidden;margin-bottom:24px;">
            <h6 class="card-header" style="padding:14px 18px;font-weight:700;">
                <i class="fa fa-key" style="color:#C9A84C;margin-right:7px;"></i>Two-Factor Authentication
            </h6>
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-sm-8">
                        <div style="font-size:13px;font-weight:600;color:var(--ios-label);">Authenticator App (TOTP)</div>
                        <div id="totpStatusText" style="font-size:11.5px;font-weight:400;color:var(--ios-secondary);margin-top:2px;">
                            <?php echo fm_totp_is_enabled($_SESSION[FM_SESSION_ID]['logged']) ? 'Enabled — a 6-digit code is required at every sign-in.' : 'Not enabled. Add an extra step to your login using Google Authenticator, Authy, or any TOTP app.'; ?>
                        </div>
                    </div>
                    <div class="col-sm-4" style="text-align:right;">
                        <a href="<?php echo $tabUrl('security'); ?>&totp_setup=1" id="totpActionBtn" class="fm-btn <?php echo fm_totp_is_enabled($_SESSION[FM_SESSION_ID]['logged']) ? 'fm-btn-outline' : 'fm-btn-primary'; ?>" style="height:34px;padding:0 16px;font-size:12.5px;" onclick="return fmOpenTotpModal(event)">
                            <i class="fa fa-shield"></i> <?php echo fm_totp_is_enabled($_SESSION[FM_SESSION_ID]['logged']) ? 'Manage' : 'Set Up'; ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="totpModal" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="totpModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document" style="max-width:420px;">
                <div class="modal-content" style="border-radius:16px;overflow:hidden;">
                    <div class="modal-header" style="padding:14px 18px;border-bottom:0.5px solid var(--ios-sep);background:var(--ios-bg2);">
                        <h5 class="modal-title" id="totpModalLabel" style="font-size:15px;font-weight:700;margin:0;color:var(--ios-label);">
                            <i class="fa fa-shield" style="color:#C9A84C;"></i> Two-Factor Authentication
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="totpModalBody" style="padding:20px;min-height:140px;">
                        <div style="text-align:center;padding:30px 0;color:var(--ios-secondary);">
                            <i class="fa fa-spinner fa-spin" style="font-size:20px;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
        function fmOpenTotpModal(e) {
            if (e && e.preventDefault) e.preventDefault();
            var body = document.getElementById('totpModalBody');
            var modalEl = document.getElementById('totpModal');
            if (!body || !modalEl || typeof bootstrap === 'undefined') return true; // fall back to the plain link
            body.innerHTML = '<div style="text-align:center;padding:30px 0;color:var(--ios-secondary);"><i class="fa fa-spinner fa-spin" style="font-size:20px;"></i></div>';
            var modal = bootstrap.Modal.getInstance(modalEl) || new bootstrap.Modal(modalEl);
            modal.show();
            fetch('?totp_setup_ajax=1', { credentials: 'same-origin' })
                .then(function(r) { return r.text(); })
                .then(function(html) { body.innerHTML = html; })
                .catch(function() {
                    body.innerHTML = '<div style="padding:10px 0;color:#dc2626;text-align:center;">Couldn\'t load. Please try again.</div>';
                });
            return false;
        }
        // Delegated handler: the enable/disable forms are injected dynamically
        // into #totpModalBody, so bind on document rather than on the forms directly.
        document.addEventListener('submit', function(ev) {
            var form = ev.target;
            if (!form || (form.id !== 'totpEnableForm' && form.id !== 'totpDisableForm')) return;
            ev.preventDefault();
            var btn = form.querySelector('button[type="submit"]');
            var origHtml = btn ? btn.innerHTML : '';
            if (btn) { btn.disabled = true; btn.innerHTML = '<i class="fa fa-spinner fa-spin"></i>'; }
            var payload = new URLSearchParams(new FormData(form));
            fetch('', { method: 'POST', body: payload, headers: {'Content-Type': 'application/x-www-form-urlencoded'} })
                .then(function(r) { return r.json(); })
                .then(function(d) {
                    var body = document.getElementById('totpModalBody');
                    if (body && typeof d.html === 'string') body.innerHTML = d.html;
                    if (typeof toast === 'function') toast(d.msg || (d.ok ? 'Done.' : 'Something went wrong.'), d.ok ? 'ok' : 'error');
                    if (typeof d.enabled === 'boolean') {
                        var statusText = document.getElementById('totpStatusText');
                        var actionBtn = document.getElementById('totpActionBtn');
                        if (statusText) {
                            statusText.textContent = d.enabled
                                ? 'Enabled — a 6-digit code is required at every sign-in.'
                                : 'Not enabled. Add an extra step to your login using Google Authenticator, Authy, or any TOTP app.';
                        }
                        if (actionBtn) {
                            actionBtn.className = 'fm-btn ' + (d.enabled ? 'fm-btn-outline' : 'fm-btn-primary');
                            actionBtn.innerHTML = '<i class="fa fa-shield"></i> ' + (d.enabled ? 'Manage' : 'Set Up');
                        }
                    }
                })
                .catch(function() {
                    if (btn) { btn.disabled = false; btn.innerHTML = origHtml; }
                    if (typeof toast === 'function') toast('Network error — try again.', 'error');
                });
        });
        </script>
    <?php if (FM_IS_ADMIN): ?>
    <!-- ═══════════════════════ PUBLIC UPLOAD PORTAL ═══════════════════════ -->
        <div class="card" style="border-radius:16px;overflow:hidden;margin-bottom:24px;">
            <h6 class="card-header" style="padding:14px 18px;font-weight:700;">
                <i class="fa fa-cloud-upload" style="color:#C9A84C;margin-right:7px;"></i>Public Upload Portal
            </h6>
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-sm-8">
                        <div style="font-size:13px;font-weight:600;color:var(--ios-label);">Allow Password-Only Uploads</div>
                        <div style="font-size:11.5px;font-weight:400;color:var(--ios-secondary);margin-top:2px;">
                            Lets anyone with the upload password send files to the <code>upload</code> folder without signing in — no username needed, just the password below.
                        </div>
                    </div>
                    <div class="col-sm-4" style="text-align:right;">
                        <div class="form-check form-switch" style="display:inline-block;">
                            <input class="form-check-input" type="checkbox" role="switch" id="js-public-upload-enabled" style="width:42px;height:22px;cursor:pointer;" <?php echo !empty($cfg->data['public_upload_enabled']) ? 'checked' : ''; ?> onchange="fmTogglePublicUpload(this)" />
                        </div>
                    </div>
                </div>
                <hr style="border-color:var(--ios-sep);margin:16px 0;">
                <div style="font-size:11.5px;font-weight:400;color:var(--ios-secondary);margin-bottom:14px;">
                    Set the password required to use the portal (also doubles as an extra check on the web UI's normal Upload page). Leave blank to disable uploads entirely.
                </div>
                <div style="display:flex;gap:6px;">
                    <input type="password" id="js-upload-password" class="form-control" placeholder="<?php echo !empty($cfg->data['upload_password_hash']) ? 'Password set — enter new to change' : 'No password set'; ?>" style="font-size:12.5px;">
                    <button type="button" class="fm-btn fm-btn-primary" style="height:38px;padding:0 14px;font-size:12px;white-space:nowrap;" onclick="fmSaveUploadPassword()">Save</button>
                    <?php if (!empty($cfg->data['upload_password_hash'])): ?>
                    <button type="button" class="fm-btn fm-btn-outline" style="height:38px;padding:0 12px;font-size:12px;white-space:nowrap;" onclick="fmClearUploadPassword()">Remove</button>
                    <?php endif; ?>
                </div>
                <?php if (!empty($cfg->data['public_upload_enabled']) && !empty($cfg->data['upload_password_hash'])): ?>
                <div style="font-size:12px;color:var(--ios-secondary);margin-top:14px;">
                    Portal link: <code style="font-size:11.5px;"><?php echo fm_enc(FM_ROOT_URL . '/' . basename($_SERVER['PHP_SELF']) . '?upload_portal=1'); ?></code>
                </div>
                <?php elseif (!empty($cfg->data['public_upload_enabled'])): ?>
                <div style="font-size:11.5px;color:#dc2626;margin-top:14px;">
                    <i class="fa fa-exclamation-triangle"></i> Set a password above to activate the portal — it stays off until one is set.
                </div>
                <?php endif; ?>
            </div>
        </div>
        <script>
        function fmTogglePublicUpload(cb) {
            var body = new URLSearchParams();
            body.set('ajax', 'true');
            body.set('token', '<?php echo $_SESSION['token']; ?>');
            body.set('type', 'upload_password_settings');
            body.set('upload_password_action', 'toggle_public');
            body.set('enabled', cb.checked ? 'true' : 'false');
            fetch('', { method: 'POST', body: body, credentials: 'same-origin' })
                .then(function(r) { return r.json(); })
                .then(function(data) { if (!data.success) { alert(data.error || 'Failed'); cb.checked = !cb.checked; } else { location.reload(); } })
                .catch(function() { cb.checked = !cb.checked; alert('Network error — try again.'); });
        }
        </script>
        <script>
        function fmSaveUploadPassword() {
            var pw = document.getElementById('js-upload-password').value;
            if (pw === '') { alert('Enter a password, or use Remove to clear it.'); return; }
            var body = new URLSearchParams();
            body.set('ajax', 'true');
            body.set('token', '<?php echo $_SESSION['token']; ?>');
            body.set('type', 'upload_password_settings');
            body.set('upload_password_action', 'set_password');
            body.set('password', pw);
            fetch('', { method: 'POST', body: body, credentials: 'same-origin' })
                .then(function(r) { return r.json(); })
                .then(function(data) { if (!data.success) alert(data.error || 'Failed to save'); else location.reload(); })
                .catch(function() { alert('Network error — try again.'); });
        }
        function fmClearUploadPassword() {
            if (!confirm('Remove the upload password?')) return;
            var body = new URLSearchParams();
            body.set('ajax', 'true');
            body.set('token', '<?php echo $_SESSION['token']; ?>');
            body.set('type', 'upload_password_settings');
            body.set('upload_password_action', 'set_password');
            body.set('password', '');
            fetch('', { method: 'POST', body: body, credentials: 'same-origin' })
                .then(function(r) { return r.json(); })
                .then(function() { location.reload(); })
                .catch(function() { alert('Network error — try again.'); });
        }
        </script>
    <?php endif; ?>
    <!-- ═══════════════════════ ACTIVE SESSIONS ═══════════════════════ -->
        <div class="card" style="border-radius:16px;overflow:hidden;margin-bottom:24px;">
            <h6 class="card-header d-flex justify-content-between align-items-center" style="padding:14px 18px;font-weight:700;">
                <span><i class="fa fa-desktop" style="color:#C9A84C;margin-right:7px;"></i>Active Sessions</span>
                <?php if (FM_IS_ADMIN): ?>
                <div style="display:flex;gap:6px;background:var(--ios-fill);padding:3px;border-radius:9px;">
                    <button type="button" class="fm-btn fm-btn-outline session-scope-btn active" data-scope="own" onclick="setSessionScope('own',this)" style="height:28px;padding:0 12px;font-size:11.5px;border:none;">Mine</button>
                    <button type="button" class="fm-btn fm-btn-outline session-scope-btn" data-scope="all" onclick="setSessionScope('all',this)" style="height:28px;padding:0 12px;font-size:11.5px;border:none;">Everyone</button>
                </div>
                <?php endif; ?>
            </h6>
            <div class="card-body" style="padding:18px;">
                <div id="session-list-toolbar" style="display:none;align-items:center;justify-content:space-between;gap:10px;margin-bottom:12px;">
                    <span id="session-count-label" style="font-size:11.5px;color:var(--ios-secondary);font-weight:600;"></span>
                    <button type="button" id="session-kill-others-btn" class="fm-btn fm-btn-outline" style="height:28px;padding:0 12px;font-size:11.5px;color:var(--ios-red);border-color:rgba(239,68,68,0.3);" onclick="killAllOthers(this)">
                        <i class="fa fa-power-off"></i> Sign out other sessions
                    </button>
                </div>
                <div id="session-list-loading" style="text-align:center;padding:24px;color:var(--ios-secondary);font-size:13px;">
                    <i class="fa fa-spinner fa-spin"></i> Loading sessions…
                </div>
                <div id="session-list-rows" style="display:none;border:0.5px solid var(--ios-sep);border-radius:12px;overflow:hidden;"></div>
                <div id="session-list-error" style="display:none;padding:12px;border-radius:8px;margin-top:8px;">
                    <div id="session-list-error-msg" style="font-size:13px;margin-bottom:8px;"></div>
                    <button type="button" class="fm-btn fm-btn-outline" style="height:28px;padding:0 12px;font-size:11.5px;" onclick="loadSessions()"><i class="fa fa-refresh"></i> Retry</button>
                </div>
            </div>
        </div>
        <style>
            .session-scope-btn.active { background: #162440 !important; color: #fff !important; }
            html[data-theme="dark"] .session-scope-btn.active { background: rgba(228,193,105,0.22) !important; color: #E4C169 !important; }
            .session-row { display:flex; align-items:center; justify-content:space-between; gap:10px; padding:12px 14px; border-bottom:0.5px solid var(--ios-sep); }
            .session-row:last-child { border-bottom:none; }
            .session-row.is-current { background: rgba(76,175,80,0.08); }
            html[data-theme="dark"] .session-row.is-current { background: rgba(76,175,80,0.10); }
            .session-row.fm-row-removing { opacity:0; transform:translateX(8px); transition:opacity 0.25s ease, transform 0.25s ease; }
            #session-list-error { color:var(--ios-red); background:rgba(198,40,40,0.06); border:1px solid rgba(198,40,40,0.18); }
            html[data-theme="dark"] #session-list-error { background:rgba(239,83,80,0.10); border-color:rgba(239,83,80,0.28); }
            .session-device-icon { width:32px;height:32px;border-radius:9px;flex-shrink:0;display:flex;align-items:center;justify-content:center;background:var(--ios-fill);color:var(--ios-gold);font-size:14px;margin-right:10px; }
        </style>
        <script>
        var __sessionScope = 'own';
        var __sessionRefreshTimer = null;
        var __sessionListInFlight = false;
        function setSessionScope(scope, btn) {
            __sessionScope = scope;
            document.querySelectorAll('.session-scope-btn').forEach(function(b){ b.classList.remove('active'); });
            if (btn) btn.classList.add('active');
            loadSessions();
        }
        function fmDeviceLabel(ua) {
            ua = ua || '';
            // Order matters: check the more specific patterns first so e.g. an
            // Android UA (which also contains "Linux") doesn't get misread as
            // plain Linux, and iPad's desktop-mode UA still resolves to iOS.
            var os = /CrOS/.test(ua) ? 'ChromeOS'
                : /Windows/.test(ua) ? 'Windows'
                : /Android/.test(ua) ? 'Android'
                : /iPhone|iPod/.test(ua) ? 'iOS'
                : /iPad/.test(ua) ? 'iPadOS'
                : (/Macintosh|Mac OS/.test(ua) && 'ontouchend' in document) ? 'iPadOS' // iPadOS 13+ desktop-mode UA
                : /Mac OS/.test(ua) ? 'macOS'
                : /Linux/.test(ua) ? 'Linux'
                : 'Unknown device';
            var browser = /Edg\//.test(ua) ? 'Edge'
                : /OPR\/|Opera/.test(ua) ? 'Opera'
                : /CriOS\//.test(ua) ? 'Chrome' // Chrome on iOS
                : /FxiOS\//.test(ua) ? 'Firefox' // Firefox on iOS
                : /Firefox\//.test(ua) ? 'Firefox'
                : /Chrome\//.test(ua) ? 'Chrome'
                : /Safari\//.test(ua) ? 'Safari'
                : 'Browser';
            return { os: os, browser: browser, label: os + ' · ' + browser };
        }
        function fmDeviceIcon(os) {
            switch (os) {
                case 'Windows':  return 'fa-windows';
                case 'macOS':    return 'fa-apple';
                case 'iOS':      return 'fa-mobile';
                case 'iPadOS':   return 'fa-tablet';
                case 'Android':  return 'fa-android';
                case 'Linux':    return 'fa-linux';
                case 'ChromeOS': return 'fa-chrome';
                default:         return 'fa-question-circle-o';
            }
        }
        // Relative time — "just now", "5m ago", "3h ago" — falls back to the
        // absolute timestamp once it's more than a day old, so old entries stay legible.
        function fmRelativeTime(sqlDateTime) {
            var t = Date.parse(sqlDateTime.replace(' ', 'T'));
            if (isNaN(t)) return sqlDateTime;
            var diffSec = Math.round((Date.now() - t) / 1000);
            if (diffSec < 10) return 'just now';
            if (diffSec < 60) return diffSec + 's ago';
            if (diffSec < 3600) return Math.floor(diffSec / 60) + 'm ago';
            if (diffSec < 86400) return Math.floor(diffSec / 3600) + 'h ago';
            if (diffSec < 172800) return 'yesterday';
            return sqlDateTime;
        }
        function loadSessions() {
            if (__sessionListInFlight) return; // avoid overlapping requests from the auto-refresh timer
            __sessionListInFlight = true;
            var loading  = document.getElementById('session-list-loading');
            var rows     = document.getElementById('session-list-rows');
            var errEl    = document.getElementById('session-list-error');
            var errMsg   = document.getElementById('session-list-error-msg');
            var toolbar  = document.getElementById('session-list-toolbar');
            var countLbl = document.getElementById('session-count-label');
            // Only show the full-page spinner on first load — a background
            // auto-refresh shouldn't yank the list out from under the user.
            var isFirstLoad = rows.style.display === 'none' && errEl.style.display === 'none';
            if (isFirstLoad) { loading.style.display = 'block'; }
            errEl.style.display = 'none';
            var payload = new URLSearchParams({ type: 'list_sessions', scope: __sessionScope, token: window.csrf });
            fetch('', { method: 'POST', body: payload, headers: {'Content-Type': 'application/x-www-form-urlencoded'} })
                .then(function(r){ return r.json(); })
                .then(function(d){
                    __sessionListInFlight = false;
                    loading.style.display = 'none';
                    if (!d.ok) {
                        errMsg.textContent = d.msg || 'Failed to load sessions.';
                        errEl.style.display = 'block';
                        toolbar.style.display = 'none';
                        return;
                    }
                    rows.innerHTML = '';
                    var otherCount = d.sessions.filter(function(s){ return !s.is_current; }).length;
                    if (d.sessions.length === 0) {
                        rows.innerHTML = '<div style="padding:20px;text-align:center;color:var(--ios-secondary);font-size:12.5px;"><i class="fa fa-desktop" style="font-size:20px;opacity:0.4;display:block;margin-bottom:6px;"></i>No active sessions</div>';
                        toolbar.style.display = 'none';
                    } else {
                        countLbl.textContent = d.sessions.length + ' session' + (d.sessions.length === 1 ? '' : 's') + (otherCount > 0 ? ' · ' + otherCount + ' other' + (otherCount === 1 ? '' : 's') : '');
                        toolbar.style.display = 'flex';
                        document.getElementById('session-kill-others-btn').style.display = otherCount > 0 ? 'inline-flex' : 'none';
                        d.sessions.forEach(function(s) {
                            var dev = fmDeviceLabel(s.user_agent);
                            var row = document.createElement('div');
                            row.className = 'session-row' + (s.is_current ? ' is-current' : '');
                            row.dataset.sid = s.handle;
                            row.innerHTML =
                                '<div style="display:flex;align-items:center;min-width:0;">' +
                                    '<div class="session-device-icon"><i class="fa ' + fmDeviceIcon(dev.os) + '"></i></div>' +
                                    '<div style="min-width:0;">' +
                                        '<div style="font-size:12.5px;font-weight:600;color:var(--ios-label);">' +
                                            (__sessionScope === 'all' ? '<span style="color:#C9A84C;">' + s.username + '</span> · ' : '') +
                                            dev.label +
                                            (s.is_current ? ' <span style="font-size:10.5px;font-weight:700;color:var(--ios-green);">· THIS DEVICE</span>' : '') +
                                        '</div>' +
                                        '<div style="font-size:11px;color:var(--ios-secondary);margin-top:2px;">' +
                                            'IP ' + s.ip + ' · last active ' + fmRelativeTime(s.last_seen) + ' · signed in ' + s.login_time +
                                        '</div>' +
                                    '</div>' +
                                '</div>' +
                                '<button type="button" class="fm-btn fm-btn-outline" style="height:28px;padding:0 12px;font-size:11.5px;flex-shrink:0;color:var(--ios-red);border-color:rgba(239,68,68,0.3);" onclick="killSession(\'' + s.handle + '\', this)">' +
                                    '<i class="fa fa-power-off"></i> ' + (s.is_current ? 'Sign out' : 'Terminate') +
                                '</button>';
                            rows.appendChild(row);
                        });
                    }
                    rows.style.display = 'block';
                })
                .catch(function(){
                    __sessionListInFlight = false;
                    loading.style.display = 'none';
                    errMsg.textContent = 'Network error — check your connection and try again.';
                    errEl.style.display = 'block';
                });
        }
        function killSession(sid, btn) {
            var row = btn.closest('.session-row');
            var isCurrent = row && row.classList.contains('is-current');
            var confirmMsg = isCurrent
                ? 'Sign out this device? You will need to sign in again.'
                : 'Terminate this session? That device will be signed out immediately.';
            if (!confirm(confirmMsg)) return;
            btn.disabled = true;
            btn.innerHTML = '<i class="fa fa-spinner fa-spin"></i>';
            var payload = new URLSearchParams({ type: 'kill_session', sid: sid, token: window.csrf });
            fetch('', { method: 'POST', body: payload, headers: {'Content-Type': 'application/x-www-form-urlencoded'} })
                .then(function(r){ return r.json(); })
                .then(function(d){
                    if (d.ok) {
                        if (d.was_self) { toast(d.msg || 'Signed out.'); window.location.href = '?logout=1'; return; }
                        toast(d.msg || 'Session terminated.');
                        if (row) {
                            row.classList.add('fm-row-removing');
                            setTimeout(loadSessions, 260);
                        } else {
                            loadSessions();
                        }
                    } else {
                        toast(d.msg || 'Failed to terminate session.', 'error');
                        btn.disabled = false;
                        btn.innerHTML = '<i class="fa fa-power-off"></i> ' + (isCurrent ? 'Sign out' : 'Terminate');
                    }
                })
                .catch(function(){
                    toast('Network error — try again.', 'error');
                    btn.disabled = false;
                    btn.innerHTML = '<i class="fa fa-power-off"></i> ' + (isCurrent ? 'Sign out' : 'Terminate');
                });
        }
        function killAllOthers(btn) {
            var scope = __sessionScope;
            var confirmMsg = scope === 'all'
                ? 'Sign out every OTHER session for ALL users? This device stays signed in.'
                : 'Sign out all of your other sessions? This device stays signed in.';
            if (!confirm(confirmMsg)) return;
            btn.disabled = true;
            var origHtml = btn.innerHTML;
            btn.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Signing out…';
            var payload = new URLSearchParams({ type: 'kill_all_others', scope: scope, token: window.csrf });
            fetch('', { method: 'POST', body: payload, headers: {'Content-Type': 'application/x-www-form-urlencoded'} })
                .then(function(r){ return r.json(); })
                .then(function(d){
                    btn.disabled = false;
                    btn.innerHTML = origHtml;
                    toast(d.msg || (d.ok ? 'Done.' : 'Failed.'), d.ok ? 'ok' : 'error');
                    if (d.ok) loadSessions();
                })
                .catch(function(){
                    btn.disabled = false;
                    btn.innerHTML = origHtml;
                    toast('Network error — try again.', 'error');
                });
        }
        // Keep the list current without the user having to reload the tab — but
        // only while this settings tab is actually visible on screen.
        function fmStartSessionAutoRefresh() {
            if (__sessionRefreshTimer) clearInterval(__sessionRefreshTimer);
            __sessionRefreshTimer = setInterval(function() {
                if (document.visibilityState === 'visible') loadSessions();
            }, 25000);
        }
        document.addEventListener('DOMContentLoaded', function() {
            loadSessions();
            fmStartSessionAutoRefresh();
        });
        </script>
    <?php elseif ($settingsTab === 'notifications' && FM_IS_ADMIN): ?>
        <!-- ═══════════════════════ LOGIN NOTIFICATIONS ═══════════════════════ -->
        <div class="card" style="border-radius:16px;overflow:hidden;margin-bottom:24px;">
            <h6 class="card-header" style="padding:14px 18px;font-weight:700;">
                <i class="fa fa-bell" style="color:#C9A84C;margin-right:7px;"></i>Login Notifications
            </h6>
            <div class="card-body">
                <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:18px;padding:10px 12px;background:var(--ios-fill);border-radius:10px;">
                    <div style="font-size:12.5px;font-weight:600;color:var(--ios-label);">Also alert on failed logins</div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="js-notify-failed-login" style="width:42px;height:22px;cursor:pointer;" <?php echo !empty($cfg->data['notify_on_failed_login']) ? 'checked' : ''; ?>>
                    </div>
                </div>
                <!-- SMTP section -->
                <div id="js-smtp-section" style="display:block;">
                    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:10px;">
                        <div style="font-size:13px;font-weight:600;color:var(--ios-label);"><i class="fa fa-envelope-o" style="margin-right:5px;"></i>Email (SMTP)</div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="js-smtp-enabled" style="width:42px;height:22px;cursor:pointer;" <?php echo !empty($cfg->data['smtp_enabled']) ? 'checked' : ''; ?>>
                        </div>
                    </div>
                    <div class="row g-2" style="margin-bottom:14px;">
                        <div class="col-8"><input type="text" id="js-smtp-host" class="form-control" placeholder="SMTP host (e.g. smtp.gmail.com)" value="<?php echo fm_enc(isset($cfg->data['smtp_host']) ? $cfg->data['smtp_host'] : ''); ?>" style="font-size:12.5px;"></div>
                        <div class="col-4"><input type="number" id="js-smtp-port" class="form-control" placeholder="Port" value="<?php echo fm_enc(isset($cfg->data['smtp_port']) ? $cfg->data['smtp_port'] : 587); ?>" style="font-size:12.5px;"></div>
                        <div class="col-6">
                            <select id="js-smtp-secure" class="form-select" style="font-size:12.5px;">
                                <option value="tls" <?php echo (!isset($cfg->data['smtp_secure']) || $cfg->data['smtp_secure'] === 'tls') ? 'selected' : ''; ?>>STARTTLS (587)</option>
                                <option value="ssl" <?php echo (isset($cfg->data['smtp_secure']) && $cfg->data['smtp_secure'] === 'ssl') ? 'selected' : ''; ?>>SSL (465)</option>
                                <option value=""    <?php echo (isset($cfg->data['smtp_secure']) && $cfg->data['smtp_secure'] === '') ? 'selected' : ''; ?>>None (25)</option>
                            </select>
                        </div>
                        <div class="col-6"><input type="text" id="js-smtp-user" class="form-control" placeholder="SMTP username" value="<?php echo fm_enc(isset($cfg->data['smtp_user']) ? $cfg->data['smtp_user'] : ''); ?>" style="font-size:12.5px;"></div>
                        <div class="col-6"><input type="password" id="js-smtp-pass" class="form-control" placeholder="<?php echo !empty($cfg->data['smtp_pass']) ? 'Password set — enter new to change' : 'SMTP password'; ?>" style="font-size:12.5px;"></div>
                        <div class="col-6"><input type="text" id="js-smtp-from" class="form-control" placeholder="From address (optional)" value="<?php echo fm_enc(isset($cfg->data['smtp_from']) ? $cfg->data['smtp_from'] : ''); ?>" style="font-size:12.5px;"></div>
                        <div class="col-12"><input type="text" id="js-smtp-to" class="form-control" placeholder="Notify this email address" value="<?php echo fm_enc(isset($cfg->data['smtp_to']) ? $cfg->data['smtp_to'] : ''); ?>" style="font-size:12.5px;"></div>
                    </div>
                    <div style="display:flex;gap:8px;margin-bottom:8px;">
                        <button type="button" class="fm-btn fm-btn-primary" style="height:34px;padding:0 14px;font-size:12px;" onclick="fmSaveNotifySettings()"><i class="fa fa-save"></i> Save</button>
                        <button type="button" class="fm-btn fm-btn-outline" style="height:34px;padding:0 14px;font-size:12px;" onclick="fmTestNotify('smtp')"><i class="fa fa-paper-plane"></i> Send Test Email</button>
                    </div>
                </div>
                <div id="js-notify-test-result" style="font-size:12px;margin-top:12px;"></div>
            </div>
        </div>
        <script>
        function fmSaveNotifySettings() {
            var body = new URLSearchParams();
            body.set('ajax', 'true');
            body.set('token', '<?php echo $_SESSION['token']; ?>');
            body.set('type', 'notify_settings');
            body.set('notify_action', 'save');
            body.set('smtp_enabled', document.getElementById('js-smtp-enabled').checked ? 'true' : 'false');
            body.set('smtp_host', document.getElementById('js-smtp-host').value);
            body.set('smtp_port', document.getElementById('js-smtp-port').value);
            body.set('smtp_secure', document.getElementById('js-smtp-secure').value);
            body.set('smtp_user', document.getElementById('js-smtp-user').value);
            body.set('smtp_pass', document.getElementById('js-smtp-pass').value);
            body.set('smtp_from', document.getElementById('js-smtp-from').value);
            body.set('smtp_to', document.getElementById('js-smtp-to').value);
            body.set('notify_on_failed_login', document.getElementById('js-notify-failed-login').checked ? 'true' : 'false');
            fetch('', { method: 'POST', body: body, credentials: 'same-origin' })
                .then(function(r) { return r.json(); })
                .then(function(data) {
                    var el = document.getElementById('js-notify-test-result');
                    el.style.color = data.success ? '#16a34a' : '#dc2626';
                    el.textContent = data.success ? 'Saved.' : (data.error || 'Failed to save');
                });
        }
        function fmTestNotify(channel) {
            var body = new URLSearchParams();
            body.set('ajax', 'true');
            body.set('token', '<?php echo $_SESSION['token']; ?>');
            body.set('type', 'notify_settings');
            body.set('notify_action', 'test');
            body.set('channel', channel);
            var el = document.getElementById('js-notify-test-result');
            el.style.color = 'var(--ios-secondary)';
            el.textContent = 'Sending test...';
            fetch('', { method: 'POST', body: body, credentials: 'same-origin' })
                .then(function(r) { return r.json(); })
                .then(function(data) {
                    el.style.color = data.success ? '#16a34a' : '#dc2626';
                    el.textContent = data.success ? 'Test sent — check your inbox/chat.' : ('Failed: ' + (data.error || 'unknown error'));
                });
        }
        </script>
    <?php elseif ($settingsTab === 'app' && FM_IS_ADMIN): ?>
    <!-- ═══════════════════════ APP CONFIGURATION ═══════════════════════ -->
        <div class="card" style="border-radius:16px;overflow:hidden;margin-bottom:24px;">
            <h6 class="card-header" style="padding:14px 18px;font-weight:700;">
                <i class="fa fa-sliders" style="color:#C9A84C;margin-right:7px;"></i>App Configuration
            </h6>
            <div class="card-body" style="padding:20px 18px;">
                <form id="js-appsettings-form" onsubmit="saveAppSettings(event)">
                    <div class="mb-3 row align-items-center">
                        <label class="col-sm-4 col-form-label" style="font-size:13px;font-weight:600;color:var(--ios-label);">App Title</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="app-title"
                                   value="<?php echo fm_enc(APP_TITLE); ?>" placeholder="Tiny File Manager"
                                   style="border-radius:9px;font-size:13px;">
                        </div>
                    </div>
                    <hr style="border-color:var(--ios-sep);margin:14px 0;">
                    <div class="mb-3 row align-items-center">
                        <label class="col-sm-4 col-form-label" style="font-size:13px;font-weight:600;color:var(--ios-label);">Username</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="app-username"
                                   value="<?php echo fm_enc(array_key_first($auth_users)); ?>"
                                   autocomplete="off" style="border-radius:9px;font-size:13px;">
                            <input type="hidden" id="app-username-old"
                                   value="<?php echo fm_enc(array_key_first($auth_users)); ?>">
                        </div>
                    </div>
                    <div class="mb-3 row align-items-center">
                        <label class="col-sm-4 col-form-label" style="font-size:13px;font-weight:600;color:var(--ios-label);">New Password</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                                <input type="password" class="form-control" id="app-password"
                                       placeholder="Leave blank to keep current"
                                       autocomplete="new-password" style="border-radius:9px 0 0 9px;font-size:13px;">
                                <button type="button" class="btn" onclick="togglePwd('app-password')"
                                        style="border:1px solid var(--ios-sep);border-left:none;border-radius:0 9px 9px 0;background:rgba(201,168,76,0.08);color:#C9A84C;">
                                    <i class="fa fa-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4 row align-items-center">
                        <label class="col-sm-4 col-form-label" style="font-size:13px;font-weight:600;color:var(--ios-label);">Confirm Password</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="app-password-confirm"
                                   placeholder="Repeat new password"
                                   autocomplete="new-password" style="border-radius:9px;font-size:13px;">
                        </div>
                    </div>
                    <div id="appsettings-msg" style="display:none;margin-bottom:12px;font-size:13px;font-weight:500;padding:8px 12px;border-radius:8px;"></div>
                    <div>
                        <button type="submit" class="fm-btn fm-btn-primary" style="padding:0 22px;height:38px;font-size:13.5px;">
                            <i class="fa fa-check-circle"></i> Save App Settings
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <script>
        function togglePwd(id) {
            var el = document.getElementById(id);
            el.type = el.type === 'password' ? 'text' : 'password';
        }
        function saveAppSettings(e) {
            e.preventDefault();
            var msg = document.getElementById('appsettings-msg');
            msg.style.display = 'none';
            var payload = new URLSearchParams({
                type: 'appsettings',
                'app-title':            document.getElementById('app-title').value,
                'app-username':         document.getElementById('app-username').value,
                'app-username-old':     document.getElementById('app-username-old').value,
                'app-password':         document.getElementById('app-password').value,
                'app-password-confirm': document.getElementById('app-password-confirm').value,
            });
            fetch('', { method:'POST', body:payload, headers:{'Content-Type':'application/x-www-form-urlencoded'} })
                .then(function(r){ return r.json(); })
                .then(function(d){
                    msg.style.display  = 'block';
                    msg.style.background = d.ok ? 'rgba(46,125,50,0.08)'  : 'rgba(198,40,40,0.08)';
                    msg.style.color      = d.ok ? '#2e7d32'               : '#c62828';
                    msg.style.border     = '1px solid ' + (d.ok ? 'rgba(46,125,50,0.22)' : 'rgba(198,40,40,0.22)');
                    msg.textContent = d.msg;
                    if (d.ok) {
                        document.getElementById('app-username-old').value     = document.getElementById('app-username').value;
                        document.getElementById('app-password').value         = '';
                        document.getElementById('app-password-confirm').value = '';
                        if (d.reauth) {
                            // Username/password just changed on disk — the current
                            // session is now stale, so force an immediate logout
                            // and send the user back to a fresh login screen.
                            setTimeout(function() { window.location.href = '?logout=1'; }, 900);
                        }
                    }
                })
                .catch(function(){ msg.style.display='block'; msg.textContent='Request failed'; });
        }
        </script>
    <?php elseif ($settingsTab === 'users' && FM_IS_ADMIN): ?>
    <!-- ═══════════════════════ USER MANAGEMENT ═══════════════════════ -->
        <div class="card" style="border-radius:16px;overflow:hidden;margin-bottom:24px;">
            <h6 class="card-header d-flex justify-content-between align-items-center" style="padding:14px 18px;font-weight:700;">
                <span><i class="fa fa-users" style="color:#C9A84C;margin-right:7px;"></i>User Management</span>
                <button type="button" class="fm-btn fm-btn-primary" onclick="openAddUserModal()" style="height:32px;padding:0 14px;font-size:12.5px;">
                    <i class="fa fa-plus"></i> <span class="fm-btn-label">Add User</span>
                </button>
            </h6>
            <div class="card-body" style="padding:18px;">
                <!-- User list -->
                <div id="user-list-wrap">
                    <div id="user-list-loading" style="text-align:center;padding:24px;color:var(--ios-secondary);font-size:13px;">
                        <i class="fa fa-spinner fa-spin"></i> Loading users…
                    </div>
                    <div id="user-list-rows" style="display:none;border:0.5px solid var(--ios-sep);border-radius:12px;overflow:hidden;"></div>
                    <div id="user-list-error" style="display:none;padding:12px;color:#c62828;font-size:13px;border-radius:8px;background:rgba(198,40,40,0.06);border:1px solid rgba(198,40,40,0.18);margin-top:8px;"></div>
                </div>
            </div>
        </div>
        <!-- Add User Modal -->
        <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document" style="max-width:400px;margin:auto;">
                <div class="modal-content" style="border-radius:14px;overflow:hidden;">
                    <!-- Header -->
                    <div style="display:flex;align-items:center;justify-content:space-between;padding:14px 16px;border-bottom:0.5px solid var(--ios-sep);background:var(--ios-bg2);">
                        <div style="display:flex;align-items:center;gap:8px;">
                            <span style="display:inline-flex;align-items:center;justify-content:center;width:28px;height:28px;background:rgba(201,168,76,0.12);border-radius:7px;">
                                <i class="fa fa-user-plus" style="color:#C9A84C;font-size:12px;"></i>
                            </span>
                            <span style="font-size:15px;font-weight:700;color:var(--ios-label);">Add New User</span>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin:0;"></button>
                    </div>
                    <!-- Body -->
                    <div style="padding:16px;">
                        <div class="mb-3">
                            <label style="display:block;font-size:12px;font-weight:600;color:var(--ios-label);margin-bottom:5px;">Username</label>
                            <input type="text" class="form-control" id="new-username" placeholder="e.g. guest"
                                   autocomplete="off" style="border-radius:9px;font-size:13px;">
                        </div>
                        <div class="mb-3">
                            <label style="display:block;font-size:12px;font-weight:600;color:var(--ios-label);margin-bottom:5px;">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="new-password"
                                       placeholder="Min 6 characters" style="border-radius:9px 0 0 9px;font-size:13px;">
                                <button type="button" class="btn" onclick="togglePwd('new-password')"
                                        style="border:1px solid var(--ios-sep);border-left:none;border-radius:0 9px 9px 0;background:rgba(201,168,76,0.08);color:#C9A84C;">
                                    <i class="fa fa-eye"></i>
                                </button>
                            </div>
                        </div>
                        <div class="mb-1">
                            <label style="display:block;font-size:12px;font-weight:600;color:var(--ios-label);margin-bottom:7px;">Role</label>
                            <?php
                            $roleOptions = [
                                'admin'               => ['Admin',                  'Full access — read, write, delete, download'],
                                'readonly'            => ['Read Only',              'Can view and download, cannot modify files'],
                                'readonly_nodownload' => ['Read Only — No Download','View only — cannot modify or download'],
                            ];
                            foreach ($roleOptions as $val => [$lbl, $desc]):
                            ?>
                            <label style="display:flex;align-items:flex-start;gap:10px;cursor:pointer;padding:9px 11px;
                                          border:1px solid var(--ios-sep);border-radius:9px;margin-bottom:6px;
                                          transition:background 0.15s;"
                                   onmouseover="this.style.background='rgba(201,168,76,0.06)'"
                                   onmouseout="this.style.background=''">
                                <input type="radio" name="new-role" value="<?php echo $val; ?>"
                                       <?php echo $val==='admin'?'checked':''; ?>
                                       style="margin-top:3px;accent-color:var(--ios-label);">
                                <div>
                                    <div style="font-size:12.5px;font-weight:600;color:var(--ios-label);"><?php echo $lbl; ?></div>
                                    <div style="font-size:11px;color:var(--ios-secondary);margin-top:2px;"><?php echo $desc; ?></div>
                                </div>
                            </label>
                            <?php endforeach; ?>
                        </div>
                        <div id="adduser-msg" style="display:none;margin-top:10px;font-size:12.5px;font-weight:500;padding:8px 12px;border-radius:8px;"></div>
                    </div>
                    <!-- Footer -->
                    <div style="display:flex;gap:8px;padding:12px 16px;border-top:0.5px solid var(--ios-sep);background:var(--ios-bg2);">
                        <button type="button" class="fm-btn fm-btn-outline" data-bs-dismiss="modal" style="flex:1;">
                            <i class="fa fa-times"></i> Cancel
                        </button>
                        <button type="button" id="adduser-submit-btn" class="fm-btn fm-btn-primary" onclick="addUser()" style="flex:1;">
                            <i class="fa fa-check"></i> Add User
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Delete User Confirm Modal -->
        <div class="modal fade" id="deleteUserModal" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document" style="max-width:360px;margin:auto;">
                <div class="modal-content" style="border-radius:14px;overflow:hidden;">
                    <div style="display:flex;align-items:center;justify-content:space-between;padding:14px 16px;border-bottom:0.5px solid var(--ios-sep);background:var(--ios-bg2);">
                        <div style="display:flex;align-items:center;gap:8px;">
                            <span style="display:inline-flex;align-items:center;justify-content:center;width:28px;height:28px;background:rgba(239,68,68,0.10);border-radius:7px;">
                                <i class="fa fa-trash-o" style="color:#DC2626;font-size:12px;"></i>
                            </span>
                            <span style="font-size:15px;font-weight:700;color:var(--ios-label);">Delete User</span>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin:0;"></button>
                    </div>
                    <div style="padding:16px;">
                        <p style="font-size:13.5px;color:var(--ios-secondary);margin:0;line-height:1.5;">
                            Delete user <strong id="del-user-name" style="color:var(--ios-label);"></strong>? This cannot be undone.
                        </p>
                    </div>
                    <div style="display:flex;gap:8px;padding:12px 16px;border-top:0.5px solid var(--ios-sep);background:var(--ios-bg2);">
                        <button type="button" class="fm-btn fm-btn-outline" data-bs-dismiss="modal" style="flex:1;">
                            <i class="fa fa-times"></i> Cancel
                        </button>
                        <button type="button" class="fm-btn fm-btn-danger" onclick="confirmDeleteUser()" style="flex:1;">
                            <i class="fa fa-trash-o"></i> Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <script>
        var roleBadge = {
            'admin':               '<span class="fm-role-badge fm-role-admin" style="font-size:11px;font-weight:700;padding:2px 8px;border-radius:5px;">Admin</span>',
            'readonly':            '<span style="background:rgba(201,168,76,0.12);color:#8A6D00;font-size:11px;font-weight:700;padding:2px 8px;border-radius:5px;">Read Only</span>',
            'readonly_nodownload': '<span style="background:rgba(22,36,64,0.07);color:#3A4D6A;font-size:11px;font-weight:700;padding:2px 8px;border-radius:5px;">No Download</span>',
        };
        var pendingDeleteUser = null;
        function togglePwd(id) {
            var el = document.getElementById(id);
            el.type = el.type === 'password' ? 'text' : 'password';
        }
        function openAddUserModal() {
            document.getElementById('new-username').value = '';
            document.getElementById('new-password').value = '';
            document.querySelector('input[name="new-role"][value="admin"]').checked = true;
            var msg = document.getElementById('adduser-msg');
            msg.style.display = 'none';
            $('#addUserModal').modal('show');
        }
        function loadUsers() {
            var loading = document.getElementById('user-list-loading');
            var rows    = document.getElementById('user-list-rows');
            var errDiv  = document.getElementById('user-list-error');
            loading.style.display = 'block';
            rows.style.display    = 'none';
            errDiv.style.display  = 'none';
            fetch('', {
                method: 'POST',
                body: new URLSearchParams({ type: 'listusers' }),
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
            })
            .then(function(r) {
                if (!r.ok) throw new Error('HTTP ' + r.status);
                return r.json();
            })
            .then(function(users) {
                rows.innerHTML = '';
                if (!Array.isArray(users) || users.length === 0) {
                    loading.innerHTML = '<span style="color:var(--ios-secondary);">No users found.</span>';
                    return;
                }
                users.forEach(function(u, i) {
                    var isFirst = (i === 0);
                    var initial = u.username.charAt(0).toUpperCase();
                    var row = document.createElement('div');
                    row.style.cssText = 'display:flex;align-items:center;gap:12px;padding:11px 14px;' +
                        (i > 0 ? 'border-top:0.5px solid rgba(22,36,64,0.07);' : '') +
                        'transition:background 0.15s;';
                    row.onmouseover = function(){ row.style.background = 'rgba(201,168,76,0.04)'; };
                    row.onmouseout  = function(){ row.style.background = ''; };
                    var actionHtml = isFirst
                        ? '<span title="The primary admin is protected and cannot be deleted or demoted." ' +
                          'style="display:inline-flex;align-items:center;gap:5px;font-size:11px;font-weight:600;color:#8A6D00;' +
                          'background:rgba(201,168,76,0.10);border:1px solid rgba(201,168,76,0.22);border-radius:20px;padding:4px 10px;cursor:default;">' +
                          '<i class="fa fa-lock"></i> Protected</span>'
                        : '<button type="button" onclick="deleteUser(\'' + u.username.replace(/'/g,"\\'") + '\')" ' +
                          'class="fm-btn fm-btn-danger" style="height:28px;padding:0 12px;font-size:11.5px;">' +
                          '<i class="fa fa-trash-o"></i> Delete</button>';
                    row.innerHTML =
                        '<span style="flex-shrink:0;display:inline-flex;align-items:center;justify-content:center;width:34px;height:34px;border-radius:50%;' +
                            'background:' + (isFirst ? 'rgba(201,168,76,0.15)' : 'rgba(22,36,64,0.07)') + ';' +
                            'color:' + (isFirst ? '#8A6D00' : 'var(--ios-label)') + ';font-size:13px;font-weight:700;">' + initial + '</span>' +
                        '<div style="flex:1;min-width:0;">' +
                            '<div style="font-size:13.5px;font-weight:700;color:var(--ios-label);white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">' +
                                u.username +
                                (isFirst ? ' <span style="font-size:10px;font-weight:600;color:#C9A84C;">· PRIMARY ADMIN</span>' : '') +
                            '</div>' +
                            '<div style="margin-top:3px;">' + (roleBadge[u.role] || u.role) + '</div>' +
                        '</div>' +
                        '<div style="flex-shrink:0;">' + actionHtml + '</div>';
                    rows.appendChild(row);
                });
                loading.style.display = 'none';
                rows.style.display    = 'block';
            })
            .catch(function(err) {
                loading.style.display = 'none';
                errDiv.style.display  = 'block';
                errDiv.textContent    = 'Failed to load users: ' + err.message;
            });
        }
        function addUser() {
            var msg  = document.getElementById('adduser-msg');
            var role = document.querySelector('input[name="new-role"]:checked');
            if (!role) { msg.style.display='block'; msg.textContent='Select a role.'; return; }
            var uname = document.getElementById('new-username').value.trim();
            var pass  = document.getElementById('new-password').value;
            if (!uname || !pass) { msg.style.display='block'; msg.textContent='Fill all fields.'; return; }
            msg.style.display = 'none';
            var btn = document.getElementById('adduser-submit-btn');
            btn.disabled = true;
            fetch('', {
                method: 'POST',
                body: new URLSearchParams({ type:'adduser', 'new-username':uname, 'new-password':pass, 'new-role':role.value }),
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
            })
            .then(function(r){ return r.json(); })
            .then(function(d) {
                btn.disabled = false;
                msg.style.display  = 'block';
                msg.style.background = d.ok ? 'rgba(46,125,50,0.08)'  : 'rgba(198,40,40,0.08)';
                msg.style.color      = d.ok ? '#2e7d32'               : '#c62828';
                msg.style.border     = '1px solid ' + (d.ok ? 'rgba(46,125,50,0.22)' : 'rgba(198,40,40,0.22)');
                msg.textContent = d.msg;
                if (d.ok) {
                    loadUsers();
                    setTimeout(function(){ $('#addUserModal').modal('hide'); }, 700);
                }
            })
            .catch(function(){ btn.disabled = false; msg.style.display='block'; msg.textContent='Request failed.'; });
        }
        function deleteUser(username) {
            pendingDeleteUser = username;
            document.getElementById('del-user-name').textContent = username;
            $('#deleteUserModal').modal('show');
        }
        function confirmDeleteUser() {
            if (!pendingDeleteUser) return;
            var username = pendingDeleteUser;
            $('#deleteUserModal').modal('hide');
            fetch('', {
                method: 'POST',
                body: new URLSearchParams({ type:'deleteuser', 'del-username':username }),
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
            })
            .then(function(r){ return r.json(); })
            .then(function(d) {
                if (typeof fmToast === 'function') fmToast(d.msg, d.ok ? 'ok' : 'error');
                if (d.ok) loadUsers();
            })
            .catch(function(){ if (typeof fmToast === 'function') fmToast('Request failed.','error'); })
            .finally(function(){ pendingDeleteUser = null; });
        }
        // Auto-load on page ready
        loadUsers();
        </script>
    <?php elseif (!FM_IS_ADMIN && ($settingsTab === 'app' || $settingsTab === 'users')): ?>
        <div style="text-align:center;padding:48px 24px;color:var(--ios-secondary);">
            <i class="fa fa-lock" style="font-size:32px;margin-bottom:12px;display:block;color:rgba(22,36,64,0.25);"></i>
            Admin access required.
        </div>
    <?php endif; ?>
        </div><!-- .fm-settings-content -->
    </div><!-- .fm-settings-shell -->
<?php
    fm_show_footer();
    exit;
}
if (isset($_GET['help'])) {
    fm_show_header(); 
    fm_show_nav_path(FM_PATH); 
    global $cfg, $lang;
?>
    <div style="max-width:680px;margin:0 auto;padding-top:16px;">
        <div class="card mb-3" style="border-radius:16px;overflow:hidden;border:1px solid var(--ios-sep);">
            <h6 class="card-header d-flex justify-content-between align-items-center">
                <span><i class="fa fa-exclamation-circle" style="color:#C9A84C;margin-right:6px;"></i><?php echo lng('Help') ?></span>
                <a href="?dir=<?php echo FM_PATH ?>" style="color:var(--ios-red);font-size:14px;font-weight:500;"><i class="fa fa-times-circle-o"></i> <?php echo lng('Cancel') ?></a>
            </h6>
            <div class="card-body">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <p>
                        <h3><a href="https://tinyfilemanager.github.io" target="_blank" class="app-v-title" style="color:var(--ios-blue);font-weight:700;"> Tiny File Manager <?php echo VERSION; ?></a></h3>
                        </p>
                        <p>Author: CCP Programmers</p>
                        <p>Mail Us: <a href="https://github.com/prasathmani/tinyfilemanager/issues" style="color:var(--ios-blue);">GitHub Issues</a> </p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="card" style="overflow:hidden;border-radius:12px;">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><a href="https://github.com/prasathmani/tinyfilemanager" target="_blank" style="color:var(--ios-blue);"><i class="fa fa-question-circle"></i> <?php echo lng('Help') ?> </a> </li>
                                <li class="list-group-item"><a href="https://github.com/prasathmani/tinyfilemanager/issues" target="_blank" style="color:var(--ios-blue);"><i class="fa fa-bug"></i> <?php echo lng('Report Issue') ?></a></li>
                                <?php if (!FM_READONLY) { ?>
                                    <li class="list-group-item"><a href="javascript:show_new_pwd();" style="color:var(--ios-blue);"><i class="fa fa-lock"></i> <?php echo lng('Generate new password hash') ?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row js-new-pwd hidden mt-2">
                    <div class="col-12">
                        <form class="form-inline" onsubmit="return new_password_hash(this)" method="POST" action="">
                            <input type="hidden" name="type" value="pwdhash" aria-label="hidden" aria-hidden="true">
                            <div class="form-group mb-2">
                                <label for="staticEmail2"><?php echo lng('Generate new password hash') ?></label>
                            </div>
                            <div class="form-group mx-sm-3 mb-2">
                                <label for="inputPassword2" class="sr-only"><?php echo lng('Password') ?></label>
                                <input type="text" class="form-control btn-sm" id="inputPassword2" name="inputPassword2" placeholder="<?php echo lng('Password') ?>" required>
                            </div>
                            <button type="submit" class="btn btn-success btn-sm mb-2"><?php echo lng('Generate') ?></button>
                        </form>
                        <textarea class="form-control" rows="2" readonly id="js-pwd-result"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    fm_show_footer();
    exit;
}
if (isset($_GET['view'])) {
    $file = $_GET['view'];
    $file = fm_clean_path($file, false);
    $file = str_replace('/', '', $file);
    if ($file == '' || !is_file($path . '/' . $file) || !fm_is_exclude_items($file, $path . '/' . $file)) {
        fm_set_msg(lng('File not found'), 'error');
        $FM_PATH = FM_PATH;
        fm_redirect(FM_SELF_URL . '?dir=' . urlencode($FM_PATH));
    }
    fm_show_header(); 
    fm_show_nav_path(FM_PATH); 
    $file_url = FM_ROOT_URL . fm_convert_win((FM_PATH != '' ? '/' . FM_PATH : '') . '/' . $file);
    $file_path = $path . '/' . $file;
    $ext = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
    $mime_type = fm_get_mime_type($file_path);
    $filesize_raw = fm_get_size($file_path);
    $filesize = fm_get_filesize($filesize_raw);
    $nav_files       = array_values($files);
    $nav_current_idx = array_search($file, $nav_files);
    $nav_prev_file   = ($nav_current_idx !== false && $nav_current_idx > 0) ? $nav_files[$nav_current_idx - 1] : null;
    $nav_next_file   = ($nav_current_idx !== false && $nav_current_idx < count($nav_files) - 1) ? $nav_files[$nav_current_idx + 1] : null;
    $nav_total       = count($nav_files);
    $nav_position    = ($nav_current_idx !== false) ? $nav_current_idx + 1 : 1;
    $is_zip = false;
    $is_gzip = false;
    $is_image = false;
    $is_audio = false;
    $is_video = false;
    $is_text = false;
    $is_onlineViewer = false;
    $view_title = 'File';
    $filenames = false; 
    $content = ''; 
    $online_viewer = strtolower(FM_DOC_VIEWER);
    if ($online_viewer && $online_viewer !== 'false' && in_array($ext, fm_get_onlineViewer_exts())) {
        $is_onlineViewer = true;
        if ($ext === 'pdf') {
            $is_onlineViewer = false;
        }
    } elseif ($ext == 'zip' || $ext == 'tar') {
        $is_zip = true;
        $view_title = 'Archive';
        $filenames = fm_get_zif_info($file_path, $ext);
    } elseif (in_array($ext, fm_get_image_exts())) {
        $is_image = true;
        $view_title = 'Image';
    } elseif (in_array($ext, fm_get_audio_exts())) {
        $is_audio = true;
        $view_title = 'Audio';
    } elseif (in_array($ext, fm_get_video_exts())) {
        $is_video = true;
        $view_title = 'Video';
    } elseif (in_array($ext, fm_get_text_exts()) || substr($mime_type, 0, 4) == 'text' || in_array($mime_type, fm_get_text_mimes())) {
        $is_text = true;
        $content = file_get_contents($file_path);
    }
?>
    <div class="row" style="margin-top:0px;">
        <div class="col-12" style="padding: 0 8px;">
            <ul class="list-group mb-2 mt-1" style="width:fit-content;max-width:100%;">
                <?php
                if (($is_zip || $is_gzip) && $filenames !== false) {
                    $total_files = 0;
                    $total_comp = 0;
                    $total_uncomp = 0;
                    foreach ($filenames as $fn) {
                        if (!$fn['folder']) {
                            $total_files++;
                        }
                        $total_comp += $fn['compressed_size'];
                        $total_uncomp += $fn['filesize'];
                    }
                ?>
                    <li class="list-group-item"><?php echo lng('Files in archive') ?>: <?php echo $total_files ?></li>
                    <li class="list-group-item"><?php echo lng('Total size') ?>: <?php echo fm_get_filesize($total_uncomp) ?></li>
                    <li class="list-group-item"> <?php echo lng('Size in archive') ?>: <?php echo fm_get_filesize($total_comp) ?></li>
                    <li class="list-group-item"><?php echo lng('Compression') ?>: <?php echo round(($total_comp / max($total_uncomp, 1)) * 100) ?>%</li>
                <?php
                }
if ($is_image) {
    $image_size = @getimagesize($file_path);
    if ($image_size !== false && isset($image_size[0], $image_size[1])) {
        $width  = $image_size[0];
        $height = $image_size[1];
    } else {
        $width  = 'N/A';
        $height = 'N/A';
    }
    echo '<li class="list-group-item"><strong>' . lng('Image size') . ':</strong> ' . $width . ' x ' . $height . '</li>';
}
if ($is_text) {
    $is_utf8 = fm_is_utf8($content);
    if (function_exists('iconv') && !$is_utf8) {
        $converted = @iconv(FM_ICONV_INPUT_ENC, 'UTF-8//IGNORE', $content);
        if ($converted !== false) {
            $content = $converted;
        }
    }
}
                ?>
            </ul>
            <!-- Unified toolbar: action buttons + file navigation in one row -->
            <div class="fm-view-toolbar" role="group">
                <!-- LEFT: action buttons -->
                <div class="fm-action-bar fm-toolbar-actions" style="margin-bottom:0;flex-wrap:nowrap;">
                    <a class="fm-btn fm-btn-outline" href="?dir=<?php echo urlencode(FM_PATH) ?>">
                        <i class="fa fa-chevron-left"></i><span class="fm-btn-label"> <?php echo lng('Back') ?></span>
                    </a>
                    <?php if (!FM_READONLY_NODOWNLOAD): ?>
                    <form method="post" class="d-contents" action="?dir=<?php echo urlencode(FM_PATH) ?>&amp;dl=<?php echo urlencode($file) ?>">
                        <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                        <button type="submit" class="fm-btn fm-btn-outline"><i class="fa fa-cloud-download"></i><span class="fm-btn-label"> <?php echo lng('Download') ?></span></button>
                    </form>
                    <?php endif; ?>
                    <?php if (!FM_READONLY): ?>
                        <a class="fm-btn fm-btn-danger" href="?dir=<?php echo urlencode(FM_PATH) ?>&amp;del=<?php echo urlencode($file) ?>" onclick="confirmDailog(event, 1209, '<?php echo lng('Delete') . ' ' . lng('File'); ?>','<?php echo urlencode($file); ?>', this.href);">
                            <i class="fa fa-trash"></i><span class="fm-btn-label"> <?php echo lng('Delete') ?></span>
                        </a>
                    <?php endif; ?>
                    <?php if (!FM_READONLY_NODOWNLOAD): ?>
                    <a class="fm-btn fm-btn-outline" href="<?php
                        if ($ext === 'pdf') {
                            echo 'https://docs.google.com/viewer?embedded=true&hl=en&url=' . urlencode($file_url);
                        } elseif (in_array($ext, array('doc','docx','xls','xlsx','ppt','pptx','odt','ods','odp'))) {
                            echo 'https://docs.google.com/viewer?embedded=true&hl=en&url=' . urlencode($file_url);
                        } else {
                            echo fm_enc($file_url);
                        }
                    ?>" target="_blank"><i class="fa fa-external-link-square"></i><span class="fm-btn-label"> <?php echo lng('Open') ?></span></a>
                    <?php endif; ?>
                    <?php
                    if (!FM_READONLY && ($is_zip || $is_gzip) && $filenames !== false) {
                        $zip_name = pathinfo($file_path, PATHINFO_FILENAME);
                    ?>
                        <?php if ($ext === 'zip'): ?>
                        <form method="post" class="d-contents" id="unzip-form-<?php echo fm_enc(md5($file)); ?>">
                            <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                            <input type="hidden" name="unzip" value="<?php echo urlencode($file); ?>">
                            <input type="hidden" name="unzip_password" class="js-unzip-password-field">
                        </form>
                        <form method="post" class="d-contents" id="unzip-tofolder-form-<?php echo fm_enc(md5($file)); ?>">
                            <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                            <input type="hidden" name="unzip" value="<?php echo urlencode($file); ?>">
                            <input type="hidden" name="tofolder" value="1">
                            <input type="hidden" name="unzip_password" class="js-unzip-password-field">
                        </form>
                        <button type="button" class="fm-btn fm-btn-outline" onclick='openUnzipPasswordModal(<?php echo json_encode("unzip-form-" . md5($file)); ?>, <?php echo json_encode(lng('UnZip')); ?>)'><i class="fa fa-check-circle"></i><span class="fm-btn-label"> <?php echo lng('UnZip') ?></span></button>
                        <button type="button" class="fm-btn fm-btn-outline" onclick='openUnzipPasswordModal(<?php echo json_encode("unzip-tofolder-form-" . md5($file)); ?>, <?php echo json_encode(lng('UnZipToFolder')); ?>)'><i class="fa fa-check-circle"></i><span class="fm-btn-label"> <?php echo lng('UnZipToFolder') ?></span></button>
                        <?php else: ?>
                        <form method="post" class="d-contents">
                            <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                            <input type="hidden" name="unzip" value="<?php echo urlencode($file); ?>">
                            <button type="submit" class="fm-btn fm-btn-outline"><i class="fa fa-check-circle"></i><span class="fm-btn-label"> <?php echo lng('UnZip') ?></span></button>
                        </form>
                        <form method="post" class="d-contents">
                            <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                            <input type="hidden" name="unzip" value="<?php echo urlencode($file); ?>">
                            <input type="hidden" name="tofolder" value="1">
                            <button type="submit" class="fm-btn fm-btn-outline"><i class="fa fa-check-circle"></i><span class="fm-btn-label"> <?php echo lng('UnZipToFolder') ?></span></button>
                        </form>
                        <?php endif; ?>
                    <?php
                    }
                    if ($is_text && !FM_READONLY) {
                    ?>
                        <a class="fm-btn fm-btn-primary" href="?dir=<?php echo urlencode(trim(FM_PATH)) ?>&amp;edit=<?php echo urlencode($file) ?>"><i class="fa fa-pencil-square"></i><span class="fm-btn-label"> <?php echo lng('Edit') ?></span></a>
                        <a class="fm-btn fm-btn-primary" href="?dir=<?php echo urlencode(trim(FM_PATH)) ?>&amp;edit=<?php echo urlencode($file) ?>&env=ace"><i class="fa fa-pencil-square-o"></i><span class="fm-btn-label"> <?php echo lng('AdvancedEditor') ?></span></a>
                    <?php } ?>
                </div>
                <?php if ($nav_total > 1): ?>
                <!-- RIGHT: file navigation -->
                <div class="fm-toolbar-nav">
                    <?php if ($nav_prev_file): ?>
                        <a href="?dir=<?php echo urlencode(FM_PATH) ?>&amp;view=<?php echo urlencode($nav_prev_file) ?>"
                           class="fm-btn fm-btn-outline fm-nav-btn"
                           title="<?php echo fm_enc($nav_prev_file) ?>">
                            <i class="fa fa-chevron-left"></i>
                            <span class="fm-btn-label fm-nav-label"><?php echo fm_enc($nav_prev_file) ?></span>
                        </a>
                    <?php else: ?>
                        <span class="fm-btn fm-btn-outline fm-nav-btn fm-nav-disabled" title="First file">
                            <i class="fa fa-chevron-left"></i>
                        </span>
                    <?php endif; ?>
                    <span class="fm-nav-counter" title="File <?php echo $nav_position ?> of <?php echo $nav_total ?>">
                        <i class="fa fa-files-o fm-nav-counter-icon"></i>
                        <span class="fm-nav-counter-text"><?php echo $nav_position . '/' . $nav_total ?></span>
                    </span>
                    <?php if ($nav_next_file): ?>
                        <a href="?dir=<?php echo urlencode(FM_PATH) ?>&amp;view=<?php echo urlencode($nav_next_file) ?>"
                           class="fm-btn fm-btn-outline fm-nav-btn"
                           title="<?php echo fm_enc($nav_next_file) ?>">
                            <span class="fm-btn-label fm-nav-label"><?php echo fm_enc($nav_next_file) ?></span>
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    <?php else: ?>
                        <span class="fm-btn fm-btn-outline fm-nav-btn fm-nav-disabled" title="Last file">
                            <i class="fa fa-chevron-right"></i>
                        </span>
                    <?php endif; ?>
                </div>
                <script>
                (function(){
                    <?php if ($nav_prev_file): ?>var prevUrl='?dir=<?php echo urlencode(FM_PATH) ?>&view=<?php echo urlencode($nav_prev_file) ?>';<?php else: ?>var prevUrl=null;<?php endif; ?>
                    <?php if ($nav_next_file): ?>var nextUrl='?dir=<?php echo urlencode(FM_PATH) ?>&view=<?php echo urlencode($nav_next_file) ?>';<?php else: ?>var nextUrl=null;<?php endif; ?>
                    document.addEventListener('keydown',function(e){
                        var t=document.activeElement?document.activeElement.tagName:'';
                        if(t==='INPUT'||t==='TEXTAREA'||document.activeElement.isContentEditable)return;
                        if(e.altKey||e.ctrlKey||e.metaKey||e.shiftKey)return;
                        if(e.key==='ArrowLeft'&&prevUrl){window.location.href=prevUrl;}
                        else if(e.key==='ArrowRight'&&nextUrl){window.location.href=nextUrl;}
                    });
                })();
                </script>
                <?php endif; ?>
            </div>
            <?php if (FM_IS_ADMIN): ?>
            <!-- Floating metadata button on view page — admin only -->
    <button id="fm-meta-fab" onclick="showMetaModal('<?php echo fm_enc(addslashes($file)); ?>')"
        title="File Metadata / Forensics"
        style="position:fixed;bottom:28px;right:22px;z-index:9990;
               width:40px;height:40px;
               border:1px solid #cfcaf8;
               border-radius:12px;
               background:#f2f2f7;
               cursor:pointer;
               display:flex;
               align-items:center;
               justify-content:center;
               box-shadow:0 1px 3px rgba(0,0,0,.08);
               transition:all .15s ease;">
        <i class="fa fa-list-alt"
           style="font-family:FontAwesome!important;
                  font-size:16px;
                  color:#6D6AF8;"></i>
    </button>
    <script>
    document.getElementById('fm-meta-fab').addEventListener('mouseenter',function(){this.style.transform='translateY(-2px)';this.style.boxShadow='0 4px 12px rgba(109,106,248,.28)';this.style.borderColor='#6D6AF8';});
    document.getElementById('fm-meta-fab').addEventListener('mouseleave',function(){this.style.transform='translateY(0)';this.style.boxShadow='0 1px 3px rgba(0,0,0,.08)';this.style.borderColor= document.documentElement.getAttribute('data-theme')==='dark' ? '#3a3870' : '#cfcaf8';});
    (function applyMetaFabTheme(){
        var btn = document.getElementById('fm-meta-fab');
        if (!btn) return;
        var dark = document.documentElement.getAttribute('data-theme') === 'dark';
        btn.style.background = dark ? '#1E222A' : '#f2f2f7';
        btn.style.borderColor = dark ? '#3a3870' : '#cfcaf8';
        btn.style.boxShadow   = dark ? '0 1px 3px rgba(0,0,0,.35)' : '0 1px 3px rgba(0,0,0,.08)';
        btn.querySelector('i').style.color = dark ? '#9f9cf8' : '#6D6AF8';
    })();
    var _metaFabObs = new MutationObserver(function(){
        var btn = document.getElementById('fm-meta-fab');
        if (!btn) return;
        var dark = document.documentElement.getAttribute('data-theme') === 'dark';
        btn.style.background = dark ? '#1E222A' : '#f2f2f7';
        btn.style.borderColor = dark ? '#3a3870' : '#cfcaf8';
        btn.style.boxShadow   = dark ? '0 1px 3px rgba(0,0,0,.35)' : '0 1px 3px rgba(0,0,0,.08)';
        btn.querySelector('i').style.color = dark ? '#9f9cf8' : '#6D6AF8';
    });
    _metaFabObs.observe(document.documentElement, {attributes:true, attributeFilter:['data-theme']});
    </script>
            <?php endif; ?>
    <div class="fm-viewer-content-row row mt-2">
                <div class="col-12 fm-viewer-col" style="padding:0;">
                <?php
                if ($ext === 'pdf') {
                    ?>
                    <div id="fm-pdf-viewer" style="width:100%;max-width:100%;margin:0 auto;border-radius:14px;overflow:hidden;border:1px solid var(--ios-sep);box-shadow:0 6px 24px rgba(22,36,64,0.10);background:var(--ios-card);min-height:85vh;position:relative;">
                        <!-- Slim floating toolbar, bottom center, horizontal -->
                        <div id="fm-pdf-toolbar" style="display:none;flex-direction:row;align-items:center;gap:3px;position:absolute;left:50%;bottom:14px;transform:translateX(-50%);z-index:5;padding:6px;border-radius:14px;background:var(--ios-card);backdrop-filter:blur(6px);box-shadow:0 4px 16px rgba(22,36,64,0.16);border:1px solid var(--ios-sep);max-width:calc(100% - 20px);overflow-x:auto;overflow-y:hidden;-webkit-overflow-scrolling:touch;scrollbar-width:thin;">
                            <button type="button" class="fm-pdf-tbtn" id="fm-pdf-prev" title="Previous page"><i class="fa fa-chevron-left"></i></button>
                            <input id="fm-pdf-pagenum" type="number" min="1" value="1" style="width:34px;text-align:center;font-size:11px;padding:2px 0;border-radius:6px;border:1px solid var(--ios-sep);color:var(--ios-label);">
                            <span id="fm-pdf-pagecount" style="font-size:10px;color:var(--ios-tertiary);white-space:nowrap;">/ -</span>
                            <button type="button" class="fm-pdf-tbtn" id="fm-pdf-next" title="Next page"><i class="fa fa-chevron-right"></i></button>
                            <span style="width:1px;height:20px;background:var(--ios-sep);margin:0 3px;"></span>
                            <button type="button" class="fm-pdf-tbtn" id="fm-pdf-zoomout" title="Zoom out"><i class="fa fa-search-minus"></i></button>
                            <span id="fm-pdf-zoomlevel" style="font-size:10px;color:var(--ios-tertiary);white-space:nowrap;min-width:32px;text-align:center;">100%</span>
                            <button type="button" class="fm-pdf-tbtn" id="fm-pdf-zoomin" title="Zoom in"><i class="fa fa-search-plus"></i></button>
                            <button type="button" class="fm-pdf-tbtn" id="fm-pdf-fitwidth" title="Fit to width"><i class="fa fa-arrows-h"></i></button>
                            <span style="width:1px;height:20px;background:var(--ios-sep);margin:0 3px;"></span>
                            <button type="button" class="fm-pdf-tbtn" id="fm-pdf-pencil-toggle" title="Draw / annotate"><i class="fa fa-pencil"></i></button>
                            <button type="button" class="fm-pdf-tbtn" id="fm-pdf-pencil-clear" title="Clear drawings on this page"><i class="fa fa-eraser"></i></button>
                            <span style="width:1px;height:20px;background:var(--ios-sep);margin:0 3px;"></span>
                            <button type="button" class="fm-pdf-tbtn" id="fm-pdf-fullscreen" title="Fullscreen"><i class="fa fa-expand"></i></button>
                        </div>
                        <div id="fm-pdf-loading" style="position:absolute;inset:0;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:14px;background:var(--ios-card);z-index:2;border-radius:16px;">
                            <div style="width:48px;height:48px;border:3px solid rgba(201,168,76,0.14);border-top-color:#C9A84C;border-radius:50%;animation:fm-spin 0.8s linear infinite;"></div>
                            <span style="font-size:14px;color:var(--ios-secondary);font-weight:500;">Loading PDF…</span>
                        </div>
                        <div id="fm-pdf-pages" style="display:none;width:100%;max-height:85vh;overflow:auto;padding:12px 0 56px;text-align:center;"></div>
                        <iframe id="fm-pdf-google-frame" src="" style="width:100%;height:85vh;min-height:85vh;border:none;display:none;" title="PDF Viewer (Google Docs)"></iframe>
                    </div>
                    <style>
                    @keyframes fm-spin{to{transform:rotate(360deg);}}
                    #fm-pdf-viewer:fullscreen{background:var(--ios-bg);}
                    #fm-pdf-viewer:-webkit-full-screen{background:var(--ios-bg);}
                    .fm-pdf-tbtn{width:30px;height:30px;border-radius:9px;border:none;background:transparent;color:var(--ios-label);cursor:pointer;font-size:12px;display:flex;align-items:center;justify-content:center;transition:background .15s ease,color .15s ease,transform .1s ease;flex:0 0 auto;}
                    #fm-pdf-toolbar{white-space:nowrap;}
                    #fm-pdf-toolbar > *{flex-shrink:0;}
                    #fm-pdf-toolbar::-webkit-scrollbar{height:4px;}
                    #fm-pdf-toolbar::-webkit-scrollbar-thumb{background:rgba(0,0,0,0.2);border-radius:4px;}
                    .fm-pdf-tbtn:hover{background:rgba(201,168,76,0.14);color:#C9A84C;}
                    .fm-pdf-tbtn:active{transform:scale(0.92);}
                    .fm-pdf-tbtn.active{background:#C9A84C;color:#fff;}
                    .fm-pdf-page-wrap{position:relative;margin:0 auto 16px;display:block;width:fit-content;border-radius:4px;overflow:hidden;}
                    .fm-pdf-page-wrap canvas.fm-pdf-render-canvas{display:block;max-width:100%;image-rendering:-webkit-optimize-contrast;box-shadow:0 2px 10px rgba(0,0,0,.14);}
                    .fm-pdf-draw-canvas{position:absolute;top:0;left:0;pointer-events:none;touch-action:none;}
                    #fm-pdf-pages.fm-pdf-draw-mode .fm-pdf-draw-canvas{pointer-events:auto;cursor:crosshair;}
                    #fm-pdf-pages{scroll-behavior:smooth;}
                    #fm-pdf-toolbar{transition:opacity .2s ease;}
                    </style>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js" onerror="window.__fmPdfJsLoadFailed = true;"></script>
                    <script>
                    (function(){
                        var src         = '<?php echo fm_enc($file_url); ?>';
                        var container   = document.getElementById('fm-pdf-pages');
                        var loading     = document.getElementById('fm-pdf-loading');
                        var googleFrame = document.getElementById('fm-pdf-google-frame');
                        var toolbar     = document.getElementById('fm-pdf-toolbar');
                        var pageNumEl   = document.getElementById('fm-pdf-pagenum');
                        var pageCountEl = document.getElementById('fm-pdf-pagecount');
                        var zoomLevelEl = document.getElementById('fm-pdf-zoomlevel');
                        var pencilBtn   = document.getElementById('fm-pdf-pencil-toggle');
                        var pencilClearBtn = document.getElementById('fm-pdf-pencil-clear');
                        var fullscreenBtn  = document.getElementById('fm-pdf-fullscreen');
                        var viewerEl       = document.getElementById('fm-pdf-viewer');
                        // Fallback: Google Docs viewer, used only if pdf.js can't load or render this file
                        function useGoogleFallback() {
                            googleFrame.src = 'https://docs.google.com/viewer?embedded=true&hl=en&url=' + encodeURIComponent(src);
                            googleFrame.style.display = 'block';
                            loading.style.display = 'none';
                        }
                        // pdf.js script itself failed to load (CDN blocked, offline, 404, etc.)
                        if (window.__fmPdfJsLoadFailed || typeof pdfjsLib === 'undefined') { useGoogleFallback(); return; }
                        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';
                        var pdfDoc = null;
                        var baseWidth = null;     // unscaled page width, for 100% / fit-width math
                        var zoomPct = 100;        // current zoom, 100% == fit width at first load
                        var pageEls = [];         // page wrapper divs, index 0 = page 1
                        var renderToken = 0;      // bumped on every re-render so stale renders can bail out
                        var pencilOn = false;
                        function fitWidthScale(unscaledWidth) {
                            var targetWidth = container.clientWidth || 900;
                            return targetWidth / unscaledWidth;
                        }
                        // Wire up freehand drawing on a page's overlay canvas
                        function attachPencil(drawCanvas) {
                            var ctx = drawCanvas.getContext('2d');
                            ctx.strokeStyle = '#C9A84C';
                            ctx.lineWidth = 2.5;
                            ctx.lineCap = 'round';
                            ctx.lineJoin = 'round';
                            var drawing = false;
                            function pos(e) {
                                // ctx is pre-scaled by devicePixelRatio via setTransform, so work in CSS pixels
                                var rect = drawCanvas.getBoundingClientRect();
                                var scaleX = rect.width ? (parseFloat(drawCanvas.style.width) || rect.width) / rect.width : 1;
                                var scaleY = rect.height ? (parseFloat(drawCanvas.style.height) || rect.height) / rect.height : 1;
                                return { x: (e.clientX - rect.left) * scaleX, y: (e.clientY - rect.top) * scaleY };
                            }
                            drawCanvas.addEventListener('pointerdown', function (e) {
                                if (!pencilOn) return;
                                drawing = true;
                                drawCanvas.setPointerCapture(e.pointerId);
                                var p = pos(e);
                                ctx.beginPath();
                                ctx.moveTo(p.x, p.y);
                            });
                            drawCanvas.addEventListener('pointermove', function (e) {
                                if (!pencilOn || !drawing) return;
                                var p = pos(e);
                                ctx.lineTo(p.x, p.y);
                                ctx.stroke();
                            });
                            function stopDrawing() { drawing = false; }
                            drawCanvas.addEventListener('pointerup', stopDrawing);
                            drawCanvas.addEventListener('pointerleave', stopDrawing);
                            drawCanvas.addEventListener('pointercancel', stopDrawing);
                        }
                        pencilBtn.addEventListener('click', function () {
                            pencilOn = !pencilOn;
                            pencilBtn.classList.toggle('active', pencilOn);
                            container.classList.toggle('fm-pdf-draw-mode', pencilOn);
                        });
                        // Figures out which page is actually on screen right now, instead of
                        // trusting pageNumEl.value (which only updates on a 'scroll' event and
                        // can be stale if the user hasn't scrolled yet / scrolled fast).
                        function getCurrentVisiblePage() {
                            var containerTop = container.getBoundingClientRect().top;
                            var closest = parseInt(pageNumEl.value, 10) || 1, closestDist = Infinity;
                            pageEls.forEach(function (el) {
                                var dist = Math.abs(el.getBoundingClientRect().top - containerTop);
                                if (dist < closestDist) { closestDist = dist; closest = parseInt(el.dataset.page, 10); }
                            });
                            return closest;
                        }
                        pencilClearBtn.addEventListener('click', function () {
                            // Clear pencil marks on every page, not just the one on screen —
                            // otherwise switching pages later would still show old drawings.
                            var pixelRatio = Math.min(window.devicePixelRatio || 1, 2);
                            pageEls.forEach(function (wrap) {
                                var drawCanvas = wrap.querySelector('.fm-pdf-draw-canvas');
                                if (!drawCanvas) return;
                                // Resetting .width fully resets the backing store (clears the
                                // bitmap AND drops any leftover transform) — more reliable than
                                // clearRect alone, which could leave stray pixels if the
                                // transform/state ever got out of sync.
                                drawCanvas.width = drawCanvas.width;
                                var dctx = drawCanvas.getContext('2d');
                                if (pixelRatio !== 1) dctx.setTransform(pixelRatio, 0, 0, pixelRatio, 0, 0);
                                dctx.strokeStyle = '#C9A84C';
                                dctx.lineWidth = 2.5;
                                dctx.lineCap = 'round';
                                dctx.lineJoin = 'round';
                            });
                        });
                        function renderPage(n) {
                            if (renderedPages[n]) return renderedPages[n]; // already rendered or in-flight
                            var wrap = pageEls[n - 1];
                            if (!wrap) return Promise.resolve();
                            var myToken = renderToken;
                            var p = pdfDoc.getPage(n).then(function (page) {
                                if (myToken !== renderToken || wrap.dataset.rendered === '1') return;
                                var unscaled = page.getViewport({ scale: 1 });
                                if (baseWidth === null) baseWidth = unscaled.width;
                                var scale = fitWidthScale(baseWidth) * (zoomPct / 100);
                                var viewport = page.getViewport({ scale: scale });
                                // Cap pixel ratio — full device ratio (3x on many phones) on every
                                // page is what makes long PDFs hang mobile browsers.
                                var pixelRatio = Math.min(window.devicePixelRatio || 1, 2);
                                wrap.innerHTML = '';
                                wrap.style.width = viewport.width + 'px';
                                wrap.style.height = viewport.height + 'px';
                                var canvas = document.createElement('canvas');
                                canvas.className = 'fm-pdf-render-canvas';
                                canvas.height = Math.floor(viewport.height * pixelRatio);
                                canvas.width = Math.floor(viewport.width * pixelRatio);
                                canvas.style.width = viewport.width + 'px';
                                canvas.style.height = viewport.height + 'px';
                                wrap.appendChild(canvas);
                                var drawCanvas = document.createElement('canvas');
                                drawCanvas.className = 'fm-pdf-draw-canvas';
                                drawCanvas.height = Math.floor(viewport.height * pixelRatio);
                                drawCanvas.width = Math.floor(viewport.width * pixelRatio);
                                drawCanvas.style.width = viewport.width + 'px';
                                drawCanvas.style.height = viewport.height + 'px';
                                wrap.appendChild(drawCanvas);
                                attachPencil(drawCanvas);
                                var renderCtx = canvas.getContext('2d');
                                var drawCtx = drawCanvas.getContext('2d');
                                if (pixelRatio !== 1) {
                                    renderCtx.setTransform(pixelRatio, 0, 0, pixelRatio, 0, 0);
                                    drawCtx.setTransform(pixelRatio, 0, 0, pixelRatio, 0, 0);
                                }
                                wrap.dataset.rendered = '1';
                                return page.render({ canvasContext: renderCtx, viewport: viewport }).promise;
                            });
                            renderedPages[n] = p;
                            return p;
                        }
                        function unrenderPage(n) {
                            // Free the canvas bitmaps for a page that's scrolled far out of view —
                            // keeps memory flat no matter how long the document is. The wrap div
                            // keeps its width/height so scroll position and layout don't jump.
                            var wrap = pageEls[n - 1];
                            if (!wrap || wrap.dataset.rendered !== '1') { delete renderedPages[n]; return; }
                            wrap.innerHTML = '';
                            wrap.dataset.rendered = '0';
                            delete renderedPages[n];
                        }
                        function layout() {
                            var myToken = ++renderToken;
                            container.innerHTML = '';
                            pageEls = [];
                            renderedPages = {};
                            if (renderIO) renderIO.disconnect();
                            if (unrenderIO) unrenderIO.disconnect();
                            var chain = Promise.resolve();
                            var _loop = function (n) {
                                chain = chain.then(function () {
                                    return pdfDoc.getPage(n).then(function (page) {
                                        if (myToken !== renderToken) return;
                                        var unscaled = page.getViewport({ scale: 1 });
                                        if (baseWidth === null) baseWidth = unscaled.width;
                                        var scale = fitWidthScale(baseWidth) * (zoomPct / 100);
                                        var viewport = page.getViewport({ scale: scale });
                                        var wrap = document.createElement('div');
                                        wrap.className = 'fm-pdf-page-wrap';
                                        wrap.dataset.page = n;
                                        wrap.dataset.rendered = '0';
                                        wrap.style.width = viewport.width + 'px';
                                        wrap.style.height = viewport.height + 'px';
                                        container.appendChild(wrap);
                                        pageEls.push(wrap);
                                        if (renderIO) renderIO.observe(wrap);
                                        if (unrenderIO) unrenderIO.observe(wrap);
                                    });
                                });
                            };
                            for (var n = 1; n <= pdfDoc.numPages; n++) { _loop(n); }
                            // Only the first couple of pages need to actually render before we
                            // reveal the viewer — the rest render lazily as the user scrolls.
                            return chain.then(function () {
                                if (myToken !== renderToken) return;
                                return renderPage(1);
                            });
                        }
                        // Renders pages as they approach the viewport and frees ones that
                        // scroll far away, so a 200-page PDF costs roughly the same memory
                        // as a 2-page one instead of rendering everything up front.
                        //
                        // Two separate observers with different margins (hysteresis) instead of
                        // one: with a single boundary, scrolling up and down near that line kept
                        // unrendering and immediately re-rendering the same page. Now a page only
                        // gets freed once it's well outside the zone that triggers rendering, so
                        // normal scrolling doesn't cross both boundaries repeatedly.
                        var renderIO = ('IntersectionObserver' in window) ? new IntersectionObserver(function (entries) {
                            entries.forEach(function (entry) {
                                if (entry.isIntersecting) renderPage(parseInt(entry.target.dataset.page, 10));
                            });
                        }, { root: container, rootMargin: '150% 0px', threshold: 0.01 }) : null;
                        var unrenderIO = ('IntersectionObserver' in window) ? new IntersectionObserver(function (entries) {
                            entries.forEach(function (entry) {
                                if (!entry.isIntersecting) unrenderPage(parseInt(entry.target.dataset.page, 10));
                            });
                        }, { root: container, rootMargin: '400% 0px', threshold: 0 }) : null;
                        var renderedPages = {};
                        function renderAll() {
                            // Used after zoom/resize changes — re-lay-out placeholders at the
                            // new scale and re-render only what's currently visible.
                            return layout();
                        }
                        if (!renderIO) {
                            // No IntersectionObserver support (very old browser) — fall back to
                            // rendering everything up front, same as before.
                            renderPage = function (n) {
                                var wrap = pageEls[n - 1];
                                if (!wrap) return Promise.resolve();
                                return pdfDoc.getPage(n).then(function (page) {
                                    var unscaled = page.getViewport({ scale: 1 });
                                    if (baseWidth === null) baseWidth = unscaled.width;
                                    var scale = fitWidthScale(baseWidth) * (zoomPct / 100);
                                    var viewport = page.getViewport({ scale: scale });
                                    var pixelRatio = Math.min(window.devicePixelRatio || 1, 2);
                                    var canvas = document.createElement('canvas');
                                    canvas.className = 'fm-pdf-render-canvas';
                                    canvas.height = Math.floor(viewport.height * pixelRatio);
                                    canvas.width = Math.floor(viewport.width * pixelRatio);
                                    canvas.style.width = viewport.width + 'px';
                                    canvas.style.height = viewport.height + 'px';
                                    wrap.appendChild(canvas);
                                    var renderCtx = canvas.getContext('2d');
                                    if (pixelRatio !== 1) renderCtx.setTransform(pixelRatio, 0, 0, pixelRatio, 0, 0);
                                    wrap.dataset.rendered = '1';
                                    return page.render({ canvasContext: renderCtx, viewport: viewport }).promise;
                                });
                            };
                            renderAll = function () {
                                var myToken = ++renderToken;
                                container.innerHTML = '';
                                pageEls = [];
                                var chain = Promise.resolve();
                                var _loop2 = function (n) {
                                    chain = chain.then(function () {
                                        return pdfDoc.getPage(n).then(function (page) {
                                            if (myToken !== renderToken) return;
                                            var unscaled = page.getViewport({ scale: 1 });
                                            if (baseWidth === null) baseWidth = unscaled.width;
                                            var scale = fitWidthScale(baseWidth) * (zoomPct / 100);
                                            var viewport = page.getViewport({ scale: scale });
                                            var wrap = document.createElement('div');
                                            wrap.className = 'fm-pdf-page-wrap';
                                            wrap.dataset.page = n;
                                            wrap.style.width = viewport.width + 'px';
                                            wrap.style.height = viewport.height + 'px';
                                            container.appendChild(wrap);
                                            pageEls.push(wrap);
                                            return renderPage(n);
                                        });
                                    });
                                };
                                for (var n2 = 1; n2 <= pdfDoc.numPages; n2++) { _loop2(n2); }
                                return chain;
                            };
                        }
                        function goToPage(n) {
                            n = Math.max(1, Math.min(pdfDoc.numPages, n));
                            var el = pageEls[n - 1];
                            if (el) { renderPage(n); el.scrollIntoView({ behavior: 'smooth', block: 'start' }); }
                            pageNumEl.value = n;
                        }
                        function setZoom(pct) {
                            zoomPct = Math.max(40, Math.min(300, pct));
                            zoomLevelEl.textContent = Math.round(zoomPct) + '%';
                            var currentPage = parseInt(pageNumEl.value, 10) || 1;
                            renderAll().then(function () { goToPage(currentPage); });
                        }
                        document.getElementById('fm-pdf-prev').addEventListener('click', function () {
                            goToPage((parseInt(pageNumEl.value, 10) || 1) - 1);
                        });
                        document.getElementById('fm-pdf-next').addEventListener('click', function () {
                            goToPage((parseInt(pageNumEl.value, 10) || 1) + 1);
                        });
                        pageNumEl.addEventListener('change', function () {
                            goToPage(parseInt(pageNumEl.value, 10) || 1);
                        });
                        document.getElementById('fm-pdf-zoomin').addEventListener('click', function () { setZoom(zoomPct + 20); });
                        document.getElementById('fm-pdf-zoomout').addEventListener('click', function () { setZoom(zoomPct - 20); });
                        document.getElementById('fm-pdf-fitwidth').addEventListener('click', function () { setZoom(100); });
                        // Fullscreen toggle
                        fullscreenBtn.addEventListener('click', function () {
                            if (!document.fullscreenElement) {
                                (viewerEl.requestFullscreen || viewerEl.webkitRequestFullscreen || viewerEl.msRequestFullscreen).call(viewerEl);
                            } else {
                                (document.exitFullscreen || document.webkitExitFullscreen || document.msExitFullscreen).call(document);
                            }
                        });
                        function updateFullscreenIcon() {
                            var on = !!document.fullscreenElement;
                            fullscreenBtn.innerHTML = on ? '<i class="fa fa-compress"></i>' : '<i class="fa fa-expand"></i>';
                            fullscreenBtn.title = on ? 'Exit fullscreen' : 'Fullscreen';
                            viewerEl.style.borderRadius = on ? '0' : '14px';
                            viewerEl.style.maxWidth = on ? 'none' : '100%';
                            viewerEl.style.minHeight = on ? '100vh' : '85vh';
                            container.style.maxHeight = on ? '100vh' : '85vh';
                            // Entering/exiting fullscreen changes the container's real pixel
                            // width, but nothing else re-renders the pages at that new width —
                            // that's what left the viewer's height/width wrong after returning.
                            // Wait a tick for the browser to finish resizing the element, then
                            // re-layout at the current page.
                            if (pdfDoc) {
                                setTimeout(function () {
                                    var currentPage = getCurrentVisiblePage();
                                    renderAll().then(function () { goToPage(currentPage); });
                                }, 60);
                            }
                        }
                        ['fullscreenchange', 'webkitfullscreenchange', 'msfullscreenchange'].forEach(function (evt) {
                            document.addEventListener(evt, updateFullscreenIcon);
                        });
                        // General safety net: also re-layout on plain window resize (orientation
                        // change, browser resize, etc.) so the viewer never gets stuck at a
                        // stale scale.
                        var pdfResizeTimer = null;
                        window.addEventListener('resize', function () {
                            if (!pdfDoc) return;
                            clearTimeout(pdfResizeTimer);
                            pdfResizeTimer = setTimeout(function () {
                                var currentPage = getCurrentVisiblePage();
                                renderAll().then(function () { goToPage(currentPage); });
                            }, 150);
                        });
                        // Ctrl/Cmd + mouse wheel = zoom, like a real PDF viewer
                        var wheelZoomTimer = null;
                        container.addEventListener('wheel', function (e) {
                            if (!(e.ctrlKey || e.metaKey)) return; // plain wheel still scrolls normally
                            e.preventDefault();
                            var delta = e.deltaY < 0 ? 10 : -10;
                            zoomPct = Math.max(40, Math.min(300, zoomPct + delta));
                            zoomLevelEl.textContent = Math.round(zoomPct) + '%';
                            clearTimeout(wheelZoomTimer);
                            wheelZoomTimer = setTimeout(function () {
                                var currentPage = parseInt(pageNumEl.value, 10) || 1;
                                renderAll().then(function () { goToPage(currentPage); });
                            }, 120); // debounce so rapid wheel ticks don't re-render every frame
                        }, { passive: false });
                        // Keep the page number box in sync while the user scrolls
                        container.addEventListener('scroll', function () {
                            pageNumEl.value = getCurrentVisiblePage();
                        });
                        pdfjsLib.getDocument(src).promise.then(function (pdf) {
                            pdfDoc = pdf;
                            pageCountEl.textContent = '/ ' + pdf.numPages;
                            pageNumEl.max = pdf.numPages;
                            // Reveal the (empty) container BEFORE laying out pages. layout()
                            // needs container.clientWidth to compute the fit-width scale, but
                            // while display:none that reads 0, so it fell back to a hardcoded
                            // 900px — wrong on most screens, which is why the first page always
                            // looked zoomed/stretched until a manual zoom recalculated it against
                            // the real (by-then-visible) width. The loading spinner is an
                            // absolutely-positioned overlay covering the whole viewer, so showing
                            // the container now causes no visual flash.
                            container.style.display = 'block';
                            return layout();
                        }).then(function () {
                            loading.style.display = 'none';
                            toolbar.style.display = 'flex';
                        }).catch(function (err) {
                            console.warn('pdf.js failed to render this PDF, falling back to Google Docs viewer:', err);
                            container.innerHTML = '';
                            useGoogleFallback();
                        });
                    })();
                    </script>
                    <?php
                } elseif ($is_onlineViewer) {
                    if (in_array($ext, array('doc','docx','xls','xlsx','ppt','pptx','odt','ods','odp'))) {
                        $msUrl = 'https://view.officeapps.live.com/op/embed.aspx?src=' . urlencode($file_url);
                        $gUrl  = 'https://docs.google.com/viewer?embedded=true&hl=en&url=' . urlencode($file_url);
                        $useMs = false;
                        // Server-side check: MS viewer returns HTTP 200 with an error page INSIDE
                        // the body when it can't fetch the source file, so status code alone lies.
                        // Must inspect body for its known failure markers before trusting it.
                        if (function_exists('curl_init')) {
                            $ch = curl_init($msUrl);
                            curl_setopt_array($ch, array(
                                CURLOPT_RETURNTRANSFER => true,
                                CURLOPT_TIMEOUT => 5,
                                CURLOPT_SSL_VERIFYPEER => true,
                                CURLOPT_USERAGENT => 'Mozilla/5.0 (compatible; FileManagerViewerCheck/1.0)',
                            ));
                            $body = curl_exec($ch);
                            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                            $curlErr = curl_errno($ch);
                            curl_close($ch);
                            if (!$curlErr && $httpCode === 200 && $body !== false
                                && stripos($body, 'not found') === false
                                && stripos($body, 'error') === false
                                && stripos($body, 'unable to') === false) {
                                $useMs = true;
                            }
                        }
                        $viewUrl = $useMs ? $msUrl : $gUrl;
                        echo '<div style="border-radius:14px;overflow:hidden;border:none;width:100%;max-width:100%;"><iframe src="' . fm_enc($viewUrl) . '" frameborder="0" style="width:100%;min-height:85vh;border:none;display:block;"></iframe></div>';
                    } else {
                        echo '<div style="border-radius:14px;overflow:hidden;border:none;width:100%;max-width:100%;"><iframe src="https://docs.google.com/viewer?embedded=true&hl=en&url=' . fm_enc($file_url) . '" frameborder="0" style="width:100%;min-height:85vh;border:none;display:block;"></iframe></div>';
                    }
                } elseif ($is_zip) {
                    if ($filenames !== false) {
                        echo '<code class="maxheight">';
                        foreach ($filenames as $fn) {
                            if ($fn['folder']) {
                                echo '<b>' . fm_enc($fn['name']) . '</b><br>';
                            } else {
                                echo fm_enc($fn['name']) . ' (' . fm_get_filesize($fn['filesize']) . ')<br>';
                            }
                        }
                        echo '</code>';
                    } else {
                        echo '<p>' . lng('Error while fetching archive info') . '</p>';
                    }
                } elseif ($is_image) {
                    if (in_array($ext, array('gif', 'jpg', 'jpeg', 'png', 'bmp', 'ico', 'svg', 'webp', 'avif'))) {
                        echo '<div class="fm-media-wrap"><img src="' . fm_enc($file_url) . '" alt="image" class="preview-img fm-media-img"></div>';
                    }
                } elseif ($is_audio) {
                    echo '<div class="fm-media-wrap fm-media-audio"><audio src="' . fm_enc($file_url) . '" controls preload="metadata" class="fm-audio-player"></audio></div>';
                } elseif ($is_video) {
                    echo '<div class="fm-media-wrap fm-media-video"><video src="' . fm_enc($file_url) . '" controls preload="metadata" class="fm-video-player"></video></div>';
                } elseif ($is_text) {
                    if (FM_USE_HIGHLIGHTJS) {
                        $hljs_classes = array(
                            'shtml' => 'xml',
                            'htaccess' => 'apache',
                            'phtml' => 'php',
                            'lock' => 'json',
                            'svg' => 'xml',
                        );
                        $hljs_class = isset($hljs_classes[$ext]) ? 'lang-' . $hljs_classes[$ext] : 'lang-' . $ext;
                        if (empty($ext) || in_array(strtolower($file), fm_get_text_names()) || preg_match('#\.min\.(css|js)$#i', $file)) {
                            $hljs_class = 'nohighlight';
                        }
                        $content = '<pre class="with-hljs"><code class="' . $hljs_class . '">' . fm_enc($content) . '</code></pre>';
                    } elseif (in_array($ext, array('php', 'php4', 'php5', 'phtml', 'phps'))) {
                        $content = highlight_string($content, true);
                    } else {
                        $content = '<pre>' . fm_enc($content) . '</pre>';
                    }
                    echo $content;
                }
                ?>
                </div>
            </div>
        </div>
    </div>
<?php
    fm_show_footer();
    exit;
}
if (isset($_GET['edit']) && !FM_READONLY) {
    $file = $_GET['edit'];
    $file = fm_clean_path($file, false);
    $file = str_replace('/', '', $file);
    if ($file == '' || !is_file($path . '/' . $file) || !fm_is_exclude_items($file, $path . '/' . $file)) {
        fm_set_msg(lng('File not found'), 'error');
        $FM_PATH = FM_PATH;
        fm_redirect(FM_SELF_URL . '?dir=' . urlencode($FM_PATH));
    }
    $editFile = ' : <i><b>' . $file . '</b></i>';
    header('X-XSS-Protection:0');
    fm_show_header(); 
    fm_show_nav_path(FM_PATH); 
    $file_url = FM_ROOT_URL . fm_convert_win((FM_PATH != '' ? '/' . FM_PATH : '') . '/' . $file);
    $file_path = $path . '/' . $file;
    $isNormalEditor = true;
    if (isset($_GET['env'])) {
        if ($_GET['env'] == "ace") {
            $isNormalEditor = false;
        }
    }
    if (isset($_POST['savedata'])) {
        $writedata = $_POST['savedata'];
        $fd = fopen($file_path, "w");
        @fwrite($fd, $writedata);
        fclose($fd);
        fm_set_msg(lng('File Saved Successfully'));
    }
    $ext = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
    $mime_type = fm_get_mime_type($file_path);
    $filesize = filesize($file_path);
    $is_text = false;
    $content = ''; 
    if (in_array($ext, fm_get_text_exts()) || substr($mime_type, 0, 4) == 'text' || in_array($mime_type, fm_get_text_mimes())) {
        $is_text = true;
        $content = file_get_contents($file_path);
    }
?>
    <div class="path" style="padding:4px 0 0;">
        <!-- Editor top bar: single row, action buttons + ace toolbar -->
        <div style="display:flex;align-items:center;gap:6px;flex-wrap:wrap;margin-bottom:4px;">
            <!-- Action buttons always first -->
            <div class="fm-action-bar" style="flex-shrink:0;margin-bottom:0;">
                <a title="<?php echo lng('Back') ?>" class="fm-btn fm-btn-outline" href="?dir=<?php echo urlencode(trim(FM_PATH)) ?>&amp;view=<?php echo urlencode($file) ?>"><i class="fa fa-chevron-left"></i> <?php echo lng('Back') ?></a>
                <a title="<?php echo lng('BackUp') ?>" class="fm-btn fm-btn-outline" href="javascript:void(0);" onclick="backup('<?php echo urlencode(trim(FM_PATH)) ?>','<?php echo urlencode($file) ?>')"><i class="fa fa-database"></i> <?php echo lng('BackUp') ?></a>
                <?php if ($is_text) { ?>
                    <?php if ($isNormalEditor) { ?>
                        <a title="Advanced" class="fm-btn fm-btn-primary" href="?dir=<?php echo urlencode(trim(FM_PATH)) ?>&amp;edit=<?php echo urlencode($file) ?>&amp;env=ace"><i class="fa fa-pencil-square-o"></i> <?php echo lng('AdvancedEditor') ?></a>
                        <button type="button" class="fm-btn fm-btn-save" name="Save" data-url="<?php echo fm_enc($file_url) ?>" onclick="edit_save(this,'nrl')"><i class="fa fa-floppy-o"></i> <?php echo lng('Save') ?></button>
                    <?php } else { ?>
                        <a title="Plain Editor" class="fm-btn fm-btn-outline" href="?dir=<?php echo urlencode(trim(FM_PATH)) ?>&amp;edit=<?php echo urlencode($file) ?>"><i class="fa fa-text-height"></i> <?php echo lng('NormalEditor') ?></a>
                        <button type="button" class="fm-btn fm-btn-save" name="Save" data-url="<?php echo fm_enc($file_url) ?>" onclick="edit_save(this,'ace')"><i class="fa fa-floppy-o"></i> <?php echo lng('Save') ?></button>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
        <?php
        if ($is_text && $isNormalEditor) {
            echo '<div style="width:100%;"><textarea id="normal-editor" rows="33" style="width:100%;padding:12px 14px;font-family:monospace;font-size:14px;line-height:1.6;border:1px solid var(--ios-gray4);border-radius:12px;background:var(--ios-bg2);color:var(--ios-label);resize:vertical;outline:none;white-space:pre;overflow-x:auto;overflow-y:auto;display:block;box-sizing:border-box;" wrap="off">' . htmlspecialchars($content) . '</textarea></div>';
            echo '<script>document.addEventListener("keydown", function(e) {if ((window.navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)  && e.keyCode == 83) { e.preventDefault();edit_save(this,"nrl");}}, false);</script>';
        } elseif ($is_text) {
            echo '
<style>
#ace-editor-wrap { position:relative; width:100%; border:1px solid var(--ios-gray4); border-radius:12px; overflow:clip; margin-top:8px; }
#editor { width:100%!important; height:calc(100vh - 200px); min-height:420px; display:block; }
/* Slim toolbar ABOVE editor content — sits in a dedicated bar, never over text */
#ace-toolbar-bar {
    display:flex; align-items:center; gap:2px; flex-wrap:nowrap;
    padding:4px 6px; overflow-x:auto; overflow-y:hidden;
    scrollbar-width:none; -ms-overflow-style:none;
    background:var(--ios-bg2);
    border-bottom:1px solid var(--ios-sep);
    min-height:36px;
}
#ace-toolbar-bar::-webkit-scrollbar { display:none; }
.ace-tb-btn {
    display:inline-flex; align-items:center; justify-content:center;
    width:26px; height:26px; flex-shrink:0;
    border:1px solid rgba(201,168,76,0.16); border-radius:5px;
    background:rgba(201,168,76,0.07); color:#C9A84C;
    font-size:11px; cursor:pointer; padding:0; line-height:1;
    transition:background 0.12s,transform 0.1s;
}
.ace-tb-btn:hover { background:rgba(201,168,76,0.15); }
.ace-tb-btn:active { transform:scale(0.92); }
.ace-tb-div { width:1px; height:14px; background:rgba(201,168,76,0.16); margin:0 3px; flex-shrink:0; }
.ace-tb-sel {
    height:26px; flex-shrink:0;
    border:1px solid rgba(201,168,76,0.16); border-radius:5px;
    background:rgba(201,168,76,0.07); color:#C9A84C;
    font-size:10px; font-family:"Inter",sans-serif; font-weight:600;
    cursor:pointer; outline:none; padding:0 14px 0 4px;
    -webkit-appearance:none; appearance:none;
    background-image:url("data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'7\' height=\'4\' viewBox=\'0 0 7 4\'%3E%3Cpath fill=\'%23C9A84C\' d=\'M0 0l3.5 4L7 0z\'/%3E%3C/svg%3E");
    background-repeat:no-repeat; background-position:right 3px center;
    text-overflow:ellipsis; overflow:hidden; white-space:nowrap;
    max-width:80px; min-width:54px;
}
.ace-tb-sel:hover { background-color:rgba(201,168,76,0.12); }
#js-ace-fontSize { max-width:46px; min-width:40px; }
</style>
<div id="ace-editor-wrap">
    <!-- Toolbar bar: fixed height strip ABOVE editor — no overlap ever -->
    <div id="ace-toolbar-bar" class="js-ace-toolbar">
        <button data-cmd="none" data-option="fullscreen" class="ace-tb-btn" title="Fullscreen"><i class="fa fa-expand"></i></button>
        <button data-cmd="find"                          class="ace-tb-btn" title="Find"><i class="fa fa-search"></i></button>
        <button data-cmd="undo"                          class="ace-tb-btn" title="Undo"><i class="fa fa-undo"></i></button>
        <button data-cmd="redo"                          class="ace-tb-btn" title="Redo"><i class="fa fa-repeat"></i></button>
        <button data-cmd="none" data-option="wrap"       class="ace-tb-btn" title="Word Wrap"><i class="fa fa-text-width"></i></button>
        <div class="ace-tb-div"></div>
        <select id="js-ace-mode"     data-type="mode"     class="ace-tb-sel" title="Mode"><option>Mode</option></select>
        <select id="js-ace-theme"    data-type="theme"    class="ace-tb-sel" title="Theme"><option>Theme</option></select>
        <select id="js-ace-fontSize" data-type="fontSize" class="ace-tb-sel" title="Size"><option>Sz</option></select>
    </div>
    <div id="editor">' . htmlspecialchars($content) . '</div>
</div>
';
        } else {
            fm_set_msg(lng('FILE EXTENSION HAS NOT SUPPORTED'), 'error');
        }
        ?>
    </div>
<?php
    fm_show_footer();
    exit;
}
if (isset($_GET['chmod']) && !FM_READONLY && !FM_IS_WIN) {
    $file = $_GET['chmod'];
    $file = fm_clean_path($file);
    $file = str_replace('/', '', $file);
    if ($file == '' || (!is_file($path . '/' . $file) && !is_dir($path . '/' . $file))) {
        fm_set_msg(lng('File not found'), 'error');
        $FM_PATH = FM_PATH;
        fm_redirect(FM_SELF_URL . '?dir=' . urlencode($FM_PATH));
    }
    fm_show_header(); 
    fm_show_nav_path(FM_PATH); 
    $file_url = FM_ROOT_URL . (FM_PATH != '' ? '/' . FM_PATH : '') . '/' . $file;
    $file_path = $path . '/' . $file;
    $mode = fileperms($path . '/' . $file);
?>
    <div class="path" style="margin-bottom:14px;">
        <div class="card mb-2" style="border-radius:16px;overflow:hidden;">
            <h6 class="card-header" style="padding:14px 18px;">
                <i class="fa fa-lock" style="color:#C9A84C;margin-right:6px;"></i><?php echo lng('ChangePermissions') ?>
            </h6>
            <div class="card-body">
                <p class="card-text">
                    <?php $display_path = fm_get_display_path($file_path); ?>
                    <?php echo $display_path['label']; ?>: <?php echo $display_path['path']; ?><br>
                </p>
                <form action="" method="post">
                    <input type="hidden" name="dir" value="<?php echo fm_enc(FM_PATH) ?>">
                    <input type="hidden" name="chmod" value="<?php echo fm_enc($file) ?>">
                    <table class="table compact-table">
                        <tr>
                            <td></td>
                            <td><b><?php echo lng('Owner') ?></b></td>
                            <td><b><?php echo lng('Group') ?></b></td>
                            <td><b><?php echo lng('Other') ?></b></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><b><?php echo lng('Read') ?></b></td>
                            <td><label><input type="checkbox" name="ur" value="1" <?php echo ($mode & 00400) ? ' checked' : '' ?>></label></td>
                            <td><label><input type="checkbox" name="gr" value="1" <?php echo ($mode & 00040) ? ' checked' : '' ?>></label></td>
                            <td><label><input type="checkbox" name="or" value="1" <?php echo ($mode & 00004) ? ' checked' : '' ?>></label></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><b><?php echo lng('Write') ?></b></td>
                            <td><label><input type="checkbox" name="uw" value="1" <?php echo ($mode & 00200) ? ' checked' : '' ?>></label></td>
                            <td><label><input type="checkbox" name="gw" value="1" <?php echo ($mode & 00020) ? ' checked' : '' ?>></label></td>
                            <td><label><input type="checkbox" name="ow" value="1" <?php echo ($mode & 00002) ? ' checked' : '' ?>></label></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><b><?php echo lng('Execute') ?></b></td>
                            <td><label><input type="checkbox" name="ux" value="1" <?php echo ($mode & 00100) ? ' checked' : '' ?>></label></td>
                            <td><label><input type="checkbox" name="gx" value="1" <?php echo ($mode & 00010) ? ' checked' : '' ?>></label></td>
                            <td><label><input type="checkbox" name="ox" value="1" <?php echo ($mode & 00001) ? ' checked' : '' ?>></label></td>
                        </tr>
                    </table>
                    <p>
                        <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                        <b><a href="?dir=<?php echo urlencode(FM_PATH) ?>" class="btn btn-act-purple-outline"><i class="fa fa-times-circle"></i> <?php echo lng('Cancel') ?></a></b>&nbsp;
                        <button type="submit" class="btn btn-success" style="border-radius:10px;font-weight:500;"><i class="fa fa-check-circle"></i> <?php echo lng('Change') ?></button>
                    </p>
                </form>
            </div>
        </div>
    </div>
<?php
    fm_show_footer();
    exit;
}
fm_show_header(); 
fm_show_nav_path(FM_PATH); 
fm_show_message();
$num_files = count($files);
$num_folders = count($folders);
$all_files_size = 0;
?>
<div class="mt-2 mb-3">
</div>
<form action="" method="post" class="pt-0">
    <input type="hidden" name="dir" value="<?php echo fm_enc(FM_PATH) ?>">
    <input type="hidden" name="group" value="1">
    <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
    <div style="border-radius:14px;border:0.5px solid var(--ios-sep);box-shadow:0 1px 4px rgba(0,0,0,0.06);margin-bottom:12px;overflow:clip;<?php echo (empty($folders) && empty($files)) ? 'display:none;' : '' ?>">
        <div style="overflow-x:auto;-webkit-overflow-scrolling:touch;">
        <table class="table table-hover table-sm" id="main-table" style="min-width:600px;margin:0;border-radius:0;border:none;box-shadow:none;width:100%;">
            <thead class="thead-white">
                <tr>
                    <?php if (!FM_READONLY): ?>
                        <th style="width:3%" class="custom-checkbox-header">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="js-select-all-items" onclick="checkbox_toggle()">
                                <label class="custom-control-label" for="js-select-all-items"></label>
                            </div>
                        </th><?php endif; ?>
                    <th style="font-family:'Inter',sans-serif;"><?php echo lng('Name') ?></th>
                    <th style="font-family:'Inter',sans-serif;"><?php echo lng('Size') ?></th>
                    <th style="font-family:'Inter',sans-serif;"><?php echo lng('Modified') ?></th>
                    <?php if (!FM_IS_WIN && !$hide_Cols): ?>
                        <th style="font-family:'Inter',sans-serif;"><?php echo lng('Perms') ?></th>
                        <th style="font-family:'Inter',sans-serif;"><?php echo lng('Owner') ?></th><?php endif; ?>
                    <?php if (!FM_READONLY_NODOWNLOAD): ?>
                    <th style="font-family:'Inter',sans-serif;"><?php echo lng('Actions') ?></th>
                    <?php endif; ?>
                </tr>
            </thead>
            <tbody>
            <?php
            if ($parent !== false) {
            ?>
                <tr><?php if (!FM_READONLY): ?>
                        <td class="nosort"></td><?php endif; ?>
                    <td class="border-0" data-sort><a href="?dir=<?php echo urlencode($parent) ?>" style="color:#C9A84C !important;font-weight:600;"><i class="fa fa-chevron-circle-left go-back"></i> ..</a></td>
                    <td class="border-0" data-order></td>
                    <td class="border-0" data-order></td>
                    <?php if (!FM_IS_WIN && !$hide_Cols) { ?>
                        <td class="border-0"></td>
                        <td class="border-0"></td>
                    <?php } ?>
                    <?php if (!FM_READONLY_NODOWNLOAD): ?><td class="border-0"></td><?php endif; ?>
                </tr>
            <?php
            }
            $ii = 3399;
            foreach ($folders as $f) {
                $is_link = is_link($path . '/' . $f);
                $img = $is_link ? 'icon-link_folder' : 'fa fa-folder-o';
                $modif_raw = filemtime($path . '/' . $f);
                $modif = date(FM_DATETIME_FORMAT, $modif_raw);
                $date_sorting = strtotime(date("F d Y H:i:s.", $modif_raw));
                $filesize_raw = fm_get_dir_size($path . '/' . $f);
                $filesize = fm_get_filesize($filesize_raw);
                $all_files_size += $filesize_raw;
                $perms = substr(decoct(fileperms($path . '/' . $f)), -4);
                $og = fm_resolve_owner_group($path . '/' . $f);
                $owner = array('name' => $og['owner']);
                $group = array('name' => $og['group']);
            ?>
                <tr>
                    <?php if (!FM_READONLY): ?>
                        <td class="custom-checkbox-td">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="<?php echo $ii ?>" name="file[]" value="<?php echo fm_enc($f) ?>">
                                <label class="custom-control-label" for="<?php echo $ii ?>"></label>
                            </div>
                        </td>
                    <?php endif; ?>
                    <td data-sort="<?php echo fm_convert_win(fm_enc($f)) ?>">
                        <div class="filename">
                            <a href="?dir=<?php echo urlencode(trim(FM_PATH . '/' . $f, '/')) ?>"><i class="<?php echo $img ?>"></i> <?php echo fm_convert_win(fm_enc($f)) ?></a>
                            <?php echo ($is_link ? ' &rarr; <i>' . fm_enc(readlink($path . '/' . $f)) . '</i>' : '') ?>
                        </div>
                    </td>
                    <td data-order="a-<?php echo str_pad($filesize_raw, 18, "0", STR_PAD_LEFT); ?>">
                        <?php echo $filesize; ?>
                    </td>
                    <td data-order="a-<?php echo $date_sorting; ?>"><?php echo $modif ?></td>
                    <?php if (!FM_IS_WIN && !$hide_Cols): ?>
                        <td>
                            <?php if (!FM_READONLY): ?><a title="Change Permissions" href="?dir=<?php echo urlencode(FM_PATH) ?>&amp;chmod=<?php echo urlencode($f) ?>" style="color:#C9A84C!important;font-weight:600;"><?php echo $perms ?></a><?php else: ?><span style="color:#C9A84C;font-weight:600;"><?php echo $perms ?></span><?php endif; ?>
                        </td>
                        <td>
                            <?php echo $owner['name'] . ':' . $group['name'] ?>
                        </td>
                    <?php endif; ?>
                    <?php if (!FM_READONLY_NODOWNLOAD): ?>
                    <td class="inline-actions">
                        <?php if (!FM_READONLY): ?>
                            <a title="<?php echo lng('Delete') ?>" href="?dir=<?php echo urlencode(FM_PATH) ?>&amp;del=<?php echo urlencode($f) ?>" onclick="confirmDailog(event, '1028','<?php echo lng('Delete') . ' ' . lng('Folder'); ?>','<?php echo urlencode($f) ?>', this.href);"> <i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            <a title="<?php echo lng('Rename') ?>" href="#" onclick="rename('<?php echo fm_enc(addslashes(FM_PATH)) ?>', '<?php echo fm_enc(addslashes($f)) ?>');return false;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            <a title="<?php echo lng('CopyTo') ?>..." href="?dir=&amp;copy=<?php echo urlencode(trim(FM_PATH . '/' . $f, '/')) ?>"><i class="fa fa-files-o" aria-hidden="true"></i></a>
                        <?php endif; ?>
                        <a title="<?php echo lng('DirectLink') ?>" href="<?php echo fm_enc(FM_ROOT_URL . (FM_PATH != '' ? '/' . FM_PATH : '') . '/' . $f . '/') ?>" target="_blank"><i class="fa fa-link" aria-hidden="true"></i></a>
                    </td>
                    <?php endif; ?>
                </tr>
            <?php
                flush();
                $ii++;
            }
            $ik = 8002;
            foreach ($files as $f) {
                $is_link = is_link($path . '/' . $f);
                $img = $is_link ? 'fa fa-file-text-o' : fm_get_file_icon_class($path . '/' . $f);
                $modif_raw = filemtime($path . '/' . $f);
                $modif = date(FM_DATETIME_FORMAT, $modif_raw);
                $date_sorting = strtotime(date("F d Y H:i:s.", $modif_raw));
                $filesize_raw = fm_get_size($path . '/' . $f);
                $filesize = fm_get_filesize($filesize_raw);
                $filelink = '?dir=' . urlencode(FM_PATH) . '&amp;view=' . urlencode($f);
                $all_files_size += $filesize_raw;
                $perms = substr(decoct(fileperms($path . '/' . $f)), -4);
                $og = fm_resolve_owner_group($path . '/' . $f);
                $owner = array('name' => $og['owner']);
                $group = array('name' => $og['group']);
            ?>
                <tr>
                    <?php if (!FM_READONLY): ?>
                        <td class="custom-checkbox-td">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="<?php echo $ik ?>" name="file[]" value="<?php echo fm_enc($f) ?>">
                                <label class="custom-control-label" for="<?php echo $ik ?>"></label>
                            </div>
                        </td><?php endif; ?>
                    <td data-sort="<?php echo fm_enc($f) ?>">
                        <div class="filename">
                            <?php
                            if (in_array(strtolower(pathinfo($f, PATHINFO_EXTENSION)), array('gif', 'jpg', 'jpeg', 'png', 'bmp', 'ico', 'svg', 'webp', 'avif'))): ?>
                                <?php $imagePreview = fm_enc(FM_ROOT_URL . (FM_PATH != '' ? '/' . FM_PATH : '') . '/' . $f); ?>
                                <a href="<?php echo $filelink ?>" data-preview-image="<?php echo $imagePreview ?>" title="<?php echo fm_enc($f) ?>">
                                <?php else: ?>
                                    <a href="<?php echo $filelink ?>" title="<?php echo fm_enc($f) ?>">
                                    <?php endif; ?>
                                    <i class="<?php echo $img ?>"></i> <?php echo fm_convert_win(fm_enc($f)) ?>
                                    </a>
                                    <?php echo ($is_link ? ' &rarr; <i>' . fm_enc(readlink($path . '/' . $f)) . '</i>' : '') ?>
                        </div>
                    </td>
                    <td data-order="b-<?php echo str_pad($filesize_raw, 18, "0", STR_PAD_LEFT); ?>"><span title="<?php printf('%s bytes', $filesize_raw) ?>">
                            <?php echo $filesize; ?>
                        </span></td>
                    <td data-order="b-<?php echo $date_sorting; ?>"><?php echo $modif ?></td>
                    <?php if (!FM_IS_WIN && !$hide_Cols): ?>
                        <td><?php if (!FM_READONLY): ?><a title="<?php echo 'Change Permissions' ?>" href="?dir=<?php echo urlencode(FM_PATH) ?>&amp;chmod=<?php echo urlencode($f) ?>" style="color:#C9A84C!important;font-weight:600;"><?php echo $perms ?></a><?php else: ?><span style="color:#C9A84C;font-weight:600;"><?php echo $perms ?></span><?php endif; ?>
                        </td>
                        <td><?php echo fm_enc($owner['name'] . ':' . $group['name']) ?></td>
                    <?php endif; ?>
                    <?php if (!FM_READONLY_NODOWNLOAD): ?>
                    <td class="inline-actions">
                        <?php if (!FM_READONLY): ?>
                            <a title="<?php echo lng('Delete') ?>" href="?dir=<?php echo urlencode(FM_PATH) ?>&amp;del=<?php echo urlencode($f) ?>" onclick="confirmDailog(event, 1209, '<?php echo lng('Delete') . ' ' . lng('File'); ?>','<?php echo urlencode($f); ?>', this.href);"> <i class="fa fa-trash-o"></i></a>
                            <a title="<?php echo lng('Rename') ?>" href="#" onclick="rename('<?php echo fm_enc(addslashes(FM_PATH)) ?>', '<?php echo fm_enc(addslashes($f)) ?>');return false;"><i class="fa fa-pencil-square-o"></i></a>
                            <a title="<?php echo lng('CopyTo') ?>..."
                                href="?dir=<?php echo urlencode(FM_PATH) ?>&amp;copy=<?php echo urlencode(trim(FM_PATH . '/' . $f, '/')) ?>"><i class="fa fa-files-o"></i></a>
                        <?php endif; ?>
                        <a title="<?php echo lng('DirectLink') ?>" href="<?php echo fm_enc(FM_ROOT_URL . (FM_PATH != '' ? '/' . FM_PATH : '') . '/' . $f) ?>" target="_blank"><i class="fa fa-link"></i></a>
                        <?php if (FM_IS_ADMIN): ?>
                        <a title="File Hashes &amp; Integrity" href="#" onclick="showHashModal('<?php echo fm_enc(addslashes($f)); ?>');return false;" style="background:rgba(201,168,76,0.10)!important;border-color:rgba(201,168,76,0.20)!important;color:#C9A84C!important;"><i class="fa fa-shield"></i></a>
                        <a title="File Metadata" href="#" onclick="showMetaModal('<?php echo fm_enc(addslashes($f)); ?>');return false;" style="background:rgba(99,102,241,0.10)!important;border-color:rgba(99,102,241,0.20)!important;color:#6366f1!important;"><i class="fa fa-list-alt"></i></a>
                        <?php endif; ?>
                        <a title="<?php echo lng('Download') ?>" href="?dir=<?php echo urlencode(FM_PATH) ?>&amp;dl=<?php echo urlencode($f) ?>" onclick="confirmDailog(event, 1211, '<?php echo lng('Download'); ?>','<?php echo urlencode($f); ?>', this.href);" class="inline-dl-btn"><i class="fa fa-download"></i></a>
                    </td>
                    <?php endif; ?>
                </tr>
            <?php
                flush();
                $ik++;
            }
            ?>
            </tbody>
            <?php if (empty($folders) && empty($files)) { ?>
                <tfoot><tr>
                    <?php if (!FM_READONLY): ?><td style="padding:0;border:none;"></td><?php endif; ?>
                    <td colspan="<?php echo (!FM_IS_WIN && !$hide_Cols) ? '5' : '3' ?>" style="padding:0;border:none;"></td>
                    <?php if (!FM_READONLY_NODOWNLOAD): ?><td style="padding:0;border:none;"></td><?php endif; ?>
                </tr></tfoot>
            <?php
            } else { ?>
                <tfoot>
                    <tr>
                        <td class="gray fs-7" colspan="<?php $col=3; if(!FM_READONLY)$col++; if(!FM_IS_WIN&&!$hide_Cols)$col+=2; if(!FM_READONLY_NODOWNLOAD)$col++; echo $col; ?>">
                            <span style="font-family:'Inter',sans-serif;">
                            <?php echo lng('FullSize') . ': <span class="badge text-bg-light border-radius-0">' . fm_get_filesize($all_files_size) . '</span>' ?>
                            &nbsp;&bull;&nbsp;
                            <?php echo lng('File') . ': <span class="badge text-bg-light border-radius-0">' . $num_files . '</span>' ?>
                            &nbsp;&bull;&nbsp;
                            <?php echo lng('Folder') . ': <span class="badge text-bg-light border-radius-0">' . $num_folders . '</span>' ?>
                            </span>
                            <span id="bulk-sel-count" class="bulk-selection-count" style="margin-left:8px;"></span>
                        </td>
                    </tr>
                </tfoot>
            <?php } ?>
        </table>
        </div><!-- end overflow-x -->
    </div><!-- end border-radius wrapper -->
    <?php if (empty($folders) && empty($files)): ?>
    <div id="fm-empty-state" style="
        display:flex;
        flex-direction:column;
        align-items:center;
        justify-content:center;
        min-height:calc(100vh - 200px);
        width:100%;
        text-align:center;
        padding:40px 20px;
        user-select:none;
        pointer-events:none;
    ">
        <div style="
            display:inline-flex;
            align-items:center;
            justify-content:center;
            width:88px;height:88px;
            border-radius:28px;
            background:rgba(201,168,76,0.08);
            margin-bottom:22px;
        ">
            <i class="fa fa-folder-open-o" style="font-size:44px;color:var(--ios-tertiary);line-height:1;"></i>
        </div>
        <div style="font-size:17px;font-weight:700;color:var(--ios-label);margin-bottom:8px;letter-spacing:-0.2px;"><?php echo lng('Folder is empty') ?></div>
        <div style="font-size:13px;color:var(--ios-secondary);max-width:260px;line-height:1.6;">Use the Upload button above to add files, or create a new file or folder.</div>
    </div>
    <?php endif; ?>
    <div class="row mt-2 mb-2 align-items-center" <?php echo (empty($folders) && empty($files)) ? 'style="display:none;"' : '' ?>>
        <?php if (!FM_READONLY): ?>
            <div class="col-12">
                <div class="bulk-action-bar" role="toolbar">
                    <a href="#/invert-all" class="bulk-btn bulk-btn-outline" onclick="invert_all();return false;" title="<?php echo lng('InvertSelection') ?>">
                        <i class="fa fa-random"></i><span class="bulk-btn-label"> <?php echo lng('InvertSelection') ?></span>
                    </a>
                    <input type="submit" class="hidden" name="delete" id="a-delete" value="Delete" onclick="return confirm('<?php echo lng('Delete selected files and folders?'); ?>')">
                    <a href="javascript:void(0);" class="bulk-btn bulk-btn-red bulk-requires-selection" id="btn-bulk-delete" onclick="if(hasMultiSelection()){document.getElementById('a-delete').click();}return false;" title="<?php echo lng('Delete') ?>">
                        <i class="fa fa-trash-o"></i><span class="bulk-btn-label"> <?php echo lng('Delete') ?></span>
                    </a>
                    <input type="submit" class="hidden" name="zip" id="a-zip" value="zip">
                    <input type="hidden" name="zip_password" id="zip-password-field" value="">
                    <a href="javascript:void(0);" class="bulk-btn bulk-btn-outline bulk-requires-selection" id="btn-bulk-zip" onclick="if(hasMultiSelection()){openZipPasswordModal();}return false;" title="Zip">
                        <i class="fa fa-file-zip-o"></i><span class="bulk-btn-label"> Zip</span>
                    </a>
                    <input type="submit" class="hidden" name="tar" id="a-tar" value="tar" onclick="return confirm('<?php echo lng('Create archive?'); ?>')">
                    <a href="javascript:void(0);" class="bulk-btn bulk-btn-outline bulk-requires-selection" id="btn-bulk-tar" onclick="if(hasMultiSelection()){document.getElementById('a-tar').click();}return false;" title="Tar">
                        <i class="fa fa-archive"></i><span class="bulk-btn-label"> Tar</span>
                    </a>
                    <input type="submit" class="hidden" name="copy" id="a-copy" value="Copy">
                    <a href="javascript:void(0);" class="bulk-btn bulk-btn-outline bulk-requires-selection" id="btn-bulk-copy" onclick="if(hasMultiSelection()){document.getElementById('a-copy').click();}return false;" title="<?php echo lng('Copy') ?>">
                        <i class="fa fa-copy"></i><span class="bulk-btn-label"> <?php echo lng('Copy') ?></span>
                    </a>
                    <a href="javascript:void(0);" class="bulk-btn bulk-btn-outline bulk-requires-selection" id="btn-bulk-rename" onclick="if(hasMultiSelection()){openBulkRenameModal();}return false;" title="Bulk Rename">
                        <i class="fa fa-pencil"></i><span class="bulk-btn-label"> Rename</span>
                    </a>
                    <a href="javascript:void(0);" class="bulk-btn bulk-btn-outline bulk-requires-selection" id="btn-bulk-download" onclick="if(hasMultiSelection()){bulkDownload();}return false;" title="<?php echo lng('Download') ?>">
                        <i class="fa fa-cloud-download"></i><span class="bulk-btn-label"> <?php echo lng('Download') ?></span>
                    </a>
                    <span class="float-right fm-footer-credit d-none d-sm-inline-flex" style="margin-left:auto;"></span>
                </div>
            </div>
        <?php else: ?>
            <div class="col-12"><span class="float-right fm-footer-credit"></span></div>
        <?php endif; ?>
    </div>
</form>
<?php
fm_show_footer();
/**
 * It prints the css/js files into html
 * @param key The key of the external file to print.
 */
function print_external($key)
{
    global $external;
    if (!array_key_exists($key, $external)) {
        echo "<!-- EXTERNAL: MISSING KEY $key -->";
        return;
    }
    echo "$external[$key]";
}
/**
 * Verify CSRF TOKEN and remove after certified
 * @param string $token
 * @return bool
 */
function verifyToken($token)
{
    if (hash_equals($_SESSION['token'], $token)) {
        return true;
    }
    return false;
}
/**
 * Generate a password hash using crypt() — consistent with this app's
 * login check (password_verify() works with any crypt()-format hash).
 * Tries yescrypt ($y$) first to match existing $auth_users hashes,
 * falls back to bcrypt ($2y$) via crypt() if yescrypt isn't supported.
 * @param string $password
 * @return string
 */
function fm_hash_password($password)
{
    $alphabet = './ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $mkSalt = function ($len) use ($alphabet) {
        $s = '';
        for ($i = 0; $i < $len; $i++) { $s .= $alphabet[random_int(0, strlen($alphabet) - 1)]; }
        return $s;
    };
    $hash = @crypt($password, '$y$j9T$' . $mkSalt(22) . '$');
    if ($hash !== false && strpos($hash, '$y$') === 0 && strlen($hash) > 20) {
        return $hash;
    }
    return crypt($password, '$2y$10$' . $mkSalt(22) . '$');
}
/**
 * Write a forensics-styled entry to activity.log
 * @param string $action  e.g. 'DELETE', 'COPY', 'MOVE', 'UPLOAD'
 * @param string $detail  human-readable detail string
 */
function fm_activity_log($action, $detail)
{
    $logDir  = __DIR__ . '/.runtime';
    $actLog  = $logDir . '/activity.log';
    fm_ensure_runtime_dir($logDir);
    $user    = isset($_SESSION[FM_SESSION_ID]['logged']) ? $_SESSION[FM_SESSION_ID]['logged'] : 'system';
    $ip      = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '-';
    $time    = date("Y-m-d H:i:s");
    $seq     = date("YmdHis") . '_' . substr(md5(uniqid('', true)), 0, 6);
    $entry   = "========================================================\n";
    $entry  .= "  EVENT     : {$action}\n";
    $entry  .= "  SEQ       : {$seq}\n";
    $entry  .= "  TIMESTAMP : {$time}\n";
    $entry  .= "  USER      : {$user}\n";
    $entry  .= "  IP        : {$ip}\n";
    $entry  .= "  DETAIL    : {$detail}\n";
    @file_put_contents($actLog, $entry, FILE_APPEND | LOCK_EX);
    fm_rotate_activity_log($logDir, $actLog);
}
function fm_rotate_activity_log($logDir, $actLog)
{
    if (!is_file($actLog) || @filesize($actLog) < 512) return;
    $stampFile = $logDir . '/.log_rotated_at';
    $now = time();
    if (is_file($stampFile)) {
        $last = (int)@file_get_contents($stampFile);
        if (($now - $last) < 7 * 86400) return;
    }
    if (!class_exists('ZipArchive')) return;
    $archiveName = 'activity_' . date('Ymd_His', $now) . '.zip';
    $archivePath = $logDir . '/' . $archiveName;
    $zip = new ZipArchive();
    if ($zip->open($archivePath, ZipArchive::CREATE | ZipArchive::OVERWRITE) !== true) return;
    $zip->addFile($actLog, 'activity.log');
    $zip->close();
    @file_put_contents($actLog, '');
    @file_put_contents($stampFile, (string)$now);
    $zips = glob($logDir . '/activity_*.zip');
    if ($zips && count($zips) > 4) {
        usort($zips, function($a, $b) { return filemtime($a) - filemtime($b); });
        foreach (array_slice($zips, 0, count($zips) - 4) as $old) { @unlink($old); }
    }
}
/**
 * Append an entry to activity.log.
 * Kept for backward-compat call sites (user_add/user_delete/settings
 * changes) — now delegates to fm_activity_log() so ALL activity ends
 * up in the same place: .runtime/activity.log, forensics format,
 * with rotation. No longer writes a separate root-level file.
 * @param string $action  short machine-readable action tag, e.g. 'user_add'
 * @param string $details free-text details for the entry
 */
function fm_log_activity($action, $details = '')
{
    fm_activity_log(strtoupper($action), $details);
}
/**
 * Delete  file or folder (recursively)
 * @param string $path
 * @return bool
 */
function fm_rdelete($path)
{
    if (is_link($path)) {
        return unlink($path);
    } elseif (is_dir($path)) {
        $objects = scandir($path);
        $ok = true;
        if (is_array($objects)) {
            foreach ($objects as $file) {
                if ($file != '.' && $file != '..') {
                    if (!fm_rdelete($path . '/' . $file)) {
                        $ok = false;
                    }
                }
            }
        }
        return ($ok) ? rmdir($path) : false;
    } elseif (is_file($path)) {
        return unlink($path);
    }
    return false;
}
/**
 * Recursive chmod
 * @param string $path
 * @param int $filemode
 * @param int $dirmode
 * @return bool
 */
function fm_rchmod($path, $filemode, $dirmode)
{
    if (is_dir($path)) {
        if (!chmod($path, $dirmode)) {
            return false;
        }
        $objects = scandir($path);
        if (is_array($objects)) {
            foreach ($objects as $file) {
                if ($file != '.' && $file != '..') {
                    if (!fm_rchmod($path . '/' . $file, $filemode, $dirmode)) {
                        return false;
                    }
                }
            }
        }
        return true;
    } elseif (is_link($path)) {
        return true;
    } elseif (is_file($path)) {
        return chmod($path, $filemode);
    }
    return false;
}
/**
 * Check the file extension which is allowed or not
 * @param string $filename
 * @return bool
 */
function fm_is_valid_ext($filename)
{
    $allowed = (FM_FILE_EXTENSION) ? explode(',', FM_FILE_EXTENSION) : false;
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $isFileAllowed = ($allowed) ? in_array($ext, $allowed) : true;
    return ($isFileAllowed) ? true : false;
}
/**
 * Safely rename
 * @param string $old
 * @param string $new
 * @return bool|null
 */
function fm_rename($old, $new)
{
    $isFileAllowed = fm_is_valid_ext($new);
    if (!is_dir($old)) {
        if (!$isFileAllowed) return false;
    }
    return (!file_exists($new) && file_exists($old)) ? rename($old, $new) : null;
}
/**
 * Copy file or folder (recursively).
 * @param string $path
 * @param string $dest
 * @param bool $upd Update files
 * @param bool $force Create folder with same names instead file
 * @return bool
 */
function fm_rcopy($path, $dest, $upd = true, $force = true)
{
    if (!is_dir($path) && !is_file($path)) {
        return false;
    }
    if (is_dir($path)) {
        if (!fm_mkdir($dest, $force)) {
            return false;
        }
        $objects = array_diff(scandir($path), ['.', '..']);
        foreach ($objects as $file) {
            if (!fm_rcopy("$path/$file", "$dest/$file", $upd, $force)) {
                return false;
            }
        }
        return true;
    }
    return fm_copy($path, $dest, $upd);
}
/**
 * Safely create folder
 * @param string $dir
 * @param bool $force
 * @return bool
 */
function fm_mkdir($dir, $force)
{
    if (file_exists($dir)) {
        if (is_dir($dir)) {
            return $dir;
        } elseif (!$force) {
            return false;
        }
        unlink($dir);
    }
    return mkdir($dir, 0777, true);
}
/**
 * Safely copy file
 * @param string $f1
 * @param string $f2
 * @param bool $upd Indicates if file should be updated with new content
 * @return bool
 */
function fm_copy($f1, $f2, $upd)
{
    $time1 = filemtime($f1);
    if (file_exists($f2)) {
        $time2 = filemtime($f2);
        if ($time2 >= $time1 && $upd) {
            return false;
        }
    }
    $ok = copy($f1, $f2);
    if ($ok) {
        touch($f2, $time1);
    }
    return $ok;
}
/**
 * Get mime type
 * @param string $file_path
 * @return mixed|string
 */
function fm_get_mime_type($file_path)
{
    if (function_exists('finfo_open')) {
        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $mime = $finfo->file($file_path);
        return $mime;
    } elseif (function_exists('mime_content_type')) {
        return mime_content_type($file_path);
    } elseif (!stristr(ini_get('disable_functions'), 'shell_exec')) {
        $file = escapeshellarg($file_path);
        $mime = shell_exec('file -bi ' . $file);
        return $mime;
    } else {
        return '--';
    }
}
/**
 * HTTP Redirect
 * @param string $url
 * @param int $code
 */
function fm_redirect($url, $code = 302)
{
    if (ob_get_level()) { ob_end_clean(); }
    header('Location: ' . $url, true, $code);
    exit;
}
/**
 * Path traversal prevention and clean the url
 * It replaces (consecutive) occurrences of / and \\ with whatever is in DIRECTORY_SEPARATOR, and processes /. and /.. fine.
 * @param $path
 * @return string
 */
function get_absolute_path($path)
{
    $path = str_replace(array('/', '\\'), DIRECTORY_SEPARATOR, $path);
    $parts = array_filter(explode(DIRECTORY_SEPARATOR, $path), 'strlen');
    $absolutes = array();
    foreach ($parts as $part) {
        if ('.' == $part) continue;
        if ('..' == $part) {
            array_pop($absolutes);
        } else {
            $absolutes[] = $part;
        }
    }
    return implode(DIRECTORY_SEPARATOR, $absolutes);
}
/**
 * Clean path
 * @param string $path
 * @return string
 */
function fm_clean_path($path, $trim = true)
{
    $path = $trim ? trim($path) : $path;
    $path = trim($path, '\\/');
    $path = str_replace(array('../', '..\\'), '', $path);
    $path =  get_absolute_path($path);
    if ($path == '..') {
        $path = '';
    }
    return str_replace('\\', '/', $path);
}
/**
 * Get parent path
 * @param string $path
 * @return bool|string
 */
function fm_get_parent_path($path)
{
    $path = fm_clean_path($path);
    if ($path != '') {
        $array = explode('/', $path);
        if (count($array) > 1) {
            $array = array_slice($array, 0, -1);
            return implode('/', $array);
        }
        return '';
    }
    return false;
}
function fm_get_display_path($file_path)
{
    global $path_display_mode, $root_path, $root_url;
    switch ($path_display_mode) {
        case 'relative':
            return array(
                'label' => 'Path',
                'path' => fm_enc(fm_convert_win(str_replace($root_path, '', $file_path)))
            );
        case 'host':
            $relative_path = str_replace($root_path, '', $file_path);
            return array(
                'label' => 'Host Path',
                'path' => fm_enc(fm_convert_win('/' . $root_url . '/' . ltrim(str_replace('\\', '/', $relative_path), '/')))
            );
        case 'full':
        default:
            return array(
                'label' => 'Full Path',
                'path' => fm_enc(fm_convert_win($file_path))
            );
    }
}
/**
 * Check file is in exclude list
 * @param string $name The name of the file/folder
 * @param string $path The full path of the file/folder
 * @return bool
 */
function fm_is_exclude_items($name, $path)
{
    $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));
    $exclude_items = FM_EXCLUDE_ITEMS;
    if (version_compare(PHP_VERSION, '7.0.0', '<')) {
        $exclude_items = unserialize($exclude_items);
    }
    if (!in_array($name, $exclude_items) && !in_array("*.$ext", $exclude_items) && !in_array($path, $exclude_items)) {
        return true;
    }
    return false;
}
/**
 * get language translations from json file
 * @param int $tr
 * @return array
 */
function fm_get_translations($tr)
{
    try {
        $content = @file_get_contents('translation.json');
        if ($content !== FALSE) {
            $lng = json_decode($content, TRUE);
            global $lang_list;
            foreach ($lng["language"] as $key => $value) {
                $code = $value["code"];
                $lang_list[$code] = $value["name"];
                if ($tr)
                    $tr[$code] = $value["translation"];
            }
            return $tr;
        }
    } catch (Exception $e) {
        echo $e;
    }
}
/**
 * @param string $file
 * Recover all file sizes larger than > 2GB.
 * Works on php 32bits and 64bits and supports linux
 * @return int|string
 */
function fm_get_size($file)
{
    static $iswin = null;
    static $isdarwin = null;
    static $exec_works = null;
    if ($iswin === null) {
        $iswin = strtoupper(substr(PHP_OS, 0, 3)) === 'WIN';
        $isdarwin = strtoupper(PHP_OS) === 'DARWIN';
        $exec_works = function_exists('exec') && !ini_get('safe_mode') && @exec('echo EXEC') === 'EXEC';
    }
    if ($exec_works) {
        $arg = escapeshellarg($file);
        $cmd = $iswin ? "for %F in ($arg) do @echo %~zF" : ($isdarwin ? "stat -f%z $arg" : "stat -c%s $arg");
        @exec($cmd, $output);
        if (!empty($output) && ctype_digit($size = trim(implode("\n", $output)))) {
            return $size;
        }
    }
    if ($iswin && class_exists('COM')) {
        try {
            $fsobj = new COM('Scripting.FileSystemObject');
            $f = $fsobj->GetFile(realpath($file));
            if (ctype_digit($size = $f->Size)) {
                return $size;
            }
        } catch (Exception $e) {
        }
    }
    // Default to PHP's filesize function
    return filesize($file);
}
/**
 * Recursively calculate the total size of a directory
 * @param string $dir
 * @return int
 */
function fm_get_dir_size($dir)
{
    $size = 0;
    $real = is_link($dir) ? realpath($dir) : $dir;
    if (!$real || !is_dir($real)) return $size;
    try {
        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS | FilesystemIterator::FOLLOW_SYMLINKS),
            RecursiveIteratorIterator::LEAVES_ONLY
        );
        foreach ($iterator as $file) {
            if ($file->isFile()) {
                $size += $file->getSize();
            }
        }
    } catch (Exception $e) {
    }
    return $size;
}
/**
 * Get nice filesize
 * @param int $size
 * @return string
 */
function fm_get_filesize($size)
{
    $size = (float) $size;
    $units = array('B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
    $power = ($size > 0) ? floor(log($size, 1024)) : 0;
    $power = ($power > (count($units) - 1)) ? (count($units) - 1) : $power;
    return sprintf('%s %s', round($size / pow(1024, $power), 2), $units[$power]);
}
/**
 * Get info about zip archive
 * @param string $path
 * @return array|bool
 */
function fm_get_zif_info($path, $ext)
{
    if ($ext == 'zip' && function_exists('zip_open')) {
        $arch = @zip_open($path);
        if ($arch) {
            $filenames = array();
            while ($zip_entry = @zip_read($arch)) {
                $zip_name = @zip_entry_name($zip_entry);
                $zip_folder = substr($zip_name, -1) == '/';
                $filenames[] = array(
                    'name' => $zip_name,
                    'filesize' => @zip_entry_filesize($zip_entry),
                    'compressed_size' => @zip_entry_compressedsize($zip_entry),
                    'folder' => $zip_folder
                );
            }
            @zip_close($arch);
            return $filenames;
        }
    } elseif ($ext == 'tar' && class_exists('PharData')) {
        $archive = new PharData($path);
        $filenames = array();
        foreach (new RecursiveIteratorIterator($archive) as $file) {
            $zip_name = str_replace("phar://" . $path, '', $file->getPathName());
            $zip_name = substr($zip_name, ($pos = strpos($zip_name, '/')) !== false ? $pos + 1 : 0);
            $zip_info = new SplFileInfo($file);
            $filenames[] = array(
                'name'            => $zip_name,
                'filesize'        => $zip_info->getSize(),
                'compressed_size' => $file->getCompressedSize(),
                'folder'          => $file->isDir(),
            );
        }
        return $filenames;
    }
    return false;
}
/**
 * Encode html entities
 * @param string $text
 * @return string
 */
function fm_enc($text)
{
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}
/**
 * Prevent XSS attacks
 * @param string $text
 * @return string
 */
function fm_isvalid_filename($text)
{
    return (strpbrk($text, '/?%*:|"<>') === FALSE) ? true : false;
}
/**
 * Public, session-free upload portal. Gated only by the upload password —
 * no username, no login. Always saves into the top-level "upload" folder.
 * GET shows a small password + file form; POST verifies the password and
 * saves the file. Only reachable when both public_upload_enabled and
 * upload_password_hash are set in config.
 */
function fm_public_upload_portal()
{
    global $cfg;
    $enabled = !empty($cfg->data['public_upload_enabled']) && !empty($cfg->data['upload_password_hash']);
    header('X-Frame-Options: SAMEORIGIN');
    header('X-Content-Type-Options: nosniff');
    header('Referrer-Policy: same-origin');
    if (!$enabled) {
        http_response_code(404);
        echo '<!DOCTYPE html><html><head><meta charset="utf-8"><title>Not available</title></head><body style="font-family:sans-serif;text-align:center;padding:60px 20px;color:#555;"><h2>Upload portal not available</h2><p>This link is disabled.</p></body></html>';
        return;
    }
    // ─── Hard security limits — not configurable from the UI on purpose ───
    // Static files only. No scripts, no executables, no server-side code,
    // no archives (zips can smuggle anything past an extension check).
    $ALLOWED_EXT = array(
        // images
        'jpg', 'jpeg', 'png', 'gif', 'webp', 'bmp', 'svg', 'ico', 'tiff', 'tif',
        // documents
        'pdf', 'txt', 'csv', 'md', 'rtf',
        'doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'odt', 'ods', 'odp',
        // audio / video
        'mp3', 'wav', 'ogg', 'flac', 'aac', 'm4a',
        'mp4', 'webm', 'mov', 'avi', 'mkv',
        // fonts
        'woff', 'woff2', 'ttf', 'otf',
    );
    // MIME types accepted for each allowed extension. finfo's fileinfo
    // detection is intentionally matched loosely against a small allowed
    // set per extension — enough to reject an .exe/.php renamed to .jpg,
    // without being so strict that legitimate files bounce.
    $MIME_MAP = array(
        'jpg' => array('image/jpeg'), 'jpeg' => array('image/jpeg'),
        'png' => array('image/png'), 'gif' => array('image/gif'),
        'webp' => array('image/webp'), 'bmp' => array('image/bmp', 'image/x-ms-bmp'),
        'svg' => array('image/svg+xml', 'text/plain', 'text/html'),
        'ico' => array('image/x-icon', 'image/vnd.microsoft.icon'),
        'tiff' => array('image/tiff'), 'tif' => array('image/tiff'),
        'pdf' => array('application/pdf'),
        'txt' => array('text/plain'), 'csv' => array('text/plain', 'text/csv'),
        'md' => array('text/plain'), 'rtf' => array('text/rtf', 'application/rtf'),
        'doc' => array('application/msword'),
        'docx' => array('application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/zip'),
        'xls' => array('application/vnd.ms-excel'),
        'xlsx' => array('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/zip'),
        'ppt' => array('application/vnd.ms-powerpoint'),
        'pptx' => array('application/vnd.openxmlformats-officedocument.presentationml.presentation', 'application/zip'),
        'odt' => array('application/vnd.oasis.opendocument.text', 'application/zip'),
        'ods' => array('application/vnd.oasis.opendocument.spreadsheet', 'application/zip'),
        'odp' => array('application/vnd.oasis.opendocument.presentation', 'application/zip'),
        'mp3' => array('audio/mpeg'), 'wav' => array('audio/wav', 'audio/x-wav', 'audio/vnd.wave'),
        'ogg' => array('audio/ogg', 'video/ogg', 'application/ogg'),
        'flac' => array('audio/flac', 'audio/x-flac'), 'aac' => array('audio/aac', 'audio/x-aac'),
        'm4a' => array('audio/mp4', 'audio/x-m4a'),
        'mp4' => array('video/mp4'), 'webm' => array('video/webm'),
        'mov' => array('video/quicktime'), 'avi' => array('video/x-msvideo'),
        'mkv' => array('video/x-matroska'),
        'woff' => array('font/woff', 'application/font-woff'),
        'woff2' => array('font/woff2', 'application/font-woff2'),
        'ttf' => array('font/ttf', 'application/x-font-ttf', 'application/font-sfnt'),
        'otf' => array('font/otf', 'application/x-font-otf', 'application/font-sfnt'),
    );
    // Explicitly denied even if somehow matched above — scripts, executables,
    // server config, shell/interpreter files. Defence in depth on top of the
    // allowlist itself, and also used to reject dangerous double extensions
    // like "photo.jpg.php".
    $DENY_EXT = array(
        'php', 'php3', 'php4', 'php5', 'php7', 'phtml', 'phar',
        'exe', 'bat', 'cmd', 'com', 'msi', 'dll', 'scr', 'vbs', 'vbe', 'wsf', 'wsh',
        'sh', 'bash', 'zsh', 'ksh', 'run', 'bin',
        'cgi', 'pl', 'py', 'rb', 'asp', 'aspx', 'jsp', 'jspx',
        'htaccess', 'htpasswd', 'ini', 'conf', 'config',
        'jar', 'war', 'apk', 'app', 'dmg', 'deb', 'rpm',
        'zip', 'rar', '7z', 'tar', 'gz', 'bz2', 'xz', 'iso',
        'js', 'mjs', 'html', 'htm', 'xhtml', 'swf', 'ps1', 'psm1',
    );
    define('FM_PORTAL_MAX_BYTES', 500 * 1024 * 1024); // 500 MB hard cap per file, not configurable
    define('FM_PORTAL_MAX_FILES_PER_REQUEST', 30); // 30 files per batch maximum
    // Rate limiting: max 60 uploads per IP per hour stored in .runtime.
    // Only trust the Cloudflare header when Cloudflare's own CF-Ray marker
    // is also present — otherwise X-Forwarded-For is just an attacker-
    // controlled request header on a direct connection, and trusting it
    // would let someone rotate it to dodge both this rate limit and the
    // password brute-force lockout below. REMOTE_ADDR (the real TCP peer)
    // is the safe fallback.
    $__portal_ip = (isset($_SERVER['HTTP_CF_CONNECTING_IP']) && isset($_SERVER['HTTP_CF_RAY']))
        ? $_SERVER['HTTP_CF_CONNECTING_IP']
        : $_SERVER['REMOTE_ADDR'];
    $__portal_rl_file = __DIR__ . '/.runtime/portal_rl_' . md5($__portal_ip) . '.json';
    fm_ensure_runtime_dir(__DIR__ . '/.runtime');
    $__portal_rl = (is_file($__portal_rl_file)) ? (@json_decode(@file_get_contents($__portal_rl_file), true) ?: array()) : array();
    // Purge entries older than 1 hour
    $__portal_rl = array_filter($__portal_rl, function($t) { return $t > time() - 3600; });
    $__portal_rl_count = count($__portal_rl);
    $errors = array();
    $successes = array();
    // ─── CSRF token, tied to this session, single-request lifetime ───
    if (empty($_SESSION['portal_csrf'])) {
        $_SESSION['portal_csrf'] = bin2hex(random_bytes(32));
    }
    // ─── Math captcha, required server-side on every submission, in
    // addition to the password. Regenerated on every unauthenticated GET
    // view (not just when empty) so refreshing the page always shows a new
    // challenge — mirrors the admin login page's captcha behaviour — and
    // also regenerated after every attempt (success or failure) so it can
    // never be reused/replayed. ───
    if ($_SERVER['REQUEST_METHOD'] !== 'POST' || empty($_SESSION['portal_captcha_answer'])) {
        $__pa = rand(10, 49);
        $__pb = rand(1, 9);
        $_SESSION['portal_captcha_a'] = $__pa;
        $_SESSION['portal_captcha_b'] = $__pb;
        $_SESSION['portal_captcha_answer'] = $__pa + $__pb;
        $_SESSION['portal_captcha_issued'] = time();
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Portal-scoped brute-force lockout — independent of the admin
        // login lockout, so guessing the upload password can't be used to
        // lock an admin out of signing in, or vice versa.
        if (!fm_portal_bf_check($__portal_ip)) {
            $__rem = fm_portal_bf_remaining($__portal_ip);
            $errors[] = 'Too many failed attempts. Try again in ' . ceil($__rem / 60) . ' min.';
            $pw = '';
        } elseif (!isset($_POST['portal_csrf']) || !hash_equals($_SESSION['portal_csrf'], (string) $_POST['portal_csrf'])) {
            fm_portal_bf_fail($__portal_ip);
            $errors[] = 'Your session expired. Please reload the page and try again.';
            $pw = '';
        } else {
            $__captchaFresh = isset($_SESSION['portal_captcha_issued']) && (time() - $_SESSION['portal_captcha_issued']) <= 600;
            $__captchaOk = $__captchaFresh && isset($_POST['portal_captcha']) && isset($_SESSION['portal_captcha_answer'])
                && intval($_POST['portal_captcha']) === intval($_SESSION['portal_captcha_answer']);
            if (!$__captchaOk) {
                fm_portal_bf_fail($__portal_ip);
                $errors[] = 'Security check failed. Please try again.';
                $pw = '';
            } else {
                $pw = isset($_POST['portal_password']) ? $_POST['portal_password'] : '';
            }
        }
        // Captcha (and CSRF token) are single-use regardless of outcome.
        unset($_SESSION['portal_captcha_a'], $_SESSION['portal_captcha_b'], $_SESSION['portal_captcha_answer'], $_SESSION['portal_captcha_issued']);
        $_SESSION['portal_csrf'] = bin2hex(random_bytes(32));
        $__pa = rand(10, 49); $__pb = rand(1, 9);
        $_SESSION['portal_captcha_a'] = $__pa;
        $_SESSION['portal_captcha_b'] = $__pb;
        $_SESSION['portal_captcha_answer'] = $__pa + $__pb;
        $_SESSION['portal_captcha_issued'] = time();
        // Extra: reject empty/whitespace-only passwords
        if ($errors) {
            // Password/captcha/CSRF gate already failed above.
        } elseif (trim($pw) === '' || !password_verify($pw, $cfg->data['upload_password_hash'])) {
            fm_portal_bf_fail($__portal_ip);
            $errors[] = 'Incorrect password.';
            // Log failed portal password attempt
            $__logDir = __DIR__ . '/.runtime';
            fm_ensure_runtime_dir($__logDir);
            $__seq = date("YmdHis") . '_' . substr(md5(uniqid('', true)), 0, 6);
            $__entry = "========================================================\n";
            $__entry .= "  EVENT     : PORTAL_AUTH_FAILED\n";
            $__entry .= "  SEQ       : {$__seq}\n";
            $__entry .= "  TIMESTAMP : " . date("Y-m-d H:i:s") . "\n";
            $__entry .= "  IP        : {$__portal_ip}\n";
            $__entry .= "  UA        : " . substr(isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '', 0, 200) . "\n";
            $__entry .= "========================================================\n";
            @file_put_contents($__logDir . '/activity.log', $__entry, FILE_APPEND | LOCK_EX);
        } elseif (empty($_FILES['file']['name']) || (is_array($_FILES['file']['name']) && count(array_filter($_FILES['file']['name'])) === 0) || (!is_array($_FILES['file']['name']) && $_FILES['file']['name'] === '')) {
            $errors[] = 'Choose at least one file to upload.';
        } else {
            // Normalise single-file submission to array form
            $fileNames  = is_array($_FILES['file']['name'])  ? $_FILES['file']['name']  : array($_FILES['file']['name']);
            $fileTmps   = is_array($_FILES['file']['tmp_name']) ? $_FILES['file']['tmp_name'] : array($_FILES['file']['tmp_name']);
            $fileErrors = is_array($_FILES['file']['error']) ? $_FILES['file']['error'] : array($_FILES['file']['error']);
            $fileSizes  = is_array($_FILES['file']['size'])  ? $_FILES['file']['size']  : array($_FILES['file']['size']);
            $fileCount  = count($fileNames);
            if ($fileCount > FM_PORTAL_MAX_FILES_PER_REQUEST) {
                $errors[] = 'Too many files. Maximum ' . FM_PORTAL_MAX_FILES_PER_REQUEST . ' files per upload batch.';
            } elseif ($__portal_rl_count + $fileCount > 60) {
                $errors[] = 'Upload rate limit reached for your IP. Please try again in an hour.';
                $__logDir = __DIR__ . '/.runtime';
                fm_ensure_runtime_dir($__logDir);
                @file_put_contents($__logDir . '/activity.log',
                    "========================================================\n" .
                    "  EVENT     : PORTAL_RATE_LIMITED\n" .
                    "  TIMESTAMP : " . date("Y-m-d H:i:s") . "\n" .
                    "  IP        : {$__portal_ip}\n" .
                    "  COUNT     : {$__portal_rl_count}\n" .
                    "========================================================\n",
                    FILE_APPEND | LOCK_EX);
            } else {
                $phpUploadErrors = array(
                    UPLOAD_ERR_INI_SIZE   => 'exceeds server upload_max_filesize limit.',
                    UPLOAD_ERR_FORM_SIZE  => 'is too large.',
                    UPLOAD_ERR_PARTIAL    => 'was only partially uploaded — try again.',
                    UPLOAD_ERR_NO_FILE    => 'was not uploaded.',
                    UPLOAD_ERR_NO_TMP_DIR => 'failed (server misconfiguration: no temp folder).',
                    UPLOAD_ERR_CANT_WRITE => 'failed to write to disk.',
                    UPLOAD_ERR_EXTENSION  => 'was blocked by a server extension.',
                );
                $uploadDir = FM_ROOT_PATH . '/upload';
                if (!is_dir($uploadDir)) @mkdir($uploadDir, 0755, true);
                for ($fi = 0; $fi < $fileCount; $fi++) {
                    $origName = basename(str_replace('\\', '/', $fileNames[$fi]));
                    if ($origName === '') continue; // skip blank slots
                    $fileErr  = $fileErrors[$fi];
                    $fileTmp  = $fileTmps[$fi];
                    $fileSize = (int) $fileSizes[$fi];
                    if ($fileErr !== UPLOAD_ERR_OK) {
                        $errMsg = isset($phpUploadErrors[$fileErr]) ? $phpUploadErrors[$fileErr] : ('Upload error code ' . (int)$fileErr . '.');
                        $errors[] = '"' . fm_enc($origName) . '": ' . $errMsg;
                        continue;
                    }
                    if ($fileSize > FM_PORTAL_MAX_BYTES) {
                        $errors[] = '"' . fm_enc($origName) . '": File exceeds the 500 MB limit.';
                        continue;
                    }
                    // Must be an actual uploaded file (not a path injection)
                    if (!is_uploaded_file($fileTmp)) {
                        $errors[] = '"' . fm_enc($origName) . '": Invalid upload.';
                        continue;
                    }
                    $lowerName = strtolower($origName);
                    $allExtsInName = array();
                    if (strpos($lowerName, '.') !== false) {
                        $allExtsInName = explode('.', $lowerName);
                        array_shift($allExtsInName);
                    }
                    $finalExt = pathinfo($lowerName, PATHINFO_EXTENSION);
                    if (!fm_isvalid_filename($origName) || $origName[0] === '.') {
                        $errors[] = '"' . fm_enc($origName) . '": Invalid file name.';
                        continue;
                    }
                    if ($finalExt === '' || !in_array($finalExt, $ALLOWED_EXT, true)) {
                        $errors[] = '"' . fm_enc($origName) . '": File type not allowed.';
                        continue;
                    }
                    if (in_array($finalExt, $DENY_EXT, true)) {
                        $errors[] = '"' . fm_enc($origName) . '": File type blocked for security reasons.';
                        continue;
                    }
                    // Double-extension check (e.g. photo.php.jpg)
                    $hasDenied = false;
                    foreach ($allExtsInName as $seg) {
                        if (in_array($seg, $DENY_EXT, true)) { $hasDenied = true; break; }
                    }
                    if ($hasDenied) {
                        $errors[] = '"' . fm_enc($origName) . '": Disguised file type blocked.';
                        continue;
                    }
                    // MIME verification
                    $mimeOk = true;
                    if (function_exists('finfo_open') && isset($MIME_MAP[$finalExt])) {
                        $finfo = finfo_open(FILEINFO_MIME_TYPE);
                        $detectedMime = $finfo ? finfo_file($finfo, $fileTmp) : false;
                        if ($finfo) finfo_close($finfo);
                        if ($detectedMime && !in_array($detectedMime, $MIME_MAP[$finalExt], true)) {
                            if ($detectedMime !== 'application/octet-stream' && strpos($detectedMime, 'text/') !== 0) {
                                $mimeOk = false;
                            }
                        }
                    }
                    if (!$mimeOk) {
                        $errors[] = '"' . fm_enc($origName) . '": File content does not match its extension.';
                        continue;
                    }
                    if (!is_writable($uploadDir)) {
                        $errors[] = 'Upload folder is not writable on the server.';
                        break;
                    }
                    $destPath = $uploadDir . '/' . $origName;
                    if (file_exists($destPath)) {
                        $base = pathinfo($origName, PATHINFO_FILENAME);
                        $destPath = $uploadDir . '/' . $base . '_' . date('ymdHis') . substr(uniqid('', true), -4) . '.' . $finalExt;
                    }
                    if (move_uploaded_file($fileTmp, $destPath)) {
                        @chmod($destPath, 0644);
                        $savedName = basename($destPath);
                        $savedSize = filesize($destPath);
                        // Activity log
                        $__logDir = __DIR__ . '/.runtime';
                        fm_ensure_runtime_dir($__logDir);
                        $__seq = date("YmdHis") . '_' . substr(md5(uniqid('', true)), 0, 6);
                        $__entry = "========================================================\n";
                        $__entry .= "  EVENT     : PORTAL_UPLOAD\n";
                        $__entry .= "  SEQ       : {$__seq}\n";
                        $__entry .= "  TIMESTAMP : " . date("Y-m-d H:i:s") . "\n";
                        $__entry .= "  FILE      : upload/{$savedName}\n";
                        $__entry .= "  SIZE      : {$savedSize} bytes\n";
                        $__entry .= "  IP        : {$__portal_ip}\n";
                        $__entry .= "  BATCH     : " . ($fi+1) . "/{$fileCount}\n";
                        $__entry .= "========================================================\n";
                        @file_put_contents($__logDir . '/activity.log', $__entry, FILE_APPEND | LOCK_EX);
                        // Rate-limit counter
                        $__portal_rl[] = time();
                        @file_put_contents($__portal_rl_file, json_encode(array_values($__portal_rl)), LOCK_EX);
                        $successes[] = $savedName;
                    } else {
                        $errors[] = '"' . fm_enc($origName) . '": Could not save file (check folder permissions).';
                    }
                }
            }
        }
        if (!empty($successes)) fm_portal_bf_clear($__portal_ip);
    }
    $error = implode('<br>', $errors);
    $success = count($successes) > 0 ? (count($successes) === 1 ? 'Uploaded "' . fm_enc($successes[0]) . '" successfully.' : count($successes) . ' files uploaded successfully.') : '';
    global $favicon_path;
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <script>
        (function(){
            try {
                var t = localStorage.getItem('fm-theme');
                var dark = (t === 'dark' || (t === null && window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches));
                document.documentElement.setAttribute('data-theme', dark ? 'dark' : 'light');
            } catch(e) {}
        })();
        </script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, viewport-fit=cover">
        <meta name="robots" content="noindex, nofollow">
        <title>Upload — <?php echo fm_enc(APP_TITLE); ?></title>
        <link rel="icon" href="<?php echo fm_enc($favicon_path); ?>" type="image/png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
        <style>
            :root {
                --ns: 'Inter', -apple-system, sans-serif;
                --pur: #C9A84C;
                --pur-glow: rgba(201,168,76,0.20);
                --bg: #FDFBF3;
                --label: #162440;
                --label2: #233554;
                --secondary: #3A4D6A;
                --tertiary: #6A7D96;
                --input-bg: #fff;
                --input-border: rgba(22,36,64,0.18);
                --input-border-focus: #C9A84C;
                --form-bg: #ffffff;
                --sep: rgba(22,36,64,0.09);
                --deco-bg: #162440;
                --card-bg: #ffffff;
                --tile-fill: rgba(22,36,64,0.04);
            }
            html[data-theme="dark"] {
                --pur: #E4C169;
                --pur-glow: rgba(228,193,105,0.22);
                --bg: #14171C;
                --label: #EEF1F6;
                --label2: #D7DCE6;
                --secondary: #ADB6C2;
                --tertiary: #838D99;
                --input-bg: #1E222A;
                --input-border: rgba(238,241,246,0.16);
                --input-border-focus: #E4C169;
                --form-bg: #1B1F26;
                --sep: rgba(238,241,246,0.10);
                --deco-bg: #0D1015;
                --card-bg: #1B1F26;
                --tile-fill: rgba(238,241,246,0.06);
                color-scheme: dark;
            }
            *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; -webkit-tap-highlight-color: transparent; font-family: inherit; }
            .fa { font-family: FontAwesome !important; }
            html, body { height: 100%; overscroll-behavior-y: contain; }
            body {
                font-family: var(--ns);
                background: var(--bg);
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 24px;
                transition: background 0.25s ease;
                -webkit-font-smoothing: antialiased;
                position: relative;
                overflow-x: hidden;
            }
            body::before {
                content: '';
                position: fixed;
                inset: 0;
                background: radial-gradient(ellipse 60% 50% at 50% -10%, rgba(201,168,76,0.10) 0%, transparent 70%);
                pointer-events: none;
                z-index: 0;
                transition: opacity 0.3s;
            }
            .portal-wrap {
                position: relative;
                z-index: 1;
                width: 100%;
                max-width: 420px;
            }
            .portal-card {
                background: var(--form-bg);
                border-radius: 20px;
                box-shadow: 0 8px 40px rgba(22,36,64,0.12), 0 1px 0 rgba(201,168,76,0.08);
                border: 1px solid var(--sep);
                padding: 36px 32px 32px;
                transition: background 0.25s, border-color 0.25s;
            }
            .portal-brand-row {
                display: flex;
                align-items: center;
                gap: 10px;
                margin-bottom: 24px;
            }
            .portal-icon-ring {
                width: 38px; height: 38px;
                border-radius: 11px;
                background: var(--deco-bg);
                display: flex; align-items: center; justify-content: center;
                flex-shrink: 0;
            }
            .portal-icon-ring i { font-size: 15px; color: #fff; }
            .portal-title {
                font-size: 17px; font-weight: 700;
                color: var(--label); letter-spacing: -0.3px;
                flex: 1;
            }
            .portal-theme-btn {
                width: 32px; height: 32px; border-radius: 9px;
                border: 1px solid var(--sep);
                background: var(--card-bg);
                color: var(--pur);
                display: flex; align-items: center; justify-content: center;
                font-size: 13px; cursor: pointer;
                transition: background 0.2s, border-color 0.2s;
            }
            .portal-theme-btn:hover { border-color: var(--pur); }
            .form-heading {
                font-size: 22px; font-weight: 700;
                color: var(--label); letter-spacing: -0.4px;
                margin-bottom: 5px;
            }
            .form-subheading {
                font-size: 13px; color: var(--secondary);
                margin-bottom: 24px; line-height: 1.5;
            }
            .fm-field { margin-bottom: 14px; }
            .fm-label {
                display: block;
                font-size: 11px; font-weight: 700;
                letter-spacing: 0.5px; text-transform: uppercase;
                color: var(--tertiary); margin-bottom: 6px;
            }
            .fm-input-group { position: relative; display: flex; align-items: center; }
            .fm-input-icon {
                position: absolute; left: 13px;
                color: var(--tertiary); font-size: 13px;
                pointer-events: none; z-index: 2;
                width: 15px; text-align: center;
                transition: color 0.2s;
            }
            .fm-input {
                width: 100%;
                padding: 10px 14px 10px 40px;
                background: var(--input-bg);
                border: 1.5px solid var(--input-border);
                border-radius: 10px;
                color: var(--label);
                font-size: 14px; font-family: var(--ns);
                outline: none;
                transition: border-color 0.22s, box-shadow 0.22s;
                -webkit-appearance: none;
            }
            .fm-input::placeholder { color: var(--tertiary); opacity: 0.7; }
            .fm-input:focus {
                border-color: var(--input-border-focus);
                box-shadow: 0 0 0 3px var(--pur-glow);
            }
            .fm-input-group:focus-within .fm-input-icon { color: var(--pur); }
            .fm-captcha-wrap { display: flex; gap: 10px; align-items: center; }
            .fm-captcha-sum {
                display: flex; align-items: center; gap: 6px;
                padding: 0 14px; height: 44px; border-radius: 10px;
                background: var(--tile-fill, rgba(22,36,64,0.05));
                border: 1.5px solid var(--input-border);
                font-weight: 700; white-space: nowrap;
            }
            .fm-captcha-wrap .fm-input-group { flex: 1; min-width: 0; }
            .fm-captcha-wrap .fm-input { padding-left: 14px; }
            .captcha-op { color: var(--tertiary); }
            /* File drop zone */
            .fm-dropzone {
                border: 2px dashed var(--input-border);
                border-radius: 12px;
                padding: 22px 16px;
                text-align: center;
                cursor: pointer;
                transition: border-color 0.22s, background 0.22s;
                background: var(--tile-fill);
                margin-bottom: 10px;
                position: relative;
            }
            .fm-dropzone.drag-over {
                border-color: var(--pur);
                background: var(--pur-glow, rgba(201,168,76,0.07));
            }
            .fm-dropzone input[type=file] {
                position: absolute; inset: 0; opacity: 0; cursor: pointer; width: 100%; height: 100%;
            }
            .fm-dropzone-icon { font-size: 26px; color: var(--pur); margin-bottom: 8px; }
            .fm-dropzone-label { font-size: 13px; color: var(--secondary); font-weight: 500; }
            .fm-dropzone-hint { font-size: 11px; color: var(--tertiary); margin-top: 4px; line-height: 1.4; }
            .fm-file-list {
                list-style: none; padding: 0; margin: 0 0 12px;
                max-height: 160px; overflow-y: auto;
            }
            .fm-file-list li {
                display: flex; align-items: center; gap: 8px;
                padding: 6px 10px; border-radius: 8px;
                background: var(--tile-fill);
                margin-bottom: 4px; font-size: 12.5px;
                color: var(--label);
            }
            .fm-file-list li i { color: var(--pur); flex-shrink: 0; }
            .fm-file-list li .fname { flex: 1; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }
            .fm-file-list li .fsize { color: var(--tertiary); font-size: 11px; flex-shrink: 0; }
            .fm-file-list li .fremove { background: none; border: none; color: var(--tertiary); cursor: pointer; padding: 0 2px; font-size: 12px; }
            .fm-file-list li .fremove:hover { color: #DC2626; }
            .btn-upload {
                width: 100%; margin-top: 10px;
                padding: 11px 24px;
                background: var(--deco-bg);
                color: #FDFBF3; border: none; border-radius: 10px;
                font-size: 15px; font-weight: 600; font-family: var(--ns);
                cursor: pointer; letter-spacing: 0.2px;
                display: flex; align-items: center; justify-content: center; gap: 8px;
                box-shadow: 0 4px 16px rgba(22,36,64,0.22);
                transition: background 0.2s, transform 0.15s, box-shadow 0.2s;
            }
            html[data-theme="dark"] .btn-upload { background: var(--pur); color: #14171C; box-shadow: 0 4px 16px rgba(228,193,105,0.22); }
            .btn-upload:hover:not(:disabled) { background: #233554; box-shadow: 0 6px 20px rgba(22,36,64,0.30); }
            html[data-theme="dark"] .btn-upload:hover:not(:disabled) { filter: brightness(1.1); }
            .btn-upload:active:not(:disabled) { transform: scale(0.98); }
            .btn-upload:disabled { opacity: 0.55; cursor: not-allowed; }
            .msg {
                border-radius: 10px; padding: 10px 13px;
                font-size: 13px; margin-bottom: 16px; line-height: 1.5;
                display: flex; align-items: flex-start; gap: 8px;
            }
            .msg i { flex-shrink: 0; margin-top: 1px; }
            .msg.error { background: rgba(198,40,40,0.07); color: #C62828; border: 1px solid rgba(198,40,40,0.18); }
            .msg.success { background: rgba(46,125,50,0.07); color: #2e7d32; border: 1px solid rgba(46,125,50,0.18); }
            html[data-theme="dark"] .msg.error { background: rgba(220,38,38,0.12); color: #fca5a5; border-color: rgba(220,38,38,0.25); }
            html[data-theme="dark"] .msg.success { background: rgba(34,197,94,0.10); color: #86efac; border-color: rgba(34,197,94,0.22); }
            .portal-footer {
                margin-top: clamp(10px, 2vh, 20px); padding-top: clamp(8px, 1.5vh, 14px);
                border-top: 1px solid rgba(201,168,76,0.09);
                text-align: center;
                font-size: 12px; color: var(--tertiary);
                display: flex; align-items: center; justify-content: center;
            }
            .portal-footer a { color: var(--secondary); text-decoration: none; }
            .portal-footer a:hover { color: #C9A84C; }
            .progress-bar-wrap { width: 100%; height: 4px; background: var(--sep); border-radius: 2px; margin-top: 10px; display: none; }
            .progress-bar-inner { height: 100%; border-radius: 2px; background: var(--pur); width: 0; transition: width 0.3s; }
            /* Mobile: ≤520px — top-aligned, scrollable (matches login page); desktop stays centered */
            @media (max-width: 520px) {
                body {
                    align-items: flex-start;
                    overflow-y: auto;
                    padding: 16px;
                }
            }
        </style>
    </head>
    <body>
        <canvas id="fm-particles" style="position:fixed;inset:0;pointer-events:none;z-index:0;"></canvas>
        <div class="portal-wrap">
            <div class="portal-card">
                <div class="portal-brand-row">
                    <div class="portal-icon-ring"><i class="fa fa-cloud-upload"></i></div>
                    <div class="portal-title"><?php echo fm_enc(APP_TITLE); ?></div>
                    <button type="button" class="portal-theme-btn" title="Toggle dark mode" onclick="fmPortalToggleTheme(this)">
                        <i class="fa fa-moon-o" id="portal-theme-icon"></i>
                    </button>
                </div>
                <div class="form-heading">Upload Files</div>
                <div class="form-subheading">Enter the upload password and drop or choose up to <?php echo FM_PORTAL_MAX_FILES_PER_REQUEST; ?> files.</div>
                <?php if ($error): ?><div class="msg error"><i class="fa fa-exclamation-circle"></i><span><?php echo $error; ?></span></div><?php endif; ?>
                <?php if ($success): ?><div class="msg success"><i class="fa fa-check-circle"></i><span><?php echo fm_enc($success); ?></span></div><?php endif; ?>
                <form method="post" enctype="multipart/form-data" id="portal-form">
                    <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo (int) FM_PORTAL_MAX_BYTES; ?>">
                    <input type="hidden" name="portal_csrf" value="<?php echo fm_enc($_SESSION['portal_csrf']); ?>">
                    <div class="fm-field">
                        <label class="fm-label" for="portal_password">Password</label>
                        <div class="fm-input-group">
                            <i class="fa fa-lock fm-input-icon"></i>
                            <input type="password" id="portal_password" name="portal_password"
                                   required autofocus autocomplete="current-password"
                                   placeholder="Upload password" class="fm-input">
                        </div>
                    </div>
                    <div class="fm-field">
                        <label class="fm-label">Security Check</label>
                        <div class="fm-captcha-wrap">
                            <div class="fm-captcha-sum">
                                <span class="captcha-num"><?php echo (int) $_SESSION['portal_captcha_a']; ?></span>
                                <span class="captcha-op">+</span>
                                <span class="captcha-num"><?php echo (int) $_SESSION['portal_captcha_b']; ?></span>
                                <span class="captcha-op">=</span>
                                <span class="captcha-q">?</span>
                            </div>
                        <div class="fm-input-group" style="flex:1;">
                            <i class="fa fa-calculator fm-input-icon"></i>
                            <input type="number" name="portal_captcha" id="portal_captcha"
                                   placeholder="Answer" required class="fm-input"
                                   min="0" max="999" autocomplete="off"
                                   style="padding-left:45px;">
                        </div>
                        </div>
                    </div>
                    <div class="fm-field">
                        <label class="fm-label">Files (up to <?php echo FM_PORTAL_MAX_FILES_PER_REQUEST; ?>)</label>
                        <div class="fm-dropzone" id="portal-dropzone">
                            <input type="file" name="file[]" id="portal-file-input" multiple
                                   accept=".jpg,.jpeg,.png,.gif,.webp,.bmp,.svg,.ico,.tiff,.tif,.pdf,.txt,.csv,.md,.rtf,.doc,.docx,.xls,.xlsx,.ppt,.pptx,.odt,.ods,.odp,.mp3,.wav,.ogg,.flac,.aac,.m4a,.mp4,.webm,.mov,.avi,.mkv,.woff,.woff2,.ttf,.otf">
                            <div class="fm-dropzone-icon"><i class="fa fa-cloud-upload"></i></div>
                            <div class="fm-dropzone-label">Click or drag files here</div>
                            <div class="fm-dropzone-hint">Images, documents, audio, video &amp; fonts only — no scripts or archives<br>Max 500 MB· Up to <?php echo FM_PORTAL_MAX_FILES_PER_REQUEST; ?> files</div>
                        </div>
                        <ul class="fm-file-list" id="portal-file-list"></ul>
                    </div>
                    <div class="progress-bar-wrap" id="portal-progress-wrap">
                        <div class="progress-bar-inner" id="portal-progress-bar"></div>
                    </div>
                    <button type="submit" class="btn-upload" id="portal-submit-btn">
                        <i class="fa fa-upload"></i> <span id="portal-btn-label">Upload</span>
                    </button>
                </form>
                <div class="portal-footer">
                    <a href="<?php echo FM_SELF_URL; ?>"><i class="fa fa-sign-in"></i> Sign in to <?php echo fm_enc(APP_TITLE); ?></a>
                </div>
            </div>
        </div>
        <script>
        (function() {
            // Theme toggle
            function fmPortalGetTheme() {
                return document.documentElement.getAttribute('data-theme') === 'dark' ? 'dark' : 'light';
            }
            window.fmPortalToggleTheme = function(btn) {
                var dark = fmPortalGetTheme() !== 'dark';
                document.documentElement.setAttribute('data-theme', dark ? 'dark' : 'light');
                try { localStorage.setItem('fm-theme', dark ? 'dark' : 'light'); } catch(e) {}
                document.getElementById('portal-theme-icon').className = 'fa ' + (dark ? 'fa-sun-o' : 'fa-moon-o');
            };
            // Init icon
            document.getElementById('portal-theme-icon').className = 'fa ' + (fmPortalGetTheme() === 'dark' ? 'fa-sun-o' : 'fa-moon-o');

            // Drag-over highlight
            var dz = document.getElementById('portal-dropzone');
            dz.addEventListener('dragover', function(e) { e.preventDefault(); dz.classList.add('drag-over'); });
            dz.addEventListener('dragleave', function() { dz.classList.remove('drag-over'); });
            dz.addEventListener('drop', function(e) { dz.classList.remove('drag-over'); });

            // File list preview
            var input = document.getElementById('portal-file-input');
            var list  = document.getElementById('portal-file-list');
            var MAX   = <?php echo FM_PORTAL_MAX_FILES_PER_REQUEST; ?>;
            var dt    = new DataTransfer();

            function formatSize(b) {
                if (b < 1024) return b + ' B';
                if (b < 1048576) return (b/1024).toFixed(1) + ' KB';
                return (b/1048576).toFixed(1) + ' MB';
            }
            function renderList() {
                list.innerHTML = '';
                for (var i = 0; i < dt.files.length; i++) {
                    (function(idx) {
                        var f = dt.files[idx];
                        var li = document.createElement('li');
                        li.innerHTML = '<i class="fa fa-file-o"></i>'
                            + '<span class="fname" title="' + f.name.replace(/"/g,'&quot;') + '">' + f.name + '</span>'
                            + '<span class="fsize">' + formatSize(f.size) + '</span>'
                            + '<button type="button" class="fremove" title="Remove"><i class="fa fa-times"></i></button>';
                        li.querySelector('.fremove').addEventListener('click', function() {
                            var nd = new DataTransfer();
                            for (var j = 0; j < dt.files.length; j++) { if (j !== idx) nd.items.add(dt.files[j]); }
                            dt = nd;
                            input.files = dt.files;
                            renderList();
                            updateBtn();
                        });
                        list.appendChild(li);
                    })(i);
                }
            }
            function updateBtn() {
                var n = dt.files.length;
                var btn = document.getElementById('portal-btn-label');
                btn.textContent = n > 0 ? 'Upload ' + n + ' file' + (n > 1 ? 's' : '') : 'Upload';
            }
            input.addEventListener('change', function() {
                for (var i = 0; i < input.files.length; i++) {
                    if (dt.files.length >= MAX) break;
                    dt.items.add(input.files[i]);
                }
                input.files = dt.files;
                renderList();
                updateBtn();
            });

            // Real upload with true progress (was: fake random-increment bar).
            // Uses XHR so we get real event.loaded/event.total percentages,
            // then swaps the whole document for the server's response —
            // same end result as a normal form submit (reload showing the
            // success/error message), just with an accurate progress bar
            // and a live "uploaded X of Y files" style byte counter along
            // the way instead of a fake animation.
            var portalForm = document.getElementById('portal-form');
            portalForm.addEventListener('submit', function(e) {
                e.preventDefault();
                var btn = document.getElementById('portal-submit-btn');
                if (btn.disabled) return;
                btn.disabled = true;

                var fileCount = dt.files.length;
                document.getElementById('portal-btn-label').textContent =
                    fileCount > 0 ? 'Uploading 0/' + fileCount + '…' : 'Uploading…';

                var wrap = document.getElementById('portal-progress-wrap');
                var bar  = document.getElementById('portal-progress-bar');
                wrap.style.display = 'block';
                bar.style.width = '0%';

                // Freeze the file list while uploading — no removing files mid-upload.
                list.querySelectorAll('.fremove').forEach(function(b) { b.disabled = true; b.style.opacity = '0.4'; b.style.cursor = 'not-allowed'; });

                var xhr = new XMLHttpRequest();
                xhr.open('POST', portalForm.getAttribute('action') || window.location.href, true);

                xhr.upload.addEventListener('progress', function(evt) {
                    if (!evt.lengthComputable) return;
                    var pct = Math.min(100, Math.round((evt.loaded / evt.total) * 100));
                    bar.style.width = pct + '%';
                    // Approximate how many of the selected files have fully gone out,
                    // based on cumulative bytes sent vs each file's size in order.
                    var sent = evt.loaded, doneCount = 0, acc = 0;
                    for (var i = 0; i < dt.files.length; i++) {
                        acc += dt.files[i].size;
                        if (sent >= acc) doneCount++; else break;
                    }
                    document.getElementById('portal-btn-label').textContent =
                        fileCount > 0 ? 'Uploading ' + Math.min(doneCount, fileCount) + '/' + fileCount + '… (' + pct + '%)' : 'Uploading… (' + pct + '%)';
                });

                xhr.addEventListener('load', function() {
                    bar.style.width = '100%';
                    document.getElementById('portal-btn-label').textContent = 'Done';
                    // Replace the page with the server's response, same as a normal
                    // form submit would after redirect — shows the success/error banner.
                    document.open();
                    document.write(xhr.responseText);
                    document.close();
                });

                xhr.addEventListener('error', function() {
                    btn.disabled = false;
                    document.getElementById('portal-btn-label').textContent = 'Upload';
                    wrap.style.display = 'none';
                    list.querySelectorAll('.fremove').forEach(function(b) { b.disabled = false; b.style.opacity = ''; b.style.cursor = ''; });
                    alert('Upload failed — check your connection and try again.');
                });

                xhr.send(new FormData(portalForm));
            });

            // Particle canvas
            var canvas = document.getElementById('fm-particles');
            if (canvas) {
                var ctx = canvas.getContext('2d');
                var W, H, pts = [];
                function resize() { W = canvas.width = window.innerWidth; H = canvas.height = window.innerHeight; }
                resize();
                window.addEventListener('resize', resize);
                for (var i = 0; i < 45; i++) {
                    pts.push({ x: Math.random()*1000, y: Math.random()*1000, vx: (Math.random()-.5)*.3, vy: (Math.random()-.5)*.3, r: Math.random()*1.6+.4 });
                }
                function draw() {
                    ctx.clearRect(0, 0, W, H);
                    for (var i = 0; i < pts.length; i++) {
                        var p = pts[i];
                        p.x = ((p.x + p.vx + W) % W); p.y = ((p.y + p.vy + H) % H);
                        ctx.beginPath(); ctx.arc(p.x, p.y, p.r, 0, Math.PI*2);
                        ctx.fillStyle = 'rgba(201,168,76,0.18)'; ctx.fill();
                        for (var j = i+1; j < pts.length; j++) {
                            var q = pts[j], dx = p.x-q.x, dy = p.y-q.y, dist = Math.sqrt(dx*dx+dy*dy);
                            if (dist < 120) {
                                ctx.beginPath(); ctx.moveTo(p.x,p.y); ctx.lineTo(q.x,q.y);
                                ctx.strokeStyle = 'rgba(201,168,76,'+(0.18*(1-dist/120))+')';
                                ctx.lineWidth = .6; ctx.stroke();
                            }
                        }
                    }
                    requestAnimationFrame(draw);
                }
                draw();
            }
        })();
        </script>
    </body>
    </html>
    <?php
}
/**
 * Save message in session
 * @param string $msg
 * @param string $status
 */
function fm_set_msg($msg, $status = 'ok')
{
    $_SESSION[FM_SESSION_ID]['message'] = $msg;
    $_SESSION[FM_SESSION_ID]['status'] = $status;
}
/**
 * Check if string is in UTF-8
 * @param string $string
 * @return int
 */
function fm_is_utf8($string)
{
    return preg_match('//u', $string);
}
/**
 * Convert file name to UTF-8 in Windows
 * @param string $filename
 * @return string
 */
function fm_convert_win($filename)
{
    if (FM_IS_WIN && function_exists('iconv')) {
        $filename = iconv(FM_ICONV_INPUT_ENC, 'UTF-8//IGNORE', $filename);
    }
    return $filename;
}
/**
 * @param $obj
 * @return array
 */
function fm_object_to_array($obj)
{
    if (!is_object($obj) && !is_array($obj)) {
        return $obj;
    }
    if (is_object($obj)) {
        $obj = get_object_vars($obj);
    }
    return array_map('fm_object_to_array', $obj);
}
/**
 * Get CSS classname for file
 * @param string $path
 * @return string
 */
function fm_get_file_icon_class($path)
{
    $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));
    switch ($ext) {
        case 'ico':
        case 'gif':
        case 'jpg':
        case 'jpeg':
        case 'jpc':
        case 'jp2':
        case 'jpx':
        case 'xbm':
        case 'wbmp':
        case 'png':
        case 'bmp':
        case 'tif':
        case 'tiff':
        case 'webp':
        case 'avif':
        case 'svg':
            $img = 'fa fa-picture-o';
            break;
        case 'passwd':
        case 'ftpquota':
        case 'sql':
        case 'js':
        case 'ts':
        case 'jsx':
        case 'tsx':
        case 'hbs':
        case 'json':
        case 'sh':
        case 'config':
        case 'twig':
        case 'tpl':
        case 'md':
        case 'gitignore':
        case 'c':
        case 'cpp':
        case 'cs':
        case 'py':
        case 'rs':
        case 'map':
        case 'lock':
        case 'dtd':
        case 'ps1':
            $img = 'fa fa-file-code-o';
            break;
        case 'txt':
        case 'ini':
        case 'conf':
        case 'log':
        case 'htaccess':
        case 'yaml':
        case 'yml':
        case 'toml':
        case 'tmp':
        case 'top':
        case 'bot':
        case 'dat':
        case 'bak':
        case 'htpasswd':
        case 'pl':
            $img = 'fa fa-file-text-o';
            break;
        case 'css':
        case 'less':
        case 'sass':
        case 'scss':
            $img = 'fa fa-css3';
            break;
        case 'bz2':
        case 'tbz2':
        case 'tbz':
        case 'zip':
        case 'rar':
        case 'gz':
        case 'tgz':
        case 'tar':
        case '7z':
        case 'xz':
        case 'txz':
        case 'zst':
        case 'tzst':
            $img = 'fa fa-file-archive-o';
            break;
        case 'php':
        case 'php4':
        case 'php5':
        case 'phps':
        case 'phtml':
            $img = 'fa fa-code';
            break;
        case 'htm':
        case 'html':
        case 'shtml':
        case 'xhtml':
            $img = 'fa fa-html5';
            break;
        case 'xml':
        case 'xsl':
            $img = 'fa fa-file-excel-o';
            break;
        case 'wav':
        case 'mp3':
        case 'mp2':
        case 'm4a':
        case 'aac':
        case 'ogg':
        case 'oga':
        case 'wma':
        case 'mka':
        case 'flac':
        case 'ac3':
        case 'tds':
            $img = 'fa fa-music';
            break;
        case 'm3u':
        case 'm3u8':
        case 'pls':
        case 'cue':
        case 'xspf':
            $img = 'fa fa-headphones';
            break;
        case 'avi':
        case 'mpg':
        case 'mpeg':
        case 'mp4':
        case 'm4v':
        case 'flv':
        case 'f4v':
        case 'ogm':
        case 'ogv':
        case 'mov':
        case 'mkv':
        case '3gp':
        case 'asf':
        case 'wmv':
        case 'webm':
            $img = 'fa fa-file-video-o';
            break;
        case 'eml':
        case 'msg':
            $img = 'fa fa-envelope-o';
            break;
        case 'xls':
        case 'xlsx':
        case 'ods':
            $img = 'fa fa-file-excel-o';
            break;
        case 'csv':
            $img = 'fa fa-file-text-o';
            break;
        case 'bak':
        case 'swp':
            $img = 'fa fa-clipboard';
            break;
        case 'doc':
        case 'docx':
        case 'odt':
            $img = 'fa fa-file-word-o';
            break;
        case 'ppt':
        case 'pptx':
            $img = 'fa fa-file-powerpoint-o';
            break;
        case 'ttf':
        case 'ttc':
        case 'otf':
        case 'woff':
        case 'woff2':
        case 'eot':
        case 'fon':
            $img = 'fa fa-font';
            break;
        case 'pdf':
            $img = 'fa fa-file-pdf-o';
            break;
        case 'psd':
        case 'ai':
        case 'eps':
        case 'fla':
        case 'swf':
            $img = 'fa fa-file-image-o';
            break;
        case 'exe':
        case 'msi':
            $img = 'fa fa-file-o';
            break;
        case 'bat':
            $img = 'fa fa-terminal';
            break;
        default:
            $img = 'fa fa-info-circle';
    }
    return $img;
}
/**
 * Get image files extensions
 * @return array
 */
function fm_get_image_exts()
{
    return array('ico', 'gif', 'jpg', 'jpeg', 'jpc', 'jp2', 'jpx', 'xbm', 'wbmp', 'png', 'bmp', 'tif', 'tiff', 'psd', 'svg', 'webp', 'avif');
}
/**
 * Get video files extensions
 * @return array
 */
function fm_get_video_exts()
{
    return array('avi', 'webm', 'wmv', 'mp4', 'm4v', 'ogm', 'ogv', 'mov', 'mkv');
}
/**
 * Get audio files extensions
 * @return array
 */
function fm_get_audio_exts()
{
    return array('wav', 'mp3', 'ogg', 'm4a');
}
/**
 * Get text file extensions
 * @return array
 */
function fm_get_text_exts()
{
    return array(
        'txt',
        'css',
        'ini',
        'conf',
        'log',
        'htaccess',
        'passwd',
        'ftpquota',
        'sql',
        'js',
        'ts',
        'jsx',
        'tsx',
        'mjs',
        'json',
        'sh',
        'config',
        'php',
        'php4',
        'php5',
        'phps',
        'phtml',
        'htm',
        'html',
        'shtml',
        'xhtml',
        'xml',
        'xsl',
        'm3u',
        'm3u8',
        'pls',
        'cue',
        'bash',
        'vue',
        'eml',
        'msg',
        'csv',
        'bat',
        'twig',
        'tpl',
        'md',
        'gitignore',
        'less',
        'sass',
        'scss',
        'c',
        'cpp',
        'cs',
        'py',
        'go',
        'zsh',
        'swift',
        'map',
        'lock',
        'dtd',
        'svg',
        'asp',
        'aspx',
        'asx',
        'asmx',
        'ashx',
        'jsp',
        'jspx',
        'cgi',
        'dockerfile',
        'ruby',
        'yml',
        'yaml',
        'toml',
        'vhost',
        'scpt',
        'applescript',
        'csx',
        'cshtml',
        'c++',
        'coffee',
        'cfm',
        'rb',
        'graphql',
        'mustache',
        'jinja',
        'http',
        'handlebars',
        'java',
        'es',
        'es6',
        'markdown',
        'wiki',
        'tmp',
        'top',
        'bot',
        'dat',
        'bak',
        'htpasswd',
        'pl',
        'ps1'
    );
}
/**
 * Get mime types of text files
 * @return array
 */
function fm_get_text_mimes()
{
    return array(
        'application/xml',
        'application/javascript',
        'application/x-javascript',
        'image/svg+xml',
        'message/rfc822',
        'application/json',
    );
}
/**
 * Get file names of text files w/o extensions
 * @return array
 */
function fm_get_text_names()
{
    return array(
        'license',
        'readme',
        'authors',
        'contributors',
        'changelog',
    );
}
/**
 * Get online docs viewer supported files extensions
 * @return array
 */
function fm_get_onlineViewer_exts()
{
    return array('doc', 'docx', 'xls', 'xlsx', 'pdf', 'ppt', 'pptx', 'ai', 'psd', 'dxf', 'xps', 'rar', 'odt', 'ods', 'odp');
}
/**
 * It returns the mime type of a file based on its extension.
 * @param extension The file extension of the file you want to get the mime type for.
 * @return string|string[] The mime type of the file.
 */
function fm_get_file_mimes($extension)
{
    $fileTypes['swf'] = 'application/x-shockwave-flash';
    $fileTypes['pdf'] = 'application/pdf';
    $fileTypes['exe'] = 'application/octet-stream';
    $fileTypes['zip'] = 'application/zip';
    $fileTypes['doc'] = 'application/msword';
    $fileTypes['xls'] = 'application/vnd.ms-excel';
    $fileTypes['ppt'] = 'application/vnd.ms-powerpoint';
    $fileTypes['gif'] = 'image/gif';
    $fileTypes['png'] = 'image/png';
    $fileTypes['jpeg'] = 'image/jpg';
    $fileTypes['jpg'] = 'image/jpg';
    $fileTypes['webp'] = 'image/webp';
    $fileTypes['avif'] = 'image/avif';
    $fileTypes['rar'] = 'application/rar';
    $fileTypes['ra'] = 'audio/x-pn-realaudio';
    $fileTypes['ram'] = 'audio/x-pn-realaudio';
    $fileTypes['ogg'] = 'audio/x-pn-realaudio';
    $fileTypes['wav'] = 'video/x-msvideo';
    $fileTypes['wmv'] = 'video/x-msvideo';
    $fileTypes['avi'] = 'video/x-msvideo';
    $fileTypes['asf'] = 'video/x-msvideo';
    $fileTypes['divx'] = 'video/x-msvideo';
    $fileTypes['mp3'] = 'audio/mpeg';
    $fileTypes['mp4'] = 'audio/mpeg';
    $fileTypes['mpeg'] = 'video/mpeg';
    $fileTypes['mpg'] = 'video/mpeg';
    $fileTypes['mpe'] = 'video/mpeg';
    $fileTypes['mov'] = 'video/quicktime';
    $fileTypes['swf'] = 'video/quicktime';
    $fileTypes['3gp'] = 'video/quicktime';
    $fileTypes['m4a'] = 'video/quicktime';
    $fileTypes['aac'] = 'video/quicktime';
    $fileTypes['m3u'] = 'video/quicktime';
    $fileTypes['php'] = ['application/x-php'];
    $fileTypes['html'] = ['text/html'];
    $fileTypes['txt'] = ['text/plain'];
    if (empty($fileTypes[$extension])) {
        $fileTypes[$extension] = ['application/octet-stream'];
    }
    return $fileTypes[$extension];
}
/**
 * This function scans the files and folder recursively, and return matching files
 * @param string $dir
 * @param string $filter
 * @return array|null
 */
function scan($dir = '', $filter = '')
{
    $path = FM_ROOT_PATH . '/' . $dir;
    if ($path) {
        $ite = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path));
        $rii = new RegexIterator($ite, "/(" . preg_quote($filter, '/') . ")/i");
        $files = array();
        foreach ($rii as $file) {
            if (!$file->isDir()) {
                $fileName = $file->getFilename();
                $location = str_replace(FM_ROOT_PATH, '', $file->getPath());
                $files[] = array(
                    "name" => $fileName,
                    "type" => "file",
                    "path" => $location,
                );
            }
        }
        return $files;
    }
}
function fm_download_file($fileLocation, $fileName, $chunkSize = 1048576)
{
    if (connection_status() != 0)
        return (false);
    $extension = pathinfo($fileName, PATHINFO_EXTENSION);
    $contentType = fm_get_file_mimes($extension);
    if (is_array($contentType)) {
        $contentType = implode(' ', $contentType);
    }
    if (empty($contentType)) {
        $contentType = 'application/octet-stream';
    }
    $realLocation = realpath($fileLocation);
    if ($realLocation === false) {
        fm_set_msg(lng('File not found'), 'error');
        $FM_PATH = FM_PATH;
        fm_redirect(FM_SELF_URL . '?dir=' . urlencode($FM_PATH));
        return (false);
    }
    $size = filesize($realLocation);
    if ($size == 0) {
        fm_set_msg(lng('Zero byte file! Aborting download'), 'error');
        $FM_PATH = FM_PATH;
        fm_redirect(FM_SELF_URL . '?dir=' . urlencode($FM_PATH));
        return (false);
    }
    @ini_set('magic_quotes_runtime', 0);
    $fp = fopen($realLocation, 'rb');
    if ($fp === false) {
        fm_set_msg(lng('Cannot open file! Aborting download'), 'error');
        $FM_PATH = FM_PATH;
        fm_redirect(FM_SELF_URL . '?dir=' . urlencode($FM_PATH));
        return (false);
    }
    // Work out the byte range being requested (supports resumable / partial downloads)
    $start = 0;
    $end = $size - 1;
    $isPartial = false;
    if (isset($_SERVER['HTTP_RANGE']) && preg_match('/bytes=(\d*)-(\d*)/i', $_SERVER['HTTP_RANGE'], $m)) {
        $reqStart = $m[1];
        $reqEnd   = $m[2];
        if ($reqStart === '' && $reqEnd !== '') {
            // suffix range: last N bytes
            $suffixLength = (int)$reqEnd;
            $start = max(0, $size - $suffixLength);
            $end = $size - 1;
        } else {
            $start = (int)$reqStart;
            $end = ($reqEnd !== '') ? (int)$reqEnd : ($size - 1);
        }
        if ($end > $size - 1) {
            $end = $size - 1;
        }
        if ($start < 0 || $start > $end) {
            header('HTTP/1.1 416 Range Not Satisfiable');
            header("Content-Range: bytes */$size");
            fclose($fp);
            return (false);
        }
        $isPartial = true;
    }
    $length = $end - $start + 1;
    while (ob_get_level()) {
        ob_end_clean();
    }
    header('Content-Description: File Transfer');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header('Content-Transfer-Encoding: binary');
    header("Content-Type: $contentType");
    $contentDisposition = 'attachment';
    $encodedName = rawurlencode($fileName);
    header("Content-Disposition: $contentDisposition; filename=\"" . addslashes($fileName) . "\"; filename*=UTF-8''$encodedName");
    header('Accept-Ranges: bytes');
    header('X-Content-Type-Options: nosniff');
    if ($isPartial) {
        header('HTTP/1.1 206 Partial Content');
        header("Content-Range: bytes $start-$end/$size");
    }
    header('Content-Length: ' . $length);
    fseek($fp, $start);
    $bytesLeft = $length;
    while ($bytesLeft > 0 && !feof($fp)) {
        $readSize = ($bytesLeft > $chunkSize) ? $chunkSize : $bytesLeft;
        $buffer = fread($fp, $readSize);
        if ($buffer === false) {
            break;
        }
        echo $buffer;
        flush();
        $bytesLeft -= strlen($buffer);
        if (connection_aborted()) {
            break;
        }
    }
    fclose($fp);
    return ((connection_status() == 0) and !connection_aborted());
}
class FM_Zipper
{
    private $zip;
    public function __construct()
    {
        $this->zip = new ZipArchive();
    }
    /**
     * Create archive with name $filename and files $files (RELATIVE PATHS!)
     * @param string $filename
     * @param array|string $files
     * @return bool
     */
    public function create($filename, $files, $password = '')
    {
        $res = $this->zip->open($filename, ZipArchive::CREATE);
        if ($res !== true) {
            return false;
        }
        $ok = true;
        if (is_array($files)) {
            foreach ($files as $f) {
                $f = fm_clean_path($f);
                if (!$this->addFileOrDir($f)) {
                    $ok = false;
                    break;
                }
            }
        } else {
            $ok = $this->addFileOrDir($files);
        }
        if (!$ok) {
            $this->zip->close();
            return false;
        }
        if ($password !== '' && defined('ZipArchive::EM_AES_256') && method_exists($this->zip, 'setEncryptionName')) {
            // AES-256 per-entry encryption, supported by PHP >=7.2 with libzip >=1.2
            for ($i = 0; $i < $this->zip->numFiles; $i++) {
                $name = $this->zip->getNameIndex($i);
                if ($name !== false) {
                    $this->zip->setEncryptionName($name, ZipArchive::EM_AES_256, $password);
                }
            }
        }
        $this->zip->close();
        return true;
    }
    /**
     * Extract archive $filename to folder $path (RELATIVE OR ABSOLUTE PATHS)
     * @param string $filename
     * @param string $path
     * @return bool
     */
    public function unzip($filename, $path, $password = '')
    {
        $res = $this->zip->open($filename);
        if ($res !== true) {
            return false;
        }
        if ($password !== '' && method_exists($this->zip, 'setPassword')) {
            $this->zip->setPassword($password);
        }
        if ($this->zip->extractTo($path)) {
            $this->zip->close();
            return true;
        }
        $this->zip->close();
        return false;
    }
    /**
     * Add file/folder to archive
     * @param string $filename
     * @return bool
     */
    private function addFileOrDir($filename)
    {
        if (is_file($filename)) {
            return $this->zip->addFile($filename);
        } elseif (is_dir($filename)) {
            return $this->addDir($filename);
        }
        return false;
    }
    /**
     * Add folder recursively
     * @param string $path
     * @return bool
     */
    private function addDir($path)
    {
        if (!$this->zip->addEmptyDir($path)) {
            return false;
        }
        $objects = scandir($path);
        if (is_array($objects)) {
            foreach ($objects as $file) {
                if ($file != '.' && $file != '..') {
                    if (is_dir($path . '/' . $file)) {
                        if (!$this->addDir($path . '/' . $file)) {
                            return false;
                        }
                    } elseif (is_file($path . '/' . $file)) {
                        if (!$this->zip->addFile($path . '/' . $file)) {
                            return false;
                        }
                    }
                }
            }
            return true;
        }
        return false;
    }
}
class FM_Zipper_Tar
{
    private $tar;
    public function __construct()
    {
        $this->tar = null;
    }
    /**
     * Create archive with name $filename and files $files (RELATIVE PATHS!)
     * @param string $filename
     * @param array|string $files
     * @return bool
     */
    public function create($filename, $files)
    {
        $this->tar = new PharData($filename);
        if (is_array($files)) {
            foreach ($files as $f) {
                $f = fm_clean_path($f);
                if (!$this->addFileOrDir($f)) {
                    return false;
                }
            }
            return true;
        } else {
            if ($this->addFileOrDir($files)) {
                return true;
            }
            return false;
        }
    }
    /**
     * Extract archive $filename to folder $path (RELATIVE OR ABSOLUTE PATHS)
     * @param string $filename
     * @param string $path
     * @return bool
     */
    public function unzip($filename, $path)
    {
        $res = $this->tar->open($filename);
        if ($res !== true) {
            return false;
        }
        if ($this->tar->extractTo($path)) {
            return true;
        }
        return false;
    }
    /**
     * Add file/folder to archive
     * @param string $filename
     * @return bool
     */
    private function addFileOrDir($filename)
    {
        if (is_file($filename)) {
            try {
                $this->tar->addFile($filename);
                return true;
            } catch (Exception $e) {
                return false;
            }
        } elseif (is_dir($filename)) {
            return $this->addDir($filename);
        }
        return false;
    }
    /**
     * Add folder recursively
     * @param string $path
     * @return bool
     */
    private function addDir($path)
    {
        $objects = scandir($path);
        if (is_array($objects)) {
            foreach ($objects as $file) {
                if ($file != '.' && $file != '..') {
                    if (is_dir($path . '/' . $file)) {
                        if (!$this->addDir($path . '/' . $file)) {
                            return false;
                        }
                    } elseif (is_file($path . '/' . $file)) {
                        try {
                            $this->tar->addFile($path . '/' . $file);
                        } catch (Exception $e) {
                            return false;
                        }
                    }
                }
            }
            return true;
        }
        return false;
    }
}
/**
 * Minimal dependency-free SMTP client (fsockopen based) — no PHPMailer,
 * no Composer, works on plain shared hosting. Supports implicit SSL
 * (port 465) and STARTTLS (587), plus AUTH LOGIN.
 * Returns array('success' => bool, 'error' => string|null).
 */
function fm_smtp_send($host, $port, $secure, $user, $pass, $from, $to, $subject, $body, $isHtml = false)
{
    if (strpos($host, '@') !== false) {
        return array('success' => false, 'error' => "\"$host\" looks like an email address, not a server hostname. Set the mail server's address (e.g. smtp.gmail.com) in the SMTP host field.");
    }
    $connectHost = ($secure === 'ssl') ? 'ssl://' . $host : $host;
    $errno = 0; $errstr = '';
    $sock = @fsockopen($connectHost, (int) $port, $errno, $errstr, 12);
    if (!$sock) {
        $__dnsFail = stripos($errstr, 'getaddrinfo') !== false || stripos($errstr, 'resolve') !== false || (int) $errno === 0;
        $__msg = $__dnsFail
            ? "Could not resolve or reach \"$host\". Double-check the hostname, and note some free hosts (InfinityFree and similar) block all outbound SMTP connections regardless of the value entered."
            : "Connect failed: $errstr ($errno)";
        return array('success' => false, 'error' => $__msg);
    }
    stream_set_timeout($sock, 12);
    $read = function () use ($sock) {
        $data = '';
        while (($line = fgets($sock, 515)) !== false) {
            $data .= $line;
            if (substr($line, 3, 1) === ' ') break;
        }
        return $data;
    };
    $write = function ($cmd) use ($sock) { fwrite($sock, $cmd . "\r\n"); };
    $expect = function ($code) use ($read, &$lastResp) {
        $lastResp = $read();
        return substr($lastResp, 0, 3) === (string) $code;
    };
    $lastResp = '';
    $read(); // banner
    $write('EHLO ' . (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost'));
    $read();
    if ($secure === 'tls') {
        $write('STARTTLS');
        if (!$expect(220)) { fclose($sock); return array('success' => false, 'error' => 'STARTTLS refused: ' . trim($lastResp)); }
        if (!@stream_socket_enable_crypto($sock, true, STREAM_CRYPTO_METHOD_TLS_CLIENT)) {
            fclose($sock); return array('success' => false, 'error' => 'TLS handshake failed');
        }
        $write('EHLO ' . (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost'));
        $read();
    }
    if ($user !== '') {
        $write('AUTH LOGIN');
        if (!$expect(334)) { fclose($sock); return array('success' => false, 'error' => 'AUTH LOGIN refused'); }
        $write(base64_encode($user));
        if (!$expect(334)) { fclose($sock); return array('success' => false, 'error' => 'Username rejected'); }
        $write(base64_encode($pass));
        if (!$expect(235)) { fclose($sock); return array('success' => false, 'error' => 'Authentication failed: ' . trim($lastResp)); }
    }
    $write('MAIL FROM:<' . $from . '>');
    if (!$expect(250)) { fclose($sock); return array('success' => false, 'error' => 'MAIL FROM rejected: ' . trim($lastResp)); }
    $write('RCPT TO:<' . $to . '>');
    if (!$expect(250) && substr($lastResp, 0, 3) !== '251') { fclose($sock); return array('success' => false, 'error' => 'RCPT TO rejected: ' . trim($lastResp)); }
    $write('DATA');
    if (!$expect(354)) { fclose($sock); return array('success' => false, 'error' => 'DATA refused'); }
    $__contentType = $isHtml ? 'text/html; charset=UTF-8' : 'text/plain; charset=UTF-8';
    $headers = "From: $from\r\nTo: $to\r\nSubject: $subject\r\nMIME-Version: 1.0\r\nContent-Type: $__contentType\r\nDate: " . date('r') . "\r\n";
    $msg = $headers . "\r\n" . str_replace("\n.", "\n..", $body) . "\r\n.";
    $write($msg);
    if (!$expect(250)) { fclose($sock); return array('success' => false, 'error' => 'Message rejected: ' . trim($lastResp)); }
    $write('QUIT');
    fclose($sock);
    return array('success' => true, 'error' => null);
}
/**
 * Builds a fully app-themed HTML email — gold/navy palette matching the
 * login & upload pages, a status badge, a details table, and a footer
 * linking back to the site with the same "Powered by Tiny File Manager" credit
 * shown in the app's own footer.
 *
 * @param string $title       Big heading inside the card, e.g. "Login detected"
 * @param string $badgeText   Short status pill text, e.g. "Success" / "Blocked"
 * @param string $badgeColor  'gold' | 'red' — pill accent
 * @param string $iconGlyph   Plain-text/emoji glyph for the header icon (Font Awesome webfonts don't load in email clients, so an <i class="fa"> icon would render as an empty box)
 * @param array  $rows        Ordered array of label => value detail rows
 * @param string $introLine   Optional one-line summary shown under the title
 */
function fm_build_themed_email($title, $badgeText, $badgeColor, $iconGlyph, $rows, $introLine = '')
{
    $siteUrl  = defined('FM_ROOT_URL') ? FM_ROOT_URL : '';
    $accent   = ($badgeColor === 'red') ? '#DC2626' : '#C9A84C';
    $accentBg = ($badgeColor === 'red') ? 'rgba(220,38,38,0.10)' : 'rgba(201,168,76,0.14)';
    $rowsHtml = '';
    foreach ($rows as $label => $value) {
        $rowsHtml .= '<tr>'
            . '<td style="padding:10px 0;border-bottom:1px solid #EDE7D3;color:#6A7D96;font-size:13px;font-weight:600;white-space:nowrap;vertical-align:top;width:120px;">' . fm_enc($label) . '</td>'
            . '<td style="padding:10px 0;border-bottom:1px solid #EDE7D3;color:#162440;font-size:13px;word-break:break-word;">' . fm_enc((string) $value) . '</td>'
            . '</tr>';
    }
    $appTitle = fm_enc(APP_TITLE);
    $year = date('Y');
    return '<!DOCTYPE html>'
    . '<html><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"></head>'
    . '<body style="margin:0;padding:0;background:#FDFBF3;font-family:-apple-system,BlinkMacSystemFont,\'Segoe UI\',Roboto,Helvetica,Arial,sans-serif;">'
    . '<table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:#FDFBF3;padding:32px 16px;">'
    . '<tr><td align="center">'
    . '<table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="max-width:520px;background:#ffffff;border-radius:20px;overflow:hidden;border:1px solid rgba(22,36,64,0.08);box-shadow:0 8px 40px rgba(22,36,64,0.10);">'
    // Header band
    . '<tr><td style="background:#162440;padding:24px 28px;">'
    . '<table role="presentation" width="100%" cellpadding="0" cellspacing="0"><tr>'
    . '<td style="vertical-align:middle;">'
    . '<span style="display:inline-block;width:36px;height:36px;border-radius:10px;background:rgba(201,168,76,0.18);text-align:center;line-height:36px;margin-right:10px;vertical-align:middle;font-size:16px;">'
    . $iconGlyph . '</span>'
    . '<span style="color:#ffffff;font-size:16px;font-weight:700;vertical-align:middle;">' . $appTitle . '</span>'
    . '</td>'
    . '<td align="right" style="vertical-align:middle;">'
    . '<span style="display:inline-block;background:' . $accentBg . ';color:' . $accent . ';font-size:11px;font-weight:700;letter-spacing:0.3px;padding:5px 12px;border-radius:999px;text-transform:uppercase;">' . fm_enc($badgeText) . '</span>'
    . '</td></tr></table>'
    . '</td></tr>'
    // Body
    . '<tr><td style="padding:28px 28px 8px;">'
    . '<h1 style="margin:0 0 6px;color:#162440;font-size:20px;font-weight:700;">' . fm_enc($title) . '</h1>'
    . ($introLine !== '' ? '<p style="margin:0 0 20px;color:#6A7D96;font-size:13.5px;line-height:1.5;">' . fm_enc($introLine) . '</p>' : '<div style="height:14px;"></div>')
    . '<table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:8px;">' . $rowsHtml . '</table>'
    . '</td></tr>'
    // Footer
    . '<tr><td style="padding:20px 28px 26px;">'
    . '<table role="presentation" width="100%" cellpadding="0" cellspacing="0"><tr><td style="border-top:1px solid rgba(22,36,64,0.08);padding-top:16px;">'
    . '<p style="margin:0 0 4px;color:#8A93A3;font-size:11.5px;">This is an automated notification' . ($siteUrl !== '' ? ' from <a href="' . fm_enc($siteUrl) . '" style="color:#C9A84C;text-decoration:none;font-weight:600;">' . fm_enc($siteUrl) . '</a>' : '') . '.</p>'
    . '<p style="margin:0;color:#8A93A3;font-size:11.5px;">Powered by <a href="https://tinyfilemanager.github.io" style="color:#C9A84C;text-decoration:none;font-weight:600;">' . $appTitle . '</a> &middot; &copy; ' . $year . '</p>'
    . '</td></tr></table>'
    . '</td></tr>'
    . '</table>'
    . '</td></tr>'
    . '</table>'
    . '</body></html>';
}
/**
 * Fire login notifications on every successful login. SMTP is used if
 * enabled and configured. Never blocks the login redirect: failures are
 * only written to the activity log.
 */

function fm_send_login_notification($username, $ip, $city, $region, $country, $isp, $device, $time)
{
    global $cfg;
    $subject = 'Login alert: ' . $username;
    $html = fm_build_themed_email(
        'Login detected',
        'Success',
        'gold',
        '&#9989;',
        array(
            'User'     => $username,
            'Website'  => FM_ROOT_URL,
            'Time'     => $time,
            'IP'       => $ip,
            'Location' => "$city, $region, $country",
            'ISP'      => $isp,
            'Device'   => $device,
        ),
        'A successful sign-in to your ' . APP_TITLE . ' account was just recorded. If this was you, no action is needed.'
    );

    if (!empty($cfg->data['smtp_enabled']) && !empty($cfg->data['smtp_host']) && !empty($cfg->data['smtp_to'])) {
        $r = fm_smtp_send(
            $cfg->data['smtp_host'],
            isset($cfg->data['smtp_port']) ? $cfg->data['smtp_port'] : 587,
            isset($cfg->data['smtp_secure']) ? $cfg->data['smtp_secure'] : 'tls',
            isset($cfg->data['smtp_user']) ? $cfg->data['smtp_user'] : '',
            isset($cfg->data['smtp_pass']) ? $cfg->data['smtp_pass'] : '',
            isset($cfg->data['smtp_from']) && $cfg->data['smtp_from'] !== '' ? $cfg->data['smtp_from'] : $cfg->data['smtp_to'],
            $cfg->data['smtp_to'],
            $subject,
            $html,
            true
        );
        if (!$r['success']) fm_activity_log('LOGIN_NOTIFY_SMTP_FAILED', $r['error']);
    }
}

/**
 * Optional: alert on a failed login attempt too, gated by its own toggle
 * so people who only want successful-login alerts aren't spammed by
 * scanners hammering the login form.
 */
function fm_send_failed_login_notification($attemptedUser, $ip, $city, $region, $country, $isp, $device, $time)
{
    global $cfg;
    if (empty($cfg->data['notify_on_failed_login'])) return;
    $subject = 'Failed login attempt: ' . $attemptedUser;
    $html = fm_build_themed_email(
        'Failed login attempt',
        'Blocked',
        'red',
        '&#9888;&#65039;',
        array(
            'Attempted user' => $attemptedUser,
            'Website'        => FM_ROOT_URL,
            'Time'           => $time,
            'IP'             => $ip,
            'Location'       => "$city, $region, $country",
            'ISP'            => $isp,
            'Device'         => $device,
        ),
        'Someone tried and failed to sign in to your ' . APP_TITLE . ' account. If this wasn\'t you, consider reviewing your password and active sessions.'
    );
    if (!empty($cfg->data['smtp_enabled']) && !empty($cfg->data['smtp_host']) && !empty($cfg->data['smtp_to'])) {
        $r = fm_smtp_send(
            $cfg->data['smtp_host'],
            isset($cfg->data['smtp_port']) ? $cfg->data['smtp_port'] : 587,
            isset($cfg->data['smtp_secure']) ? $cfg->data['smtp_secure'] : 'tls',
            isset($cfg->data['smtp_user']) ? $cfg->data['smtp_user'] : '',
            isset($cfg->data['smtp_pass']) ? $cfg->data['smtp_pass'] : '',
            isset($cfg->data['smtp_from']) && $cfg->data['smtp_from'] !== '' ? $cfg->data['smtp_from'] : $cfg->data['smtp_to'],
            $cfg->data['smtp_to'],
            $subject,
            $html,
            true
        );
        if (!$r['success']) fm_activity_log('LOGIN_NOTIFY_SMTP_FAILED', $r['error']);
    }
}
class FM_Config
{
    var $data;
    function __construct()
    {
        global $root_path, $root_url, $CONFIG;
        $fm_url = $root_url . $_SERVER["PHP_SELF"];
        $this->data = array(
            'lang' => 'en',
            'error_reporting' => true,
            'show_hidden' => true
        );
        $data = false;
        if (strlen($CONFIG)) {
            $data = fm_object_to_array(json_decode($CONFIG));
        } else {
            $msg = 'Tiny File Manager<br>Error: Cannot load configuration';
            if (substr($fm_url, -1) == '/') {
                $fm_url = rtrim($fm_url, '/');
                $msg .= '<br>';
                $msg .= '<br>Seems like you have a trailing slash on the URL.';
                $msg .= '<br>Try this link: <a href="' . $fm_url . '">' . $fm_url . '</a>';
            }
            die($msg);
        }
        if (is_array($data) && count($data)) $this->data = $data;
        else $this->save();
    }
    function save()
    {
        global $config_file;
        $fm_file = is_readable($config_file) ? $config_file : __FILE__;
        $var_name = '$CONFIG';
        $var_value = var_export(json_encode($this->data), true);
        $config_string = "<?php" . chr(13) . chr(10) . "//Default Configuration" . chr(13) . chr(10) . "$var_name = $var_value;" . chr(13) . chr(10);
        if (is_writable($fm_file)) {
            $lines = file($fm_file);
            if ($fh = @fopen($fm_file, "w")) {
                @fputs($fh, $config_string, strlen($config_string));
                for ($x = 3; $x < count($lines); $x++) {
                    @fputs($fh, $lines[$x], strlen($lines[$x]));
                }
                @fclose($fh);
            }
        }
    }
}
/**
 * Show nav block
 * @param string $path
 */
function fm_show_nav_path($path)
{
    global $lang, $sticky_navbar, $editFile;
    $isStickyNavBar = $sticky_navbar ? 'fixed-top' : '';
?>
    <nav class="navbar navbar-expand-lg main-nav <?php echo $isStickyNavBar ?>">
        <div style="display:flex;align-items:center;width:100%;height:var(--ios-nav-h);padding:0 16px;gap:0;flex-wrap:nowrap;">
            <!-- LEFT: Brand -->
            <a class="navbar-brand d-flex align-items-center gap-2 flex-shrink-0" href="?dir=" style="margin:0;padding:0;margin-right:6px;text-decoration:none;">
                <span class="fm-brand-icon" style="display:inline-flex;align-items:center;justify-content:center;width:30px;height:30px;background:#162440;border-radius:8px;flex-shrink:0;">
                    <i class="fa fa-folder-open" style="color:#fff;font-size:13px;line-height:1;"></i>
                </span>
                <span class="d-none d-sm-inline" style="font-family:'Inter',sans-serif;white-space:nowrap;font-weight:700;font-size:16px;color:var(--ios-label);"><?php echo lng('AppTitle') ?></span>
            </a>
            <?php
            $path_clean_nav = fm_clean_path($path);
            $bc_sep_nav = '<span style="color:var(--ios-gray3);margin:0 2px;font-size:14px;font-weight:400;flex-shrink:0;line-height:1;opacity:0.7;user-select:none;">/</span>';
            $bc_parts_arr = [];
            $bc_parts_arr[] = "<a href='?dir=' style='display:inline-flex;align-items:center;justify-content:center;color:#C9A84C;flex-shrink:0;padding:2px 5px;text-decoration:none;' title='Home'><i class='fa fa-home' style='font-size:16px;line-height:1;'></i></a>";
            if ($path_clean_nav != '') {
                $bc_parts_nav  = explode('/', $path_clean_nav);
                $bc_parent_nav = '';
                foreach ($bc_parts_nav as $bp_nav) {
                    $bc_parent_nav = trim($bc_parent_nav . '/' . $bp_nav, '/');
                    $bc_parts_arr[] = "<a href='?dir=" . urlencode($bc_parent_nav) . "' style='display:inline-flex;align-items:center;font-size:14px;font-weight:500;color:var(--ios-secondary);padding:2px 5px;text-decoration:none;white-space:nowrap;'>" . fm_enc(fm_convert_win($bp_nav)) . "</a>";
                }
            }
            if (isset($_GET['view']) && $_GET['view'] !== '') {
                $bc_parts_arr[] = "<span style='display:inline-flex;align-items:center;font-size:13px;font-weight:600;color:#fff;background:#162440;padding:2px 10px;border-radius:999px;white-space:nowrap;'>" . fm_enc(basename($_GET['view'])) . "</span>";
            } elseif (isset($_GET['edit']) && $_GET['edit'] !== '') {
                $bc_parts_arr[] = "<span style='display:inline-flex;align-items:center;gap:3px;font-size:13px;font-weight:600;color:#fff;background:#162440;padding:2px 10px;border-radius:999px;white-space:nowrap;'><i class='fa fa-pencil-square-o' style='font-size:10px;opacity:0.9;'></i>" . fm_enc(basename($_GET['edit'])) . "</span>";
            }
            $bc_html_nav = implode($bc_sep_nav, $bc_parts_arr);
            ?>
            <!-- CENTER: Breadcrumb — takes remaining space, scrollable, left-aligned mobile, centered desktop -->
            <div id="nav-breadcrumb" style="flex:1;min-width:0;overflow:hidden;padding:0 4px;display:flex;align-items:center;justify-content:flex-start;">
                <div style="overflow-x:auto;white-space:nowrap;display:flex;align-items:center;scrollbar-width:none;-ms-overflow-style:none;-webkit-overflow-scrolling:touch;" class="bc-scroll-wrap">
                    <div style="display:inline-flex;align-items:center;flex-wrap:nowrap;gap:0;padding:3px 8px;background:var(--ios-fill);border-radius:999px;" class="bc-inner">
                        <?php echo $bc_html_nav; ?>
                    </div>
                </div>
            </div>
            <!-- RIGHT: Action buttons flush to right edge -->
            <div style="display:flex;align-items:center;gap:3px;flex-shrink:0;margin-left:6px;">
                <!-- Single search button — hidden for readonly users -->
                <?php if (!FM_READONLY): ?>
                <a href="<?php echo $path2 = $path ? $path : '.'; ?>" id="js-search-modal"
                   data-bs-toggle="modal" data-bs-target="#searchModal"
                   class="nav-icon-btn"
                   style="color:#C9A84C!important;text-decoration:none;" title="Search">
                    <i class="fa fa-search"></i><span class="nav-btn-label">Search</span>
                </a>
                <?php endif; ?>
                <?php if (!FM_READONLY): ?>
                    <a title="<?php echo lng('Upload') ?>" class="nav-icon-btn" href="?dir=<?php echo urlencode(FM_PATH) ?>&amp;upload" style="color:#C9A84C!important;text-decoration:none;">
                        <i class="fa fa-cloud-upload"></i><span class="nav-btn-label"><?php echo lng('Upload') ?></span>
                    </a>
                    <a title="<?php echo lng('NewItem') ?>" class="nav-icon-btn" href="#createNewItem" data-bs-toggle="modal" data-bs-target="#createNewItem" style="color:#C9A84C!important;text-decoration:none;">
                        <i class="fa fa-plus-square"></i><span class="nav-btn-label"><?php echo lng('NewItem') ?></span>
                    </a>
                <?php endif; ?>
                <button type="button" id="fm-theme-toggle" class="nav-icon-btn" title="Toggle dark mode" onclick="fmToggleTheme(event)" style="color:#C9A84C!important;text-decoration:none;border:none;background:transparent;cursor:pointer;">
                    <i class="fa fa-moon-o fm-theme-icon" id="fm-theme-icon"></i><span class="nav-btn-label">Theme</span>
                </button>
                <?php if (FM_USE_AUTH): ?>
                    <div class="nav-item avatar dropdown" style="list-style:none;">
                        <a class="nav-link d-flex align-items-center gap-1" id="navbarDropdownMenuLink-5" data-bs-toggle="dropdown" aria-expanded="false" style="cursor:pointer;padding:4px!important;">
                            <span style="display:inline-flex;align-items:center;justify-content:center;width:30px;height:30px;background:rgba(201,168,76,0.10);border-radius:50%;">
                                <i class="fa fa-user" style="font-size:13px;color:#C9A84C;line-height:1;"></i>
                            </span>
                            <i class="fa fa-chevron-down" id="profile-arrow" style="font-size:10px;color:#C9A84C;transition:transform 0.2s;"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink-5" style="min-width:0;width:auto;max-width:200px;padding:6px;border-radius:14px;right:0;left:auto;">
                            <?php if (!FM_READONLY): ?>
                                <a title="<?php echo lng('Settings') ?>" class="dropdown-item" href="?dir=<?php echo urlencode(FM_PATH) ?>&amp;settings=1" style="font-family:'Inter',sans-serif;border-radius:8px;"><i class="fa fa-cog" style="width:16px;margin-right:6px;color:#C9A84C;"></i><?php echo lng('Settings') ?></a>
                            <?php endif ?>
                            <a title="<?php echo lng('Help') ?>" class="dropdown-item" href="?dir=<?php echo urlencode(FM_PATH) ?>&amp;help=2" style="font-family:'Inter',sans-serif;border-radius:8px;"><i class="fa fa-question-circle" style="width:16px;margin-right:6px;color:#C9A84C;"></i><?php echo lng('Help') ?></a>
                            <div class="dropdown-divider" style="margin:4px 0;border-color:var(--ios-sep);"></div>
                            <a title="<?php echo lng('Logout') ?>" class="dropdown-item" style="color:var(--ios-red)!important;font-family:'Inter',sans-serif;border-radius:8px;" href="?logout=1"><i class="fa fa-sign-out" style="width:16px;margin-right:6px;"></i><?php echo lng('Logout') ?></a>
                        </div>
                    </div>
                <?php else: ?>
                    <?php if (!FM_READONLY): ?>
                        <a title="<?php echo lng('Settings') ?>" class="nav-icon-btn" href="?dir=<?php echo urlencode(FM_PATH) ?>&amp;settings=1" style="color:#C9A84C!important;text-decoration:none;"><i class="fa fa-cog"></i></a>
                    <?php endif; ?>
                <?php endif; ?>
            </div><!-- /right actions -->
        </div><!-- /nav inner -->
    </nav>
    <?php
    $path_clean = fm_clean_path($path);
    $bc_root = "<a href='?dir=' style='color:#C9A84C;'><i class='fa fa-home'></i></a>";
    $bc_sep  = '<span style="color:var(--ios-gray3);margin:0 4px;font-size:12px;">/</span>';
    $bc_html = $bc_root;
    if ($path_clean != '') {
        $bc_parts  = explode('/', $path_clean);
        $bc_parent = '';
        $bc_arr    = array();
        foreach ($bc_parts as $bp) {
            $bc_parent = trim($bc_parent . '/' . $bp, '/');
            $bc_arr[]  = "<a href='?dir=" . urlencode($bc_parent) . "' style='color:#C9A84C;font-weight:500;font-size:13px;font-family:\"Inter\",sans-serif;'>" . fm_enc(fm_convert_win($bp)) . "</a>";
        }
        $bc_html .= $bc_sep . implode($bc_sep, $bc_arr);
    }
    ?>
<?php
}
function fm_show_message()
{
    if (isset($_SESSION[FM_SESSION_ID]['message'])) {
        $class = isset($_SESSION[FM_SESSION_ID]['status']) ? $_SESSION[FM_SESSION_ID]['status'] : 'ok';
        $msg   = $_SESSION[FM_SESSION_ID]['message'];
        unset($_SESSION[FM_SESSION_ID]['message']);
        unset($_SESSION[FM_SESSION_ID]['status']);
        echo '<script>document.addEventListener("DOMContentLoaded",function(){fmToast(' . json_encode($msg) . ',' . json_encode($class) . ');});</script>';
    }
}
function fm_show_header_login()
{
    header("Content-Type: text/html; charset=utf-8");
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
    header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");
    header("Pragma: no-cache");
    global $favicon_path;
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <script>
        // Apply saved theme before first paint to avoid a light/dark flash
        (function(){
            try {
                var t = localStorage.getItem('fm-theme');
                var dark = (t === 'dark' || (t === null && window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches));
                document.documentElement.setAttribute('data-theme', dark ? 'dark' : 'light');
                document.addEventListener('DOMContentLoaded', function() {
                    var m = document.getElementById('fm-theme-color-meta');
                    if (m) m.setAttribute('content', dark ? '#14171C' : '#FDFBF3');
                });
            } catch (e) {}
        })();
        </script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no, viewport-fit=cover">
        <meta name="theme-color" id="fm-theme-color-meta" content="#FDFBF3">
        <?php print_external('pre-jsdelivr'); ?>
        <?php print_external('css-bootstrap'); ?>
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" crossorigin="anonymous">
        <script>
        function fmGetTheme() {
            return document.documentElement.getAttribute('data-theme') === 'dark' ? 'dark' : 'light';
        }
        function fmApplyThemeIcon() {
            var dark = fmGetTheme() === 'dark';
            document.querySelectorAll('.fm-theme-icon').forEach(function (icon) {
                icon.className = 'fa fm-theme-icon ' + (dark ? 'fa-sun-o' : 'fa-moon-o');
            });
        }
        function fmThemeRipple(mode, originEl) {
            var existing = document.getElementById('fm-theme-ripple');
            if (existing) existing.remove();
            // Switch theme immediately — CSS var transitions animate all elements smoothly
            document.documentElement.setAttribute('data-theme', mode);
            try { localStorage.setItem('fm-theme', mode); } catch(e) {}
            (function(){ var m = document.getElementById('fm-theme-color-meta'); if (m) m.setAttribute('content', mode === 'dark' ? '#14171C' : '#FDFBF3'); })();
            if (typeof fmApplyThemeIcon === 'function') fmApplyThemeIcon();
            // Decorative clip-path ripple: content always visible, just a subtle tint shimmer
            var rect = originEl ? originEl.getBoundingClientRect() : {left: window.innerWidth/2, top: window.innerHeight/2, width:0, height:0};
            var cx = Math.round(rect.left + rect.width/2);
            var cy = Math.round(rect.top  + rect.height/2);
            var maxR = Math.ceil(Math.sqrt(Math.pow(Math.max(cx, window.innerWidth-cx),2) + Math.pow(Math.max(cy, window.innerHeight-cy),2))) + 10;
            var overlay = document.createElement('div');
            overlay.id = 'fm-theme-ripple';
            overlay.style.cssText = 'position:fixed;inset:0;z-index:999998;pointer-events:none;' +
                'background:' + (mode === 'dark' ? 'rgba(20,23,28,0.22)' : 'rgba(253,251,243,0.22)') + ';' +
                'clip-path:circle(0px at ' + cx + 'px ' + cy + 'px);' +
                'transition:clip-path 0.52s cubic-bezier(0.4,0,0.2,1),opacity 0.25s ease 0.36s;' +
                'will-change:clip-path,opacity;';
            document.body.appendChild(overlay);
            requestAnimationFrame(function() {
                requestAnimationFrame(function() {
                    overlay.style.clipPath = 'circle(' + maxR + 'px at ' + cx + 'px ' + cy + 'px)';
                    setTimeout(function() {
                        overlay.style.opacity = '0';
                        setTimeout(function() { if (overlay.parentNode) overlay.parentNode.removeChild(overlay); }, 260);
                    }, 370);
                });
            });
        }
        function fmSetTheme(mode, originEl) {
            mode = (mode === 'dark') ? 'dark' : 'light';
            fmThemeRipple(mode, originEl || window._fmThemeOriginEl || null);
        }
        function fmToggleTheme(e) {
            var origin = (e && e.currentTarget) || document.getElementById('fm-theme-toggle');
            window._fmThemeOriginEl = origin;
            fmSetTheme(fmGetTheme() === 'dark' ? 'light' : 'dark', origin);
        }
        </script>
        <style>
            /* ===== LOGIN PAGE — LIGHT THEME SPLIT PANEL ===== */
            :root {
                --ns: 'Inter', -apple-system, sans-serif;
                --pur: #C9A84C;
                --pur-l: #C9A84C;
                --pur-d: #162440;
                --pur-glow: rgba(201,168,76,0.20);
                /* Light theme tokens */
                --bg: #FDFBF3;
                --label: #162440;
                --label2: #233554;
                --secondary: #3A4D6A;
                --tertiary: #6A7D96;
                --input-bg: #fff;
                --input-border: rgba(22,36,64,0.18);
                --input-border-focus: #C9A84C;
                --form-bg: #ffffff;
                --sep: rgba(22,36,64,0.09);
                --deco-bg: #162440;
                --card-bg: #ffffff;
                --tile-fill: rgba(22,36,64,0.04);
            }
            html[data-theme="dark"] {
                --pur: #E4C169;
                --pur-l: #E4C169;
                --pur-d: #EEF1F6;
                --pur-glow: rgba(228,193,105,0.22);
                --bg: #14171C;
                --label: #EEF1F6;
                --label2: #D7DCE6;
                --secondary: #ADB6C2;
                --tertiary: #838D99;
                --input-bg: #1E222A;
                --input-border: rgba(238,241,246,0.16);
                --input-border-focus: #E4C169;
                --form-bg: #1B1F26;
                --sep: rgba(238,241,246,0.10);
                --deco-bg: #0D1015;
                --card-bg: #1B1F26;
                --tile-fill: rgba(238,241,246,0.06);
                color-scheme: dark;
            }
            *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; -webkit-tap-highlight-color: transparent; font-family: inherit; }
            .fa, .fas, .far, .fal, .fab, [class^="fa-"], [class*=" fa-"] { font-family: FontAwesome !important; }
            /* Bootstrap's own component styles set font-family on these instead of
               inheriting from body, which is why plain `inherit` above missed them
               (settings switches, dropdown items, cards, buttons, etc.) */
            html, body, input, button, select, textarea:not(#normal-editor), optgroup,
            .form-control, .btn, .card, .card-header, .card-body, .card-footer,
            .modal, .modal-content, .modal-header, .modal-body, .modal-footer,
            .dropdown-menu, .dropdown-item, label, .col-form-label, .form-check-label,
            .form-label, .table, th, td, .badge, .alert, .list-group-item, .nav-link,
            .breadcrumb, .breadcrumb-item, .toast, .tooltip, .popover {
                font-family: var(--ns) !important;
            }
            html { height: 100%; overscroll-behavior-y: contain; }
            body { height: 100%; overscroll-behavior-y: contain; }
            body.fm-login-page {
                font-family: var(--ns);
                background: var(--bg);
                height: 100vh;
                height: 100dvh;
                margin: 0;
                padding-top: var(--fm-safe-top, env(safe-area-inset-top, 0px));
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                -webkit-font-smoothing: antialiased;
                position: relative;
                overflow: hidden;
                overflow-x: hidden;
                transition: background 0.25s ease;
            }
            /* Soft purple radial wash */
            body.fm-login-page::before {
                content: '';
                position: fixed; inset: 0; z-index: 0;
                background: var(--bg);
                pointer-events: none;
                transition: background 0.25s ease;
            }
            .fm-login-section {
                position: relative; z-index: 1;
                width: 100%;
                min-height: 100vh;
                min-height: calc(100dvh - var(--fm-safe-top, 0px));
                max-height: 100vh;
                max-height: calc(100dvh - var(--fm-safe-top, 0px));
                display: flex; align-items: center; justify-content: center;
                padding: 16px;
                margin: 0;
                box-sizing: border-box;
                overflow-y: auto;
                overflow-x: hidden;
            }
            .fm-otp-input { letter-spacing: 6px; text-align: center; font-size: 22px; font-weight: 700; padding-left: 40px; }
            /* ── CARD WRAP ── */
            .login-wrap {
                position: relative; z-index: 1;
                width: fit-content;
                max-width: min(900px, calc(100vw - 32px));
                margin: 0 auto;
            }
            .login-card {
                display: flex;
                border-radius: 24px;
                overflow: hidden;
                border: 1px solid rgba(201,168,76,0.15);
                box-shadow:
                    0 2px 0 rgba(255,255,255,0.9) inset,
                    0 24px 80px rgba(22,36,64,0.14),
                    0 4px 16px rgba(201,168,76,0.09);
                background: var(--card-bg);
                animation: cardIn 0.45s cubic-bezier(0.22,1,0.36,1) both;
                width: auto;
                height: auto;
                transition: background 0.25s ease;
            }
            @keyframes cardIn {
                from { opacity: 0; transform: translateY(20px) scale(0.98); }
                to   { opacity: 1; transform: translateY(0) scale(1); }
            }
            /* ── LEFT DECORATIVE PANEL ── */
            .login-deco {
                flex: 0 0 260px;
                position: relative;
                overflow: hidden;
                background: var(--deco-bg);
                display: flex; align-items: center; justify-content: center;
                padding: 44px 32px;
                transition: background 0.25s ease;
            }
            /* Grid pattern on left panel */
            .login-deco .deco-grid {
                position: absolute; inset: 0;
                background-image:
                    linear-gradient(rgba(201,168,76,0.08) 1px, transparent 1px),
                    linear-gradient(90deg, rgba(201,168,76,0.08) 1px, transparent 1px);
                background-size: 28px 28px;
            }
            .login-deco::before {
                content: '';
                position: absolute;
                bottom: -60px; right: -60px;
                width: 200px; height: 200px;
                background: rgba(201,168,76,0.07);
                border-radius: 50%;
                pointer-events: none;
            }
            .deco-content {
                position: relative; z-index: 1;
                display: flex; flex-direction: column; align-items: flex-start; gap: 18px;
            }
            /* Logo + title in ONE ROW on left panel */
            .deco-brand-row {
                display: flex; align-items: center; gap: 14px;
            }
            .deco-icon-ring {
                display: inline-flex; align-items: center; justify-content: center;
                width: 52px; height: 52px; border-radius: 15px;
                background: rgba(201,168,76,0.18);
                border: 1px solid rgba(201,168,76,0.40);
                box-shadow: 0 4px 16px rgba(0,0,0,0.20);
                flex-shrink: 0;
            }
            .deco-icon-ring i { font-size: 22px !important; color: var(--pur) !important; display: block !important; line-height: 1 !important; }
            .deco-title {
                font-size: 22px; font-weight: 700; color: #FDFBF3;
                letter-spacing: -0.5px; line-height: 1.1;
            }
            .deco-desc {
                font-size: 13px; color: rgba(253,251,243,0.60);
                line-height: 1.7; max-width: 200px;
            }
            .deco-features {
                display: flex; flex-direction: column; gap: 10px; margin-top: 4px;
            }
            .deco-feat {
                display: flex; align-items: center; gap: 10px;
                font-size: 12.5px; color: rgba(253,251,243,0.72); font-weight: 400;
            }
            .deco-feat i {
                width: 26px; height: 26px; border-radius: 7px;
                background: rgba(201,168,76,0.16); border: 1px solid rgba(201,168,76,0.35);
                display: inline-flex; align-items: center; justify-content: center;
                font-size: 11px; color: var(--pur); flex-shrink: 0;
            }
            /* ── RIGHT FORM PANEL ── */
            .login-form-panel {
                flex: 0 0 auto;
                width: 380px;
                padding: 44px 40px 40px;
                background: var(--form-bg);
                display: flex;
                flex-direction: column;
                justify-content: flex-start;
                align-items: stretch;
                min-width: 0;
                overflow: hidden;
            }
            /* All form elements fill the panel width */
            .login-form-panel form,
            .login-form-panel .fm-field,
            .login-form-panel .btn-signin,
            .login-form-panel .form-heading,
            .login-form-panel .form-subheading,
            .login-form-panel .msg-wrap,
            .login-form-panel .login-footer-bar {
                width: 100%;
            }
            /* Mobile brand row (shown only on mobile) */
            .login-mobile-header { display: none; }
            .login-mobile-brand-row {
                display: flex; align-items: center; gap: 8px; justify-content: flex-start;
                margin-bottom: 24px;
            }
            .login-mobile-theme-toggle {
                margin-left: auto;
                width: 32px; height: 32px; border-radius: 9px; flex-shrink: 0;
                border: 1px solid var(--sep); background: var(--card-bg); color: var(--pur);
                display: flex; align-items: center; justify-content: center;
                font-size: 13px; cursor: pointer;
                transition: background 0.25s ease, border-color 0.25s ease;
            }
            .login-mobile-icon {
                display: inline-flex; align-items: center; justify-content: center;
                width: 30px; height: 30px; border-radius: 8px;
                background: var(--deco-bg);
                flex-shrink: 0;
            }
            .login-mobile-icon i { font-size: 13px !important; color: #fff !important; display: block !important; line-height: 1 !important; }
            .login-mobile-title { font-size: 16px; font-weight: 700; color: var(--label); letter-spacing: -0.3px; }
            .form-heading {
                font-size: 21px; font-weight: 700; color: var(--label);
                letter-spacing: -0.4px; margin-bottom: 5px;
            }
            .form-subheading {
                font-size: 13px; color: var(--secondary); margin-bottom: 24px; font-weight: 400;
            }
            .msg-wrap { margin-bottom: 4px; }
            /* ── Fields ── */
            .fm-field { margin-bottom: 14px; }
            .fm-label {
                display: block;
                font-size: 11px; font-weight: 700; letter-spacing: 0.5px;
                text-transform: uppercase; color: var(--tertiary);
                margin-bottom: 6px;
            }
            .fm-input-group {
                position: relative; display: flex; align-items: center;
            }
            .fm-input-icon {
                position: absolute; left: 13px;
                color: var(--tertiary); font-size: 13px;
                pointer-events: none; z-index: 2; width: 15px; text-align: center;
                transition: color 0.2s;
            }
            .fm-input {
                width: 100%;
                padding: clamp(8px, 1.6vh, 11px) 14px clamp(8px, 1.6vh, 11px) 40px;
                background: var(--input-bg);
                border: 1.5px solid var(--input-border);
                border-radius: 10px;
                color: var(--label);
                font-size: 14px; font-family: var(--ns);
                outline: none;
                transition: border-color 0.22s, box-shadow 0.22s, background 0.22s;
                -webkit-appearance: none;
            }
            .fm-input::placeholder { color: var(--tertiary); opacity: 0.7; }
            .fm-input:focus {
                border-color: var(--input-border-focus);
                box-shadow: 0 0 0 3px var(--pur-glow);
                background: var(--input-bg);
            }
            .fm-input-group:focus-within .fm-input-icon { color: var(--pur); }
            .fm-eye-btn {
                position: absolute; right: 12px;
                background: none; border: none; color: var(--tertiary);
                cursor: pointer; padding: 4px; font-size: 13px;
                transition: color 0.2s;
            }
            .fm-eye-btn:hover { color: var(--pur); }
            /* ── Captcha ── */
            .fm-captcha-wrap {
                display: flex; align-items: stretch; gap: 8px;
            }
            .fm-captcha-sum {
                display: flex; align-items: center; gap: 6px;
                background: var(--bg);
                border: 1.5px solid rgba(201,168,76,0.30);
                border-radius: 11px;
                padding: 0 14px;
                flex-shrink: 0;
                min-width: 120px;
            }
            .captcha-num {
                font-size: 19px; font-weight: 800; color: var(--label);
                font-variant-numeric: tabular-nums; line-height: 1;
            }
            .captcha-op {
                font-size: 15px; font-weight: 700; color: var(--secondary);
            }
            .captcha-q {
                font-size: 19px; font-weight: 800; color: var(--tertiary);
            }
            .fm-captcha-wrap .fm-input-group { flex: 1; min-width: 0; }
            .fm-captcha-wrap .fm-input { padding-left: 40px; }
            .fm-captcha-hint {
                display: flex; align-items: center; gap: 6px;
                font-size: 11px; color: #DC2626;
                margin-top: 6px; padding: 5px 10px;
                background: rgba(239,68,68,0.06);
                border-radius: 7px; border: 1px solid rgba(239,68,68,0.15);
            }
            /* ── Sign In Button ── */
            .btn-signin {
                width: 100%; margin-top: 10px;
                padding: clamp(9px, 1.8vh, 12px) 24px;
                background: var(--deco-bg);
                color: #FDFBF3; border: none; border-radius: 10px;
                font-size: 15px; font-weight: 600; font-family: var(--ns);
                cursor: pointer; letter-spacing: 0.2px;
                display: flex; align-items: center; justify-content: center;
                gap: 8px;
                box-shadow: 0 4px 16px rgba(22,36,64,0.22);
                transition: background 0.2s, transform 0.15s, box-shadow 0.2s;
                position: relative; overflow: hidden;
            }
            .btn-signin:hover:not(:disabled) { background: #233554; box-shadow: 0 6px 20px rgba(22,36,64,0.30); }
            .btn-signin:active:not(:disabled) { transform: scale(0.98); }
            .btn-signin:disabled { opacity: 0.60; cursor: not-allowed; }
            .btn-signin-text, .btn-signin-loading {
                display: inline-flex; align-items: center; gap: 8px;
            }
            /* ── Footer bar ── */
            .login-footer-bar {
                margin-top: clamp(10px, 2vh, 20px); padding-top: clamp(8px, 1.5vh, 14px);
                border-top: 1px solid rgba(201,168,76,0.09);
                font-size: 12px; color: var(--tertiary); font-family: var(--ns);
                text-align: center;
                display: flex; align-items: center; justify-content: center;
            }
            .login-footer-bar a { color: var(--secondary); text-decoration: none; }
            .login-footer-bar a:hover { color: #C9A84C; }
            /* ── Alert messages ── */
            .message {
                font-family: var(--ns);
                padding: 10px 14px; border-radius: 10px;
                margin-bottom: 14px; font-size: 13px; font-weight: 500;
                animation: msgIn 0.3s ease both;
            }
            @keyframes msgIn {
                from { opacity:0; transform: translateY(-5px); }
                to   { opacity:1; transform: translateY(0); }
            }
            .message.ok    { background: rgba(46,125,50,0.07);   color: #2E7D32; border: 1px solid rgba(46,125,50,0.18); }
            .message.error { background: rgba(198,40,40,0.07);   color: #C62828; border: 1px solid rgba(198,40,40,0.18); }
            .message.alert { background: rgba(201,168,76,0.10);  color: #8A6D00; border: 1px solid rgba(201,168,76,0.25); }
            /* ══════════════════════════════════════
               RESPONSIVE BREAKPOINTS
            ══════════════════════════════════════ */
            /* Large tablets / small laptops: 1024px–1180px (iPad Pro landscape etc.) */
            @media (min-width: 1024px) and (max-width: 1180px) {
                .login-deco { flex: 0 0 300px; padding: clamp(24px, 4vh, 48px) 36px; }
                .login-form-panel { width: 400px; }
                .deco-title { font-size: 24px; }
                .deco-desc { font-size: 14px; max-width: 220px; }
            }
            /* Tablet landscape: 901px–1023px (iPad landscape) */
            @media (min-width: 901px) and (max-width: 1023px) {
                .login-deco { flex: 0 0 260px; padding: clamp(20px, 4vh, 42px) 30px; }
                .login-form-panel { width: 380px; }
                .deco-title { font-size: 21px; }
                .deco-desc { font-size: 13px; max-width: 200px; }
            }
            /* Tablet portrait: 701px–900px (iPad Mini/Air portrait) — roomier split layout */
            @media (min-width: 701px) and (max-width: 900px) {
                .login-wrap { max-width: min(760px, calc(100vw - 48px)); }
                .login-deco { flex: 0 0 240px; padding: clamp(20px, 4vh, 38px) 26px; }
                .deco-title { font-size: 19px; }
                .deco-desc { font-size: 12.5px; max-width: 180px; }
                .deco-features { gap: 8px; }
                .login-form-panel { width: 360px; padding: clamp(24px, 4vh, 40px) 32px clamp(20px, 3vh, 34px); }
                .form-heading { font-size: 22px; }
                .fm-input { font-size: 15px; }
                .btn-signin { font-size: 16px; }
            }
            /* Small tablets / large phones landscape: 521px–700px — keep split layout but tighten */
            @media (min-width: 521px) and (max-width: 700px) {
                .login-deco {
                    flex: 0 0 200px;
                    padding: clamp(16px, 4vh, 30px) 18px;
                    align-items: flex-start;
                }
                .deco-content { padding-top: clamp(20px, 6vh, 48px); }
                .deco-title { font-size: 18px; }
                .deco-desc { display: block; font-size: 11.5px; max-width: 160px; line-height: 1.6; }
                .deco-features { display: none; }
                .login-form-panel { width: 320px; padding: clamp(20px, 4vh, 32px) 26px clamp(16px, 3vh, 28px); }
            }
            /* Mobile: ≤520px — single column, top-aligned, scrollable */
            @media (max-width: 520px) {
                #fm-theme-toggle { display: none !important; }
                .fm-login-section {
                    padding: 16px;
                    align-items: flex-start;
                    min-height: 100vh;
                    min-height: calc(100dvh - var(--fm-safe-top, 0px));
                }
                .login-wrap {
                    width: 100%;
                    max-width: 100%;
                    min-height: auto;
                }
                .login-card {
                    flex-direction: column;
                    border-radius: 22px;
                    border: 1px solid rgba(201,168,76,0.15);
                    box-shadow:
                        0 2px 0 rgba(255,255,255,0.06) inset,
                        0 18px 50px rgba(22,36,64,0.18),
                        0 4px 14px rgba(201,168,76,0.10);
                    background: var(--card-bg);
                    min-height: auto;
                    width: 100%;
                    font-family: var(--ns);
                }
                .login-deco { display: none; }
                .login-mobile-header { display: block; }
                .login-form-panel {
                    width: 100%;
                    padding: 32px 20px 28px;
                    background: var(--form-bg);
                    justify-content: flex-start;
                    align-items: stretch;
                    flex: 1;
                    font-family: var(--ns);
                }
                .login-form-panel form,
                .login-form-panel .fm-field,
                .login-form-panel .btn-signin,
                .login-form-panel .form-heading,
                .login-form-panel .form-subheading,
                .login-form-panel .msg-wrap,
                .login-form-panel .login-footer-bar {
                    max-width: 100%;
                    width: 100%;
                }
                .form-heading { font-size: 20px; }
                .fm-captcha-sum { min-width: 110px; padding: 0 12px; }
                .captcha-num { font-size: 17px; }
            }
            /* Very small phones: ≤380px */
            @media (max-width: 380px) {
                .login-form-panel { padding: 28px 18px 24px; }
                .fm-captcha-sum { min-width: 96px; padding: 0 10px; }
                .captcha-num { font-size: 15px; }
                .form-heading { font-size: 18px; }
            }
            /* Short viewports (landscape phones/tablets) — compact vertical rhythm
               regardless of width, so the card always fits without scrolling */
            @media (max-height: 620px) {
                .login-deco { padding: 14px 24px; }
                .deco-content { gap: 10px; }
                .deco-desc, .deco-features { display: none; }
                .login-form-panel { padding-top: 14px; padding-bottom: 14px; }
                .login-mobile-brand-row { margin-bottom: 10px; }
                .form-heading { font-size: 17px; margin-bottom: 2px; }
                .form-subheading { margin-bottom: 10px; }
                .fm-field { margin-bottom: 8px; }
                .fm-input { padding-top: 7px; padding-bottom: 7px; }
                .btn-signin { padding-top: 8px; padding-bottom: 8px; margin-top: 6px; }
                .login-footer-bar { margin-top: 8px; padding-top: 8px; }
            }
            @media (max-height: 460px) {
                .login-mobile-header { display: none !important; }
                .form-subheading { display: none; }
                .msg-wrap:empty { display: none; }
            }
            /* ── Footer credit ── */
            .fm-footer-credit-login {
                font-size: 12px; color: var(--tertiary);
                font-family: var(--ns); display: inline-flex; align-items: center; gap: 4px;
            }
            .fm-footer-credit-login a { color: var(--secondary); text-decoration: none; }
            .fm-footer-credit-login a:hover { color: #C9A84C; }
            .login-glow, .login-header, .app-icon-ring, .login-title,
            .login-subtitle, .login-info-hint { display: none !important; }
            /* Rounded pill scrollbars */
            ::-webkit-scrollbar { width: 7px; height: 7px; }
            ::-webkit-scrollbar-track { background: transparent; border-radius: 999px; }
            ::-webkit-scrollbar-thumb { background: var(--ios-tertiary); border-radius: 999px; border: 2px solid transparent; background-clip: padding-box; }
            ::-webkit-scrollbar-thumb:hover { background: var(--ios-secondary); border-radius: 999px; border: 2px solid transparent; background-clip: padding-box; }
            ::-webkit-scrollbar-corner { background: transparent; }
            * { scrollbar-width: thin; scrollbar-color: var(--ios-tertiary) transparent; }
        </style>
        <style>
        /* ===== PAGE LOAD OVERLAY ===== */
        #fm-page-loader {
            position: fixed; inset: 0; z-index: 99998;
            background: var(--bg);
            display: flex; align-items: center; justify-content: center;
            transition: opacity 0.30s ease, visibility 0.30s ease, background 0.25s ease;
        }
        #fm-page-loader.fm-loader-hidden { opacity: 0; visibility: hidden; pointer-events: none; }
        .fm-loader-ring {
            width: 36px; height: 36px;
            border: 3px solid var(--sep);
            border-top-color: var(--pur);
            border-radius: 50%;
            animation: fmSpin 0.65s linear infinite;
        }
        @keyframes fmSpin { to { transform: rotate(360deg); } }
        /* Force Inter everywhere on the login page too — final override.
           Icon fonts (Font Awesome) excluded — they break if overridden. */
        body, body * :not(.fa):not(.fa *):not([class*="fa-"]):not(i) {
            font-family: 'Inter', -apple-system, 'Helvetica Neue', sans-serif !important;
        }
        </style>
    </head>
    <body class="fm-login-page">
        <!-- Theme toggle (top-right corner on login page) -->
        <button type="button" id="fm-theme-toggle" title="Toggle dark mode" onclick="fmToggleTheme(event)"
                style="position:fixed;top:calc(16px + clamp(0px, env(safe-area-inset-top, 0px), 24px));right:calc(16px + env(safe-area-inset-right, 0px));z-index:99999;width:38px;height:38px;border-radius:11px;
                       border:1px solid var(--sep);background:var(--card-bg);color:var(--pur);cursor:pointer;
                       display:flex;align-items:center;justify-content:center;font-size:15px;
                       box-shadow:0 2px 10px rgba(22,36,64,0.10);transition:background 0.25s ease,border-color 0.25s ease,transform 0.15s ease;">
            <i class="fa fa-moon-o fm-theme-icon" id="fm-theme-icon"></i>
        </button>
        <!-- Page loader - visible immediately, hidden once DOM ready -->
        <div id="fm-page-loader">
            <div class="fm-loader-ring"></div>
        </div>
        <script>document.addEventListener('DOMContentLoaded',function(){var l=document.getElementById('fm-page-loader');if(l)l.classList.add('fm-loader-hidden');fmApplyThemeIcon();});</script>
        <div id="wrapper" style="display:contents;">
        <?php
    }
    function fm_show_footer_login()
    {
        ?>
        </div>
        <!-- Toast container -->
        <div id="fm-toast-container" style="position:fixed;bottom:24px;right:20px;z-index:99999;display:flex;flex-direction:column-reverse;align-items:flex-end;gap:12px;pointer-events:none;max-width:calc(100vw - 40px);"></div>
        <style>
        /* ── FM Toast v2 ── */
        @keyframes fmTIn  { 0%{transform:translateX(110%) scale(0.92);opacity:0} 60%{transform:translateX(-6px) scale(1.01);opacity:1} 100%{transform:translateX(0) scale(1);opacity:1} }
        @keyframes fmTOut { 0%{transform:translateX(0) scale(1);opacity:1} 100%{transform:translateX(110%) scale(0.94);opacity:0} }
        @keyframes fmTProg{ from{transform:scaleX(1)} to{transform:scaleX(0)} }
        .fm-toast {
            display:inline-flex; align-items:stretch; gap:0;
            width:max-content; min-width:220px; max-width:min(400px, calc(100vw - 40px));
            border-radius:16px; overflow:hidden;
            pointer-events:all; position:relative;
            box-shadow:
                0 4px 16px rgba(22,36,64,0.10),
                0 1px 4px rgba(22,36,64,0.07),
                0 0 0 1px rgba(22,36,64,0.06);
            animation: fmTIn 0.44s cubic-bezier(0.34,1.2,0.64,1) both;
        }
        .fm-toast.fm-toast-out { animation: fmTOut 0.3s cubic-bezier(0.4,0,1,1) both; }
        @media (max-width: 600px) {
            #fm-toast-container { left: 12px; right: 12px; max-width: calc(100vw - 24px); }
            .fm-toast { width: max-content; max-width: calc(100vw - 24px); max-height: 60vh; overflow-y: auto; }
        }
        /* === Cream/Navy/Gold Toasts === */
        .fm-toast {
            background: var(--card-bg, #FDFBF3) !important;
            border: 1px solid var(--sep, rgba(22,36,64,0.12)) !important;
        }
        .fm-toast.ok    { border-left: 4px solid #2E7D32 !important; }
        .fm-toast.error { border-left: 4px solid #C62828 !important; }
        .fm-toast.alert { border-left: 4px solid #C9A84C !important; }
        /* Left icon column */
        .fm-toast-icon-col {
            width:46px; flex-shrink:0;
            display:flex; align-items:center; justify-content:center;
            font-size:17px;
            padding:14px 0;
        }
        .fm-toast.ok    .fm-toast-icon-col { color:#2E7D32; background:rgba(46,125,50,0.07); }
        .fm-toast.error .fm-toast-icon-col { color:#C62828; background:rgba(198,40,40,0.07); }
        .fm-toast.alert .fm-toast-icon-col { color:#C9A84C; background:rgba(201,168,76,0.09); }
        /* Right content column */
        .fm-toast-body-col {
            flex:1; min-width:0;
            padding:12px 12px 12px 10px;
            background:transparent;
            display:flex; flex-direction:column; justify-content:center; gap:2px;
        }
        .fm-toast-title {
            font-size:10.5px; font-weight:600; letter-spacing:0.6px;
            text-transform:uppercase; color:var(--secondary, rgba(22,36,64,0.42));
            line-height:1;
        }
        .fm-toast-msg {
            font-size:13px; font-weight:400; line-height:1.45;
            color:var(--label, #162440); word-break:break-word;
        }
        /* Only filenames/important words bold */
        .fm-toast-msg b { font-weight:600; color:var(--label, #162440); }
        /* Close button */
        .fm-toast-x {
            flex-shrink:0; width:34px;
            display:flex; align-items:center; justify-content:center;
            background:transparent;
            border:none; cursor:pointer;
            color:var(--secondary, rgba(22,36,64,0.35));
            font-size:11px; transition:color 0.15s, background 0.15s;
            padding:0;
        }
        .fm-toast-x:hover { color:var(--label, #162440); background:var(--sep, rgba(22,36,64,0.05)); }
        /* Progress bar */
        .fm-toast-prog {
            position:absolute; bottom:0; left:0; right:0; height:2px;
            transform-origin:left; animation:fmTProg 4.5s linear both;
        }
        .fm-toast.ok    .fm-toast-prog { background:rgba(46,125,50,0.28); }
        .fm-toast.error .fm-toast-prog { background:rgba(198,40,40,0.28); }
        .fm-toast.alert .fm-toast-prog { background:rgba(201,168,76,0.45); }
        </style>
        <script>
        function fmToast(msg, cls) {
            cls = cls || 'ok';
            var icons  = {ok:'fa-check-circle',error:'fa-times-circle',alert:'fa-exclamation-triangle'};
            var titles = {ok:'Success',error:'Error',alert:'Warning'};
            var el = document.createElement('div');
            el.className = 'fm-toast ' + cls;
            el.innerHTML =
                '<div class="fm-toast-icon-col"><i class="fa ' + (icons[cls]||'fa-info-circle') + '"></i></div>' +
                '<div class="fm-toast-body-col">' +
                    '<div class="fm-toast-title">' + (titles[cls]||'Notice') + '</div>' +
                    '<div class="fm-toast-msg">'  + msg + '</div>' +
                '</div>' +
                '<button class="fm-toast-x" onclick="fmDismissToast(this.closest(\'.fm-toast\'))" aria-label="Dismiss"><i class="fa fa-times"></i></button>' +
                '<div class="fm-toast-prog"></div>';
            var c = document.getElementById('fm-toast-container');
            if (!c) return;
            c.appendChild(el);
            el._fmTid = setTimeout(function(){ fmDismissToast(el); }, 4500);
        }
        function fmDismissToast(el) {
            if (!el || el._fmDismissed) return;
            el._fmDismissed = true;
            clearTimeout(el._fmTid);
            el.classList.add('fm-toast-out');
            setTimeout(function(){ el && el.parentNode && el.parentNode.removeChild(el); }, 320);
        }
        </script>
        <?php print_external('js-jquery'); ?>
        <?php print_external('js-bootstrap'); ?>
        <script>
        (function() {
            var _a = 'CCP Programmers';
            var _u = 'https://github.com/prasathmani/tinyfilemanager';
            var _v = '<?php echo VERSION; ?>';
            function renderLoginFooter() {
                var els = document.querySelectorAll('.fm-footer-credit-login');
                els.forEach(function(el) {
                    el.innerHTML = 'v' + _v + ' <span style="color:#EF4444;">\u2764</span> by <a href="' + _u + '" target="_blank" rel="noopener" style="color:var(--secondary);text-decoration:none;">' + _a + '</a>';
                });
            }
            renderLoginFooter();
        })();
        </script>
        <script>
        (function(){
            var loader = document.getElementById('fm-page-loader');
            if (!loader) return;
            function showLoader() {
                loader.classList.remove('fm-loader-hidden');
            }
            // Intercept all same-page anchor navigations
            document.addEventListener('click', function(e) {
                var a = e.target.closest('a[href]');
                if (!a) return;
                var href = a.getAttribute('href');
                // Skip: anchors, JS, modals, download, target=_blank, external
                if (!href || href.startsWith('#') || href.startsWith('javascript') ||
                    a.hasAttribute('data-bs-toggle') || a.hasAttribute('download') ||
                    a.target === '_blank' || a.getAttribute('onclick')) return;
                // Skip AJAX/upload triggers
                if (a.classList.contains('js-url-upload') || a.classList.contains('upload-tab-link')) return;
                showLoader();
            });
            // Form submissions (rename, mkdir, chmod, settings etc.)
            document.addEventListener('submit', function(e) {
                var f = e.target;
                // Skip AJAX forms
                if (f.id === 'loginForm' || f.getAttribute('data-ajax')) return;
                showLoader();
            });
            // Hide on back/forward
            window.addEventListener('pageshow', function() {
                loader.classList.add('fm-loader-hidden');
            });
        })();
        </script>
    </body>
    </html>
<?php
    }
    function fm_show_header()
    {
        if (ob_get_level()) { ob_end_clean(); }
        header("Content-Type: text/html; charset=utf-8");
        header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");
        header("Pragma: no-cache");
        global $sticky_navbar, $favicon_path;
        $isStickyNavBar = $sticky_navbar ? 'navbar-fixed' : 'navbar-normal';
?>
    <!DOCTYPE html>
    <html>
    <head>
        <script>
        // Apply saved theme before first paint to avoid a light/dark flash
        (function(){
            try {
                var t = localStorage.getItem('fm-theme');
                var dark = (t === 'dark' || (t === null && window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches));
                document.documentElement.setAttribute('data-theme', dark ? 'dark' : 'light');
                document.addEventListener('DOMContentLoaded', function() {
                    var m = document.getElementById('fm-theme-color-meta');
                    if (m) m.setAttribute('content', dark ? '#14171C' : '#FDFBF3');
                });
            } catch (e) {}
        })();
        </script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, shrink-to-fit=no, viewport-fit=cover">
        <meta name="theme-color" id="fm-theme-color-meta" content="#FDFBF3">
        <meta name="description" content="Web based File Manager in PHP, Manage your files efficiently and easily with Tiny File Manager">
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">
        <meta name="author" content="CCP Programmers">
        <meta name="robots" content="noindex, nofollow">
        <meta name="googlebot" content="noindex">
        <?php if ($favicon_path) {
            echo '<link rel="icon" href="' . fm_enc($favicon_path) . '" type="image/png">';
        } ?>
        <title><?php echo fm_enc(APP_TITLE) ?> | <?php echo (isset($_GET['view']) ? fm_enc(basename($_GET['view'])) : ((isset($_GET['edit'])) ? fm_enc(basename($_GET['edit'])) : "Tiny File Manager")); ?></title>
        <?php print_external('pre-jsdelivr'); ?>
        <?php print_external('pre-cloudflare'); ?>
        <?php print_external('css-bootstrap'); ?>
        <?php print_external('css-font-awesome'); ?>
        <?php if (FM_USE_HIGHLIGHTJS && isset($_GET['view'])): ?>
            <?php print_external('css-highlightjs'); ?>
        <?php endif; ?>
        <script type="text/javascript">
            window.csrf = '<?php echo $_SESSION['token']; ?>';
            window.fmZipEncryptionSupported = <?php echo (defined('ZipArchive::EM_AES_256') && method_exists('ZipArchive', 'setEncryptionName')) ? 'true' : 'false'; ?>;
        </script>
        <script>
        // ===== Theme toggle (persisted in localStorage, syncs icon + Settings switch) =====
        function fmGetTheme() {
            return document.documentElement.getAttribute('data-theme') === 'dark' ? 'dark' : 'light';
        }
        function fmApplyThemeIcon() {
            var dark = fmGetTheme() === 'dark';
            document.querySelectorAll('.fm-theme-icon').forEach(function (icon) {
                icon.className = 'fa fm-theme-icon ' + (dark ? 'fa-sun-o' : 'fa-moon-o');
            });
            var sw = document.getElementById('js-dark-theme');
            if (sw) { sw.checked = (fmGetTheme() === 'dark'); }
        }
        function fmThemeRipple(mode, originEl) {
            var existing = document.getElementById('fm-theme-ripple');
            if (existing) existing.remove();
            // Switch theme immediately — CSS var transitions animate all elements smoothly
            document.documentElement.setAttribute('data-theme', mode);
            try { localStorage.setItem('fm-theme', mode); } catch(e) {}
            (function(){ var m = document.getElementById('fm-theme-color-meta'); if (m) m.setAttribute('content', mode === 'dark' ? '#14171C' : '#FDFBF3'); })();
            if (typeof fmApplyThemeIcon === 'function') fmApplyThemeIcon();
            // Decorative clip-path ripple: content always visible
            var rect = originEl ? originEl.getBoundingClientRect() : {left: window.innerWidth/2, top: window.innerHeight/2, width:0, height:0};
            var cx = Math.round(rect.left + rect.width/2);
            var cy = Math.round(rect.top  + rect.height/2);
            var maxR = Math.ceil(Math.sqrt(Math.pow(Math.max(cx, window.innerWidth-cx),2) + Math.pow(Math.max(cy, window.innerHeight-cy),2))) + 10;
            var overlay = document.createElement('div');
            overlay.id = 'fm-theme-ripple';
            overlay.style.cssText = 'position:fixed;inset:0;z-index:999998;pointer-events:none;' +
                'background:' + (mode === 'dark' ? 'rgba(20,23,28,0.22)' : 'rgba(253,251,243,0.22)') + ';' +
                'clip-path:circle(0px at ' + cx + 'px ' + cy + 'px);' +
                'transition:clip-path 0.52s cubic-bezier(0.4,0,0.2,1),opacity 0.25s ease 0.36s;' +
                'will-change:clip-path,opacity;';
            document.body.appendChild(overlay);
            requestAnimationFrame(function() {
                requestAnimationFrame(function() {
                    overlay.style.clipPath = 'circle(' + maxR + 'px at ' + cx + 'px ' + cy + 'px)';
                    setTimeout(function() {
                        overlay.style.opacity = '0';
                        setTimeout(function() { if (overlay.parentNode) overlay.parentNode.removeChild(overlay); }, 260);
                    }, 370);
                });
            });
        }
        function fmSetTheme(mode, originEl) {
            mode = (mode === 'dark') ? 'dark' : 'light';
            fmThemeRipple(mode, originEl || window._fmThemeOriginEl || null);
        }
        function fmToggleTheme(e) {
            var origin = (e && e.currentTarget) || document.getElementById('fm-theme-toggle');
            window._fmThemeOriginEl = origin;
            fmSetTheme(fmGetTheme() === 'dark' ? 'light' : 'dark', origin);
        }
        document.addEventListener('DOMContentLoaded', fmApplyThemeIcon);
        </script>
        <style>
        /* ===== PAGE LOAD OVERLAY ===== */
        #fm-page-loader {
            position: fixed; inset: 0; z-index: 99998;
            background: var(--ios-bg, #FDFBF3);
            display: flex; align-items: center; justify-content: center;
            flex-direction: column; gap: 14px;
            transition: opacity 0.30s ease, visibility 0.30s ease, background 0.25s ease;
        }
        body:not(.fm-login-page) #fm-page-loader {
            top: calc(var(--ios-nav-h, 54px) + var(--fm-safe-top, 0px));
        }
        #fm-page-loader.fm-loader-hidden { opacity: 0; visibility: hidden; pointer-events: none; }
        .fm-loader-ring {
            width: 36px; height: 36px;
            border: 3px solid var(--ios-sep, rgba(22,36,64,0.10));
            border-top-color: var(--ios-gold, #C9A84C);
            border-radius: 50%;
            animation: fmSpin 0.65s linear infinite;
        }
        @keyframes fmSpin { to { transform: rotate(360deg); } }
        </style>
        <style>
            :root {
                /* === Cream / Navy / Gold Theme (Light) === */
                --ios-blue: #162440;
                --ios-blue-light: #233554;
                --ios-gold: #C9A84C;
                --ios-gold-light: #D4B96A;
                --ios-green: #2E7D32;
                --ios-red: #C62828;
                --ios-orange: #E65100;
                --ios-yellow: #F9A825;
                --ios-gray: #5C6670;
                --ios-gray2: #8A9299;
                --ios-gray3: #C4C9CE;
                --ios-gray4: #DEE1E4;
                --ios-gray5: #EFF0F1;
                --ios-gray6: #F7F5EF;
                --ios-bg: #FDFBF3;
                --ios-bg2: #FFFFFF;
                --ios-card: #FFFFFF;
                --ios-label: #162440;
                --ios-label2: #233554;
                --ios-secondary: rgba(22,36,64,0.58);
                --ios-tertiary: rgba(22,36,64,0.38);
                --ios-sep: rgba(22,36,64,0.09);
                --ios-fill: rgba(22,36,64,0.04);
                --ios-fill2: rgba(22,36,64,0.07);
                --ios-radius: 14px;
                --ios-radius-sm: 10px;
                --ios-radius-xs: 8px;
                --ios-font: 'Inter', -apple-system, 'Helvetica Neue', sans-serif;
                --ios-nav-h: 54px;
                /* Cap safe-area top inset — some Android WebViews mis-report a
                   very large env(safe-area-inset-top), causing a big blank gap
                   above the navbar on mobile. Clamp keeps real notch support
                   while killing runaway values. */
                --fm-safe-top: clamp(0px, env(safe-area-inset-top, 0px), 24px);
            }
            /* === Dark Theme — toggled via <html data-theme="dark"> === */
            html[data-theme="dark"] {
                --ios-blue: #E8ECF5;
                --ios-blue-light: #C7CEDD;
                --ios-gold: #E4C169;
                --ios-gold-light: #EED28C;
                --ios-green: #4CAF50;
                --ios-red: #EF5350;
                --ios-orange: #FFA726;
                --ios-yellow: #FDD835;
                --ios-gray: #9AA4AE;
                --ios-gray2: #7C868F;
                --ios-gray3: #5B646C;
                --ios-gray4: #3A4148;
                --ios-gray5: #2B3138;
                --ios-gray6: #24292F;
                --ios-bg: #14171C;
                --ios-bg2: #1B1F26;
                --ios-card: #1E222A;
                --ios-label: #EEF1F6;
                --ios-label2: #D7DCE6;
                --ios-secondary: rgba(238,241,246,0.62);
                --ios-tertiary: rgba(238,241,246,0.42);
                --ios-sep: rgba(238,241,246,0.10);
                --ios-fill: rgba(238,241,246,0.06);
                --ios-fill2: rgba(238,241,246,0.09);
                color-scheme: dark;
            }
            html[data-theme="dark"] .main-nav {
                background: rgba(20,23,28,0.90) !important;
                border-bottom: 0.5px solid rgba(238,241,246,0.10) !important;
            }
            html[data-theme="dark"] .fm-brand-icon {
                background: #C9A84C !important;
            }
            html[data-theme="dark"] img,
            html[data-theme="dark"] .fm-pdf-page-wrap canvas.fm-pdf-render-canvas {
                filter: none;
            }
            /* Smooth theme switch across the whole app */
            *, *::before, *::after {
                transition: background-color 0.28s ease, color 0.28s ease, border-color 0.28s ease,
                            box-shadow 0.28s ease, fill 0.28s ease !important;
            }
            /* But don't slow down interactive transitions — restore them after theme settles */
            a, button, .btn, .nav-link, .nav-icon-btn, .bulk-btn, .fm-upload-card,
            .fm-prog-bar, .fm-thumb-wrap img {
                transition: background-color 0.28s ease, color 0.28s ease, border-color 0.28s ease,
                            box-shadow 0.28s ease, opacity 0.2s ease, transform 0.15s ease !important;
            }
            /* ===== Dark theme: Bootstrap component overrides ===== */
            html[data-theme="dark"] .card,
            html[data-theme="dark"] .modal-content,
            html[data-theme="dark"] .dropdown-menu,
            html[data-theme="dark"] .list-group-item {
                background-color: var(--ios-card) !important;
                color: var(--ios-label) !important;
                border-color: var(--ios-sep) !important;
            }
            html[data-theme="dark"] .card-header,
            html[data-theme="dark"] .modal-header,
            html[data-theme="dark"] .modal-footer {
                background-color: var(--ios-bg2) !important;
                border-color: var(--ios-sep) !important;
                color: var(--ios-label) !important;
            }
            html[data-theme="dark"] .form-control,
            html[data-theme="dark"] .form-select,
            html[data-theme="dark"] input.form-control,
            html[data-theme="dark"] textarea.form-control {
                background-color: var(--ios-bg2) !important;
                color: var(--ios-label) !important;
                border-color: var(--ios-gray4) !important;
            }
            html[data-theme="dark"] .form-control::placeholder { color: var(--ios-tertiary) !important; }
            html[data-theme="dark"] .form-control:focus,
            html[data-theme="dark"] .form-select:focus {
                background-color: var(--ios-bg2) !important;
                color: var(--ios-label) !important;
                border-color: var(--ios-gold) !important;
                box-shadow: 0 0 0 3px rgba(228,193,105,0.18) !important;
            }
            html[data-theme="dark"] .table { color: var(--ios-label) !important; }
            html[data-theme="dark"] .table > :not(caption) > * > * { background-color: transparent !important; color: var(--ios-label) !important; border-color: var(--ios-sep) !important; }
            html[data-theme="dark"] .btn-close { filter: invert(1) grayscale(100%) brightness(1.4); }
            html[data-theme="dark"] hr { border-color: var(--ios-sep) !important; }
            html[data-theme="dark"] .text-body-secondary,
            html[data-theme="dark"] .text-muted { color: var(--ios-secondary) !important; }
            html[data-theme="dark"] .btn-outline-primary {
                color: var(--ios-gold) !important;
                border-color: var(--ios-gold) !important;
                background: transparent !important;
            }
            html[data-theme="dark"] .btn-outline-primary:hover {
                background: var(--ios-gold) !important;
                color: #14171C !important;
            }
            html[data-theme="dark"] code {
                background: var(--ios-fill) !important;
                color: var(--ios-gold-light) !important;
                padding: 1px 5px;
                border-radius: 4px;
            }
            html[data-theme="dark"] .fm-input-icon-btn,
            html[data-theme="dark"] .fm-eye-btn { color: var(--ios-tertiary) !important; }
            html[data-theme="dark"] .fa.fa-home { color: var(--ios-gold) !important; }
            * { -webkit-tap-highlight-color: transparent; box-sizing: border-box; }
            /* === Scrollbars — Navy/Gold === */
            ::-webkit-scrollbar { width: 7px; height: 7px; }
            ::-webkit-scrollbar-track { background: transparent; border-radius: 999px; }
            ::-webkit-scrollbar-thumb { background: var(--ios-tertiary); border-radius: 999px; border: 2px solid transparent; background-clip: padding-box; }
            ::-webkit-scrollbar-thumb:hover { background: var(--ios-gold); border-radius: 999px; border: 2px solid transparent; background-clip: padding-box; }
            ::-webkit-scrollbar-corner { background: transparent; border-radius: 999px; }
            * { scrollbar-width: thin; scrollbar-color: var(--ios-tertiary) transparent; }
            /* Textarea specific */
            textarea::-webkit-scrollbar { width: 8px; height: 8px; }
            textarea::-webkit-scrollbar-track { background: var(--ios-fill); border-radius: 999px; margin: 6px 0; }
            textarea::-webkit-scrollbar-thumb { background: var(--ios-tertiary); border-radius: 999px; border: 2px solid transparent; background-clip: padding-box; }
            textarea::-webkit-scrollbar-thumb:hover { background: var(--ios-gold); border-radius: 999px; background-clip: padding-box; border: 2px solid transparent; }
            /* Ace editor specific */
            #editor::-webkit-scrollbar { width: 8px; height: 8px; }
            #editor::-webkit-scrollbar-track { background: transparent; border-radius: 999px; }
            #editor::-webkit-scrollbar-thumb { background: var(--ios-tertiary); border-radius: 999px; border: 2px solid transparent; background-clip: padding-box; }
            #editor::-webkit-scrollbar-thumb:hover { background: var(--ios-gold); border-radius: 999px; background-clip: padding-box; border: 2px solid transparent; }
            /* Modal body scrollbars */
            .modal-body::-webkit-scrollbar { width: 6px; height: 6px; }
            .modal-body::-webkit-scrollbar-track { background: transparent; border-radius: 999px; }
            .modal-body::-webkit-scrollbar-thumb { background: var(--ios-tertiary); border-radius: 999px; border: 2px solid transparent; background-clip: padding-box; }
            .modal-body::-webkit-scrollbar-thumb:hover { background: var(--ios-gold); border-radius: 999px; background-clip: padding-box; border: 2px solid transparent; }
            html {
                -moz-osx-font-smoothing: grayscale;
                -webkit-font-smoothing: antialiased;
                text-rendering: optimizeLegibility;
                height: 100%;
                scroll-behavior: smooth;
                overscroll-behavior-y: contain;
            }
            *, *::before, *::after { box-sizing: border-box; font-family: inherit; }
            .fa, .fas, .far, .fal, .fab, [class^="fa-"], [class*=" fa-"] { font-family: FontAwesome !important; }
            /* Bootstrap sets its own font-family on these components instead of
               inheriting from body — plain `inherit` above misses them, which is
               why Settings/Security/App Config/Users text kept the system font. */
            html, body, input, button, select, textarea:not(#normal-editor), optgroup,
            .form-control, .btn, .card, .card-header, .card-body, .card-footer,
            .modal, .modal-content, .modal-header, .modal-body, .modal-footer,
            .dropdown-menu, .dropdown-item, label, .col-form-label, .form-check-label,
            .form-label, .table, th, td, .badge, .alert, .list-group-item, .nav-link,
            .breadcrumb, .breadcrumb-item, .toast, .tooltip, .popover {
                font-family: var(--ios-font) !important;
            }
            body {
                font-family: var(--ios-font);
                font-size: 15px;
                color: var(--ios-label);
                background: var(--ios-bg);
                margin: 0;
                overscroll-behavior-y: contain;
            }
            body { padding-top: calc(var(--ios-nav-h) + var(--fm-safe-top, 0px)) !important; }
            body.navbar-fixed { margin-top: 0; }
            a, a:hover, a:visited, a:focus { text-decoration: none !important; }
            /* ===== iOS NAVBAR ===== */
            .main-nav {
                background: color-mix(in srgb, var(--ios-bg) 95%, transparent) !important;
                backdrop-filter: saturate(160%) blur(18px);
                -webkit-backdrop-filter: saturate(160%) blur(18px);
                border-bottom: 0.5px solid var(--ios-sep) !important;
                padding: 0 !important;
                padding-top: var(--fm-safe-top, 0px) !important;
                height: calc(var(--ios-nav-h) + var(--fm-safe-top, 0px));
                box-sizing: border-box;
                box-shadow: none !important;
                display: flex;
                align-items: center;
                position: fixed !important;
                top: 0 !important;
                left: 0 !important;
                right: 0 !important;
                z-index: 1050;
                transition: background 0.25s ease, border-color 0.25s ease;
            }
            .navbar-brand {
                font-weight: 700;
                font-size: 17px;
                letter-spacing: -0.3px;
                color: var(--ios-label) !important;
            }
            .nav-link {
                font-size: 15px;
                font-weight: 400;
                color: #C9A84C !important;
                padding: 6px 8px !important;
                border-radius: var(--ios-radius-xs);
                transition: background 0.15s;
            }
            .nav-link:hover { background: var(--ios-fill); }
            .nav-item.avatar .dropdown-menu {
                border: none;
                border-radius: var(--ios-radius);
                box-shadow: 0 8px 32px rgba(0,0,0,0.18);
                overflow: hidden;
                min-width: 180px;
                padding: 6px;
            }
            .dropdown-item {
                border-radius: var(--ios-radius-xs);
                font-size: 15px;
                padding: 9px 12px;
                color: var(--ios-label);
            }
            .dropdown-item:hover { background: var(--ios-fill); }
            /* Search bar */
            #search-addon {
                font-size: 13px;
                border-radius: 8px 0 0 8px;
                border-right-width: 0;
                background: var(--ios-fill);
                border: none;
                height: 32px;
            }
            .brl-0 {
                background: var(--ios-fill);
                border-left: 0;
                border-top-left-radius: 0;
                border-bottom-left-radius: 0;
                border: none;
            }
            .brr-0 {
                border-top-right-radius: 0;
                border-bottom-right-radius: 0;
            }
            /* Breadcrumb */
            .bread-crumb {
                color: var(--ios-gray3);
                font-style: normal;
                margin: 0 2px;
            }
            .fa.fa-home { font-size: 1.2em; color: #162440; }
            /* ===== iOS FILE TABLE ===== */
            #main-table {
                background: var(--ios-card);
                border-radius: var(--ios-radius);
                overflow: hidden;
                box-shadow: 0 1px 3px rgba(0,0,0,0.06);
                border: 0.5px solid var(--ios-sep);
                margin: 0;
            }
            #main-table thead th {
                background: var(--ios-gray6);
                font-size: 12px;
                font-weight: 600;
                letter-spacing: 0.5px;
                text-transform: uppercase;
                color: var(--ios-secondary);
                padding: 8px 12px;
                border: none !important;
            }
            .table td, .table th { vertical-align: middle !important; border-bottom: 0.5px solid var(--ios-sep) !important; border-right: 0.5px solid var(--ios-sep) !important; }
            .table td:last-child, .table th:last-child { border-right: none !important; }
            .table-bordered td, .table-bordered th { border: none !important; border-bottom: 0.5px solid var(--ios-sep) !important; border-right: 0.5px solid var(--ios-sep) !important; }
            #main-table td, #main-table th { border-bottom: 0.5px solid var(--ios-sep) !important; border-right: 0.5px solid var(--ios-sep) !important; }
            #main-table td:last-child, #main-table th:last-child { border-right: none !important; }
            #main-table tbody tr {
                transition: background 0.1s;
            }
            #main-table tbody tr:hover > td { background: rgba(201,168,76,0.07) !important; }
            #main-table .filename a {
                color: var(--ios-label);
                font-weight: 500;
                font-size: 15px;
            }
            .filename > a > i { margin-right: 6px; }
            .table-sm td, .table-sm th { padding: 10px 12px; }
            #main-table tbody td { padding: 10px 12px !important; vertical-align: middle !important; }
            .filename, td, th { white-space: nowrap; }
            /* ===== FIX: Table horizontal scroll container ===== */
            .table-responsive-wrapper {
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                border-radius: var(--ios-radius);
                border: 0.5px solid var(--ios-sep);
                box-shadow: 0 1px 3px rgba(0,0,0,0.06);
            }
            .table-responsive-wrapper #main-table {
                border-radius: 0;
                border: none;
                box-shadow: none;
                min-width: 600px;
                margin-bottom: 0;
            }
            /* iOS checkboxes */
            .form-check-input {
                width: 18px;
                height: 18px;
                border-radius: 50%;
                border: 1.5px solid var(--ios-gray3);
                cursor: pointer;
            }
            .form-check-input:checked {
                background-color: var(--ios-gold);
                border-color: var(--ios-gold);
            }
            .table .custom-checkbox-td .custom-control.custom-checkbox,
            .table .custom-checkbox-header .custom-control.custom-checkbox {
                min-width: 18px;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            /* ===== iOS BUTTONS ===== */
            .btn {
                font-family: var(--ios-font);
                border-radius: var(--ios-radius-xs);
                font-size: 14px;
                font-weight: 500;
                transition: opacity 0.15s, transform 0.1s;
            }
            .btn:active { transform: scale(0.97); }
            .btn-danger {
                background: var(--ios-red) !important;
                border-color: var(--ios-red) !important;
            }
            /* Inline action buttons */
            .inline-actions { display: flex; gap: 3px; align-items: center; justify-content: flex-start; }
            /* ===== iOS BADGES ===== */
            #main-table span.badge {
                font-size: 10px;
                font-weight: 600;
                border-radius: 4px;
                padding: 2px 5px;
                border-bottom: none;
            }
            /* ===== iOS MODALS ===== */
            .modal-content {
                border: none;
                border-radius: 14px;
                box-shadow: 0 20px 60px rgba(0,0,0,0.2);
                overflow: hidden;
            }
            .modal-header {
                border-bottom: 0.5px solid var(--ios-sep);
                padding: 16px 20px;
            }
            .modal-footer {
                border-top: 0.5px solid var(--ios-sep);
                padding: 12px 16px;
            }
            .modal-title { font-weight: 600; font-size: 17px; letter-spacing: -0.3px; }
            /* iOS-style form controls */
            .form-control {
                border-radius: var(--ios-radius-xs);
                border: 1px solid var(--ios-gray4);
                font-family: var(--ios-font);
                font-size: 15px;
                padding: 10px 12px;
                background: var(--ios-bg2);
                color: var(--ios-label);
                transition: border-color 0.15s, box-shadow 0.15s;
            }
            .form-control:focus {
                border-color: #C9A84C;
                box-shadow: 0 0 0 3px rgba(201,168,76,0.14);
                outline: none;
            }
            .form-select {
                border-radius: var(--ios-radius-xs);
                border: 1px solid var(--ios-gray4);
                font-family: var(--ios-font);
                font-size: 15px;
            }
            /* iOS toggles */
            .form-switch .form-check-input {
                width: 44px;
                height: 24px;
                border-radius: 12px;
                border: none;
                background-color: var(--ios-gray4);
                background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e");
                cursor: pointer;
                transition: background-color 0.2s;
            }
            .form-switch .form-check-input:checked {
                background-color: #C9A84C;
                border: none;
            }
            html[data-theme="dark"] .form-switch .form-check-input {
                background-color: var(--ios-gray4);
            }
            html[data-theme="dark"] .form-switch .form-check-input:checked {
                background-color: #C9A84C;
            }
            /* Messages */
            .message {
                padding: 10px 14px;
                border-radius: 8px;
                font-size: 14px;
                border: none;
                background: var(--ios-fill);
            }
            .message.ok { background: rgba(52,199,89,0.12); color: #1B8A3A; border: none; }
            .message.error { background: rgba(255,59,48,0.10); color: #D70015; border: none; }
            .message.alert { background: rgba(255,149,0,0.12); color: #C06000; border: none; }
            /* File icons */
            i.fa.fa-folder-o { color: #C9A84C; }
            i.fa.fa-picture-o { color: #C9A84C; }
            i.fa.fa-file-archive-o { color: #FF6B6B; }
            i.fa.fa-css3 { color: #FF6B9D; }
            i.fa.fa-file-code-o { color: #C9A84C; }
            i.fa.fa-code { color: #FF453A; }
            i.fa.fa-file-text-o { color: #C9A84C; }
            i.fa.fa-html5 { color: #FF6B6B; }
            i.fa.fa-file-excel-o { color: #C9A84C; }
            i.fa.fa-file-powerpoint-o { color: #FF9500; }
            i.go-back { font-size: 1.1em; color: #C9A84C; }
            td .go-back { color: #C9A84C !important; }
            /* Search */
            ul#search-wrapper {
                padding-left: 0;
                border: 0.5px solid var(--ios-sep);
                border-radius: var(--ios-radius-sm);
                overflow: hidden;
            }
            ul#search-wrapper li {
                list-style: none;
                padding: 10px 14px;
                border-bottom: 0.5px solid var(--ios-sep);
                font-size: 14px;
            }
            ul#search-wrapper li:nth-child(odd) { background: var(--ios-gray6); }
            /* Preview */
            .c-preview-img { max-width: 300px; }
            .preview-img { max-width: 100%; border-radius: var(--ios-radius); }
            .preview-img-container { text-align: center; }
            pre.with-hljs { padding: 0 !important; overflow-x: auto; -webkit-overflow-scrolling: touch; border-radius: var(--ios-radius); }
            pre.with-hljs code { margin: 0; border: 0; overflow-x: auto; border-radius: 0; display: block; padding: 16px 20px; }
            code.maxheight, pre.maxheight { max-height: 512px; }
            /* Snackbar */
            /* Toast container — pills flow left-to-right, wrap to next row */
            #snackbar {
                display: flex;
                flex-wrap: wrap;
                gap: 8px;
                justify-content: center;
                align-items: flex-end;
                position: fixed;
                z-index: 9999;
                left: 50%;
                bottom: 40px;
                transform: translateX(-50%);
                width: calc(100vw - 32px);
                max-width: 700px;
                pointer-events: none;
            }
            .fm-toast-pill {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                background: rgba(30,30,30,0.93);
                backdrop-filter: blur(16px);
                -webkit-backdrop-filter: blur(16px);
                color: #fff;
                border-radius: 20px;
                padding: 10px 18px;
                font-size: 13px;
                font-weight: 500;
                box-shadow: 0 4px 20px rgba(0,0,0,0.28);
                white-space: nowrap;
                max-width: 100%;
                overflow: hidden;
                text-overflow: ellipsis;
                pointer-events: auto;
                animation: fm-toast-in 0.28s cubic-bezier(0.22,1,0.36,1) both;
            }
            .fm-toast-pill.fm-toast-out {
                animation: fm-toast-out 0.5s ease forwards;
            }
            @keyframes fm-toast-in {
                from { opacity: 0; transform: translateY(16px) scale(0.96); filter: blur(2px); }
                to   { opacity: 1; transform: translateY(0) scale(1); filter: blur(0); }
            }
            @keyframes fm-toast-out {
                0%   { opacity: 1; transform: translateY(0) scale(1); filter: blur(0); }
                100% { opacity: 0; transform: translateY(4px) scale(0.97); filter: blur(3px); }
            }
            /* App title */
            .app-v-title {
                font-size: 22px;
                font-weight: 700;
                letter-spacing: -0.5px;
            }
            /* Footer actions */
            .footer-action li { margin-bottom: 8px; }
            hr.custom-hr { border-top: 0.5px dashed var(--ios-gray3); }
            /* Card styling */
            .card {
                border: 0.5px solid var(--ios-sep);
                border-radius: var(--ios-radius);
                box-shadow: 0 1px 4px rgba(0,0,0,0.05);
            }
            .card-header {
                background: var(--ios-gray6);
                border-bottom: 0.5px solid var(--ios-sep);
                font-weight: 600;
                font-size: 15px;
                padding: 12px 16px;
            }
            /* List group */
            .list-group-item {
                border: none;
                border-bottom: 0.5px solid var(--ios-sep);
                padding: 11px 16px;
                font-size: 14px;
            }
            .list-group-item:last-child { border-bottom: none; }
            /* DataTable sort icons */
            .dataTables_filter { display: none; }
            table.dataTable thead .sorting,
            table.dataTable thead .sorting_asc,
            table.dataTable thead .sorting_desc {
                cursor: pointer;
                padding-right: 24px;
            }
            /* path bar */
            .path { margin-bottom: 12px; }
            /* ace editor toolbar */
            .js-ace-toolbar .btn, #js-ace-toolbar .btn { border-radius: var(--ios-radius-xs); font-size: 13px; }
            /* Loading spinner — pulse-ring */
            .lds-facebook {
                display: none;
                width: 36px;
                height: 36px;
                position: relative;
                flex-shrink: 0;
            }
            .lds-facebook.show-me,
            .lds-facebook[style*="display:block"],
            .lds-facebook[style*="display: block"] { display: inline-block !important; }
            .lds-facebook::before,
            .lds-facebook::after {
                content: '';
                position: absolute;
                inset: 0;
                border-radius: 50%;
                border: 3px solid transparent;
                border-top-color: #C9A84C;
            }
            .lds-facebook::before {
                animation: spin-ring 0.75s linear infinite;
            }
            .lds-facebook::after {
                border-top-color: rgba(201,168,76,0.22);
                animation: spin-ring 0.75s linear infinite reverse;
                inset: 5px;
            }
            .lds-facebook div { display: none !important; }
            @keyframes spin-ring {
                to { transform: rotate(360deg); }
            }
            .table-hover>tbody>tr:hover>td:first-child { border-left: none !important; }
            /* FIX: Dropdown background - must be solid, not transparent */
            .dropdown-menu {
                background: #ffffff !important;
                border: 1px solid rgba(0,0,0,0.08) !important;
                box-shadow: 0 8px 32px rgba(0,0,0,0.12) !important;
            }
            .dropdown-item:hover { background: var(--ios-fill) !important; color: var(--ios-label) !important; }
            /* FIX: tfoot file/folder count - correct background and no overlap */
            tfoot td {
                background: var(--ios-gray6) !important;
                font-family: var(--ios-font) !important;
                font-size: 12px !important;
                color: var(--ios-secondary) !important;
                font-weight: 500 !important;
                padding: 8px 12px !important;
                border-top: 0.5px solid var(--ios-sep) !important;
                white-space: nowrap;
            }
            /* FIX: Folder/file count badge positioning */
            tfoot .badge {
                font-family: var(--ios-font) !important;
                font-size: 11px !important;
                font-weight: 600 !important;
                background: rgba(201,168,76,0.10) !important;
                color: #C9A84C !important;
                border-radius: 6px !important;
                padding: 3px 7px !important;
                display: inline-flex !important;
                align-items: center !important;
                gap: 4px !important;
                vertical-align: middle !important;
            }
            .hidden { display: none; }
            .right { text-align: right; }
            .center, .close, .login-form, .preview-img-container { text-align: center; }
            .float-right { float: right; }
            .border-radius-0 { border-radius: 0; }
            .break-word { word-break: break-all; }
            .fs-7 { font-size: 14px; }
            .table-hover>tbody>tr:hover>td:first-child { border-left: none !important; }
            #main-table tr.even { background-color: rgba(0,0,0,0.01); }
            /* ===== iOS 18 EXTRA POLISH ===== */
            .gap-2 { gap: 0.5rem !important; }
            .d-flex { display: flex !important; }
            .flex-wrap { flex-wrap: wrap !important; }
            .align-items-center { align-items: center !important; }
            /* Breadcrumb iOS style */
            .col-xs-6.col-sm-5 {
                display: flex;
                align-items: center;
                flex-wrap: wrap;
                gap: 2px;
                font-size: 14px;
                font-weight: 500;
                color: #C9A84C;
            }
            .col-xs-6.col-sm-5 a { color: #C9A84C; font-weight: 500; }
            /* iOS-style view info panel */
            .list-group { border-radius: var(--ios-radius-sm); overflow: hidden; }
            /* Settings page toggle */
            .form-switch { padding-left: 3.5rem; }
            /* Rename/Delete modal iOS style */
            .modal-alert .modal-dialog { max-width: 320px; margin: 0 auto; }
            /* iOS input group search */
            .input-group-sm > .form-control { height: 32px; }
            .input-group-text { 
                background: var(--ios-fill); 
                border: none; 
                color: var(--ios-secondary);
                border-radius: 0;
            }
            /* Table sort arrows */
            table.dataTable thead .sorting,
            table.dataTable thead .sorting_asc,
            table.dataTable thead .sorting_desc { cursor: pointer; }
            /* Nav toggle button */
            .navbar-toggler {
                border: none;
                padding: 4px 8px;
                border-radius: var(--ios-radius-xs);
                background: var(--ios-fill);
            }
            .navbar-toggler:focus { box-shadow: none; }
            /* iOS-style the move/copy destination input */
            #js-destination { border-radius: var(--ios-radius-xs); }
            /* view page badge/button group */
            .btn-group.btn-group-sm.flex-wrap { gap: 6px; flex-wrap: wrap; display: flex; }
            .btn-group.btn-group-sm.flex-wrap > * { border-radius: var(--ios-radius-xs) !important; }
            /* Row spacing */
            .row.mt-3 { margin-top: 1rem !important; }
            /* Folder empty state */
            .text-center.text-muted.p-4 { 
                padding: 48px !important;
                font-size: 15px;
                color: var(--ios-secondary) !important;
            }
            /* iOS-style the file count footer in table */
            tfoot td { 
                background: var(--ios-gray6) !important; 
                font-size: 12px;
                color: var(--ios-secondary);
                font-weight: 500;
                padding: 8px 12px !important;
                border-top: 0.5px solid var(--ios-sep) !important;
            }
            /* Per-row action icons  */
            td .inline-actions { opacity: 0.7; transition: opacity 0.15s; }
            tr:hover td .inline-actions { opacity: 1; }
            /* iOS nav items spacing */
            .navbar-nav { gap: 2px; }
            /* search input placeholder */
            #search-addon::placeholder { color: var(--ios-secondary); }
            /* iOS modal backdrop blur */
            .modal-backdrop { backdrop-filter: blur(4px); background: rgba(0,0,0,0.4); }
            /* iOS file row hover highlight */
            #main-table tbody tr { cursor: default; transition: background 0.1s; }
            #main-table tbody tr td { transition: background 0.1s; }
            /* iOS-style chip/badge count in tfoot */
            .badge.text-bg-light { 
                background: var(--ios-fill) !important; 
                color: var(--ios-label2) !important;
                border-radius: 6px;
                font-size: 11px;
                padding: 3px 7px;
                font-weight: 600;
            }
            /* nav search container */
            .input-group.input-group-sm { border-radius: 8px; overflow: hidden; }
            .input-group.input-group-sm .form-control {
                background: var(--ios-fill) !important;
                border: none !important;
                border-radius: 8px 0 0 8px;
                font-size: 13px;
                height: 32px;
                color: var(--ios-label);
            }
            .input-group.input-group-sm .input-group-text,
            .input-group.input-group-sm .dropdown-toggle {
                background: var(--ios-fill) !important;
                border: none !important;
                height: 32px;
                color: var(--ios-secondary);
            }
            /* Move/copy target path field */
            #js-destination { 
                border-radius: var(--ios-radius-xs);
                border: 1px solid var(--ios-gray4);
                font-size: 14px;
            }
            /* Bottom version link */
            .float-right.text-muted { font-size: 12px; color: var(--ios-secondary) !important; }
            /* Upload page */
            .tab-content { padding-top: 16px; }
            .nav-tabs .nav-link { 
                border-radius: var(--ios-radius-xs) var(--ios-radius-xs) 0 0;
                font-size: 14px;
                color: var(--ios-secondary);
                border: none !important;
                transition: color 0.15s, background 0.15s;
            }
            .nav-tabs .nav-link.active { 
                color: #C9A84C !important;
                background: transparent !important;
                border-bottom: 2px solid #C9A84C !important;
            }
            .nav-tabs .nav-link:hover:not(.active) {
                color: #C9A84C;
                background: rgba(201,168,76,0.07);
            }
            /* Custom file upload drop zone */
            #fm-drop-zone {
                min-height: 160px;
                max-height: 420px;
                overflow-y: auto;
                -webkit-overflow-scrolling: touch;
                border: 2px dashed rgba(22,36,64,0.35);
                border-radius: 14px;
                background: rgba(22,36,64,0.03);
                transition: border-color 0.2s, background 0.2s;
            }
            #fm-drop-zone:hover, #fm-drop-zone.fm-drag-over {
                border-color: #C9A84C;
                background: rgba(201,168,76,0.08);
            }
            /* ===== BULK ACTION BAR ===== */
            .bulk-action-bar {
                display: flex;
                flex-wrap: nowrap;
                gap: 5px;
                align-items: center;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                scrollbar-width: none;
                -ms-overflow-style: none;
                padding: 4px 0;
            }
            .bulk-action-bar::-webkit-scrollbar { display: none; }
            .bulk-btn {
                display: inline-flex !important;
                align-items: center !important;
                justify-content: center !important;
                gap: 4px !important;
                height: 32px !important;
                padding: 0 11px !important;
                font-size: 12.5px !important;
                font-weight: 600 !important;
                font-family: 'Inter', sans-serif !important;
                border-radius: 8px !important;
                border: none !important;
                cursor: pointer !important;
                white-space: nowrap !important;
                text-decoration: none !important;
                transition: background 0.15s, transform 0.1s, opacity 0.15s !important;
                flex-shrink: 0 !important;
                user-select: none;
            }
            .bulk-btn:active { transform: scale(0.97) !important; }
            .bulk-btn-purple {
                background: #162440 !important;
                color: #fff !important;
                border: 1px solid #C9A84C !important;
                box-shadow: 0 2px 8px rgba(201,168,76,0.20) !important;
            }
            .bulk-btn-purple:hover { background: #162440 !important; color: #fff !important; }
            .bulk-btn-outline {
                background: rgba(201,168,76,0.08) !important;
                color: #C9A84C !important;
                border: 1px solid rgba(201,168,76,0.20) !important;
            }
            .bulk-btn-outline:hover { background: #162440 !important; color: #fff !important; border-color: #C9A84C !important; }
            .bulk-btn-red {
                background: rgba(239,68,68,0.07) !important;
                color: #DC2626 !important;
                border: 1px solid rgba(239,68,68,0.22) !important;
            }
            .bulk-btn-red:hover { background: #EF4444 !important; color: #fff !important; border-color: #EF4444 !important; }
            /* Disabled state */
            .bulk-requires-selection.bulk-disabled {
                opacity: 0.35 !important;
                pointer-events: none !important;
                cursor: not-allowed !important;
            }
            /* Selection count badge — matches tfoot badge style */
            .bulk-selection-count {
                font-size: 11px;
                font-weight: 600;
                color: #C9A84C;
                background: rgba(201,168,76,0.12);
                border-radius: 6px;
                padding: 3px 7px;
                display: none;
                white-space: nowrap;
                vertical-align: middle;
            }
            .bulk-selection-count.visible { display: inline; }
            /* bulk-btn responsive: handled by unified responsive system */
            /* Breadcrumb scroll container — hide its own scrollbar only */
            /* Breadcrumb scroll container */
            .bc-scroll-wrap::-webkit-scrollbar { width: 0; height: 0; display: none; }
            .bc-scroll-wrap { scrollbar-width: none; -ms-overflow-style: none; }
            /* searchModal fix: handled by unified responsive system */
            .btn-act-purple {
                font-family: 'Inter', sans-serif !important;
                background: #162440 !important;
                color: #fff !important;
                border: none !important;
                border-radius: 8px !important;
                font-size: 12px !important;
                font-weight: 600 !important;
                padding: 6px 12px !important;
                display: inline-flex !important;
                align-items: center !important;
                gap: 5px !important;
                transition: background 0.15s, transform 0.1s !important;
                box-shadow: 0 2px 8px rgba(201,168,76,0.22) !important;
                white-space: nowrap !important;
            }
            .btn-act-purple:hover { background: #162440 !important; color: #fff !important; }
            .btn-act-purple:active { transform: scale(0.97) !important; }
            .btn-act-purple-outline {
                font-family: 'Inter', sans-serif !important;
                background: rgba(201,168,76,0.08) !important;
                color: #C9A84C !important;
                border: 1px solid rgba(201,168,76,0.20) !important;
                border-radius: 8px !important;
                font-size: 12px !important;
                font-weight: 600 !important;
                padding: 6px 12px !important;
                display: inline-flex !important;
                align-items: center !important;
                gap: 5px !important;
                transition: background 0.15s, color 0.15s !important;
                white-space: nowrap !important;
            }
            .btn-act-purple-outline:hover { background: #162440 !important; color: #fff !important; border-color: #C9A84C !important; }
            .btn-act-red {
                font-family: 'Inter', sans-serif !important;
                background: rgba(239,68,68,0.07) !important;
                color: #DC2626 !important;
                border: 1px solid rgba(239,68,68,0.22) !important;
                border-radius: 8px !important;
                font-size: 12px !important;
                font-weight: 600 !important;
                padding: 6px 12px !important;
                display: inline-flex !important;
                align-items: center !important;
                gap: 5px !important;
                transition: background 0.15s !important;
                white-space: nowrap !important;
            }
            .btn-act-red:hover { background: #EF4444 !important; color: #fff !important; border-color: #EF4444 !important; }
            td.inline-actions {
                white-space: nowrap;
                padding: 10px 12px !important;
                vertical-align: middle !important;
                line-height: 1 !important;
            }
            .inline-actions > a {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                width: 26px;
                height: 26px;
                border-radius: 6px;
                background: rgba(201,168,76,0.10);
                border: 1px solid rgba(201,168,76,0.14);
                color: #C9A84C !important;
                font-size: 11px;
                cursor: pointer;
                transition: background 0.15s, border-color 0.15s, transform 0.1s;
                padding: 0;
                text-decoration: none !important;
                margin: 0 1px;
            }
            .inline-actions > a:hover {
                background: rgba(201,168,76,0.16) !important;
                border-color: rgba(22,36,64,0.3) !important;
                transform: scale(1.08);
            }
            .inline-actions > a:active { transform: scale(0.96); }
            /* Delete icon in inline actions - red */
            .inline-actions > a[title="Delete"],
            .inline-actions > a[title="Delete Folder"],
            .inline-actions > a[title="Delete File"] {
                background: rgba(239,68,68,0.08) !important;
                border-color: rgba(239,68,68,0.18) !important;
                color: #DC2626 !important;
            }
            .inline-actions > a[title="Delete"]:hover,
            .inline-actions > a[title="Delete Folder"]:hover,
            .inline-actions > a[title="Delete File"]:hover {
                background: rgba(239,68,68,0.2) !important;
                border-color: rgba(239,68,68,0.35) !important;
            }
            /* Download icon - green tint matching other action buttons */
            .inline-actions > a[title="Download"],
            .inline-actions > a.inline-dl-btn {
                background: rgba(22,163,74,0.10) !important;
                border-color: rgba(22,163,74,0.20) !important;
                color: #16a34a !important;
            }
            .inline-actions > a[title="Download"]:hover,
            .inline-actions > a.inline-dl-btn:hover {
                background: rgba(22,163,74,0.20) !important;
                border-color: rgba(22,163,74,0.35) !important;
            }
            .inline-actions > form > button {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                width: 26px;
                height: 26px;
                border-radius: 6px;
                background: rgba(201,168,76,0.10);
                border: 1px solid rgba(201,168,76,0.14);
                color: #C9A84C !important;
                font-size: 11px;
                cursor: pointer;
                transition: background 0.15s, transform 0.1s;
                padding: 0;
                margin: 0 1px;
            }
            .inline-actions > form > button:hover {
                background: rgba(201,168,76,0.16) !important;
                transform: scale(1.08);
            }
            /* ===== UNIFIED fm-btn SYSTEM — all same height 34px ===== */
            .fm-action-bar {
                display: flex;
                align-items: center;
                flex-wrap: wrap;
                gap: 6px;
                margin-bottom: 0;
                padding: 0 2px 0 0;
            }
            .fm-action-bar .d-contents { display: contents; }
            .d-contents { display: contents; }
            .fm-btn {
                display: inline-flex !important;
                align-items: center !important;
                justify-content: center !important;
                gap: 6px !important;
                height: 34px !important;
                padding: 0 14px !important;
                font-size: 13px !important;
                font-weight: 600 !important;
                font-family: 'Inter', sans-serif !important;
                border-radius: 8px !important;
                border: none !important;
                cursor: pointer !important;
                white-space: nowrap !important;
                text-decoration: none !important;
                transition: background 0.15s, transform 0.1s !important;
                line-height: 1 !important;
                flex-shrink: 0 !important;
            }
            .fm-btn:active { transform: scale(0.97) !important; }
            .fm-btn-outline {
                background: rgba(201,168,76,0.08) !important;
                color: var(--ios-gold) !important;
                border: 1px solid rgba(201,168,76,0.20) !important;
            }
            .fm-btn-outline:hover { background: var(--ios-blue) !important; color: var(--ios-bg) !important; border-color: var(--ios-gold) !important; }
            .fm-btn-primary {
                background: var(--ios-blue) !important;
                color: var(--ios-bg) !important;
                border: 1px solid var(--ios-gold) !important;
                box-shadow: 0 2px 8px rgba(201,168,76,0.22) !important;
            }
            .fm-btn-primary:hover { background: var(--ios-blue) !important; border-color: var(--ios-blue) !important; color: var(--ios-bg) !important; filter: brightness(1.08); }
            .fm-btn-danger {
                background: rgba(239,68,68,0.07) !important;
                color: var(--ios-red) !important;
                border: 1px solid rgba(239,68,68,0.22) !important;
            }
            .fm-btn-danger:hover { background: #EF4444 !important; color: #fff !important; border-color: #EF4444 !important; }
            .fm-btn-save {
                background: var(--ios-blue) !important;
                color: var(--ios-bg) !important;
                border: 1px solid var(--ios-gold) !important;
                box-shadow: 0 2px 8px rgba(201,168,76,0.25) !important;
            }
            .fm-btn-save:hover { filter: brightness(1.1); border-color: var(--ios-gold) !important; color: var(--ios-bg) !important; box-shadow: 0 3px 12px rgba(201,168,76,0.35) !important; }
            .fm-btn-save:active, .fm-btn-save:focus { background: var(--ios-blue) !important; border-color: var(--ios-gold) !important; box-shadow: 0 0 0 3px rgba(201,168,76,0.25) !important; outline: none !important; }
            /* ===== NAV ICON BUTTONS ===== */
            .nav-icon-btn {
                font-family: 'Inter', sans-serif !important;
                font-weight: 500 !important;
                white-space: nowrap !important;
                padding: 0 !important;
                display: inline-flex !important;
                align-items: center !important;
                justify-content: center !important;
                width: 34px !important;
                height: 34px !important;
                border-radius: 9px !important;
                background: rgba(201,168,76,0.10) !important;
                text-decoration: none !important;
                flex-shrink: 0 !important;
                gap: 4px !important;
                font-size: 15px !important;
                color: var(--ios-gold) !important;
                transition: background 0.15s !important;
            }
            .nav-icon-btn:hover { background: rgba(201,168,76,0.20) !important; }
            .nav-icon-btn .nav-btn-label { display: none; }
            /* nav-icon-btn responsive: handled by unified responsive system */
            /* breadcrumb pills — pill-shaped, slightly dark bg, centered, fully scrollable */
            .bc-scroll-wrap {
                display: flex;
                align-items: center;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                scrollbar-width: none;
                -ms-overflow-style: none;
                max-width: 100%;
                padding: 4px 0;
            }
            .bc-scroll-wrap::-webkit-scrollbar { display: none; }
            .bc-inner {
                display: inline-flex;
                align-items: center;
                gap: 0;
                flex-wrap: nowrap;
                white-space: nowrap;
                padding: 3px 8px;
                background: rgba(201,168,76,0.10);
                border-radius: 999px;
            }
            /* breadcrumb centering: handled by unified responsive system */
            .bc-sep {
                color: rgba(22,36,64,0.35);
                font-size: 14px;
                font-weight: 300;
                margin: 0 1px;
                flex-shrink: 0;
                user-select: none;
            }
            .bc-pill {
                display: inline-flex;
                align-items: center;
                gap: 4px;
                font-size: 14px;
                font-weight: 600;
                color: #C9A84C;
                padding: 3px 10px;
                border-radius: 999px;
                white-space: nowrap;
                text-decoration: none !important;
                transition: background 0.15s, color 0.15s;
                flex-shrink: 0;
            }
            .bc-pill:hover { background: rgba(201,168,76,0.12); color: var(--ios-label); }
            .bc-pill-home {
                padding: 3px 8px;
                font-size: 16px;
            }
            .bc-pill-active {
                background: rgba(201,168,76,0.13);
                color: var(--ios-label);
            }
            /* searchModal responsive: handled by unified responsive system */
            /* Table horizontal lines — td-only, no double borders */
            #main-table tbody tr { border-bottom: none !important; }
            #main-table tbody tr:last-child td { border-bottom: none !important; }
            .table td, .table th { border-bottom: 0.5px solid var(--ios-sep) !important; }
            /* Hide image zoom checkbox */
            #preview-img-zoomCheck { display: none !important; }
            input[type="checkbox"]:checked {
                accent-color: var(--ios-gold);
            }
            .custom-control-input:checked ~ .custom-control-label::before {
                background-color: var(--ios-gold) !important;
                border-color: var(--ios-gold) !important;
            }
            /* Ensure navbar icon perfectly centered */
            .main-nav .navbar-brand span:first-child {
                display: inline-flex !important;
                align-items: center !important;
                justify-content: center !important;
            }
            .main-nav .navbar-brand span:first-child i {
                line-height: 1 !important;
                display: block !important;
            }
            /* Home icon in breadcrumb - perfect vertical align */
            .fa.fa-home {
                font-size: 15px;
                vertical-align: middle;
                line-height: 1;
            }
            /* #wrapper padding: handled by unified responsive system */
            .btn-outline-primary {
                color: #C9A84C !important;
                border-color: rgba(201,168,76,0.22) !important;
                background: rgba(201,168,76,0.08) !important;
                font-family: 'Inter', sans-serif !important;
                border-radius: 8px !important;
            }
            .btn-outline-primary:hover {
                background: #162440 !important;
                color: #fff !important;
                border-color: #C9A84C !important;
            }
            .btn-success {
                background: #162440 !important;
                border-color: #C9A84C !important;
                font-family: 'Inter', sans-serif !important;
            }
            .btn-success:hover { background: #1e3260 !important; border-color: #C9A84C !important; }
            .btn-success:active, .btn-success:focus { background: #162440 !important; border-color: #C9A84C !important; box-shadow: 0 0 0 3px rgba(201,168,76,0.25) !important; outline: none !important; }
            /* Noto Sans everywhere — explicitly exclude ace editor */
            body, input, select, textarea, button, .form-control, .form-select,
            .dropdown-item, .nav-link, .navbar-brand, .btn, label, th, td, tfoot,
            .modal-title, .card-header, .list-group-item, p, span {
                font-family: 'Inter', -apple-system, 'Helvetica Neue', sans-serif;
            }
            /* Ace editor must stay monospace — never inherit Noto Sans */
            #editor, #editor *,
            .ace_editor, .ace_editor *,
            .ace_content, .ace_content *,
            .ace_text-layer, .ace_line, .ace_line *,
            .ace_text-input, .ace_cursor-layer, .ace_cursor,
            .ace_selection, .ace_gutter, .ace_gutter-cell {
                font-family: ui-monospace, 'SF Mono', 'JetBrains Mono', 'Cascadia Mono', 'Consolas', 'Monaco', monospace !important;
            }
            /* ===== FOOTER CREDIT ===== */
            .fm-footer-credit, .fm-footer-credit-login {
                font-size: 12px;
                color: var(--ios-secondary);
                font-family: var(--ios-font);
                white-space: nowrap;
                display: inline-flex;
                align-items: center;
                gap: 4px;
            }
            .fm-footer-credit a, .fm-footer-credit-login a { color: var(--ios-secondary); text-decoration: none; }
            .fm-footer-credit a:hover, .fm-footer-credit-login a:hover { color: var(--ios-label); }
            .fm-heart { color: #EF4444 !important; }
            /* Search results — green links */
            #search-wrapper li a { color: #162440 !important; font-weight: 500; }
            #search-wrapper li a:hover { color: #C9A84C !important; }
            /* Permissions — green */
            td a[href*="chmod"] { color: #162440 !important; font-weight: 600 !important; }
            /* Breadcrumb slightly bigger text and icon */
            .bc-inner a { font-size: 14px !important; }
            .bc-inner span { font-size: 13px !important; }
            .bc-inner .fa-home { font-size: 16px !important; }
            /* Upload tab — flat, no rounded on active */
            .upload-tab-link, .upload-tab-link.active { border-radius: 0 !important; }
            /* fm-btn responsive: handled by unified responsive system */
            /* Responsive mobile nav - OVERLAY mode */
            @media (max-width: 991px) {
                .navbar-collapse {
                    position: absolute;
                    top: calc(var(--ios-nav-h) + var(--fm-safe-top, 0px));
                    left: 0; right: 0;
                    background: rgba(255,255,255,0.97);
                    backdrop-filter: saturate(180%) blur(20px);
                    -webkit-backdrop-filter: saturate(180%) blur(20px);
                    border-bottom: 0.5px solid var(--ios-sep);
                    padding: 10px 12px 14px;
                    z-index: 1050;
                    box-shadow: 0 8px 24px rgba(0,0,0,0.10);
                }
                .navbar-nav { gap: 4px; flex-direction: row; flex-wrap: wrap; }
            }
            /* btn-act responsive: handled by unified responsive system */
            /* ══════════════════════════════════════════════════════════════
               UNIFIED VIEW TOOLBAR (action bar + file nav in one row)
            ══════════════════════════════════════════════════════════════ */
            .fm-view-toolbar {
                display: flex;
                align-items: center;
                justify-content: space-between;
                flex-wrap: nowrap;
                gap: 8px;
                margin-bottom: 0;
            }
            .fm-toolbar-actions {
                flex-shrink: 1;
                min-width: 0;
                overflow: visible;
            }
            .fm-toolbar-nav {
                display: inline-flex;
                align-items: center;
                gap: 4px;
                flex-shrink: 0;
            }
            .fm-nav-btn {
                max-width: 160px;
                overflow: hidden;
            }
            .fm-nav-btn .fm-nav-label {
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
                min-width: 0;
                display: inline-block;
                max-width: 110px;
            }
            .fm-nav-disabled {
                opacity: 0.35 !important;
                cursor: default !important;
                pointer-events: none !important;
            }
            .fm-nav-counter {
                display: inline-flex;
                align-items: center;
                gap: 4px;
                height: 34px;
                padding: 0 10px;
                border-radius: 8px;
                font-size: 12px;
                font-weight: 700;
                white-space: nowrap;
                flex-shrink: 0;
                background: rgba(201,168,76,0.08);
                color: #C9A84C;
                border: 1px solid rgba(201,168,76,0.20);
            }
            .fm-nav-counter-icon { font-size: 11px; }
            /* ══════════════════════════════════════════════════════════════
               RESPONSIVE SYSTEM — three breakpoints
               Mobile  : ≤ 600px  → icon-only, maximum density
               Tablet  : 601–991px → compact labels or icon+short text
               Desktop : ≥ 992px  → full text + icons
            ══════════════════════════════════════════════════════════════ */
            /* ── MOBILE (≤ 600px) ── */
            @media (max-width: 600px) {
                /* Wrapper padding */
                #wrapper { padding-left: 12px !important; padding-right: 12px !important; }
                /* Unified view toolbar — icon-only */
                .fm-view-toolbar { gap: 4px; }
                /* Kill double top-gap: nav is fixed + body already has padding-top for it,
                   these page containers were adding their own padding-top on top of that */
                div[style*="padding:18px 16px 8px"] { padding-top: 0 !important; }
                div[style*="padding-top:16px"] { padding-top: 0 !important; }
                /* Force real centering on centered modals (TOTP manage etc.) — was
                   drifting off-centre because nothing enforced flex centering here */
                .modal-dialog-centered { display: flex !important; align-items: center !important; min-height: calc(100% - 20px) !important; margin: 10px auto !important; }
                .modal-dialog { max-width: calc(100% - 20px) !important; }
                /* Settings sub-nav tabs — scroll horizontally instead of wrapping/squashing */
                .settings-tab-link { padding: 7px 12px !important; font-size: 12.5px !important; white-space: nowrap; }
                div[style*="background:var(--ios-fill);padding:5px;border-radius:12px"] {
                    overflow-x: auto !important; -webkit-overflow-scrolling: touch;
                    max-width: 100%; scrollbar-width: none;
                }
                div[style*="background:var(--ios-fill);padding:5px;border-radius:12px"]::-webkit-scrollbar { display: none; }
                .fm-btn-label { display: none !important; }
                .fm-btn { padding: 0 10px !important; gap: 5px !important; }
                .fm-nav-btn { max-width: 36px !important; }
                .fm-nav-counter-text { display: none !important; }
                .fm-nav-counter { padding: 0 9px; }
                .fm-toolbar-actions { flex-wrap: nowrap; overflow-x: auto; scrollbar-width: none; }
                .fm-toolbar-actions::-webkit-scrollbar { display: none; }
                /* Bulk bar — icon-only */
                .bulk-btn-label { display: none !important; }
                .bulk-btn { padding: 0 10px !important; height: 30px !important; }
                /* Nav buttons — icon-only */
                .nav-btn-label { display: none !important; }
                /* Search modal full-width */
                #searchModal .modal-dialog { margin: 0; max-width: 100%; height: 100%; }
                #searchModal .modal-content { border-radius: 0 0 16px 16px; }
            }
            /* ── TABLET (601px – 991px) ── */
            @media (min-width: 601px) and (max-width: 991px) {
                /* Wrapper — comfortable side padding */
                #wrapper { padding-left: 14px !important; padding-right: 14px !important; }
                /* Kill the settings-page top gap here too */
                div[style*="padding:18px 16px 8px"] { padding-top: 0 !important; }
                div[style*="padding-top:16px"] { padding-top: 0 !important; }
                /* ── Navbar: brand title hidden on narrow tablet, visible on wider ── */
                @media (max-width: 767px) {
                    .navbar-brand .d-none.d-sm-inline { display: none !important; }
                }
                /* ── Nav icon buttons: icon-only below 768, short label above ── */
                .nav-icon-btn { width: 34px !important; padding: 0 !important; }
                .nav-btn-label { display: none !important; }
                /* ── Unified view toolbar: show icon + short label, nav shows counter only ── */
                .fm-view-toolbar { gap: 5px; flex-wrap: nowrap; }
                .fm-btn { padding: 0 9px !important; font-size: 12px !important; gap: 4px !important; }
                .fm-btn-label { display: inline !important; }
                /* Clamp long nav labels on tablet */
                .fm-nav-label { max-width: 80px !important; }
                /* Counter: show icon + number */
                .fm-nav-counter { padding: 0 8px; font-size: 11px; }
                .fm-nav-counter-text { display: inline !important; }
                /* If action bar is still overflowing, allow horizontal scroll */
                .fm-toolbar-actions { overflow-x: auto; scrollbar-width: none; }
                .fm-toolbar-actions::-webkit-scrollbar { display: none; }
                /* ── Bulk action bar: icon + short label, scrollable ── */
                .bulk-btn { padding: 0 9px !important; font-size: 12px !important; height: 30px !important; }
                .bulk-btn-label { display: inline !important; }
                .bulk-action-bar { overflow-x: auto; flex-wrap: nowrap; }
                /* ── Table: tighten cell padding on tablet ── */
                #main-table td, #main-table th { padding: 7px 8px !important; font-size: 13px !important; }
                td.inline-actions { padding: 7px 8px !important; }
                /* ── Inline action icon sizes ── */
                .inline-actions > a,
                .inline-actions > form > button {
                    width: 24px !important;
                    height: 24px !important;
                    font-size: 10px !important;
                }
                /* ── Editor toolbar on tablet ── */
                .fm-btn { height: 32px !important; }
                /* ── Search modal — comfortable width ── */
                #searchModal .modal-dialog { margin: 16px auto; max-width: calc(100% - 32px); }
                /* ── Breadcrumb: left-align on tablet, no forced center ── */
                #nav-breadcrumb { justify-content: flex-start !important; }
                /* ── Modals full-width on narrow tablet ── */
                @media (max-width: 767px) {
                    .modal-dialog { margin: 10px auto; max-width: calc(100% - 20px) !important; }
                    .modal-dialog-centered { display: flex !important; align-items: center !important; min-height: calc(100% - 20px) !important; }
                }
                /* ── Footer credit: hide on narrow tablet to save space ── */
                @media (max-width: 700px) {
                    .fm-footer-credit { display: none !important; }
                }
            }
            /* ── DESKTOP (≥ 992px) ── */
            @media (min-width: 992px) {
                /* Restore full labels everywhere */
                .fm-btn-label { display: inline !important; }
                .nav-btn-label { display: inline !important; }
                .bulk-btn-label { display: inline !important; }
                .fm-nav-label { max-width: 110px !important; }
                .fm-nav-counter-text { display: inline !important; }
                /* Nav icon buttons: full label */
                .nav-icon-btn { width: auto !important; padding: 0 10px !important; }
                /* Breadcrumb centered on desktop */
                #nav-breadcrumb { justify-content: center !important; }
                /* fm-btn standard sizes */
                .fm-btn { height: 34px !important; padding: 0 14px !important; font-size: 13px !important; gap: 6px !important; }
                .bulk-btn { height: 32px !important; padding: 0 11px !important; font-size: 12.5px !important; }
            }
            /* ══════════════════════════════════════════════════════════════
               MEDIA VIEWER — centred, full-width, responsive
            ══════════════════════════════════════════════════════════════ */
            /* Viewer content column — horizontal breathing room */
            .fm-viewer-col { padding: 0 16px !important; }
            @media (max-width: 600px) {
                .fm-viewer-col { padding: 0 10px !important; }
            }
            /* Shared wrapper: centred block with side breathing room */
            .fm-media-wrap {
                display: flex;
                justify-content: center;
                align-items: flex-start;
                width: 100%;
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }
            /* Image */
            .fm-media-img {
                display: block;
                max-width: 100%;
                width: auto;
                height: auto;
                border-radius: 12px;
                box-shadow: 0 4px 24px rgba(0,0,0,0.10);
                margin: 0 auto;
            }
            /* Video: fills padded container, keeps aspect ratio */
            .fm-media-video {
                background: #000;
                border-radius: 12px;
                overflow: hidden;
                width: 100%;
                max-width: 100%;
            }
            .fm-video-player {
                display: block;
                width: 100%;
                max-width: 100%;
                height: auto;
                max-height: 75vh;
                border-radius: 0;
                background: #000;
                object-fit: contain;
            }
            /* Audio: full-width bar */
            .fm-media-audio { padding: 12px 0; }
            .fm-audio-player {
                display: block;
                width: 100%;
                max-width: 640px;
                margin: 0 auto;
            }
            /* Text viewer: no extra top margin */
            .fm-viewer-content-row { margin-top: 8px !important; }
            /* ══════════════════════════════════════════════════════════════
               SEARCH MODAL — safe area bottom padding on mobile
            ══════════════════════════════════════════════════════════════ */
            @media (max-width: 600px) {
                .fm-search-dialog {
                    margin: 0 !important;
                    padding: 0 !important;
                    max-width: 100% !important;
                    height: 100dvh !important;
                    display: flex !important;
                    flex-direction: column !important;
                    align-items: stretch !important;
                }
                .fm-search-dialog .modal-content {
                    border-radius: 0 !important;
                    max-height: 100dvh !important;
                    height: 100dvh !important;
                }
                .fm-search-dialog .modal-body {
                    padding-bottom: calc(16px + env(safe-area-inset-bottom, 0px)) !important;
                }
                #search-wrapper {
                    max-height: calc(100dvh - 160px) !important;
                }
            }
            @media (min-width: 601px) and (max-width: 991px) {
                .fm-search-dialog {
                    margin: 40px auto 20px !important;
                    max-width: calc(100% - 32px) !important;
                }
                .fm-search-dialog .modal-content {
                    max-height: calc(100dvh - 80px) !important;
                }
                #search-wrapper {
                    max-height: calc(100dvh - 220px) !important;
                }
            }
            /* Force Inter everywhere in the app — final override, wins regardless
               of load order against Bootstrap/DataTables/any other stylesheet.
               Ace editor, code blocks, and icon fonts (Font Awesome) are excluded —
               icon fonts break completely if their font-family is overridden. */
            html:not(.fm-fonts-disabled) body,
            html:not(.fm-fonts-disabled) body *:not(#editor):not(#editor *):not(.ace_editor):not(.ace_editor *):not(code):not(pre):not(.fa):not(.fa *):not([class*="fa-"]):not(i) {
                font-family: 'Inter', -apple-system, 'Helvetica Neue', sans-serif !important;
            }
        </style>
            </head>
    <body class="<?php echo $isStickyNavBar; ?>">
        <!-- Page loader - visible immediately, hidden once DOM ready -->
        <div id="fm-page-loader">
            <div class="fm-loader-ring"></div>
        </div>
        <script>document.addEventListener('DOMContentLoaded',function(){var l=document.getElementById('fm-page-loader');if(l)l.classList.add('fm-loader-hidden');});</script>
        <!-- Floating toast container -->
        <div id="fm-toast-container" style="position:fixed;bottom:24px;right:16px;z-index:99999;display:flex;flex-direction:column-reverse;align-items:flex-end;gap:10px;pointer-events:none;max-width:calc(100vw - 32px);"></div>
        <style>
        .fm-toast {
            display:inline-flex;align-items:flex-start;gap:12px;
            padding:10px 14px;border-radius:14px;
            width:max-content;max-width:min(360px,calc(100vw - 32px));
            box-shadow:0 8px 32px rgba(0,0,0,0.18),0 2px 8px rgba(0,0,0,0.10);
            font-family:'Inter',sans-serif;font-size:13px;font-weight:500;
            line-height:1.5;
            pointer-events:all;
            transform:translateX(calc(100% + 32px));
            opacity:0;
            transition:transform 0.38s cubic-bezier(0.34,1.42,0.64,1), opacity 0.3s ease;
            will-change:transform,opacity;
            backdrop-filter:blur(12px);
            -webkit-backdrop-filter:blur(12px);
        }
        .fm-toast.fm-toast-in  { transform:translateX(0); opacity:1; }
        .fm-toast.fm-toast-out { transform:translateX(calc(100% + 32px)); opacity:0; transition:transform 0.26s ease, opacity 0.2s ease; }
        @media (max-width: 600px) {
            #fm-toast-container { left: 10px; right: 10px; max-width: calc(100vw - 20px); }
            .fm-toast { width: max-content; max-width: calc(100vw - 20px); max-height: 55vh; overflow-y: auto; }
        }
        /* OK — green tinted */
        .fm-toast.ok {
            background: var(--ios-card, #FDFBF3);
            border:1px solid rgba(22,163,74,0.28);
            color:#14532D;
        }
        /* ERROR — red tinted */
        .fm-toast.error {
            background: var(--ios-card, #FDFBF3);
            border:1px solid rgba(220,38,38,0.28);
            color:#7F1D1D;
        }
        /* ALERT — amber tinted */
        .fm-toast.alert {
            background: var(--ios-card, #FDFBF3);
            border:1px solid rgba(217,119,6,0.28);
            color:#78350F;
        }
        html[data-theme="dark"] .fm-toast.ok    { color:#8FE0A8; }
        html[data-theme="dark"] .fm-toast.error { color:#FFB4B0; }
        html[data-theme="dark"] .fm-toast.alert { color:#F5CE87; }
        /* Toast icon + progress bar styling */
        .fm-toast-icon-wrap {
            flex-shrink:0;
            width:32px;height:32px;border-radius:50%;
            display:flex;align-items:center;justify-content:center;
            font-size:15px;
        }
        .fm-toast.ok    .fm-toast-icon-wrap { background:rgba(22,163,74,0.15); color:#16A34A; }
        .fm-toast.error .fm-toast-icon-wrap { background:rgba(220,38,38,0.15); color:#DC2626; }
        .fm-toast.alert .fm-toast-icon-wrap { background:rgba(217,119,6,0.15);  color:#D97706; }
        .fm-toast-content { flex:1;min-width:0; }
        .fm-toast-title { font-size:12px;font-weight:700;letter-spacing:0.3px;margin-bottom:3px;text-transform:uppercase;opacity:0.65; }
        .fm-toast-body  { font-size:13px;font-weight:500;line-height:1.45; }
        .fm-toast-close {
            flex-shrink:0;background:none;border:none;cursor:pointer;
            font-size:12px;padding:2px;line-height:1;
            opacity:0.45;border-radius:50%;width:20px;height:20px;
            display:flex;align-items:center;justify-content:center;
            transition:opacity 0.15s,background 0.15s;
        }
        .fm-toast-close:hover { opacity:0.9; background:rgba(0,0,0,0.08); }
        .fm-toast-progress {
            position:absolute;bottom:0;left:0;height:3px;border-radius:0 0 14px 14px;
            animation:fm-toast-prog 4s linear forwards;
        }
        .fm-toast.ok    .fm-toast-progress { background:rgba(22,163,74,0.5); }
        .fm-toast.error .fm-toast-progress { background:rgba(220,38,38,0.5); }
        .fm-toast.alert .fm-toast-progress { background:rgba(217,119,6,0.5); }
        @keyframes fm-toast-prog { from{width:100%;} to{width:0%;} }
        </style>
        <script>
        function fmToast(msg, cls) {
            cls = cls || 'ok';
            var icons   = {ok:'fa-check-circle', error:'fa-times-circle', alert:'fa-exclamation-triangle'};
            var titles  = {ok:'Success', error:'Error', alert:'Warning'};
            var icon    = icons[cls]  || 'fa-info-circle';
            var title   = titles[cls] || 'Notice';
            var el = document.createElement('div');
            el.className = 'fm-toast ' + cls;
            el.style.position = 'relative';
            el.style.overflow = 'hidden';
            el.innerHTML =
                '<div class="fm-toast-icon-wrap"><i class="fa ' + icon + '"></i></div>' +
                '<div class="fm-toast-content">' +
                    '<div class="fm-toast-title">' + title + '</div>' +
                    '<div class="fm-toast-body">' + msg + '</div>' +
                '</div>' +
                '<div class="fm-toast-progress"></div>';
            var container = document.getElementById('fm-toast-container');
            if (!container) return;
            container.appendChild(el);
            requestAnimationFrame(function(){
                requestAnimationFrame(function(){ el.classList.add('fm-toast-in'); });
            });
            var tid = setTimeout(function(){ fmDismissToast(el); }, 4000);
            el._fmTid = tid;
        }
        function fmDismissToast(el) {
            if (!el || el._fmDismissed) return;
            el._fmDismissed = true;
            if (el._fmTid) clearTimeout(el._fmTid);
            el.classList.remove('fm-toast-in');
            el.classList.add('fm-toast-out');
            setTimeout(function(){ if (el.parentNode) el.parentNode.removeChild(el); }, 300);
        }
        </script>
        <div id="wrapper" class="container-fluid" style="max-width:1400px;margin:0 auto;padding:6px 16px 32px;">
            <!-- New Item creation -->
            <div class="modal fade" id="createNewItem" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="newItemModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <form class="modal-content" method="post">
                        <div class="modal-header">
                            <h5 class="modal-title" id="newItemModalLabel"><i class="fa fa-plus-square fa-fw"></i><?php echo lng('CreateNewItem') ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p><label for="newfile"><?php echo lng('ItemType') ?> </label></p>
                            <div class="d-flex gap-3 mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="newfile" id="customRadioInline1" value="file">
                                    <label class="form-check-label" for="customRadioInline1" style="font-size:15px;"><?php echo lng('File') ?></label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="newfile" id="customRadioInline2" value="folder" checked>
                                    <label class="form-check-label" for="customRadioInline2" style="font-size:15px;"><?php echo lng('Folder') ?></label>
                                </div>
                            </div>
                            <p class="mt-3"><label for="newfilename"><?php echo lng('ItemName') ?> </label></p>
                            <textarea name="newfilename" id="newfilename" rows="3" class="form-control" placeholder="e.g. project-a, project-b&#10;or nested: 2026/reports/q1" required style="resize:vertical;font-family:inherit;"></textarea>
                            <div style="font-size:12px;color:var(--ios-secondary,#8a8a8e);margin-top:6px;line-height:1.4;">
                                <i class="fa fa-info-circle"></i>
                                Separate multiple names with a comma or new line to create several at once. Use <code>/</code> inside a name (e.g. <code>2026/reports/q1</code>) to create nested folders in one go.
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                            <button type="button" class="btn btn-outline-primary" style="border-radius:10px;font-weight:500;" data-bs-dismiss="modal"><i class="fa fa-times-circle"></i> <?php echo lng('Cancel') ?></button>
                            <button type="submit" class="btn btn-success" style="border-radius:10px;font-weight:500;"><i class="fa fa-check-circle"></i> <?php echo lng('CreateNow') ?></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Hash Modal -->
            <div class="modal fade" id="hashModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" style="max-width:520px;">
                    <div class="modal-content" style="border-radius:16px;overflow:hidden;">
                        <div class="modal-header" style="padding:14px 18px;border-bottom:0.5px solid var(--ios-sep);background:var(--ios-bg2);">
                            <div style="display:flex;align-items:center;gap:8px;">
                                <span style="display:inline-flex;align-items:center;justify-content:center;width:28px;height:28px;background:rgba(201,168,76,0.12);border-radius:7px;">
                                    <i class="fa fa-shield" style="color:#C9A84C;font-size:12px;"></i>
                                </span>
                                <span style="font-size:15px;font-weight:700;color:var(--ios-label);">File Hashes &amp; Integrity</span>
                                <span id="hash-filename-badge" style="font-size:11px;font-weight:600;background:rgba(22,36,64,0.08);color:#162440;padding:2px 8px;border-radius:20px;max-width:180px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;"></span>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin:0;margin-left:auto;"></button>
                        </div>
                        <div class="modal-body" style="padding:18px;">
                            <div id="hash-loading" style="text-align:center;padding:24px 0;color:var(--ios-secondary);font-size:14px;">
                                <i class="fa fa-spinner fa-spin" style="font-size:20px;margin-bottom:8px;display:block;color:#C9A84C;"></i>Computing hashes…
                            </div>
                            <div id="hash-results" style="display:none;">
                                <div class="hash-row" id="hr-md5">
                                    <div class="hash-label"><span class="hash-algo-badge hash-md5">MD5</span><span class="hash-bits">128-bit</span></div>
                                    <div class="hash-value-wrap"><code class="hash-value" id="hv-md5"></code><button class="hash-copy-btn" onclick="copyHash('hv-md5',this)" title="Copy"><i class="fa fa-copy"></i></button></div>
                                </div>
                                <div class="hash-row" id="hr-sha1">
                                    <div class="hash-label"><span class="hash-algo-badge hash-sha1">SHA-1</span><span class="hash-bits">160-bit</span></div>
                                    <div class="hash-value-wrap"><code class="hash-value" id="hv-sha1"></code><button class="hash-copy-btn" onclick="copyHash('hv-sha1',this)" title="Copy"><i class="fa fa-copy"></i></button></div>
                                </div>
                                <div class="hash-row" id="hr-sha256">
                                    <div class="hash-label"><span class="hash-algo-badge hash-sha256">SHA-256</span><span class="hash-bits">256-bit</span></div>
                                    <div class="hash-value-wrap"><code class="hash-value" id="hv-sha256"></code><button class="hash-copy-btn" onclick="copyHash('hv-sha256',this)" title="Copy"><i class="fa fa-copy"></i></button></div>
                                </div>
                                <div class="hash-row" id="hr-sha512">
                                    <div class="hash-label"><span class="hash-algo-badge hash-sha512">SHA-512</span><span class="hash-bits">512-bit</span></div>
                                    <div class="hash-value-wrap"><code class="hash-value" id="hv-sha512"></code><button class="hash-copy-btn" onclick="copyHash('hv-sha512',this)" title="Copy"><i class="fa fa-copy"></i></button></div>
                                </div>
                                <div style="margin-top:14px;padding:10px 12px;background:rgba(180,83,9,0.05);border-radius:8px;border:0.5px solid rgba(180,83,9,0.15);font-size:11px;color:var(--ios-secondary);">
                                    <i class="fa fa-info-circle" style="color:#B45309;margin-right:4px;"></i>Use SHA-256 or SHA-512 for file integrity verification. MD5/SHA-1 are for legacy compatibility only.
                                </div>
                            </div>
                            <div id="hash-error" style="display:none;color:var(--ios-red);font-size:13px;padding:12px;background:rgba(239,68,68,0.06);border-radius:8px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Metadata Modal (forensics) — triggered from view page floating button -->
            <div class="modal fade" id="metaModal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" style="max-width:560px;">
                    <div class="modal-content" style="border-radius:16px;overflow:hidden;">
                        <div class="modal-header" style="padding:14px 18px;border-bottom:0.5px solid var(--ios-sep);background:var(--ios-bg2);">
                            <div style="display:flex;align-items:center;gap:8px;">
                                <span style="display:inline-flex;align-items:center;justify-content:center;width:28px;height:28px;background:rgba(99,102,241,0.12);border-radius:7px;">
                                    <i class="fa fa-list-alt" style="color:#6366f1;font-size:12px;"></i>
                                </span>
                                <span style="font-size:15px;font-weight:700;color:var(--ios-label);">File Metadata</span>
                                <span id="meta-filename-badge" style="font-size:11px;font-weight:600;background:rgba(22,36,64,0.08);color:#162440;padding:2px 8px;border-radius:20px;max-width:180px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;"></span>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin:0;margin-left:auto;"></button>
                        </div>
                        <div class="modal-body" style="padding:18px;max-height:70vh;overflow-y:auto;">
                            <div id="meta-loading" style="text-align:center;padding:24px 0;color:var(--ios-secondary);font-size:14px;">
                                <i class="fa fa-spinner fa-spin" style="font-size:20px;margin-bottom:8px;display:block;color:#C9A84C;"></i>Loading metadata…
                            </div>
                            <div id="meta-results" style="display:none;"></div>
                            <div id="meta-error" style="display:none;color:var(--ios-red);font-size:13px;padding:12px;background:rgba(239,68,68,0.06);border-radius:8px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Advance Search Modal — hidden for readonly users -->
            <?php if (!FM_READONLY): ?>
            <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
                <div class="modal-dialog fm-search-dialog" style="max-width:520px;margin:60px auto 0;padding:0 12px;" role="document">
                    <div class="modal-content" style="border-radius:16px;overflow:hidden;display:flex;flex-direction:column;max-height:calc(100dvh - 80px);">
                        <div class="modal-header" style="padding:16px 18px;border-bottom:0.5px solid var(--ios-sep);align-items:center;">
                            <div style="display:flex;align-items:center;gap:8px;flex:1;min-width:0;">
                                <i class="fa fa-search" style="color:#C9A84C;font-size:14px;flex-shrink:0;"></i>
                                <h5 class="modal-title" id="searchModalLabel" style="font-size:16px;font-weight:700;margin:0;"><?php echo lng('Advanced Search') ?></h5>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="flex-shrink:0;margin-left:12px;"></button>
                        </div>
                        <div class="modal-body" style="padding:16px 18px;overflow-y:auto;flex:1;min-height:0;">
                            <div style="display:flex;align-items:center;gap:0;border-radius:10px;overflow:hidden;border:1px solid var(--ios-sep);background:var(--ios-fill);margin-bottom:14px;">
                                <input type="text" class="form-control" placeholder="<?php echo lng('Search') ?>..." aria-label="<?php echo lng('Search') ?>" id="advanced-search" autofocus style="border:none;background:transparent;padding:11px 14px;font-size:15px;box-shadow:none;flex:1;">
                                <button id="search-addon3" style="border:none;background:transparent;cursor:pointer;padding:0 16px;height:44px;color:#C9A84C;font-size:14px;font-weight:600;white-space:nowrap;flex-shrink:0;"><i class="fa fa-search" style="margin-right:5px;"></i>Search</button>
                            </div>
                            <div class="lds-facebook" style="display:none;margin:0 auto 12px;"><div></div><div></div><div></div></div>
                            <ul id="search-wrapper" style="display:none;padding-left:0;list-style:none;border-radius:12px;overflow-y:auto;border:0.5px solid var(--ios-sep);min-height:60px;max-height:calc(100dvh - 240px);margin-bottom:0;">
                                <p class="m-3" style="color:var(--ios-secondary);font-size:14px;"><?php echo lng('Search file in folder and subfolders...') ?></p>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <!--Rename Modal -->
            <div class="modal fade" style="--bs-modal-border-radius:14px;" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" id="renameDailog">
                <div class="modal-dialog modal-dialog-centered" role="document" style="max-width:360px;margin:auto;">
                    <form class="modal-content" method="post" autocomplete="off" style="border-radius:14px;overflow:hidden;">
                        <!-- Header -->
                        <div style="display:flex;align-items:center;justify-content:space-between;padding:14px 16px;border-bottom:0.5px solid var(--ios-sep);background:var(--ios-bg2);">
                            <div style="display:flex;align-items:center;gap:8px;">
                                <span style="display:inline-flex;align-items:center;justify-content:center;width:28px;height:28px;background:rgba(201,168,76,0.12);border-radius:7px;">
                                    <i class="fa fa-pencil" style="color:#C9A84C;font-size:12px;"></i>
                                </span>
                                <span style="font-size:15px;font-weight:700;color:var(--ios-label);"><?php echo lng('Rename') ?></span>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin:0;"></button>
                        </div>
                        <!-- Body -->
                        <div style="padding:16px;">
                            <!-- Current name chip -->
                            <div id="rn-current-wrap" style="display:flex;align-items:center;gap:6px;margin-bottom:12px;padding:8px 10px;background:var(--ios-fill);border-radius:8px;border:0.5px solid var(--ios-sep);">
                                <i class="fa fa-file-o" id="rn-icon" style="color:#C9A84C;font-size:13px;flex-shrink:0;"></i>
                                <span id="rn-current-name" style="font-size:12px;color:var(--ios-secondary);overflow:hidden;text-overflow:ellipsis;white-space:nowrap;flex:1;min-width:0;"></span>
                                <span id="rn-ext-badge" style="display:none;font-size:10px;font-weight:700;background:rgba(201,168,76,0.12);color:#C9A84C;padding:2px 7px;border-radius:20px;flex-shrink:0;letter-spacing:0.3px;"></span>
                            </div>
                            <!-- New name input -->
                            <div style="position:relative;">
                                <input type="text" name="rename_to" id="js-rename-to" class="form-control"
                                       placeholder="New name…" required
                                       autocomplete="off" spellcheck="false"
                                       style="font-size:14px;padding-right:44px;border-radius:9px;"
                                       oninput="rnUpdate(this.value)">
                                <span id="rn-char-count" style="position:absolute;right:10px;top:50%;transform:translateY(-50%);font-size:11px;color:var(--ios-tertiary);pointer-events:none;"></span>
                            </div>
                            <!-- Warning -->
                            <div id="rn-warn" style="display:none;font-size:11px;color:#DC2626;margin-top:5px;padding:4px 8px;background:rgba(239,68,68,0.07);border-radius:6px;">
                                <i class="fa fa-exclamation-triangle"></i> Name contains invalid characters.
                            </div>
                            <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                            <input type="hidden" name="rename_from" id="js-rename-from">
                        </div>
                        <!-- Footer — exactly 2 buttons -->
                        <div style="display:flex;gap:8px;padding:12px 16px;border-top:0.5px solid var(--ios-sep);background:var(--ios-bg2);">
                            <button type="button" class="fm-btn fm-btn-outline" data-bs-dismiss="modal" style="flex:1;">
                                <i class="fa fa-times"></i> <?php echo lng('Cancel') ?>
                            </button>
                            <button type="submit" id="rn-submit-btn" class="fm-btn fm-btn-primary" style="flex:1;">
                                <i class="fa fa-check"></i> <?php echo lng('Rename') ?>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- UnZip Password Modal -->
            <div class="modal fade" id="unzipPasswordModal" tabindex="-1" role="dialog" data-bs-backdrop="static" aria-labelledby="unzipPasswordModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" style="max-width:360px;">
                    <div class="modal-content" style="border-radius:14px;overflow:hidden;">
                        <div class="modal-header" style="padding:14px 16px;border-bottom:0.5px solid var(--ios-sep);">
                            <h5 class="modal-title" id="unzipPasswordModalLabel" style="font-size:15px;font-weight:700;margin:0;color:var(--ios-label);">UnZip</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="padding:16px;">
                            <label for="unzip-password-input" id="unzip-password-input-label" style="font-size:12px;font-weight:600;color:var(--ios-secondary);">Password (if protected)</label>
                            <input type="password" id="unzip-password-input" name="unzip_password_modal_input" class="form-control" style="font-size:13px;padding:7px 10px;border-radius:8px;margin-top:6px;" placeholder="Leave blank for no protection" autocomplete="new-password">
                        </div>
                        <div class="modal-footer" style="padding:12px 16px;border-top:0.5px solid var(--ios-sep);">
                            <button type="button" class="fm-btn" data-bs-dismiss="modal" style="height:34px;font-size:13px;padding:0 16px;">Cancel</button>
                            <button type="button" class="fm-btn fm-btn-primary" id="unzip-password-submit-btn" onclick="submitUnzipWithPassword()" style="height:34px;font-size:13px;padding:0 20px;">UnZip</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Zip Password Modal -->
            <div class="modal fade" id="zipPasswordModal" tabindex="-1" role="dialog" data-bs-backdrop="static" aria-labelledby="zipPasswordModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" style="max-width:360px;">
                    <div class="modal-content" style="border-radius:14px;overflow:hidden;">
                        <div class="modal-header" style="padding:14px 16px;border-bottom:0.5px solid var(--ios-sep);">
                            <h5 class="modal-title" id="zipPasswordModalLabel" style="font-size:15px;font-weight:700;margin:0;color:var(--ios-label);">Create Zip</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="padding:16px;">
                            <label for="zip-password-input" style="font-size:12px;font-weight:600;color:var(--ios-secondary);">Password (optional)</label>
                            <input type="password" id="zip-password-input" name="zip_password_modal_input" class="form-control" style="font-size:13px;padding:7px 10px;border-radius:8px;margin-top:6px;" placeholder="Leave blank for no protection" autocomplete="new-password">
                            <div id="zip-password-support-note" style="display:none;font-size:11.5px;color:#EF4444;margin-top:8px;">This server's PHP/ZipArchive doesn't support encrypted zips — the archive will be created without a password.</div>
                        </div>
                        <div class="modal-footer" style="padding:12px 16px;border-top:0.5px solid var(--ios-sep);">
                            <button type="button" class="fm-btn" data-bs-dismiss="modal" style="height:34px;font-size:13px;padding:0 16px;">Cancel</button>
                            <button type="button" class="fm-btn fm-btn-primary" onclick="submitZipWithPassword()" style="height:34px;font-size:13px;padding:0 20px;">Create Zip</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bulk Rename Modal — Improved UI -->
            <div class="modal fade" id="bulkRenameModal" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="bulkRenameModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document" style="max-width:680px;">
                    <div class="modal-content" style="border-radius:18px;overflow:hidden;border:1px solid var(--ios-sep);">
                        <!-- Header -->
                        <div class="modal-header" style="border-bottom:0.5px solid var(--ios-sep);padding:14px 20px;background:var(--ios-bg2);">
                            <div style="display:flex;align-items:center;gap:10px;flex:1;min-width:0;">
                                <span style="display:inline-flex;align-items:center;justify-content:center;width:34px;height:34px;background:rgba(201,168,76,0.12);border-radius:10px;flex-shrink:0;">
                                    <i class="fa fa-pencil-square-o" style="color:#C9A84C;font-size:14px;"></i>
                                </span>
                                <div style="min-width:0;">
                                    <h5 class="modal-title" id="bulkRenameModalLabel" style="font-size:15px;font-weight:700;margin:0;line-height:1.2;color:var(--ios-label);">Bulk Rename</h5>
                                    <span id="bulk-rename-subtitle" style="font-size:12px;color:var(--ios-secondary);">0 items selected</span>
                                </div>
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin-left:12px;flex-shrink:0;"></button>
                        </div>
                        <!-- Body -->
                        <div class="modal-body" style="padding:14px 18px 8px;overflow-y:auto;max-height:70vh;">
                            <!-- ── TOOLS CARD ── -->
                            <div style="background:var(--ios-fill);border-radius:13px;padding:14px 16px;margin-bottom:14px;border:0.5px solid var(--ios-sep);">
                                <!-- Section label -->
                                <div style="font-size:10.5px;font-weight:800;color:var(--ios-secondary);text-transform:uppercase;letter-spacing:0.7px;margin-bottom:12px;">
                                    <i class="fa fa-magic" style="margin-right:5px;color:#C9A84C;"></i>Transform Tools
                                </div>
                                <!-- Row 1: Find → Replace -->
                                <div style="display:grid;grid-template-columns:1fr auto 1fr;gap:8px;align-items:flex-end;margin-bottom:10px;">
                                    <div>
                                        <label style="font-size:10px;font-weight:700;color:var(--ios-secondary);display:block;margin-bottom:4px;text-transform:uppercase;letter-spacing:0.4px;">Find</label>
                                        <input type="text" id="bulk-find" class="form-control" style="font-size:13px;padding:7px 10px;border-radius:8px;" placeholder="text to find…">
                                    </div>
                                    <div style="display:flex;align-items:center;padding-bottom:2px;">
                                        <span style="display:inline-flex;align-items:center;justify-content:center;width:28px;height:28px;background:rgba(201,168,76,0.12);border-radius:7px;color:#C9A84C;font-size:12px;">
                                            <i class="fa fa-arrow-right"></i>
                                        </span>
                                    </div>
                                    <div>
                                        <label style="font-size:10px;font-weight:700;color:var(--ios-secondary);display:block;margin-bottom:4px;text-transform:uppercase;letter-spacing:0.4px;">Replace with</label>
                                        <input type="text" id="bulk-replace" class="form-control" style="font-size:13px;padding:7px 10px;border-radius:8px;" placeholder="replacement…">
                                    </div>
                                </div>
                                <!-- Row 2: Prefix / Suffix / Case -->
                                <div style="display:grid;grid-template-columns:1fr 1fr 130px;gap:8px;align-items:flex-end;margin-bottom:10px;">
                                    <div>
                                        <label style="font-size:10px;font-weight:700;color:var(--ios-secondary);display:block;margin-bottom:4px;text-transform:uppercase;letter-spacing:0.4px;">Add Prefix</label>
                                        <input type="text" id="bulk-prefix" class="form-control" style="font-size:13px;padding:7px 10px;border-radius:8px;" placeholder="e.g. 2024_">
                                    </div>
                                    <div>
                                        <label style="font-size:10px;font-weight:700;color:var(--ios-secondary);display:block;margin-bottom:4px;text-transform:uppercase;letter-spacing:0.4px;">Add Suffix</label>
                                        <input type="text" id="bulk-suffix" class="form-control" style="font-size:13px;padding:7px 10px;border-radius:8px;" placeholder="e.g. _v2">
                                    </div>
                                    <div>
                                        <label style="font-size:10px;font-weight:700;color:var(--ios-secondary);display:block;margin-bottom:4px;text-transform:uppercase;letter-spacing:0.4px;">Case</label>
                                        <select id="bulk-case" class="form-control" style="font-size:12px;padding:7px 8px;border-radius:8px;height:auto;">
                                            <option value="">— keep —</option>
                                            <option value="lower">lowercase</option>
                                            <option value="upper">UPPERCASE</option>
                                            <option value="title">Title Case</option>
                                            <option value="snake">snake_case</option>
                                            <option value="kebab">kebab-case</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Row 3: Numbering toggle + action buttons -->
                                <div style="display:flex;align-items:center;gap:7px;flex-wrap:wrap;">
                                    <button type="button" onclick="toggleBulkNumbering()" id="btn-numbering-toggle"
                                        style="display:inline-flex;align-items:center;gap:5px;height:32px;padding:0 12px;background:rgba(201,168,76,0.09);color:#C9A84C;border:1px solid rgba(201,168,76,0.20);border-radius:8px;font-size:12px;font-weight:600;cursor:pointer;white-space:nowrap;transition:background 0.15s;">
                                        <i class="fa fa-list-ol"></i> Auto-Number
                                    </button>
                                    <div style="flex:1;"></div>
                                    <button type="button" onclick="resetBulkPattern()"
                                        style="display:inline-flex;align-items:center;gap:5px;height:32px;padding:0 12px;background:none;border:1px solid var(--ios-sep);border-radius:8px;font-size:12px;color:var(--ios-secondary);cursor:pointer;font-weight:600;white-space:nowrap;">
                                        <i class="fa fa-refresh"></i> Reset
                                    </button>
                                    <button type="button" onclick="applyBulkPattern()"
                                        style="display:inline-flex;align-items:center;gap:5px;height:32px;padding:0 14px;background:#162440;color:#fff;border:none;border-radius:8px;font-size:12px;font-weight:600;cursor:pointer;white-space:nowrap;box-shadow:0 2px 8px rgba(22,36,64,0.3);">
                                        <i class="fa fa-check"></i> Apply
                                    </button>
                                </div>
                                <!-- Numbering panel -->
                                <div id="bulk-num-panel" style="display:none;margin-top:12px;padding-top:12px;border-top:0.5px solid var(--ios-sep);">
                                    <div style="font-size:10px;font-weight:700;color:var(--ios-secondary);text-transform:uppercase;letter-spacing:0.5px;margin-bottom:8px;"><i class="fa fa-list-ol" style="margin-right:4px;"></i>Auto Numbering Settings</div>
                                    <div style="display:grid;grid-template-columns:1fr 1fr 1fr 1fr;gap:8px;align-items:flex-end;">
                                        <div>
                                            <label style="font-size:10px;font-weight:700;color:var(--ios-secondary);display:block;margin-bottom:4px;text-transform:uppercase;letter-spacing:0.3px;">Start #</label>
                                            <input type="number" id="bulk-num-start" class="form-control" value="1" min="0" style="font-size:13px;padding:6px 8px;border-radius:8px;">
                                        </div>
                                        <div>
                                            <label style="font-size:10px;font-weight:700;color:var(--ios-secondary);display:block;margin-bottom:4px;text-transform:uppercase;letter-spacing:0.3px;">Step</label>
                                            <input type="number" id="bulk-num-step" class="form-control" value="1" min="1" style="font-size:13px;padding:6px 8px;border-radius:8px;">
                                        </div>
                                        <div>
                                            <label style="font-size:10px;font-weight:700;color:var(--ios-secondary);display:block;margin-bottom:4px;text-transform:uppercase;letter-spacing:0.3px;">Position</label>
                                            <select id="bulk-num-pos" class="form-control" style="font-size:12px;padding:6px 8px;border-radius:8px;height:auto;">
                                                <option value="suffix">After name</option>
                                                <option value="prefix">Before name</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label style="font-size:10px;font-weight:700;color:var(--ios-secondary);display:block;margin-bottom:4px;text-transform:uppercase;letter-spacing:0.3px;">Zero-pad</label>
                                            <input type="number" id="bulk-num-pad" class="form-control" value="0" min="0" max="6" style="font-size:13px;padding:6px 8px;border-radius:8px;" title="Digits: 0=off, 2→01, 3→001">
                                        </div>
                                    </div>
                                </div>
                                <!-- Same-name section -->
                                <div style="margin-top:12px;padding-top:12px;border-top:0.5px solid var(--ios-sep);">
                                    <div style="font-size:10px;font-weight:700;color:var(--ios-secondary);text-transform:uppercase;letter-spacing:0.5px;margin-bottom:8px;"><i class="fa fa-font" style="margin-right:4px;"></i>Rename All to Same Base Name</div>
                                    <div style="display:grid;grid-template-columns:1fr 90px 96px auto;gap:8px;align-items:flex-end;">
                                        <div>
                                            <label style="font-size:10px;font-weight:700;color:var(--ios-secondary);display:block;margin-bottom:4px;text-transform:uppercase;letter-spacing:0.3px;">Base Name</label>
                                            <input type="text" id="bulk-samename-input" class="form-control" style="font-size:13px;padding:7px 10px;border-radius:8px;" placeholder="e.g. photo">
                                        </div>
                                        <div>
                                            <label style="font-size:10px;font-weight:700;color:var(--ios-secondary);display:block;margin-bottom:4px;text-transform:uppercase;letter-spacing:0.3px;">Start at</label>
                                            <input type="text" id="bulk-samename-start" class="form-control" value="1" style="font-size:13px;padding:7px 8px;border-radius:8px;" placeholder="1 or a">
                                        </div>
                                        <div>
                                            <label style="font-size:10px;font-weight:700;color:var(--ios-secondary);display:block;margin-bottom:4px;text-transform:uppercase;letter-spacing:0.3px;">Mode</label>
                                            <select id="bulk-samename-mode" class="form-control" style="font-size:12px;padding:7px 8px;border-radius:8px;height:auto;">
                                                <option value="number">1 2 3…</option>
                                                <option value="alpha">a b c…</option>
                                                <option value="ALPHA">A B C…</option>
                                            </select>
                                        </div>
                                        <button type="button" onclick="applyBulkSameName()"
                                            style="display:inline-flex;align-items:center;gap:5px;height:32px;padding:0 14px;background:#162440;color:#fff;border:none;border-radius:8px;font-size:12px;font-weight:600;cursor:pointer;white-space:nowrap;box-shadow:0 2px 8px rgba(22,36,64,0.3);align-self:flex-end;">
                                            <i class="fa fa-check"></i> Apply
                                        </button>
                                    </div>
                                    <div style="font-size:11px;color:var(--ios-secondary);margin-top:6px;opacity:0.75;">
                                        Alpha: a→z, then aa→az, ba→bz… &nbsp;|&nbsp; Leave base name empty to keep original names unchanged.
                                    </div>
                                </div>
                            </div>
                            <!-- Column headers -->
                            <div style="display:grid;grid-template-columns:1fr 20px 1fr 28px;gap:6px;align-items:center;padding:0 4px 6px;border-bottom:0.5px solid var(--ios-sep);margin-bottom:8px;">
                                <span style="font-size:10px;font-weight:700;color:var(--ios-secondary);text-transform:uppercase;letter-spacing:0.6px;">Original Name</span>
                                <span></span>
                                <span style="font-size:10px;font-weight:700;color:#C9A84C;text-transform:uppercase;letter-spacing:0.6px;">New Name</span>
                                <span></span>
                            </div>
                            <!-- File rows -->
                            <div id="bulk-rename-list" style="display:flex;flex-direction:column;gap:6px;padding-bottom:4px;"></div>
                        </div>
                        <!-- Footer -->
                        <div class="modal-footer" style="border-top:0.5px solid var(--ios-sep);padding:10px 18px;gap:8px;background:var(--ios-bg2);">
                            <span id="bulk-rename-status" style="font-size:11.5px;color:var(--ios-secondary);flex:1;text-align:left;line-height:1.4;"></span>
                            <button type="button" class="fm-btn fm-btn-outline" data-bs-dismiss="modal" style="height:34px;font-size:13px;padding:0 16px;">
                                <i class="fa fa-times"></i> Cancel
                            </button>
                            <button type="button" class="fm-btn fm-btn-primary" onclick="submitBulkRename()" style="height:34px;font-size:13px;padding:0 20px;">
                                <i class="fa fa-check"></i> Rename All
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Confirm Modal -->
            <script type="text/html" id="js-tpl-confirm">
                <div class="modal fade confirmDailog" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" id="confirmDailog-<%this.id%>">
                    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width:360px;margin:auto;">
                        <form class="modal-content" method="post" autocomplete="off" action="<%this.action%>" style="border-radius:14px;overflow:hidden;">
                            <!-- Header — matches rename modal style -->
                            <div style="display:flex;align-items:center;justify-content:space-between;padding:14px 16px;border-bottom:0.5px solid var(--ios-sep);background:var(--ios-bg2);">
                                <div style="display:flex;align-items:center;gap:8px;">
                                    <span style="display:inline-flex;align-items:center;justify-content:center;width:28px;height:28px;border-radius:7px;<% if (this.id == 1211) { %>background:rgba(34,197,94,0.12);<% } else { %>background:rgba(239,68,68,0.10);<% } %>">
                                        <% if (this.id == 1211) { %><i class="fa fa-cloud-download" style="color:#16A34A;font-size:12px;"></i><% } else { %><i class="fa fa-trash-o" style="color:#DC2626;font-size:12px;"></i><% } %>
                                    </span>
                                    <span style="font-size:15px;font-weight:700;color:var(--ios-label);"><%this.title%></span>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin:0;"></button>
                            </div>
                            <!-- Body -->
                            <div style="padding:16px;">
                                <p style="font-size:13.5px;color:var(--ios-secondary);margin:0;line-height:1.5;"><%this.content%></p>
                            </div>
                            <!-- Footer — flex buttons like rename modal -->
                            <div style="display:flex;gap:8px;padding:12px 16px;border-top:0.5px solid var(--ios-sep);background:var(--ios-bg2);">
                                <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
                                <button type="button" class="fm-btn fm-btn-outline" data-bs-dismiss="modal" style="flex:1;"><i class="fa fa-times"></i> <?php echo lng('Cancel') ?></button>
                                <button type="submit" class="fm-btn <% if (this.id == 1211) { %>fm-btn-primary<% } else { %>fm-btn-danger<% } %>" data-bs-dismiss="modal" style="flex:1;"><i class="fa fa-check"></i> <?php echo lng('Okay') ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </script>
        <?php
    }
    function fm_show_footer()
    {
        ?>
        </div>
        <?php print_external('js-jquery'); ?>
        <?php print_external('js-bootstrap'); ?>
        <?php print_external('js-jquery-datatables'); ?>
        <?php if (FM_USE_HIGHLIGHTJS && isset($_GET['view'])): ?>
            <?php print_external('js-highlightjs'); ?>
            <script>
                // highlight.js tokenizes the whole file synchronously on the main
                // thread — on a large file that's exactly what freezes/hangs the
                // page (especially on phones). Skip highlighting past a size cutoff
                // and just show plain text instead.
                (function () {
                    var HLJS_MAX_CHARS = 150000; // ~150KB of text
                    var blocks = document.querySelectorAll('pre.with-hljs code');
                    var tooBig = false;
                    blocks.forEach(function (b) {
                        if (b.textContent.length > HLJS_MAX_CHARS) tooBig = true;
                    });
                    if (tooBig) {
                        var note = document.createElement('div');
                        note.style.cssText = 'padding:8px 14px;font-size:12px;color:var(--ios-secondary,#3A4D6A);';
                        note.textContent = 'File is large — syntax highlighting skipped to keep this page responsive.';
                        blocks.forEach(function (b) {
                            var pre = b.closest('pre');
                            if (pre && pre.parentNode) pre.parentNode.insertBefore(note.cloneNode(true), pre);
                        });
                        var isHighlightingEnabled = false;
                    } else {
                        hljs.highlightAll();
                        var isHighlightingEnabled = true;
                    }
                })();
            </script>
        <?php endif; ?>
        <script>
            function template(html, options) {
                var re = /<\%([^\%>]+)?\%>/g,
                    reExp = /(^( )?(if|for|else|switch|case|break|{|}))(.*)?/g,
                    code = 'var r=[];\n',
                    cursor = 0,
                    match;
                var add = function(line, js) {
                    js ? (code += line.match(reExp) ? line + '\n' : 'r.push(' + line + ');\n') : (code += line != '' ? 'r.push("' + line.replace(/"/g, '\\"') + '");\n' : '');
                    return add
                }
                while (match = re.exec(html)) {
                    add(html.slice(cursor, match.index))(match[1], !0);
                    cursor = match.index + match[0].length
                }
                add(html.substr(cursor, html.length - cursor));
                code += 'return r.join("");';
                return new Function(code.replace(/[\r\t\n]/g, '')).apply(options)
            }
            // ── Rename modal helpers ──────────────────────────────────────
            var RN_INVALID = /[\/\\:*?"<>|\x00-\x1f]/;
            function rnUpdate(val) {
                var countEl = document.getElementById('rn-char-count');
                var warnEl  = document.getElementById('rn-warn');
                var btnEl   = document.getElementById('rn-submit-btn');
                if (countEl) countEl.textContent = val.length ? val.length + ' ch' : '';
                var bad = RN_INVALID.test(val) || val === '.' || val === '..';
                if (warnEl)  warnEl.style.display  = bad ? 'block' : 'none';
                if (btnEl)   btnEl.disabled = bad || val.trim() === '';
            }
            function rename(e, t) {
                if (!t) return;
                $("#js-rename-from").val(t);
                $("#js-rename-to").val(t);
                // Populate current-name chip
                var nameEl = document.getElementById('rn-current-name');
                var extEl  = document.getElementById('rn-ext-badge');
                var iconEl = document.getElementById('rn-icon');
                if (nameEl) nameEl.textContent = t;
                // Extension badge
                var dotIdx = t.lastIndexOf('.');
                var hasExt = dotIdx > 0 && dotIdx < t.length - 1;
                if (extEl) {
                    if (hasExt) {
                        extEl.textContent = t.substring(dotIdx + 1).toUpperCase();
                        extEl.style.display = '';
                    } else {
                        extEl.style.display = 'none';
                    }
                }
                // Icon: folder vs file type
                if (iconEl) {
                    var ext = hasExt ? t.substring(dotIdx + 1).toLowerCase() : '';
                    var ic = 'fa-file-o';
                    if (!hasExt)                                           ic = 'fa-folder-o';
                    else if (/jpg|jpeg|png|gif|webp|svg|bmp/.test(ext))   ic = 'fa-file-image-o';
                    else if (/mp4|mov|avi|mkv|webm/.test(ext))            ic = 'fa-file-video-o';
                    else if (/mp3|wav|flac|aac|ogg/.test(ext))            ic = 'fa-file-audio-o';
                    else if (/zip|tar|gz|rar|7z/.test(ext))               ic = 'fa-file-archive-o';
                    else if (/pdf/.test(ext))                              ic = 'fa-file-pdf-o';
                    else if (/doc|docx/.test(ext))                         ic = 'fa-file-word-o';
                    else if (/xls|xlsx/.test(ext))                         ic = 'fa-file-excel-o';
                    else if (/js|php|py|sh|css|html|ts|json/.test(ext))   ic = 'fa-file-code-o';
                    else if (/txt|md|log/.test(ext))                       ic = 'fa-file-text-o';
                    iconEl.className = 'fa ' + ic;
                    iconEl.style.color = hasExt ? '#C9A84C' : '#F59E0B';
                }
                // Reset warning & count
                rnUpdate(t);
                // Focus & select base name (without extension)
                $("#renameDailog").modal('show');
                setTimeout(function() {
                    var inp = document.getElementById('js-rename-to');
                    if (!inp) return;
                    inp.focus();
                    var selEnd = hasExt ? dotIdx : t.length;
                    try { inp.setSelectionRange(0, selEnd); } catch(e) {}
                }, 300);
            }
            // ===== BULK RENAME =====
            function openBulkRenameModal() {
                var checked = $('input[name="file[]"]:checked');
                if (checked.length === 0) return;
                var list = document.getElementById('bulk-rename-list');
                list.innerHTML = '';
                document.getElementById('bulk-rename-status').textContent = '';
                document.getElementById('bulk-rename-subtitle').textContent = checked.length + ' item' + (checked.length > 1 ? 's' : '') + ' selected';
                resetBulkPattern();
                checked.each(function() {
                    var original = $(this).val();
                    var isFolder = $(this).closest('tr').find('.fa-folder-o').length > 0;
                    var icon = isFolder ? 'fa-folder-o' : 'fa-file-o';
                    var row = document.createElement('div');
                    row.className = 'bulk-rename-row';
                    row.style.cssText = 'display:grid;grid-template-columns:1fr 18px 1fr 28px;gap:6px;align-items:center;';
                    row.innerHTML =
                        '<span style="font-size:12px;color:var(--ios-secondary);white-space:nowrap;overflow:hidden;text-overflow:ellipsis;padding:0 2px;" title="' + original + '">' +
                            '<i class="fa ' + icon + '" style="color:#C9A84C;margin-right:4px;font-size:11px;"></i>' + original +
                        '</span>' +
                        '<i class="fa fa-arrow-right" style="color:var(--ios-gray3);font-size:11px;text-align:center;"></i>' +
                        '<input type="text" class="form-control bulk-rename-input" data-original="' + original + '" value="' + original + '" ' +
                            'style="font-size:13px;padding:5px 9px;border-radius:7px;" autocomplete="off" spellcheck="false" ' +
                            'oninput="this.dataset.custom=\'1\';this.parentElement.querySelector(\'.bulk-rename-diff\').style.display=this.value!==this.getAttribute(\'data-orig\')?\'block\':\'none\'"' +
                            ' data-orig="' + original + '" data-custom="0">' +
                        '<span class="bulk-rename-diff" data-original="' + original + '" style="display:none;cursor:pointer;" title="Reset this name" ' +
                            'onclick="var i=this.previousElementSibling;i.value=i.getAttribute(\'data-original\');i.dataset.custom=\'0\';this.style.display=\'none\';">' +
                            '<i class="fa fa-undo" style="color:var(--ios-secondary);font-size:12px;"></i>' +
                        '</span>';
                    list.appendChild(row);
                });
                var modal = new bootstrap.Modal(document.getElementById('bulkRenameModal'));
                modal.show();
            }
            function toggleBulkNumbering() {
                var panel = document.getElementById('bulk-num-panel');
                var btn = document.getElementById('btn-numbering-toggle');
                var isOpen = panel.style.display !== 'none';
                panel.style.display = isOpen ? 'none' : 'block';
                btn.style.background = isOpen ? 'rgba(201,168,76,0.08)' : 'rgba(201,168,76,0.16)';
                btn.style.fontWeight = isOpen ? '600' : '700';
            }
            function resetBulkPattern() {
                document.getElementById('bulk-find').value = '';
                document.getElementById('bulk-replace').value = '';
                document.getElementById('bulk-prefix').value = '';
                document.getElementById('bulk-suffix').value = '';
                document.getElementById('bulk-case').value = '';
                document.getElementById('bulk-num-panel').style.display = 'none';
                document.getElementById('btn-numbering-toggle').style.background = 'rgba(201,168,76,0.08)';
                document.getElementById('bulk-num-start').value = '1';
                document.getElementById('bulk-num-step').value = '1';
                document.getElementById('bulk-num-pos').value = 'suffix';
                if (document.getElementById('bulk-num-pad')) document.getElementById('bulk-num-pad').value = '0';
            }
            function _applyPatternToName(orig, find, replace, prefix, suffix, caseMode, numEnable, numStart, numStep, numPos, index) {
                var ext = '';
                var base = orig;
                var dot = orig.lastIndexOf('.');
                // Only split extension for files (not folders — no dot or dot at start)
                if (dot > 0) { base = orig.substring(0, dot); ext = orig.substring(dot); }
                // Find & Replace (on full name including ext)
                var full = orig;
                if (find !== '') full = full.split(find).join(replace);
                // Re-split after find/replace
                dot = full.lastIndexOf('.');
                if (dot > 0) { base = full.substring(0, dot); ext = full.substring(dot); }
                else { base = full; ext = ''; }
                // Case transform (on base only)
                if (caseMode === 'lower')  base = base.toLowerCase();
                else if (caseMode === 'upper') base = base.toUpperCase();
                else if (caseMode === 'title') base = base.replace(/\b\w/g, function(c){ return c.toUpperCase(); });
                else if (caseMode === 'snake') base = base.replace(/[\s\-]+/g, '_').toLowerCase();
                else if (caseMode === 'kebab')  base = base.replace(/[\s_]+/g, '-').toLowerCase();
                // Prefix / Suffix
                if (prefix !== '') base = prefix + base;
                if (suffix !== '') base = base + suffix;
                // Auto-number
                if (numEnable) {
                    var num = numStart + index * numStep;
                    if (numPos === 'prefix') base = String(num) + '_' + base;
                    else base = base + '_' + String(num);
                }
                return base + ext;
            }
            function applyBulkPattern() {
                var find      = document.getElementById('bulk-find').value;
                var replace   = document.getElementById('bulk-replace').value;
                var prefix    = document.getElementById('bulk-prefix').value;
                var suffix    = document.getElementById('bulk-suffix').value;
                var caseMode  = document.getElementById('bulk-case').value;
                var numEnable = document.getElementById('bulk-num-panel').style.display !== 'none';
                var numStart  = parseInt(document.getElementById('bulk-num-start').value) || 1;
                var numStep   = parseInt(document.getElementById('bulk-num-step').value)  || 1;
                var numPos    = document.getElementById('bulk-num-pos').value;
                var inputs = document.querySelectorAll('.bulk-rename-input');
                var skipped = 0;
                inputs.forEach(function(input, idx) {
                    // Don't clobber a name the user hand-edited in this row — leave it alone.
                    if (input.dataset.custom === '1') { skipped++; return; }
                    var orig = input.getAttribute('data-original');
                    input.value = _applyPatternToName(orig, find, replace, prefix, suffix, caseMode, numEnable, numStart, numStep, numPos, idx);
                    var diffBtn = input.nextElementSibling;
                    if (diffBtn) diffBtn.style.display = (input.value !== orig) ? 'block' : 'none';
                    input.style.background = '';
                    input.style.borderColor = '';
                });
                var statusEl = document.getElementById('bulk-rename-status');
                if (statusEl) statusEl.textContent = skipped > 0 ? (skipped + ' manually-edited name' + (skipped > 1 ? 's' : '') + ' left as-is') : '';
            }
            // ── Alpha sequence helpers ─────────────────────────────────────────
            // Convert a base-26 index (0-based) to letters: 0→a, 25→z, 26→aa, 51→az, 52→ba…
            function _idxToAlpha(n, upper) {
                if (n < 0) n = 0;
                var result = '';
                do {
                    result = String.fromCharCode(97 + (n % 26)) + result;
                    n = Math.floor(n / 26) - 1;
                } while (n >= 0);
                return upper ? result.toUpperCase() : result;
            }
            // Convert a start string like "a", "aa", "b" to a 0-based index
            function _alphaToIdx(str) {
                str = (str || 'a').toLowerCase().replace(/[^a-z]/g, '') || 'a';
                var idx = 0;
                for (var i = 0; i < str.length; i++) {
                    idx = idx * 26 + (str.charCodeAt(i) - 96);
                }
                return idx - 1; // 0-based: a=0, b=1 … z=25, aa=26…
            }
            function applyBulkSameName() {
                var baseName  = document.getElementById('bulk-samename-input').value.trim();
                var startRaw  = document.getElementById('bulk-samename-start').value.trim() || '1';
                var mode      = document.getElementById('bulk-samename-mode').value; // 'number','alpha','ALPHA'
                var inputs    = document.querySelectorAll('.bulk-rename-input');
                if (inputs.length === 0) return;
                var isAlpha  = mode === 'alpha' || mode === 'ALPHA';
                var isUpper  = mode === 'ALPHA';
                // Determine start index
                var startIdx;
                if (isAlpha) {
                    startIdx = _alphaToIdx(startRaw);
                } else {
                    startIdx = parseInt(startRaw, 10);
                    if (isNaN(startIdx)) startIdx = 1;
                }
                inputs.forEach(function(input, idx) {
                    if (input.dataset.custom === '1') return; // keep hand-edited names untouched
                    var orig = input.getAttribute('data-original');
                    var ext  = '';
                    var dot  = orig.lastIndexOf('.');
                    if (dot > 0) ext = orig.substring(dot);
                    // Build sequence token
                    var seq;
                    if (isAlpha) {
                        seq = _idxToAlpha(startIdx + idx, isUpper);
                    } else {
                        seq = String(startIdx + idx);
                    }
                    // Build new name
                    var newName;
                    if (baseName) {
                        newName = baseName + '_' + seq + ext;
                    } else {
                        // No base name: keep original base, replace/add sequence suffix
                        var origBase = dot > 0 ? orig.substring(0, dot) : orig;
                        newName = origBase + '_' + seq + ext;
                    }
                    input.value = newName;
                    var diffBtn = input.nextElementSibling;
                    if (diffBtn) diffBtn.style.display = (newName !== orig) ? 'block' : 'none';
                    input.style.background   = '';
                    input.style.borderColor  = '';
                });
            }
            function submitBulkRename() {
                var inputs = document.querySelectorAll('.bulk-rename-input');
                var tasks = [], errors = [];
                inputs.forEach(function(input) {
                    var from = input.getAttribute('data-original');
                    var to   = input.value.trim();
                    if (to === '') { errors.push('"' + from + '" has empty name'); return; }
                    if (!/^[^\/\\:*?"<>|]+$/.test(to)) { errors.push('"' + to + '" has invalid characters'); return; }
                    if (from !== to) tasks.push({ from: from, to: to });
                });
                if (errors.length > 0) {
                    var s = document.getElementById('bulk-rename-status');
                    s.textContent = '⚠ ' + errors[0];
                    s.style.color = '#DC2626';
                    return;
                }
                if (tasks.length === 0) {
                    bootstrap.Modal.getInstance(document.getElementById('bulkRenameModal')).hide();
                    return;
                }
                var status = document.getElementById('bulk-rename-status');
                status.style.color = '#C9A84C';
                status.textContent = 'Renaming 0/' + tasks.length + '…';
                var done = 0, failed = [];
                var BATCH = 5; // parallel requests per wave
                function runBatch(startIdx) {
                    if (startIdx >= tasks.length) {
                        if (failed.length === 0) {
                            status.textContent = 'All ' + tasks.length + ' renamed successfully!';
                            status.style.color = '#16A34A';
                            setTimeout(function() {
                                bootstrap.Modal.getInstance(document.getElementById('bulkRenameModal')).hide();
                                location.reload();
                            }, 700);
                        } else {
                            status.textContent = '⚠ ' + failed.length + ' failed: ' + failed.join(', ');
                            status.style.color = '#DC2626';
                        }
                        return;
                    }
                    var batch = tasks.slice(startIdx, startIdx + BATCH);
                    var pending = batch.length;
                    batch.forEach(function(t) {
                        $.post('', { rename_from: t.from, rename_to: t.to, p: '<?php echo fm_enc(FM_PATH) ?>', token: window.csrf })
                            .done(function() { done++; })
                            .fail(function() { failed.push(t.from); })
                            .always(function() {
                                pending--;
                                status.textContent = 'Renaming ' + done + '/' + tasks.length + '…';
                                if (pending === 0) runBatch(startIdx + BATCH);
                            });
                    });
                }
                runBatch(0);
            }
            // ===== END BULK RENAME =====
            // ===== BULK DOWNLOAD =====
            function bulkDownload() {
                var checked = $('input[name="file[]"]:checked');
                if (checked.length === 0) return;
                var count  = checked.length;
                var label  = count === 1
                    ? '"' + checked.first().val() + '"'
                    : count + ' items';
                // ── Create ONE persistent toast pill ──────────────────────
                var container = document.getElementById('snackbar');
                var pill = document.createElement('span');
                pill.className = 'fm-toast-pill';
                pill.textContent = 'Preparing download for ' + label + '...';
                container.appendChild(pill);
                function setPillText(txt) { pill.textContent = txt; }
                function dismissPill(delay) {
                    setTimeout(function() {
                        pill.classList.add('fm-toast-out');
                        setTimeout(function() {
                            if (pill.parentNode) pill.parentNode.removeChild(pill);
                        }, 520);
                    }, delay || 0);
                }
                function pillError(msg) {
                    pill.style.background = 'rgba(185,28,28,0.95)';
                    pill.style.boxShadow  = '0 4px 20px rgba(185,28,28,0.4)';
                    setPillText(msg);
                    dismissPill(4000);
                }
                // ── Build FormData ────────────────────────────────────────
                var fd = new FormData();
                fd.append('token',   window.csrf);
                fd.append('bulk_dl', '1');
                checked.each(function() { fd.append('file[]', $(this).val()); });
                // ── 120-second timeout ────────────────────────────────────
                var TIMEOUT_MS = 120000;
                var timedOut   = false;
                var timeoutId  = setTimeout(function() {
                    timedOut = true;
                    pillError('Download timed out after 120 s. Try fewer or smaller files.');
                }, TIMEOUT_MS);
                // ── Send via fetch ────────────────────────────────────────
                var url = '?dir=<?php echo fm_enc(FM_PATH); ?>';
                fetch(url, { method: 'POST', body: fd })
                    .then(function(res) {
                        if (timedOut) return;
                        clearTimeout(timeoutId);
                        var ct = res.headers.get('Content-Type') || '';
                        // Server returned a JSON error
                        if (!res.ok || ct.indexOf('application/json') !== -1) {
                            return res.json().then(function(j) {
                                pillError('Download failed: ' + (j.error || 'Unknown error'));
                            }).catch(function() {
                                pillError('Download failed (HTTP ' + res.status + ').');
                            });
                        }
                        // Success — read the blob and trigger browser save dialog
                        return res.blob().then(function(blob) {
                            if (timedOut) return;
                            // Update toast text in-place
                            pill.style.background = '';
                            setPillText('Download started for ' + label);
                            dismissPill(3000);
                            // Trigger download
                            var a   = document.createElement('a');
                            var obj = URL.createObjectURL(blob);
                            // Try to get filename from Content-Disposition header
                            var cd  = res.headers.get('Content-Disposition') || '';
                            var fnMatch = cd.match(/filename="?([^";\n]+)"?/i);
                            a.download = fnMatch ? fnMatch[1].trim() : ('download_' + Date.now() + '.zip');
                            a.href = obj;
                            a.style.display = 'none';
                            document.body.appendChild(a);
                            a.click();
                            setTimeout(function() {
                                URL.revokeObjectURL(obj);
                                try { document.body.removeChild(a); } catch(e) {}
                            }, 2000);
                        });
                    })
                    .catch(function(err) {
                        if (timedOut) return;
                        clearTimeout(timeoutId);
                        pillError('Network error: ' + (err.message || 'Could not reach server.'));
                    });
            }
            // ===== END BULK DOWNLOAD =====
            function change_checkboxes(e, t) {
                for (var n = e.length - 1; n >= 0; n--) e[n].checked = "boolean" == typeof t ? t : !e[n].checked;
                updateBulkButtons();
            }
            function get_checkboxes() {
                for (var e = document.getElementsByName("file[]"), t = [], n = e.length - 1; n >= 0; n--)(e[n].type = "checkbox") && t.push(e[n]);
                return t
            }
            function select_all() {
                change_checkboxes(get_checkboxes(), !0)
            }
            function unselect_all() {
                change_checkboxes(get_checkboxes(), !1)
            }
            function invert_all() {
                change_checkboxes(get_checkboxes())
            }
            function hasSelection() {
                return $('input[name="file[]"]:checked').length > 0;
            }
            function hasMultiSelection() {
                var checked = $('input[name="file[]"]:checked');
                if (checked.length > 1) return true;
                if (checked.length === 1) {
                    // A single folder still needs the bulk toolbar (e.g. to zip/copy/rename that one folder)
                    return checked.closest('tr').find('.fa-folder-o').length > 0;
                }
                return false;
            }
            function openZipPasswordModal() {
                document.getElementById('zip-password-input').value = '';
                var note = document.getElementById('zip-password-support-note');
                if (note) note.style.display = window.fmZipEncryptionSupported ? 'none' : 'block';
                var modal = new bootstrap.Modal(document.getElementById('zipPasswordModal'));
                modal.show();
            }
            function submitZipWithPassword() {
                var pwd = document.getElementById('zip-password-input').value;
                document.getElementById('zip-password-field').value = pwd;
                if (!confirm('<?php echo lng('Create archive?'); ?>')) return;
                document.getElementById('a-zip').click();
            }
            var __pendingUnzipFormId = null;
            function openUnzipPasswordModal(formId, actionLabel) {
                __pendingUnzipFormId = formId;
                document.getElementById('unzip-password-input').value = '';
                document.getElementById('unzipPasswordModalLabel').textContent = actionLabel;
                document.getElementById('unzip-password-input-label').textContent = 'Password (if protected) — ' + actionLabel;
                document.getElementById('unzip-password-submit-btn').textContent = actionLabel;
                var modal = new bootstrap.Modal(document.getElementById('unzipPasswordModal'));
                modal.show();
                setTimeout(function() { document.getElementById('unzip-password-input').focus(); }, 300);
            }
            function submitUnzipWithPassword() {
                if (!__pendingUnzipFormId) return;
                var form = document.getElementById(__pendingUnzipFormId);
                if (!form) return;
                var pwd = document.getElementById('unzip-password-input').value;
                var pwdField = form.querySelector('.js-unzip-password-field');
                if (pwdField) pwdField.value = pwd;
                form.submit();
            }
            function checkbox_toggle() {
                var e = get_checkboxes();
                e.push(this), change_checkboxes(e)
            }
            // Central bulk button state updater — called by ALL selection changes
            function updateBulkButtons() {
                var checkedEls = $('input[name="file[]"]:checked');
                var checked = checkedEls.length;
                var countBadge = document.getElementById('bulk-sel-count');
                var enable = hasMultiSelection();
                if (enable) {
                    $('.bulk-requires-selection').removeClass('bulk-disabled');
                    if (countBadge) {
                        countBadge.textContent = checked + ' selected';
                        countBadge.classList.add('visible');
                    }
                } else {
                    $('.bulk-requires-selection').addClass('bulk-disabled');
                    if (countBadge) {
                        if (checked === 1) { countBadge.textContent = '1 selected'; countBadge.classList.add('visible'); }
                        else countBadge.classList.remove('visible');
                    }
                }
            }
            // Create file backup with .bck
            function backup(e, t) {
                var n = new XMLHttpRequest,
                    a = "path=" + e + "&file=" + t + "&token=" + window.csrf + "&type=backup&ajax=true";
                return n.open("POST", "", !0), n.setRequestHeader("Content-type", "application/x-www-form-urlencoded"), n.onreadystatechange = function() {
                    4 == n.readyState && 200 == n.status && toast(n.responseText)
                }, n.send(a), !1
            }
            // Toast message — 1.5 second auto-dismiss
            function toast(txt, type) {
                var container = document.getElementById('snackbar');
                var pill = document.createElement('span');
                pill.className = 'fm-toast-pill';
                // Strip any HTML tags — show plain text only
                var tmp = document.createElement('div');
                tmp.innerHTML = txt;
                pill.textContent = tmp.textContent || tmp.innerText || txt;
                if (type === 'success') {
                    pill.style.background = 'rgba(22,163,74,0.95)';
                    pill.style.boxShadow  = '0 4px 20px rgba(22,163,74,0.4)';
                } else if (type === 'error') {
                    pill.style.background = 'rgba(185,28,28,0.95)';
                    pill.style.boxShadow  = '0 4px 20px rgba(185,28,28,0.4)';
                }
                container.appendChild(pill);
                setTimeout(function() {
                    pill.classList.add('fm-toast-out');
                    setTimeout(function() {
                        if (pill.parentNode) pill.parentNode.removeChild(pill);
                    }, 520);
                }, 3000);
            }
            // Save file
            function edit_save(e, t) {
                var n = "ace" == t ? editor.getSession().getValue() : document.getElementById("normal-editor").value;
                if (typeof n !== 'undefined' && n !== null) {
                    var data = {
                        ajax: true,
                        content: n,
                        type: 'save',
                        token: window.csrf
                    };
                    $.ajax({
                        type: "POST",
                        url: window.location,
                        data: JSON.stringify(data),
                        contentType: "application/json; charset=utf-8",
                        success: function(mes) {
                            toast("Saved Successfully");
                            window.onbeforeunload = function() { return; };
                        },
                        failure: function(mes) {
                            toast("Error: try again");
                        },
                        error: function(mes) {
                            var errMsg = mes.responseText ? mes.responseText.replace(/(<([^>]+)>)/gi, '').trim() : 'Error: try again';
                            toast(errMsg || 'Error: try again', 'error');
                        }
                    });
                }
            }
            function show_new_pwd() {
                $(".js-new-pwd").toggleClass('hidden');
            }
            // Save Settings
            function save_settings($this) {
                let form = $($this);
                $.ajax({
                    type: form.attr('method'),
                    url: form.attr('action'),
                    data: form.serialize() + "&token=" + window.csrf + "&ajax=" + true,
                    success: function(data) {
                        if (data) {
                            window.location.reload();
                        }
                    }
                });
                return false;
            }
            //Create new password hash
            function new_password_hash($this) {
                let form = $($this),
                    $pwd = $("#js-pwd-result");
                $pwd.val('');
                $.ajax({
                    type: form.attr('method'),
                    url: form.attr('action'),
                    data: form.serialize() + "&token=" + window.csrf + "&ajax=" + true,
                    success: function(data) {
                        if (data) {
                            $pwd.val(data);
                        }
                    }
                });
                return false;
            }
            // Upload files using URL
            function upload_from_url($this) {
                var form = $($this);
                var urlInput  = form.find('input[name="uploadurl"]');
                var submitBtn = $('#url-upload-btn');
                var spinner   = $('#url-upload-spinner');
                var resultWrapper = $('#js-url-upload__list');
                var url = urlInput.val().trim();
                if (!url) return false;
                // UI: loading state
                urlInput.prop('disabled', true);
                submitBtn.hide();
                spinner.css('display', 'inline-flex');
                resultWrapper.empty();
                $.ajax({
                    type: 'POST',
                    url: window.location.href.split('?')[0] + '?dir=' + encodeURIComponent($('#fm-path').val()) + '&ajax=true',
                    data: {
                        type:      'upload',
                        uploadurl: url,
                        token:     window.csrf,
                        ajax:      true
                    },
                    timeout: 130000,
                    success: function(raw) {
                        var data;
                        try {
                            var jsonStart = raw.indexOf('{');
                            data = jsonStart >= 0 ? JSON.parse(raw.slice(jsonStart)) : null;
                        } catch(e) {
                            data = null;
                        }
                        if (data && data.done) {
                            var sizeStr = data.done.size ? ' (' + formatBytes(data.done.size) + ')' : '';
                            resultWrapper.html(
                                '<div style="display:flex;align-items:center;gap:10px;padding:10px 14px;background:rgba(34,197,94,0.08);border:1px solid rgba(34,197,94,0.2);border-radius:10px;margin-top:8px;">' +
                                '<i class="fa fa-check-circle" style="color:#16A34A;font-size:16px;flex-shrink:0;"></i>' +
                                '<span style="font-size:13.5px;font-weight:600;color:#15803D;">Uploaded: <b>' + fm_esc(data.done.name) + '</b>' + sizeStr + '</span>' +
                                '</div>'
                            );
                            urlInput.val('');
                            setTimeout(function() { location.reload(); }, 1500);
                        } else {
                            var msg = (data && data.fail && data.fail.message) ? data.fail.message : 'Upload failed. Check the URL and try again.';
                            resultWrapper.html(
                                '<div style="display:flex;align-items:center;gap:10px;padding:10px 14px;background:rgba(239,68,68,0.07);border:1px solid rgba(239,68,68,0.2);border-radius:10px;margin-top:8px;">' +
                                '<i class="fa fa-times-circle" style="color:#DC2626;font-size:16px;flex-shrink:0;"></i>' +
                                '<span style="font-size:13.5px;font-weight:600;color:#DC2626;">' + fm_esc(msg) + '</span>' +
                                '</div>'
                            );
                        }
                    },
                    error: function(xhr, status) {
                        var msg = status === 'timeout'
                            ? 'Request timed out. The file may be too large or the server is slow.'
                            : 'Network error (' + (xhr.status || status) + '). Please try again.';
                        resultWrapper.html(
                            '<div style="display:flex;align-items:center;gap:10px;padding:10px 14px;background:rgba(239,68,68,0.07);border:1px solid rgba(239,68,68,0.2);border-radius:10px;margin-top:8px;">' +
                            '<i class="fa fa-exclamation-triangle" style="color:#DC2626;font-size:16px;flex-shrink:0;"></i>' +
                            '<span style="font-size:13.5px;font-weight:600;color:#DC2626;">' + fm_esc(msg) + '</span>' +
                            '</div>'
                        );
                    },
                    complete: function() {
                        urlInput.prop('disabled', false);
                        submitBtn.show();
                        spinner.hide();
                    }
                });
                return false;
            }
            function formatBytes(bytes) {
                if (!bytes) return '';
                var units = ['B','KB','MB','GB'];
                var i = Math.floor(Math.log(bytes) / Math.log(1024));
                return (bytes / Math.pow(1024, i)).toFixed(2) + ' ' + units[i];
            }
            function fm_esc(str) {
                return String(str).replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;').replace(/"/g,'&quot;');
            }
            // Search template
            function search_template(data) {
                var response = "";
                $.each(data, function(key, val) {
                    var safePath = fm_esc(val.path);
                    var safeName = fm_esc(val.name);
                    var hrefPath = encodeURIComponent(val.path);
                    var hrefName = encodeURIComponent(val.name);
                    response += `<li style="padding:10px 14px;border-bottom:0.5px solid var(--ios-sep);"><a href="?dir=${hrefPath}&view=${hrefName}" style="color:var(--ios-label)!important;font-weight:500;text-decoration:none;">${safePath}/${safeName}</a></li>`;
                });
                return response;
            }
            // Advance search
            function fm_search() {
                var searchTxt = $("input#advanced-search").val(),
                    searchWrapper = $("ul#search-wrapper"),
                    path = $("#js-search-modal").attr("href"),
                    _html = "",
                    $loader = $("div.lds-facebook");
                if (!!searchTxt && searchTxt.length > 2 && path) {
                    var data = {
                        ajax: true,
                        content: searchTxt,
                        path: path,
                        type: 'search',
                        token: window.csrf
                    };
                    $.ajax({
                        type: "POST",
                        url: window.location,
                        data: data,
                        beforeSend: function() {
                            searchWrapper.show().html('');
                            $loader.addClass('show-me');
                        },
                        success: function(data) {
                            $loader.removeClass('show-me');
                            data = JSON.parse(data);
                            if (data && data.length) {
                                _html = search_template(data);
                                searchWrapper.html(_html);
                            } else {
                                searchWrapper.html('<p class="m-2">No result found!<p>');
                            }
                        },
                        error: function(xhr) {
                            $loader.removeClass('show-me');
                            searchWrapper.html('<p class="m-2">ERROR: Try again later!</p>');
                        },
                        failure: function(mes) {
                            $loader.removeClass('show-me');
                            searchWrapper.html('<p class="m-2">ERROR: Try again later!</p>');
                        }
                    });
                } else {
                    searchWrapper.show().html('<p class="m-2">Please enter at least 3 characters.</p>');
                }
            }
            // action confirm dailog modal
            function confirmDailog(e, id = 0, title = "Action", content = "", action = null) {
                e.preventDefault();
                const tplObj = {
                    id,
                    title,
                    content: decodeURIComponent(content.replace(/\+/g, ' ')),
                    action
                };
                let tpl = $("#js-tpl-confirm").html();
                $(".modal.confirmDailog").remove();
                $('#wrapper').append(template(tpl, tplObj));
                const $confirmDailog = $("#confirmDailog-" + tplObj.id);
                $confirmDailog.modal('show');
                return false;
            }
            // on mouse hover image preview
            ! function(s) {
                s.previewImage = function(e) {
                    var o = s(document),
                        t = ".previewImage",
                        a = s.extend({
                            xOffset: 20,
                            yOffset: -20,
                            fadeIn: "fast",
                            css: {
                                padding: "5px",
                                border: "1px solid #cccccc",
                                "background-color": "#fff"
                            },
                            eventSelector: "[data-preview-image]",
                            dataKey: "previewImage",
                            overlayId: "preview-image-plugin-overlay"
                        }, e);
                    return o.off(t), o.on("mouseover" + t, a.eventSelector, function(e) {
                        s("p#" + a.overlayId).remove();
                        var o = s("<p>").attr("id", a.overlayId).css("position", "absolute").css("display", "none").append(s('<img class="c-preview-img">').attr("src", s(this).data(a.dataKey)));
                        a.css && o.css(a.css), s("body").append(o), o.css("top", e.pageY + a.yOffset + "px").css("left", e.pageX + a.xOffset + "px").fadeIn(a.fadeIn)
                    }), o.on("mouseout" + t, a.eventSelector, function() {
                        s("#" + a.overlayId).remove()
                    }), o.on("mousemove" + t, a.eventSelector, function(e) {
                        s("#" + a.overlayId).css("top", e.pageY + a.yOffset + "px").css("left", e.pageX + a.xOffset + "px")
                    }), this
                }, s.previewImage()
            }(jQuery);
            /* ===== HASH MODAL ===== */
            function showHashModal(filename) {
                document.getElementById('hash-filename-badge').textContent = filename;
                document.getElementById('hash-loading').style.display = '';
                document.getElementById('hash-results').style.display = 'none';
                document.getElementById('hash-error').style.display = 'none';
                var modal = new bootstrap.Modal(document.getElementById('hashModal'));
                modal.show();
                $.post('', {
                    ajax: true,
                    token: '<?php echo $_SESSION['token']; ?>',
                    type: 'hashes',
                    file: filename,
                    dir: '<?php echo fm_enc(FM_PATH); ?>'
                }, function(data) {
                    document.getElementById('hash-loading').style.display = 'none';
                    if (data.error) {
                        document.getElementById('hash-error').textContent = data.error;
                        document.getElementById('hash-error').style.display = '';
                        return;
                    }
                    document.getElementById('hv-md5').textContent    = data.md5    || '-';
                    document.getElementById('hv-sha1').textContent   = data.sha1   || '-';
                    document.getElementById('hv-sha256').textContent = data.sha256 || '-';
                    document.getElementById('hv-sha512').textContent = data.sha512 || '-';
                    document.getElementById('hash-results').style.display = '';
                }, 'json').fail(function(){
                    document.getElementById('hash-loading').style.display = 'none';
                    document.getElementById('hash-error').textContent = 'Server error computing hashes.';
                    document.getElementById('hash-error').style.display = '';
                });
            }
            function copyHash(id, btn) {
                var val = document.getElementById(id).textContent;
                if (!val) return;
                navigator.clipboard.writeText(val).then(function(){
                    var orig = btn.innerHTML;
                    btn.innerHTML = '<i class="fa fa-check"></i>';
                    setTimeout(function(){ btn.innerHTML = orig; }, 1200);
                });
            }
            /* ===== METADATA MODAL ===== */
            function showMetaModal(filename) {
                document.getElementById('meta-filename-badge').textContent = filename;
                document.getElementById('meta-loading').style.display = '';
                document.getElementById('meta-results').style.display = 'none';
                document.getElementById('meta-results').innerHTML = '';
                document.getElementById('meta-error').style.display = 'none';
                var modal = new bootstrap.Modal(document.getElementById('metaModal'));
                modal.show();
                $.post('', {
                    ajax: true,
                    token: '<?php echo $_SESSION['token']; ?>',
                    type: 'metadata',
                    file: filename,
                    dir: '<?php echo fm_enc(FM_PATH); ?>'
                }, function(data) {
                    document.getElementById('meta-loading').style.display = 'none';
                    if (data.error) {
                        document.getElementById('meta-error').textContent = data.error;
                        document.getElementById('meta-error').style.display = '';
                        return;
                    }
                    var labels = {
                        'filename':'Filename','extension':'Type','mime_type':'MIME Type',
                        'magic_bytes':'Magic Bytes','size_human':'Size','size_bytes':'Size (bytes)',
                        'perms_octal':'Octal','perms_symbolic':'Symbolic','special_flags':'Special Flags',
                        'world_readable':'World Readable','world_writable':'World Writable','world_exec':'World Executable',
                        'is_symlink':'Symlink',
                        'owner_name':'Owner','owner_uid':'Owner UID','group_name':'Group','group_gid':'Group GID',
                        'crc32':'CRC32','entropy':'Entropy',
                        'modified':'Modified','meta_changed':'Metadata Changed',
                        'inode':'Inode','hard_links':'Hard Links','device':'Device',
                        'image_width':'Width','image_height':'Height','image_type':'Image Type',
                        'gps_warning':'GPS Warning','exec_warning':'Exec Warning',
                        'exif_make':'Camera Make','exif_model':'Camera Model','exif_datetime':'Captured',
                        'exif_exposuretime':'Exposure','exif_fnumber':'Aperture','exif_isospeedratings':'ISO',
                        'exif_focallength':'Focal Length','exif_flash':'Flash','exif_software':'Software',
                        'exif_artist':'Artist','exif_copyright':'Copyright',
                        'exif_gpslatitude':'GPS Latitude','exif_gpslongitude':'GPS Longitude',
                    };
                    var groups = {
                        'Identity':    ['filename','extension','mime_type','magic_bytes','size_human','size_bytes'],
                        'Permissions': ['perms_octal','perms_symbolic','special_flags','world_readable','world_writable','world_exec','is_symlink'],
                        'Ownership':   ['owner_name','owner_uid','group_name','group_gid'],
                        'Integrity':   ['crc32','entropy'],
                        'Timestamps':  ['modified','meta_changed'],
                        'Filesystem':  ['inode','hard_links','device'],
                        'Image Info':  ['image_width','image_height','image_type'],
                        'Security Warnings': ['gps_warning','exec_warning'],
                        'EXIF Data':   Object.keys(labels).filter(function(k){return k.startsWith('exif_');}),
                    };
                    var groupIcons = {
                        'Identity':'fa-file-text-o','Permissions':'fa-lock','Ownership':'fa-user',
                        'Integrity':'fa-check-circle','Timestamps':'fa-clock-o','Filesystem':'fa-hdd-o',
                        'Image Info':'fa-picture-o','Security Warnings':'fa-exclamation-triangle','EXIF Data':'fa-camera',
                    };
                    var warnGroups = {'Security Warnings': true};
                    var html = '';
                    for (var g in groups) {
                        var rows = '';
                        groups[g].forEach(function(key){
                            if (data[key] !== undefined && data[key] !== null) {
                                var val = String(data[key]);
                                var valHtml = val;
                                if (key === 'perms_octal') valHtml = '<span style="font-family:monospace;font-weight:700;color:#C9A84C;background:rgba(201,168,76,0.10);padding:2px 8px;border-radius:5px;">' + val + '</span>';
                                else if (key === 'perms_symbolic') valHtml = '<span style="font-family:monospace;font-weight:600;color:#162440;background:rgba(22,36,64,0.07);padding:2px 8px;border-radius:5px;letter-spacing:1px;">' + val + '</span>';
                                else if (key === 'special_flags') valHtml = val === 'None' ? '<span style="color:var(--ios-secondary);">None</span>' : '<span style="color:#dc2626;font-weight:700;">' + val + '</span>';
                                else if (key === 'world_writable' || key === 'world_exec') valHtml = val.startsWith('Yes') ? '<span style="color:#dc2626;font-weight:700;">' + val + '</span>' : '<span style="color:#16a34a;">No</span>';
                                else if (key === 'world_readable') valHtml = val === 'Yes' ? '<span style="color:#d97706;font-weight:600;">Yes</span>' : '<span style="color:#16a34a;">No</span>';
                                else if (key === 'is_symlink') valHtml = '<span style="color:' + (val==='Yes'?'#6366f1;font-weight:600':'var(--ios-secondary)') + ';">' + val + '</span>';
                                else if (key === 'entropy') valHtml = '<span style="font-family:monospace;font-size:12px;">' + val + '</span>';
                                else if (key === 'crc32') valHtml = '<span style="font-family:monospace;font-weight:600;color:#162440;letter-spacing:0.5px;">' + val + '</span>';
                                else if (key === 'magic_bytes') valHtml = '<span style="font-family:monospace;font-size:11px;color:#162440;">' + val + '</span>';
                                else if (key === 'gps_warning' || key === 'exec_warning') valHtml = '<span style="color:#dc2626;font-weight:600;">' + val + '</span>';
                                else if (key === 'size_bytes') valHtml = '<span style="font-family:monospace;">' + val + '</span>';
                                else if (key === 'size_human') valHtml = '<strong>' + val + '</strong>';
                                else if (key === 'modified' || key === 'meta_changed') valHtml = '<span style="font-family:monospace;font-size:11px;">' + val + '</span>';
                                rows += '<tr><td style="font-size:12px;font-weight:600;color:var(--ios-secondary);white-space:nowrap;padding:7px 12px;border-bottom:0.5px solid var(--ios-sep);width:38%;">' + (labels[key]||key) + '</td>' +
                                        '<td style="font-size:12px;color:var(--ios-label);padding:7px 12px;border-bottom:0.5px solid var(--ios-sep);">' + valHtml + '</td></tr>';
                            }
                        });
                        if (rows) {
                            var icon = groupIcons[g] || 'fa-folder-o';
                            var isWarn = warnGroups[g];
                            var accent = isWarn ? '#dc2626' : '#6366f1';
                            var iconBg  = isWarn ? 'rgba(220,38,38,0.10)' : 'rgba(99,102,241,0.10)';
                            html += '<div style="margin-bottom:16px;">' +
                                    '<div style="display:flex;align-items:center;gap:6px;margin-bottom:7px;padding:5px 8px;background:' + iconBg + ';border-radius:7px;width:fit-content;">' +
                                    '<i class="fa ' + icon + '" style="font-size:10px;color:' + accent + ';"></i>' +
                                    '<span style="font-size:11px;font-weight:700;color:' + accent + ';text-transform:uppercase;letter-spacing:0.7px;">' + g + '</span>' +
                                    '</div>' +
                                    '<table style="width:100%;border-collapse:collapse;border-radius:10px;overflow:hidden;border:0.5px solid var(--ios-sep);">' + rows + '</table></div>';
                        }
                    }
                    document.getElementById('meta-results').innerHTML = html || '<p style="color:var(--ios-secondary);font-size:13px;">No metadata available.</p>';
                    document.getElementById('meta-results').style.display = '';
                }, 'json').fail(function(){
                    document.getElementById('meta-loading').style.display = 'none';
                    document.getElementById('meta-error').textContent = 'Server error loading metadata.';
                    document.getElementById('meta-error').style.display = '';
                });
            }
            /* ===== HASH / META MODAL CSS injected inline ===== */
            (function(){
                var s = document.createElement('style');
                s.textContent = [
                    '.hash-row{display:flex;flex-direction:column;gap:4px;padding:10px 0;border-bottom:0.5px solid var(--ios-sep);}',
                    '.hash-row:last-of-type{border-bottom:none;}',
                    '.hash-label{display:flex;align-items:center;gap:6px;margin-bottom:2px;}',
                    '.hash-algo-badge{font-size:10px;font-weight:700;padding:2px 8px;border-radius:20px;letter-spacing:0.4px;}',
                    '.hash-md5   {background:rgba(234,179,8,0.12);color:#B45309;}',
                    '.hash-sha1  {background:rgba(59,130,246,0.12);color:#1D4ED8;}',
                    '.hash-sha256{background:rgba(34,197,94,0.12);color:#15803D;}',
                    '.hash-sha512{background:rgba(201,168,76,0.12);color:#C9A84C;}',
                    '.hash-bits{font-size:10px;color:var(--ios-secondary);}',
                    '.hash-value-wrap{display:flex;align-items:center;gap:6px;background:var(--ios-fill);border-radius:7px;padding:6px 10px;border:0.5px solid var(--ios-sep);}',
                    '.hash-value{flex:1;font-family:monospace;font-size:11px;word-break:break-all;color:var(--ios-label);background:none;border:none;padding:0;}',
                    '.hash-copy-btn{flex-shrink:0;background:none;border:none;cursor:pointer;color:#C9A84C;font-size:12px;padding:2px 4px;}',
                    '.hash-copy-btn:hover{color:#162440;}',
                ].join('');
                document.head.appendChild(s);
            })();
            // Dom Ready Events
            $(document).ready(function() {
                // Profile dropdown arrow toggle
                var profileArrow = document.getElementById('profile-arrow');
                var profileDropdownEl = document.getElementById('navbarDropdownMenuLink-5');
                if (profileArrow && profileDropdownEl) {
                    profileDropdownEl.closest('.dropdown').addEventListener('show.bs.dropdown', function() {
                        profileArrow.style.transform = 'rotate(180deg)';
                    });
                    profileDropdownEl.closest('.dropdown').addEventListener('hide.bs.dropdown', function() {
                        profileArrow.style.transform = 'rotate(0deg)';
                    });
                }
                // dataTable init
                var $table = $('#main-table'),
                    tableLng = $table.find('th').length,
                    _targets = (tableLng >= 7) ? [0, tableLng - 3, tableLng - 2, tableLng - 1] : (tableLng == 6) ? [0, tableLng - 2, tableLng - 1] : (tableLng == 5) ? [0, tableLng - 1] : (tableLng == 4) ? [0, tableLng - 1] : [];
                mainTable = $('#main-table').DataTable({
                    paging: false,
                    info: false,
                    order: [],
                    columnDefs: [{
                        targets: _targets,
                        orderable: false
                    }]
                });
                // Bulk action buttons — disabled until something selected
                // Initial state
                updateBulkButtons();
                // Listen for native checkbox changes (covers direct clicks)
                $(document).on('change', 'input[name="file[]"], #js-select-all-items', function() {
                    setTimeout(updateBulkButtons, 10);
                });
                // filter table
                $('#search-addon').on('keyup', function() {
                    mainTable.search(this.value).draw();
                });
                $('#search-addon-mobile-input').on('keyup', function() {
                    mainTable.search(this.value).draw();
                });
                $("input#advanced-search").on('keyup', function(e) {
                    if (e.keyCode === 13) {
                        fm_search();
                    }
                });
                $('#search-addon3').on('click', function() {
                    fm_search();
                });
                // Reset search wrapper when modal closes
                $('#searchModal').on('hidden.bs.modal', function() {
                    $("ul#search-wrapper").hide().html('');
                    $("input#advanced-search").val('');
                });
                //upload nav tabs
                $(".fm-upload-wrapper .card-header").on("click", 'a.upload-tab-link', function(e) {
                    e.preventDefault();
                    let $this = $(this);
                    let target = $this.data('target');
                    $(".fm-upload-wrapper a.upload-tab-link").each(function() {
                        $(this).css({'color':'var(--ios-secondary)','background':'transparent','font-weight':'500'});
                    });
                    $this.css({'color':'#C9A84C','background':'rgba(201,168,76,0.11)','font-weight':'600'});
                    $(".fm-upload-wrapper .card-tabs-container").hide();
                    $(target).show();
                });
            });
        </script>
        <?php if (isset($_GET['edit']) && isset($_GET['env']) && FM_EDIT_FILE && !FM_READONLY):
            $ext = pathinfo($_GET["edit"], PATHINFO_EXTENSION);
            $ext =  $ext == "js" ? "javascript" :  $ext;
        ?>
            <?php print_external('js-ace'); ?>
            <script>
                var editor = ace.edit("editor");
                editor.$blockScrolling = Infinity;
                editor.getSession().setMode({
                    path: "ace/mode/<?php echo $ext; ?>",
                    inline: true
                });
                editor.setShowPrintMargin(false);
                editor.setOption("useWorker", false);
                /* Force monospace — counteract the global Noto Sans font override */
                editor.setOptions({
                    fontFamily: "ui-monospace,'SF Mono','JetBrains Mono','Cascadia Mono','Consolas','Monaco',monospace",
                    fontSize: "14px"
                });
                /* ── Backspace / Delete fix ──────────────────────────────
                   Override both commands using the proper Ace Range API so
                   undo history works and ONLY the intended character is
                   removed — no pair-deletion side-effects.
                ─────────────────────────────────────────────────────── */
                var AceRange = ace.require("ace/range").Range;
                editor.commands.addCommand({
                    name: "backspace",
                    bindKey: { win: "Backspace", mac: "Backspace" },
                    exec: function(ed) {
                        var sel = ed.getSelection();
                        if (!sel.isEmpty()) {
                            ed.remove("left");
                            return;
                        }
                        var pos = ed.getCursorPosition();
                        if (pos.column === 0 && pos.row === 0) return;
                        var range;
                        if (pos.column === 0) {
                            var prevLen = ed.session.getLine(pos.row - 1).length;
                            range = new AceRange(pos.row - 1, prevLen, pos.row, 0);
                        } else {
                            range = new AceRange(pos.row, pos.column - 1, pos.row, pos.column);
                        }
                        ed.session.remove(range);
                        ed.clearSelection();
                    },
                    readOnly: false
                });
                editor.commands.addCommand({
                    name: "del",
                    bindKey: { win: "Delete", mac: "Delete|Shift-Delete" },
                    exec: function(ed) {
                        var sel = ed.getSelection();
                        if (!sel.isEmpty()) {
                            ed.remove("right");
                            return;
                        }
                        var pos  = ed.getCursorPosition();
                        var line = ed.session.getLine(pos.row);
                        var range;
                        if (pos.column === line.length) {
                            if (pos.row >= ed.session.getLength() - 1) return;
                            range = new AceRange(pos.row, pos.column, pos.row + 1, 0);
                        } else {
                            range = new AceRange(pos.row, pos.column, pos.row, pos.column + 1);
                        }
                        ed.session.remove(range);
                        ed.clearSelection();
                    },
                    readOnly: false
                });
                /* Single resize listener — replaces the duplicate in the echo block */
                window.addEventListener("resize", function() { editor.resize(); });
                setTimeout(function() { editor.resize(true); }, 80);
                function ace_commend(cmd) {
                    editor.commands.exec(cmd, editor);
                }
                editor.commands.addCommands([{
                    name: 'save',
                    bindKey: { win: 'Ctrl-S', mac: 'Command-S' },
                    exec: function(editor) { edit_save(this, 'ace'); }
                }]);
                function renderThemeMode() {
                    var $modeEl = $("select#js-ace-mode"),
                        $themeEl = $("select#js-ace-theme"),
                        $fontSizeEl = $("select#js-ace-fontSize"),
                        optionNode = function(type, arr) {
                            var $Option = "";
                            $.each(arr, function(i, val) {
                                $Option += "<option value='" + type + i + "'>" + val + "</option>";
                            });
                            return $Option;
                        },
                        _data = {
                            "aceTheme": {
                                "bright": {
                                    "chrome": "Chrome",
                                    "clouds": "Clouds",
                                    "crimson_editor": "Crimson Editor",
                                    "dawn": "Dawn",
                                    "dreamweaver": "Dreamweaver",
                                    "eclipse": "Eclipse",
                                    "github": "GitHub",
                                    "iplastic": "IPlastic",
                                    "solarized_light": "Solarized Light",
                                    "textmate": "TextMate",
                                    "tomorrow": "Tomorrow",
                                    "xcode": "XCode",
                                    "kuroir": "Kuroir",
                                    "katzenmilch": "KatzenMilch",
                                    "sqlserver": "SQL Server"
                                },
                                "dark": {
                                    "ambiance": "Ambiance",
                                    "chaos": "Chaos",
                                    "clouds_midnight": "Clouds Midnight",
                                    "dracula": "Dracula",
                                    "cobalt": "Cobalt",
                                    "gruvbox": "Gruvbox",
                                    "gob": "Green on Black",
                                    "idle_fingers": "idle Fingers",
                                    "kr_theme": "krTheme",
                                    "merbivore": "Merbivore",
                                    "merbivore_soft": "Merbivore Soft",
                                    "mono_industrial": "Mono Industrial",
                                    "monokai": "Monokai",
                                    "pastel_on_dark": "Pastel on dark",
                                    "solarized_dark": "Solarized Dark",
                                    "terminal": "Terminal",
                                    "tomorrow_night": "Tomorrow Night",
                                    "tomorrow_night_blue": "Tomorrow Night Blue",
                                    "tomorrow_night_bright": "Tomorrow Night Bright",
                                    "tomorrow_night_eighties": "Tomorrow Night 80s",
                                    "twilight": "Twilight",
                                    "vibrant_ink": "Vibrant Ink"
                                }
                            },
                            "aceMode": {
                                "javascript": "JavaScript",
                                "abap": "ABAP",
                                "abc": "ABC",
                                "actionscript": "ActionScript",
                                "ada": "ADA",
                                "apache_conf": "Apache Conf",
                                "asciidoc": "AsciiDoc",
                                "asl": "ASL",
                                "assembly_x86": "Assembly x86",
                                "autohotkey": "AutoHotKey",
                                "apex": "Apex",
                                "batchfile": "BatchFile",
                                "bro": "Bro",
                                "c_cpp": "C and C++",
                                "c9search": "C9Search",
                                "cirru": "Cirru",
                                "clojure": "Clojure",
                                "cobol": "Cobol",
                                "coffee": "CoffeeScript",
                                "coldfusion": "ColdFusion",
                                "csharp": "C#",
                                "csound_document": "Csound Document",
                                "csound_orchestra": "Csound",
                                "csound_score": "Csound Score",
                                "css": "CSS",
                                "curly": "Curly",
                                "d": "D",
                                "dart": "Dart",
                                "diff": "Diff",
                                "dockerfile": "Dockerfile",
                                "dot": "Dot",
                                "drools": "Drools",
                                "edifact": "Edifact",
                                "eiffel": "Eiffel",
                                "ejs": "EJS",
                                "elixir": "Elixir",
                                "elm": "Elm",
                                "erlang": "Erlang",
                                "forth": "Forth",
                                "fortran": "Fortran",
                                "fsharp": "FSharp",
                                "fsl": "FSL",
                                "ftl": "FreeMarker",
                                "gcode": "Gcode",
                                "gherkin": "Gherkin",
                                "gitignore": "Gitignore",
                                "glsl": "Glsl",
                                "gobstones": "Gobstones",
                                "golang": "Go",
                                "graphqlschema": "GraphQLSchema",
                                "groovy": "Groovy",
                                "haml": "HAML",
                                "handlebars": "Handlebars",
                                "haskell": "Haskell",
                                "haskell_cabal": "Haskell Cabal",
                                "haxe": "haXe",
                                "hjson": "Hjson",
                                "html": "HTML",
                                "html_elixir": "HTML (Elixir)",
                                "html_ruby": "HTML (Ruby)",
                                "ini": "INI",
                                "io": "Io",
                                "jack": "Jack",
                                "jade": "Jade",
                                "java": "Java",
                                "json": "JSON",
                                "jsoniq": "JSONiq",
                                "jsp": "JSP",
                                "jssm": "JSSM",
                                "jsx": "JSX",
                                "julia": "Julia",
                                "kotlin": "Kotlin",
                                "latex": "LaTeX",
                                "less": "LESS",
                                "liquid": "Liquid",
                                "lisp": "Lisp",
                                "livescript": "LiveScript",
                                "logiql": "LogiQL",
                                "lsl": "LSL",
                                "lua": "Lua",
                                "luapage": "LuaPage",
                                "lucene": "Lucene",
                                "makefile": "Makefile",
                                "markdown": "Markdown",
                                "mask": "Mask",
                                "matlab": "MATLAB",
                                "maze": "Maze",
                                "mel": "MEL",
                                "mixal": "MIXAL",
                                "mushcode": "MUSHCode",
                                "mysql": "MySQL",
                                "nix": "Nix",
                                "nsis": "NSIS",
                                "objectivec": "Objective-C",
                                "ocaml": "OCaml",
                                "pascal": "Pascal",
                                "perl": "Perl",
                                "perl6": "Perl 6",
                                "pgsql": "pgSQL",
                                "php_laravel_blade": "PHP (Blade Template)",
                                "php": "PHP",
                                "puppet": "Puppet",
                                "pig": "Pig",
                                "powershell": "Powershell",
                                "praat": "Praat",
                                "prolog": "Prolog",
                                "properties": "Properties",
                                "protobuf": "Protobuf",
                                "python": "Python",
                                "r": "R",
                                "razor": "Razor",
                                "rdoc": "RDoc",
                                "red": "Red",
                                "rhtml": "RHTML",
                                "rst": "RST",
                                "ruby": "Ruby",
                                "rust": "Rust",
                                "sass": "SASS",
                                "scad": "SCAD",
                                "scala": "Scala",
                                "scheme": "Scheme",
                                "scss": "SCSS",
                                "sh": "SH",
                                "sjs": "SJS",
                                "slim": "Slim",
                                "smarty": "Smarty",
                                "snippets": "snippets",
                                "soy_template": "Soy Template",
                                "space": "Space",
                                "sql": "SQL",
                                "sqlserver": "SQLServer",
                                "stylus": "Stylus",
                                "svg": "SVG",
                                "swift": "Swift",
                                "tcl": "Tcl",
                                "terraform": "Terraform",
                                "tex": "Tex",
                                "text": "Text",
                                "textile": "Textile",
                                "toml": "Toml",
                                "tsx": "TSX",
                                "twig": "Twig",
                                "typescript": "Typescript",
                                "vala": "Vala",
                                "vbscript": "VBScript",
                                "velocity": "Velocity",
                                "verilog": "Verilog",
                                "vhdl": "VHDL",
                                "visualforce": "Visualforce",
                                "wollok": "Wollok",
                                "xml": "XML",
                                "xquery": "XQuery",
                                "yaml": "YAML",
                                "django": "Django"
                            },
                            "fontSize": {
                                8: 8,
                                10: 10,
                                11: 11,
                                12: 12,
                                13: 13,
                                14: 14,
                                15: 15,
                                16: 16,
                                17: 17,
                                18: 18,
                                20: 20,
                                22: 22,
                                24: 24,
                                26: 26,
                                30: 30
                            }
                        };
                    if (_data && _data.aceMode) {
                        $modeEl.html(optionNode("ace/mode/", _data.aceMode));
                    }
                    if (_data && _data.aceTheme) {
                        var lightTheme = optionNode("ace/theme/", _data.aceTheme.bright),
                            darkTheme = optionNode("ace/theme/", _data.aceTheme.dark);
                        $themeEl.html("<optgroup label=\"Bright\">" + lightTheme + "</optgroup><optgroup label=\"Dark\">" + darkTheme + "</optgroup>");
                    }
                    if (_data && _data.fontSize) {
                        $fontSizeEl.html(optionNode("", _data.fontSize));
                    }
                    $modeEl.val(editor.getSession().$modeId);
                    $themeEl.val(editor.getTheme());
                    $(function() {
                        //set default font size in drop down
                        $fontSizeEl.val(12).change();
                    });
                }
                $(function() {
                    renderThemeMode();
                    $("#ace-toolbar-bar").on("click", 'button', function(e) {
                        e.preventDefault();
                        let cmdValue = $(this).attr("data-cmd"),
                            editorOption = $(this).attr("data-option");
                        if (cmdValue && cmdValue != "none") {
                            ace_commend(cmdValue);
                        } else if (editorOption) {
                            if (editorOption == "fullscreen") {
                                (void 0 !== document.fullScreenElement && null === document.fullScreenElement || void 0 !== document.msFullscreenElement && null === document.msFullscreenElement || void 0 !== document.mozFullScreen && !document.mozFullScreen || void 0 !== document.webkitIsFullScreen && !document.webkitIsFullScreen) &&
                                (editor.container.requestFullScreen ? editor.container.requestFullScreen() : editor.container.mozRequestFullScreen ? editor.container.mozRequestFullScreen() : editor.container.webkitRequestFullScreen ? editor.container.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT) : editor.container.msRequestFullscreen && editor.container.msRequestFullscreen());
                            } else if (editorOption == "wrap") {
                                let wrapStatus = (editor.getSession().getUseWrapMode()) ? false : true;
                                editor.getSession().setUseWrapMode(wrapStatus);
                            }
                        }
                    });
                    $("select#js-ace-mode, select#js-ace-theme, select#js-ace-fontSize").on("change", function(e) {
                        e.preventDefault();
                        let selectedValue = $(this).val(),
                            selectionType = $(this).attr("data-type");
                        if (selectedValue && selectionType == "mode") {
                            editor.getSession().setMode(selectedValue);
                        } else if (selectedValue && selectionType == "theme") {
                            editor.setTheme(selectedValue);
                        } else if (selectedValue && selectionType == "fontSize") {
                            editor.setFontSize(parseInt(selectedValue));
                        }
                    });
                });
            </script>
        <?php endif; ?>
        <div id="snackbar"></div>
        <script>
        (function() {
            var _a = 'CCP Programmers';
            var _u = 'https://github.com/prasathmani/tinyfilemanager';
            var _v = '<?php echo VERSION; ?>';
            var _h = '\u2764'; // red heart unicode
            function renderFooter() {
                var els = document.querySelectorAll('.fm-footer-credit, .fm-footer-credit-login');
                els.forEach(function(el) {
                    el.innerHTML = 'v' + _v + ' <span class="fm-heart">' + _h + '</span> by <a href="' + _u + '" target="_blank" rel="noopener">' + _a + '</a>';
                });
            }
            renderFooter();
        })();
        </script>
    </html>
<?php
    }
    /**
     * Language Translation System
     * @param string $txt
     * @return string
     */
    function lng($txt)
    {
        global $lang;
        $tr['en']['AppName']        = 'Tiny File Manager';
        $tr['en']['AppTitle']       = 'Tiny File Manager';
        $tr['en']['Login']          = 'Sign in';
        $tr['en']['Username']       = 'Username';
        $tr['en']['Password']       = 'Password';
        $tr['en']['Logout']         = 'Sign Out';
        $tr['en']['Move']           = 'Move';
        $tr['en']['Copy']           = 'Copy';
        $tr['en']['Save']           = 'Save';
        $tr['en']['SelectAll']      = 'Select all';
        $tr['en']['UnSelectAll']    = 'Unselect all';
        $tr['en']['File']           = 'File';
        $tr['en']['Back']           = 'Back';
        $tr['en']['Size']           = 'Size';
        $tr['en']['Perms']          = 'Perms';
        $tr['en']['Modified']       = 'Modified';
        $tr['en']['Owner']          = 'Owner';
        $tr['en']['Search']         = 'Search';
        $tr['en']['NewItem']        = 'New Item';
        $tr['en']['Folder']         = 'Folder';
        $tr['en']['Delete']         = 'Delete';
        $tr['en']['Rename']         = 'Rename';
        $tr['en']['CopyTo']         = 'Copy to';
        $tr['en']['DirectLink']     = 'Direct link';
        $tr['en']['UploadingFiles'] = 'Upload Files';
        $tr['en']['ChangePermissions']  = 'Change Permissions';
        $tr['en']['Copying']        = 'Copying';
        $tr['en']['CreateNewItem']  = 'Create New Item';
        $tr['en']['Name']           = 'Name';
        $tr['en']['AdvancedEditor'] = 'Advanced Editor';
        $tr['en']['Actions']        = 'Actions';
        $tr['en']['Folder is empty'] = 'Folder is empty';
        $tr['en']['Upload']         = 'Upload';
        $tr['en']['Cancel']         = 'Cancel';
        $tr['en']['InvertSelection'] = 'Invert Selection';
        $tr['en']['DestinationFolder']  = 'Destination Folder';
        $tr['en']['ItemType']       = 'Item Type';
        $tr['en']['ItemName']       = 'Item Name';
        $tr['en']['CreateNow']      = 'Create Now';
        $tr['en']['Download']       = 'Download';
        $tr['en']['Open']           = 'Open';
        $tr['en']['UnZip']          = 'UnZip';
        $tr['en']['UnZipToFolder']  = 'UnZip to folder';
        $tr['en']['Edit']           = 'Edit';
        $tr['en']['NormalEditor']   = 'Normal Editor';
        $tr['en']['BackUp']         = 'Back Up';
        $tr['en']['SourceFolder']   = 'Source Folder';
        $tr['en']['Files']          = 'Files';
        $tr['en']['Change']         = 'Change';
        $tr['en']['Settings']       = 'Settings';
        $tr['en']['Language']       = 'Language';
        $tr['en']['ErrorReporting'] = 'Error Reporting';
        $tr['en']['ShowHiddenFiles'] = 'Show Hidden Files';
        $tr['en']['Help']           = 'Help';
        $tr['en']['Created']        = 'Created';
        $tr['en']['Help Documents'] = 'Help Documents';
        $tr['en']['Report Issue']   = 'Report Issue';
        $tr['en']['Generate']       = 'Generate';
        $tr['en']['FullSize']       = 'Full Size';
        $tr['en']['HideColumns']    = 'Hide Perms/Owner columns';
        $tr['en']['You are logged in'] = 'You are logged in';
        $tr['en']['Nothing selected']  = 'Nothing selected';
        $tr['en']['Paths must be not equal']    = 'Paths must be not equal';
        $tr['en']['Renamed from']       = 'Renamed from';
        $tr['en']['Archive not unpacked'] = 'Archive not unpacked';
        $tr['en']['Deleted']            = 'Deleted';
        $tr['en']['Archive not created'] = 'Archive not created';
        $tr['en']['not created']        = 'not created';
        $tr['en']['Copied from']        = 'Copied from';
        $tr['en']['Permissions changed'] = 'Permissions changed';
        $tr['en']['to']                 = 'to';
        $tr['en']['Saved Successfully'] = 'Saved Successfully';
        $tr['en']['not found!']         = 'not found!';
        $tr['en']['File Saved Successfully']    = 'File Saved Successfully';
        $tr['en']['Archive']            = 'Archive';
        $tr['en']['Permissions not changed']    = 'Permissions not changed';
        $tr['en']['Select folder']      = 'Select folder';
        $tr['en']['Source path not defined']    = 'Source path not defined';
        $tr['en']['already exists']     = 'already exists';
        $tr['en']['Error while moving from']    = 'Error while moving from';
        $tr['en']['Create archive?']    = 'Create archive?';
        $tr['en']['Invalid file or folder name']    = 'Invalid file or folder name';
        $tr['en']['Archive unpacked']   = 'Archive unpacked';
        $tr['en']['File extension is not allowed']  = 'File extension is not allowed';
        $tr['en']['Root path']          = 'Root path';
        $tr['en']['Error while renaming from']  = 'Error while renaming from';
        $tr['en']['File not found']     = 'File not found';
        $tr['en']['Error while deleting items'] = 'Error while deleting items';
        $tr['en']['Moved from']         = 'Moved from';
        $tr['en']['Generate new password hash'] = 'Generate new password hash';
        $tr['en']['Login failed. Invalid username or password'] = 'Login failed. Invalid username or password';
        $tr['en']['password_hash not supported, Upgrade PHP version'] = 'password_hash not supported, Upgrade PHP version';
        $tr['en']['Advanced Search']    = 'Advanced Search';
        $tr['en']['Error while copying from']    = 'Error while copying from';
        $tr['en']['Invalid characters in file name']                = 'Invalid characters in file name';
        $tr['en']['FILE EXTENSION HAS NOT SUPPORTED']               = 'FILE EXTENSION HAS NOT SUPPORTED';
        $tr['en']['Selected files and folder deleted']              = 'Selected files and folder deleted';
        $tr['en']['Error while fetching archive info']              = 'Error while fetching archive info';
        $tr['en']['Delete selected files and folders?']             = 'Delete selected files and folders?';
        $tr['en']['Search file in folder and subfolders...']        = 'Search file in folder and subfolders...';
        $tr['en']['Access denied. IP restriction applicable']       = 'Access denied. IP restriction applicable';
        $tr['en']['Invalid characters in file or folder name']      = 'Invalid characters in file or folder name';
        $tr['en']['Operations with archives are not available']     = 'Operations with archives are not available';
        $tr['en']['File or folder with this path already exists']   = 'File or folder with this path already exists';
        $tr['en']['Are you sure want to rename?']                   = 'Are you sure want to rename?';
        $tr['en']['Are you sure want to']                           = 'Are you sure want to';
        $i18n = fm_get_translations($tr);
        $tr = $i18n ? $i18n : $tr;
        if (!strlen($lang)) $lang = 'en';
        if (isset($tr[$lang][$txt])) return fm_enc($tr[$lang][$txt]);
        else if (isset($tr['en'][$txt])) return fm_enc($tr['en'][$txt]);
        else return "$txt";
    }
?>

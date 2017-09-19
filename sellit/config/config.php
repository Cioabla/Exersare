<?php
// database config
define("DB_HOST", "localhost");
define("DB_NAME", "sellit");
define("DB_USER", "root");
define("DB_PASS", "");

// environment variables
define("SITE_URL", "http://sellit/");
define("UPLOAD_PATH", "uploads");
define("SITE_ENV", 'dev');

if (SITE_ENV == 'dev') {
    ini_set('display_errors', 1);
} else {
    ini_set('display_errors', 0);
}

session_start();

if (isset($_COOKIE['remember'])) {
    $_SESSION['user_id'] = $_COOKIE['remember'];
}

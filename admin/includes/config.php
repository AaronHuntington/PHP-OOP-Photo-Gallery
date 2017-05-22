<?php
    
    defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
    define('SITE_ROOT', 'C:'.DS.'xampp1'.DS.'htdocs'.DS.'gitHub'.DS.'PHP-OOP-Photo-Gallery'.DS);
    defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT.'admin'.DS.'includes'.DS);

    defined("DB_HOST") ? null : define("DB_HOST", "localhost");
    defined("DB_USER") ? null : define("DB_USER", "root");
    defined("DB_PASS") ? null : define("DB_PASS", "");
    defined("DB_NAME") ? null : define("DB_NAME", "photo_gallery");
?>


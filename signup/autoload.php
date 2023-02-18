<?php
function my_autoloader($class)
{
    $class = strtolower($class);
    $path = "class/{$class}.class.php";
    if (file_exists($path)) {
        require_once $path;
    } else {
        echo "{$class} Not Found";
    }
}

spl_autoload_register('my_autoloader');

?>

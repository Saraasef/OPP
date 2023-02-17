<?php
function my_autoloader($class)
{
    // include 'classes/' . $class . '.class.php';
    $class = strtolower($class);
    $path = "class/{$class}.class.php";
    if (file_exists($path)) {
        include_once $path;
    } else {
        echo "{$class} Not Found";
    }
}

spl_autoload_register('my_autoloader');
?>

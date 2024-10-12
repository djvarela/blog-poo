<?php
spl_autoload_register(function ($class) {
    // Define los namespaces y sus directorios base
    $autoload_paths = [
        'App\\' => './src/',
        'PHPMailer\\PHPMailer\\' => './assets/php/Utils/phpmailer/src/'

    ];


    foreach ($autoload_paths as $prefix => $base_dir) {
        $len = strlen($prefix);
        if (strncmp($prefix, $class, $len) === 0) {
            $relative_class = substr($class, $len);
            $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

            if (file_exists($file)) {
                require $file;
                return;
            }
        }
    }
});






function VIEW($type,$name)
{

    return "./src/Views/$type/$name.view.php";
}


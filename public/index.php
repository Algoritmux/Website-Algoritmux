<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Suprimir avisos de depreciação específicos do PDO::MYSQL_ATTR_SSL_CA no PHP 8.5+
// Esses avisos vêm do Laravel vendor e serão corrigidos em atualizações futuras
// Não afetam o funcionamento do site, são apenas avisos
if (PHP_VERSION_ID >= 80500) {
    // Suprimir apenas avisos de depreciação relacionados ao PDO MySQL SSL
    set_error_handler(function($errno, $errstr, $errfile, $errline) {
        if ($errno === E_DEPRECATED && 
            (strpos($errstr, 'PDO::MYSQL_ATTR_SSL_CA is deprecated') !== false ||
             strpos($errfile, 'database.php') !== false && strpos($errstr, 'MYSQL_ATTR_SSL_CA') !== false)) {
            return true; // Suprimir este aviso específico
        }
        return false; // Deixar outros erros/avisos passarem normalmente
    }, E_DEPRECATED);
}

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
(require_once __DIR__.'/../bootstrap/app.php')
    ->handleRequest(Request::capture());

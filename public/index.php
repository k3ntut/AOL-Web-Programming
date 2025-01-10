<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Check for Maintenance Mode
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Composer Autoload
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel
$app = require_once __DIR__.'/../bootstrap/app.php';

// Create a Kernel Instance
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

// Capture and Handle the Request
$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);

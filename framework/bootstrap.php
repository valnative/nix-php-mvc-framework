<?php

use Framework\Route;

echo "Bootstrap1";

require_once __DIR__.'/config.php';

\App\Framework\Router::run();

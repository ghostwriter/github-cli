#!/usr/bin/env php
<?php

declare(strict_types=1);

namespace Ghostwriter\Cli\Console;

use Ghostwriter\Cli\Application;
use Ghostwriter\Cli\Core\Cli;

use const DIRECTORY_SEPARATOR;
use const STDERR;

/** @var ?string $_composer_autoload_path */
(static function (string $autoloader): void {
    if (! \file_exists($autoloader)) {
        $message = '[ERROR]Cannot locate "' . $autoloader . '"\n please run "composer install"\n';
        \fwrite(STDERR, $message);
        exit;
    }

    require $autoloader;

    /**
     * #BlackLivesMatter.
     */
    $exitCode = Application::new(Cli::class)->run($_SERVER['argv']);

    exit($exitCode);
})($_composer_autoload_path ?? \dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php');

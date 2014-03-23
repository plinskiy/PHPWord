<?php
\date_default_timezone_set('UTC');

// defining base dir for tests
if (!\defined('PHPWORD_TESTS_BASE_DIR')) {
    \define('PHPWORD_TESTS_BASE_DIR', \realpath(__DIR__ . '/..'));
}

// loading classes with PSR-4 autoloader
require_once __DIR__ . '/../../src/PhpWord/Autoloader.php';
\PhpOffice\PhpWord\Autoloader::register();

require_once __DIR__ . '/TestHelperDOCX.php';
require_once __DIR__ . '/XmlDocument.php';
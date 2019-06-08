<?php

require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

$smarty = new Smarty();

$smartyDirsThemePath = '/var/www/html/wp-content/themes/smarty/templates/';

$smarty ->setTemplateDir($smartyDirsThemePath . 'templates')
        ->setCompileDir( $smartyDirsThemePath . 'templates_c')
        ->setCacheDir(   $smartyDirsThemePath . 'cache')
        ->setConfigDir(  $smartyDirsThemePath . 'config');

// $smarty->testInstall();

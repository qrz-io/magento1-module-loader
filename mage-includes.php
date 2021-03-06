<?php
$ds = DIRECTORY_SEPARATOR;
$bp = dirname(dirname(dirname(__DIR__)));

$paths = array(
    $bp . $ds . 'app' . $ds . 'code' . $ds . 'local',
    $bp . $ds . 'app' . $ds . 'code' . $ds . 'community',
    $bp . $ds . 'app' . $ds . 'code' . $ds . 'core',
    $bp . $ds . 'lib',
    get_include_path()
);

set_include_path(implode(PATH_SEPARATOR, $paths));

require_once 'Mage/Core/functions.php';
require_once 'Varien/Autoload.php';

Varien_Autoload::register();

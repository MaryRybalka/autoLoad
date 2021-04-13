<?php
use staff\wheels;
function customAutoload(string $className)
{
    $path = str_replace(['staff','manufacture','\\'], ['src/staff','src', DIRECTORY_SEPARATOR], $className);

    require_once __DIR__ . "/$path.php";
}

spl_autoload_register('customAutoload');

$t = new \manufacture\toyota();

echo $t->getManufacture();

$n = new \manufacture\nissan();

echo $n->getManufacture();

$w = new \staff\wheels();
echo $w->name();

$w = new \byers\customer("Mark");
echo $w->sayHi();
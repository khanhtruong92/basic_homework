<?php
include_once 'src/Database/Logger.php';
include_once 'src/Utils/Logger.php';

use Database\Logger as Log1;
use Utils\Logger as Log2;

$men = new Log1;
$men->log('Khanh');

echo "\n";

$women = new Log2;
$women->log('Nhung');

<?php
$name = "Pascalia Group";
$message =  <<<'EOD'
Welcome to 
$name.
EOD;

echo $message;
echo "<br>";

$nowdocString = <<<'EOD'
Example of string spanning multiple lines
using nowdoc syntax. Backslashes are always treated literally,
e.g. \\ and \'.
EOD;

echo $nowdocString;

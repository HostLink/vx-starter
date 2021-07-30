<?php


echo "get db info ...<br/>";


if (!is_readable($file = __DIR__ . "/puxt.config.php")) {
    die($file . " not readable");
}

$config = require($file);

$dbhostname = $config["database"]["hostname"];
$dbuser = $config["database"]["username"];
$dbpassword = $config["database"]["password"];
$dbname = $config["database"]["database"];
$dbport = $config["database"]["port"] ?? "3306";

if (!$dbuser || !$dbpassword || !$dbname) {
    die("db config config error");
}



$cmd = "mysql -h {$dbhostname} -u {$dbuser} -P {$dbport} -p{$dbpassword} {$dbname} < " . __DIR__ . "/vx.sql";

`$cmd`;

echo "done";

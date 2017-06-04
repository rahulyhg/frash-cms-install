<?php
session_start();
require_once('vendor/autoload.php');

use Frash\Framework\Request\Server\Server;

require_once('vendor/alixsperoza/frash/src/Framework/Utility/Helpers/dispatch.php');
require_once('vendor/alixsperoza/frash/src/Framework/Utility/Helpers/dump.php');

$class_dispatch = defineDispatcher();
$dispatcher = new $class_dispatch(Server::scriptName(), microtime(true) * 1000);
$dispatcher->work();
<?php
session_start();
require_once('vendor/autoload.php');

use Frash\Framework\Dispatch\Dispatcher;
use Frash\Framework\Request\Server\Server;

require_once('vendor/alixsperoza/frash/src/Framework/Utility/helpers.php');

$dispatcher = new Dispatcher(Server::scriptName(), microtime(true) * 1000);
$dispatcher->work();
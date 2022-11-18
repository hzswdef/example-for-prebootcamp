<?php

// Include composer autoload.
require "vendor/autoload.php";

// Import class.
use API\APIHandler;

// Define class object.
$api = new APIHandler();

// Display texy using method of APIHandler class.
echo $api->sayHello();

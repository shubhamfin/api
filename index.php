<?php
require './vendor/autoload.php';

$response = file_get_contents('https://randomuser.me/api');
$great = 'fantastic';

// Won't work, outputs: This is { fantastic}
echo "This is { $great}";

// Works, outputs: This is fantastic
echo "This is {$great}";
echo "This is ${great}";
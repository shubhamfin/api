<?php
require './vendor/autoload.php';

$response = file_get_contents('https://randomuser.me/api');
$great = 'fantastic';

// Won't work, outputs: This is { fantastic}
echo "This is { $great}";

// Works, outputs: This is fantastic
echo "This is {$great}";
echo "This is ${great}";

changes in f1 c1
changes in f1 c2
change is shubham

change fv2c1
change fv2c2
change fv2c3
change fv2c4
new change in shubham

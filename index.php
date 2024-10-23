<?php

require 'vendor/autoload.php';

use app\library\User;

$user = new User();

echo $user->data();

echo $user->teste();
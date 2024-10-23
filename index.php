<?php

require 'vendor/autoload.php';

use app\library\User;

$user = new User();

echo $user->data();

echo $user->teste();

echo "Alterado no github";

echo "Alterado no VSCode";
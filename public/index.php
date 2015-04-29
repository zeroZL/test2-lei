<?php
require '../vendor/autoload.php';
use Illuminate\Support\User;
$user=new User(['a'=>1,2,3,4,5,6]);
echo $user->get("a");
echo $user->get(1);
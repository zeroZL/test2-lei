<?php
require '../vendor/autoload.php';
use Illuminate\Support\User;
$user=new User(['a'=>1,2,3,4,'e'=>5,6]);
echo $user->get("b");
echo $user->get(1);
var_dump($user->getAttributes());
var_dump($user->toArray());
var_dump($user->jsonSerialize());
var_dump($user->toJson());
var_dump($user->offsetExists('q'));
var_dump($user->offsetGet('r'));
$user->offsetSet('b','a');
$user->offsetUnset('a');
var_dump($user->getAttributes());
var_dump($user->locla('abc'));
$user->attributes;
$user->attributes['r']='s';
var_dump($user->getAttributes());

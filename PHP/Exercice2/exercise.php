<?php
$password;
$salt;



$saltedPassword = substr($password,0, floor( strlen($password)/2) + (strlen($password)%2)).$salt .substr($password,ceil(strlen($password)/2));
git
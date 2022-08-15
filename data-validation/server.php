<?php

// Not valid

$is_float = filter_var("Is not a float", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_THOUSAND); // First elemnt int the function is the eval element
$is_int = filter_var("Is not a int", FILTER_VALIDATE_INT);
$is_ip = filter_var("0.0.0", FILTER_VALIDATE_IP);
$is_url = filter_var("google.com", FILTER_VALIDATE_URL);
$is_email = filter_var("Is not a email", FILTER_VALIDATE_EMAIL);


echo "<pre>";
var_dump($is_float);
var_dump($is_int);
var_dump($is_ip);
var_dump($is_url);
var_dump($is_email);
echo "</pre>";

// Valid

$is_float = filter_var("0.1", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_THOUSAND); // First elemnt int the function is the eval element
$is_int = filter_var("1", FILTER_VALIDATE_INT);
$is_ip = filter_var("127.0.0.1", FILTER_VALIDATE_IP);
$is_url = filter_var("https://www.google.com", FILTER_VALIDATE_URL);
$is_email = filter_var("thisisaemail@email.com", FILTER_VALIDATE_EMAIL);


echo "<pre>";
var_dump($is_float);
var_dump($is_int);
var_dump($is_ip);
var_dump($is_url);
var_dump($is_email);
echo "</pre>";
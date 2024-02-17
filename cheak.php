<?php

//str_shuffle and rand
$string = 'Tania Shorna';
// echo str_shuffle($string);
// echo rand(1, 100);

//encode
$pass = 'Tania';
$new_pass = md5($pass);
// echo $new_pass;
$encode = base64_encode($pass);
echo $encode;

//decode
$pass = 'Tania';
$new_pass = md5($pass);
// echo $new_pass;
$decode = base64_decode($encode);
echo $decode;

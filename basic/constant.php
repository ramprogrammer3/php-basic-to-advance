<?php

const SALES_TAX = 0.085;

$gross_price = 100;

$net_price = $gross_price * (1 + SALES_TAX);

define("NAME","Ram Kumar");
echo NAME . "<br>";

const color = ["red","Green","Blue"];

echo $net_price . "<br>";
var_dump(color);
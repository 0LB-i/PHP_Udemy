<?php

$s = "5" * 12;

echo $s . "<br>";

echo gettype($s);
echo "<br>";
echo gettype([]);
echo "<br>";
echo gettype(12.2);
echo "<br>";
echo gettype("Olá");
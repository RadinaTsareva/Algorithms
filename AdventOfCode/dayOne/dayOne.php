<?php
$myfile = fopen("sourceFile.txt", "r");

$sum = 0;
// some code to be executed....
while (!feof($myfile)) {
    $line = fgets($myfile) . "<br>";
    $digits = str_split(preg_replace("/[^0-9]/", '', $line));
    if (count($digits) > 1) {
        $sum += (int)($digits[0].$digits[count($digits) - 1]);
    }
    if (count($digits) === 1) {
        $sum += (int)($digits[0].$digits[0]);
    }
}
echo $sum;
fclose($myfile);
<?php
echo "===============================\n";
echo "  =[bit.ly link creator]= \n";
echo "coded: Nandar | by: petanikoode\n";
echo "===============================\n\n";
echo "Input link (with http/https) : ";
$link = trim(fgets(STDIN));
$url= "http://api.bitly.com/v3/shorten?login=nandar198&apiKey=R_15eebb6f822e44c6ae7870470ee4e1f6&longUrl=$link";

$result= json_decode(file_get_contents($url));

echo "Hasil Data: \n";
print_r($result);
?>

<?php
system("clear"); 
echo "==============================\n";
echo "  =[AKULAKU CALL]=            \n";
echo "author: Nandar | SGBteam		\n";
echo "==============================\n";
echo "Input nomer : ";
$no = trim(fgets(STDIN));


$url= "https://id-app.akulaku.com/installment/api/json/user/register/captcha/get.do?countryId=1&phoneNumber=$no&useCall=1&tryLogin=0";
$result= json_decode(file_get_contents($url));
echo "hasil data :\n";
echo print_r($result);
?>

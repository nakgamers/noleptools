<?php
system("clear");
include 'modul/modul.php';
$banner = "
\033[97m=========================================================
\033[92m         _______  ___   __  _____  __________ 
        / __/ _ \/ _ | /  |/  /  |/  / __/ _ \
       _\ \/ ___/ __ |/ /|_/ / /|_/ / _// , _/
      /___/_/  /_/ |_/_/  /_/_/  /_/___/_/|_|\n
\033[96m                 ==[Thanks To SGBTeam]==
      |Nolep Store - Indosec - Termux Indonesia|           
\033[97m=======================================================\n";
$init = new Bom();
//Eksekusi Call/Sms Boomber (Limit 3x/Jam)
echo $banner;
echo "Nomor Target (tanpa 62/0): ";
$a = trim(fgets(STDIN));
echo "ketik 1 untuk sms/ ketik 2 untuk call : ";
$b = trim(fgets(STDIN));
$init->type = "$b";
$init->no = "$a";
if ($init->type == 1) {
	for ($i=0; $i < 2; $i++) { 
	    $init->Verif($init->no,$init->type);
	}
}elseif ($init->type == 2) {
	 $init->Verif($init->no,$init->type);
}

<?php 
require_once("lib/function.php");

salam("Siskanah", "ulang tahun");
//for loop

    for ($i=1; $i <10 ; $i++) { 
        echo "$i ";
    }
echo "<br>";
//while loop
    $a = 1;
    while ($a < 10) {
        echo "$a ";
        $a ++;
    }
echo "<br>";
//Do while loop
    $b = 0;
    do {
        $b ++;
        echo "$b ";
    } while ($b <= 10);

echo"<br>";
//Foreach loop
$array = ["Siska", "Siski", "Sisko"];
$array2 = [[
        "Nama" => "Siskanah",
        "Domisili" => "Banten",
        "Umur" => "20"
    ]];

foreach ($array as $key => $value){
    $no = $key + 1;
    echo $no. " - $value <br>";
}

?>
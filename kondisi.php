<?php 
    $nilai1 = 50;
    $nilai2 = "5";

    if ($nilai1 < $nilai2) {
        echo "Nilai 1 lebih kecil dari nilai 2";    
    } elseif($nilai1 > $nilai2) {
        echo "Nilai 1 lebih besar dari nilai 2";
    }elseif($nilai1 == $nilai2) {
        echo "Nilai 1 lebih besar dari nilai 2";
    }elseif($nilai1 >= $nilai2) {
            echo "Nilai 1 lebih besar dari nilai 2";
    }else{
        echo "Jawaban tidak diketahui";
    }

    echo "<br>";

    $day = "Mon";
    echo "Hari ini adalah $day ";

    if ($day == "Sat") {;
        echo "Kelas Jarvis dimulai😋";
    } elseif ($day == "Sun
    ") {
        echo "Kelas Jarvis dimulai";
    } elseif ($day == "Mon") {
        echo "Kelas Jarvis libur";
    } else {
        echo "Jawaban tidak diketahui";
    }
?>
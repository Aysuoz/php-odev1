<?php

function ucgen($sayi){ // değişken tanımlandı.
    for($i = 0; $i <= $sayi; $i++){ // değişkene verilen değere kadar tekrar edecek.
        
        $say = 0;
        
        while($say <= $i){
            $say++; // döngünün sonlanabilmesi için 1 arttırdık.
            echo 0;

        } 
        echo "<br>"; // alt alta sıralanmasını sağladık.
    }
}

ucgen(25);

// Parametre olarak aldığı değer kadar satırı olan bir üçgen çizen fonksiyonu for ve while döngülerini kullanarak yazdık.

?>
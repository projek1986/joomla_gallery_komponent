<?php
if(isSet($_POST['tekst1']) && isSet($_POST['tekst2'])){
    $tekst1 = $_POST['tekst1'];
    $tekst2 = $_POST['tekst2'];
    $tekst1 = strrev($tekst1);
    $tekst2 = strrev($tekst2);
    echo $tekst1 . $tekst2;
}
else{
    echo "Wystąpił błąd. Dane nie są dostępne.";
}
?>
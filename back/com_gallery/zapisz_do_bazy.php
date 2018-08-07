<?php

$szukana = $_GET['task'];

$polaczenie = mysql_connect('localhost', 'piotrkop_strona', 'bcUDGN5Do');
$baza = mysql_select_db('piotrkop_strona', $polaczenie);

$wynik = mysql_query("SELECT id , opis  FROM bxfew_zdjecia_gallery WHERE id_projektu ='$szukana'")
or die('Błąd zapytania');

/*
 * SELECT id , opis FROM #__zdjecia_gallery WHERE id_projektu = "'.$szukana.'"
wyświetlamy wyniki, sprawdzamy,
czy zapytanie zwróciło wartość większą od 0
*/



if (mysql_num_rows($wynik) > 0)
{$wynik2 = mysql_query("SELECT opis ,nazwa FROM bxfew_projekty_gallery WHERE id ='$szukana' ")
or die('Błąd zapytania');

if (mysql_num_rows($wynik2) > 0) {
    while ($o = mysql_fetch_array($wynik2)) {
    echo '<h2> '.$o[1].'</h2>';
        echo '<p> '.$o[0].'</p>';
}	}	?>


   
	<?php
      while ($r = mysql_fetch_array($wynik)) { ?>

          <img src="administrator/components/com_gallery/img/<?php echo $r[0]; ?>.jpg">


      <?php    }	?>




    <?php
    

}

?>

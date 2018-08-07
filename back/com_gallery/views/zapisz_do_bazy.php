
<a class="close" onClick="closeBox();"></a><div class="opisy"><div class="buttons">
<?php
header ('Content-type: text/html; charset=utf-8');

 $numer= $_GET['name'];
$liczba= $_GET['licz'];



if ($numer != $liczba  ){
    $numer = $numer+1 ?>

<a id="elemnt" class="tab-next" onClick="sprawdzFormularz(<?php echo $numer; ?>);"></a>
<?php }	if ($numer >= 3  ){
    $numer = $numer-2  ?>


    <a class="tab-prev" onClick="sprawdzFormularz(<?php echo $numer; ?>);"></a>
<?php } ?>
</div>
<?php
$szukana = $_GET['task'];

$polaczenie = mysql_connect('localhost', 'piotrkop_strona', 'bcUDGN5Do');
$baza = mysql_select_db('piotrkop_strona', $polaczenie);
mysql_query("SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");

?>


<?php
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
            echo '
			<h2> '.$o[1].'</h2>
			<p> '.$o[0].'</p>
		</div>
		
		';
        }	}	?>


    <div class="image-set">

        <?php
        while ($r = mysql_fetch_array($wynik)) { ?>

            <div class="linker">
                <div class="linker-over">
                    <a class="example-image-link" href="administrator/components/com_gallery/img/<?php echo $r[0]; ?>.jpg" data-lightbox="example-set" data-title="<?php echo $r[1]; ?>"></a>
                </div>
                <img class="example-image" src="administrator/components/com_gallery/img/<?php echo $r[0]; ?>.jpg" alt=""/>
            </div>




        <?php    }	?>

    </div>



<?php


}

?>

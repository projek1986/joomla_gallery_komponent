<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
jimport( 'joomla.application.component.model' );

class GalleryModelProject extends JModelLegacy
{



    function getMyLabel10(){
        $db = $this->getDbo();
        $query = $db->getQuery(true);
        $query = 'SELECT COUNT(sortowanie) FROM #__projekty_gallery  ';
        $db->setQuery( $query );
        $greeting10 = $db->loadResult();
        return  $greeting10;

    }


    function getMyLabel2()
    {
        $db = $this->getDbo();
        $query = $db->getQuery(true);
        $query = 'SELECT id , nazwa FROM #__kategorie_gallery';
        $db->setQuery( $query );
        $greeting2 = $db->loadRowList();
        return  $greeting2;
    }

    function getMyLabel3()
    {
        $db = $this->getDbo();
        $query = $db->getQuery(true);
        $query = 'SELECT MAX(id_zdjecia) FROM #__projekty_gallery LIMIT 1';
        $db->setQuery( $query );
        $greeting3 = $db->loadResult();
        return  $greeting3;
    }


    public function getMyLabel4 () {

        $najwiekszeID =  $this->getMyLabel3();



        for( $i=0; $i<count($_FILES['task4']['size']); $i++ ){

            if( strstr($_FILES['task4']['type'][$i], 'image')!==false ){

                //zmienia nazwę pliku, by zgadzały się z ID w bazie danych
                $file = JPATH_ROOT.'/administrator/components/com_gallery/imgk/'.$najwiekszeID.'.jpg';
                //wysyła plik na serwer
                move_uploaded_file($_FILES['task4']['tmp_name'][$i], $file);

               //wyświetla komunikat o powodzeniu
                echo '<div class="alert alert-success" role="alert">Zdjęcia zostały zapisane na serwerze.</div>';
                //zwiększa ID dla kolejnych zdjęć w pętli
                $najwiekszeID++;
            }
        }

        }


    public function getMyLabel() {
        $dodaj =$_POST['task']; //Nazwa
        $dodaj2 =$_POST['opisproj']; //Opis
        $dodaj3 =JRequest::getCmd('task3'); //kategoria_id
        $dodaj5 =$_POST['task5']; //krotki opis
        $dodaj10 =JRequest::getCmd('task10'); //pozycja


        $dodaj_id = $this->getMyLabel3(); // ID ZDJECIA

        if ($dodaj_id == ''){$dodaj_id = 1;

        }else {
            $dodaj_id = $dodaj_id+1;

        }



        if ( $dodaj != ''){

            // Get a db connection.
            $db = JFactory::getDbo();

// Create a new query object.
            $query = $db->getQuery(true);



// Insert columns.
            $columns = array( 'nazwa' , 'opis' , 'kategoria' , 'id_zdjecia' , 'k_opis' , 'sortowanie');

// Insert values.
            $values = array( "'$dodaj'" ,"'$dodaj2'" , "'$dodaj3'" , "'$dodaj_id'" , "'$dodaj5'", "'$dodaj10'");

// Prepare the insert query.
            $query
                ->insert($db->quoteName('#__projekty_gallery'))
                ->columns($db->quoteName($columns))
                ->values(implode(',', $values));

// Set the query using our newly populated query object and execute it.
            $db->setQuery($query);
            $db->execute();
            echo '<div class="alert alert-success" role="alert">Projekt zostały zapisany w bazie.</div>';

        }


    }

}
<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
jimport( 'joomla.application.component.model' );

class GalleryModelEditpictures extends JModelLegacy
{

    function getMyLabel2()
    {
        $db = $this->getDbo();
        $query = $db->getQuery(true);
        $query = 'SELECT z.id , p.nazwa , z.opis FROM #__projekty_gallery p , #__zdjecia_gallery z WHERE z.id_projektu = p.id';
        $db->setQuery( $query );
        $greeting2 = $db->loadRowList();
        return  $greeting2;
    }

    function getMyLabel3()
    {
        $db = $this->getDbo();
        $query = $db->getQuery(true);
        $query = 'SELECT id FROM #__zdjecia_gallery LIMIT 1';
        $db->setQuery( $query );
        $greeting3 = $db->loadResult();
        return  $greeting3;
    }



    public function getMyLabel () {

        $najwiekszeID =  $this->getMyLabel3();



        for( $i=0; $i<count($_FILES['task4']['size']); $i++ ){

            if( strstr($_FILES['task4']['type'][$i], 'image')!==false ){

                //zmienia nazwę pliku, by zgadzały się z ID w bazie danych
                $file = JPATH_ROOT.'/administrator/components/com_gallery/img/'.$najwiekszeID.'.jpg';
                //wysyła plik na serwer
                move_uploaded_file($_FILES['task4']['tmp_name'][$i], $file);

                //wyświetla komunikat o powodzeniu
                echo '<div class="alert alert-success" role="alert">Zdjęcia zostały zapisane na serwerze.</div>';
                //zwiększa ID dla kolejnych zdjęć w pętli
                $najwiekszeID++;
            }
        }

    }




    public function getMyLabel4 () {

        $dodaj3= JRequest::getCmd('task3'); // id projektu

        $dodaj5= JRequest::getCmd('task5'); //opis zdjecia

        if ( $dodaj3 != ''){
            // Get a db connection.
            $db = JFactory::getDbo();

            $query = $db->getQuery(true);
            $columns = array( 'id_projektu' , 'opis');
            $values = array( "'$dodaj3'" , "'$dodaj5'");


            $query
                ->insert($db->quoteName('#__zdjecia_gallery'))
                ->columns($db->quoteName($columns))
                ->values(implode(',', $values));


            $db->setQuery($query);
            $db->execute();
            echo '<div class="alert alert-success" role="alert">Zdjecie zostały zapisany w bazie.</div>';

        }
    }


}
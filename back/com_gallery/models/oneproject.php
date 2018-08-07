<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
jimport( 'joomla.application.component.model' );

class GalleryModelOneproject extends JModelLegacy
{

    function getMyLabel9()
    {
        $szukana =JRequest::getCmd('task');
        $db = $this->getDbo();
        $query = $db->getQuery(true);
        $query = 'SELECT kategoria FROM #__projekty_gallery WHERE id = "'.$szukana.'" LIMIT 1';
        $db->setQuery( $query );
        $greeting9 = $db->loadResult();
        return  $greeting9;
    }

    function getMyLabel10(){
        $szukana =JRequest::getCmd('task');
        $db = $this->getDbo();
        $query = $db->getQuery(true);
        $query = 'SELECT sortowanie FROM #__projekty_gallery WHERE id = "'.$szukana.'" LIMIT 1';
        $db->setQuery( $query );
        $greeting10 = $db->loadResult();
        return  $greeting10;

    }

    function getMyLabel11(){
        $db = $this->getDbo();
        $query = $db->getQuery(true);
        $query = 'SELECT COUNT(sortowanie) FROM #__projekty_gallery  ';
        $db->setQuery( $query );
        $greeting11 = $db->loadResult();
        return  $greeting11;

    }

    function getMyLabel7()
    {
        $szukana =JRequest::getCmd('task');
        $db = $this->getDbo();
        $query = $db->getQuery(true);
        $query = 'SELECT nazwa FROM #__projekty_gallery WHERE id = "'.$szukana.'" LIMIT 1';
        $db->setQuery( $query );
        $greeting7 = $db->loadResult();
        return  $greeting7;
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
    $szukana =JRequest::getCmd('task');
    $db = $this->getDbo();
    $query = $db->getQuery(true);
    $query = 'SELECT id_zdjecia FROM #__projekty_gallery WHERE id = "'.$szukana.'" LIMIT 1';
    $db->setQuery( $query );
    $greeting3 = $db->loadResult();
    return  $greeting3;
}

    function getMyLabel5()
    {
        $szukana =JRequest::getCmd('task');
        $db = $this->getDbo();
        $query = $db->getQuery(true);
        $query = 'SELECT opis , k_opis FROM #__projekty_gallery WHERE id = "'.$szukana.'" LIMIT 1';
        $db->setQuery( $query );
        $greeting5 = $db->loadRowList();
        return  $greeting5;
    }


    public function getMyLabel4 () {

        $najwiekszeID = JRequest::getCmd('task7');



        for( $i=0; $i<count($_FILES['task4']['size']); $i++ ){

            if( strstr($_FILES['task4']['type'][$i], 'image')!==false ){

                //zmienia nazwę pliku, by zgadzały się z ID w bazie danych
                $file = JPATH_ROOT.'/administrator/components/com_gallery/imgk/'.$najwiekszeID.'.jpg';
                //wysyła plik na serwer
                move_uploaded_file($_FILES['task4']['tmp_name'][$i], $file);

                //wyświetla komunikat o powodzeniu
              //  echo '<div class="alert alert-success" role="alert">Zdjęcie zostały zapisane na serwerze.</div>';
                //zwiększa ID dla kolejnych zdjęć w pętli

            }
        }

    }


    public function getMyLabel() {

        $dodaj =JRequest::getCmd('task');//id projektu
        $dodaj8 =$_POST['task8']; //nazwa projektu
        $dodaj2 =$_POST['opisprojektu']; //Opis
        $dodaj3 =JRequest::getCmd('task3'); //kategoria_id
        $dodaj5 =$_POST['k_opisprojektu']; //krotki opis
        $dodaj10 =JRequest::getCmd('task10'); //pozycja




        if ( $dodaj2 != '' || $dodaj3 != '' || $dodaj5 != ''|| $dodaj8 != '' ){



            $db = JFactory::getDbo();
            $query = $db->getQuery(true);
            $query->update($db->quoteName('#__projekty_gallery'))
                ->set(array($db->quoteName('opis') . '=\''.$dodaj2.'\'', $db->quoteName('kategoria') . '=\''. $dodaj3.'\'', $db->quoteName('k_opis') . '=\''. $dodaj5.'\'', $db->quoteName('nazwa') . '=\''. $dodaj8.'\'', $db->quoteName('sortowanie') . '=\''. $dodaj10.'\''))
                ->where(array($db->quoteName('id') . '=\''.$dodaj.'\''));
            $db->setQuery($query);
            $result = $db->query();

           // echo '<div class="alert alert-success" role="alert">Projekt zostały zapisany w bazie.</div>';

        }


    }

}
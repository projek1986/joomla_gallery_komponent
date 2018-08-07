<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
jimport( 'joomla.application.component.model' );

class GalleryModelOnepicture extends JModelLegacy
{


    function getMyLabel7()
    {
        $szukana =JRequest::getCmd('task');

        $db = $this->getDbo();
        $query = $db->getQuery(true);
        $query = 'SELECT id_projektu FROM #__zdjecia_gallery  WHERE id = "'.$szukana.'" LIMIT 1';
        $db->setQuery( $query );
        $greeting7 = $db->loadResult();
        return  $greeting7;
    }


    function getMyLabel5()
    {

        $db = $this->getDbo();
        $query = $db->getQuery(true);
        $query = 'SELECT nazwa , id FROM #__projekty_gallery ';
        $db->setQuery( $query );
        $greeting2 = $db->loadRowList();
        return  $greeting2;
    }


    function getMyLabel2()
    {

        $db = $this->getDbo();
        $query = $db->getQuery(true);
        $query = 'SELECT z.id , p.nazwa , z.opis , p.id FROM #__projekty_gallery p , #__zdjecia_gallery z WHERE z.id_projektu = p.id ';
        $db->setQuery( $query );
        $greeting2 = $db->loadRowList();
        return  $greeting2;
    }

    function getMyLabel3()
    {
        $szukana =JRequest::getCmd('task');
        $db = $this->getDbo();
        $query = $db->getQuery(true);
        $query = 'SELECT opis  FROM  #__zdjecia_gallery  WHERE id = "'.$szukana.'" ';
        $db->setQuery( $query );
        $greeting3 = $db->loadResult();
        return  $greeting3;
    }



    public function getMyLabel () {

        $najwiekszeID = JRequest::getCmd('task7');



        for( $i=0; $i<count($_FILES['task4']['size']); $i++ ){

            if( strstr($_FILES['task4']['type'][$i], 'image')!==false ){

                //zmienia nazw� pliku, by zgadza�y si� z ID w bazie danych
                $file = JPATH_ROOT.'/administrator/components/com_gallery/img/'.$najwiekszeID.'.jpg';
                //wysy�a plik na serwer
                move_uploaded_file($_FILES['task4']['tmp_name'][$i], $file);

                //wy�wietla komunikat o powodzeniu
                echo '<div class="alert alert-success" role="alert">Zdjęcia zostały zapisane na serwerze.</div>';
                //zwi�ksza ID dla kolejnych zdj�� w p�tli
                $najwiekszeID++;
            }
        }

    }




    public function getMyLabel4() {

        $dodaj = JRequest::getCmd('task7'); //id zdjecia
        $dodaj2 =$_POST ['task5']; //Opis
        $dodaj3 =JRequest::getCmd('task3'); //projekt_id



        if ( $dodaj2 != '' || $dodaj3 != ''  ){



            $db = JFactory::getDbo();
            $query = $db->getQuery(true);
            $query->update($db->quoteName('#__zdjecia_gallery'))
                ->set(array($db->quoteName('opis') . '=\''.$dodaj2.'\'', $db->quoteName('id_projektu') . '=\''. $dodaj3.'\''))
                ->where(array($db->quoteName('id') . '='.$dodaj));
            $db->setQuery($query);
            $result = $db->query();

             echo '<div class="alert alert-success" role="alert">Projekt zostały zapisany w bazie.</div>';

        }


    }



}
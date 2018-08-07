<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
jimport( 'joomla.application.component.model' );

class GalleryModelOpis extends JModelLegacy
{

    function getMyLabel()
    {
        $db = $this->getDbo();
        $query = $db->getQuery(true);
        $query = 'SELECT p.id_zdjecia , p.nazwa , p.opis , p.id  ,k.nazwa FROM #__projekty_gallery p , #__kategorie_gallery k WHERE k.id = p.kategoria';
        $db->setQuery($query);
        $greeting2 = $db->loadRowList();
        return $greeting2;
    }

    function getMyLabel2()
    {
        $szukana =JRequest::getCmd('task'); // id projektu


        if ($szukana !=''){
            $db = $this->getDbo();
            $query = $db->getQuery(true);
            $query = 'SELECT id , opis FROM #__zdjecia_gallery WHERE id_projektu = "'.$szukana.'"';
            $db->setQuery($query);
            $greeting2 = $db->loadRowList();
            return $greeting2;

        }
    }

    function getMyLabel3()
    {
        $szukana =JRequest::getCmd('task'); // id projektu


        if ($szukana !=''){
            $db = $this->getDbo();
            $query = $db->getQuery(true);
            $query = 'SELECT opis  FROM #__projekty_gallery WHERE id = "'.$szukana.'"';
            $db->setQuery($query);
            $greeting2 = $db->loadRowList();
            return $greeting2;

        }
    }

}

?>
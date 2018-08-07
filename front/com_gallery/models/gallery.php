<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
jimport( 'joomla.application.component.model' );

class GalleryModelGallery extends JModelLegacy
{

    function getMyLabel()
    {      $sort = $_POST['sortowanie'];
        $db = $this->getDbo();
        $query = $db->getQuery(true);
        $query = 'SELECT p.id_zdjecia , p.nazwa , p.opis , p.id  ,k.filtr ,p.k_opis FROM #__projekty_gallery p , #__kategorie_gallery k WHERE k.id = p.kategoria ORDER BY p.sortowanie ASC';
        $db->setQuery($query);
        $greeting2 = $db->loadRowList();
        return $greeting2;
    }

    function getMyLabel2()
    {
        $szukana = explode(',',$_GET['task']) ;
        $szukana =  $szukana[0];
     //   $szukana= JRequest::getVar('task');
     // $szukana =JRequest::getCmd('task'); // id projektu
      //  $szukana = JRequest::getVar('imie');
       


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

    function getMyLabel4()
    {

            $db = $this->getDbo();
            $query = $db->getQuery(true);
            $query = 'SELECT nazwa ,filtr FROM #__kategorie_gallery ';
            $db->setQuery($query);
            $greeting4 = $db->loadRowList();
            return $greeting4;


    }

}

?>
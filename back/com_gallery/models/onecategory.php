<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
jimport( 'joomla.application.component.model' );

class GalleryModelOnecategory extends JModelLegacy
{

    function getMyLabel()
    {
        $szukana =JRequest::getCmd('task');
        $db = $this->getDbo();
        $query = $db->getQuery(true);
        $query = 'SELECT id , nazwa FROM #__kategorie_gallery WHERE id = "'.$szukana.'" LIMIT 1';
        $db->setQuery($query);
        $greeting = $db->loadRowList();
        return $greeting;
    }


    public function getMyLabel2()
    {

        $dodaj = JRequest::getCmd('task'); //id projektu
        $dodaj8 = $_POST['task8']; //nazwa kategori
        $dodaj9 = JRequest::getCmd('task8'); //id projektu


        if ($dodaj8 != '') {


            $db = JFactory::getDbo();
            $query = $db->getQuery(true);
            $query->update($db->quoteName('#__kategorie_gallery'))
                ->set(array($db->quoteName('nazwa') . '=\'' . $dodaj8 . '\'' , $db->quoteName('filtr') . '=\'' . $dodaj9 . '\''))
                ->where(array($db->quoteName('id') . '=' . $dodaj));
            $db->setQuery($query);
            $result = $db->query();

            // echo '<div class="alert alert-success" role="alert">Projekt zostały zapisany w bazie.</div>';

        }


    }
}

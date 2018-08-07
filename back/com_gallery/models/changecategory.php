<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
jimport( 'joomla.application.component.model' );

class GalleryModelChangecategory extends JModelLegacy
{

    public function add()
    {

// Sanitize the ids.
        $id = JRequest::getCmd('id');
// Get a group row instance.
        $db = JFactory::getDbo();

        $query = $db->getQuery(true);


        $conditions = array(
            $db->quoteName('id') . '=' . $id . '',

        );

        $dodaj8 = JRequest::getCmd('task8'); //nazwa kategori





            $db = JFactory::getDbo();
            $query = $db->getQuery(true);
            $query->update($db->quoteName('#__kategorie_gallery'))
                ->set(array($db->quoteName('nazwa') . '=\'' . $dodaj8 . '\''));
            $query->where($conditions);
            $db->setQuery($query);
            $result = $db->query();

             echo '<div class="alert alert-success" role="alert">Projekt zostały zapisany w bazie.</div>';





        $link_global	 	= JRoute::_('index.php?option=com_gallery&view=editcategory');
        echo '<div class="jbicon-container">
    <div class="jbicon"> <a href="'.$link_global.'"><img src="components/com_gallery/images/pointingArrow.png" align="middle" border="0" alt="" /><span>Powrót Do Kategorii </span></a></div>
  </div>';
    }
}
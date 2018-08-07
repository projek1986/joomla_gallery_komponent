<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
jimport( 'joomla.application.component.model' );

class GalleryModelDelpicture extends JModelLegacy
{

    public function delete()
    {

// Sanitize the ids.
        $id = JRequest::getCmd('id');
// Get a group row instance.
        $db = JFactory::getDbo();

        $query = $db->getQuery(true);

// usuni�cie wszystkich klucze dla u�ytkownika 1001.
        $conditions = array(
            $db->quoteName('id') . '=' . $id . '',

        );

        $query->delete($db->quoteName('#__zdjecia_gallery'));
        $query->where($conditions);

        $db->setQuery($query);


        $result = $db->query();

        $link_global	 	= JRoute::_('index.php?option=com_gallery&view=editpictures');
        echo '<div class="jbicon-container">
    <div class="jbicon"> <a href="'.$link_global.'"><img src="components/com_gallery/images/pointingArrow.png" align="middle" border="0" alt="" /><span>Powrót Do Projektów </span></a></div>
  </div>';
    }
}
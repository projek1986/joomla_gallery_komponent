<?php
defined('_JEXEC') or die;
jimport('joomla.application.component.controller');
/**
* General Controller of HelloWorld component
*/
class GalleryController extends JControllerLegacy {

    function display($cachable = false, $urlparams = false)
    {
        // set default view if not set
        $input = JFactory::getApplication()->input;
        $input->set('view', $input->getCmd('view', 'gallery'));

        // call parent behavior
        parent::display($cachable);
    }
}
?>
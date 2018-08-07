<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
jimport( 'joomla.application.component.view');
class GalleryViewPictures extends JViewLegacy {

    protected $model;



    function display($tpl = null) {


        $this->model = $model;
        $model = $this->getModel();

        $myLabel2 = $model->getMyLabel2();
        $this->assignRef( 'greeting2', $myLabel2 );

        $myLabel3 = $model->getMyLabel3();
        $this->assignRef( 'greeting3', $myLabel3);

        $myLabel4 = $model->getMyLabel4();
        $this->assignRef( 'greeting4', $myLabel4);

        $myLabel = $model->getMyLabel();
        $this->assignRef( 'greeting', $myLabel);


        parent::display($tpl);
    }
}
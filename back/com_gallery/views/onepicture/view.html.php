<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
jimport( 'joomla.application.component.view');
class GalleryViewOnepicture extends JViewLegacy {

    protected $model;



    function display($tpl = null) {


        $this->model = $model;
        $model = $this->getModel();

        $myLabel2 = $model->getMyLabel2();
        $this->assignRef( 'greeting2', $myLabel2 );

        $myLabel3 = $model->getMyLabel3();
        $this->assignRef( 'greeting3', $myLabel3);

//        $myLabel9 = $model->getMyLabel9();
//        $this->assignRef( 'greeting9', $myLabel9);

        $myLabel4 = $model->getMyLabel4();
        $this->assignRef( 'greeting4', $myLabel4);

        $myLabel5 = $model->getMyLabel5();
        $this->assignRef( 'greeting5', $myLabel5);
//
        $myLabel7 = $model->getMyLabel7();
        $this->assignRef( 'greeting7', $myLabel7);

        $myLabel = $model->getMyLabel();
        $this->assignRef( 'greeting', $myLabel);


        parent::display($tpl);
    }
}
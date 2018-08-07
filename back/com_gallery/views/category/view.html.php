<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
jimport( 'joomla.application.component.view');
class GalleryViewCategory extends JViewLegacy {

    protected $model;

    public $szukanie ;

    function display($tpl = null) {


        $this->model = $model;
        $model = $this->getModel();
        $myLabel = $model->getMyLabel();
        $this->assignRef( 'greeting', $myLabel );

//        $myLabel2 = $model->getMyLabel2("'. $szukanie2.'" , "'. $szukanie3.'");
//        $this->assignRef( 'greeting2', $myLabel2 );

        parent::display($tpl);
    }
}
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('_JEXEC') or die ;

class GalleryControllerDelproject extends JControllerLegacy
{


    public  function delete() {

        $model = $this->getModel('delproject');
        $model->delete();


    }


}
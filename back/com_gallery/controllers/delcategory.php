<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

defined('_JEXEC') or die ;

class GalleryControllerDelcategory extends JControllerLegacy
{


    public  function delete() {

        $model = $this->getModel('delcategory');
        $model->delete();


    }


}
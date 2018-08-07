<?php
defined('_JEXEC') or die('Restricted access');
$link_global	 	= JRoute::_('index.php?option=com_gallery');

?>
<div class="jbicon-container">
    <div class="jbicon"> <a href="<?php echo $link_global; ?>"><img src="components/com_gallery/images/pointingArrow.png" align="middle" border="0" alt="" /><span><?php echo 'Powrót Do Panelu'; ?></span></a></div>
</div>





<form action="index.php?option=com_gallery&amp;view=pictures&amp;task=" method="post" enctype="multipart/form-data" >

<h3> Dodaj Zdjecie Do Projektu</h3>




    <div class="form-group">
        <label for="nazwa">Wybierz Projekt</label>

        <select name="task3">
            <option value=""></option>

            <?php

            foreach ($this->greeting2 as  $val) {  ?>

                <option value="<?php echo $val[0]; ?>"><?php echo $val[1]; ?></option>
            <?php     }  ?>
        </select>
    </div>

    <div class="form-group">
        <label for="pliki">Opis Zdjęcia</label>
        <input type="text" name="task5">
    </div>
    <div class="form-group">
        <label for="pliki">Wybierz zdjęcie Projektu</label>
        <input type="file" id="pliki" multiple="multiple" name="task4[]">
    </div>
    </br>
    <button type="submit" name="wyslij" class="btn btn-primary">Dodaj zdjęcia</button>


</form>

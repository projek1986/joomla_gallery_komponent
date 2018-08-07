<?php
defined('_JEXEC') or die('Restricted access');
$link_global	 	= JRoute::_('index.php?option=com_gallery&view=editpictures');
$id_projektu = $_GET['task'];

?>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
    $( document ).ready(function() {
        $('#myselect').val('<?php echo $this->greeting7; ?>');
    });

</script>
<div class="jbicon-container">
    <div class="jbicon"> <a href="<?php echo $link_global; ?>"><img src="components/com_gallery/images/pointingArrow.png" align="middle" border="0" alt="" /><span><?php echo 'Powrót Do Edycji'; ?></span></a></div>
</div>





<form action="index.php?option=com_gallery&amp;view=onepicture&amp;task=<?php  echo $id_projektu; ?>" method="post" enctype="multipart/form-data" >

    <h3> Edycja Zdjecia Projektu</h3>




    <div class="form-group">
        <label for="nazwa">Wybierz Projekt</label>

        <select id="myselect" name="task3">
            <option value=""></option>

            <?php

            foreach ($this->greeting5 as  $val) {  ?>

                <option value="<?php echo $val[1]; ?>"><?php echo $val[0]; ?></option>
            <?php     }  ?>
        </select>
    </div>

    <div class="form-group">
        <label for="pliki">Opis Zdjęcia</label>
        <input type="text" value="<?php echo $this->greeting3; ?>" name="task5">
    </div>
    <div class="form-group">
        <label for="pliki">Aktualne zdjecie Projektu</label>

        <img  src="components/com_gallery/img/<?php  echo $id_projektu; ?>.jpg">
        <input type="hidden" name="task7" value="<?php echo $id_projektu;?>">

        <input type="file" id="pliki" multiple="multiple"  name="task4[]">
    </div>
    </br>
    <button type="submit" name="wyslij" class="btn btn-primary">Wyślij</button>


</form>
<?php
defined('_JEXEC') or die('Restricted access');
$link_global	 	= JRoute::_('index.php?option=com_gallery');
$link_edit	 	= JRoute::_('index.php?option=com_gallery&view=editproject');

$id_projektu = $_GET['task'];


?>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
    $( document ).ready(function() {
        $('#myselect').val('<?php echo $this->greeting9; ?>');
        $('#myselectsort').val('<?php echo $this->greeting10; ?>');
    });

</script>

<div class="jbicon-container">
    <div class="jbicon"> <a href="<?php echo $link_global; ?>"><img src="components/com_gallery/images/pointingArrow.png" align="middle" border="0" alt="" /><span><?php echo 'Powrót Do Panelu'; ?></span></a></div>
    <div class="jbicon"> <a href="<?php echo $link_edit; ?>"><img src="components/com_gallery/images/pointingArrow.png" align="middle" border="0" alt="" /><span><?php echo 'Powrót Do Edycji'; ?></span></a></div>
</div>





<form action="index.php?option=com_gallery&amp;view=oneproject&amp;task=<?php echo $id_projektu;?>" method="post" enctype="multipart/form-data" >

<h3> Edycja Projektu</h3>

    <label>Nazwa Projektu</label>
    <input type="text" value="<?php echo $this->greeting7 ?>"  name="task8">
<input type="hidden" name="idpicture" value="<?php echo $id_projektu;?>">

    <div class="form-group">
        <label for="nazwa">Wybierz kolejność projektu</label>

        <select id="myselectsort" name="task10">
            <?php

            for ($i=1 ; $i<= $this->greeting11 ; $i++ ) {  ?>

                <option value="<?php echo $i; ?>"><?php echo 'Pozycja nr '. $i; ?></option>
            <?php     }
            ?>
        </select>
    </div>



    <div class="form-group">
        <label for="nazwa">Wybierz Kategorię</label>

        <select id="myselect" name="task3">
            <option value="0"></option>
            <?php
            foreach ($this->greeting2 as  $val) {  ?>
                <option value="<?php echo $val[0]; ?>"><?php echo $val[1]; ?></option>
            <?php     }  ?>
        </select>
    </div>

    <div class="form-group">
        <label>Opis Projektu</label>
        <?php
        foreach ($this->greeting5 as  $val) {  ?>
             <textarea name="opisprojektu"><?php echo $val[0]; ?></textarea>
            <label >Krótki Opis Projektu</label>
            <input type="text" value="<?php echo $val[1]; ?>"  name="k_opisprojektu">
        <?php     }  ?>

    </div>
    <div class="form-group">
        <label for="pliki">Aktualne zdjecie Projektu</label>

              <img style="max-height: 300px ; width: auto" src="components/com_gallery/imgk/<?php  echo $this->greeting3; ?>.jpg">
               <input type="hidden" name="task7" value="<?php echo $this->greeting3;?>">

        <input type="file" id="pliki" multiple="multiple"  name="task4[]">
    </div>
    </br>
    <button type="submit" name="wyslij" class="btn btn-primary">Wyślij</button>


</form>

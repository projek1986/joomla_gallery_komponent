<?php
defined('_JEXEC') or die('Restricted access');
$link_global	 	= JRoute::_('index.php?option=com_gallery');

?>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
    $( document ).ready(function() {

        $('#myselectsort').val('<?php echo $this->greeting10+1; ?>');
    });

</script>

<div class="jbicon-container">
    <div class="jbicon"> <a href="<?php echo $link_global; ?>"><img src="components/com_gallery/images/pointingArrow.png" align="middle" border="0" alt="" /><span><?php echo 'Powrót Do Panelu'; ?></span></a></div>
</div>





<form action="index.php?option=com_gallery&amp;view=project&amp;task=" method="post" enctype="multipart/form-data">




                <div class="form-group">
                    <label for="nazwa">Podaj nazwę Projektu</label>
                    <input type="text" id="nazwa" name="task" class="form-control" required>
                </div>

            <div class="form-group">
                <label for="nazwa">Opis Projektu</label>

               <textarea  name="opisproj" id="nazwa" class="form-control" required></textarea>
            </div>

    <div class="form-group">
        <label for="nazwa">Krótki Opis Projektu</label>
        <input type="text" id="nazwa" name="task5" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="nazwa">Wybierz kategorie projektu</label>

    <select name="task3">
         <?php

        foreach ($this->greeting2 as  $val) {  ?>

            <option value="<?php echo $val[0]; ?>"><?php echo $val[1]; ?></option>
        <?php     }  ?>
    </select>
    </div>

    <div class="form-group">
        <label for="nazwa">Wybierz kolejność projektu</label>

        <select id="myselectsort" name="task10">
            <?php

            for ($i=1 ; $i<= $this->greeting10+1 ; $i++ ) {  ?>

                <option value="<?php echo $i; ?>"><?php echo 'Pozycja nr '. $i; ?></option>
            <?php     }
            ?>
        </select>
    </div>

    <div class="form-group">
        <label for="pliki">Wybierz zdjęcia Projektu</label>
        <input type="file" id="pliki"  name="task4[]">
    </div>
</br>
                <button type="submit" name="wyslij" class="btn btn-primary">Dodaj zdjęcia</button>



            </form>




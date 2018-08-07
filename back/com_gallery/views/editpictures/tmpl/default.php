<?php
defined('_JEXEC') or die('Restricted access');
$link_global	 	= JRoute::_('index.php?option=com_gallery');

?>
<div class="jbicon-container">
    <div class="jbicon"> <a href="<?php echo $link_global; ?>"><img src="components/com_gallery/images/pointingArrow.png" align="middle" border="0" alt="" /><span><?php echo 'Powrót Do Panelu'; ?></span></a></div>
</div>

<h3> Wybierz Zdjecie do edycji </h3>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nazwa Projektu Przypisanego do zdjecia </th>
            <th>Zdjęcie</th>
            <th>Opcje</th>
        </tr>
        </thead>
        <tbody>


            <?php

            foreach ($this->greeting2 as  $val) {

            ?>
            <tr>
                <td><?php echo $val[0]; ?></td>
                <td><?php echo $val[1]; ?></td>
                <td><img src="components/com_gallery/img/<?php echo $val[0]; ?>.jpg" class="img-thumbnail" style="width:30px;height:30px;"></td>
                <td><a href="index.php?option=com_gallery&amp;view=onepicture&amp;task=<?php echo $val[0]; ?>" type="button" class="btn btn-xs btn-primary">Edycja Zdjecia</a>
                <a href="index.php?option=com_gallery&task=delpicture.delete&id=<?php echo $val[0]; ?>" type="button" class="btn btn-xs btn-primary">Usuń zdjecie</a></td>
            </tr>
            <?php     }  ?>
        </tbody>
    </table>
    </br>



</form>

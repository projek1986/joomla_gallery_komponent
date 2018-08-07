<?php
defined('_JEXEC') or die('Restricted access');
$link_global	 	= JRoute::_('index.php?option=com_gallery');

?>
<div class="jbicon-container">
    <div class="jbicon"> <a href="<?php echo $link_global; ?>"><img src="components/com_gallery/images/pointingArrow.png" align="middle" border="0" alt="" /><span><?php echo 'Powrót Do Panelu'; ?></span></a></div>
</div>

<h3> Wybierz projekt do edycji </h3>
<form action="index.php?option=com_gallery&amp;view=editproject"  method="post" >




    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nazwa Projektu </th>
            <th>Kolejność Projektu </th>
            <th>Zdjęcie Projektu </th>

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
                <td><?php echo $val[4]; ?></td>
                <td><img src="components/com_gallery/imgk/<?php echo $val[2]; ?>.jpg" class="img-thumbnail" style="width:30px;height:30px;"></td>
                <td><a href="index.php?option=com_gallery&amp;view=oneproject&amp;task=<?php echo $val[0]; ?>" type="button" class="btn btn-xs btn-primary">Edycja Projektu</a>

                <a href="index.php?option=com_gallery&task=delproject.delete&id=<?php echo $val[0]; ?>" type="button" class="btn btn-xs btn-primary">Usuń Projekt</a></td>
            </tr>
            <?php     }  ?>
        </tbody>
    </table>
    </br>



</form>

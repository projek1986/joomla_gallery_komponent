<?php
defined('_JEXEC') or die('Restricted access');
$link_global	 	= JRoute::_('index.php?option=com_gallery');
$link_edit	 	= JRoute::_('index.php?option=com_gallery&view=edit');

?>
<div class="jbicon-container">
    <div class="jbicon"> <a href="<?php echo $link_global; ?>"><img src="components/com_gallery/images/pointingArrow.png" align="middle" border="0" alt="" /><span><?php echo 'Powrót Do Panelu'; ?></span></a></div>
	<div class="jbicon"> <a href="<?php echo $link_edit; ?>"><img src="components/com_gallery/images/pointingArrow.png" align="middle" border="0" alt="" /><span><?php echo 'Powrót Do Edycji'; ?></span></a></div>
</div>

<form action="index.php?option=com_gallery&amp;view=onecategory&amp;task=" method="post" >

    <h3>Kategorie</h3>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nazwa Kategori </th>
            <th>Opcje</th>
        </tr>
        </thead>
        <tbody>


        <?php

        foreach ($this->greeting as  $val) {

            ?>
            <tr>
                <td><input type="hidden" name="task" value="<?php echo $val[0]; ?>"> <?php echo $val[0]; ?></td>
                <td><input type="text" value="<?php echo $val[1]; ?>" name="task8"></td>
                <td><input type="submit" class="btn btn-xs btn-primary">
            </tr>
        <?php     }  ?>
        </tbody>
    </table>
    </br>


</form>



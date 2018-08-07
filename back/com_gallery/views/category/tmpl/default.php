<?php
defined('_JEXEC') or die('Restricted access');
$link_global	 	= JRoute::_('index.php?option=com_gallery');

?>
<div class="jbicon-container">
    <div class="jbicon"> <a href="<?php echo $link_global; ?>"><img src="components/com_gallery/images/pointingArrow.png" align="middle" border="0" alt="" /><span><?php echo 'Powrót Do Panelu'; ?></span></a></div>
</div>

<form action="index.php?option=com_gallery&amp;view=category&amp;task=" method="post" >

<h3> Dodaj Nową Kategorie</h3>

    <label for="task4">Nazwa Organizatora</label>
    <input type="text" name="task" value="<?php $dodaj ?>" required>
    </br>



<div class="text-center">
</br>
    <input type="submit" class="btn btn-primary btn-secondary" value="Dodaj">
</div>

</form>



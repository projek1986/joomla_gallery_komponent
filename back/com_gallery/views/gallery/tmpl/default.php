<?php
defined('_JEXEC') or die('Restricted access');

$link_pictures	 	= JRoute::_('index.php?option=com_gallery&view=pictures');
$link_projects 		= JRoute::_('index.php?option=com_gallery&view=project');
$link_category		= JRoute::_('index.php?option=com_gallery&view=category');
$link_edit		    = JRoute::_('index.php?option=com_gallery&view=edit');

?>


<table width="100%">
    <tr>
        <td width="100%" valign="top">
            <table width="100%" border="0">
                <tr>
                    <td align="center" width="55%" valign="top">
                        <table class="table">
                            <thead>
                            <tr><th><?php echo 'Panel'; ?></th></tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td align="center">
                                    <div id="cpanel" >
                                        <div class="jbicon-container">
                                            <div class="jbicon"> <a href="<?php echo $link_pictures; ?>"><img src="components/com_gallery/images/project.png" align="middle" border="0" alt="" /><span><?php echo 'Zdjęcia'; ?></span></a></div>
                                        </div>
                                        <div class="jbicon-container">
                                            <div class="jbicon"> <a href="<?php echo $link_projects ?>"><img src="components/com_gallery/images/config.png" align="middle" border="0" alt="" /><span><?php echo 'Projekty'; ?></span></a></div>
                                        </div>
                                        <div class="jbicon-container">
                                            <div class="jbicon"> <a href="<?php echo $link_category	 ?>"><img src="components/com_gallery/images/category.png" align="middle" border="0" alt="" /><span><?php echo 'Kategorie'; ?></span></a></div>
                                        </div>
                                        <div class="jbicon-container">
                                            <div class="jbicon"> <a href="<?php echo $link_edit	 ?>"><img src="components/com_gallery/images/report.png" align="middle" border="0" alt="" /><span><?php echo 'Edycja'; ?></span></a></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                    <td width="4%"></td>
                    <td width="45%" valign="top">
                       GALERRY PORTFOLIO
                        <table class="<?php echo $tableClass; ?>">
                            <tr>
                                <td colspan="2">
                                    <a href="http://www.ajmer.pl" target="_blank">
                                        <img src="http://ajmer.pl/images/ajmer.png" align="middle" alt="JoomBri" style="border: none; margin: 8px;">
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p style="font-weight:700;">
                                       Gallery Portfolio - komponent zarządzania
                                    </p>
                                    <p>
                                        Dziękujemy za użycie dedykowanego oprogramowania Gallery Portfolio przygotowanego przez Ajmer.pl
                                    </p>
                                    <p>

                                        <a href="http://ajmer.pl" target="_blank">
                                            http://www.ajmer.pl
                                        </a>
                                    </p>
                                    <p>

                                    </p>
                                </td>
                            </tr>



                        </table>
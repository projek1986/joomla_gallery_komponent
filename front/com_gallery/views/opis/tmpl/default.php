
<link href="administrator/components/com_gallery/assets/css/lightbox.css" rel="stylesheet" />
<script src="administrator/components/com_gallery/assets/js/jquery-1.11.0.min.js"></script>
<script src="administrator/components/com_gallery/assets/js/lightbox.min.js"></script>

<div class="portfolio">
    <?php
if ($this->greeting2 !='') {
    foreach ($this->greeting2 as  $val) {  ?>

        <a href="administrator/components/com_gallery/img/<?php echo $val[0]; ?>.jpg" data-lightbox="<?php echo $val[0]; ?>" data-title="<?php echo $val[1]; ?>">
            <img width="125px" height="96px" src="administrator/components/com_gallery/img/<?php echo $val[0]; ?>.jpg" alt="Illustration" /></a>

    <?php     } } ?>


    <?php
    if ($this->greeting3 !='') {

    foreach ($this->greeting3 as  $val) {  ?>
        <p><?php echo $val[0]; ?>  </p>
    <?php     } } ?>



</div>




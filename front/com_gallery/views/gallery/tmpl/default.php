<link rel="stylesheet" href="administrator/components/com_gallery/assets/css/styles.css" />
<link rel="stylesheet" href="administrator/components/com_gallery/assets/css/animated-masonry-gallery.css" />
<link rel="stylesheet" href="administrator/components/com_gallery/assets/css/lightbox.css"  />
<link rel="stylesheet" href="administrator/components/com_gallery/assets/css/screen.css"  />
<script type="text/javascript" src="administrator/components/com_gallery/assets/js/jquery-2.0.2.min.js"></script>
<script type="text/javascript" src="administrator/components/com_gallery/assets/js/jquery-ui-1.10.4.min.js"></script>
<script type="text/javascript" src="administrator/components/com_gallery/assets/js/jquery.isotope.min.js"></script>
<script type="text/javascript" src="administrator/components/com_gallery/assets/js/animated-masonry-gallery.js"></script>
<script type="text/javascript" src="administrator/components/com_gallery/assets/js/lightbox.min.js"></script>
<script>
    $(window).load(function () {
        var size = 1;
        var button = 1;
        var button_class = "gallery-header-center-right-links-current";
        var normal_size_class = "gallery-content-center-normal";
        var full_size_class = "gallery-content-center-full";
        var $container = $('#gallery-content-center');

        $container.isotope({itemSelector : 'figure'});


        function check_button(){
            $('.gallery-header-center-right-links').removeClass(button_class);
            if(button==1){
                $("#filter-all").addClass(button_class);
                $("#gallery-header-center-left-title").html('All Galleries');
            }
            if(button==2){
                $("#filter-studio").addClass(button_class);
                $("#gallery-header-center-left-title").html('Studio Gallery');
            }
            if(button==3){
                $("#filter-landscape").addClass(button_class);
                $("#gallery-header-center-left-title").html('Landscape Gallery');
            }
        }

        function check_size(){
            $("#gallery-content-center").removeClass(normal_size_class).removeClass(full_size_class);
            if(size==0){
                $("#gallery-content-center").addClass(normal_size_class);
                $("#gallery-header-center-left-icon").html('<span class="iconb" data-icon="&#xe23a;"></span>');
            }
            if(size==1){
                $("#gallery-content-center").addClass(full_size_class);
                $("#gallery-header-center-left-icon").html('<span class="iconb" data-icon="&#xe23b;"></span>');
            }
            $container.isotope({itemSelector : 'figure'});
        }

        $("#filter-all").click(function() { $container.isotope({ filter: '.all' }); button = 1; check_button(); });
        <?php

      foreach ($this->greeting4 as  $val) {  ?>
    $("#filter-<?php echo $val[1]; ?>").click(function() {  $container.isotope({ filter: '.<?php echo $val[1]; ?>' }); button = 2; check_button();  });
        <?php
           }
       ?>
	   
	  /* function set_columns(){

        var w = $container.width(),
            columnNum = 1,
            columnWidth = 0;


        if (w > 1600){
            columnNum  = 5;
        }else if (w > 1100) {
            columnNum  = 4;
        } else if (w > 700) {
            columnNum  = 4;
        } else if (w > 400) {
            columnNum  = 3;
        } else if (w < 280) {
            columnNum  = 1;
        }

       columnWidth = Math.floor(w/columnNum);
       $container.find('figure').each(function() {

            $(this).css({
               width: columnWidth
            });
        });

        $container.isotope({
            resizable: false,
            itemSelector: 'figure',
            masonry: {
                columnWidth: columnWidth

            }
        });
    }*/
	   
	
	   
        check_button();
        check_size();
		/*
		set_columns();
		
		$(window).resize(function(){
			set_columns();
		});*/
		/*zakomentowane bloki do dostosowywyanie kazdego figure do szerokosci kolumny*/
    });

</script>
<div class="special-gallery">

<form action="" method="get" >
    <div id="gallery">
        <div id="gallery-header">
                <div id="gallery-header-center-left">
                    <div class="gallery-header-center-right-links" id="filter-all">All</div>
                    <?php foreach ($this->greeting4 as  $val) {  ?>
                    <div class="gallery-header-center-right-links" id="filter-<?php echo $val[1]; ?>"><?php echo $val[0]; ?></div>
                    <?php
                    }
                    ?>
            </div>
        </div>
		
		
        <div id="gallery-content">
			<div id="gallery-content-center">
			<div class="grid">
					<?php
					
					$numer = 1;
					foreach ($this->greeting as  $val) {  ?>
					
					<figure class="all <?php echo $val[4]; ?>" onClick="sprawdzFormularz(<?php echo $numer; ?>);">
					<div class="over"></div>
						<input type="hidden" name="task" id="tf<?php echo $numer; ?>" value="<?php echo $val[3]; ?>" >
						<img  name="task"  id="bWyslij" value="<?php echo $numer; ?>"   src="administrator/components/com_gallery/imgk/<?php echo $val[0]; ?>.jpg" alt="Illustration" />
						<h3><?php echo $val[1]; ?></h3>
						<p><?php echo $val[5]; ?></p>
                        <input type="hidden" id="numer" value="<?php echo $numer; ?>">

					</figure>
					
					<?php
						$numer =  $numer+1;
						}
					?>
			</div>
            </div>
        </div>
    </div>

</form>



<!---->
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>-->
<!--<script src="administrator/components/com_gallery/assets/js/jquery.quicksand.js"></script>-->
<!--<script src="administrator/components/com_gallery/assets/js/script.js"></script>-->

<script>

    function sprawdzFormularz(id) {

        zadanie = "";
        zadanie = new XMLHttpRequest();
        var liczba =document.getElementsByTagName('figure').length;
        var poleEmail = document.getElementById('tf'+id).value;
        var url = "administrator/components/com_gallery/views/zapisz_do_bazy.php?task=" + poleEmail + "&name=" + id + "&licz=" + liczba;
        zadanie.onreadystatechange = rejestracjaZakonczona;
        zadanie.open("GET", url, true);
        zadanie.send();
    }



    function rejestracjaZakonczona(){
        if(zadanie.readyState == 4 && zadanie.status == 200)
        {
			var pole =  document.getElementById("warstwaDanych");
            pole.innerHTML = zadanie.responseText;
			//pole.setAttribute("class", "showMe");
        }
    }
	
	function closeBox(){
		 document.getElementById("warstwaDanych").setAttribute("class", "zwykla");
	}

	
</script>
<script>
	$( "figure" ).click(function() {
			var odGory = $(this).offset().top;
			var offset = 100;
			//alert( odGory);
			$( "#warstwaDanych" ).removeClass( "zwykla" ).addClass( "showMe" );
			$('#warstwaDanych').css('top', odGory - offset + 'px');
});
</script>


<div class="container">

<div id="warstwaDanych" class="zwykla">
</div>
</div>
</div>


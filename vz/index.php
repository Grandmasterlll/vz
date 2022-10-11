<?php

/*
 *  главная страница  []
 *
HOME
PRODUCT
CONTACTS
ABOUT US
 */
$title="HOME";
require_once('main.php');
require_once('links.php');
$main = new main();

//$index = new index();
?>
<!DOCTYPE html>
<html lang="en">
<?php
$main->head($title);
?>

<body >


<div class="container-md">
<?php
$main->header(index(),PRODUCT(),CONTACTS(),ABOUT_US(),indexH1());
?>
</div>
<br>
<div class="container-md">
<?php
$main->Carousel();
?>
    <br>
</div>
<!--
####################################
-->
<div class="container-md">

<?php
$main->element_H3();
?>

<br>
<?php
$main->card();
?>
</div>
<br>
<div class="container-md"><br>
<?php
$main->element_H3_OUR_PARTNERS();
?><br> </div>
<?php
$main->OUR_PARTNERS();
?>
<div class="container-md"><br>
    <br><br><br><br><br>
    </div>
<br>
<div class="container-md"><br>
    <?php
    $main->element_H3_OUR_ADVANTAGES();
    ?><br></div>
    <?php
    $main->OUR_ADVANTAGES();
    ?>
<div class="container-md"><br>
    <br><br><br><br><br>
</div>
<br>
<div class="container-md"><br>
    <?php
    $main->element_H3_n4();
    ?><br>
    <?php
    $main->p3();
    ?>
</div>

<?php
$main->footer();
?>
<!--
<div class="container-md">

</div>
-->
<?php
$main->jss();
?>
<script type="text/javascript">

    $(window).load(function() {
        $("#flexiselDemo1").flexisel();

        $("#flexiselDemo2").flexisel({
            visibleItems: 4,
            itemsToScroll: 3,
            animationSpeed: 200,
            infinite: true,
            navigationTargetSelector: null,
            autoPlay: {
                enable: false,
                interval: 5000,
                pauseOnHover: true
            },
            responsiveBreakpoints: {
                portrait: {
                    changePoint:480,
                    visibleItems: 1,
                    itemsToScroll: 1
                },
                landscape: {
                    changePoint:640,
                    visibleItems: 2,
                    itemsToScroll: 2
                },
                tablet: {
                    changePoint:768,
                    visibleItems: 3,
                    itemsToScroll: 3
                }
            },
            loaded: function(object) {
                console.log('Slider loaded...');
            },
            before: function(object){
                console.log('Before transition...');
            },
            after: function(object) {
                console.log('After transition...');
            },
            resize: function(object){
                console.log('After resize...');
            }
        });

        $("#flexiselDemo3").flexisel({
            visibleItems: 3,
            itemsToScroll: 1,
            autoPlay: {
                enable: true,
                interval: 5000,
                pauseOnHover: true
            }
        });
        $("#flexiselDemo5").flexisel({
            visibleItems: 3,
            itemsToScroll: 1,
            autoPlay: {
                enable: true,
                interval: 5000,
                pauseOnHover: true
            }
        });

        $("#flexiselDemo4").flexisel({
            infinite: false
        });

    });
</script>

</body>
</html>
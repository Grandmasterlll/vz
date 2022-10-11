<?php

/*
 *  контакты \ CONTACTS  []
 *
HOME
PRODUCT
CONTACTS
ABOUT US
 */
$title="CONTACTS";
require_once('main.php');
require_once('links.php');
require_once('main_contacts.php');
$main = new main();
$contacts = new main_contacts();

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
    $contacts->header(index(),PRODUCT(),CONTACTS(),ABOUT_US());
    //CONTACTS / КОНТАКТЫ header(index(),PRODUCT(),CONTACTS(),ABOUT_US());
    ?>
</div>
<br>
<div class="container-md">
    <div class="p-3 mb-2 bg-white text-dark" style="height: 500px; ">
        <?php
        $contacts->map();
        ?>
    </div>
</div>
<br>
<div class="container-md">
    <?php
    $contacts->row();
    ?>
</div>
<!--
####################################
-->





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
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript">

</script>
<script>
    var map;
    var marker;
    function initMap ()
    {
        map = new ymaps.Map("yandexmap", {
            center: [56.039017, 92.894853],
            zoom: 15
        });
        marker = new ymaps.Placemark([56.039017, 92.894853], {
            hintContent: 'Расположение',
            balloonContent: 'Это наша организация'
        });
        map.geoObjects.add(marker);
    }
    ymaps.ready(initMap);
</script>


</body>
</html>
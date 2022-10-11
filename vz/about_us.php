<?php

/*
 *  о нас \ ABOUT US  []
 *
HOME
PRODUCT
CONTACTS
ABOUT US
 */
$title="ABOUT US";
require_once('main.php');
require_once('links.php');
require_once('main_about_us.php');
$main = new main();
$about_us = new main_about_us();

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
    $main->header();
    ?>
</div>
<br>

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


</body>
</html>
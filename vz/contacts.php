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
    $main->header();
    ?>
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


</body>
</html>
<?php

/*
 *  продукт \ PRODUCT  []
 *
HOME
PRODUCT
CONTACTS
ABOUT US
 */
$title="PRODUCT";
require_once('main.php');
require_once('links.php');
require_once('main_product.php');
$main = new main();
$product = new main_product();

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
    $main->header(index(),PRODUCT(),CONTACTS(),ABOUT_US(),productH1());
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
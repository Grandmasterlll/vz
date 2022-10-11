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
#################################### 5
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


<?php
$main->footer(index(),PRODUCT(),CONTACTS(),ABOUT_US());
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
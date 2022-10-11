<?php
/*
 HOME
PRODUCT
CONTACTS
ABOUT US
index
product
contacts
about_us
 */
function index(){
    $index="index.php";
    return $index;
}
function PRODUCT(){
    $PRODUCT="product.php";
    return $PRODUCT;
}
function CONTACTS(){
    $CONTACTS="contacts.php";
    return $CONTACTS;
}
function ABOUT_US(){
    $ABOUT_US="about_us.php";
    return $ABOUT_US;
}
function indexH1(){
    $index='
    <h1 class="mb-3">Antynea</h1>
    <h4 class="mb-3">ООО АНТИНЕЯ В МИНСКЕ ОФИЦИАЛЬНЫЙ САЙТ</h4>
    <a class="btn btn-primary" href="" role="button">Call to action</a>
    ';
    return $index;
}
function about_usH1(){
    $index='
    <h1 class="mb-3">О НАС</h1>

    ';
    return $index;
}
function productH1(){
    $index='
    <h1 class="mb-3">ПРОДУКЦИЯ</h1>

    ';
    return $index;
}
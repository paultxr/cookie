<?php

function addArticle($cookie)
{
    if(!empty($_SESSION['cart'][$cookie])){
        $_SESSION['cart'][$cookie]++;
    } else {
        $_SESSION['cart'][$cookie] = 1;
    }
}

function removeArticle($cookie)
{
    $panier = $_SESSION['cart'];
    if(!empty($panier[$cookie])){
        unset($panier[$cookie]);
    }
    $_SESSION['cart'] = $panier;
}


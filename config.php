<?php
/**
 * Created by PhpStorm.
 * User: alexlopez
 * Date: 5/7/15
 * Time: 2:15 PM
 */

require_once('vendor/autoload.php');

$stripe = array(
    "secret_key"      => " sk_test_9Fo9OnoHGDj6QBQfc5M8AaWL ",
    "publishable_key" => " pk_test_rYcqyBZR23rcUFn1nfpK8GDg "
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>
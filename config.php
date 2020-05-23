<?php
require_once('stripe/init.php');

$stripe = array(
  "secret_key"      => "sk_test_5UEPEpYK96u2gWZhE4r19OqS00QSc21c3x",
  "publishable_key" => "pk_test_TJZn6rQRIUq6yfMZ79YuZFd9"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>
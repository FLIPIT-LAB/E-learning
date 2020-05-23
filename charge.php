<?php
  require_once('./config.php');
  require_once('stripe\init.php');

  $token  = $_POST['stripeToken'];
  $email  = $_POST['stripeEmail'];

  $customer = \Stripe\Customer::create(array(
      'email' => $email,
      'card'  => $token
  ));

  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => 14900,
      'currency' => 'usd',
      'description' => 'Courses'
  ));

  echo "<script>
	alert('Payment successful. You will be redirected to your purchesed videos')
	window.top.location='./playlist.php'
	</script>";
?>
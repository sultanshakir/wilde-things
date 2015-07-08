<?php
require_once('public/vendor/autoload.php');
$stripe = array(
	'secret_key'      => 'sk_test_iH5S82esrVKb87r4cUYk8oFq',
  'publishable_key' => 'pk_test_8uTNNMhFoIoWgGNbAzhU4BJX'
);
\Stripe\Stripe::setApiKey($stripe['secret_key']);
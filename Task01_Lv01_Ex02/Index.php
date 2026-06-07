<?php
declare(strict_types=1);

require_once "PaymentGateway.php";
require_once "PaymentProcessor.php";
require_once "PaypalPaymentGateway.php";
require_once "StripePaymentGateway.php";


$paypalGateway= new PayPalPaymentGateway();
$processor1 = new PaymentProcessor($paypalGateway);

$stripeGateway = new StripePaymentGateway();
$processor2 = new PaymentProcessor($stripeGateway);

echo $processor1->processPayment(500);
echo $processor2->processPayment(350);
<?php
declare(strict_types=1);

class PayPalPaymentGateway implements PaymentGateway
{
    public function sendPayment(float $amount): string
    {
        return "{$amount} payment processed by Paypal \n";
    }
}

<?php
declare(strict_types=1);

interface PaymentGateway
{
    public function sendPayment(float $amount): string;

}
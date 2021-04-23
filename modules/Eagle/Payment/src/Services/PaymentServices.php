<?php

namespace Eagle\Payment\Services;
use Eagle\Payment\Gateways\Gateway;
use Eagle\Payment\Models\Payment;
use Eagle\Payment\Repositories\PaymentRepo;
use Eagle\User\Models\User;

class PaymentServices
{
    public static function generate($amount, $paymentable, User $user, $seller_id = null)
    {
        if ($amount <= 0 || is_null($paymentable->id) || is_null($user->id)) return false;
        $gateway = resolve(Gateway::class);
        $invoice = $gateway->request($amount, $paymentable->title);
        if (is_array($invoice)) {
//            todo handle khata
        }
        return resolve(PaymentRepo::class)->store([
            "buyer_id" => $user->id,
            "paymentable_id" => $paymentable->id,
            "paymentable_type" => get_class($paymentable),
            "amount" => $amount,
            "seller_id" => $seller_id,
            "invoice_id" => $invoice,
            "getway" => $gateway->getName(),
            "status" => Payment::STATUS_PENDING,
        ]);
    }
}

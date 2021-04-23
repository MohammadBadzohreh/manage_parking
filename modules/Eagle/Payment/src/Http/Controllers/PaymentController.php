<?php

namespace Eagle\Payment\Http\Controllers;

use App\Http\Controllers\Controller;
use Eagle\Payment\Events\SuccessfulPayment;
use Eagle\Payment\Gateways\Gateway;
use Eagle\Payment\Models\Payment;
use Eagle\Payment\Repositories\PaymentRepo;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function callback(Request $request)
    {
        $gateway = resolve(Gateway::class);
        $paymentRepo = new PaymentRepo();
        $payment = $paymentRepo->findByInvoiceId($gateway->getInvoiceIdFromRequest($request));
        if (!$payment) {
            newFeedback("تراکنش ناموفق", "تراکنش مورد نظر یافت نشد.");
            return redirect("/");
        }
        $reslut = $gateway->verify($payment);
        if (is_array($reslut)) {
            newFeedback("عملیات ناموفق", $reslut["message"]);
            $paymentRepo->changeStatus($payment->id, Payment::STATUS_FAIL);
        } else {
            event(new SuccessfulPayment($payment));
            newFeedback("عملیات موفقیت آمیز", "پرداخت با موفقیت انجام شد.");
            $paymentRepo->changeStatus($payment->id, Payment::STATUS_ACCEPTED);
        }
        return redirect()->to($payment->paymentable->path());

    }

    public function transactions (PaymentRepo $paymentRepo)
    {
        $dates = collect();
        foreach (range(-30, 0) as $i) {
            $dates->put(now()->addDays($i)->format("Y-m-d"), 0);
        }
        $summry = $paymentRepo->getsummary($dates);

        return view("Payment::transactions",compact("dates","summry"));
    }

}

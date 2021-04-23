<?php

namespace Eagle\Payment\Repositories;

use Eagle\Payment\Models\Payment;
use Illuminate\Support\Facades\DB;

class PaymentRepo
{
    public static function store($data)
    {
        return Payment::create([
            "buyer_id" => $data["buyer_id"],
            "paymentable_id" => $data["paymentable_id"],
            "paymentable_type" => $data["paymentable_type"],
            "amount" => $data["amount"],
            "invoice_id" => $data["invoice_id"],
            "getway" => $data["getway"],
            "status" => $data["status"],
        ]);
    }

    public function findByInvoiceId($invoiceId)
    {
        return Payment::query()->where("invoice_id", $invoiceId)->first();
    }

    public function changeStatus($id, string $status)
    {
        return Payment::query()->where("id", $id)->update([
            "status" => $status
        ]);
    }

    public function getsummary($dates)
    {

        $query = Payment::query()->where("created_at", ">=", $dates->keys()->first());
        $payments = $query->orderBy("date")
            ->groupBy("date")
            ->get([
                DB::raw("DATE(created_at) as date"),
                DB::raw("SUM(amount) as amount"),
            ]);

        return $payments;
    }
}

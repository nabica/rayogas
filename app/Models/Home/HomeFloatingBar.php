<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeFloatingBar extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_request_url',
        'customer_service_url',
        'pay_invoice_credit_url',
        'pay_invoice_cash_url'
    ];
}

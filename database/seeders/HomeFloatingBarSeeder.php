<?php

namespace Database\Seeders;

use App\Models\Home\HomeFloatingBar;
use Illuminate\Database\Seeder;

class HomeFloatingBarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HomeFloatingBar::factory()->create([
            'order_request_url' => 'https://api.whatsapp.com/send?phone=+573102388245&text=%C2%A1Hola!%20quiero%20solicitar%20un%20pedido,%20%C2%BFpodr%C3%ADas%20ayudarme%20por%20favor?%20',
            'customer_service_url' => 'https://api.whatsapp.com/send?phone=+573102388245&text=%C2%A1Hola!%20quiero%20hablar%20con%20un%20asesor%20por%20favor%20',
            'pay_invoice_credit_url' => 'https://rayogas.epayco.me/recaudo/clientescredito',
            'pay_invoice_cash_url' => 'https://rayogaspagocredito.epayco.me/recaudo/clientescreditoefectivo',
        ]);
    }
}

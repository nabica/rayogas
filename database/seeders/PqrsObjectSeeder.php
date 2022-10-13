<?php

namespace Database\Seeders;

use App\Models\Pqrs\PqrsObject;
use Illuminate\Database\Seeder;

class PqrsObjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PqrsObject::factory()->create(['name' => 'Calidad del gas']);
        PqrsObject::factory()->create(['name' => 'Duración del gas']);
        PqrsObject::factory()->create(['name' => 'Servicio técnico']);
        PqrsObject::factory()->create(['name' => 'Demora del pedido']);
        PqrsObject::factory()->create(['name' => 'Novedad del contrato']);
        PqrsObject::factory()->create(['name' => 'Escape de gas']);
        PqrsObject::factory()->create(['name' => 'Subsidios']);
        PqrsObject::factory()->create(['name' => 'Reclamación o beneficio 12x1']);
    }
}

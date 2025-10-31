<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Estado;

class EstadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Estado::create([
            'name' => 'Activo',
            'belong' => 'user'
        ]);
        
        Estado::create([
            'name' => 'Inactivo',
            'belong' => 'user'
        ]);
        
        Estado::create([
            'name' => 'Disponible',
            'belong' => 'product'
        ]);
        
        Estado::create([
            'name' => 'Agotado',
            'belong' => 'product'
        ]);
    }
}

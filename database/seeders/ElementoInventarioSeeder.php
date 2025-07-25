<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ElementoInventario; // Importamos el modelo

class ElementoInventarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ElementoInventario::create([
            'nombre_elemento' => 'Kit de Extracción de ARN',
            'lote' => 'LOTE-2025-A1',
            'marca' => 'BioHealth',
            'fecha_vencimiento' => '2026-12-31',
            'existencias_elemento' => 50,
            'laboratorio_id' => 1, // Asume que el ID del laboratorio es 1
            'categoria_id' => 1,   // Asume que el ID de la categoría es 1
        ]);

        ElementoInventario::create([
            'nombre_elemento' => 'Agar MacConkey',
            'lote' => 'LOTE-2024-B2',
            'marca' => 'ProQuímicos S.A.S',
            'fecha_vencimiento' => '2025-11-30',
            'existencias_elemento' => 120,
            'laboratorio_id' => 1, // Asume que el ID del laboratorio es 1
            'categoria_id' => 2,   // Asume que el ID de la categoría es 2
        ]);
    }
}
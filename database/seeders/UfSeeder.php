<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Uf;

class UfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Uf::insert([
            [
                'num_uf' => '1',
                'nom_uf' => 'Programació estructurada',
                'hores_uf' => '100',
                'mp_id' => '1',
    
            ],
        ]);
        Uf::factory(100)->create();
    }
}

<?php

namespace Database\Seeders;

use App\Http\Resources\MpResource;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mp;

class MpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mp::insert([
            [
                'num_mp' => '3',
                'nom_mp' => 'Programació',
    
            ],
        ]);
        Mp::factory(10)->create();
    }
}

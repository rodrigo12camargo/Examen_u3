<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gama;
use App\Models\Modelo;
use App\Models\Marca;
use Illuminate\Support\Facades\DB;

class modelosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Marcas = ['Oppo', 'Samsung','Motorola', 'Xiaomi','Iphone'];
        $modelos = ['OppoA54','SamsungA10s','MotorolaA20','XiaomiA20','IphoneA11'];
        $gamas = ['Alta','Media'];
        foreach ($Marcas as $Marcas){
            DB::table('Marcas')->insert([
                'nombre'=> $Marcas[rand(0,4)],
                'id_modelo' => $modelos[rand(0,2)],
                'id_gamas'=>$gamas[rand(0,4)],


                
            ]);
        }
    }
}


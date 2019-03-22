<?php

use Illuminate\Database\Seeder;
use App\Statu;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //status pedidos
        Statu::create([
            'nome'    => 'Aberto',
        ]);
        Statu::create([
            'nome'    => 'Fechado',
        ]);
        //estatus estoque
        Statu::create([
            'nome'    => 'Em falta',
        ]);
        Statu::create([
            'nome'    => 'Ativo',
        ]);
    }
}

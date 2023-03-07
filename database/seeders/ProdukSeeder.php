<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Models\Produk;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produk = [
            [
                'name_produk' => 'jaket',
               'harga_awal'=>'rp.100000',
                'detail'=>'ladaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
               
            ],
           
        ];
    }
}

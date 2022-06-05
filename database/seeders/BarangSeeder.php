<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Barang::create([
            'nama_barang'       => 'Lab PTIPD',
            'jumlah_barang'     => 4,
        ]);

        Barang::create([
            'nama_barang'       => 'Mobil Dinas',
            'jumlah_barang'     => 1,
        ]);

        Barang::create([
            'nama_barang'       => 'Zoom Premium',
            'jumlah_barang'     => 1,
        ]);

        Barang::create([
            'nama_barang'       => 'Lab A PTIPD',
            'jumlah_barang'     => 1,
            'level'             => 2,
            'induk_id'          => 1,
        ]);

        Barang::create([
            'nama_barang'       => 'Lab B PTIPD',
            'jumlah_barang'     => 1,
            'level'             => 2,
            'induk_id'          => 1,
        ]);

        Barang::create([
            'nama_barang'       => 'Lab C PTIPD',
            'jumlah_barang'     => 1,
            'level'             => 2,
            'induk_id'          => 1,
        ]);

        Barang::create([
            'nama_barang'       => 'Lab D PTIPD',
            'jumlah_barang'     => 1,
            'level'             => 2,
            'induk_id'          => 1,
        ]);
    }
}

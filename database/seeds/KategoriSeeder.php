<?php

use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategoris')->insert([
        'nama_kategori' => 'Gaji',
        'deskripsi' => 'Gaji dari pt technopartner',
        'kategori' => 'pemasukan',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('kategoris')->insert([
        'nama_kategori' => 'Tunjangan',
        'deskripsi' => 'Tunjangan dari pt technopartner',
        'kategori' => 'pemasukan',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('kategoris')->insert([
        'nama_kategori' => 'Bonus',
        'deskripsi' => 'Bonus dari pt technopartner',
        'kategori' => 'pemasukan',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('kategoris')->insert([
        'nama_kategori' => 'Sewa Kost',
        'deskripsi' => 'Sewa kost muslim',
        'kategori' => 'penggeluaran',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('kategoris')->insert([
        'nama_kategori' => 'Sewa Kost',
        'deskripsi' => 'Sewa kost muslim',
        'kategori' => 'penggeluaran',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('kategoris')->insert([
        'nama_kategori' => 'Makan',
        'deskripsi' => 'penggeluaran untuk makan',
        'kategori' => 'penggeluaran',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('kategoris')->insert([
        'nama_kategori' => 'Pakaian',
        'deskripsi' => 'Penggeluaran untuk pakaian',
        'kategori' => 'penggeluaran',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('kategoris')->insert([
        'nama_kategori' => 'Nonton Bioskop',
        'deskripsi' => 'Pengeluaran untuk nonton bioskop',
        'kategori' => 'penggeluaran',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
        ]);

    }
}

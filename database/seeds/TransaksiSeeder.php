<?php

use Illuminate\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaksis')->insert([
        'nama_transaksi' => 'Gaji',
        'deskripsi' => 'Gaji dari pt technopartner',
        'kategori' => 'pemasukan',
        'kategori_id' => '1',
        'jumlah_transaksi' => '5000000',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
        ]);
         DB::table('transaksis')->insert([
        'nama_transaksi' => 'Tunjangan',
        'deskripsi' => 'Tunjangan dari pt technopartner',
        'kategori' => 'pemasukan',
        'kategori_id' => '2',
        'jumlah_transaksi' => '100000',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('transaksis')->insert([
        'nama_transaksi' => 'Bayar Kost',
        'deskripsi' => 'Buat bayar kost bulan April',
        'kategori' => 'penggeluaran',
        'kategori_id' => '4',
        'jumlah_transaksi' => '500000',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}

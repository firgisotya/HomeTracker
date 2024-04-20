<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembayaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pembayaran')->insert([
            [
                'penghuni_rumah_id' => 1,
                'jenis_pembayaran' => 'Iuran Kebersihan',
                'jumlah_pembayaran' => 15000,
                'tanggal_pembayaran' => '2021-01-01',
                'periode_pembayaran' => 'Bulan',
                'status_pembayaran' => 'Lunas'
            ],
            [
                'penghuni_rumah_id' => 1,
                'jenis_pembayaran' => 'iuran keamanan',
                'jumlah_pembayaran' => 100000,
                'tanggal_pembayaran' => '2021-01-01',
                'periode_pembayaran' => 'Bulan',
                'status_pembayaran' => 'Lunas'
            ],
            [
                'penghuni_rumah_id' => 2,
                'jenis_pembayaran' => 'Iuran Kebersihan',
                'jumlah_pembayaran' => 15000,
                'tanggal_pembayaran' => '2022-01-01',
                'periode_pembayaran' => 'Bulan',
                'status_pembayaran' => 'Lunas'
            ],
            [
                'penghuni_rumah_id' => 2,
                'jenis_pembayaran' => 'iuran keamanan',
                'jumlah_pembayaran' => 100000,
                'tanggal_pembayaran' => '2022-01-01',
                'periode_pembayaran' => 'Bulan',
                'status_pembayaran' => 'Lunas'
            ],
            [
                'penghuni_rumah_id' => 3,
                'jenis_pembayaran' => 'Iuran Kebersihan',
                'jumlah_pembayaran' => 15000,
                'tanggal_pembayaran' => '2023-01-01',
                'periode_pembayaran' => 'Bulan',
                'status_pembayaran' => 'Lunas'
            ],
            [
                'penghuni_rumah_id' => 3,
                'jenis_pembayaran' => 'iuran keamanan',
                'jumlah_pembayaran' => 100000,
                'tanggal_pembayaran' => '2023-01-01',
                'periode_pembayaran' => 'Bulan',
                'status_pembayaran' => 'Lunas'
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class datakelasS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('datakelas')->insert([
            'namakelas'=>'XI RPL 1',
            'jurusan'=>'Rekayasa Perangkat Lunak',
            'namawalikelas'=>'Yufa Maryafa',
            'jumlahsiswa'=>'36',
            'created_at'=>date('Y-m-d H:i:s',)
      ]);
        DB::table('datakelas')->insert([
            'namakelas'=>'XI RPL 2',
            'jurusan'=>'Rekayasa Perangkat Lunak',
            'namawalikelas'=>'Kartika Sari Dewi',
            'jumlahsiswa'=>'36',
            'created_at'=>date('Y-m-d H:i:s',)
      ]);
        DB::table('datakelas')->insert([
            'namakelas'=>'XIi RPL 1',
            'jurusan'=>'Rekayasa Perangkat Lunak',
            'namawalikelas'=>'Haikal Fadhilah Ibrahim',
            'jumlahsiswa'=>'36',
            'created_at'=>date('Y-m-d H:i:s',)
      ]);
    }
}

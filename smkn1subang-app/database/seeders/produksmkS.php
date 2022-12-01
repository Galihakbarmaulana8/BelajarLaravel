<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class produksmkS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produksmk')->insert([
            'namaproduk'=>'Motor Listrik',
            'jurusan'=>'TBSM',
            'created_at'=>date('Y-m-d H:i:s',)
      ]);
        DB::table('produksmk')->insert([
            'namaproduk'=>'Siborin',
            'jurusan'=>'RPL',
            'created_at'=>date('Y-m-d H:i:s',)
      ]);
        DB::table('produksmk')->insert([
            'namaproduk'=>'Mesin Pembakar Sampah',
            'jurusan'=>'TPM',
            'created_at'=>date('Y-m-d H:i:s',)
      ]);
    }
}

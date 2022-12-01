<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class dataguruS extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dataguru')->insert([
            'nip'=>'12100848',
            'namaguru'=>'Yufa Maryafa',
            'jk'=>'P',
            'mapel'=>'matematika',
            'walikelas'=>'XI RPL 1',
            'created_at'=>date('Y-m-d H:i:s',)
      ]);
        DB::table('dataguru')->insert([
            'nip'=>'12100849',
            'namaguru'=>'Kartika Sari Dewi',
            'jk'=>'P',
            'mapel'=>'Bahasa Indonesia',
            'walikelas'=>'XI RPL 2',
            'created_at'=>date('Y-m-d H:i:s',)
      ]);
        DB::table('dataguru')->insert([
            'nip'=>'12100850',
            'namaguru'=>'Haikal Fadhilah Ibrahim',
            'jk'=>'L',
            'mapel'=>'PPL',
            'walikelas'=>'XII RPL 1',
            'created_at'=>date('Y-m-d H:i:s',)
      ]);
    }
}

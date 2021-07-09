<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('siswa')->insert([
            'nama'	=> 'nasywa',
            'alamat'	=> 'rancamanyar',
            'email'	=>'nasywa@gmail.com',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InputSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('inputs')->insert([
            'nik'=>'03546789832675',
            'nama'=>'Jumaenah',
            'tl' =>'1992-08-18',
            'jenisKelamin' =>'perempuan',
            'alamat' =>'Jalan merah putih no.234',
            'statusperkawinan' =>'sudah kawin',
            'pekerjaan' =>'Ibu rumah tangga',
            'telephone'=>'095608382203'
        ]);
        DB :: table('inputs')->insert([
            'nik'=>'0354289832675',
            'nama'=>'Teguh Hidayat',
            'tl' =>'1990-10-18',
            'jenisKelamin' =>'laki - laki',
            'alamat' =>'Jalan Apel Merah',
            'statusperkawinan' =>'belum kawin',
            'pekerjaan' =>'Wiraswasta',
            'telephone'=>'098263839291983',
        ]);
        DB :: table('inputs')->insert([
            'nik'=>'0354289832675',
            'nama'=>'Teguh Hidayat',
            'tl' =>'1990-10-18',
            'jenisKelamin' =>'laki - laki',
            'alamat' =>'Jalan Apel Merah',
            'statusperkawinan' =>'belum kawin',
            'pekerjaan' =>'Wiraswasta',
            'telephone'=>'098263839291983',
        ]);
        DB :: table('inputs')->insert([
            'nik'=>'0354289832675',
            'nama'=>'Teguh Hidayat',
            'tl' =>'1990-10-18',
            'jenisKelamin' =>'laki - laki',
            'alamat' =>'Jalan Apel Merah',
            'statusperkawinan' =>'belum kawin',
            'pekerjaan' =>'Wiraswasta',
            'telephone'=>'098263839291983',
        ]);
        DB :: table('inputs')->insert([
            'nik'=>'0354289832675',
            'nama'=>'Teguh Hidayat',
            'tl' =>'1990-10-18',
            'jenisKelamin' =>'laki - laki',
            'alamat' =>'Jalan Apel Merah',
            'statusperkawinan' =>'belum kawin',
            'pekerjaan' =>'Wiraswasta',
            'telephone'=>'098263839291983',
        ]);
        DB :: table('inputs')->insert([
            'nik'=>'0354289832675',
            'nama'=>'Teguh Hidayat',
            'tl' =>'1990-10-18',
            'jenisKelamin' =>'laki - laki',
            'alamat' =>'Jalan Apel Merah',
            'statusperkawinan' =>'belum kawin',
            'pekerjaan' =>'Wiraswasta',
            'telephone'=>'098263839291983',
        ]);
    }
}

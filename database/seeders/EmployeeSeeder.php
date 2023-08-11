<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            'Name'=>'Ruslan',
            'jenisKelamin'=>'male',
            'telephone'=>'095608382203',
        ]);

    }
}

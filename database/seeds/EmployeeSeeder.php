<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i <= 100; $i++)
        {
            $name = Str::random(6);
            DB::table('employees')->insert([
                'name' => $name,
                'email' => $name.'@gmail.com',
                'phone' => '01'.rand(6, 999999999),
            ]);
        }
    }
}

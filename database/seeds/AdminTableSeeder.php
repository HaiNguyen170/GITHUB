<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data =[
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('123456'),
        ];
        DB::table('admin')->insert($data);

    }
}

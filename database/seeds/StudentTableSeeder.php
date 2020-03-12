<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
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
            [
                'name'=>'hai',
                'email'=>'hai@gmail.com',
                'password'=>bcrypt('123456789'),
                'address'=>'Ha Nam',
                'phone'=>'0123456789',
                'DOB'=>'1999-03-29',
                'favorite'=>'reading book',


            ]
        ];
        DB::table('student')->insert($data);
    }
}

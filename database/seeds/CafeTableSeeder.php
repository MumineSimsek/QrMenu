<?php

use Illuminate\Database\Seeder;

class CafeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cafes')->insert([
            'id' => 1,
            'name' => 'cekirdek ',
            'address'=>'cekirdek kafe açıklama',
            'email' => 'cekirdek@mail.com',

            'logo'=>'cekirdek',
            'phone'=>'94584350',

            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

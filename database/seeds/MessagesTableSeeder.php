<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0;$i < 2;$i++){
            DB::table('messages')->insert([
                'title' => 'test title' . $i,
                'content' => 'test content' . $i,
            ]);
        }
    }
}

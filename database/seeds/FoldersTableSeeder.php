<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FoldersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = ['仕事', '勉強', '遊び'];

        foreach( $titles as $title) {

            DB::table('folders')->insert([

                'title' => $title,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                
            ]);
        }
    }
}

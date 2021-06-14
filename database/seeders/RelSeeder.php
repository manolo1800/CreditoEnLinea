<?php

namespace Database\Seeders;

use App\Models\Rels;
use Illuminate\Database\Seeder;

class RelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=0;$i<=10;$i++)
        {
            $rel=new Rels();
            $rel->save();
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\Admins;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin=new Admins();
        $admin->Status="no";
        $admin->save();
        
        $admin=new Admins();
        $admin->Status="yes";
        $admin->save();

       
    }
}

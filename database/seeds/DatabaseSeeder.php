<?php

use Illuminate\Database\Seeder;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$admin = new User();
    	$admin->name="admin";
    	$admin->email="nguyentu98lt@gmail.com";
    	$admin->password =  bcrypt('123456');
    	$admin->visible_password ="password";
    	$admin->email_verified_at = NOW();
    	$admin->occupation="CEO";
    	$admin->address="VietNam";
    	$admin->phone="03453494";
    	$admin->is_admin=1;
    	$admin->save();

    }
}

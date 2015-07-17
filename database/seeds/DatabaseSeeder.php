<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

         $this->call(UserTableSeeder::class);

        Model::reguard();
    }



}

class UserTableSeeder extends Seeder {
 
    public function run()
    {
        User::create([
 
            'name'   => 'edder sanchez',
            'email'      => 'edder_salo@hotmail.com',
            'password'   =>  Hash::make('123456'),
            'id_type'      => '1',


        ]);
    }

}
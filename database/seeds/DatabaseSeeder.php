<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Usuario;

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
        Usuario::create([
 
            'usuario'   => 'josealanrg',
            'email'      => 'jose_cheypi@hotmail.com',
            'password'   =>  Hash::make('123456')
        ]);
    }

}
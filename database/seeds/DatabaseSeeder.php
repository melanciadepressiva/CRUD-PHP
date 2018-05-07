<?php

use Illuminate\Database\Seeder;
use Iluminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // Model::unguard();

       // $this->call(CompaniesSeed::class);
       // $this->call(JobsSeed::class);
        $this->call(UsersTableSeeder::class);

     //   Model::reguard();
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->command->info('Seeding user table...');
        $this->call('UserSeeder');
        $this->command->info('Seeding BlogPost table...');
        $this->call("BlogPostSeeder");
        $this->command->info('Shutting down...');

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        Model::reguard();
    }
}

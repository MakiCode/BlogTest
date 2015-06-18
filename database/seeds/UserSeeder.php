<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Emptying users table...');
        DB::table('users')->truncate();
        $this->command->info('Done!');
        $this->command->info('Inserting 10 editors users...');
        factory(App\User::class, 10)->create();
        $this->command->info('Done!');
        $this->command->info('Inserting 40 viewers users...');
        factory(App\User::class, 40)->create();
        $this->command->info('Done!');
    }
}

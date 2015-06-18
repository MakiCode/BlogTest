<?php

use Illuminate\Database\Seeder;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info("Emptying blog posts table...");
        DB::table("blog_posts")->delete();
        $this->command->info("Done!");
        $this->command->info("Creating 20 blog posts...");
        factory(\App\BlogPost::class, 60)->create();
        $this->command->info("Done!");
    }
}

<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testOrder()
    {
        $this->call("GET", "/");
        $this->assertResponseOk();

        $titles = DB::table("blog_posts")->select('title')->orderBy('title','desc')->take(20);
        foreach($titles as $title) {
            $this->assertViewHas($title);
        }
    }
}

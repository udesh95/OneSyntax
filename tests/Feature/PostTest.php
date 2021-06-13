<?php

namespace Tests\Feature;

use App\Models\Post;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    // use RefreshDatabase;
    use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function a_post_can_be_retrive()
    {
        $post = seed('App\Models\Post')->create();
        $this->withoutExceptionHandling();
        $response = $this->get('/posts');
        $response->assertSee($post->description);
        // $response->assertOk();
        // $this->assertCount(1, Post::all());
       
    }
}

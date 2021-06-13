<?php

namespace Tests\Feature;

use App\Models\Post;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;
    // use DatabaseMigrations;

 /** @test */
    public function a_post_can_be_retrive()
    {
        $this->withoutExceptionHandling();
        $response = $this->get('/posts');

        $response->assertOk();
        $this->assertCount(1, Post::all());
       
    }
/** @test */
    public function a_post_can_be_search()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('/search', [
            'description' => 'First',
        ]);

        $response->assertOk();
       
    }

/** @test */
    public function a_comment_can_be_search()
    {
        // $task = factory('App\Task')->create();
        $this->withoutExceptionHandling();
        $response = $this->post('/search', [
            'message' => 'Comment',
        ]);

        $response->assertOk();
       
    }
}

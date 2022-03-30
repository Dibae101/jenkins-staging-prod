<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Post;

class PostsTest extends TestCase
{
   use RefreshDatabase;
   

    public function test_users_can_see_a_list_of_latest_posts()
    {
        factory(Post::class)->create(['title' => 'The first post']);

        $response = $this->get('/posts');

        $response->assertSee('The first post');
    }

    public function test_users_can_see_a_single_post()
    {
        factory(Post::class)->create([
            'title' => 'The first thread',
            'id' => 1,
        ]);

        $response = $this->get('/posts/the-first-thread');

        $response->assertSee('The first post');
    }

    public function test_users_cannot_create_a_thread_when_not_logged_in()
    {
        $response = $this->get('/posts/create');

        $response->assertSee('login');

        
    }


}

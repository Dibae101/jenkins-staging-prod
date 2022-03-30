<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IndexPageTest extends TestCase
{

    public function test_index_page_is_up()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

}

<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EnvTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testEnv()
    {
        $this->view("env", [])
            ->assertSeeText("This is test environment");
    }
}

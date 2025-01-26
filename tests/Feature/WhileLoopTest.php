<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WhileLoopTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testWhileLoop()
    {
        $this->view("whileloop", ["i" => 0])
            ->assertSeeText("The Current value is 9")
            ->assertSeeText("The Current value is 1")
            ->assertSeeText("The Current value is 5");
    }
}

<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CssClassTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCssClass()
    {
        $this->view("cssclass", [
            "hobbies" => [
                [
                    "name" => "Coding",
                    "love" => true
                ],
                [
                    "name" => "Gaming",
                    "love" => false
                ],
            ]
        ])->assertSee('<li class="red bold">Coding</li>', false)
        ->assertSee('<li class="red">Gaming</li>', false);
    }
}

<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoopVariableTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testLoopVariable()
    {
        $this->view("loopvariable", [
            "hobbies" => [
                "Coding",
                "Gaming"
            ]
        ])->assertSeeText("1. Coding")->assertSeeText("2. Gaming");
    }
}

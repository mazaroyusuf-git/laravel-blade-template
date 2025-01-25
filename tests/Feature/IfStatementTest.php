<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IfStatementTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testOneHobby()
    {
        $this->view("if-statement", [
            "hobbies" => [
                "gaming"
            ]
        ])->assertSeeText("i have one hobby");
    }

    public function testMultipleHobbies()
    {
        $this->view("if-statement", [
            "hobbies" => [
                "gaming",
                "hiking",
                "reading"
            ]
        ])->assertSeeText("i have multiple hobbies!");
    }

    public function testNoHobby()
    {
        $this->view("if-statement", [
            "hobbies" => [
                
            ]
        ])->assertSeeText("i dont have a hobbies");
    }
}

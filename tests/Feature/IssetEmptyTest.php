<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IssetEmptyTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testIssetEmpty()
    {
        $this->view("isset-empty", [

        ])->assertDontSeeText("Hello");
    }

    public function testIssetAndEmptyHobbies()
    {
        $this->view("isset-empty", [
            "name" => "yusuf"
        ])->assertSeeText("Hello, my name is yusuf")
            ->assertSeeText("i dont have hobbies");
    }

    public function testIssetAndHobbies()
    {
        $this->view("isset-empty", [
            "name" => "yusuf",
            "hobbies" => [
                "gaming",
                "reading"
            ]
        ])->assertSeeText("Hello, my name is yusuf")
            ->assertDontSeeText("i dont have hobbies");
    }
}

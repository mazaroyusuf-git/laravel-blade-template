<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testHello()
    {
        $this->get("/hello")
            ->assertSeeText("laravel");
    }

    public function testWorld()
    {
        $this->get("/world")
            ->assertSeeText("hello world");
    }

    //kita juga bisa melakukan test pada template tanpa menggunakan Routing, kita bisa gunakan method view(template, array)
    public function testViewWithoutRouting()
    {
        $this->view("hello", ["name" => "laravel"])
            ->assertSeeText("laravel");
    }
}

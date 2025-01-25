<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ForLoopTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testFor()
    {
        $this->view("forloop", ["limit" => 10])
            ->assertSeeText("0")
            ->assertSeeText("5")
            ->assertSeeText("9");
    }

    public function testForEach()
    {
        $this->view("foreach", ["hobbies" => ["gaming", "reading"]])
            ->assertSeeText("gaming")
            ->assertSeeText("reading");
    }

    public function testForElseEmpty()
    {
        $this->view("forelse", ["hobbies" => []])
            ->assertSeeText("Tidak ada Hobbi");
    }
}

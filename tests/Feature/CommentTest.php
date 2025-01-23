<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CommentTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testComment()
    {
        $this->view("comment", [])
            ->assertSeeText("Comment")
            ->assertDontSeeText("kita juga bisa menambahkan comment di blade template dengan cara seperti ini");
    }
}

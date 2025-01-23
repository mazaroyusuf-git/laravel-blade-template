<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HtmlEncodingTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testHtmlEncoding()
    {
        $this->view("html-encoding", ["name" => "withoutEncoding"])
            ->assertSeeText("HTML Encoding")->assertSeeText("withoutEncoding");
    }
}

<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RawPhpTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRawPhp()
    {
        $this->view("rawphp", [])
            ->assertSeeText("yusuf")
            ->assertSeeText("Indonesia");
    }
}

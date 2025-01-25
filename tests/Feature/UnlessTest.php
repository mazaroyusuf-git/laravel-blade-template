<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UnlessTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testUnless()
    {
        $this->view("unless", [
            "isAdmin" => false
        ])->assertSeeText("Youre not Admin");
    }

}

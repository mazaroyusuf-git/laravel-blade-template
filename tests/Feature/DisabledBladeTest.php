<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DisabledBladeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testDisabledBlade()
    {
        $this->view("disabled-blade", ["name" => "yusuf"])
            ->assertDontSeeText("yusuf")
            ->assertSeeText('Hello {{ $name }}');
    }
}

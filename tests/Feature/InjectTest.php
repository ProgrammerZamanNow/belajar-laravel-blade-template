<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InjectTest extends TestCase
{
    public function testInject()
    {
        $this->view("service-injection", ["name" => "Eko"])
            ->assertSeeText("Hello Eko");

    }


}

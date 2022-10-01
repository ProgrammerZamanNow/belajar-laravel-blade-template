<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    public function testHello()
    {
        $this->get("/hello")
            ->assertSeeText("Eko");
    }

    public function testHelloWorld()
    {
        $this->get("/world")
            ->assertSeeText("Eko");
    }

    public function testHelloView()
    {
        $this->view("hello", ["name" => "Eko"])
            ->assertSeeText("Eko");
    }

    public function testHelloWorldView()
    {
        $this->view("hello.world", ["name" => "Eko"])
            ->assertSeeText("Eko");
    }

}

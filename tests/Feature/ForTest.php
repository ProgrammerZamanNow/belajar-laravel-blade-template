<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ForTest extends TestCase
{
    public function testFor()
    {
        $this->view("for", ["limit" => 10])
            ->assertSeeText("0")
            ->assertSeeText("1")
            ->assertSeeText("2")
            ->assertSeeText("3")
            ->assertSeeText("4")
            ->assertSeeText("5")
            ->assertSeeText("6")
            ->assertSeeText("7")
            ->assertSeeText("8")
            ->assertSeeText("9");
    }

    public function testForEach()
    {
        $this->view("foreach", ["hobbies" => ["Coding", "Gaming"]])
            ->assertSeeText("Coding")
            ->assertSeeText("Gaming");
    }

    public function testForElse()
    {
        $this->view("forelse", ["hobbies" => ["Coding", "Gaming"]])
            ->assertSeeText("Coding")
            ->assertSeeText("Gaming")
            ->assertDontSeeText("Tidak Punya Hobby");

        $this->view("forelse", ["hobbies" => []])
            ->assertDontSeeText("Coding")
            ->assertDontSeeText("Gaming")
            ->assertSeeText("Tidak Punya Hobby");
    }


}

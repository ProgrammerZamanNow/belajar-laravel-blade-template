<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClassTest extends TestCase
{
    public function testClass()
    {
        $this->view("class", ["hobbies" => [
            [
                "name" => "Coding",
                "love" => true
            ],
            [
                "name" => "Gaming",
                "love" => false
            ]
        ]])
            ->assertSee('<li class="red bold">Coding</li>', false)
            ->assertSee('<li class="red">Gaming</li>', false);
    }

}

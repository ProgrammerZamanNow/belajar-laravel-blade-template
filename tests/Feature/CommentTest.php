<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CommentTest extends TestCase
{
    public function testComment()
    {
        $this->view("comment", [])
            ->assertSeeText("Comment")
            ->assertDontSeeText("Eko");
    }

}

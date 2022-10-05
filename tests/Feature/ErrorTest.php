<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ErrorTest extends TestCase
{
    public function testError()
    {
        $errors = [
            "name" => "Name is required",
            "password" => "Password is required"
        ];

        $this->withViewErrors($errors)
            ->view("error", [])
            ->assertSeeText("Name is required")
            ->assertSeeText("Password is required");

    }

}

<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormTest extends TestCase
{
    public function testForm()
    {
        $this->view("form", ["user" => [
            "premium" => true,
            "name" => "Eko",
            "admin" => true
        ]])
            ->assertSee("checked")
            ->assertSee("Eko")
            ->assertDontSee("readonly");

        $this->view("form", ["user" => [
            "premium" => false,
            "name" => "Eko",
            "admin" => false
        ]])
            ->assertDontSee("checked")
            ->assertSee("Eko")
            ->assertSee("readonly");
    }

}

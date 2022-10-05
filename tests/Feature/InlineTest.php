<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Blade;
use Tests\TestCase;

class InlineTest extends TestCase
{
    public function testInline()
    {
        $response = Blade::render('Hello {{$name}}', ['name' => 'Eko']);
        self::assertEquals("Hello Eko", $response);

    }

}

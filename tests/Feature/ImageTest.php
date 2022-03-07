<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Food;
use App\public\images;

class ImageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_image()
    {
        $id = 2;
        $food = Food::find($id);
        $response = $food->image;
        print_r($response);
        $this->assertFileExists("public/images/$response");
    }
}

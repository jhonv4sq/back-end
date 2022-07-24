<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;

    private function product()
    {
        return Product::factory()->make()->toArray(); //creamos evento usando las factory
    }

    public function test_show_all_products()
    {
        $this->withoutExceptionHandling();

        $response = $this->get(route('products'));
        $response->assertOk();
    }

    public function test_show_a_product()
    {
        $this->withoutExceptionHandling();

        $product = Product::factory()->create();
        $response = $this->get(route('products.show', 1));
        $response->assertOk();

    }

    public function test_can_buy_a_product()
    {
        $this->withoutExceptionHandling();

        $product = Product::factory()->create();
        $response = $this->get(route('products.buy', 1));
        $response->assertCreated();
        $this->assertDatabaseCount('records', 1);
    }

    public function test_can_refund_product()
    {
        $this->withoutExceptionHandling();

        $product = Product::factory()->create();

        $response = $this->get(route('products.buy', 1));
        $response->assertCreated();
        $this->assertDatabaseCount('records', 1);

        $response = $this->get(route('products.refund', 1));
        $response->assertCreated();
        $this->assertDatabaseCount('records', 2);
    }
}

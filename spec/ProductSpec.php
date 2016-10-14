<?php

namespace spec;

use Product;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ProductSpec extends ObjectBehavior
{
    function let()
    {
        $sku = "SOMESKU";
        $this->beConstructedThrough('withSku', [$sku]);
    }

    function it_can_be_created_with_sku()
    {
        $this->shouldHaveType(Product::class);
    }

    function it_lets_you_create_product_at_specific_costs()
    {
        $this->atCost(2.35)->shouldHaveType(Product::class);
    }
}

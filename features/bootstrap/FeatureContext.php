<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    private $product;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given there is a product with SKU :sku
     */
    public function thereIsAProductWithSku($sku)
    {
        $this->product = Product::withSku($sku);
    }

    /**
     * @Given this product is listed at a cost of £:cost in the catalogue
     */
    public function thisProductIsListedAtACostOfPsInTheCatalogue($cost)
    {
        $catalogue = new Fake\InMemoryCatalogue;
        $catalogue->listProduct($this->product->atCost($cost));
    }

    /**
     * @When I add this product to my basket from the catalogue
     */
    public function iAddThisProductToMyBasketFromTheCatalogue()
    {
        throw new PendingException();
    }

    /**
     * @Then the total cost of my basket should be £:arg1
     */
    public function theTotalCostOfMyBasketShouldBePs($arg1)
    {
        throw new PendingException();
    }
}

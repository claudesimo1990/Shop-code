<?php
/**
 * @package App\Repository
 * @author Claude Simo <jeanclaude.simo@abus-kransysteme.de>
 * @copyright ABUS Kransysteme GmbH
 * @license proprietary
 */

namespace App\Repository;

use App\Models\Product;

class ProductRepository
{
    /** @var Product */
    private $product;

    /**
     * @param Product $product
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function all()
    {
        return $this->product->all();
    }

    public function findBySlug(string $slug)
    {
        return $this->product->where('slug', $slug)->first();
    }

}

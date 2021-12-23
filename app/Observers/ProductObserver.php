<?php

namespace App\Observers;

use App\Jobs\ProductCreated;
use App\Jobs\ProductDeleted;
use App\Jobs\ProductUpdated;
use App\Models\Product;

class ProductObserver
{
    public function created(Product $product)
    {
        ProductCreated::dispatch($product->toArray())->onQueue('main_queue');
    }

    public function updated(Product $product)
    {
        ProductUpdated::dispatch($product->toArray())->onQueue('main_queue');
    }

    public function deleted(Product $product)
    {
        ProductDeleted::dispatch($product->id)->onQueue('main_queue');
    }
}

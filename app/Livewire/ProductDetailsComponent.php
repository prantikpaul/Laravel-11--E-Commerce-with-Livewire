<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductDetailsComponent extends Component
{
    public $slug ;

    public function mount($slug){
        $this->slug = $slug;
    }
    public function render()
    {
        // SHOW SINGLE PRODUCT DETAILS
        $product = Product::where('slug', $this->slug)->first();

        // SHOW RELATED PRODUCTS (EXCLUDE THE CURRENT PRODUCT)
        $related_p = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id) // Exclude the current product
            ->get();

        return view('livewire.product-details-component', compact('product', 'related_p'));
    }

}

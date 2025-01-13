<?php

namespace App\Livewire;


use Livewire\Component;

class CartComponent extends Component
{

//    protected $listeners = ['product-added-to-cart' => 'productAddedToCart'];

//    public function productAddedToCart($productId)
//    {
//        // Handle the product addition logic here
//
//        dd($productId);
//        session()->flash('success', "Product with ID {$productId} added to cart!");
//    }

    public function render()
    {
        return view('livewire.cart-component');
    }

}


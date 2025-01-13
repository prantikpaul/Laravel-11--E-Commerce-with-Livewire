<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AddToCartComponent extends Component
{
    public $productId;

    public function mount($productId)
    {
        $this->productId = $productId; // Initialize the property with the passed value
    }

    public function render()
    {
        return view('livewire.addtocart-component');
    }

    public function store($quantity)
    {
        // Get the sale price of the product
        $get_price = Product::find($this->productId)->sale_price;

        // Check if the cart item already exists
        $cartItem = Cart::where('user_id', Auth::id())
            ->where('product_id', $this->productId)
            ->first();

        if ($cartItem) {
            // If the item exists, increase the quantity
            $cartItem->quantity += $quantity;
            $cartItem->save();
        } else {
            // If the item doesn't exist, create a new one
            Cart::create([
                'user_id' => Auth::id(),
                'product_id' => $this->productId,
                'quantity' => 1,
                'price' => $get_price,
            ]);
        }

        // Confirm the item was added or updated
//        session()->flash('success', 'Product added to cart successfully.');
        $this->dispatch('productAddedToCart', ['message' => 'Product added to cart successfully.']);

        // Debugging: Remove after testing
//        dd('Product added/updated', $cartItem ?? 'New item created');
    }
}



<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;


class ShopComponent extends Component
{
    // use live wire pagination
//    use WithPagination;
    use WithPagination;

    // use live wire pagination 1,2,3,4,5

    protected $paginationTheme = 'bootstrap';

//    public function addToCart($productId)
//    {
//        $this->dispatch('product-added-to-cart', $productId);
//    }

    public $productId;

    public function store($productId, $quantity)
    {
        // Example logic to handle the product and quantity
        $product = Product::find($productId);
        if (!$product) {
            session()->flash('error', 'Product not found.');
            return;
        }

        $cartItem = Cart::where('user_id', Auth::id())
            ->where('product_id', $productId)
            ->first();

        if ($cartItem) {
            $cartItem->quantity += $quantity;
            $cartItem->save();
            request()->session()->flash('success',_('Product added to cart successfully!'));
        } else {
            Cart::create([
                'user_id' => Auth::id(),
                'product_id' => $productId,
                'quantity' => $quantity,
                'price' => $product->sale_price,
            ]);
            request()->session()->flash('success',_('Product added to cart successfully!'));
        }

        request()->session()->flash('success',_('Product added to cart successfully!'));

//        session()->flash('success', 'Product added to cart successfully.');
    }



    public function render()
    {
        //show all categiory to shop page
        $categories = Category::all();

        //show 12 product to shop page

        $products = Product::paginate(12);

        // show new added product to shop page
        $latestProduct = Product::latest()->take(3)->get();



        return view('livewire.shop-component',compact('categories','products','latestProduct'));
    }


}

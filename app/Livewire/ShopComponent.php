<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ShopComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    
    public function render()
    {
        $categories = Category::all();

        $products = Product::paginate(12);


        return view('livewire.shop-component',compact('categories','products'));
    }
}

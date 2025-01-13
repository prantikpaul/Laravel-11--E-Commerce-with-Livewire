<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ShopComponent extends Component
{
    // use live wire pagination
    use WithPagination;

    // use live wire pagination 1,2,3,4,5

    protected $paginationTheme = 'bootstrap';


    public function render()
    {
        //show all categiory to shop page
        $categories = Category::all();

        //show 12 product to shop page

        $products = Product::paginate(12);

        // show new added product to shop page
//        $latestProduct = Product::lastest()->take(3)->get();
        $latestProduct = Product::latest()->take(3)->get();



        return view('livewire.shop-component',compact('categories','products','latestProduct'));
    }
}

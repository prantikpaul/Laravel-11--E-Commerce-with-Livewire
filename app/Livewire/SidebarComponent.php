<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class SidebarComponent extends Component
{
    public function render()
    {
        //show all categiory to shop page
        $categories = Category::all();

        // show new added product to shop page

        $latestProduct = Product::latest()->take(3)->get();

        return view('livewire.sidebar-component',compact('latestProduct','categories'));
    }

}

<?php

namespace App\Livewire;

use Livewire\Component;

class ParentComponent extends Component
{
    public $currentPage = 'home'; // Default page

    public function setPage($page)
    {
        $this->currentPage = $page;
    }

    public function render()
    {
        return view('livewire.parent-component');
    }
}

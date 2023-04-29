<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class Navigation extends Component
{
    public function render()
    {
        $categories = Category::where('type', 1)->get();
        return view('livewire.navigation', compact('categories'));
    }
}

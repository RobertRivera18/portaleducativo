<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\Level;
use Livewire\Component;
use App\Models\Category;
use App\Models\Subcategory;
use Livewire\WithPagination;

class AppIndex extends Component
{
    use WithPagination;
    public $category_id;
    public function render()
    {
        $categories = Category::where('type',2)->get();
        $apps = Post::where('status', 3)
            ->where('tipo_recurso_id', 2)
            ->category($this->category_id)
            ->latest('id')
            ->paginate(8);
        return view('livewire.app-index', compact('apps', 'categories'));
    }
    public function resetFilters()
    {
        $this->reset(['category_id']);
    }
}

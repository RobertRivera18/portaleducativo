<?php

namespace App\Http\Livewire;

use App\Models\Post;
use App\Models\Level;
use App\Models\Subject;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class BusquedaFiltros extends Component
{
    use WithPagination;
    public $category_id;
    public $search;
    public $level_id;
    public function render()
    {
        $categories = Category::all();
        $levels = Level::all();
        $posts = Post::where('status', 3)
                       ->category($this->category_id)
                       ->latest('id')
                       ->level($this->level_id)
                       ->paginate(8);
        return view('livewire.busqueda-filtros', compact('categories', 'levels', 'posts'));
    }
    
    public function getResultsProperty(){
        return Post::where('name','LIKE','%'.$this->search.'%')
                  ->where('status',3)->take(4)->get();
        
    }

    public function resetFilters()
    {
        $this-> reset(['category_id','level_id']);
    }

    

}

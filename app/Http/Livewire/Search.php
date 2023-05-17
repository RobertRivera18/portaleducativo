<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class Search extends Component
{
    public $search;
    public function render()
    {
        return view('livewire.search');
    }
    public function getResultsProperty(){
        return Post::where('name','LIKE','%'.$this->search.'%')
            ->where('status',3)->take(5)->get();
        }
}

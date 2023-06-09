<?php

namespace App\Http\Livewire\Instructor;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostsIndex extends Component
{
    public $search;
    use WithPagination;
    public function render()
    {
        $posts= Post::where('name', 'LIKE', '%' . $this->search . '%')
                    ->where('user_id',auth()->user()->id)
                    ->latest('id')
                    ->paginate(6);
        return view('livewire.instructor.posts-index',compact('posts'));
    }

    
    public function limpiar_page(){
        $this->reset('page');
       }
}

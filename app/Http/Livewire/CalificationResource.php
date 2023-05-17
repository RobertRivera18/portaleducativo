<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class CalificationResource extends Component
{

    
    public $post_id, $comment;
    public $ratings = [
        'pregunta1' => 0,
        'pregunta2' => 0,
        'pregunta3' => 0,
    ];
    public $open = false;
    protected $rules = [
        'ratings.pregunta1' => 'required',
        'ratings.pregunta2' => 'required',
        'comment' => 'required',
    ];

    public function mount(Post $post)
    {
        $this->post_id = $post->id;
    }

    protected $validationAttributes = [
        'comment' => 'comentario'
    ];

    public function render()
    {
        $post = Post::find($this->post_id);
        return view('livewire.calification-resource', compact('post'));
    }

    public function store()
    {
        $this->validate();
        $post = Post::find($this->post_id);
        $rating = ($this->ratings['pregunta1'] + $this->ratings['pregunta2']+ $this->ratings['pregunta2']) / 3;
        $post->reviews()->create([
            'comment' => $this->comment,
            'rating' => $rating,
            'user_id' => auth()->user()->id,
        ]);
        $this->reset(['open', 'comment', 'ratings']);
        $this->emit('render');
    }
}

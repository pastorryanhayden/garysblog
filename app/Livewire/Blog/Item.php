<?php

namespace App\Livewire\Blog;

use Livewire\Component;
use App\Models\Post;

class Item extends Component
{
    public $item;

    public function mount($item)
    {
        $this->item = Post::where('id', $item)->first();
    }

    public function render()
    {
        return view('livewire.blog.item');
    }
}

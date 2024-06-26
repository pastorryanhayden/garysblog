<?php

namespace App\Livewire\Blog;

use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Str;

class Item extends Component
{
    public $item;

    public function mount($item)
    {
        $this->item = Post::where('id', $item)->first();
        $this->item->markdown = Str::words($this->item->body, 40, '...');
        $this->item->markdown = Str::of($this->item->markdown)->markdown();
    }

    public function render()
    {
        return view('livewire.blog.item');
    }
}

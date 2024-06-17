<?php

namespace App\Livewire\Blog;

use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Str;

class Single extends Component
{
    public $post;

    public function mount($slug)
    {
        $this->post = Post::where('slug', $slug)->first();
        $this->post->markdown = Str::of($this->post->body)->markdown();

    }
    public function render()
    {
        return view('livewire.blog.single')
            ->title($this->post->title);
    }
}

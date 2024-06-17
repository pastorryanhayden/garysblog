<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;

class Home extends Component
{
    use WithPagination;


    public function render()
    {
        return view('livewire.home', [
            'posts' => Post::where('published', true)->orderBy('created_at', 'desc')->paginate(5),
        ]);
    }
}

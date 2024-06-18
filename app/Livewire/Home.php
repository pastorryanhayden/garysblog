<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;
use App\Models\Settings;

class Home extends Component
{
    use WithPagination;

    public $settings;

    public function mount()
    {
        $this->settings = Settings::first();
    }



    public function render()
    {
        return view('livewire.home', [
            'posts' => Post::where('published', true)->orderBy('created_at', 'desc')->paginate(5),
        ])->title($this->settings->title);
    }
}

<?php

namespace App\Livewire;

use Livewire\Component;

class Navigation extends Component
{
    public $title;
    public $active;

    public function mount($title, $active)
    {
        $this->title = $title;
        $this->active = $active;
    }

    public function render()
    {
        return view('livewire.navigation');
    }
}

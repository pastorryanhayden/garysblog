<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Settings;


class Navigation extends Component
{
    public $title;
    public $active;
    public $settings;

    public function mount($title, $active)
    {
        $this->title = $title;
        $this->active = $active;
        $this->settings = Settings::first();
    }

    public function render()
    {
        return view('livewire.navigation');
    }
}

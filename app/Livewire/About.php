<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Settings;
use Illuminate\Support\Str;

class About extends Component
{

    public $settings;

    public function mount(){
        $this->settings = Settings::first();
        $this->settings->body = Str::of($this->settings->about_content)->markdown();
    }

    public function render()
    {
        return view('livewire.about')
            ->title('About Me');
    }
}

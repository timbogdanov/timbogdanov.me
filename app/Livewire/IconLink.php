<?php

namespace App\Livewire;

use Livewire\Component;

class IconLink extends Component
{
    public string $href;
    public string $icon;
    public string $target;

    public function mount(
        string $href = '#',
        string $icon = '',
        string $target = '_blank'
    )
    {
        $this->href = $href;
        $this->icon = $icon;
        $this->target = $target;
    }

    public function render()
    {
        return view('livewire.icon-link');
    }

}

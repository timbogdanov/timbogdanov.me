<?php

use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('components.layouts.guest')] class extends Component {
    public $lastLogin;

    public function mount()
    {
        $this->lastLogin = now()->format('D M d H:i:s');
    }
}; ?>

<div class="dark:bg-[#141414]">
    <div class="container mx-auto">
        <p class="py-2 dark:text-[#6E6E6E] font-mono text-xs">
            Last login: {{ $lastLogin }} on ttys005
        </div>
    </div>
</div>



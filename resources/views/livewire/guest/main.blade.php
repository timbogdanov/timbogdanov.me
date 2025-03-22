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

<div class="container mx-auto">
    <div class="py-2 dark:bg-[#141414] dark:text-[#6E6E6E] font-mono text-xs">
        Last login: {{ $lastLogin }}
    </div>
</div>



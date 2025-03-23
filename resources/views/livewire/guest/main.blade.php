<?php

use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('components.layouts.guest')] class extends Component {
    public $lastLogin;
    public $ttys;

    public function mount()
    {
        $this->lastLogin = now()->format('D M d H:i:s');
        $this->ttys = rand(0, 9);
    }
}; ?>

<div>
    <div class="dark:bg-[#141414]">
        <div class="container mx-auto">
            <p class="py-2 dark:text-[#6E6E6E] font-mono text-xs">
                Last login: {{ $lastLogin }} on ttys00{{ $ttys }}
        </div>
    </div>

    <div class="container mx-auto my-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <img src="/assets/logo.svg" alt="" class="mr-2">
                <h1 class="font-mono text-sm font-bold">tim bogdanov</h1>
            </div>

            <div>
                email
                telegram
                github
                twitter
            </div>
        </div>
    </div>
</div>

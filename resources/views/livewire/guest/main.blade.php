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
            <a href="{{ route('guest.main') }}" class="flex items-center hover:text-[#81796D]">
                <x-logo class="mr-2 h-7"/>
                <h1 class="font-mono text-sm font-bold">tim bogdanov</h1>
            </a>

            <div class="flex items-center space-x-3">
                <livewire:icon-link
                    href="mailto:tim.bogdanov@icloud.com"
                    icon="email"
                />

                <livewire:icon-link
                    href="https://t.me/timbogdanov"
                    icon="telegram"
                />

                <livewire:icon-link
                    href="https://github.com/timbogdanov"
                    icon="github"
                />

                <livewire:icon-link
                    href="https://x.com/bogdanov_tim"
                    icon="twitter"
                />
            </div>
        </div>

        <x-title-divider title="Tech Stack"/>

    </div>
</div>

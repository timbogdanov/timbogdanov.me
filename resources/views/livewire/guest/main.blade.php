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
    <div class="dark:bg-[#161616]">
        <div class="container mx-auto px-5">
            <p class="py-2 dark:text-[#6E6E6E] font-mono text-xs">
                Last login: {{ $lastLogin }} on ttys00{{ $ttys }}
        </div>
    </div>

    <div class="container mx-auto px-5 my-3">
        <div class="flex items-center justify-between">
            <a href="{{ route('guest.main') }}" class="flex items-center hover:text-[#81796D]">
{{--                <x-logo class="mr-2 h-7"/>--}}
                <img src="/assets/logo-2.svg" class="rounded-full w-8 mr-2" alt="" >
                <h1 id="typed-text" class="font-mono text-sm font-bold"></h1>
                <span class="cursor"></span>
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

        <div>
            <div class="flex space-x-14">
                <div class="flex-col space-y-2">
                    <div class="">Laravel</div>
                    <div class="">PHP</div>
                    <div class="">PostgreSQL</div>
                </div>

                <div class="flex-col space-y-2">
                    <div class="">Docker</div>
                    <div class="">Linux</div>
                </div>

                <div class="flex-col space-y-2">
                    <div class="">Javascript</div>
                    <div class="">jQuery</div>
                    <div class="">Vue</div>
                </div>
            </div>
        </div>

        <x-title-divider title="Experience"/>

        <x-title-divider title="Projects"/>

        <x-title-divider title="Education"/>

        <x-title-divider title="Languages"/>

        <footer class="flex justify-center mt-10">
            <p class="font-mono text-xs">
                Copyright © Tim Bogdanov 1996-Present
            </p>
        </footer>

    </div>
</div>

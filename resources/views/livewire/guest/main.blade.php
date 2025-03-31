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
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
            <a href="{{ route('guest.main') }}" class="flex items-center hover:text-[#81796D]">
                <img src="/assets/logo-2.svg" class="rounded-full w-8 mr-2" alt="">
                <h1 id="typed-text" class="font-mono text-sm font-bold"></h1>
                <span class="cursor"></span>
            </a>

            <div class="flex flex-wrap sm:flex-nowrap items-start sm:items-center space-x-3 sm:space-x-3 space-y-2 sm:space-y-0">
                <livewire:icon-link href="mailto:tim.bogdanov@icloud.com" icon="email"/>
                <livewire:icon-link href="https://t.me/timbogdanov" icon="telegram"/>
                <livewire:icon-link href="https://github.com/timbogdanov" icon="github"/>
                <livewire:icon-link href="https://x.com/bogdanov_tim" icon="twitter"/>
            </div>
        </div>


        <x-title-divider title="Tech Stack"/>

        <div>
            <div class="flex space-x-14">
                <div class="flex-col space-y-2">
                    <div class="flex">
                        <x-laravel class="h-5 mr-3"/>
                        Laravel
                    </div>
                    <div class="flex">
                        <x-php class="h-5 mr-3"/>
                        PHP
                    </div>
                    <div class="flex">
                        <x-postgresql class="h-5 mr-3"/>
                        PostgreSQL
                    </div>
                </div>

                <div class="flex-col space-y-2">
                    <div class="flex">
                        <x-docker class="h-5 mr-3"/>
                        Docker
                    </div>
                    <div class="flex">
                        <x-linux class="h-5 mr-3"/>
                        Linux
                    </div>
                </div>

                <div class="flex-col space-y-2">
                    <div class="flex">
                        <x-javascript class="h-5 mr-3"/>
                        Javascript
                    </div>
                    <div class="flex">
                        <x-jquery class="h-5 mr-3"/>
                        jQuery
                    </div>
                    <div class="flex">
                        <x-vue class="h-5 mr-3"/>
                        Vue
                    </div>
                </div>
            </div>
        </div>

        <x-title-divider title="Experience"/>

        <div>
            <div class="flex-col space-y-4">
                <div class="flex justify-between">
                    <div class="flex space-x-4">
                        <img src="/assets/nutri.svg" class="rounded-sm h-16 w-16" alt="">
                        <div>
                            <h3 class="text-lg dark:text-[#D9D1C5]">Software Developer</h3>

                            <p class="dark:text-[#81796D]">Nutri Marketplace</p>
                            <div class="flex mt-1">
                                <a href="https://nutrimarketplace.com/" target="_blank"
                                   class="flex items-center space-x-2 px-2 py-1 rounded-sm dark:bg-[#1A1813] dark:text-[#8F877B]">
                                    <span class="font-mono text-sm">Visit</span>
                                    <x-arrow class="h-4"></x-arrow>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="flex flex-col items-end">
                            <p class="text-lg text-[#E5DDD1]">Vancouver, WA</p>
                            <p class="text-[#81796D]">Dec 2021 - Jan 2024</p>
                        </div>
                    </div>
                </div>

                <div class="flex justify-between">
                    <div class="flex space-x-4">
                        <img src="/assets/snap.svg" class="rounded-sm h-16 w-16" alt="">
                        <div>
                            <h3 class="text-lg dark:text-[#D9D1C5]">Software Developer</h3>

                            <p class="dark:text-[#81796D]">SNAP</p>
                            <div class="flex mt-1">
                                <a href="https://snapsupplements.com/" target="_blank"
                                   class="flex items-center space-x-2 px-2 py-1 rounded-sm dark:bg-[#1A1813] dark:text-[#8F877B]">
                                    <span class="font-mono text-sm">Visit</span>
                                    <x-arrow class="h-4"></x-arrow>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="flex flex-col items-end">
                            <p class="text-lg text-[#E5DDD1]">Vancouver, WA</p>
                            <p class="text-[#81796D]">Jun 2021 - Jan 2024</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <x-title-divider title="Projects"/>
        <div>
            <div class="flex-col space-y-4">
                <div class="flex space-x-4">
                    <img src="/assets/konnekt.svg" class="rounded-sm h-16 w-16" alt="">
                    <div>
                        <h3 class="text-lg dark:text-[#D9D1C5]">Konnekt VPN</h3>

                        <p class="dark:text-[#81796D]">Personal Virtual Private Network with over 200 users</p>
                        <div class="flex mt-1">
                            <a href="https://t.me/MaykopConnectBot" target="_blank"
                               class="flex items-center space-x-2 px-2 py-1 rounded-sm dark:bg-[#1A1813] dark:text-[#8F877B]">
                                <span class="font-mono text-sm">Visit</span>
                                <x-arrow class="h-4"></x-arrow>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="flex space-x-4">
                    <img src="/assets/pixieping.svg" class="rounded-sm h-16 w-16" alt="">
                    <div>
                        <h3 class="text-lg dark:text-[#D9D1C5]">Pixie Ping</h3>

                        <p class="dark:text-[#81796D]">Real-time amusement park wait times, show schedules, and dining options</p>
                        <div class="flex mt-1">
                            <a href="https://t.me/MaykopConnectBot" target="_blank"
                               class="flex items-center space-x-2 px-2 py-1 rounded-sm dark:bg-[#1A1813] dark:text-[#8F877B]">
                                <span class="font-mono text-sm">Visit</span>
                                <x-arrow class="h-4"></x-arrow>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <x-title-divider title="Education"/>

        <div>
            <div class="flex justify-between">
                <div class="flex flex-col">
                    <h3 class="text-lg dark:text-[#D9D1C5]">Bloom Institute of Technology</h3>
                    <p class="dark:text-[#81796D]">Full-Stack Web Development Program (Certificate)</p>
                </div>

                <div>
                    <div class="flex flex-col items-end">
                        <p class="text-lg text-[#E5DDD1]">Remote</p>
                        <p class="text-[#81796D]">Oct 2020</p>
                    </div>
                </div>
            </div>
        </div>

        <x-title-divider title="Languages"/>

        <div>
            <div class="flex flex-col space-y-2">
                <div>
                    <h3 class="text-lg dark:text-[#D9D1C5]">English</h3>
                    <p class="dark:text-[#81796D]">Native</p>
                </div>

                <div>
                    <h3 class="text-lg dark:text-[#D9D1C5]">Russian</h3>
                    <p class="dark:text-[#81796D]">Native</p>
                </div>
            </div>
        </div>

        <footer class="flex justify-center my-10">
            <p class="font-mono text-xs">
                Copyright © Tim Bogdanov 1996-Present
            </p>
        </footer>

    </div>
</div>

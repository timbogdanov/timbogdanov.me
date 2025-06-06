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
    <div class="bg-[#81796D] dark:bg-[#161616]">
        <div class="container mx-auto px-5">
            <p class="py-2 text-[#E5DDD1] dark:text-[#6E6E6E] font-mono text-xs">
                Last login: {{ $lastLogin }} on ttys00{{ $ttys }}
        </div>
    </div>

    <div class="container mx-auto px-5 my-3">
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
            <a href="{{ route('guest.main') }}" class="flex items-center hover:text-[#81796D]">
                <img src="{{ asset('/assets/logo.svg') }}?v={{ env('APP_VERSION') }}" class="rounded-full w-8 mr-2" alt="">
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

        <x-title-divider title="Experience"/>

        <div>
            <div class="flex-col space-y-4">
                <div class="flex justify-between">
                    <div class="flex space-x-4">
                        <div class="rounded-sm overflow-hidden border border-[#24221D] h-14 w-14 bg-[#1A1813]">
                            <img src="{{ asset('/assets/cleverlabs.svg') }}?v={{ env('APP_VERSION') }}" class="block w-full h-full" alt="">
                        </div>

                        <div>
                            <h3 class="text-md dark:text-[#D9D1C5]">Software Developer</h3>

                            <p class="dark:text-[#81796D] text-sm">Clever Labs</p>
                            <div class="flex mt-1">
                                <a href="https://cleverlabs.co" target="_blank"
                                   class="flex items-center space-x-2 px-2 py-1 rounded-sm bg-[#8F877B] text-[#E5DDD1] dark:bg-[#1A1813] dark:text-[#8F877B] dark:hover:bg-[#25231B] hover:bg-[#6D6559]">
                                    <span class="font-mono text-sm">Visit</span>
                                    <x-arrow class="h-4"></x-arrow>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="flex flex-col items-end">
                            <p class="text-md text-[#776F63]">Magnolia, TX</p>
                            <p class="text-[#81796D] text-sm">Mar 2024 - Mar 2025</p>
                        </div>
                    </div>
                </div>

                <div class="flex justify-between">
                    <div class="flex space-x-4">
                        <div class="rounded-sm overflow-hidden border border-[#24221D] h-14 w-14 bg-[#1A1813]">
                            <img src="{{ asset('/assets/nutri.svg') }}?v={{ env('APP_VERSION') }}" class="block w-full h-full" alt="">
                        </div>

                        <div>
                            <h3 class="text-md dark:text-[#D9D1C5]">Software Developer</h3>

                            <p class="dark:text-[#81796D] text-sm">Nutri Marketplace</p>
                            <div class="flex mt-1">
                                <a href="https://nutrimarketplace.com/" target="_blank"
                                   class="flex items-center space-x-2 px-2 py-1 rounded-sm bg-[#8F877B] text-[#E5DDD1] dark:bg-[#1A1813] dark:text-[#8F877B] dark:hover:bg-[#25231B] hover:bg-[#6D6559]">
                                    <span class="font-mono text-sm">Visit</span>
                                    <x-arrow class="h-4"></x-arrow>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="flex flex-col items-end">
                            <p class="text-md text-[#776F63]">Vancouver, WA</p>
                            <p class="text-[#81796D] text-sm">Dec 2021 - Jan 2024</p>
                        </div>
                    </div>
                </div>

                <div class="flex justify-between">
                    <div class="flex space-x-4">
                        <div class="rounded-sm overflow-hidden border border-[#24221D] h-14 w-14 bg-[#1A1813]">
                            <img src="{{ asset('/assets/snap.svg') }}?v={{ env('APP_VERSION') }}" class="block w-full h-full" alt="">
                        </div>

                        <div>
                            <h3 class="text-md dark:text-[#D9D1C5]">Software Developer</h3>

                            <p class="dark:text-[#81796D] text-sm">SNAP Supplements</p>
                            <div class="flex mt-1">
                                <a href="https://snapsupplements.com/" target="_blank"
                                   class="flex items-center space-x-2 px-2 py-1 rounded-sm bg-[#8F877B] text-[#E5DDD1] dark:bg-[#1A1813] dark:text-[#8F877B] dark:hover:bg-[#25231B] hover:bg-[#6D6559]">
                                    <span class="font-mono text-sm">Visit</span>
                                    <x-arrow class="h-4"></x-arrow>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="flex flex-col items-end">
                            <p class="text-lmd text-[#776F63]">Vancouver, WA</p>
                            <p class="text-[#81796D] text-sm">Jun 2021 - Jan 2024</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <x-title-divider title="Projects"/>
        <div>
            <div class="flex-col space-y-4">
                <div class="flex space-x-4">
                    <div class="rounded-sm overflow-hidden border border-[#24221D] h-14 w-14 bg-[#1A1813]">
                        <img src="{{ asset('/assets/speed_bump.png') }}?v={{ env('APP_VERSION') }}" class="block w-full h-full" alt="">
                    </div>

                    <div>
                        <h3 class="text-md dark:text-[#D9D1C5]">Speed Bump</h3>

                        <p class="dark:text-[#81796D] text-sm">A Telegram bot that helps you track spending by extracting totals and categories from receipt photos and building a simple budget.</p>
                        <div class="flex mt-1">
                            <a href="https://t.me/speed_bump_bot" target="_blank"
                               class="flex items-center space-x-2 px-2 py-1 rounded-sm bg-[#8F877B] text-[#E5DDD1] dark:bg-[#1A1813] dark:text-[#8F877B] dark:hover:bg-[#25231B] hover:bg-[#6D6559]">
                                <span class="font-mono text-sm">Visit</span>
                                <x-arrow class="h-4"></x-arrow>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="flex space-x-4">
                    <div class="rounded-sm overflow-hidden border border-[#24221D] h-14 w-14 bg-[#1A1813]">
                        <img src="{{ asset('/assets/konnekt.svg') }}?v={{ env('APP_VERSION') }}" class="block w-full h-full" alt="">
                    </div>

                    <div>
                        <h3 class="text-md dark:text-[#D9D1C5]">Konnekt VPN</h3>

                        <p class="dark:text-[#81796D]  text-sm">Personal Virtual Private Network with over 200 users</p>
                        <div class="flex mt-1">
                            <a href="https://t.me/konnekt_vpn_bot" target="_blank"
                               class="flex items-center space-x-2 px-2 py-1 rounded-sm bg-[#8F877B] text-[#E5DDD1] dark:bg-[#1A1813] dark:text-[#8F877B] dark:hover:bg-[#25231B] hover:bg-[#6D6559]">
                                <span class="font-mono text-sm">Visit</span>
                                <x-arrow class="h-4"></x-arrow>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="flex space-x-4">
                    <div class="rounded-sm overflow-hidden border border-[#24221D] h-14 w-14 bg-[#1A1813]">
                        <img src="{{ asset('/assets/pixieping.svg') }}?v={{ env('APP_VERSION') }}" class="block w-full h-full" alt="">
                    </div>
                    <div>
                        <h3 class="text-md dark:text-[#D9D1C5]">Pixie Ping</h3>

                        <p class="dark:text-[#81796D] text-sm">Real-time amusement park wait times, show schedules, and dining options</p>
                        <div class="flex mt-1">
                            <a href="https://pixieping.co/" target="_blank"
                               class="flex items-center space-x-2 px-2 py-1 rounded-sm bg-[#8F877B] text-[#E5DDD1] dark:bg-[#1A1813] dark:text-[#8F877B] dark:hover:bg-[#25231B] hover:bg-[#6D6559]">
                                <span class="font-mono text-sm">Visit</span>
                                <x-arrow class="h-4"></x-arrow>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <x-title-divider title="Tech Stack"/>

        <div>
            <div class="flex space-x-8 sm:space-x-8 md:space-x-14 lg:space-x-20">
                <div class="flex-col space-y-2">
                    <div class="flex text-sm">
                        <x-laravel class="h-5 mr-3"/>
                        Laravel
                    </div>
                    <div class="flex text-sm">
                        <x-php class="h-5 mr-3"/>
                        PHP
                    </div>
                    <div class="flex text-sm">
                        <x-postgresql class="h-5 mr-3"/>
                        PostgreSQL
                    </div>
                </div>

                <div class="flex-col space-y-2">
                    <div class="flex text-sm">
                        <x-docker class="h-5 mr-3"/>
                        Docker
                    </div>
                    <div class="flex text-sm">
                        <x-linux class="h-5 mr-3"/>
                        Linux
                    </div>
                </div>

                <div class="flex-col space-y-2">
                    <div class="flex text-sm">
                        <x-javascript class="h-5 mr-3"/>
                        Javascript
                    </div>
                    <div class="flex text-sm">
                        <x-jquery class="h-5 mr-3"/>
                        jQuery
                    </div>
                    <div class="flex text-sm">
                        <x-vue class="h-5 mr-3"/>
                        Vue
                    </div>
                </div>
            </div>
        </div>

        <x-title-divider title="Education"/>

        <div class="space-y-4">
            <div class="flex justify-between">
                <div class="flex flex-col">
                    <h3 class="text-md dark:text-[#D9D1C5]">Bloom Institute of Technology</h3>
                    <p class="dark:text-[#81796D]  text-sm">Full-Stack Web Development Program (Certificate)</p>
                </div>

                <div>
                    <div class="flex flex-col items-end">
                        <p class="text-lmd text-[#776F63]">Remote</p>
                        <p class="text-[#81796D] text-sm">Oct 2020</p>
                    </div>
                </div>
            </div>
            <div class="flex justify-between">
                <div class="flex flex-col">
                    <h3 class="text-md dark:text-[#D9D1C5]">Continental Academy</h3>
                    <p class="dark:text-[#81796D] text-sm">High School Proficiency Diploma</p>
                </div>

                <div>
                    <div class="flex flex-col items-end">
                        <p class="text-lmd text-[#776F63]">Ridgefield, WA</p>
                        <p class="text-[#81796D]  text-sm">Mar 2016</p>
                    </div>
                </div>
            </div>
        </div>

        <x-title-divider title="Languages"/>

        <div>
            <div class="flex flex-col space-y-2">
                <div>
                    <h3 class="text-md dark:text-[#D9D1C5]">English</h3>
                    <p class="dark:text-[#81796D]  text-sm">Native</p>
                </div>

                <div>
                    <h3 class="text-md dark:text-[#D9D1C5]">Russian</h3>
                    <p class="dark:text-[#81796D]  text-sm">Native</p>
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

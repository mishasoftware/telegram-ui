<div x-cloak x-show="drawerOpen"
    x-transition:enter-start="translate-x-full opacity-0"
    x-transition:enter-end="translate-x-0 opacity-100"
    x-transition:leave="transition duration-200 ease-in"
    x-transition:leave-start="translate-x-0 opacity-100"
    x-transition:leave-end="translate-x-full opacity-0"
    class="absolute left-[494px] top-0 h-full w-[420px] bg-[#1B1C1F] border-r border-white/5 z-30 overflow-hidden"
>

    <!-- SETTINGS -->
    <template x-if="drawerType === 'settings'">

        <div class="h-full flex flex-col">

            <div class="h-16 border-b border-white/5 flex items-center px-5">

                <button @click="closeDrawer()">
                    <x-heroicon-o-arrow-left class="w-6 h-6 text-zinc-400" />
                </button>

                <h3 class="ml-4 font-medium text-lg">
                    Settings
                </h3>

            </div>

            <div class="flex-1 overflow-y-auto telegram-scrollbar">

                <div class="p-5 border-b border-white/5 flex items-center gap-4">

                    <img
                        src="https://i.pravatar.cc/200"
                        class="w-20 h-20 rounded-full"
                    >

                    <div>
                        <h2 class="font-semibold text-lg">
                            Misha Dev
                        </h2>

                        <p class="text-zinc-400 text-sm">
                            Online
                        </p>
                    </div>

                </div>

                <div class="p-3 space-y-1">

                    @foreach([
                        'Notifications',
                        'Privacy & Security',
                        'Data and Storage',
                        'Devices',
                        'Folders',
                        'Language',
                        'Chat Settings'
                    ] as $item)

                        <button class="w-full h-14 px-4 rounded-2xl hover:bg-white/5 flex items-center justify-between transition">

                            <span class="text-sm font-medium text-zinc-300">
                                {{ $item }}
                            </span>

                            <x-heroicon-o-chevron-right class="w-5 h-5 text-zinc-500" />

                        </button>

                    @endforeach

                </div>

            </div>

        </div>

    </template>

</div>
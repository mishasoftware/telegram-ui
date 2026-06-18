<div class="relative w-[420px] bg-[#17181B] border-r border-white/5 flex flex-col overflow-hidden">
    <div class="p-4 border-b border-white/5">

        <div class="relative">
            <x-heroicon-o-magnifying-glass class="w-5 h-5 absolute left-4 top-1/2 -translate-y-1/2 text-zinc-500" />

            <input
                type="text"
                placeholder="Search"
                class="w-full h-12 rounded-2xl bg-[#242529] border-none pl-12 pr-4 text-sm focus:ring-2 focus:ring-violet-500 outline-none"
            >
        </div>

    </div>

    <!-- FILTERS -->
    <div class="px-4 py-3 flex items-center gap-2 border-b border-white/5 overflow-x-auto">

        <button class="px-4 h-9 rounded-full bg-violet-500 text-sm font-medium">
            همه
        </button>

        <button class="px-4 h-9 rounded-full bg-white/5 hover:bg-white/10 text-sm text-zinc-300">
            خوانده نشده
        </button>

        <button class="px-4 h-9 rounded-full bg-white/5 hover:bg-white/10 text-sm text-zinc-300">
            گروه ها
        </button>

    </div>

    <!-- CHAT LIST -->
    <div class="flex-1 overflow-y-auto telegram-scrollbar">

        @for($i = 0; $i < 5; $i++)

            <div class="group flex items-center gap-3 px-4 py-3 hover:bg-white/[0.03] cursor-pointer transition border-b border-white/[0.02]">

                <img
                    src="https://i.pravatar.cc/100?img={{ $i }}"
                    class="w-14 h-14 rounded-full object-cover"
                >

                <div class="flex-1 min-w-0">

                    <div class="flex items-center justify-between mb-1">
                        <h4 class="font-medium truncate text-[15px]">
                            کانال طراحی
                        </h4>

                        <span class="text-xs text-zinc-500">
                            10:45
                        </span>
                    </div>

                    <div class="flex items-center gap-2">

                        <p class="text-sm text-zinc-400 truncate">
                            سفارشات مربوط به واحد طراحی
                        </p>

                        <div class="w-5 h-5 rounded-full bg-violet-500 text-[11px] flex items-center justify-center ml-auto">
                            3
                        </div>

                    </div>

                </div>

            </div>

        @endfor

    </div>

</div>
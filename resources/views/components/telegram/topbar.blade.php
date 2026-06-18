<div class="h-[64px] border-b border-white/5 bg-[#18191B]/90 backdrop-blur-xl flex items-center justify-between px-5">

    <div
        @click="toggleRightSidebar()"
        class="flex items-center gap-3 cursor-pointer"
    >

        <img
            src="https://i.pravatar.cc/150"
            class="w-11 h-11 rounded-full"
        >

        <div>

            <h3 class="text-[15px] font-medium">
                کانال طراحی
            </h3>

            <p class="text-xs text-zinc-400">
                12,580 عضو
            </p>

        </div>

    </div>

    <div class="flex items-center gap-1">

        <button class="w-10 h-10 rounded-xl hover:bg-white/5 flex items-center justify-center">
            <x-heroicon-o-magnifying-glass class="w-5 h-5 text-zinc-400" />
        </button>

        <button class="w-10 h-10 rounded-xl hover:bg-white/5 flex items-center justify-center">
            <x-heroicon-o-phone class="w-5 h-5 text-zinc-400" />
        </button>

        <button class="w-10 h-10 rounded-xl hover:bg-white/5 flex items-center justify-center">
            <x-heroicon-o-ellipsis-vertical class="w-5 h-5 text-zinc-400" />
        </button>

    </div>

</div>
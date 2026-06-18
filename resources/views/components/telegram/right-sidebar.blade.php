<div
    x-show="rightSidebarOpen"
    x-transition
    class="w-[390px] border-l border-white/5 bg-[#18191B] flex flex-col overflow-hidden"
>

    <!-- HEADER -->
    <div class="h-[64px] border-b border-white/5 flex items-center justify-between px-5">

        <h3 class="text-lg font-medium">
            اطلاعات کانال
        </h3>

        <button
            @click="rightSidebarOpen = false"
            class="w-10 h-10 rounded-xl hover:bg-white/5 flex items-center justify-center"
        >
            <x-heroicon-o-x-mark class="w-5 h-5 text-zinc-400" />
        </button>

    </div>

    <!-- BODY -->
    <div class="flex-1 overflow-y-auto telegram-scrollbar">

        <!-- PROFILE -->
        <div class="p-6 border-b border-white/5 flex flex-col items-center">

            <img
                src="https://i.pravatar.cc/200?img=15"
                class="w-28 h-28 rounded-full object-cover"
            >

            <h2 class="mt-5 text-xl font-semibold text-white">
                کانال سفارشات
            </h2>

            <p class="text-sm text-zinc-400 mt-1">
                12,580 عضو
            </p>

            <p class="text-sm text-zinc-500 mt-4 text-center leading-relaxed">
                کانال مربوط به واحد طراحی
            </p>

        </div>

        <!-- ACTIONS -->
        <div class="p-4 grid grid-cols-3 gap-3 border-b border-white/5">

            <button class="h-20 rounded-2xl bg-[#222327] hover:bg-[#2B2D31] transition flex flex-col items-center justify-center gap-2">

                <x-heroicon-o-bell class="w-6 h-6 text-zinc-300" />

                <span class="text-xs text-zinc-400">
                    بی صدا
                </span>

            </button>

            <button class="h-20 rounded-2xl bg-[#222327] hover:bg-[#2B2D31] transition flex flex-col items-center justify-center gap-2">

                <x-heroicon-o-photo class="w-6 h-6 text-zinc-300" />

                <span class="text-xs text-zinc-400">
                    رسانه
                </span>

            </button>

            <button class="h-20 rounded-2xl bg-[#222327] hover:bg-[#2B2D31] transition flex flex-col items-center justify-center gap-2">

                <x-heroicon-o-link class="w-6 h-6 text-zinc-300" />

                <span class="text-xs text-zinc-400">
                    لینک
                </span>

            </button>

        </div>

        <!-- INFO -->
        <div class="p-4 space-y-2 border-b border-white/5">

            <div class="rounded-2xl bg-[#202125] p-4">

                <div class="text-xs uppercase tracking-wide text-zinc-500 mb-2">
                    نام کاربری
                </div>

                <div class="text-sm text-zinc-200">
                    @designunit
                </div>

            </div>

            <div class="rounded-2xl bg-[#202125] p-4">

                <div class="text-xs uppercase tracking-wide text-zinc-500 mb-2">
                    اعلانات
                </div>

                <div class="text-sm text-zinc-200">
                    فعال
                </div>

            </div>

        </div>

        <!-- MEDIA GRID -->
        <div class="p-4">

            <div class="flex items-center justify-between mb-4">

                <h4 class="font-medium text-sm">
                    رسانه های به اشتراک گذاشته
                </h4>

                <button class="text-xs text-violet-400">
                    مشاهده همه
                </button>

            </div>

            <div class="grid grid-cols-3 gap-2">

                @for($i = 1; $i <= 9; $i++)

                    <div class="aspect-square rounded-xl overflow-hidden">

                        <img
                            src="https://picsum.photos/300/300?random={{ $i }}"
                            class="w-full h-full object-cover"
                        >

                    </div>

                @endfor

            </div>

        </div>

    </div>

</div>
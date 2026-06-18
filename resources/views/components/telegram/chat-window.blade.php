<div class="relative flex-1 flex flex-col bg-[#0E0F11] overflow-hidden">

    <!-- WALLPAPER -->
    <div class="absolute inset-0 opacity-[0.05] pointer-events-none">
        <div class="w-full h-full bg-[url('{{url('images/telegram-pattern.png')}}')] bg-repeat"></div>
    </div>

    <!-- CHAT HEADER -->
    <div class="relative z-10 h-[64px] border-b border-white/5 bg-[#18191B]/90 backdrop-blur-xl flex items-center justify-between px-5">

        <div
            @click="toggleRightSidebar()"
            class="flex items-center gap-3 cursor-pointer"
        >

            <img
                src="https://i.pravatar.cc/150?img=12"
                class="w-11 h-11 rounded-full object-cover"
            >

            <div>

                <h3 class="text-[15px] font-medium text-white">
                    کانال طراحی
                </h3>

                <p class="text-xs text-zinc-400">
                    12,580 عضو
                </p>

            </div>

        </div>

        <div class="flex items-center gap-1">

            <!-- SEARCH -->
            <button class="w-10 h-10 rounded-xl hover:bg-white/5 transition flex items-center justify-center">
                <x-heroicon-o-magnifying-glass class="w-5 h-5 text-zinc-400" />
            </button>

            <!-- CALL -->
            <!-- <button class="w-10 h-10 rounded-xl hover:bg-white/5 transition flex items-center justify-center">
                <x-heroicon-o-phone class="w-5 h-5 text-zinc-400" />
            </button> -->

            <!-- MORE -->
            <button class="w-10 h-10 rounded-xl hover:bg-white/5 transition flex items-center justify-center">
                <x-heroicon-o-ellipsis-vertical class="w-5 h-5 text-zinc-400" />
            </button>

        </div>

    </div>

    <!-- PINNED MESSAGE -->
    <div class="relative z-10 px-5 py-3 border-b border-white/[0.04] bg-[#17181A]/70 backdrop-blur-xl">

        <div class="flex items-center gap-3">

            <div class="w-1 self-stretch rounded-full bg-violet-500"></div>

            <div class="flex-1 min-w-0">

                <div class="text-xs text-violet-400 mb-1">
                    پیام سنجاق شده
                </div>

                <div class="text-sm text-zinc-300 truncate">
                    سفارش نیاز به طراحی
                </div>

            </div>

            <button class="w-8 h-8 rounded-lg hover:bg-white/5 flex items-center justify-center">
                <x-heroicon-o-x-mark class="w-4 h-4 text-zinc-500" />
            </button>

        </div>

    </div>

    <!-- MESSAGE AREA -->
    <div
        id="message-container"
        class="relative z-10 flex-1 overflow-y-auto telegram-scrollbar px-6 py-6"
    >

        <div class="max-w-5xl mx-auto space-y-5">

            <!-- DATE -->
            <div class="flex justify-center">

                <div class="px-4 py-1.5 rounded-full bg-[#1E1F23]/90 backdrop-blur text-xs text-zinc-400 shadow">
                    امروز
                </div>

            </div>

            <!-- INCOMING -->
            <div class="flex items-end gap-3 group">

                <img
                    src="https://i.pravatar.cc/100?img=5"
                    class="w-9 h-9 rounded-full object-cover"
                >

                <div class="max-w-[520px]">

                    <div class="rounded-[22px] rounded-bl-md bg-[#1E1F23] px-5 py-3 shadow-xl border border-white/[0.03]">

                        <div class="text-sm font-medium text-violet-400 mb-1">
                            واحد طراحی
                        </div>

                        <p class="text-[15px] leading-relaxed text-zinc-200">
                            طرح زیر نیاز به طراحی دارد و باید امروز مورد بررسی قرار گیرد.
                        </p>

                        <div class="flex justify-end items-center gap-2 mt-2">

                            <span class="text-[11px] text-zinc-500">
                                10:22
                            </span>

                        </div>

                    </div>

                </div>

            </div>

            <!-- OUTGOING -->
            <div class="flex justify-end">

                <div class="max-w-[520px]">

                    <div class="rounded-[22px] rounded-br-md bg-violet-600 px-5 py-3 shadow-2xl shadow-violet-600/20">

                        <p class="text-[15px] leading-relaxed text-white">
                            تمامی طرح ها مورد بررسی قرار گرفتند.
                        </p>

                        <div class="flex justify-end items-center gap-1 mt-2">

                            <span class="text-[11px] text-white/70">
                                10:24
                            </span>

                            <x-heroicon-o-check class="w-4 h-4 text-white/70" />

                        </div>

                    </div>

                </div>

            </div>

            <!-- IMAGE MESSAGE -->
            <div class="flex items-end gap-3">

                <img
                    src="https://i.pravatar.cc/100?img=22"
                    class="w-9 h-9 rounded-full object-cover"
                >

                <div class="max-w-[420px]">

                    <div class="rounded-[24px] rounded-bl-md overflow-hidden bg-[#1E1F23] border border-white/[0.03]">

                        <img
                            src="https://picsum.photos/300/300"
                            class="w-full h-[260px] object-cover"
                        >

                        <div class="p-4">

                            <p class="text-sm text-zinc-300 leading-relaxed">
                                این طرح از نظر کیفیت مورد دارد.
                            </p>

                            <div class="flex justify-end mt-2">
                                <span class="text-[11px] text-zinc-500">
                                    16:17
                                </span>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- AUDIO -->
            <div class="flex justify-end">

                <div class="max-w-[380px]">

                    <div class="rounded-[22px] rounded-br-md bg-violet-600 p-4 shadow-lg shadow-violet-500/20">

                        <div class="flex items-center gap-4">

                            <button class="w-11 h-11 rounded-full bg-white/10 flex items-center justify-center">

                                <x-heroicon-o-play class="w-5 h-5 text-white" />

                            </button>

                            <div class="flex-1">

                                <div class="h-1.5 rounded-full bg-white/20 overflow-hidden">

                                    <div class="w-1/3 h-full bg-white rounded-full"></div>

                                </div>

                                <div class="flex justify-between mt-2 text-[11px] text-white/70">

                                    <span>00:14</span>
                                    <span>01:12</span>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- COMPOSER -->
    <div class="relative z-10 border-t border-white/5 bg-[#18191B]/80 backdrop-blur-xl px-6 py-5">

        <div class="max-w-5xl mx-auto flex items-end gap-3">

            <!-- ATTACH -->
            <button class="w-12 h-12 rounded-2xl hover:bg-white/5 transition flex items-center justify-center">

                <x-heroicon-o-paper-clip class="w-6 h-6 text-zinc-400" />

            </button>

            <!-- INPUT -->
            <div class="flex-1 min-h-[56px] rounded-[28px] bg-[#242529] px-5 flex items-end gap-3">

                <button class="h-14 flex items-center">

                    <x-heroicon-o-face-smile class="w-6 h-6 text-zinc-500" />

                </button>

                <textarea
                    rows="1"
                    placeholder="پیام"
                    class="flex-1 resize-none bg-transparent border-none outline-none py-4 text-[15px] text-zinc-200 placeholder:text-zinc-500"
                ></textarea>

                <button class="h-14 flex items-center">

                    <x-heroicon-o-microphone class="w-6 h-6 text-zinc-500" />

                </button>

            </div>

            <!-- SEND -->
            <button class="w-14 h-14 rounded-2xl bg-violet-600 hover:bg-violet-500 transition flex items-center justify-center shadow-2xl shadow-violet-600/20">

                <x-heroicon-o-paper-airplane class="w-6 h-6 text-white" />

            </button>

        </div>

    </div>

</div>

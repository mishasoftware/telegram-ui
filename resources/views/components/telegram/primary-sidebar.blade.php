@php
$items = [
    ['id' => 'messages', 'icon' => 'chat-bubble-left-right'],
    ['id' => 'contacts', 'icon' => 'users'],
    ['id' => 'archive', 'icon' => 'archive-box'],
    ['id' => 'settings', 'icon' => 'cog-6-tooth'],
];
@endphp

<div class="w-[74px] border-r border-white/5 bg-[#161618] flex flex-col items-center py-3 gap-3">

    <button class="w-11 h-11 rounded-2xl bg-white/5 hover:bg-white/10 transition flex items-center justify-center">
        <x-heroicon-o-bars-3 class="w-6 h-6 text-zinc-300" />
    </button>

    <div class="flex flex-col gap-2 mt-4">

        @foreach($items as $item)
            <button
                @click="openDrawer('{{ $item['id'] }}')"
                class="w-12 h-12 rounded-2xl flex items-center justify-center transition"
                :class="drawerType === '{{ $item['id'] }}'
                    ? 'bg-violet-500 text-white shadow-lg shadow-violet-500/20'
                    : 'hover:bg-white/5 text-zinc-400'"
            >
                @svg('heroicon-o-' . $item['icon'], 'w-6 h-6')
            </button>
        @endforeach

    </div>

    <div class="mt-auto">
        <img
            src="https://i.pravatar.cc/100"
            class="w-11 h-11 rounded-2xl object-cover ring-2 ring-violet-500/50"
        >
    </div>

</div>
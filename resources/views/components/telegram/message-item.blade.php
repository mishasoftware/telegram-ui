@props([
    'type' => 'incoming',
    'message' => '',
    'time' => '10:20 PM',
])

@if($type === 'incoming')

<div class="flex items-end gap-3">

    <img
        src="https://i.pravatar.cc/100"
        class="w-9 h-9 rounded-full"
    >

    <div class="max-w-[520px] rounded-[22px] rounded-bl-md bg-[#1E1F23] px-5 py-3">

        <p class="text-[15px] leading-relaxed text-zinc-200">
            {{ $message }}
        </p>

        <div class="flex justify-end mt-2">

            <span class="text-[11px] text-zinc-500">
                {{ $time }}
            </span>

        </div>

    </div>

</div>

@else

<div class="flex justify-end">

    <div class="max-w-[520px] rounded-[22px] rounded-br-md bg-violet-600 px-5 py-3">

        <p class="text-[15px] leading-relaxed text-white">
            {{ $message }}
        </p>

        <div class="flex justify-end items-center gap-1 mt-2">

            <span class="text-[11px] text-white/70">
                {{ $time }}
            </span>

            <x-heroicon-o-check class="w-4 h-4 text-white/70" />

        </div>

    </div>

</div>

@endif
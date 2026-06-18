<x-layouts.telegram>

<div
    x-data="telegramApp()"
    class="flex h-screen"
>

    <x-telegram.sidebar />

    <div class="flex-1 flex flex-col">

        <x-telegram.chat-header />

        <x-telegram.chat-body />

        <x-telegram.message-input />

    </div>

    <x-telegram.right-panel />

</div>

</x-layouts.telegram>
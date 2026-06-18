<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark"
      dir="{{ app()->getLocale() == 'fa' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telegram Web Clone</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="overflow-hidden bg-[#0f0f10] text-white antialiased">

    {{ $slot }}

</body>
</html>
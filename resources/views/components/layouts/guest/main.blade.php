<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    @include('partials.head', ['title' => 'tim bogdanov'])
</head>
<body class="bg-[#FDFDFC] dark:bg-[#121212] text-[#1b1b18] dark:text-[#E5DDD1]">
{{ $slot }}

@fluxScripts
</body>
</html>

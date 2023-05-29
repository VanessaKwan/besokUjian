<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    @include('layout.header')

    <div class="flex mt-[2vw]">
        <div class="w-[50%] h-[30vw] m-auto">
            <div class="bg-gray-400 text-[1.5vw]">
                <div class="ml-[0.5vw]">@yield('sub')</div>
            </div>

            @yield('content')
        </div>
    </div>
    {{-- <div class="w-full h-[10vw] bg-red-400 absolute"></div> --}}

    @include('layout.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>
</html>

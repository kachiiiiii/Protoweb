<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>

            </header>
        @endif

        <!-- Page Content -->
        <main>
            <section class="">
                <nav class="bg-violet-900 flex justify-evenly">
                    <div class="w-32">
                        <a href=""><img src="{{ asset('img/logolion.jpg') }}" alt=""></a>
                    </div>
                    <div class="m-10">

                        <span class="m-5 absolute pointer-events-none"><i
                                class="fa-solid fa-magnifying-glass fa-beat"></i></span><input type="search"
                            name="search" id="search" placeholder="search message...."
                            class="border border-slate-900 px-20 py-3 rounded-md">
                    </div>
                    <div>
                        <button class="m-10 text-2xl font-serif text-yellow-100"><i
                                class="fa-solid fa-gear fa-spin"></i>Settings</button>
                    </div>
                </nav>
                <div class="flex">
                    <div class="bg-violet-900 h-screen w-56">
                        <div class="p-4">
                            <i class="fa-regular fa-envelope fa-xl text-yellow-100"></i>&nbsp;<a
                                href="{{ route('compose.create') }}"
                                class="text-xl bg-slate-200 rounded p-2 px-5 font-serif hover:text-green-500">New
                                Message</a>
                        </div>
                        <div class="p-5 m-3">
                            <div class="font-serif m-2 text-yellow-200 hover:font-extrabold">
                                <i class="fa-solid fa-dashboard">&nbsp;</i><a href="{{ route('dashboard') }}">Dashboard</a>
                            </div>
                            <div class="font-serif m-2 text-yellow-200 hover:font-extrabold">
                                <i class="fa-solid fa-inbox">&nbsp;</i><a href="{{ route('inbox') }}">Inbox</a>
                            </div>
                            <div class="font-serif m-2 text-yellow-200 hover:font-extrabold">
                                <i class="fa-solid fa-envelope-circle-check"></i>&nbsp;<a href="{{ route('sent') }}">Sent</a>
                            </div>
                            <div class="font-serif m-2 text-yellow-200 hover:font-extrabold">
                                <i class="fa-brands fa-firstdraft"></i>&nbsp;<a href="{{ route('draft') }}">Draft</a>
                            </div>
                            <div class="font-serif m-2 text-yellow-200 hover:font-extrabold">
                                <i class="fa-solid fa-box-archive"></i>&nbsp;<a href="{{ route('archive') }}">Archive</a>
                            </div>
                            <div class="font-serif m-2 text-yellow-200 hover:font-extrabold">
                                <i class="fa-solid fa-trash"></i>&nbsp;<a href="{{ route('trash') }}">Trash</a>
                            </div>
                        </div>
                    </div>
                    @if (isset($mainContent))
                        <header class="bg-white dark:bg-gray-800 shadow w-5/6">
                            <div class=" mx-auto py-6 px-4 sm:px-6 lg:px-8">
                                {{ $mainContent }}
                            </div>

                        </header>
                    @endif

                </div>

            </section>
        </main>
    </div>
</body>

</html>

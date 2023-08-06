<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $systemConf->institute_name }}</title>

    <link rel="icon" href="{{ asset('storage/' . $systemConf->institute_photo_url) }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- SweetAlert -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased m-0">
    <x-admin.header :pageTitle="$pageTitle" />
    <main class="relative -mt-32">

        <div class="mx-auto max-w-screen-2xl px-4 pb-6 sm:px-6 lg:px-8 lg:pb-16">
            <div class="overflow-hidden rounded-lg bg-white shadow">

                <div class="divide-y divide-gray-200 lg:grid lg:grid-cols-12 lg:divide-y-0 lg:divide-x">
                    <x-admin.sidebar />

                    <div class="divide-y divide-gray-200 lg:col-span-9">
                        <div class="py-6 px-4 sm:p-6 lg:pb-8">
                            {{ $slot }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
</body>

</html>

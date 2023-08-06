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

<body class="font-sans antialiased">

    <div class="min-h-full">
        <nav class="bg-white shadow-sm">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 justify-between">
                    <div class="flex">
                        <div class="flex flex-shrink-0 items-center">
                            <img class="block h-8 w-auto lg:hidden"
                                src="{{ asset('storage/' . $systemConf->institute_photo_url) }}" alt="Your Company">
                            <img class="hidden h-8 w-auto lg:block"
                                src="{{ asset('storage/' . $systemConf->institute_photo_url) }}" alt="Your Company">
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div class="py-10">
            <header>
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold leading-tight tracking-tight text-gray-900 text-center">Sistem Aduan
                        Lansia Terlantar ( Si AduLT )
                    </h1>
                    <h2 class="text-2xl font-medium leading-tight tracking-tight text-gray-900 text-center">
                        Pastikan mengisi semua formulir!
                    </h2>
                </div>
            </header>
            <main>
                <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="px-4 py-8">
                        <form class="space-y-8 divide-y divide-gray-200"
                            action="{{ route('public.registration-application.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">

                                <div class="space-y-6 sm:space-y-5">
                                    <div>
                                        <h3 class="text-lg font-bold leading-6 text-gray-900">Identitas Lansia
                                            Terlantar</h3>
                                        <p class="mt-1 max-w-2xl text-sm text-gray-500 text-justify">berisi informasi
                                            pribadi lansia
                                            terlantar, seperti nama lengkap,
                                            tanggal lahir, alamat, kontak, dan status keluarga. Tujuan form ini adalah
                                            untuk memahami dan menyediakan bantuan serta perawatan yang sesuai bagi
                                            lansia tersebut. </p>
                                    </div>

                                    <div class="space-y-6 sm:space-y-5">
                                        <!-- Nama Lengkap -->
                                        <div
                                            class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                            <label for="elderly_name"
                                                class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Nama
                                                Lengkap</label>
                                            <x-input-error :messages="$errors->get('elderly_name')" class="mt-2" />
                                            <div class="mt-1 sm:col-span-2 sm:mt-0">
                                                <div class="flex max-w-lg rounded-md shadow-sm">
                                                    <input type="text" name="elderly_name" id="elderly_name"
                                                        autocomplete="elderly_name"
                                                        class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm {{ $errors->has('elderly_name') ? 'border-red-300' : '' }}"
                                                        value="{{ old('elderly_name') }}">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Jenis Kelamin -->
                                        <div
                                            class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                            <label for="elderly_gender_name"
                                                class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Jenis
                                                Kelamin</label>
                                            <x-input-error :messages="$errors->get('elderly_gender_name')" class="mt-2" />
                                            <div class="mt-1 sm:col-span-2 sm:mt-0">
                                                <fieldset class="mt-4">
                                                    <legend class="sr-only">Notification method</legend>
                                                    <div class="space-y-4">
                                                        <div class="flex items-center">
                                                            <input id="man" name="elderly_gender_name"
                                                                type="radio"
                                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                                                value="Laki Laki"
                                                                @if (old('elderly_gender_name') == 'Laki Laki') checked @endif>
                                                            <label for="man"
                                                                class="ml-3 block text-sm font-medium text-gray-700">Laki-Laki</label>
                                                        </div>

                                                        <div class="flex items-center">
                                                            <input id="women" name="elderly_gender_name"
                                                                type="radio"
                                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                                                value="Perempuan"
                                                                @if (old('elderly_gender_name') == 'Perempuan') checked @endif>
                                                            <label for="women"
                                                                class="ml-3 block text-sm font-medium text-gray-700">Perempuan</label>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>

                                        <!-- NIK -->
                                        <div
                                            class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                            <label for="elderly_nik_number"
                                                class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Nomor
                                                Indentitas Kependudukan ( NIK )</label>
                                            <x-input-error :messages="$errors->get('elderly_nik_number')" class="mt-2" />
                                            <div class="mt-1 sm:col-span-2 sm:mt-0">
                                                <div class="flex max-w-lg rounded-md shadow-sm">
                                                    <input type="text" name="elderly_nik_number"
                                                        id="elderly_nik_number" autocomplete="elderly_nik_number"
                                                        class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm {{ $errors->has('elderly_nik_number') ? 'border-red-300' : '' }}"
                                                        value="{{ old('elderly_nik_number') }}">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- No KK -->
                                        <div
                                            class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                            <label for="elderly_kk_number"
                                                class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Nomor
                                                Kartu Keluarga ( KK )</label>
                                            <x-input-error :messages="$errors->get('elderly_kk_number')" class="mt-2" />
                                            <div class="mt-1 sm:col-span-2 sm:mt-0">
                                                <div class="flex max-w-lg rounded-md shadow-sm">
                                                    <input type="text" name="elderly_kk_number"
                                                        id="elderly_kk_number" autocomplete="elderly_kk_number"
                                                        class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm  {{ $errors->has('elderly_kk_number') ? 'border-red-300' : '' }}"
                                                        value="{{ old('elderly_kk_number') }}">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- No KIS -->
                                        <div
                                            class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                            <label for="elderly_kis_number"
                                                class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Nomor
                                                Kartu Indonesia Sehat ( KIS )</label>
                                            <x-input-error :messages="$errors->get('elderly_kis_number')" class="mt-2" />
                                            <div class="mt-1 sm:col-span-2 sm:mt-0">
                                                <div class="flex max-w-lg rounded-md shadow-sm">
                                                    <input type="text" name="elderly_kis_number"
                                                        id="elderly_kis_number" autocomplete="elderly_kis_number"
                                                        class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm {{ $errors->has('elderly_kis_number') ? 'border-red-300' : '' }}"
                                                        value="{{ old('elderly_kis_number') }}">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Tanggal Lahir -->
                                        <div
                                            class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                            <label for="elderly_date_born"
                                                class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                                Tanggal Lahir</label>
                                            <x-input-error :messages="$errors->get('elderly_date_born')" class="mt-2" />
                                            <div class="relative max-w-sm">
                                                <div
                                                    class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="currentColor" viewBox="0 0 20 20">
                                                        <path
                                                            d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                                    </svg>
                                                </div>
                                                <input datepicker type="text" id="elderly_date_born"
                                                    name="elderly_date_born"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 {{ $errors->has('elderly_date_born') ? 'border-red-300' : '' }}"
                                                    placeholder="Masukkan tanggal lahir..."
                                                    value="{{ old('elderly_date_born') }}">
                                            </div>
                                        </div>

                                        <!-- Agama -->
                                        <div
                                            class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                            <label for="elderly_religion_name"
                                                class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Agama</label>
                                            <x-input-error :messages="$errors->get('elderly_religion_name')" class="mt-2" />
                                            <div class="mt-1 sm:col-span-2 sm:mt-0">
                                                <fieldset class="mt-4">
                                                    <legend class="sr-only">Notification method</legend>
                                                    <div class="space-y-4">
                                                        <div class="flex items-center">
                                                            <input id="islam" name="elderly_religion_name"
                                                                type="radio"
                                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                                                value="islam"
                                                                @if (old('elderly_religion_name') == 'islam') checked @endif>
                                                            <label for="islam"
                                                                class="ml-3 block text-sm font-medium text-gray-700">Islam</label>
                                                        </div>

                                                        <div class="flex items-center">
                                                            <input id="kristen" name="elderly_religion_name"
                                                                type="radio"
                                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                                                value="kristen"
                                                                @if (old('elderly_religion_name') == 'kristen') checked @endif>
                                                            <label for="kristen"
                                                                class="ml-3 block text-sm font-medium text-gray-700">Kristen</label>
                                                        </div>

                                                        <div class="flex items-center">
                                                            <input id="hindu" name="elderly_religion_name"
                                                                type="radio"
                                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                                                value="hindu"
                                                                @if (old('elderly_religion_name') == 'hindu') checked @endif>
                                                            <label for="hindu"
                                                                class="ml-3 block text-sm font-medium text-gray-700">Hindu</label>
                                                        </div>

                                                        <div class="flex items-center">
                                                            <input id="budha" name="elderly_religion_name"
                                                                type="radio"
                                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                                                value="budha"
                                                                @if (old('elderly_religion_name') == 'budha') checked @endif>
                                                            <label for="budha"
                                                                class="ml-3 block text-sm font-medium text-gray-700">Budha</label>
                                                        </div>
                                                        <div class="flex items-center">
                                                            <input id="katolik" name="elderly_religion_name"
                                                                type="radio"
                                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                                                value="katolik"
                                                                @if (old('elderly_religion_name') == 'katolik') checked @endif>
                                                            <label for="katolik"
                                                                class="ml-3 block text-sm font-medium text-gray-700">Katolik</label>
                                                        </div>

                                                        <div class="flex items-center">
                                                            <input id="kongkhucu" name="elderly_religion_name"
                                                                type="radio"
                                                                class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                                                value="kongkhucu"
                                                                @if (old('elderly_religion_name') == 'kongkhucu') checked @endif>
                                                            <label for="kongkhucu"
                                                                class="ml-3 block text-sm font-medium text-gray-700">Kongkhucu</label>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>

                                        <!-- Alamat Lengkap -->
                                        <div
                                            class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                            <label for="elderly_address"
                                                class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Alamat
                                                Lengkap (Sesuai KTP) </label>
                                            <x-input-error :messages="$errors->get('elderly_address')" class="mt-2" />
                                            <div class="mt-1 sm:col-span-2 sm:mt-0">
                                                <div class="flex max-w-lg rounded-md shadow-sm">
                                                    <textarea name="elderly_address" id="elderly_address"
                                                        class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm {{ $errors->has('elderly_address') ? 'border-red-300' : '' }}">{{ old('elderly_address') }}</textarea>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- Alamat Domisili -->
                                        <div
                                            class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                            <label for="elderly_domicile"
                                                class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Alamat
                                                Domisili</label>
                                            <x-input-error :messages="$errors->get('elderly_domicile')" class="mt-2" />
                                            <div class="mt-1 sm:col-span-2 sm:mt-0">
                                                <div class="flex max-w-lg rounded-md shadow-sm">
                                                    <input type="text" name="elderly_domicile"
                                                        id="elderly_domicile" autocomplete="elderly_domicile"
                                                        class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm {{ $errors->has('elderly_domicile') ? 'border-red-300' : '' }}"
                                                        value="{{ old('elderly_domicile') }}">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="space-y-6 pt-8 sm:space-y-5 sm:pt-10">

                                    <div>
                                        <h3 class="text-lg font-bold leading-6 text-gray-900">Identitas Pelapor
                                        </h3>
                                        <p class="mt-1 max-w-2xl text-sm text-gray-500">berisi: nama lengkap, alamat,
                                            nomor telepon, alamat email, hubungan dengan korban, tanggal dan waktu
                                            laporan, serta deskripsi kejadian. Data harus dijaga kerahasiaannya dan
                                            digunakan hanya untuk kepentingan laporan dan penanganan kejadian yang
                                            relevan.</p>
                                    </div>
                                    <div class="space-y-6 sm:space-y-5">
                                        <!-- Nama Lengkap Pelapor -->
                                        <div
                                            class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                            <label for="reporter_name"
                                                class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Nama
                                                Lengkap Pelapor</label>
                                            <x-input-error :messages="$errors->get('reporter_name')" class="mt-2" />
                                            <div class="mt-1 sm:col-span-2 sm:mt-0">
                                                <input type="text" name="reporter_name" id="reporter_name"
                                                    autocomplete="reporter_name"
                                                    class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm {{ $errors->has('reporter_name') ? 'border-red-300' : '' }}"
                                                    value="{{ old('reporter_name') }}">
                                            </div>
                                        </div>
                                        <!-- No HP Pelapor -->
                                        <div
                                            class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                            <label for="reporter_phone_number"
                                                class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">No Hp
                                                Pelapor</label>
                                            <x-input-error :messages="$errors->get('reporter_phone_number')" class="mt-2" />
                                            <div class="mt-1 sm:col-span-2 sm:mt-0">
                                                <input type="text" name="reporter_phone_number"
                                                    id="reporter_phone_number" autocomplete="family-name"
                                                    class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm {{ $errors->has('reporter_phone_number') ? 'border-red-300' : '' }}"
                                                    value="{{ old('reporter_phone_number') }}">
                                            </div>
                                        </div>
                                        <!-- Alamat Lengkap Pelapor -->
                                        <div
                                            class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                            <label for="reporter_address"
                                                class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Alamat
                                                Pelapor</label>
                                            <x-input-error :messages="$errors->get('reporter_address')" class="mt-2" />
                                            <div class="mt-1 sm:col-span-2 sm:mt-0">
                                                <textarea name="reporter_address" id="reporter_address"
                                                    class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm {{ $errors->has('reporter_address') ? 'border-red-300' : '' }}">{{ old('reporter_address') }}</textarea>
                                            </div>
                                        </div>
                                        <!-- Pekerjaan Pelapor -->
                                        <div
                                            class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                            <label for="reporter_job_name"
                                                class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Pekerjaan</label>
                                            <x-input-error :messages="$errors->get('reporter_job_name')" class="mt-2" />
                                            <div class="mt-1 sm:col-span-2 sm:mt-0">
                                                <input type="text" name="reporter_job_name" id="reporter_job_name"
                                                    autocomplete="family-name"
                                                    class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:max-w-xs sm:text-sm  {{ $errors->has('reporter_job_name') ? 'border-red-300' : '' }}"
                                                    value="{{ old('reporter_job_name') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="space-y-6 divide-y divide-gray-200 pt-8 sm:space-y-5 sm:pt-10">
                                    <div>
                                        <h3 class="text-lg font-bold leading-6 text-gray-900">Deskripsi Lansia</h3>
                                        <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                            berisi tentang kondisi lansia, keadaan lansia dan foto lansia.
                                        </p>
                                    </div>
                                    <div class="space-y-6 divide-y divide-gray-200 sm:space-y-5">
                                        <!-- Kondisi Fisik Lansia -->
                                        <div class="pt-6 sm:pt-5">
                                            <div role="group" aria-labelledby="elderly_physical_condition">
                                                <div class="sm:grid sm:grid-cols-3 sm:items-baseline sm:gap-4">
                                                    <div>
                                                        <div class="text-base font-medium text-gray-900 sm:text-sm sm:text-gray-700"
                                                            id="elderly_physical_condition">Kondisi Fisik Lansia</div>
                                                        <x-input-error :messages="$errors->get('elderly_physical_condition')" class="mt-2" />
                                                    </div>
                                                    <div class="mt-1 sm:col-span-2 sm:mt-0">
                                                        <textarea name="elderly_physical_condition" id="elderly_physical_condition"
                                                            class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm {{ $errors->has('elderly_physical_condition') ? 'border-red-300' : '' }}">{{ old('elderly_physical_condition') }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Kondisi Psikologis Lansia -->
                                        <div class="pt-6 sm:pt-5">
                                            <div role="group" aria-labelledby="elderly_psychological_condition">
                                                <div
                                                    class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                                    <label for="elderly_psychological_condition"
                                                        class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Kondisi
                                                        Psikologis Lansia</label>
                                                    <x-input-error :messages="$errors->get('elderly_psychological_condition')" class="mt-2" />
                                                    <div class="mt-1 sm:col-span-2 sm:mt-0">
                                                        <input type="text" name="elderly_psychological_condition"
                                                            id="elderly_psychological_condition"
                                                            autocomplete="family-name"
                                                            class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm {{ $errors->has('elderly_psychological_condition') ? 'border-red-300' : '' }}"
                                                            value="{{ old('elderly_psychological_condition') }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Kondisi Sosial Lansia -->
                                        <div class="pt-6 sm:pt-5">
                                            <div role="group" aria-labelledby="elderly_social_condition">
                                                <div
                                                    class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                                    <label for="elderly_social_condition"
                                                        class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Kondisi
                                                        Sosial Lansia</label>
                                                    <x-input-error :messages="$errors->get('elderly_social_condition')" class="mt-2" />
                                                    <div class="mt-1 sm:col-span-2 sm:mt-0">
                                                        <input type="text" name="elderly_social_condition"
                                                            id="elderly_social_condition" autocomplete="family-name"
                                                            class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm {{ $errors->has('elderly_social_condition') ? 'border-red-300' : '' }}"
                                                            value="{{ old('elderly_social_condition') }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Kondisi Ekonomi Lansia -->
                                        <div class="pt-6 sm:pt-5">
                                            <div role="group" aria-labelledby="elderly_economy_condition">
                                                <div
                                                    class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                                    <label for="elderly_economy_condition"
                                                        class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Kondisi
                                                        Ekonomi Lansia</label>
                                                    <div class="mt-1 sm:col-span-2 sm:mt-0">
                                                        <input type="text" name="elderly_economy_condition"
                                                            id="elderly_economy_condition"
                                                            autocomplete="elderly_economy_condition"
                                                            class="block w-full min-w-0 flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm  {{ $errors->has('elderly_economy_condition') ? 'border-red-300' : '' }}"
                                                            value="{{ old('elderly_economy_condition') }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Foto PM -->
                                        <div class="pt-6 sm:pt-5">
                                            <div role="group" aria-labelledby="elderly_photo_url">
                                                <div
                                                    class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                                    <label for="last-name"
                                                        class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Foto
                                                        Calon PM</label>
                                                    <x-input-error :messages="$errors->get('elderly_photo_url')" class="mt-2" />
                                                    <div
                                                        class="mt-6 flex-grow lg:mt-0 lg:ml-6 lg:flex-shrink-0 lg:flex-grow-0">
                                                        <div class="mt-1 lg:hidden">
                                                            <div class="flex items-center">
                                                                <div class="inline-block h-12 w-12 flex-shrink-0 overflow-hidden rounded-full"
                                                                    aria-hidden="true">
                                                                    <img class="h-full w-full rounded-full"
                                                                        src="{{ asset('img/default_profile.jpg') }}"
                                                                        alt="" id="previewImageDesktop">
                                                                </div>
                                                                <div class="ml-5 rounded-md shadow-sm">
                                                                    <div
                                                                        class="group relative flex items-center justify-center rounded-md border border-gray-300 py-2 px-3 focus-within:ring-2 focus-within:ring-sky-500 focus-within:ring-offset-2 hover:bg-gray-50">
                                                                        <label for="user-photo"
                                                                            class="pointer-events-none relative text-sm font-medium leading-4 text-gray-700">
                                                                            <span>Ubah Foto</span>
                                                                            <span class="sr-only"> user photo</span>
                                                                        </label>
                                                                        <input id="elderly_photo_url"
                                                                            name="elderly_photo_url" type="file"
                                                                            class="absolute h-full w-full cursor-pointer rounded-md border-gray-300 opacity-0"
                                                                            {{ $errors->has('elderly_photo_url') ? 'border-red-300' : '' }}>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="relative hidden h-40 w-40 overflow-hidden rounded-full lg:block">
                                                            <img class="relative h-40 w-40 rounded-full"
                                                                src="{{ asset('img/default_profile.jpg') }}"
                                                                alt="" id="previewImageMobile">
                                                            <label for="elderly_photo_url"
                                                                class="absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-75 text-sm font-medium text-white opacity-0 focus-within:opacity-100 hover:opacity-100">
                                                                <span>Ubah Foto</span>
                                                                <span class="sr-only"> user photo</span>
                                                                <input type="file" id="photoInput"
                                                                    name="elderly_photo_url"
                                                                    class="absolute inset-0 h-full w-full cursor-pointer rounded-md border-gray-300 opacity-0  {{ $errors->has('elderly_photo_url') ? 'border-red-300' : '' }}">
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pt-5">
                                <div class="flex justify-end">
                                    <a href="{{ url()->previous() }}"
                                        class="btn cursor-pointer inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                        Kembali</a>
                                    <button type="submit"
                                        class="ml-3 inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /End replace -->
                </div>
            </main>
        </div>
    </div>
    <!-- Datepicker Flowbite JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/datepicker.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const previewImageMobile = document.getElementById('previewImageMobile');
            const previewImageDesktop = document.getElementById('previewImageDesktop');

            // When the file input changes
            document.getElementById('photoInput').addEventListener('change', function() {
                // Get the selected file
                const file = this.files[0];

                // Check if a file is selected
                if (file) {
                    // Create a FileReader to read the file
                    const reader = new FileReader();

                    // Set up the FileReader to display the image preview
                    reader.onload = function(e) {
                        // Show the preview for both mobile and desktop images
                        previewImageMobile.setAttribute('src', e.target.result);
                        previewImageMobile.style.display = 'block';

                        previewImageDesktop.setAttribute('src', e.target.result);
                        previewImageDesktop.style.display = 'block';
                    }

                    // Read the file as a data URL
                    reader.readAsDataURL(file);
                } else {
                    // If no file is selected, clear the preview and hide both images
                    previewImageMobile.setAttribute('src', '');
                    previewImageMobile.style.display = 'none';

                    previewImageDesktop.setAttribute('src', '');
                    previewImageDesktop.style.display = 'none';
                }
            });
        });
    </script>
</body>

</html>

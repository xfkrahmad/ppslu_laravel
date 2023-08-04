<x-admin.layout :pageTitle="$pageTitle">
    <form class="" action="{{ route('dashboard.admin.system.update') }}" method="POST" enctype="multipart/form-data">
        @method('patch')
        @csrf

        <!-- Profile section -->
        <div>
            <h2 class="text-lg font-medium leading-6 text-gray-900">Pengaturan Sistem Aplikasi</h2>
            <p class="mt-1 text-sm text-gray-500">Informasi ini akan ditampilkan pada halaman website</p>
        </div>

        <div class="mt-6 flex flex-col lg:flex-row">
            <div class="flex-grow space-y-6">
                <div>
                    <label for="institute_name" class="block text-sm font-medium text-gray-700">Nama Lembaga</label>

                    <x-input-error :messages="$errors->get('institute_name')" class="mt-2" />

                    <div class="mt-1 flex rounded-md shadow-sm">

                        <input type="text" name="institute_name" id="institute_name" autocomplete="institute_name"
                            class="block w-full min-w-0 flex-grow rounded-none rounded-r-md border-gray-300 focus:border-sky-500 focus:ring-sky-500 sm:text-sm {{ $errors->has('institute_name') ? 'border-red-300' : '' }}"
                            value="{{ old('institute_name', $systemConf->institute_name) }}">

                    </div>
                </div>

                <div>
                    <label for="institute_name_detail" class="block text-sm font-medium text-gray-700">Nama Lembaga
                        (
                        Tanpa
                        Singkatan )</label>
                    <x-input-error :messages="$errors->get('institute_name_detail')" class="mt-2" />
                    <div class="mt-1 flex rounded-md shadow-sm">

                        <input type="text" name="institute_name_detail" id="institute_name_detail"
                            autocomplete="institute_name_detail"
                            class="block w-full min-w-0 flex-grow rounded-none rounded-r-md border-gray-300 focus:border-sky-500 focus:ring-sky-500 sm:text-sm  {{ $errors->has('institute_name_detail') ? 'border-red-300' : '' }}"
                            value="{{ old('institute_name_detail', $systemConf->institute_name_detail) }}">
                    </div>
                </div>

                <div>
                    <label for="institute_description" class="block text-sm font-medium text-gray-700">Deskripsi
                        Lembaga</label>
                    <x-input-error :messages="$errors->get('institute_description')" class="mt-2" />
                    <div class="mt-1">
                        <textarea id="institute_description" name="institute_description" rows="3"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500 sm:text-sm  {{ $errors->has('institute_description') ? 'border-red-300' : '' }}">{{ old('institute_description', $systemConf->institute_description) }}</textarea>
                    </div>
                </div>
            </div>

            <!-- Foto Upload -->
            <div class="mt-6 flex-grow lg:mt-0 lg:ml-6 lg:flex-shrink-0 lg:flex-grow-0">
                <p class="text-sm font-medium text-gray-700 lg:ml-12" aria-hidden="true">Foto Logo</p>
                <div class="mt-1 lg:hidden">
                    <div class="flex items-center">
                        <div class="inline-block h-12 w-12 flex-shrink-0 overflow-hidden rounded-full"
                            aria-hidden="true">
                            <img class="h-full w-full rounded-full"
                                src="{{ asset('storage/' . $systemConf->institute_photo_url) }}" alt=""
                                id="previewImageDesktop">
                        </div>
                        <div class="ml-5 rounded-md shadow-sm">
                            <div
                                class="group relative flex items-center justify-center rounded-md border border-gray-300 py-2 px-3 focus-within:ring-2 focus-within:ring-sky-500 focus-within:ring-offset-2 hover:bg-gray-50">
                                <label for="user-photo"
                                    class="pointer-events-none relative text-sm font-medium leading-4 text-gray-700">
                                    <span>Ubah Foto</span>
                                    <span class="sr-only"> user photo</span>
                                </label>
                                <x-input-error :messages="$errors->get('institute_name')" class="mt-2" />
                                <input id="user-photo" name="user-photo" type="file"
                                    class="absolute h-full w-full cursor-pointer rounded-md border-gray-300 opacity-0"
                                    {{ $errors->has('user-photo') ? 'border-red-300' : '' }}>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative hidden overflow-hidden rounded-full lg:block">
                    <img class="relative h-40 w-40 rounded-full"
                        src="{{ asset('storage/' . $systemConf->institute_photo_url) }}" alt=""
                        id="previewImageMobile"">
                    <label for="user-photo"
                        class="absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-75 text-sm font-medium text-white opacity-0 focus-within:opacity-100 hover:opacity-100">
                        <x-input-error :messages="$errors->get('user-photo')" class="mt-2" />
                        <span>Ubah Foto</span>
                        <span class="sr-only"> user photo</span>
                        <input type="file" id="photoInput" name="user-photo"
                            class="absolute inset-0 h-full w-full cursor-pointer rounded-md border-gray-300 opacity-0  {{ $errors->has('user-photo') ? 'border-red-300' : '' }}">
                    </label>
                </div>
            </div>
        </div>


        <!-- Social Media section -->
        <div class="mt-6 grid grid-cols-12 gap-6">

            <div class="col-span-12 sm:col-span-6">
                <label for="institute_instagram_url" class="block text-sm font-medium text-gray-700">Instagram</label>
                <x-input-error :messages="$errors->get('institute_instagram_url')" class="mt-2" />
                <input type="url" name="institute_instagram_url" id="institute_instagram_url"
                    autocomplete="given-name"
                    class="mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm  {{ $errors->has('institute_instagram_url') ? 'border-red-300' : '' }}"
                    value="{{ old('institute_instagram_url', $systemConf->institute_instagram_url) }}">
            </div>

            <div class="col-span-12 sm:col-span-6">
                <label for="institute_facebook_url" class="block text-sm font-medium text-gray-700">Facebook</label>
                <x-input-error :messages="$errors->get('institute_facebook_url')" class="mt-2" />
                <input type="url" name="institute_facebook_url" id="institute_facebook_url"
                    autocomplete="family-name"
                    class="mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm  {{ $errors->has('institute_facebook_url') ? 'border-red-300' : '' }}"
                    value="{{ old('institute_facebook_url', $systemConf->institute_facebook_url) }}">
            </div>

            <div class="col-span-12 sm:col-span-6">
                <label for="institute_twitter_url" class="block text-sm font-medium text-gray-700">Twitter</label>
                <x-input-error :messages="$errors->get('institute_twitter_url')" class="mt-2" />
                <input type="url" name="institute_twitter_url" id="institute_twitter_url"
                    class="mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm  {{ $errors->has('institute_twitter_url') ? 'border-red-300' : '' }}"
                    value="{{ old('institute_twitter_url', $systemConf->institute_twitter_url) }}">
            </div>

            <div class="col-span-12 sm:col-span-6">
                <label for="institute_phone" class="block text-sm font-medium text-gray-700">Nomor
                    Telefon</label>
                <x-input-error :messages="$errors->get('institute_phone')" class="mt-2" />
                <input type="text" name="institute_phone" id="institute_phone" autocomplete="organization"
                    class="mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm  {{ $errors->has('institute_phone') ? 'border-red-300' : '' }}"
                    value="{{ old('institute_phone', $systemConf->institute_phone) }}">
            </div>

            <div class="col-span-12 sm:col-span-6">
                <label for="institute_email" class="block text-sm font-medium text-gray-700">Email</label>
                <x-input-error :messages="$errors->get('institute_email')" class="mt-2" />
                <input type="email" name="institute_email" id="institute_email" autocomplete="organization"
                    class="mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm {{ $errors->has('institute_email') ? 'border-red-300' : '' }}"
                    value="{{ old('institute_email', $systemConf->institute_email) }}">
            </div>
        </div>
        <!--End Of Social Media section -->
        </div>

        <!-- Address section -->
        <div class="divide-y divide-gray-200 pt-6">
            <div class="px-4 sm:px-6">
                <!-- Alamat Lembaga-->
                <div class="mt-6 flex flex-col lg:flex-row lg:max-w-[79%]">
                    <div class="flex-grow">
                        <div>
                            <label for="institute_address" class="block text-sm font-medium text-gray-700">Alamat
                                Lembaga</label>
                            <x-input-error :messages="$errors->get('institute_address')" class="mt-2" />
                            <div class="mt-1">
                                <textarea id="institute_address" name="institute_address" rows="3"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500 sm:text-sm {{ $errors->has('institute_address') ? 'border-red-300' : '' }}">{{ old('institute_address', $systemConf->institute_address) }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Of Alamat Lembaga -->
                <!-- Google Maps URL Lembaga-->
                <div class="mt-6 flex flex-col lg:flex-row lg:max-w-[79%]">
                    <div class="flex-grow">
                        <div>
                            <label for="institute_gmaps_url" class="block text-sm font-medium text-gray-700">Google
                                Map ( Link Embed )</label>
                            <x-input-error :messages="$errors->get('institute_gmaps_url')" class="mt-2" />
                            <div class="mt-1">
                                <textarea id="institute_gmaps_url" name="institute_gmaps_url" rows="3"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500 sm:text-sm {{ $errors->has('institute_gmaps_url') ? 'border-red-300' : '' }}">{{ old('institute_gmaps_url', $systemConf->institute_gmaps_url) }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Of Google Maps URL Lembaga -->
                <!-- Provinsi/Kota/Kode pos -->
                <div class="mt-6 grid grid-cols-12 gap-6">

                    <div class="col-span-12 lg:col-span-6">
                        <label for="province_id" class="block text-sm font-medium text-gray-700">Provinsi</label>
                        <x-input-error :messages="$errors->get('province_id')" class="mt-2" />
                        <select class="w-1/2 lg:w-full" name="province_id" id=province_id">
                            @foreach ($provinces as $option)
                                <option value="{{ $option->id }}" @if (old('province_id', $systemConf->province_id) == $option->id) selected @endif>
                                    {{ $option->province_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-span-12 lg:col-span-6">
                        <label for="city_id" class="block text-sm font-medium text-gray-700">Kota/Kabupaten</label>
                        <x-input-error :messages="$errors->get('city_id')" class="mt-2" />
                        <select class="w-1/2 lg:w-full" name="city_id" id="city_id">
                            @foreach ($cities as $option)
                                <option value="{{ $option->id }}" @if (old('city_id', $systemConf->city_id) == $option->id) selected @endif>
                                    {{ $option->city_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-span-12 sm:col-span-6">
                        <label for="postal_code" class="block text-sm font-medium text-gray-700">Kodepos</label>
                        <x-input-error :messages="$errors->get('postal_code')" class="mt-2" />
                        <input type="text" name="postal_code" id="postal_code" autocomplete="organization"
                            class="mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm {{ $errors->has('postal_code') ? 'border-red-300' : '' }}"
                            value="{{ old('postal_code', $systemConf->postal_code) }}">
                    </div>
                </div>
                <!-- end Of Provinsi/Kota/Kode pos -->
            </div>

            <div class="mt-4 flex justify-end py-4 px-4 sm:px-6">
                <a href="{{ url()->previous() }}"
                    class="btn cursor-pointer inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                    Kembali</a>
                <button type="submit"
                    class="ml-5 inline-flex justify-center rounded-md border border-transparent bg-sky-700 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-sky-800 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2">Simpan</button>
            </div>
            <!-- End Of Address section -->
    </form>

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
    @if (Session::has('successMsg'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: '{{ Session::get('successMsg') }}',
                });
            });
        </script>
    @endif
</x-admin.layout>

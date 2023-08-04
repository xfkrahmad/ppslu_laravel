<x-admin.layout :pageTitle="$pageTitle">
    <form class="" action="{{ route('dashboard.admin.employees.update', $employee) }}" method="POST"
        enctype="multipart/form-data">
        @method('patch')
        @csrf
        <h1>{{ $errors }}</h1>
        <div>
            <h2 class="text-lg font-medium leading-6 text-gray-900">Tambah Pegawai Baru</h2>
            <p class="mt-1 text-sm text-gray-500">Informasi ini berupa data pegawai yang akan ditambahkan</p>
        </div>

        <div class="mt-6 flex flex-col lg:flex-row">
            <div class="flex-grow space-y-6">
                <div>
                    <label for="nip" class="block text-sm font-medium text-gray-700">NIP</label>

                    <x-input-error :messages="$errors->get('nip')" class="mt-2" />

                    <div class="mt-1 flex rounded-md shadow-sm">

                        <input type="text" name="nip" id="nip" autocomplete="nip"
                            class="block w-full min-w-0 flex-grow rounded-none rounded-r-md border-gray-300 focus:border-sky-500 focus:ring-sky-500 sm:text-sm {{ $errors->has('nip') ? 'border-red-300' : '' }}"
                            value="{{ old('nip', $employee->nip) }}">

                    </div>
                </div>

                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    <div class="mt-1 flex rounded-md shadow-sm">

                        <input type="text" name="name" id="name" autocomplete="name"
                            class="block w-full min-w-0 flex-grow rounded-none rounded-r-md border-gray-300 focus:border-sky-500 focus:ring-sky-500 sm:text-sm  {{ $errors->has('name') ? 'border-red-300' : '' }}"
                            value="{{ old('name', $employee->name) }}">
                    </div>
                </div>

                <div class="mt-6 grid grid-cols-12 gap-6">
                    <div class="col-span-12 sm:col-span-6">
                        <label for="title_name" class="block text-sm font-medium text-gray-700">
                            Gelar</label>
                        <x-input-error :messages="$errors->get('title_name')" class="mt-2" />
                        <input type="text" name="title_name" id="title_name" autocomplete="name"
                            class="block w-full min-w-0 flex-grow rounded-none rounded-r-md border-gray-300 focus:border-sky-500 focus:ring-sky-500 sm:text-sm  {{ $errors->has('title_name') ? 'border-red-300' : '' }}"
                            value="{{ old('title_name', $employee->title_name) }}">
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="position_name" class="block text-sm font-medium text-gray-700">Jabatan</label>
                        <x-input-error :messages="$errors->get('position_name')" class="mt-2" />
                        <input type="text" name="position_name" id="position_name" autocomplete="position_name"
                            class="block w-full min-w-0 flex-grow rounded-none rounded-r-md border-gray-300 focus:border-sky-500 focus:ring-sky-500 sm:text-sm  {{ $errors->has('name') ? 'border-red-300' : '' }}"
                            value="{{ old('position_name', $employee->position_name) }}">
                    </div>
                </div>

                <div>
                    <label for="motto_description" class="block text-sm font-medium text-gray-700">Motto</label>
                    <x-input-error :messages="$errors->get('motto_description')" class="mt-2" />
                    <div class="mt-1">
                        <textarea id="motto_description" name="motto_description" rows="3"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-sky-500 focus:ring-sky-500 sm:text-sm  {{ $errors->has('motto_description') ? 'border-red-300' : '' }}">{{ old('motto_description', $employee->motto_description) }}</textarea>
                    </div>
                </div>
                <!-- Status Kepegawaian -->

                <div x-data="{ isActive: {{ $employee->status }} }" class="flex items-center justify-between">
                    <input type="hidden" name="status" x-bind:value="isActive ? '1' : '0'">
                    <span class="flex flex-grow flex-col">
                        <span class="text-sm font-medium text-gray-900" id="availability-label">Status
                            Kepegawaian</span>
                        <span class="text-sm text-gray-500" id="availability-description">
                            Status pegawai menandakan apabila pegawai tersebut masih bekerja atau tidak
                        </span>
                    </span>
                    <button @click="isActive = !isActive"
                        :class="{ 'bg-indigo-600': isActive, 'bg-gray-200': !isActive }" type="button"
                        class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                        role="switch" :aria-checked="isActive" aria-labelledby="availability-label"
                        aria-describedby="availability-description">
                        <span :class="{ 'translate-x-5': isActive, 'translate-x-0': !isActive }" aria-hidden="true"
                            class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
                    </button>
                </div>


            </div>

            <!-- Foto Upload -->
            <!-- Foto Upload -->
            <div class="mt-6 flex-grow lg:mt-0 lg:ml-6 lg:flex-shrink-0 lg:flex-grow-0">
                <p class="text-sm font-medium text-gray-700 lg:ml-12" aria-hidden="true">Foto Pegawai</p>
                <x-input-error :messages="$errors->get('photo_url')" class="mt-2" />
                <div class="mt-1 lg:hidden">
                    <div class="flex items-center">
                        <div class="inline-block h-12 w-12 flex-shrink-0 overflow-hidden rounded-full"
                            aria-hidden="true">
                            <img class="h-full w-full rounded-full"
                                src="{{ asset('storage/' . $employee->photo_url) }}" alt=""
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
                                <input id="photo_url" name="photo_url" type="file"
                                    class="absolute h-full w-full cursor-pointer rounded-md border-gray-300 opacity-0"
                                    {{ $errors->has('photo_url') ? 'border-red-300' : '' }}>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative hidden overflow-hidden rounded-full lg:block">
                    <img class="relative h-40 w-40 rounded-full" src="{{ asset('storage/' . $employee->photo_url) }}"
                        alt="" id="previewImageMobile"">
                    <label for="photo_url"
                        class="absolute inset-0 flex h-full w-full items-center justify-center bg-black bg-opacity-75 text-sm font-medium text-white opacity-0 focus-within:opacity-100 hover:opacity-100">
                        <x-input-error :messages="$errors->get('photo_url')" class="mt-2" />
                        <span>Ubah Foto</span>
                        <span class="sr-only"> user photo</span>
                        <input type="file" id="photoInput" name="photo_url"
                            class="absolute inset-0 h-full w-full cursor-pointer rounded-md border-gray-300 opacity-0  {{ $errors->has('photo_url') ? 'border-red-300' : '' }}">
                    </label>
                </div>
            </div>

        </div>

        <div class="divide-y divide-gray-200 pt-6">
            <div class="mt-4 flex justify-end py-4 px-4 sm:px-6">
                <a href="{{ url()->previous() }}"
                    class="btn cursor-pointer inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                    Kembali</a>
                <button type="submit"
                    class="ml-5 inline-flex justify-center rounded-md border border-transparent bg-sky-700 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-sky-800 focus:outline-none focus:ring-2 focus:ring-sky-500 focus:ring-offset-2">Simpan</button>
            </div>
        </div>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const previewImageMobile = document.getElementById('previewImageMobile');
            const previewImageDesktop = document.getElementById('previewImageDesktop');

            // When the file input changes
            document.getElementById('photoInput').addEventListener('change', function() {
                // Get the selected file
                const file = this.files[0];
                console.log(file);
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
</x-admin.layout>

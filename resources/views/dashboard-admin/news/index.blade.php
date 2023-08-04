<x-admin.layout :pageTitle="$pageTitle">
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-xl font-semibold text-gray-900">Daftar Pegawai</h1>
            <p class="mt-2 text-sm text-gray-700">Daftar semua pegawai termasuk nama, jabatan, gelar, dan
                status mereka.</p>
        </div>
        <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
            <a class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto"
                href="{{ route('dashboard.admin.news.create') }}">Tambah Berita</a>
        </div>
    </div>
    <div class="mt-8 flex flex-col">
        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                    <table class="table table-striped table-hover" id="dataTable">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                    Nama Berita</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    Link Video</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    Status
                                </th>
                                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                    Tindakan
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">

                            @foreach ($news as $new)
                                <tr>
                                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm sm:pl-6">
                                        <div class="flex items-center">
                                            <div class="h-10 w-10 flex-shrink-0">
                                                <img class="h-10 w-10 rounded-full"
                                                    src="{{ asset('storage/' . $new->photo_url) }}" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="font-medium text-gray-900">{{ $new->title }}
                                                </div>
                                                <div class="text-gray-500">{{ $new->slug }}</div>
                                            </div>
                                        </div>
                                    </td>

                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        {{ $new->video_url }}</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        @if ($new->status == 1)
                                            <span
                                                class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800">Aktif</span>
                                        @elseif ($new->status == 0)
                                            <span
                                                class="inline-flex rounded-full bg-red-100 px-2 text-xs font-semibold leading-5 text-red-800">Non
                                                Aktif</span>
                                        @endif
                                    </td>
                                    <td
                                        class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                        <div class="flex justify-center items-center gap-x-7">
                                            <form action="{{ route('dashboard.admin.news.destroy', $new) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-red-600 hover:text-red-900">Hapus</button>
                                            </form>


                                            <a href="{{ route('dashboard.admin.news.edit', $new) }}"
                                                class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $('#dataTable').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/id.json',
                },
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


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
</x-admin.layout>

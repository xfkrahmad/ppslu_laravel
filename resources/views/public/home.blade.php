<x-public-layout>
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h1 class="font-italic font-bold">Selamat Datang
                                <h2 class="text-2xl font-bold">Di {{ $systemConf->institute_name }}</h2>
                                <h2 class="text-2xl font-bold">Dinas Sosial Provinsi
                                    {{ $systemConf->province_name }}
                                </h2>
                                <h3 class="mt-4 text-lg text-gray-500">{{ $systemConf->institute_description }}</h3>
                                </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if (Session::has('successMsg'))
        <script>
            const data = @json(Session::get('successMsg'));
            console.log(data.messages);
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: data.messages,
                    text: `Kode Registrasi ( Harap Dicatat ) : ${data.registrationNumber}`
                });
            });
        </script>
    @endif
</x-public-layout>

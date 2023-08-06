<x-public-layout :breadcrumbTitle="$breadcrumbTitle">
    <!-- ================ contact section start ================= -->
    <section class="contact-section section_padding">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4">
                <div id="map" style="height: 0px;"></div>

                @if ($systemConf->institute_gmaps_url)
                    <iframe class="mx-auto" src="{{ $systemConf->institute_gmaps_url }}" width="800" height="600"
                        style="border:15;" loading="lazy"></iframe>
                @endif


            </div>

            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title text-center">Anda Bertanya Kami Menjawab</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="{{ route('public.contact.store') }}" method="post"
                        id="contactForm" novalidate="novalidate">
                        @csrf
                        @method('post')
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <x-input-error :messages="$errors->get('content')" class="mt-2" />
                                    <textarea id="content" name="content">{{ old('content') }}</textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <x-input-error :messages="$errors->get('sender')" class="mt-2" />
                                    <input
                                        class="block w-full min-w-0 flex-grow rounded-none rounded-r-md border-gray-300 focus:border-sky-500 focus:ring-sky-500 sm:text-sm  {{ $errors->has('sender') ? 'border-red-300' : '' }}"
                                        name="sender" id="sender" type="text" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Masukkan nama...'" placeholder='Masukkan nama...'
                                        value="{{ old('sender') }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <x-input-error :messages="$errors->get('sender_email')" class="mt-2" />
                                    <input
                                        class="block w-full min-w-0 flex-grow rounded-none rounded-r-md border-gray-300 focus:border-sky-500 focus:ring-sky-500 sm:text-sm  {{ $errors->has('sender_email') ? 'border-red-300' : '' }}"
                                        name="sender_email" id="sender_email" type="email"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Email...'"
                                        placeholder='Masukkan Email...' value="{{ old('sender_email') }}">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <x-input-error :messages="$errors->get('subject')" class="mt-2" />
                                    <input
                                        class="block w-full min-w-0 flex-grow rounded-none rounded-r-md border-gray-300 focus:border-sky-500 focus:ring-sky-500 sm:text-sm  {{ $errors->has('subject') ? 'border-red-300' : '' }}"
                                        name="subject" id="subject" type="text" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Masukkan Subject...'"
                                        placeholder='Masukkan Subject...' value="{{ old('subject') }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit"
                                class=" text-blue-700 font-semibold hover:text-black hover:shadow-lg hover:bg-blue-700 py-2 px-4 border border-blue-500 hover:border-transparent rounded">Send
                                Message</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h1 class="font-bold mb-2">{{ $systemConf->institute_address }}</h2>
                                <h3>{{ $systemConf->city_name }}, {{ $systemConf->province_name }}</h3>
                                <p>Kode Pos {{ $systemConf->postal_code }}</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>{{ $systemConf->institute_phone }}</h3>
                            <p>Senin Sampai kamis 07:00-15:30</p>
                            <p>jum'at 07.00-14:00</p>
                            <p>Sabtu Dan Minggu Dilayani Oleh Petugas Piket</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>{{ $systemConf->institute_email }}</h3>
                            <p>Kirimkan Pertanyaan Anda Kapan Saja!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            tinymce.init({
                selector: 'textarea',

                /* TinyMCE configuration options */
                plugins: "link lists placeholder",
                toolbar: "undo redo | bold italic underline | bullist numlist | link",
                placeholder: "Masukkan pesanmu disini...",
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

</x-public-layout>

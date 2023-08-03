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
                    <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm"
                        novalidate="novalidate">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">

                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder='Enter Message'></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
                                        placeholder='Enter your name'>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="email"
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email address'"
                                        placeholder='Enter email address'>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'"
                                        placeholder='Enter Subject'>
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
    <!-- ================ contact section end ================= -->
</x-public-layout>

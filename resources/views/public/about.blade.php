<x-public-layout :breadcrumbTitle="$breadcrumbTitle">

    <!-- member_counter counter start -->
    <section class="member_counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="">
                        <span class=""></span>
                        <h4></h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{ $employeesNum }}</span>
                        <h4>Pegawai</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">0</span>
                        <h4>Penerima Manfaat</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="">
                        <span class=""></span>
                        <h4></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- member_counter counter end -->
    @php
        $employeesChunks = $employees->chunk(2); // Split testimonials into groups of two
    @endphp
    <!--::review_part start::-->
    <section class="testimonial_part section_padding">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p></p>
                        <h2>Profil Pegawai</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="textimonial_iner owl-carousel">
                        @foreach ($employeesChunks as $employeeGroup)
                            <div class="testimonial_slider">
                                <div class="row">
                                    @foreach ($employeeGroup as $employee)
                                        <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                            <div class="testimonial_slider_text">
                                                <p>{{ $employee->motto_description }}</p>
                                                <h4>{{ $employee->name }}, {{ $employee->title_name }}.</h4>
                                                <h5>{{ $employee->position_name }}</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-xl-2 col-sm-4">
                                            <div class="testimonial_slider_img">
                                                <img src="{{ asset('storage/' . $employee->photo_url) }}"
                                                    alt="#">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>
    <!--::blog_part end::-->
</x-public-layout>

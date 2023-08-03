    <footer class="border-t mt-20 xl:mt-40 text-blue-700">
        {{-- <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget footer_1">
                        <a href="index.html"> <img src="img/logo.png" alt=""> </a>
                        <p>nit Pelaksana Teknis Dinas Sosial Provinsi Jawa Tengah
                            Yang Memiliki Tugas dan Fungsi Memberikan Pelayanan Kesejahteraan Sosial Kepada PM (Penerima
                            Manfaat)
                            Lanjut Usia Terlantar</p>

                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Berita Terkini</h4>
                        <p>Nantikan Berita Dari Kami!
                        </p>
                        <form action="#">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder='Enter email address'
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email address'">
                                    <div class="input-group-append">
                                        <button class="btn btn_1" type="button"><i class="ti-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="social_icon">
                            <a href="#"> <i class="ti-facebook"></i> </a>
                            <a href="#"> <i class="ti-twitter-alt"></i> </a>
                            <a href="#"> <i class="ti-instagram"></i> </a>
                            <a href="#"> <i class="ti-skype"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Contact us</h4>
                        <div class="contact_info">
                            <p><span> Address :</span> Jl.karangsawah no 73 banyumas </p>
                            <p><span> Phone :</span> (0281) 796074 </p>
                            <p><span> Email : </span> ppslu.sudagaran@gmail.com </p>
                        </div>
                    </div>
                </div>
            </div>

        </div> --}}
        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="flex justify-center items-center gap-x-4 text-[24px]">
                                    <a href="{{ $systemConf->institute_facebook_url }}"> <i class="ti-facebook"></i> </a>
                                    <a href="{{ $systemConf->institute_twitter_url }}"> <i class="ti-twitter-alt"></i>
                                    </a>
                                    <a href="{{ $systemConf->institute_instagram_url }}"> <i class="ti-instagram"></i>
                                    </a>
                                </div>
                                <p class="footer-text m-0">
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | Dikelola Oleh
                                    {{ $systemConf->institute_name_detail }}
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

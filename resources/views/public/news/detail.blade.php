<x-public-layout :breadcrumbTitle="$breadcrumbTitle">
    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                            <img class="img-fluid mx-auto" src="{{ asset('storage/' . $news->photo_url) }}" alt="">
                        </div>
                        <div class="blog_details">
                            <h2 class="text-center">{{ $news->title }}</h2>
                            </h2>
                            @if ($news->video_url)
                                <iframe class="mx-auto" width="560" height="315" src="{{ $news->video_url }}"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            @endif
                            <ul class="">
                                <li><a href="#"><i class="far fa-user"></i></a></li>
                                <li><a href="#"><i class="far fa-comments"></i></a></li>
                            </ul>
                            <p class="text-justify mt-4">{!! $news->content !!}</p>
                        </div>
                    </div>
                    @if ($countNews > 1)
                        <div class="navigation-area">
                            <div class="row">
                                <div
                                    class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                    <div class="arrow">
                                        <a href="#">
                                            <span class="lnr text-white ti-arrow-left"></span>
                                        </a>
                                    </div>
                                    <div class="details">
                                        <p>Berita Sebelumnya</p>
                                        <a href="{{ route('public.news.detail', $randomNews[0]->slug) }}">
                                            <h4>{{ $randomNews[0]->title }}</h4>
                                        </a>
                                    </div>
                                </div>
                                @if ($countNews > 2)
                                    <div
                                        class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                        <div class="detials">
                                            <p>Berita Selanjutnya</p>
                                            <a href="{{ route('public.news.detail', $randomNews[1]->slug) }}">
                                                <h4>{{ $randomNews[1]->title }}</h4>
                                            </a>
                                        </div>
                                        <div class="arrow">
                                            <a href="#">
                                                <span class="lnr text-white ti-arrow-right"></span>
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </section>

</x-public-layout>

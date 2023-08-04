<x-public-layout :breadcrumbTitle="$breadcrumbTitle">
    <!--================Blog Area =================-->
    <section class="blog_area section_padding">
        <div class="container">
            <div class="grid lg:grid-cols-2 gap-8">

                @foreach ($news as $new)
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <img class="bg-cover" src="{{ asset('storage/' . $new->photo_url) }}" alt="">

                        </div>

                        <div class="mt-2">
                            <a class="d-inline-block" href="{{ route('public.news.detail', $new->slug) }}">
                                <h2 class="font-bold text-2xl">{{ $new->title }}</h2>
                            </a>
                            <div class="line-clamp-2 text-justify">
                                {!! $new->content !!}
                            </div>
                    </article>
                @endforeach

            </div>
            {{ $news->links() }}
        </div>
    </section>
</x-public-layout>

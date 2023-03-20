@extends('layouts.layout')

@section('content')
    <section class="article">
        <div class="container">
            <div class="news__wrapper basic-flex">

                @include('section.single_post')
                
                <div class="popular-news">
                    <div class="popular-news-wrapper">
                        <h4 class="popular-news__title">@lang('words.popular_news')</h4>
                        <ul class="popular-news__list">

                            @include('section.popular_news')

                        </ul>
                    </div>
                    <div class="ads-placeholder">
                        <h4>@lang('words.ads_placeholder')</h4>
                    </div>
                </div>
                <div class=" related-news">
                    <h3 class="related-news__title">@lang('words.related_news')
                    </h3>
                    <div class=" related-posts basic-flex">
                        <section class="posts">
                            <div class="container">
                                <ul class="posts__list basic-flex">
                                    @include('section.posts')
                                </ul>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </section>

    </main>
@endsection

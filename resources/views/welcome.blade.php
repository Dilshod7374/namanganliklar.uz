@extends('layouts.layout')

@section('content')
    <section class="posts">
        <div class="container">
            <ul class="posts__list basic-flex">
                @include('section.posts')
            </ul>
        </div>
    </section>

    <div class="container">
        <div class="notification basic-flex">
            <div class="notification__text basic-flex">
                <h3>@lang('words.want_to')
                </h3>
            </div>
            <button type="button" class="notification__button btn">
                @lang('words.enable')
            </button>
        </div>
    </div>

    <section class="news">
        <div class="container">
            <div class="news__wrapper basic-flex">
                <div class="column-news">
                    <h2 class="news__title">@lang('words.latest_news')</h2>
                    <ul class="news__list basic-flex">
                        @include('section.latest_news')
                    </ul>
                    <button type="button" class="btn load-more-btn">@lang('words.big_news')</button>
                </div>
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
            </div>
        </div>
    </section>



    </main>
@endsection

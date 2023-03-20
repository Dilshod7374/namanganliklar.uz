@foreach ($latest_news as $item)
    <li class="news__item">
        <a href="{{ route('article', $item->id) }}" class="basic-flex news__link">
            <div class="news-image-wrapper"><img src="/images/{{ $item->img }}" alt="Bottom Img"></div>
            <div class="news-box basic-flex">
                <h4 class="news__title">{{ $item['title_' . \App::getLocale()] }}</h4>
                <p class="news__description">{{ $item['short_content_' . \App::getLocale()] }}
                </p>
                <span class="news__date basic-flex">11:31 / 15.05.2020</span>
            </div>
        </a>
    </li>
@endforeach

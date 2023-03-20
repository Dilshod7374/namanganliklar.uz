@foreach ($popular_news as $item)
<li class="popular-news__item">
    <a href="{{ route('article', $item->id) }}">
        <p class="popular-news__description"> {{ $item['title_' . \App::getLocale()] }}
        </p>
        <span class="popular-news__date">11:31 / 15.05.2020</span>
    </a>
</li>
@endforeach
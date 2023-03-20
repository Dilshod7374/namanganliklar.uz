<div class="article__wrapper">
    <h2 class="article__title">{{ $post['title_' . \App::getLocale()] }}
    </h2>
    <img width="600px" height="700px" src="/images/{{ $post->img }}">
    <p class="important-text">
        {{ $post['short_content_' . \App::getLocale()] }}
    </p>
    <p>
        {{ $post['content_' . \App::getLocale()] }}
    </p>
</div>
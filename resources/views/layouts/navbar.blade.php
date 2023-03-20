<ul class="navbar__menu basic-flex">

  @foreach ($category as $item)
    
    <li class="menu__item"><a href="{{route('post', $item['id']) }}">{{ $item['name_' . \App::getLocale()] }}</a></li>
    
  @endforeach

    <li class="menu__item"><a href="/contact">@lang('navbar.contact')</a></li>
  </ul>
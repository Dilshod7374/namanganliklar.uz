@extends('layouts.layout')

@section('content')


  <section class="contact-details">
    <div class="container">
      <div class="contact-details__wrapper basic-flex">    
        <div class="form__wrapper">
          <h3 class="form__wrapper-title">@lang('words.write_us')
          </h3>
          <form method="GET">
            <div class="form__top">
              <label><input type="text" placeholder="@lang('words.name')" required></label>
              <label><input type="email" placeholder="@lang('words.electron_pochta')" required></label>
              <label><input type="text" placeholder="@lang('words.phone_number')" required></label>
              <label><input type="text" placeholder="@lang('words.subject')" required></label>
              <textarea class="contact-tetxarea" placeholder="@lang('words.text')" required></textarea>
            </div>
            <div class="form__bottom">
              <input type="file" name="file" id="file" class="inputfile">
              <label for="file" class="basic-flex">@lang('words.attach_file')</label>
              <label class="basic-flex verification-code-wrapper">
                <input type="text" placeholder="@lang('words.kod')" required>
                <span class="verification-code">4 k 7 Z a</span>
              </label>
              <button type="submit" class="btn send-btn">@lang('words.send')</button>
            </div>
          </form>
        </div>
        <div class="business__card">
          <h3 class="card__title">NAMANGANLIKLAR24</h3>
          <div class="card__item basic-flex">
            <span card__item-title>@lang('words.electron_pochta')</span>
            <a class="email__link" href="mailto:info@namanganliklar24.uz">info@namanganliklar24.uz</a>
          </div>
          <div class="card__item basic-flex">
            <span card__item-title>@lang('words.social_media')</span>
            <div class="card__social-items basic-flex">
              <a href="#" class="social__item"></a>
              <a href="#" class="social__item"></a>
              <a href="#" class="social__item"></a>
            </div>
          </div>
          <div class="card__item basic-flex">
            <span card__item-title>@lang('words.telegram')</span>
            <a class="card-join-telegram basic-flex" href="#">@lang('words.subscribe')</a>
          </div>
          <div class="card__item basic-flex">
            <span card__item-title>@lang('words.mobile_app')</span>
            <div class="card__apps-wrapper basic-flex">
              <a href="#"><img src="img/googleplay-wh.png" alt="GooglePlay"></a>
              <a href="#"><img src="img/appstore-white.png" alt="AppStore"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

@endsection
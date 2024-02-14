<div class="header-holder">
    <div class="top-bar">
        <div class="logo">
            <a href="{{ route('home') }}"><img src="{{ asset('theme_of_mozambique/img/logo.png') }}" alt=""></a>
        </div>
        <div class="languages desktop">
            <ul class="countries">
                <li><a href="{{ url('locale/en') }}"><span>En</span> <img src="{{ asset('theme_of_mozambique/img/england.png') }}" alt=""></a></li>
                <li><a href="{{ url('locale/pt') }}"><span>Po</span> <img src="{{ asset('theme_of_mozambique/img/polish.png') }}" alt=""></a></li>
            </ul>
        </div>
        <div class="menu btn2" data-menu="2">
            <div class="icon"></div>
          </div>
    </div>
    <div class="navigation-holder">
        <ul class="navigation">
            <li><a href="{{ route('home') }}">{{ trans('global.home') }}</a></li>
            <li><a href="{{ route('growthRate') }}">{{ trans('global.growth_rate') }}</a></li>
            <li><a href="{{ route('education') }}">{{ trans('global.education') }}</a></li>
        </ul>
        <div class="mobiles">
            <ul class="countries">
                <li><a href="{{ url('locale/en') }}"><span>En</span> <img src="{{ asset('theme_of_mozambique/img/england.png') }}" alt=""></a></li>
                <li><a href="{{ url('locale/pt') }}"><span>Po</span> <img src="{{ asset('theme_of_mozambique/img/polish.png') }}" alt=""></a></li>
            </ul>
        </div>
    </div>
</div>

{{-- <b>{{ trans('panel.site_title') }}</b> --}}


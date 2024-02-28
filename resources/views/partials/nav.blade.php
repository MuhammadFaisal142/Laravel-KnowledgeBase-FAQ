<div class="header-holder">
    <div class="top-bar">
        <div class="left_col">
            <div class="logo">
                <a href="{{ route('home') }}"><img src="{{ asset('theme_of_mozambique/img/logo.png') }}" alt=""></a>
            </div>
        </div>

        <div class="right_col">
            <div class="client_logos_wrapper d-none d-md-flex">
                <img src="{{ asset('theme_of_mozambique/img/client_logo_1.jpg') }}" alt="">
                <img src="{{ asset('theme_of_mozambique/img/client_logo_2.jpg') }}" alt="">
                <img src="{{ asset('theme_of_mozambique/img/client_logo_3.jpg') }}" alt="">
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

    </div>
    <div class="navigation-holder">
        <ul class="navigation">
            <li><a href="{{ route('home') }}">{{ trans('global.home') }}</a></li>
            <li><a href="{{ route('pyramid') }}">{{ trans('global.pyramid') }}</a></li>
            <li><a href="{{ route('tables') }}">{{ trans('global.tables') }}</a></li>
        </ul>
        <div class="client_logos_wrapper d-md-none">
            <img src="{{ asset('theme_of_mozambique/img/client_logo_1.jpg') }}" alt="">
            <img src="{{ asset('theme_of_mozambique/img/client_logo_2.jpg') }}" alt="">
            <img src="{{ asset('theme_of_mozambique/img/client_logo_3.jpg') }}" alt="">
        </div>
        <div class="mobiles">
            <ul class="countries">
                <li><a href="{{ url('locale/en') }}"><span>En</span> <img src="{{ asset('theme_of_mozambique/img/england.png') }}" alt=""></a></li>
                <li><a href="{{ url('locale/pt') }}"><span>Po</span> <img src="{{ asset('theme_of_mozambique/img/polish.png') }}" alt=""></a></li>
            </ul>
        </div>
    </div>

</div>

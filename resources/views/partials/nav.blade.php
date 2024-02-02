<header class="main-header">
    <!-- Logo -->
    <a href="{{ route('home') }}" class="logo">
        <!-- mini logo -->
        <b class="logo-mini">
            <span class="light-logo"><img src="{{ asset('html/images/logo-light.png') }}" alt="logo"></span>
            <b>{{ trans('panel.site_title') }} </b>
        </b>

    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
        <div class="ml-10 app-menu">
             <ul class="header-megamenu nav">
               <li class="btn-group nav-item" >
                    <a href="{{ route('home') }}" class="nav-link rounded font-color-btn">
                        {{ trans('global.home') }}
                    </a>
                </li>
                {{-- <li class="btn-group nav-item">
                    <a href="{{ route('housing') }}" class="nav-link rounded font-color-btn" >
                        {{ trans('global.housing') }}
                    </a>

                </li> --}}
                <li class="btn-group nav-item">
                    <a href="{{ route('growthRate') }}" class="nav-link rounded font-color-btn" >
                        {{ trans('global.growth_rate') }}
                    </a>

                </li>
            </ul>
        </div>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                {{-- search box here  --}}

                <!-- Notifications -->

                <!-- Control Sidebar Toggle Button -->
                <li class="nav-item" style="display: flex; align-items:center;">
                    <span class="mr-2">{{ trans('panel.lang') }}:</span>
                    <a href="{{ url('locale/pt') }}" class="nav-link p-0">{{ trans('panel.portuguese') }}</a>
                    <span class="mx-2">|</span>
                    <a href="{{ url('locale/en') }}" class="nav- p-0" style="margin-right: 6px" >{{ trans('panel.english') }}</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

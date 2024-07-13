<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
                <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120"
                    xml:space="preserve">
                    <g>
                        <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                        <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                        <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                    </g>
                </svg>
            </a>
        </div>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('admin.index') }}">
                    <i class="fe fe-home fe-16"></i>
                    <span class="ml-3 item-text">{{ __('keywords.dashboard') }}</span>
                </a>
            </li>
        </ul>
        <p class="text-muted nav-heading mt-4 mb-1">
            <span>Components</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            {{-- <li class="nav-item dropdown">
                <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-codesandbox fe-16"></i>
                    <span class="ml-3 item-text">{{ __('keywords.services') }}</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('front.service') }}" target="_blank"><span
                                class="ml-1 item-text">View</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('admin.services.index') }}"><span
                                class="ml-1 item-text">All</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('admin.services.create') }}"><span
                                class="ml-1 item-text">Add New</span>
                        </a>
                    </li>
                </ul>
            </li> --}}
            <x-sidebar-tab-dropdwon-head icon="fe-codesandbox" value="{{ __('keywords.services') }}" dropdown="true">
                <x-slot name="dropDownLink">
                    <x-sidebar-tab-dropdwon-link href="{{ route('front.service') }}" target="_blank" value="{{
                        __('keywords.view') }}" badgeHiddenValue='false' />
                    <x-sidebar-tab-dropdwon-link href="{{ route('admin.services.index') }}" target="_parent" value="{{
                        __('keywords.all') }}" />
                    <x-sidebar-tab-dropdwon-link href="{{ route('admin.services.create') }}" target="_parent" value="{{
                        __('keywords.add_new') }}" />
                </x-slot>
            </x-sidebar-tab-dropdwon-head>
            <x-sidebar-tab-dropdwon-head icon="fe-feather" value="{{ __('keywords.features') }}" dropdown="true">
                <x-slot name="dropDownLink">
                    <x-sidebar-tab-dropdwon-link href="{{ route('front.feature') }}" target="_blank" value="{{
                        __('keywords.view') }}" badgeHiddenValue='false' />
                    <x-sidebar-tab-dropdwon-link href="{{ route('admin.features.index') }}" target="_parent" value="{{
                        __('keywords.all') }}" />
                    <x-sidebar-tab-dropdwon-link href="{{ route('admin.features.create') }}" target="_parent" value="{{
                        __('keywords.add_new') }}" />
                </x-slot>
            </x-sidebar-tab-dropdwon-head>
        </ul>
    </nav>
</aside>
@php

@endphp
<li class="nav-item {{ $dropdown == trim(" true") ? 'dropdown' : '' }}">
    <a href="{{ ($href != '') ? $href : '#'.$dropdownUniqid }}" {{ $dropdown==trim(" true") ? 'data-toggle=collapse'
        : '' }} aria-expanded="false" class="{{ $dropdown == trim(" true") ? 'dropdown-toggle' : '' }} nav-link">
        <i class="fe {{ $icon }} fe-16"></i>
        <span class="ml-3 item-text">{{ $value }}</span>
    </a>
    @if (isset($dropDownLink) && $dropdown == trim("true"))
    <ul class="collapse list-unstyled pl-4 w-100" id="{{ $dropdownUniqid }}">
        {{ $dropDownLink }}
    </ul>
    @endif
</li>
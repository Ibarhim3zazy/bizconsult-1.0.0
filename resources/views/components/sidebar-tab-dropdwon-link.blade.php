<li class="nav-item">
    <a class="nav-link pl-3" href="{{ $href }}" target="{{ $target }}">
        <span class="ml-1 item-text">{{ $value }}</span>
        <x-sidebar-tab-badge color="primary" value="{{ __('keywords.new') }}" hidden="{{ $badgeHiddenValue }}" />
    </a>
</li>
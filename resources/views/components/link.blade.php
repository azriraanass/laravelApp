<li class="nav-item">
    <a href="{{ route($attributes['routeName'] ?? 'home') }}" class="nav-link">
        {{ $slot }}
    </a>
</li>
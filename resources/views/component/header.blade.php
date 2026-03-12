<div class="cursor-dot" id="cursorDot"></div>

<nav class="navbar" id="navbar">
    <a href="{{ route('home') }}" class="nav-logo">N<sup>a</sup></a>

    <ul class="nav-links" id="navLinks">
        <li><a href="{{ route('home') }}"     class="{{ request()->routeIs('home')     ? 'active' : '' }}">Home</a></li>
        <li><a href="{{ route('about') }}"    class="{{ request()->routeIs('about')    ? 'active' : '' }}">About</a></li>
        <li><a href="{{ route('projects') }}" class="{{ request()->routeIs('projects') ? 'active' : '' }}">Projects</a></li>
        <li><a href="{{ route('contact') }}"  class="{{ request()->routeIs('contact')  ? 'active' : '' }}">Contact</a></li>
    </ul>

    <button class="nav-toggle" id="navToggle" aria-label="Toggle menu">
        <span></span><span></span><span></span>
    </button>
</nav>

<nav id="navbar" class="navbar">
    <ul>
        <li><a class="nav-link scrollto {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
        @auth
        <li><a href="{{ route('dashboard') }}" class="text-sm text-gray-700 underline {{ request()->routeIs('dashboard') ? 'active' : '' }}">Dashboard</a></li>
        <li><a href="{{ route('articlepage') }}" class="text-sm text-gray-700 underline {{ request()->routeIs('articlepage') ? 'active' : '' }}">Article</a></li>
        <li><a href="{{ route('profile.profilefrontpage') }}" class="text-sm text-gray-700 underline {{ request()->routeIs('profile.profilefrontpage') ? 'active' : '' }}">Profile</a></li>
        <li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                <button type="submit">Logout</button>
            </form>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="{{ request()->is('logout') ? 'active' : '' }}">Logout</a>
        </li>
        <div class="d-lg-none">
            @if(request()->routeIs('course.coursepage') || request()->routeIs('chapter.chapterpage'))
            <div style="margin-top: 1.5rem;"></div>
            <div style="width: 80%; border: 1px solid grey; margin: 0 auto;"></div>
            <div style="margin-bottom: 1.5rem;"></div>
            @endif

            @if(request()->routeIs('course.coursepage') || request()->routeIs('chapter.chapterpage'))
            <li><a href="{{ route('course.bcdrcoursepage') }}" class="text-sm text-gray-700 underline {{ request()->routeIs('course.bcdrcoursepage') ? 'active' : '' }}">Business Continuity & Disaster Recovery @yield('title')</a></li><!-- Back to overview page -->
            <li><a href="{{ route('chapter.bcdrchapterpage') }}" class="text-sm text-gray-700 underline {{ request()->routeIs('chapter.bcdrchapterpage') ? 'active' : '' }}">Chapter 1</a></li>
            <li><a href="#" class="text-sm text-gray-700 underline">Chapter 2</a></li>
            <!-- Add more chapter links -->
            @endif

            @if(request()->routeIs('course.coursepage') || request()->routeIs('chapter.chapterpage'))
            <li><a href="{{ route('course.coursepage') }}" class="text-sm text-gray-700 underline {{ request()->routeIs('course.coursepage') ? 'active' : '' }}">Management of Information Security @yield('title')</a></li><!-- Back to overview page -->
            <li><a href="{{ route('chapter.chapterpage') }}" class="text-sm text-gray-700 underline {{ request()->routeIs('chapter.chapterpage') ? 'active' : '' }}">Chapter 1</a></li>
            <li><a href="#" class="text-sm text-gray-700 underline"> Chapter 2</a></li>
            <!-- Add more chapter links -->
            @endif
        </div>
        @else
        <li><a href="{{ route('login') }}" class="ml-4 text-sm text-gray-700 underline {{ request()->routeIs('login') ? 'active' : '' }}">Log in</a></li>
        @if (Route::has('register'))
        <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline {{ request()->routeIs('register') ? 'active' : '' }}">Register</a></li>
        @endif
        @endauth
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->
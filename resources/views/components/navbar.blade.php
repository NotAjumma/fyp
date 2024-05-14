<nav id="navbar" class="navbar">
    <ul>
        <li><a class="nav-link scrollto active" href="{{ route('home') }}">Home</a></li>
        @if (Route::has('login'))
        @auth
        <li><a href="{{ route('dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a></li>
        <li><a href="{{ route('articlepage') }}" class="text-sm text-gray-700 underline">Article</a></li>
        <li><a href="{{ route('profile.profilefrontpage') }}" class="text-sm text-gray-700 underline">Profile</a></li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            <button type="submit">Logout</button>
        </form>
        <li>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        </li>
        <div class="d-lg-none">
            @if(request()->url() != route('dashboard'))
            <div style="margin-top: 1.5rem;"></div>
            <div style="width: 80%; border: 1px solid grey; margin: 0 auto;"></div>
            <div style="margin-bottom: 1.5rem;"></div>
            @endif

            @if(request()->url() == route('course.coursepage') || request()->url() == route('chapter.chapterpage'))
            <li><a href="{{ route('course.bcdrcoursepage') }}" class="text-sm text-gray-700 underline">Business Continuity & Disaster Recovery @yield('title')</a></li><!-- Back to overview page -->
            <li><a href="{{ route('chapter.bcdrchapterpage') }}" class="text-sm text-gray-700 underline">Chapter 1</a></li>
            <li><a href="#" class="text-sm text-gray-700 underline">Chapter 2</a></li>
            <li><a href="#" class="text-sm text-gray-700 underline">Chapter 3</a></li>
            <li><a href="#" class="text-sm text-gray-700 underline">Chapter 4</a></li>
            <li><a href="#" class="text-sm text-gray-700 underline">Chapter 5</a></li>
            <li><a href="#" class="text-sm text-gray-700 underline">Chapter 6</a></li>
            <li><a href="#" class="text-sm text-gray-700 underline">Chapter 7</a></li>
            <li><a href="#" class="text-sm text-gray-700 underline">Chapter 8</a></li>
            <li><a href="#" class="text-sm text-gray-700 underline">Chapter 9</a></li>
            <li><a href="#" class="text-sm text-gray-700 underline">Chapter 10</a></li>
            <li><a href="#" class="text-sm text-gray-700 underline">Chapter 11</a></li>
            <li><a href="#" class="text-sm text-gray-700 underline">Chapter 12</a></li>
            <li><a href="#" class="text-sm text-gray-700 underline">Quiz</a></li>
            @endif

            @if(request()->url() == route('course.coursepage') || request()->url() == route('chapter.chapterpage'))
            <li><a href="{{ route('course.coursepage') }}" class="text-sm text-gray-700 underline">Management of Information Security @yield('title')</a></li><!-- Back to overview page -->
            <li><a href="{{ route('chapter.chapterpage') }}" class="text-sm text-gray-700 underline">Chapter 1</a></li>
            <li><a href="#" class="text-sm text-gray-700 underline"> Chapter 2</a></li>
            <li><a href="#" class="text-sm text-gray-700 underline"> Chapter 3</a></li>
            <li><a href="#" class="text-sm text-gray-700 underline"> Chapter 4</a></li>
            <li><a href="#" class="text-sm text-gray-700 underline"> Chapter 5</a></li>
            <li><a href="#" class="text-sm text-gray-700 underline"> Chapter 6</a></li>
            <li><a href="#" class="text-sm text-gray-700 underline"> Chapter 7</a></li>
            <li><a href="#" class="text-sm text-gray-700 underline"> Chapter 8</a></li>
            <li><a href="#" class="text-sm text-gray-700 underline"> Chapter 9</a></li>
            <li><a href="#" class="text-sm text-gray-700 underline"> Chapter 10</a></li>
            <li><a href="#" class="text-sm text-gray-700 underline"> Chapter 11</a></li>
            <li><a href="#" class="text-sm text-gray-700 underline"> Chapter 12</a></li>
            <li><a href="#" class="text-sm text-gray-700 underline"> Quiz</a></li>
            @endif
        </div>


        @else
        <li><a href="{{ route('login') }}" class="ml-4 text-sm text-gray-700 underline">Log in</a></li>

        @if (Route::has('register'))
        <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a></li>
        @endif
        @endauth
        @endif
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
</nav><!-- .navbar -->

<!-- Vendor JS Files -->
<script src="{{ asset ('import/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{ asset ('import/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset ('import/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{ asset ('import/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{ asset ('import/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{ asset ('import/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
<script src="{{ asset ('import/assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{ asset ('import/assets/js/main.js')}}"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.mobile-nav-toggle').click(function() {
            $('nav.navbar ul').toggleClass('active');
        });
    });
</script>
<x-head />

<body>
    <!-- Header from landingpage.blade.php -->
    <x-header />
    <!-- End Header -->
    <!--Leftsidebar-->
    <div class="wrapper d-flex align-items-stretch" style="margin-top: 4.5rem;">
        @if(request()->url() == route('course.bcdrcoursepage') || request()->url() == route('chapter.bcdrchapterpage'))
        <nav id="sidebar">
            <ul class="list-unstyled components mb-5">
                <li><a href="{{ route('course.bcdrcoursepage') }}"><span class="nav-link"></span>Business Continuity & Disaster Recovery @yield('title')</a></li><!-- Back to overview page -->
                <li><a href="{{ route('chapter.bcdrchapterpage') }}"><span class="nav-link"></span> Chapter 1</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 2</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 3</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 4</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 5</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 6</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 7</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 8</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 9</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 10</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 11</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 12</a></li>
                <li><a href="#"><span class="nav-link"></span> Quiz</a></li>
            </ul>
        </nav>
        @endif
        @if(request()->url() == route('course.coursepage') || request()->url() == route('chapter.chapterpage'))
        <nav id="sidebar">
            <ul class="list-unstyled components mb-5">
                <li><a href="{{ route('course.coursepage') }}"><span class="nav-link"></span>Management of Information Security @yield('title')</a></li><!-- Back to overview page -->
                <li><a href="{{ route('chapter.chapterpage') }}"><span class="nav-link"></span> Chapter 1</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 2</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 3</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 4</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 5</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 6</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 7</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 8</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 9</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 10</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 11</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 12</a></li>
                <li><a href="#"><span class="nav-link"></span> Quiz</a></li>
            </ul>
        </nav>
        @endif
        @if(request()->url() == route('course.riskcoursepage') || request()->url() == route('chapter.riskchapterpage'))
        <nav id="sidebar">
            <ul class="list-unstyled components mb-5">
                <li><a href="{{ route('course.riskcoursepage') }}"><span class="nav-link"></span>Risk Management @yield('title')</a></li><!-- Back to overview page -->
                <li><a href="{{ route('chapter.chapterpage') }}"><span class="nav-link"></span> Chapter 1</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 2</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 3</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 4</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 5</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 6</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 7</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 8</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 9</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 10</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 11</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 12</a></li>
                <li><a href="#"><span class="nav-link"></span> Quiz</a></li>
            </ul>
        </nav>
        @endif
        @if(request()->url() == route('course.auditcoursepage') || request()->url() == route('chapter.auditchapterpage'))
        <nav id="sidebar">
            <ul class="list-unstyled components mb-5">
                <li><a href="{{ route('course.auditcoursepage') }}"><span class="nav-link"></span>Control & Audit of Information System @yield('title')</a></li><!-- Back to overview page -->
                <li><a href="{{ route('chapter.chapterpage') }}"><span class="nav-link"></span> Chapter 1</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 2</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 3</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 4</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 5</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 6</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 7</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 8</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 9</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 10</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 11</a></li>
                <li><a href="#"><span class="nav-link"></span> Chapter 12</a></li>
                <li><a href="#"><span class="nav-link"></span> Quiz</a></li>
            </ul>
        </nav>
        @endif

        <!-- End left side bar -->
        <div>
            @yield('content')
        </div>
    </div>
    <script src="{{ asset ('import/navbar/js/jquery.min.js')}}"></script>
    <script src="{{ asset ('import/navbar/js/popper.js')}}"></script>
    <script src="{{ asset ('import/navbar/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset ('import/navbar/js/main.js')}}"></script>
</body>

</html>
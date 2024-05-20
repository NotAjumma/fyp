<x-head />

<body>
    <!-- Header from landingpage.blade.php -->
    <x-header />
    <!-- End Header -->
    <!--Leftsidebar-->
    <div class="wrapper d-flex align-items-stretch" style="margin-top: 4.5rem;">
        @php
        // Extract course name from the request URL
        $urlParts = explode('/', urldecode(request()->url()));
        $courseNameFromUrl = $urlParts[count($urlParts) - 3]; 
        @endphp
        @if(Auth::check() && Auth::user()->isAdmin())
        <nav id="sidebar">
            <ul class="list-unstyled components mb-5">
                <li><a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}"><span class="nav-link"></span>Admin Management</a></li>
                <li><a href="{{ route('uploadFiles.index') }}" class="{{ request()->routeIs('upload-files') ? 'active' : '' }}"><span class="nav-link"></span>Upload Contents</a></li>
                <li><a href="{{ route('feedbacks.view') }}" class="{{ request()->routeIs('admin/feedbacks') ? 'active' : '' }}"><span class="nav-link"></span>Feedbacks</a></li>
                <li><a href="{{ route('quizzes.index') }}" class="{{ request()->routeIs('quizzes') ? 'active' : '' }}"><span class="nav-link"></span>Manage Quiz</a></li>
            </ul>
        </nav>
        @else
        @if(request()->url() == route('course.bcdrcoursepage') ||
        request()->url() == route('chapter.bcdrchapterpage') ||
        $courseNameFromUrl == "Business Continuity & Disaster Recovery")
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
                @foreach($quizzes as $quiz)
                <li><a href="{{ route('quizzes.view', ['courseName' => urlencode($quiz->course_name), 'id' => $quiz->id]) }}"><span class="nav-link"></span>{{ $quiz->title }}</a></li>

                @endforeach
            </ul>
        </nav>
        @endif
        @if(request()->url() == route('course.coursepage') || 
        request()->url() == route('chapter.chapterpage') || 
        $courseNameFromUrl == "Management of Information Security")
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
                @foreach($quizzes as $quiz)
                <li><a href="{{ route('quizzes.view', ['courseName' => $quiz->course_name, 'id' => $quiz->id]) }}"><span class="nav-link"></span>{{ $quiz->title }}</a></li>
                @endforeach
            </ul>
        </nav>
        @endif
        @if(request()->url() == route('course.riskcoursepage') 
        || request()->url() == route('chapter.riskchapterpage') || 
        $courseNameFromUrl == "Risk Management")
        <nav id="sidebar">
            <ul class="list-unstyled components mb-5">
                <li><a href="{{ route('course.riskcoursepage') }}"><span class="nav-link"></span>Risk Management @yield('title')</a></li><!-- Back to overview page -->
                <li><a href="{{ route('chapter.riskchapterpage') }}"><span class="nav-link"></span> Chapter 1</a></li>
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
                @foreach($quizzes as $quiz)
                <li><a href="{{ route('quizzes.view', ['courseName' => $quiz->course_name, 'id' => $quiz->id]) }}"><span class="nav-link"></span>{{ $quiz->title }}</a></li>
                @endforeach
            </ul>
        </nav>
        @endif
        @if(request()->url() == route('course.auditcoursepage') 
        || request()->url() == route('chapter.auditchapterpage') || 
        $courseNameFromUrl == "Control & Audit of Information System")
        <nav id="sidebar">
            <ul class="list-unstyled components mb-5">
                <li><a href="{{ route('course.auditcoursepage') }}"><span class="nav-link"></span>Control & Audit of Information System @yield('title')</a></li><!-- Back to overview page -->
                <li><a href="{{ route('chapter.auditchapterpage') }}"><span class="nav-link"></span> Chapter 1</a></li>
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
                @foreach($quizzes as $quiz)
                <li><a href="{{ route('quizzes.view', ['courseName' => $quiz->course_name, 'id' => $quiz->id]) }}"><span class="nav-link"></span>{{ $quiz->title }}</a></li>
                @endforeach
            </ul>
        </nav>
        @endif
        @endif

        <!-- End left side bar -->
        <div style="width: 100%;">
            @yield('content')
        </div>
    </div>
    <script src="{{ asset ('import/navbar/js/jquery.min.js')}}"></script>
    <script src="{{ asset ('import/navbar/js/popper.js')}}"></script>
    <script src="{{ asset ('import/navbar/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset ('import/navbar/js/main.js')}}"></script>
</body>

</html>
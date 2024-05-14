@extends('navbar.dashboardleftbar')

    @section('content')
    
    <!-- Scripts -->
    <div class="wrapper d-flex align-items-stretch">
        @yield('chapter')
        <div id="content" class="p-4 p-md-5 pt-5">
            <h1 class="mb-4">Chapter 1: Business Continuity and Disaster Recovery Overview @yield('chaptitle')</h1>
            <!-- Box with text in the middle -->
            <div class="text-center bg-light p-4">
                @yield('overview')
                <p>An overview of information security is provided in this chapter, along with information on its properties, sources, and effects on both persons and organizations.
                    Additionally, it addresses the ISO/IEC 27002 standard and how information security relates to the SDGs and Maqasid Shariah.
                </p>
            </div>

            <h4>Video lesson links</h4>
            <div class="link">
                <i class="fas fa-file-video"></i>
                <a href="https://www.youtube.com/watch?v=Wp_9nsEHjn8">Intro to InfoSec</a><!-- Link to external video -->
            </div>

            <h4>Reading Notes:</h4>
            <div class="link">
                <i class="fas fa-book"></i>
                <a href="{{ route('view-pdf', ['filename' => 'readPDF.pdf']) }}" target="_blank">Week 4 - Project Initiation.pdf</a>
            </div>

            <h4>Visual Notes:</h4>
            <div class="link">
                <i class="fas fa-file-import"></i>
                <a href="https://www.youtube.com/watch?v=Wp_9nsEHjn8">Intro to InfoSec</a><!-- Link to external video -->
            </div>

            <h4>Exercise Module:</h4>
            <div class="link">
                <i class="fas fa-file-import"></i>
                <a href="https://www.youtube.com/watch?v=Wp_9nsEHjn8">Intro to InfoSec</a><!-- Link to external video -->
            </div>
        </div>
    </div>
    </div>
    @endsection
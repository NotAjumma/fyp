@extends('navbar.dashboardleftbar')
@extends('dashboxes')
@section('content')
<!-- Page Content  -->
<div class="wrapper d-flex align-items-stretch justify-content-center">
  <div id="content" class="p-4 p-md-5 pt-5">
    <!-- Box with text in the middle -->
    <div class="text-center bg-light p-4">

      <p>
      <h3>حَدَّثَنَا عَلِيُّ بْنُ مَيْمُونٍ الرَّقِّيُّ، حَدَّثَنَا أَبُو خُلَيْدٍ، عُتْبَةُ بْنُ حَمَّادٍ الدِّمَشْقِيُّ عَنِ ابْنِ ثَوْبَانَ، عَنْ عَطَاءِ بْنِ قُرَّةَ، عَنْ عَبْدِ اللَّهِ بْنِ ضَمْرَةَ السَّلُولِيِّ، قَالَ حَدَّثَنَا أَبُو هُرَيْرَةَ، قَالَ سَمِعْتُ رَسُولَ اللَّهِ ـ صلى الله عليه وسلم ـ وَهُوَ يَقُولُ ‏ "‏ الدُّنْيَا مَلْعُونَةٌ مَلْعُونٌ مَا فِيهَا إِلاَّ ذِكْرَ اللَّهِ وَمَا وَالاَهُ أَوْ عَالِمًا أَوْ مُتَعَلِّمًا ‏"‏ ‏.‏

      </h3>
      </p>

      <p>Abu Hurairah said: “I heard the Messenger of Allah (ﷺ) saying:
        ‘This world is cursed and what is in it is cursed, except the remembrance of Allah (dhikr) and what is conducive to that, or one who has knowledge or who acquires knowledge.’”

      </p>
    </div>
    <br><br>
    <h2 style="text-align: center;">List of available courses: </h2>
    <br><br>
    <div class="text-center bg-light p-4">
    <div class="row" style="--bs-gutter-x: 0;">
      <div class="col-lg-3 col-md-6 text-center">
        <div class="gallery-item">
          <a href="{{ route('course.coursepage') }}">
            <img src="{{ asset('images/mis.jpg') }}" alt="MIS">
            <div class="textbox">
              <a href="{{ route('course.coursepage') }}">Management of Information Security</a>
            </div>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="gallery-item">
          <a href="{{ route('course.bcdrcoursepage') }}">
            <img src="{{ asset('images/bcdr.jpg') }}" alt="BCDR">
            <div class="textbox">
              <a href="{{ route('course.bcdrcoursepage') }}">Business Continuity & Disaster Recovery</a>
            </div>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="gallery-item">
          <a href="{{ route('course.riskcoursepage') }}">
            <img src="{{ asset('images/risk.jpeg') }}" alt="RISK">
            <div class="textbox">
              <a href="{{ route('course.riskcoursepage') }}">Risk Management</a>
            </div>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 text-center">
        <div class="gallery-item">
          <a href="{{ route('course.auditcoursepage') }}">
            <img src="{{ asset('images/audit.jpg') }}" alt="AUDIT">
            <div class="textbox">
              <a href="{{ route('course.auditcoursepage') }}">Control & Audit of Information System</a>
            </div>
          </a>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
@endsection
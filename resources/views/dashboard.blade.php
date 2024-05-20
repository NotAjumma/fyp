@extends('navbar.dashboardleftbar')
@extends('dashboxes')
@section('content')
<!-- Page Content  -->
@if(Auth::check() && Auth::user()->isAdmin())
<div class="wrapper d-flex align-items-stretch justify-content-center">
  <div id="content" class="p-4 p-md-5">
    <div>
      <h1>Welcome to Admin Dashboard Management</h1>
    </div>
    <div class="d-flex justify-content-center mt-5 gap-5">
      <a href="{{ route('uploadFiles.index') }}" class="dashboard-link">
        <div class="dashboard-item">
          <img src="{{ asset('images/upload.png') }}" alt="upload">
          <div class="dashboard-overlay">
            <p>Upload Contents</p>
          </div>
          <p class="dashboard-label">Upload Contents</p>
        </div>
      </a>
      <a href="{{ route('feedbacks.view') }}" class="dashboard-link">
        <div class="dashboard-item">
          <img src="{{ asset('images/feedback.jpg') }}" alt="feedback">
          <div class="dashboard-overlay">
            <p>Feedbacks</p>
          </div>
          <p class="dashboard-label">Feedbacks</p>
        </div>
      </a>
      <a href="{{ route('quizzes.index') }}" class="dashboard-link">
        <div class="dashboard-item">
          <img src="{{ asset('images/quiz.jpg') }}" alt="quiz">
          <div class="dashboard-overlay">
            <p>Manage Quiz</p>
          </div>
          <p class="dashboard-label">Manage Quiz</p>
        </div>
      </a>
    </div>
  </div>

</div>

@else
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
@endif
@endsection

<style>
  .dashboard-item {
  position: relative;
  cursor: pointer;
  transition: transform 0.3s ease;
}

.dashboard-item img {
  height: 10rem;
  width: 15rem;
}

.dashboard-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 1.5rem;
  background-color: rgba(0, 0, 0, 0.5);
  opacity: 0;
  transition: opacity 0.3s ease;
}

.dashboard-overlay p {
  color: white;
  font-weight: bold;
  text-align: center;
}

.dashboard-label {
  text-align: center;
  margin-top: 10px;
  background-color: lightgrey;
  padding: 1.5rem;
  font-weight: bold;
  color: black;
}

.dashboard-link:hover .dashboard-item {
  transform: scale(1.05);
}

.dashboard-link:hover .dashboard-overlay {
  opacity: 1;
}

@media (max-width: 768px) {
  .dashboard-item {
    margin: 10px 0;
  }

  .d-flex.justify-content-center {
    flex-wrap: wrap;
  }
}

</style>
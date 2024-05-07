@extends('navbar.dashboardleftbar')
@extends('dashboxes')

@section('content')
<!-- Page Content  -->
<div class="wrapper d-flex align-items-stretch">
    <div id="content" class="p-4 p-md-5 pt-5">
        <!-- Box with text in the middle -->
            <div class="text-center bg-light p-4">

                <p><h3>حَدَّثَنَا عَلِيُّ بْنُ مَيْمُونٍ الرَّقِّيُّ، حَدَّثَنَا أَبُو خُلَيْدٍ، عُتْبَةُ بْنُ حَمَّادٍ الدِّمَشْقِيُّ عَنِ ابْنِ ثَوْبَانَ، عَنْ عَطَاءِ بْنِ قُرَّةَ، عَنْ عَبْدِ اللَّهِ بْنِ ضَمْرَةَ السَّلُولِيِّ، قَالَ حَدَّثَنَا أَبُو هُرَيْرَةَ، قَالَ سَمِعْتُ رَسُولَ اللَّهِ ـ صلى الله عليه وسلم ـ وَهُوَ يَقُولُ ‏ "‏ الدُّنْيَا مَلْعُونَةٌ مَلْعُونٌ مَا فِيهَا إِلاَّ ذِكْرَ اللَّهِ وَمَا وَالاَهُ أَوْ عَالِمًا أَوْ مُتَعَلِّمًا ‏"‏ ‏.‏

                </h3>
            </p>

                <p>Abu Hurairah said: “I heard the Messenger of Allah (ﷺ) saying:
                    ‘This world is cursed and what is in it is cursed, except the remembrance of Allah (dhikr) and what is conducive to that, or one who has knowledge or who acquires knowledge.’”

                </p>
            </div>
            <br><br>

            <body>

                <div class="gallery">
                  <div class="gallery-item">
                    <img src="{{ asset('images/mis.jpg') }}" alt="MIS">
                    <div class="textbox">
                        <a href="{{ route('coursepage') }}">Management of Information Security</a>
                      <p>Learn how to manage information security efficiently. Prepare to excel in information security management, protecting systems
                        and networks in a world of increasing threats and successful cyber attacks. </p>
                    </div>
                  </div>
                  <div class="gallery-item">
                    <img src="{{ asset('images/bcdr.jpg') }}" alt="BCDR">
                    <div class="textbox">
                        <a href="{{ route('coursepage') }}">Business Continuity & Disaster Recovery</a>
                        <br>
                      <p>Methods and procedures are used to help a company recover from a disaster and resume normal business activities.
                        It incorporates both IT and business duties in the aftermath of a disaster.</p>
                    </div>
                  </div>
                  <div class="gallery-item">
                    <img src="{{ asset('images/risk.jpeg') }}" alt="RISK">
                    <div class="textbox">
                        <a href="{{ route('coursepage') }}">Risk Management</a>
                        <br><br>
                      <p>A continual process of identifying, analyzing, assessing, and managing potential risks that include
                         monitoring risk control processes as well as financial resources to reduce the negative effects of losses.
                    </p>
                    </div>
                  </div>
                  <div class="gallery-item">
                    <img src="{{ asset('images/audit.jpg') }}" alt="AUDIT">
                    <div class="textbox">
                        <a href="{{ route('coursepage') }}">Control & Audit of Information System</a>
                        <br>
                      <p>IT audits ensure that controls protect company assets, preserve data integrity, and align with business goals.
                        It confirms the proper functioning of information-related controls and processes.</p>
                    </div>
                  </div>
                </div>

                </body>
    </div>
</div>
@endsection


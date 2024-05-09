@extends('navbar.profileleftbar')
@extends('profileoptions')


@section('content')

<!-- Page Content  -->
<div class="wrapper d-flex align-items-stretch">
    <div id="content" class="p-4 p-md-5 pt-5">
        <!-- Box with text in the middle -->
        <h1> Hi,username!</h1>
        <br><br>
        <p>(Put the user learning progress in this area)</p>
        <br><br>

            <!--<div class="text-center bg-light p-4">-->
                <h3><a href="{{route('dashboard')}}" style="text-decoration: none; color: black;">Edit Profile</a></h3>
                <br>
                <hr class="short-line">
                <br>
                <h3><a href="{{route('feedback.userfeedback')}}" style="text-decoration: none; color: black;">Feedback</a></h3>
                <br>
                <hr class="short-line">
                <br>
                <h3><a href="{{route('landingpage')}}" style="text-decoration: none; color: black;">Sign Out</a></h3>

            </div>
            <br><br>

        <!--<div class="mb-4" style="text-align: center;">List of available articles: </h2></p>
             Box with text in the middle for overview
            <div class="text-center bg-light p-4">
                <p>la pariatur. Excepteur sint occa</p>
                <br><br>
                <div class="text-center bg-light p-4">
                    <p>diwjdkj</p>
                </div>
            </div>
    </div>


</div>

@endsection


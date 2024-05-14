<!-- // resources/views/components/head.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ $title ?? 'SecurityJourney' }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('import/assets/img/favicon.png')}}" rel="icon">
    <link href="{{ asset('import/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link rel="stylesheet" href="{{ asset ('import/navbar/css/style.css')}}">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('import/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset('import/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('import/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('import/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{ asset('import/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{ asset('import/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('import/assets/css/style.css')}}" rel="stylesheet">

    <script src="{{ asset ('import/navbar/js/jquery.min.js')}}"></script>
    <script src="{{ asset ('import/navbar/js/popper.js')}}"></script>
    <script src="{{ asset ('import/navbar/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset ('import/navbar/js/main.js')}}"></script>


    <style>
        .gallery-item {
            height: 100%;
        }

        .textbox {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .gallery-row {
            display: flex;
            justify-content: center;
        }
    </style>
</head>
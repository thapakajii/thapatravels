<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thapa Travels</title>
    <link rel="stylesheet" href="{{ url('./css/style.css') }}">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Square+Peg&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Square+Peg&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">   -->
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<body>
    <nav id ="navMenu" class="navMenu">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo"><a href="/">Thapa Travels</a></label>
        <ul>
            <li><a href="{{ route('about.index') }}">About</a></li>
            <li><a href="{{ route('traveldestinations.index') }}">Travel Destinations</a></li>
            <li><a href="{{ route('travelpackages.index') }}">Travel Packages</a></li>
            <li><a href="{{ route('vehicles.index') }}">Vehicles</a></li>
            <li><a href="{{ route('contact.index') }}">Contact</a></li>
        </ul>
    </nav>
    @yield('content')
    <div class="solid-line-one"></div>
    <footer id="footerMenu" class="footerMenu">
        <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
        <div class="first-footer-layout">
            <div class="footer-lists">
                <h4 class="footer-logo">Thapa Travels</h4>
                <!-- <img src="../images/gofundme.png" alt="" class="footer-img"> -->
                <div class="lists-under-logo">
                    <div class="footer-country">&#127462;&#127482; </div>
                    <div><strong> Australia </strong></div>
                    <div><strong> . </strong></div>
                    <div><strong> English </strong></div>
                </div>    
            </div>
            <div class="solid-line"></div>

            <div class="footer-lists">
                <div class="footer-nav-lists">Travel Destinations</div>
                <div class="footer-nav-lists">Travel Packages</div>
                <div class="footer-nav-lists">Travel Vehicles</div>
            </div>
            <div class="solid-line"></div>

            <div class="footer-lists">
                <div class="footer-nav-lists">About</div>
                <div class="footer-nav-lists">Contact Us</div>
            </div>
        </div>
        <div class="second-footer-layout">
            <div class="left-under-lists">
                <div class="footer-terms">&copy; 2022 ThapaTravels</div>
                <div class="footer-terms">Terms</div>
                <div class="footer-terms">Privacy</div>
                <div class="footer-terms">Legal</div>
            </div>
            
            <div class="right-under-lists">
                <img src="../images/logo9.png" alt="" class="footer-social">
                <img src="../images/logo10.png" alt="" class="footer-social">
                <img src="../images/logo11.png" alt="" class="footer-social">
                <img src="../images/logo12.png" alt="" class="footer-social">
            </div>
        </div>
        </div>    
    </footer>
</body>
</html>
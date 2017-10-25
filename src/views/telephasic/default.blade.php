<!DOCTYPE HTML>
<!--
	Telephasic by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
<title>Telephasic by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="{{ asset('assets/templates/telephasic/assets/js/ie/html5shiv.js')}}"></script><![endif]-->
    <link rel="stylesheet" href="{{ asset('assets/templates/telephasic/assets/css/main.css')}}" />
    <!--[if lte IE 8]><link rel="stylesheet" href="{{ asset('assets/templates/telephasic/assets/css/ie8.css')}}" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="{{ asset('assets/templates/telephasic/assets/css/ie9.css')}}" /><![endif]-->
</head>

<body @section( 'bodyclass') class="homepage" @show>
    <div id="page-wrapper">
        <!-- Header -->
        <div id="header-wrapper">
            @include('TELEPHASIC::navigation') @section('hero') @show
        </div>
        <!-- Features 1 -->
        @yield('content')
    </div>
    <!-- Footer -->
    <div id="footer-wrapper">
        <div id="footer" class="container">
            <header class="major">
                <h2>Euismod aliquam vehicula lorem</h2>
                <p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel sem sit
                    <br /> dolor neque semper magna lorem ipsum feugiat veroeros lorem ipsum dolore.</p>
            </header>
            <div class="row">
                <section class="6u 12u(narrower)">
                    <form method="get" action="{{ url('/telephasic') }}">
                        <div class="row 50%">
                            <div class="6u 12u(mobile)">
                                <input name="name" placeholder="Name" type="text" />
                            </div>
                            <div class="6u 12u(mobile)">
                                <input name="email" placeholder="Email" type="text" />
                            </div>
                        </div>
                        <div class="row 50%">
                            <div class="12u">
                                <textarea name="message" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="row 50%">
                            <div class="12u">
                                <ul class="actions">
                                    <li>
                                        <input type="submit" value="Send Message" />
                                    </li>
                                    <li>
                                        <input type="reset" value="Clear form" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </section>
                <section class="6u 12u(narrower)">
                    <div class="row 0%">
                        <ul class="divided icons 6u 12u(mobile)">
                            <li class="icon fa-twitter">
                                <a href="#">
                                    <span class="extra">twitter.com/</span>untitled</a>
                            </li>
                            <li class="icon fa-facebook">
                                <a href="#">
                                    <span class="extra">facebook.com/</span>untitled</a>
                            </li>
                            <li class="icon fa-dribbble">
                                <a href="#">
                                    <span class="extra">dribbble.com/</span>untitled</a>
                            </li>
                        </ul>
                        <ul class="divided icons 6u 12u(mobile)">
                            <li class="icon fa-instagram">
                                <a href="#">
                                    <span class="extra">instagram.com/</span>untitled</a>
                            </li>
                            <li class="icon fa-youtube">
                                <a href="#">
                                    <span class="extra">youtube.com/</span>untitled</a>
                            </li>
                            <li class="icon fa-pinterest">
                                <a href="#">
                                    <span class="extra">pinterest.com/</span>untitled</a>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
        <div id="copyright" class="container">
            <ul class="menu">
                <li>&copy; Untitled. All rights reserved.</li>
                <li>Design:
                    <a href="http://html5up.net">HTML5 UP</a>
                </li>
                <li>
                    <a href="{{ url('lang/en') }}">
                        <img src="{{ asset('assets/templates/phantom/images/us.png')}}" alt="english">
                    </a>
                    <a href="{{ url('lang/de') }}">
                        <img src="{{ asset('assets/templates/phantom/images/de.png')}}" alt="german">
                    </a>
                </li>
            </ul>
        </div>
    </div>

    </div>
    <!-- Scripts -->
    <script src="{{ asset('assets/templates/telephasic/assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/templates/telephasic/assets/js/jquery.dropotron.min.js')}}"></script>
    <script src="{{ asset('assets/templates/telephasic/assets/js/skel.min.js')}}"></script>
    <script src="{{ asset('assets/templates/telephasic/assets/js/util.js')}}"></script>
    <!--[if lte IE 8]><script src="{{ asset('assets/templates/telephasic/assets/js/ie/respond.min.js')}}"></script><![endif]-->
    <script src="{{ asset('assets/templates/telephasic/assets/js/main.js')}}"></script>

</body>
</html>
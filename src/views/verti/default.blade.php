<!DOCTYPE HTML>
<!--
	Verti by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>Verti by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="{{ asset('assets/templates/verti/assets/js/ie/html5shiv.js')}}"></script><![endif]-->
    <link rel="stylesheet" href="{{ asset('assets/templates/verti/assets/css/main.css')}}" />
    <!--[if lte IE 8]><link rel="stylesheet" href="{{ asset('assets/templates/verti/assets/css/ie8.css')}}" /><![endif]-->
</head>

<body class="homepage">
    <div id="page-wrapper">

        <!-- Header -->
        <div id="header-wrapper">
            <header id="header" class="container">

                <!-- Logo -->
                <div id="logo">
                    <h1>
                        <a href="index.html">Verti</a>
                    </h1>
                    <span>by HTML5 UP</span>
                </div>

                <!-- Nav -->
                @include('VERTI::navigation')
            </header>
        </div>
        @yield('content')
        <!-- Footer -->
        <div id="footer-wrapper">
            <footer id="footer" class="container">
                <div class="row">
                    <div class="3u 6u(medium) 12u$(small)">

                        <!-- Links -->
                        <section class="widget links">
                            <h3>Random Stuff</h3>
                            <ul class="style2">
                                <li>
                                    <a href="#">Etiam feugiat condimentum</a>
                                </li>
                                <li>
                                    <a href="#">Aliquam imperdiet suscipit odio</a>
                                </li>
                                <li>
                                    <a href="#">Sed porttitor cras in erat nec</a>
                                </li>
                                <li>
                                    <a href="#">Felis varius pellentesque potenti</a>
                                </li>
                                <li>
                                    <a href="#">Nullam scelerisque blandit leo</a>
                                </li>
                            </ul>
                        </section>

                    </div>
                    <div class="3u 6u$(medium) 12u$(small)">

                        <!-- Links -->
                        <section class="widget links">
                            <h3>Random Stuff</h3>
                            <ul class="style2">
                                <li>
                                    <a href="#">Etiam feugiat condimentum</a>
                                </li>
                                <li>
                                    <a href="#">Aliquam imperdiet suscipit odio</a>
                                </li>
                                <li>
                                    <a href="#">Sed porttitor cras in erat nec</a>
                                </li>
                                <li>
                                    <a href="#">Felis varius pellentesque potenti</a>
                                </li>
                                <li>
                                    <a href="#">Nullam scelerisque blandit leo</a>
                                </li>
                            </ul>
                        </section>

                    </div>
                    <div class="3u 6u(medium) 12u$(small)">

                        <!-- Links -->
                        <section class="widget links">
                            <h3>Random Stuff</h3>
                            <ul class="style2">
                                <li>
                                    <a href="#">Etiam feugiat condimentum</a>
                                </li>
                                <li>
                                    <a href="#">Aliquam imperdiet suscipit odio</a>
                                </li>
                                <li>
                                    <a href="#">Sed porttitor cras in erat nec</a>
                                </li>
                                <li>
                                    <a href="#">Felis varius pellentesque potenti</a>
                                </li>
                                <li>
                                    <a href="#">Nullam scelerisque blandit leo</a>
                                </li>
                            </ul>
                        </section>

                    </div>
                    <div class="3u 6u$(medium) 12u$(small)">

                        <!-- Contact -->
                        <section class="widget contact last">
                            <h3>Contact Us</h3>
                            <ul>
                                <li>
                                    <a href="#" class="icon fa-twitter">
                                        <span class="label">Twitter</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="icon fa-facebook">
                                        <span class="label">Facebook</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="icon fa-instagram">
                                        <span class="label">Instagram</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="icon fa-dribbble">
                                        <span class="label">Dribbble</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="icon fa-pinterest">
                                        <span class="label">Pinterest</span>
                                    </a>
                                </li>
                            </ul>
                            <p>1234 Fictional Road
                                <br /> Nashville, TN 00000
                                <br /> (800) 555-0000</p>
                        </section>

                    </div>
                </div>
                <div class="row">
                    <div class="12u">
                        <div id="copyright">
                            <ul class="menu">
                                <li>&copy; Untitled. All rights reserved</li>
                                <li>Design:
                                    <a href="http://html5up.net">HTML5 UP</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets/templates/verti/assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/templates/verti/assets/js/jquery.dropotron.min.js')}}"></script>
    <script src="{{ asset('assets/templates/verti/assets/js/skel.min.js')}}"></script>
    <script src="{{ asset('assets/templates/verti/assets/js/util.js')}}"></script>
    <!--[if lte IE 8]><script src="{{ asset('assets/templates/verti/assets/js/ie/html5shiv.js')}}assets/js/ie/respond.min.js"></script><![endif]-->
    <script src="{{ asset('assets/templates/verti/assets/js/main.js')}}"></script>

</body>

</html>
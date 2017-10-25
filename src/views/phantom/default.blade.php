<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>@section('title') Phantom by HTML5 UP @show</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="{{ asset('assets/templates/phantom/assets/js/ie/html5shiv.js')}}"></script><![endif]-->
    <link rel="stylesheet" href="{{ asset('assets/templates/phantom/assets/css/main.css')}}" />
    <!--[if lte IE 9]><link rel="stylesheet" href="{{ asset('assets/templates/phantom/assets/css/ie9.css')}}" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="{{ asset('assets/templates/phantom/assets/css/ie8.css')}}" /><![endif]-->
</head>

<body>
    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header">
            <div class="inner">

                <!-- Logo -->
                <a href="index.html" class="logo">
                    <span class="symbol">
                        <img src="{{ asset('assets/templates/phantom/images/logo.svg')}}" alt="" />
                    </span>
                    <span class="title">Phantom</span>
                    <a href="{{ url('lang/en') }}">
                        <img src="{{ asset('assets/templates/phantom/images/us.png')}}" alt="english">
                    </a>
                    <a href="{{ url('lang/de') }}">
                        <img src="{{ asset('assets/templates/phantom/images/de.png')}}" alt="german">
                    </a>
                </a>

                <!-- Nav -->
                <nav>
                    <ul>
                        <li>
                            <a href="#menu">Menu</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </header>

        <!-- Menu -->
        <nav id="menu">
            <h2>Menu</h2>
            <ul>
                <li>
                    <a href="{!! url('/phantom', array('sub' => 'generic')); !!}">{!! trans('laraveltemplates::language._HOME') !!}</a>
                </li>
                <li>
                    <a href="{!! url('/phantom', array('sub' => 'generic')); !!}">Ipsum veroeros</a>
                </li>
                <li>
                    <a href="{!! url('/phantom', array('sub' => 'generic')); !!}">Tempus etiam</a>
                </li>
                <li>
                    <a href="{!! url('/phantom', array('sub' => 'generic')); !!}">Consequat dolor</a>
                </li>
                <li>
                    <a href="{!! url('/phantom', array('sub' => 'elements')); !!}">Elements</a>
                </li>
            </ul>
        </nav>

        <!-- Main -->
        @yield('content')


        <!-- Footer -->
        <footer id="footer">
            <div class="inner">
                <section>
                    <h2>Get in touch</h2>
                    <form method="post" action="#">
                        <div class="field half first">
                            <input type="text" name="name" id="name" placeholder="Name" />
                        </div>
                        <div class="field half">
                            <input type="email" name="email" id="email" placeholder="Email" />
                        </div>
                        <div class="field">
                            <textarea name="message" id="message" placeholder="Message"></textarea>
                        </div>
                        <ul class="actions">
                            <li>
                                <input type="submit" value="Send" class="special" />
                            </li>
                        </ul>
                    </form>
                </section>
                <section>
                    <h2>Follow</h2>
                    <ul class="icons">
                        <li>
                            <a href="#" class="icon style2 fa-twitter">
                                <span class="label">Twitter</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="icon style2 fa-facebook">
                                <span class="label">Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="icon style2 fa-instagram">
                                <span class="label">Instagram</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="icon style2 fa-dribbble">
                                <span class="label">Dribbble</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="icon style2 fa-github">
                                <span class="label">GitHub</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="icon style2 fa-500px">
                                <span class="label">500px</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="icon style2 fa-phone">
                                <span class="label">Phone</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="icon style2 fa-envelope-o">
                                <span class="label">Email</span>
                            </a>
                        </li>
                    </ul>
                </section>
                <ul class="copyright">
                    <li>&copy; Untitled. All rights reserved</li>
                    <li>Design:
                        <a href="http://html5up.net">HTML5 UP</a>
                    </li>
                </ul>
            </div>
        </footer>

    </div>
    <!-- Scripts -->
    <script src="{{ asset('assets/templates/phantom/assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/templates/phantom/assets/js/skel.min.js')}}"></script>
    <script src="{{ asset('assets/templates/phantom/assets/js/util.js')}}"></script>
    <!--[if lte IE 8]><script src="{{ asset('assets/templates/phantom/assets/js/ie/respond.min.js')}}"></script><![endif]-->
    <script src="{{ asset('assets/templates/phantom/assets/js/main.js')}}"></script>
</body>
</html>
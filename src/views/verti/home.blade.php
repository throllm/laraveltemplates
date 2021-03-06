@extends('VERTI::default')

@section('title')
{{trans('laraveltemplates::language._HOME')}}
@endsection

@section('content')
<!-- Banner -->
<div id="banner-wrapper">
	<div id="banner" class="box container">
		<div class="row">
			<div class="7u 12u(medium)">
				<h2>Hi. This is Verti.</h2>
				<p>It's a free responsive site template by HTML5 UP</p>
			</div>
			<div class="5u 12u(medium)">
				<ul>
					<li>
						<a href="#" class="button big icon fa-arrow-circle-right">Ok let's go</a>
					</li>
					<li>
						<a href="#" class="button alt big icon fa-question-circle">More info</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<!-- Features -->
<div id="features-wrapper">
	<div class="container">
		<div class="row">
			<div class="4u 12u(medium)">

				<!-- Box -->
				<section class="box feature">
					<a href="#" class="image featured">
						<img src="{{ asset('assets/templates/verti/images/pic01.jpg')}}" alt="" />
					</a>
					<div class="inner">
						<header>
							<h2>Put something here</h2>
							<p>Maybe here as well I think</p>
						</header>
						<p>Phasellus quam turpis, feugiat sit amet in, hendrerit in lectus. Praesent sed semper amet bibendum tristique fringilla.</p>
					</div>
				</section>

			</div>
			<div class="4u 12u(medium)">

				<!-- Box -->
				<section class="box feature">
					<a href="#" class="image featured">
						<img src="{{ asset('assets/templates/verti/images/pic02.jpg')}}" alt="" />
					</a>
					<div class="inner">
						<header>
							<h2>An interesting title</h2>
							<p>This is also an interesting subtitle</p>
						</header>
						<p>Phasellus quam turpis, feugiat sit amet in, hendrerit in lectus. Praesent sed semper amet bibendum tristique fringilla.</p>
					</div>
				</section>

			</div>
			<div class="4u 12u(medium)">

				<!-- Box -->
				<section class="box feature">
					<a href="#" class="image featured">
						<img src="{{ asset('assets/templates/verti/images/pic03.jpg')}}" alt="" />
					</a>
					<div class="inner">
						<header>
							<h2>Oh, and finally ...</h2>
							<p>Here's another intriguing subtitle</p>
						</header>
						<p>Phasellus quam turpis, feugiat sit amet in, hendrerit in lectus. Praesent sed semper amet bibendum tristique fringilla.</p>
					</div>
				</section>

			</div>
		</div>
	</div>
</div>

<!-- Main -->
<div id="main-wrapper">
	<div class="container">
		<div class="row 200%">
			<div class="4u 12u(medium)">

				<!-- Sidebar -->
				<div id="sidebar">
					<section class="widget thumbnails">
						<h3>Interesting stuff</h3>
						<div class="grid">
							<div class="row 50%">
								<div class="6u">
									<a href="#" class="image fit">
										<img src="{{ asset('assets/templates/verti/images/pic04.jpg')}}" alt="" />
									</a>
								</div>
								<div class="6u">
									<a href="#" class="image fit">
										<img src="{{ asset('assets/templates/verti/images/pic05.jpg')}}" alt="" />
									</a>
								</div>
								<div class="6u">
									<a href="#" class="image fit">
										<img src="{{ asset('assets/templates/verti/images/pic06.jpg')}}" alt="" />
									</a>
								</div>
								<div class="6u">
									<a href="#" class="image fit">
										<img src="{{ asset('assets/templates/verti/images/pic07.jpg')}}" alt="" />
									</a>
								</div>
							</div>
						</div>
						<a href="#" class="button icon fa-file-text-o">More</a>
					</section>
				</div>

			</div>
			<div class="8u 12u(medium) important(medium)">

				<!-- Content -->
				<div id="content">
					<section class="last">
						<h2>So what's this all about?</h2>
						<p>This is
							<strong>Verti</strong>, a free and fully responsive HTML5 site template by
							<a href="http://html5up.net">HTML5 UP</a>. Verti is released under the
							<a href="http://html5up.net/license">Creative Commons Attribution license</a>, so feel free to use it for any personal or commercial project you might
							have going on (just don't forget to credit us for the design!)</p>
						<p>Phasellus quam turpis, feugiat sit amet ornare in, hendrerit in lectus. Praesent semper bibendum ipsum, et tristique
							augue fringilla eu. Vivamus id risus vel dolor auctor euismod quis eget mi. Etiam eu ante risus. Aliquam erat volutpat.
							Aliquam luctus mattis lectus sit amet phasellus quam turpis.</p>
						<a href="#" class="button icon fa-arrow-circle-right">Continue Reading</a>
					</section>
				</div>

			</div>
		</div>
	</div>
</div>
@endsection

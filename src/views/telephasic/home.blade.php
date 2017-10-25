@extends('TELEPHASIC::default')

@section('title')
{{trans('laraveltemplates::language._HOME')}}
@endsection

@section('hero')
<!-- Hero -->
<section id="hero" class="container">
	<header>
		<h2>Telephasic is a responsive
			<br /> site template by
			<a href="http://html5up.net">HTML5 UP</a>
		</h2>
	</header>
	<p>Designed and built on
		<strong>skel</strong> by
		<a href="http://twitter.com/ajlkn">AJ</a>. Released for free under
		<br /> the
		<a href="http://html5up.net/license">Creative Commons Attribution 3.0 license</a>.</p>
	<ul class="actions">
		<li>
			<a href="#" class="button">Get this party started</a>
		</li>
	</ul>
</section>
@stop

@section('content')
<div class="wrapper">
	<div class="container">
		<div class="row">
			<section class="6u 12u(narrower) feature">
				<div class="image-wrapper first">
					<a href="#" class="image featured first">
						<img src="images/pic01.jpg" alt="" />
					</a>
				</div>
				<header>
					<h2>Semper magna neque vel
						<br /> adipiscing curabitur</h2>
				</header>
				<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel sem sit dolor neque semper magna. Lorem
					ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel sem sit.
				</p>
				<ul class="actions">
					<li>
						<a href="#" class="button">Elevate my awareness</a>
					</li>
				</ul>
			</section>
			<section class="6u 12u(narrower) feature">
				<div class="image-wrapper">
					<a href="#" class="image featured">
						<img src="images/pic02.jpg" alt="" />
					</a>
				</div>
				<header>
					<h2>Amet lorem ipsum dolor
						<br /> sit consequat magna</h2>
				</header>
				<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel sem sit dolor neque semper magna. Lorem
					ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel sem sit.
				</p>
				<ul class="actions">
					<li>
						<a href="#" class="button">Elevate my awareness</a>
					</li>
				</ul>
			</section>
		</div>
	</div>
</div>

<!-- Promo -->
<div id="promo-wrapper">
	<section id="promo">
		<h2>Neque semper magna et lorem ipsum adipiscing</h2>
		<a href="#" class="button">Breach the thresholds</a>
	</section>
</div>

<!-- Features 2 -->
<div class="wrapper">
	<section class="container">
		<header class="major">
			<h2>Sed magna consequat lorem curabitur tempus</h2>
			<p>Elit aliquam vulputate egestas euismod nunc semper vehicula lorem blandit</p>
		</header>
		<div class="row features">
			<section class="4u 12u(narrower) feature">
				<div class="image-wrapper first">
					<a href="#" class="image featured">
						<img src="images/pic03.jpg" alt="" />
					</a>
				</div>
				<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel sem sit dolor neque semper magna lorem ipsum.</p>
			</section>
			<section class="4u 12u(narrower) feature">
				<div class="image-wrapper">
					<a href="#" class="image featured">
						<img src="images/pic04.jpg" alt="" />
					</a>
				</div>
				<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel sem sit dolor neque semper magna lorem ipsum.</p>
			</section>
			<section class="4u 12u(narrower) feature">
				<div class="image-wrapper">
					<a href="#" class="image featured">
						<img src="images/pic05.jpg" alt="" />
					</a>
				</div>
				<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel sem sit dolor neque semper magna lorem ipsum.</p>
			</section>
		</div>
		<ul class="actions major">
			<li>
				<a href="#" class="button">Elevate my awareness</a>
			</li>
		</ul>
	</section>
</div>


@endsection

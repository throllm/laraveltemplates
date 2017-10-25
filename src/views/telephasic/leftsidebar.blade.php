@extends('TELEPHASIC::default')

@section('title')
{{trans('laraveltemplates::language._HOME')}}
@endsection

@section('bodyclass') 
class="left-sidebar"
@endsection

@section('content')
<div class="wrapper">
	<div class="container" id="main">
		<div class="row 150%">
			<div class="4u 12u(narrower)">

				<!-- Sidebar -->
				<section id="sidebar">
					<section>
						<header>
							<h3>Elit sed feugiat</h3>
						</header>
						<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur et vel sem sit amet dolor neque semper magna.
							Lorem ipsum dolor sit amet consectetur et dolore adipiscing elit. Curabitur vel sem sit.</p>
						<ul class="actions">
							<li>
								<a href="#" class="button">Magna amet nullam</a>
							</li>
						</ul>
					</section>
					<section>
						<a href="#" class="image featured">
							<img src="images/pic07.jpg" alt="" />
						</a>
						<header>
							<h3>Commodo lorem varius</h3>
						</header>
						<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur et vel sem sit amet dolor neque semper magna.
							Lorem ipsum dolor sit amet consectetur et dolore adipiscing elit. Curabitur vel sem sit.</p>
						<ul class="actions">
							<li>
								<a href="#" class="button">Ipsum sed dolor</a>
							</li>
						</ul>
					</section>
				</section>

			</div>
			<div class="8u 12u(narrower) important(narrower)">

				<!-- Content -->
				<article id="content">
					<header>
						<h2>Left Sidebar</h2>
						<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit dolor neque semper magna lorem ipsum.</p>
					</header>
					<a href="#" class="image featured">
						<img src="images/pic02.jpg" alt="" />
					</a>
					<p>Ut sed tortor luctus, gravida nibh eget, volutpat odio. Proin rhoncus, sapien mollis luctus hendrerit, orci dui viverra
						metus, et cursus nulla mi sed elit. Vestibulum condimentum, mauris a mattis vestibulum, urna mauris cursus lorem, eu
						fringilla lacus ante non est. Nullam vitae feugiat libero, eu consequat sem. Proin tincidunt neque eros. Duis faucibus
						blandit ligula, mollis commodo risus sodales at. Sed rutrum et turpis vel blandit. Nullam ornare congue massa, at commodo
						nunc venenatis varius. Praesent mollis nisi at vestibulum aliquet. Sed sagittis congue urna ac consectetur.</p>
					<p>Mauris eleifend eleifend felis aliquet ornare. Vestibulum porta velit at elementum gravida nibh eget, volutpat odio.
						Proin rhoncus, sapien mollis luctus hendrerit, orci dui viverra metus, et cursus nulla mi sed elit. Vestibulum condimentum,
						mauris a mattis vestibulum, urna mauris cursus lorem, eu fringilla lacus ante non est. Nullam vitae feugiat libero,
						eu consequat sem. Proin tincidunt neque eros. Duis faucibus blandit ligula, mollis commodo risus sodales at. Sed rutrum
						et turpis vel blandit. Nullam ornare congue massa, at commodo nunc venenatis varius. Praesent mollis nisi at vestibulum
						aliquet. Sed sagittis congue urna ac consectetur.</p>
					<p>Vestibulum pellentesque posuere lorem non aliquam. Mauris eleifend eleifend felis aliquet ornare. Vestibulum porta velit
						at elementum elementum.</p>
				</article>

			</div>
		</div>
		<div class="row features">
			<section class="4u 12u(narrower) feature">
				<div class="image-wrapper first">
					<a href="#" class="image featured">
						<img src="images/pic03.jpg" alt="" />
					</a>
				</div>
				<header>
					<h3>Dolor sit consequat magna</h3>
				</header>
				<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel sem sit dolor neque semper magna lorem ipsum.</p>
				<ul class="actions">
					<li>
						<a href="#" class="button">Elevate my awareness</a>
					</li>
				</ul>
			</section>
			<section class="4u 12u(narrower) feature">
				<div class="image-wrapper">
					<a href="#" class="image featured">
						<img src="images/pic04.jpg" alt="" />
					</a>
				</div>
				<header>
					<h3>Dolor sit consequat magna</h3>
				</header>
				<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel sem sit dolor neque semper magna lorem ipsum.</p>
				<ul class="actions">
					<li>
						<a href="#" class="button">Elevate my awareness</a>
					</li>
				</ul>
			</section>
			<section class="4u 12u(narrower) feature">
				<div class="image-wrapper">
					<a href="#" class="image featured">
						<img src="images/pic05.jpg" alt="" />
					</a>
				</div>
				<header>
					<h3>Dolor sit consequat magna</h3>
				</header>
				<p>Lorem ipsum dolor sit amet consectetur et sed adipiscing elit. Curabitur vel sem sit dolor neque semper magna lorem ipsum.</p>
				<ul class="actions">
					<li>
						<a href="#" class="button">Elevate my awareness</a>
					</li>
				</ul>
			</section>
		</div>
	</div>
</div>
@endsection

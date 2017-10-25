@extends('PHANTOM::default')

@section('title')
{{trans('laraveltemplates::language._HOME')}}
@endsection

@section('content')
<div id="main">
	<div class="inner">
		<header>
			<h1>{!! trans('laraveltemplates::language._TEASERPHANTOM') !!}</h1>
			<p>Etiam quis viverra lorem, in semper lorem. Sed nisl arcu euismod sit amet nisi euismod sed cursus arcu elementum ipsum
				arcu vivamus quis venenatis orci lorem ipsum et magna feugiat veroeros aliquam. Lorem ipsum dolor sit amet nullam dolore.</p>
		</header>
		<section class="tiles">
			<article class="style1">
				<span class="image">
					<img src="{{ asset('assets/templates/phantom/images/pic01.jpg')}}" alt="" />
				</span>
				<a href="generic.html">
					<h2>Magna</h2>
					<div class="content">
						<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
					</div>
				</a>
			</article>
			<article class="style2">
				<span class="image">
					<img src="{{ asset('assets/templates/phantom/images/pic02.jpg')}}" alt="" />
				</span>
				<a href="generic.html">
					<h2>Lorem</h2>
					<div class="content">
						<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
					</div>
				</a>
			</article>
			<article class="style3">
				<span class="image">
					<img src="{{ asset('assets/templates/phantom/images/pic03.jpg')}}" alt="" />
				</span>
				<a href="generic.html">
					<h2>Feugiat</h2>
					<div class="content">
						<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
					</div>
				</a>
			</article>
			<article class="style4">
				<span class="image">
					<img src="{{ asset('assets/templates/phantom/images/pic04.jpg')}}" alt="" />
				</span>
				<a href="generic.html">
					<h2>Tempus</h2>
					<div class="content">
						<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
					</div>
				</a>
			</article>
			<article class="style5">
				<span class="image">
					<img src="{{ asset('assets/templates/phantom/images/pic05.jpg')}}" alt="" />
				</span>
				<a href="generic.html">
					<h2>Aliquam</h2>
					<div class="content">
						<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
					</div>
				</a>
			</article>
			<article class="style6">
				<span class="image">
					<img src="{{ asset('assets/templates/phantom/images/pic06.jpg')}}" alt="" />
				</span>
				<a href="generic.html">
					<h2>Veroeros</h2>
					<div class="content">
						<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
					</div>
				</a>
			</article>
			<article class="style2">
				<span class="image">
					<img src="{{ asset('assets/templates/phantom/images/pic07.jpg')}}" alt="" />
				</span>
				<a href="generic.html">
					<h2>Ipsum</h2>
					<div class="content">
						<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
					</div>
				</a>
			</article>
			<article class="style3">
				<span class="image">
					<img src="{{ asset('assets/templates/phantom/images/pic08.jpg')}}" alt="" />
				</span>
				<a href="generic.html">
					<h2>Dolor</h2>
					<div class="content">
						<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
					</div>
				</a>
			</article>
			<article class="style1">
				<span class="image">
					<img src="{{ asset('assets/templates/phantom/images/pic09.jpg')}}" alt="" />
				</span>
				<a href="generic.html">
					<h2>Nullam</h2>
					<div class="content">
						<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
					</div>
				</a>
			</article>
			<article class="style5">
				<span class="image">
					<img src="{{ asset('assets/templates/phantom/images/pic10.jpg')}}" alt="" />
				</span>
				<a href="generic.html">
					<h2>Ultricies</h2>
					<div class="content">
						<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
					</div>
				</a>
			</article>
			<article class="style6">
				<span class="image">
					<img src="{{ asset('assets/templates/phantom/images/pic11.jpg')}}" alt="" />
				</span>
				<a href="generic.html">
					<h2>Dictum</h2>
					<div class="content">
						<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
					</div>
				</a>
			</article>
			<article class="style4">
				<span class="image">
					<img src="{{ asset('assets/templates/phantom/images/pic12.jpg')}}" alt="" />
				</span>
				<a href="generic.html">
					<h2>Pretium</h2>
					<div class="content">
						<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
					</div>
				</a>
			</article>
		</section>
	</div>
</div>
@endsection

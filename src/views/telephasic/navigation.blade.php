<div id="header" class="container">
	<!-- Logo -->
	<h1 id="logo">
		<a href="index.html">Telephasic</a>
	</h1>
	<nav id="nav">
		<ul>
			<li>
				<a href="#">Dropdown</a>
				<ul>
					<li>
						<a href="#">Lorem ipsum dolor</a>
					</li>
					<li>
						<a href="#">Magna phasellus</a>
					</li>
					<li>
						<a href="#">Etiam dolore nisl</a>
					</li>
					<li>
						<a href="#">Phasellus consequat</a>
						<ul>
							<li>
								<a href="#">Lorem ipsum dolor</a>
							</li>
							<li>
								<a href="#">Phasellus consequat</a>
							</li>
							<li>
								<a href="#">Magna phasellus</a>
							</li>
							<li>
								<a href="#">Etiam dolore nisl</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">Veroeros feugiat</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="{{ url('/telephasic', array('sub' => 'leftsidebar')) }}">{!! trans('laraveltemplates::language._LEFTSIDEBAR') !!}</a>
			</li>
			<li class="break">
				<a href="{{ url('/telephasic', array('sub' => 'rightsidebar')) }}">{!! trans('laraveltemplates::language._RIGHTSIDEBAR') !!}</a>
			</li>
			<li>
				<a href="{{ url('/telephasic', array('sub' => 'nosidebar')) }}">{!! trans('laraveltemplates::language._NOSIDEBAR') !!}</a>
			</li>
		</ul>
	</nav>
</div>